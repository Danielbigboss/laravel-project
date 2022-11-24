<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subcriber;
use App\Models\User;
use Illuminate\Http\Request;

class AdminspagesController extends Controller
{
    public function admindashboard(){
        $user = User::latest()->get();
        $subscribers = Subcriber::latest()->get();
        if(auth()->user()->role == 'admin'){

            return view('pages.users.admin.dashboard', [
                'users' => $user,
                'subs' => $subscribers,
            ]);
        }else{
            return redirect('/');
        }
    }
    public function sociallinks()
    {
        if(auth()->user()->role == 'admin'){
            return view('pages.users.admin.sociallinks');
        }else{
            return redirect('/');
        }
    }

    public function people(){
        if(auth()->user()->role == 'admin'){
            $users = User::latest()->paginate(20);
            $userscount = User::latest()->get();
            return view('pages.users.admin.people', [
                'allusers' => $users,
                'alluserscount' => $userscount,

            ]);
        }else{
            return redirect('/');
        }
    }
    public function adminbooking(){
        if(auth()->user()->role == 'admin'){
            return view('pages.users.admin.booking');
        }else{
          return  redirect('/');
        }
    }
    public function viewsub(){
        $count = Subcriber::latest();
        $sub = Subcriber::orderBy('id', 'DESC')->paginate(4);
        if(auth()->user()->role == 'admin'){
            return view('pages.users.admin.subcribers', [
                'subscribers' => $sub,
                'count' => $count
            ]);
        }else{
            return redirect('/');
        }
    }
}
