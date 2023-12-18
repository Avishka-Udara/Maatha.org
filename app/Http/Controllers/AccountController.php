<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = account::latest()->paginate(5);
        return view('accounts.index',compact('accounts'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        account::create($request->all());
        return redirect()->route('accounts.index')
                        ->with('success','account created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(account $account)
    {
        return view('accounts.show',compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(account $account)
    {
        //edit withing first 10 minutes
        if($account->created_at->diffInMinutes(now()) < 10){
            return view('accounts.edit',compact('account'));
        }
        else{
            return redirect()->route('accounts.index')
                        ->with('error','this can only be edited within 10 minutes of creation.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, account $account): RedirectResponse
    {
        $request->validate([
            'amount' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        $account->update($request->all());

        return redirect()->route('accounts.index')
                        ->with('success','account updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(account $account)
    {
        return redirect()->route('accounts.index')
                        ->with('success','account Deletion is not allowed');
    }

    //Accountability
    public function Accountability()
    {
        $accounts = account::latest()->paginate(5);
        return view('Accountability',compact('accounts'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function guestshow(account $account)
    {
        return view('accountsshow',compact('account'));
    }
}
