<?php

namespace App\Http\Controllers;

use App\Models\mds;
use Illuminate\Http\Request;

class MDSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $term = $request->input('term'); 

        $query = Mds::query();

        if ($term) {
            $query->where('District', 'LIKE', '%' . $term . '%')
                    ->orWhere('Divisional_Secretariat', 'LIKE', '%' . $term . '%')
                    ->orWhere('Grama_Niladhari_Division', 'LIKE', '%' . $term . '%')
                    ->orWhere('Grama_Niladhari_Division_Number', 'LIKE', '%' . $term . '%')
                    ->orWhere('Village', 'LIKE', '%' . $term . '%')
                    ->orWhere('Office_Address', 'LIKE', '%' . $term . '%')
                    ->orWhere('Contact_person', 'LIKE', '%' . $term . '%')
                    ->orWhere('Contact_number', 'LIKE', '%' . $term . '%')
                    // Add more fields to search here
                    ->orWhere('Contact_person', 'LIKE', '%' . $term . '%');
        }

        $mdss = $query->paginate(10);

        if (auth()->user()) {
            //filter only managers and admins
            if (auth()->user()->role == 1 || auth()->user()->role == 2) {
                return view('mdss.index', compact('mdss', 'term'))
                    ->with('i', (request()->input('page', 1) - 1) * 10);
            } else {
                abort(403, 'Unauthorized action.');
            }
        } else {
            return view('mds', compact('mdss', 'term'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mdss.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'District' => 'required',
            'Divisional_Secretariat' => 'required',
            'Grama_Niladhari_Division' => 'required',
            'Grama_Niladhari_Division_Number' => 'required',
            'Village' => 'required',
            'Office_Address' => 'required',
            'Contact_person' => 'required',
            'Position' => 'required',
            'Contact_number' => 'required',
            'WhatsApp_number' => 'required',
            'Religious_Authority' => 'required|mimes:pdf,xlx,csv|max:2048', //file
            'Grama_Niladhari' => 'required|mimes:pdf,xlx,csv|max:2048', //file
            'Minutes_with_members_signature_list' => 'required|mimes:pdf,xlx,csv|max:2048', //file
            'Prioritized_project_proposal' => 'required|mimes:pdf,xlx,csv|max:2048', //file
            'President' => 'required',
            'Secretory' => 'required',
            'Treasurer' => 'required',
            'Assistant_treasurer' => 'required',
            'Agriculture_Coordinator' => 'required',
            'Vocational_Training_and_Entrepreneurship_Coordinator' => 'required',
            'English_language_and_Education_Coordinator' => 'required',
            'mitcordinator' => 'required',
            'Entertainment_and_Reconciliation_Coordinator' => 'required',
            'Health_Promotion_Coordinator' => 'required',
            'Women_affaires_and_child_development_Coordinator' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6144',
        ]);

                // Handle file uploads
                $RAfileName = '';
                $GNfileName = '';
                $MMfileName = '';
                $PPfileName = '';

                if ($request->hasFile('Religious_Authority')) {
                    $RAfileName = time().'.'.$request->file('Religious_Authority')->extension();
                    $request->file('Religious_Authority')->move(public_path('uploads/mdsra'), $RAfileName);
                }

                if ($request->hasFile('Grama_Niladhari')) {
                    $GNfileName = time().'.'.$request->file('Grama_Niladhari')->extension();
                    $request->file('Grama_Niladhari')->move(public_path('uploads/mdsgn'), $GNfileName);
                }

                if ($request->hasFile('Minutes_with_members_signature_list')) {
                    $MMfileName = time().'.'.$request->file('Minutes_with_members_signature_list')->extension();
                    $request->file('Minutes_with_members_signature_list')->move(public_path('uploads/mdsmm'), $MMfileName);
                }

                if ($request->hasFile('Prioritized_project_proposal')) {
                    $PPfileName = time().'.'.$request->file('Prioritized_project_proposal')->extension();
                    $request->file('Prioritized_project_proposal')->move(public_path('uploads/mdspp'), $PPfileName);
                }

                $input = $request->all();

                if ($image = $request->file('image')) {
                    $destinationPath = 'images/';
                    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $profileImage);
                    $input['image'] = $profileImage;
                }

                // Update the filenames in the $input array if necessary
                $input['Religious_Authority'] = $RAfileName;
                $input['Grama_Niladhari'] = $GNfileName;
                $input['Minutes_with_members_signature_list'] = $MMfileName;
                $input['Prioritized_project_proposal'] = $PPfileName;

        mds::create($input);
        return redirect()->route('mdss.index')
                        ->with('success','mds created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mds = Mds::findOrFail($id); // Replace 'Mds' with your actual model name
        return view('mdss.show', compact('mds'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mds $mds)
    {
        return view('mdss.edit',compact('mds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mds $mds)
    {
        $request->validate([
            'District' => 'required',
            'Divisional_Secretariat' => 'required',
            'Grama_Niladhari_Division' => 'required',
            'Grama_Niladhari_Division_Number' => 'required',
            'Village' => 'required',
            'Office_Address' => 'required',
            'Contact_person' => 'required',
            'Position' => 'required',
            'Contact_number' => 'required',
            'WhatsApp_number' => 'required',
            'Religious_Authority' => 'required|mimes:pdf,jpg,jpeg,png,docx,xlx,csv|max:2048', //file
            'Grama_Niladhari' => 'required|mimes:pdf,jpg,jpeg,png,docx,xlx,csv|max:2048', //file
            'Minutes_with_members_signature_list' => 'required|mimes:pdf,jpg,jpeg,png,docx,xlx,csv|max:2048', //file
            'Prioritized_project_proposal' => 'required|mimes:pdf,jpg,jpeg,png,docx,xlx,csv|max:2048', //file
            'President' => 'required',
            'Secretory' => 'required',
            'Treasurer' => 'required',
            'Assistant_treasurer' => 'required',
            'Agriculture_Coordinator' => 'required',
            'Vocational_Training_and_Entrepreneurship_Coordinator' => 'required',
            'English_language_and_Education_Coordinator' => 'required',
            'mitcordinator' => 'required',
            'Entertainment_and_Reconciliation_Coordinator' => 'required',
            'Health_Promotion_Coordinator' => 'required',
            'Women_affaires_and_child_development_Coordinator' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6144',
        ]);

        // Handle file uploads
        $RAfileName = '';
        $GNfileName = '';
        $MMfileName = '';
        $PPfileName = '';

        if ($request->hasFile('Religious_Authority')) {
            $RAfileName = time().'.'.$request->file('Religious_Authority')->extension();
            $request->file('Religious_Authority')->move(public_path('uploads/mdsra'), $RAfileName);
        }

        if ($request->hasFile('Grama_Niladhari')) {
            $GNfileName = time().'.'.$request->file('Grama_Niladhari')->extension();
            $request->file('Grama_Niladhari')->move(public_path('uploads/mdsgn'), $GNfileName);
        }

        if ($request->hasFile('Minutes_with_members_signature_list')) {
            $MMfileName = time().'.'.$request->file('Minutes_with_members_signature_list')->extension();
            $request->file('Minutes_with_members_signature_list')->move(public_path('uploads/mdsmm'), $MMfileName);
        }

        if ($request->hasFile('Prioritized_project_proposal')) {
            $PPfileName = time().'.'.$request->file('Prioritized_project_proposal')->extension();
            $request->file('Prioritized_project_proposal')->move(public_path('uploads/mdspp'), $PPfileName);
        }

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }

        // Update the filenames in the $input array if necessary
        $input['Religious_Authority'] = $RAfileName;
        $input['Grama_Niladhari'] = $GNfileName;
        $input['Minutes_with_members_signature_list'] = $MMfileName;
        $input['Prioritized_project_proposal'] = $PPfileName;

        $mds->update($input);

        return redirect()->route('mdss.index')->with('success', 'mds updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mds = mds::find( $id );
        $mds->delete();
        return redirect()->route('mdss.index')
                        ->with('success', 'mds deleted successfully');
    }

    public function guestView(Request $request){
        $term = $request->input('term');

        $query = Mds::latest(); // Use the latest scope

        if ($term) {
            $query->where('District', 'LIKE', '%' . $term . '%')
                    ->orWhere('Divisional_Secretariat', 'LIKE', '%' . $term . '%')
                    ->orWhere('Grama_Niladhari_Division', 'LIKE', '%' . $term . '%')
                    ->orWhere('Grama_Niladhari_Division_Number', 'LIKE', '%' . $term . '%')
                    ->orWhere('Village', 'LIKE', '%' . $term . '%')
                    ->orWhere('Office_Address', 'LIKE', '%' . $term . '%')
                    ->orWhere('Contact_person', 'LIKE', '%' . $term . '%')
                    ->orWhere('Contact_number', 'LIKE', '%' . $term . '%')
                    // Add more fields to search here
                    ->orWhere('Contact_person', 'LIKE', '%' . $term . '%');
        }

        $mdss = $query->paginate(10);

        return view('mds', compact('mdss', 'term'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    //guestShow
    public function guestShow($id)
    {
        $mds = Mds::findOrFail($id); // Replace 'Mds' with your actual model name
        return view('mdsShow', compact('mds'));
    }
    //create guest create name : formmds
    public function guestCreate()
    {
        return view('formmds');
    }

    //guest store
    public function guestStore(Request $request)
    {

        $request->validate([
            'District' => 'required',
            'Divisional_Secretariat' => 'required',
            'Grama_Niladhari_Division' => 'required',
            'Grama_Niladhari_Division_Number' => 'required',
            'Village' => 'required',
            'Office_Address' => 'required',
            'Contact_person' => 'required',
            'Position' => 'required',
            'Contact_number' => 'required',
            'WhatsApp_number' => 'required',
            'Religious_Authority' => 'required|mimes:pdf,xlx,csv|max:2048', //file
            'Grama_Niladhari' => 'required|mimes:pdf,xlx,csv|max:2048', //file
            'Minutes_with_members_signature_list' => 'required|mimes:pdf,xlx,csv|max:2048', //file
            'Prioritized_project_proposal' => 'required|mimes:pdf,xlx,csv|max:2048', //file
            'President' => 'required',
            'Secretory' => 'required',
            'Treasurer' => 'required',
            'Assistant_treasurer' => 'required',
            'Agriculture_Coordinator' => 'required',
            'Vocational_Training_and_Entrepreneurship_Coordinator' => 'required',
            'English_language_and_Education_Coordinator' => 'required',
            'mitcordinator' => 'required',
            'Entertainment_and_Reconciliation_Coordinator' => 'required',
            'Health_Promotion_Coordinator' => 'required',
            'Women_affaires_and_child_development_Coordinator' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6144',
        ]);

                // Handle file uploads
                $RAfileName = '';
                $GNfileName = '';
                $MMfileName = '';
                $PPfileName = '';

                if ($request->hasFile('Religious_Authority')) {
                    $RAfileName = time().'.'.$request->file('Religious_Authority')->extension();
                    $request->file('Religious_Authority')->move(public_path('uploads/mdsra'), $RAfileName);
                }

                if ($request->hasFile('Grama_Niladhari')) {
                    $GNfileName = time().'.'.$request->file('Grama_Niladhari')->extension();
                    $request->file('Grama_Niladhari')->move(public_path('uploads/mdsgn'), $GNfileName);
                }

                if ($request->hasFile('Minutes_with_members_signature_list')) {
                    $MMfileName = time().'.'.$request->file('Minutes_with_members_signature_list')->extension();
                    $request->file('Minutes_with_members_signature_list')->move(public_path('uploads/mdsmm'), $MMfileName);
                }

                if ($request->hasFile('Prioritized_project_proposal')) {
                    $PPfileName = time().'.'.$request->file('Prioritized_project_proposal')->extension();
                    $request->file('Prioritized_project_proposal')->move(public_path('uploads/mdspp'), $PPfileName);
                }

                $input = $request->all();

                if ($image = $request->file('image')) {
                    $destinationPath = 'images/';
                    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $profileImage);
                    $input['image'] = $profileImage;
                }

                // Update the filenames in the $input array if necessary
                $input['Religious_Authority'] = $RAfileName;
                $input['Grama_Niladhari'] = $GNfileName;
                $input['Minutes_with_members_signature_list'] = $MMfileName;
                $input['Prioritized_project_proposal'] = $PPfileName;

        mds::create($input);

        return view('mds', compact('mdss', 'term'))
        ->with('i', (request()->input('page', 1) - 1) * 10)->with('success','mds created successfully.');
    }
}
