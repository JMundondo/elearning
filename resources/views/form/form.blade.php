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
            <ul class="list-unstyled  card text-white bg-primary mb-3">
                <li class="media">
                  
                  <div class="media-body">
                  <h5 class="mt-0 mb-1 bg-secondary ">{{$post->title}}</h5>
                        <h5>{{$post->subject}} </h5>

                        <h6> {{$post->name}}</h6>
                        <a href="{{ url('/1') }}" class="btn btn-success">download</a>
                  </div>
                </li>


                
              </ul>
            @endforeach
            <ul>
              @foreach($posts as $post)
                  <li><a href="{{ asset('uploads/' . basename($post->name)) }}">{{ basename($post->name) }}</a></li>
              @endforeach
          </ul>
            


          
       
    </div>
    
    </div>
     
  </div>

@endsection   

   
        
                 