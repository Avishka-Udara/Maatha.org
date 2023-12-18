<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Official;

use Illuminate\Http\Request;

class OfficialsController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            //check user is admin or not
            $role=Auth::user()->role;
            if($role=='1'|| $role=='2'){
                $officials = Official::latest()->paginate(5);
                return view('officials.index',compact('officials'))
                            ->with('i', (request()->input('page', 1) - 1) * 6);
            }
            else{
                //return 403
                return abort(403);
            }
        }
        else{
            //return 403
            return abort(403);
        }
    }
    //create function to show the form
    public function create()
    {
        if(Auth::check()){
            //check user is admin or not
            $role=Auth::user()->role;
            if($role=='1'|| $role=='2'){
                return view('officials.create');
            }
            else{
                //return 403
                return abort(403);
            }
        }
        else{
            //return 403
            return abort(403);
        }
    }
    //create function to store the data
    public function store(Request $request)
    {
        $official = new Official([
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'sex' => $request->input('') ,
            'date_of_birth' => $request->input(''),
            'national_id_number' => $request->input(''),
            'address' => $request->input(''),
            'telephone' => $request->input(''),
            'whatsapp_number' => $request->input(''),
            'email' => $request->input(''),
            'school' => $request->input(''),
            'company' => $request->input(''),
            'designation' => $request->input(''),
            'special_abilities' => $request->input(''),
            'overseas_employment_plan' => $request->input(''),
            'service_to_society' => $request->input(''),
            'personal_life_vision' => $request->input(''),
            'political_involvement' => $request->input(''),
            'photo' => $request->input(''),
            // Add more fields as needed
        ]);

        $officialData = $request->all();

        // Handle file upload for the photo
        if ($request->hasFile('photo')) {
            $photoFileName = time() . '.' . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('uploads/officials'), $photoFileName);
            $officialData['photo'] = $photoFileName;
        }

        $official = new Official($officialData);
        // Associate the official with the main record
        $mdsId = $request->input('mds_id');
        $official->mds_id = $mdsId;
        $official->save();

        return redirect()->route('mdss.edit', $mdsId)->with('success', 'Official created successfully.');
    }
}
