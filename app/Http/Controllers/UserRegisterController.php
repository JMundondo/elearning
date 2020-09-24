<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Student;
use App\Form;

use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    //register new stundent users 
    protected function validator(array $data)

    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'class' => ['required', 'string', 'max:255'],
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
    protected function createStudent(Request $request)

    {
        
        
        $form_id = 0;
        $form_id++;

    
        
        
        
        
        
        $form = Form::create([

        'name' => $request->class,
    ]);
       
        $student = Student::create([
            'name' => $request->name,
            'form_name' => $request->class,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'form_id'=> $form_id,
        ]);

        
       // $methods = Student::all();
        $showFormName = Form::Where('name','LiKE',"%{form3}%")
        ->with('students')->get();
        dd($showFormName);


       // dd($methods);
    
    }
    
}
