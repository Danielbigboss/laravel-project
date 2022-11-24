<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'msg' => $validator->errors()->first(),
            ]);
        }else{
            $checkemail = User::where('email', $request->email)->exists();
            if(! $checkemail){
                return response()->json([
                    'status' => 400,
                    'msg' => 'The Email Address you provided does not Exist!!!'
                ]);
            }else{
                if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                    return response()->json([
                        'status' => 400,
                        'msg' => 'Invalid Password'
                    ]);
                }else{
                    return response()->json([
                        'status' => 200,
                        'msg' => 'logging in'
                    ]);
                }
            }
        }
    }
}
