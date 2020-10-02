<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Form;
use App\Post;

class FormController extends Controller
{
    public function form(Request $request, Form $form){

        $form_name = $form->name ;
        $posts = Post::whereFormName( $form_name)->get();

        return view('form.form', compact(['form', 'posts']));
    }
    public function download(Request $request,  Post $post)
{ 
    

   $pathToFile = storage_path('app/public/uploads/' . $post->name);
   return response()->download($pathToFile);
    
   
}
   
   

}