<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Student;
use App\Form;
use Illuminate\Support\Facades\DB;

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
        
        
     $name =  $request->class;
    
      
    
    //$form = Form::where('name', 'LIKE', "%{$form_name}%") ->first();
    //$form = Form::where('name',$name) ->first();
   // $model_name = 'App\Form';
    //$form = $model_name::where('name', $name)->first();
    $form =  Form::whereName( $name)->first();
    $student= new Student([
    'name' => $request->name,
    'form_name' => $request->class,
    'email' => $request->email,
    'password' => Hash::make($request->password),]);

     $form->students()->save($student);
  
   // dd($form);

    /** $student = $form->students()->create([
        'name' => $request->name,
        'form_name' => $request->class,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        

      ]); 
    */  
       
      
       return redirect()->route('login');   
    }
    
}
