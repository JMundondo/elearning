<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    protected function index()
    {
        return view('auth.login');
        
    }







    public function authenticate(Request $request )
    {
        $credentials = $request->only('email', 'password');

       /**  if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }*/
        if (Auth::guard('student')->attempt($credentials)) {

            return redirect()->intended('/login/student/dashboard');
        }
        
        
    }
}
