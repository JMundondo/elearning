<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TeacherLoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

       /** 
        * if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        */ 
        if (Auth::guard('teacher')->attempt($credentials)) {

            return redirect()->intended('/login/teacher/dashboard');
        }
        
    }
    public function show(){

        return view('dashboard.teacherdashboard');
    }
}
