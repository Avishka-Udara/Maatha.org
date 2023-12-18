<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $term = $request->input('term'); 

        $query = News::query();

        if ($term) {
            $query->where('detail', 'LIKE', '%' . $term . '%')
                    ->orWhere('title', 'LIKE', '%' . $term . '%');
        }

        $news = $query->paginate(10);

        if(auth()->user()){
            //filter only managers and admins
            if (auth()->user()->role == 1 || auth()->user()->role == 2) {

                $news = News::latest()->paginate(3);

                return view('news.index',compact('news', 'term')) 
                    ->with('i', (request()->input('page', 1) - 1) * 3);
            }
            else
            {
                $news = News::latest()->paginate(5);
                    return view('news.all',compact('news', 'term'))
                                ->with('i', (request()->input('page', 1) - 1) * 6);
            }
        }
        else
        {
            $news = News::latest()->paginate(5);
                return view('news.all',compact('news', 'term'))
                            ->with('i', (request()->input('page', 1) - 1) * 6);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/news/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        News::create($input);

        return redirect()->route('news.index')
                        ->with('success','news created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        if (auth()->user()) {
            //filter only managers and admins
            if (auth()->user()->role == 1 || auth()->user()->role == 2) {
                return view('news.show',compact('news'));
            } else {
                return view('news.guestshow',compact('news'));
            }
        } else {
            return view('news.guestshow',compact('news'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required'
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            // Delete the existing image
            if (file_exists(public_path('images/news/' . $news->image))) {
                unlink(public_path('images/news/' . $news->image));
            }
    
            // Upload the new image
            $destinationPath = 'images/news/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }
    
        $news->update($input);
    
        return redirect()->route('news.index')
            ->with('success', 'News updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')
                        ->with('success','news deleted successfully');
    }

    public function all(Request $request)
    {
        $term = $request->input('term'); 

        $query = News::query();

        if ($term) {
            $query->where('title', 'LIKE', '%' . $term . '%')
                    ->orWhere('detail', 'LIKE', '%' . $term . '%');
        }

        $news = $query->paginate(10);

        if (auth()->user()) {
            //filter only managers and admins
            if (auth()->user()->role == 1 || auth()->user()->role == 2) {
                return view('news.index', compact('news', 'term'))
                    ->with('i', (request()->input('page', 1) - 1) * 10);
            } else {
                return view('news.all', compact('news', 'term'))
                    ->with('i', (request()->input('page', 1) - 1) * 10);
            }
        } else {
            return view('news.all', compact('news', 'term'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
        }
    }
}
