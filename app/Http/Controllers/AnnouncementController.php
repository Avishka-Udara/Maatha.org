<?php
namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(Request $request): View
    {   
        $term = $request->input('term'); 

        $query = Announcement::query();

        if ($term) {
            $query->where('detail', 'LIKE', '%' . $term . '%')
                    ->orWhere('title', 'LIKE', '%' . $term . '%');
        }

        $Announcements = $query->paginate(10);
        
        if(auth()->user()){

            //filter only managers and admins
            if (auth()->user()->role == 1 || auth()->user()->role == 2) {
                return view('Announcements.index', compact('Announcements', 'term'))
                    ->with('i', (request()->input('page', 1) - 1) * 10);
            }
            else
            {
                return view('Announcements.all', compact('Announcements', 'term'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
            } 
        }
        else
        {
            return view('Announcements.all', compact('Announcements', 'term'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
        }
    }



    /**

     * Show the form for creating a new resource.

     */

    public function create(): View

    {
        if(auth()->user()){
            if (auth()->user()->role == 1 || auth()->user()->role == 2) {
            return view('Announcements.create');
            }
            else
            {
                return redirect()->route('welcome')
                            ->with('error','You are not authorized to view this page');
            }
        }
        else
        {
            abort(403, 'Unauthorized action.');
        }
    }



    /**

     * Store a newly created resource in storage.

     */

    public function store(Request $request): RedirectResponse

    {

        $request->validate([

            'title' => 'required|max:350',
            'detail' => 'required',
            'language' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);



        $input = $request->all();



        if ($image = $request->file('image')) {

            $destinationPath = 'images/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }



        Announcement::create($input);



        return redirect()->route('Announcements.index')

                        ->with('success','Announcement created successfully.');

    }



    /**

     * Display the specified resource.

     */

    public function show(Announcement $Announcement): View
    {
        //check user is loging or not
        if (auth()->user()) {
            if (auth()->user()->role == 1 || auth()->user()->role == 2) {
                return view('Announcements.show',compact('Announcement'));
                }
                else
                {
                    return view('Announcements.viewannouncement',compact('Announcement'));
                }
        }
        else
        {
            return view('Announcements.viewannouncement',compact('Announcement'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $Announcement): View
    {
        if (auth()->user()->role == 1 || auth()->user()->role == 2) {
        return view('Announcements.edit',compact('Announcement'));
        }
        else
        {
            return redirect()->route('welcome')
                        ->with('error','You are not authorized to view this page');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $Announcement): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'language' => 'required',
            'detail' => 'required'
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        $Announcement->update($input);
        return redirect()->route('Announcements.index')
                        ->with('success','Announcement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        if (!auth()->user()) {
            return redirect()->route('welcome')->with('error', 'You are not authorized to view this page');
        }
        if (!auth()->user()->role == 1 || !auth()->user()->role == 2) {
            return redirect()->route('welcome')->with('error', 'You are not authorized to view this page');
        }

        if (auth()->user()->role == 1 || auth()->user()->role == 2) {
            $Announcement = Announcement::find($id);

            if (!$Announcement) {
                return redirect()->route('Announcements.index')->with('error', 'Announcement not found');
            }

            // Delete the associated image file
            if ($Announcement->image) {
                $imagePath = public_path('images/' . $Announcement->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Delete the sponsor record
            $Announcement->delete();

            return redirect()->route('Announcements.index')->with('success', 'Sponsor deleted successfully');
        }
        else
        {
            return redirect()->route('welcome')
                        ->with('error','You are not authorized to view this page');
        }
    }


}
