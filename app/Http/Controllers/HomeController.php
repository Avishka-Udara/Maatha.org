<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Announcement;
use App\Models\mds;
use App\Models\account;
use App\Models\Sponsor;
use App\Models\News;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        //get users
        $users=User::all();
        //check if login or not
        if(Auth::check()){
            $role=Auth::user()->role;
            if($role=='0')
            {
                return redirect()->route('welcome');
            }
            elseif($role=='1')
            {
                $users=User::all();
                $usersCount=count($users);

                $announcements=Announcement::all();
                $announcementCounts=count($announcements);

                //count the number of mds
                $mds=mds::all();
                $mdsCount=count($mds);

                //count the number of accounts
                $accounts=account::all();
                $accountsCount=count($accounts);

                //sponsor count
                $sponsors=Sponsor::all();
                $sponsorsCount=count($sponsors);

                $news=News::all();
                $newsCount=count($news);

                //project count of type='sashrika_matha'
                $sashrika_matha=Project::where('type','Sashreeka_Maatha')->get();
                $sashrika_mathaCount=count($sashrika_matha);

                $Pavithra_Maatha=Project::where('type','Pavithra_Maatha')->get();
                $Pavithra_MaathaCount=count($Pavithra_Maatha);

                return view('admin/dashboard',compact('usersCount','announcementCounts','mdsCount','accountsCount', 'sponsorsCount', 'newsCount', 'sashrika_mathaCount', 'Pavithra_MaathaCount'));
            }
            elseif($role=='2') 
            {
                //user count
                //return number of users,number of announcements
                $users=User::all();
                $announcements=Announcement::all();
                //count number of users without admin users witch userrole=1
                $usersCount=count($users)-1;
                $announcementCounts=count($announcements);

                //count the number of mds
                $mds=mds::all();
                $mdsCount=count($mds);

                //count the number of accounts
                $accounts=account::all();
                $accountsCount=count($accounts);

                //sponsor count
                $sponsors=Sponsor::all();
                $sponsorsCount=count($sponsors);

                $news=News::all();
                $newsCount=count($news);

                //project count of type='sashrika_matha'
                $sashrika_matha=Project::where('type','Sashreeka_Maatha')->get();
                $sashrika_mathaCount=count($sashrika_matha);

                $Pavithra_Maatha=Project::where('type','Pavithra_Maatha')->get();
                $Pavithra_MaathaCount=count($Pavithra_Maatha);
                
                return view('manager/dashboard',compact('usersCount','announcementCounts','mdsCount','accountsCount', 'sponsorsCount', 'newsCount', 'sashrika_mathaCount', 'Pavithra_MaathaCount'));


            }
            elseif($role=='3')
            {
                return view('mentor/dashboard');
            }
        }
        else
            {
                //rederect to loging page with message
                return redirect()->route('login')->with('error','You are not logged in');
            }


    }
}
