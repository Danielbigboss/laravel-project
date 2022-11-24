<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AdminMail;
use App\Mail\SubcribeMail;
use App\Models\Seconduser;
use App\Models\Sociallinks;
use App\Models\Subcriber;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AdminformsController extends Controller
{
    public function sociallinks(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'phone' => 'required',
            'email' => 'required|email',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
        ]);
        if($validate->fails()){
            return response()->json([
                'status' => 400,
                'msg' => $validate->errors()->first(),
            ]);
        }else{
            $links = Sociallinks::findOrFail($request->id);
            $links->phone = $request->phone;
            $links->email = $request->email;
            $links->facebook = $request->facebook;
            $links->twitter = $request->twitter;
            $links->instagram = $request->instagram;
            $links->linkedin = $request->linkedin;

            $links->save();
            return response()->json([
                'status' => 200,
                'msg' => 'success',
            ]);
        }

    }

    public function email(Request $request)
    {
        $validate = Validator::make($request->all(), [
                'username' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6'
        ]);
        if($validate->fails()){
            return response()->json([
                'status' => 400,
                'msg' => $validate->errors()->first(),
            ]);
        }else{
            // $second = new Seconduser;
            // $second->username = $request->username;
            // $second->phone = $request->phone;
            // $second->email = $request->email;
            // $second->password = $request->password;

            $details = [
                'username' => $request->username,
                'phone' => $request->phone,
                'password' => $request->password
            ];

            Mail::to($request->email)->send(new AdminMail($details));
            return response()->json([
                'status' => 200,
                'msg' => 'success',
            ]);
        }
    }
    public function subcribers(Request $request){
        $validate = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);
        if($validate->fails()){
            return response()->json([
                'status' => 400,
                'msg' => $validate->errors()->first()
            ]);
        }else{
            $insert = new Subcriber;
            $insert->email = $request->email;
            $details = [
                'email' => $request->email,
            ];

            Mail::to($request->email)->send(new SubcribeMail($details));
            $insert->save();
            return response()->json([
                'status' => 200,
                'msg' => $request->email

            ]);
        }
    }
}
