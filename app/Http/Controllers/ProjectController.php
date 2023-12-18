<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()){
            //check user is admin or not
            $role=Auth::user()->role;
            if($role=='1'|| $role=='2'){
                $projects = Project::latest()->paginate(5);
                return view('projects.index',compact('projects'))
                            ->with('i', (request()->input('page', 1) - 1) * 6);
            }
            else{
                return $this->guestView();
            }
        }
        else{
            //call the guest view
            return $this->guestView();
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::check()){
            //check user is admin or not
            $role=Auth::user()->role;
            if($role=='1'|| $role=='2'){
                return view('projects.create');
            }
            else{
                return $this->guestView();
            }
        }
        else{
            //call the guest view
            return $this->guestView();
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'type' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'detail' => 'required',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Extract and unset image inputs
        $images = [];
        
        for ($i = 1; $i <= 5; $i++) {
            $imageKey = 'image' . $i;
            if ($request->hasFile($imageKey)) {
                $image = $request->file($imageKey);
                $profileImage = date('YmdHis') . '_' . $imageKey . '.' . $image->getClientOriginalExtension();
                $request->file($imageKey)->move(public_path('uploads/project'), $profileImage);
                $images[$imageKey] = $profileImage;
                $request->merge([$imageKey => $profileImage]); // Merge image name back into request
            } else {
                // If the image is not provided, set a default value
                $images[$imageKey] = 'default_image.jpg'; // Replace with your default image filename
            }
        }

        $input = $request->all();
        $input = array_merge($input, $images); // Merge image names back into input

        Project::create($input);

        return redirect()->route('projects.index')
                        ->with('success', 'Project created successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        if(Auth::check()){
            //check user is admin or not
            $role=Auth::user()->role;
            if($role=='1'|| $role=='2'){
                return view('projects.show',compact('project'));
            }
            else{
                return $this->guestShow($project->id);
            }
        }
        else{
            //call the guest view
            return $this->guestShow($project->id);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        if(Auth::check()){
            //check user is admin or not
            $role=Auth::user()->role;
            if($role=='1'|| $role=='2'){
                return view('projects.edit',compact('project'));
            }
            else{
                return $this->guestShow($project->id);
            }
        }
        else{
            //call the guest view
            return $this->guestShow($project->id);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'type' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'detail' => 'required',
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Retrieve existing image paths
        $existingImages = [
            'image1' => $project->image1,
            'image2' => $project->image2,
            'image3' => $project->image3,
            'image4' => $project->image4,
            'image5' => $project->image5,
        ];

        // Process new images
        $images = [];
        for ($i = 1; $i <= 5; $i++) {
            $imageKey = 'image' . $i;
            if ($request->hasFile($imageKey)) {
                try {
                    // Delete old image if exists
                    if (!empty($existingImages[$imageKey])) {
                        Storage::delete('public/uploads/project/' . $existingImages[$imageKey]);
                    }

                    $image = $request->file($imageKey);
                    $imageName = date('YmdHis') . '_' . $imageKey . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/uploads/project', $imageName);
                    $images[$imageKey] = $imageName;
                } catch (\Exception $e) {
                    // Handle exception, such as logging the error
                }
            }
        }

        $input = $request->except(['image1', 'image2', 'image3', 'image4', 'image5']);
        $input = array_merge($input, $images); // Merge image names back into input

        // Update other fields
        $project->update($input);

        return redirect()->route('projects.index')
                        ->with('success', 'Project updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if(Auth::check()){
            //check user is admin or not
            $role=Auth::user()->role;
            if($role=='1'|| $role=='2'){
                $project->delete();
                return redirect()->route('projects.index')
                                ->with('success','project deleted successfully');
            }
            else{
                return $this->guestShow($project->id);
            }
        }
        else{
            //call the guest view
            return $this->guestShow($project->id);
        }
    }

    /* Guest view */
    public function guestView()
    {
        //return 2 section by type (Sashreeka_Maatha and Pavithra_Maatha)
        //type => Sashreeka_Maatha
        $projectsSM = Project::where('type', 'Sashreeka_Maatha')->latest()->paginate(5);
        //type => Pavithra Maatha
        $projectsPM = Project::where('type', 'Pavithra_Maatha')->latest()->paginate(5);
        return view('projects',compact('projectsSM','projectsPM'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    // Guest view
    public function guestShow($id)
    {
        $project = Project::findOrFail($id);
        return view('projectshow',compact('project'));
    }
}
