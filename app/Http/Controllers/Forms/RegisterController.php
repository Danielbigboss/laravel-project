<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'profile' => 'required|image|mimes:png,jpg,jpeg,webp|max:5000000',
            'username' => 'required|string',
            'role' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string',
            'password' => 'required|confirmed|min:6'
        ]);
        if($validate->fails()){
            return response()->json([
                'status' => 400,
                'msg' => $validate->errors()->first()
            ]);
        }else{
            $user = new User;
            $user->name = $request->username;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->role = $request->role;
            $user->password = Hash::make($request->password);
            if($request->hasFile('profile')){
                $file = $request->file('profile');
                $ext = $file->getClientOriginalExtension();
                $filename = 'user_'.uniqid().'.'.$ext;
                $user->profile = $filename;
                $file->move('assets/users_profiles/', $filename);
            }
            $user->save();
            Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ]);
            return response()->json([
                'status' => 200,
                'msg' => 'Account Created successfully'
            ]);
        }
    }
}
