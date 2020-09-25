@extends('layouts.app')

@section('content')
<div class="row justify-content-center" >
  <div class="col-md-8">
    <div class="card jumbotron-fluid">
      <div class="card-header display-6">{{ __('Teacher Dashboard') }}</div>
      <div class="container">
        
        vue js file post form
        @foreach ($forms as $form)
      
        <p class="card-block"><ul> <li> Post to {{$form->name}}</li> </ul>
        </p> 
        @endforeach
      @endsection
      
    </div>
    
    </div>
     
  </div>

</div>
 

 