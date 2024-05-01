<?php

 namespace App\Http\Controllers;


use App\Models\Login;
use App\Models\Registration;
use Illuminate\Support\Facades\Validator;
use NoCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(){

        return view("erms.login");
    }
    public function adminlogin(){

        return view("erms.adminlogin");
    }


    public function addlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            
            return response()->json(['success' => false, 'message' => $validator->errors()->first(), 'input' => $request->all()], 422);
        }

        $user = Registration::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                session()->put('username', $user->email);
               
                return response()->json(['success' => true, 'message' => 'Login Successful'], 200);
            } else {
               
                return response()->json(['success' => false, 'message' => 'Invalid credentials.'], 422);
            }
        } else {
            
            return response()->json(['success' => false, 'message' => 'Invalid credentials.'], 422);
        }
    }
    public function addadminlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
           
            return response()->json(['success' => false, 'message' => $validator->errors()->first(), 'input' => $request->all()], 422);
        }

        $user = Registration::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                session()->put('username', $user->email);
                
                return response()->json(['success' => true, 'message' => 'Login Successful'], 200);
            } else {
               
                return response()->json(['success' => false, 'message' => 'Invalid credentials.'], 422);
            }
        } else {
            
            return response()->json(['success' => false, 'message' => 'Invalid credentials.'], 422);
        }
    }
}