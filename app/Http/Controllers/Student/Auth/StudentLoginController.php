<?php

namespace App\Http\Controllers\Student\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    protected function index()
    {
        return view('auth.login');
        
    }
    Private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }
    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:students|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];
    
        //custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];
    
        //validate the request.
        $request->validate($rules,$messages);
    }
    
    
        public function authenticate(Request $request)
        {
           
            $this->validator($request);
        
            if(Auth::guard('student')->attempt($request->only('email','password'),$request->filled('remember'))){
                //Authentication passed...
                return redirect()
                    ->intended(route('student.dashboard'))
                    ->with('status','You are Logged in as student!');
            }
             //Authentication failed...
        return $this->loginFailed();
            
        } 
        public function logout()
        {
        Auth::guard('student')->logout();
        return redirect()
            ->route('login')
            ->with('status','Teacher has been logged out!');
        }
       







   /** public function authenticate(Request $request )
    {
        $credentials = $request->only('email', 'password');

       /**  if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        if (Auth::guard('student')->attempt($credentials)) {

            return redirect()->intended('/login/student/dashboard');
        } */ 
        
        
    }

