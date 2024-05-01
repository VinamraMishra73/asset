<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegistrationController extends Controller
{
    public function registration(){

        return view("erms.registererms");
    }
   
    public function addregistration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()], 422);
        }

        $post = new Registration;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->password = Hash::make($request->password);
        $post->save();

        return response()->json(['success' => true, 'message' => 'Account successfully registered.'], 200);
    }

    public function addlogin(Request $request)
    {
        return redirect()->route('login')->with('success', 'You have successfully registered.');
    }
}



    





