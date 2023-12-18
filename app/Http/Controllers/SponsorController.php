<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sponsors = Sponsor::latest()->paginate(5);
        return view('oursponsors.index',compact('sponsors'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('oursponsors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $input = $request->all();
        if ($logo = $request->file('logo')) {
            $destinationPath = 'sponsors/';
            $logoName = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $logoName);
            $input['logo'] = "$logoName";
        }
        Sponsor::create($input);
        return redirect()->route('oursponsors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sponsor $sponsor)
    {
        return view('oursponsors.show',compact('sponsor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sponsor $sponsor)
    {
        return view('oursponsors.edit',compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        $input = $request->all();

        if ($logo = $request->file('logo')) {
            $destinationPath = 'sponsors/';
            $profilelogo = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $profilelogo);
            $input['logo'] = "$profilelogo";
        }else{
            unset($input['logo']);
        }

        $sponsor->update($input);
        return redirect()->route('oursponsors.index')
                        ->with('success','sponsor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $sponsor = Sponsor::find($id);

        if (!$sponsor) {
            return redirect()->route('oursponsors.index')->with('error', 'Sponsor not found');
        }

        // Delete the associated image file
        if ($sponsor->logo) {
            $imagePath = public_path('sponsors/' . $sponsor->logo);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the sponsor record
        $sponsor->delete();

        return redirect()->route('oursponsors.index')->with('success', 'Sponsor deleted successfully');
    }

}
