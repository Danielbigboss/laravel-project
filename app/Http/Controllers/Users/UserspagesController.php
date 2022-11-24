<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserspagesController extends Controller
{

    public function index(){
      if(auth()->user()->role == 'admin'){
        return redirect('/admindashboard');
      }else{
        return view('pages.users.others.usersdashboard');
      }
    }
}
