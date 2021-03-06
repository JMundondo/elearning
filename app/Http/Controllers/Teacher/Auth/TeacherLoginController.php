<?php


namespace App\Http\Controllers\Teacher\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Form;


use Illuminate\Foundation\Auth\ThrottlesLogins;

class TeacherLoginController extends Controller
{
   
private function loginFailed(){
    return redirect()
        ->back()
        ->withInput()
        ->with('error','Login failed, please try again!');
}
private function validator(Request $request)
{
    //validation rules.
    $rules = [
        'email'    => 'required|email|exists:teachers|min:5|max:191',
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
    
        if(Auth::guard('teacher')->attempt($request->only('email','password'),$request->filled('remember'))){
            //Authentication passed...
            return redirect()
                ->intended(route('teacher.dashboard'))
                ->with('status','You are Logged in as teacher!');
        }
         //Authentication failed...
    return $this->loginFailed();
        
    } 
    public function logout()
    {
    Auth::guard('teacher')->logout();
    return redirect()
        ->route('login')
        ->with('status','Teacher has been logged out!');
    }
   
    public function show(){
       $forms = Form::all();

        return view('dashboard.teacherdashboard', ['forms'=>$forms]);
    }
}



