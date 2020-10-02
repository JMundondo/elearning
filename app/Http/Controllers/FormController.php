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
    $name = $post->name;
    //$path =  storage_path();
    $path = public_path('posts');
   // $path = '../storage/app/uploads/Computer-Science-O-level-Syllabus-min';

   $pathToFile = storage_path('app/public/uploads/' . $post->name);
   return response()->download($pathToFile);
    
    //return Storage::download($path.$name,$name);
   // return Storage::download($post->path_name ,$post->name);
   // return response()->download($post->file_path, $post->name, ['Content-Type:' . $post->filemimetype]);
}
   
   

}