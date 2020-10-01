<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\Post;

class FormController extends Controller
{
    public function form(Request $request, Form $form){

        $form_name = $form->name ;
        $posts = Post::whereFormName( $form_name)->get();

        return view('form.form', compact(['form', 'posts']));
    }
   
   

}