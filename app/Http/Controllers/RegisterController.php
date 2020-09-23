<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Student;
use App\Teacher;


use Illuminate\Http\Request;

class RegisterController extends Controller
{   protected function index()
    {
        return view('auth.register');
        
    }
   
    
    
     protected function validator(array $data)

    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'subjects' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    
    protected function createTeacher(Request $request)
    {
       
        
        
     return Teacher::create([
            'name' => $request->name,
            'subjects' => $request->subjects,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $methods = Teacher::all();
           dd($methods);
     }
    
}



