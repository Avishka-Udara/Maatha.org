<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(Auth::check()){
            if (auth()->user()->role == 2 || auth()->user()->role == 1) {
                $term = $request->input('term');
                $usersQuery = User::query();

                if (!empty($term)) {
                    // If search term is provided, filter users based on the search term

                    if (auth()->user()->role == 2) { //search resualt for managers
                        $users = User::where(function ($query) use ($term) {
                            $query->where('name', 'like', '%' . $term . '%')
                                ->orWhere('email', 'like', '%' . $term . '%');
                            // Add more columns if you want to search in additional fields
                        })
                        ->where('role', 'not like', '1') // Add the condition for role not like 1
                        ->latest()
                        ->paginate(5);

                    }else{ // search resualt for admins
                        $users = User::where(function ($query) use ($term) {
                            $query->where('name', 'like', '%' . $term . '%')
                                ->orWhere('email', 'like', '%' . $term . '%');
                            // Add more columns if you want to search in additional fields
                        })->latest()->paginate(5);
                    }

                } else {
                    if (auth()->user()->role == 2) { //show all data for managers
                        $users = User::where('role', 'not like', '1') // Add the condition for role not like 1
                        ->latest()
                        ->paginate(5);
                    // If no search term, retrieve all users
                    }else{ //show all data for admins
                        $users = User::latest()->paginate(5);
                    }
                }
                return view('users.index',compact('users'));

            }elseif (auth()->user()->role == 3) {
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->route('dashboard');
            }
        } else {
            return redirect()->route('welcome');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        if(auth()->user()){
        return view('users.create');
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
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            //'password' => 'required',

        ]);

        // Generate a random temporary password
        $temporaryPassword = Str::random(10);
        $request['password'] = $temporaryPassword;
        //$request['password'] = bcrypt($temporaryPassword);

        User::create($request->all());

        //encrypt password
        //$request['password']=bcrypt($request['password']);
        //User::create($request->all());

        return redirect()->route('users.index')
                        ->with('success','user created successfully.Temporary password: ' . $temporaryPassword);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): View
    {
        if(auth()->user()){
        return view('users.show',compact('user'));
        }
        else
        {
            abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        if(auth()->user()){
        return view('users.edit',compact('user'));
        }
        else
        {
            abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $user->update($request->all());
        return redirect()->route('users.index')
                        ->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('users.index')
                        ->with('success','user deleted successfully');
    }

    /**
     * create mentor
     */
    public function createMentor(): View
    {
        return view('users.mentorregister');
    }
    /**
     * store mentor
     */
    public function storeMentor(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'profession' => 'required',
            'profile' => 'required',
            'strengths' => 'required',
        ]);

        $mentorData = $request->all();
        $mentorData['role'] = 3; // Set the role to 3 for mentors

        User::create($mentorData);
        //return to login page
        return redirect()->route('welcome')
                        ->with('status','Mentor created successfully. Please login to continue.');

    }
}
