<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )

    {
      // $path = $request->post->store('form1');
     // $path = Storage::putFile('forms',$request->file('post'));
        
  
    $request->validate([
    'file' => 'required|max:2048'
    ]);

         $fileModel = new Post;
         if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName,'public');
            $storagePath = storage_path();
    
            $fileModel->name = time().'_'.$request->file->getClientOriginalName();
            //$fileModel->file_path = '/storage/' . $filePath;
            $fileModel->file_path = $storagePath.$filePath;
            $fileModel->title =  $request->title;
            $fileModel->subject =  $request->subject;
            $fileModel->form_name =  $request->class;
            $fileModel->save();

         }
      
    

        
    

        return back()
        ->with('success','File has been uploaded.')
        ->with('file'); 

        /**if ($request->hasFile('file')) {
            if ($request->file('file')->isValid()) {
                $file = $request->file('file');
                $request->file('file')->move(public_path().'/uploads/', $file->getClientOriginalName());
            }
        }
        $fileModel = new Post;
        $fileModel->name = time().'_'.$request->file->getClientOriginalName();
        $fileModel->file_path = public_path().'/uploads/';
        $fileModel->title =  $request->title;
        $fileModel->subject =  $request->subject;
        $fileModel->form_name =  $request->class;
        $fileModel->save();

        return back()
        ->with('success','File has been uploaded.')
        ->with('file');
    **/
       // $list_of_files = \File::allFiles(public_path().'/uploads/');
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
