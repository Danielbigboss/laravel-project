<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sociallinks;
use App\Models\User;
use Illuminate\Http\Request;

class AdminGetController extends Controller
{
    public function getsociallinks()
    {
        $social = Sociallinks::first();
        return response()->json([
            'status' => 200,
            'msg' => $social,
        ]);
    }
    public function getallusers(){
        $users = User::where('role', 'tailor')->where('role', 'users')->latest()->paginate(10);
        if($users->count() > 0){
            return response()->json([
                'status' => 200,
                'msg' => $users
            ]);
        }else{
            return response()->json([
                'status' => 400,
                'msg' => 'no users yet'
            ]);
        }
    }
}
