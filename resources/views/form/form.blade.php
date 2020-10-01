@extends('layouts.app')

@section('content')
<div class="row justify-content-center" >
  
  <div class="col-md-8">
    <div class="card jumbotron-fluid">
      <div class="card-header display-4">{{ $form->name }}</div>
      <div class="card-header text-md-center">{{ __('Download notes') }}</div>
      
      <div class="container">
        <div class="card card-body jumbotron">
            @foreach ($posts as $post)
            <ul class="list-unstyled">
                <li class="media">
                  
                  <div class="media-body">
                  <h5 class="mt-0 mb-1">{{$post->title}}</h5>
                        <h5>{{$post->subject}} </h5>
                        <h6> {{$post->name}}</h6>
                  </div>
                </li>


                
              </ul>
            @endforeach
            


          
       
    </div>
    
    </div>
     
  </div>

@endsection   

   
        
                 