<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        //send a announcements
        $announcements = \App\Models\Announcement::orderBy('created_at', 'desc')->take(4)->get();
        //send a sponsors
        $sponsors = \App\Models\Sponsor::orderBy('created_at', 'desc')->get();
        $news = \App\Models\News::orderBy('created_at', 'desc')->take(3)->get();
        return view('welcome', compact('announcements','sponsors','news'));
    }

}
