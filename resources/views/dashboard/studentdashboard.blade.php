@extends('layouts.app')

@section('content')
<div class="row justify-content-center" >
  
  <div class="col-md-8">
    <div class="card jumbotron-fluid">
      <div class="card-header display-6">{{ __('Student DashBoard') }}</div>
      <div class="card-header text-md-center">{{ __('Select Your Class') }}</div>
      
      <div class="container">
        <div class="card card-body jumbotron">
          <form  class="form-inline"    method="POST" action="{{ route('posts.store') }}">
        @csrf
 
    <div class="form-group row">
              <label for="class" 
              class="radio">{{ __('Your Class') }}</label>
              <div class="form-group row">
                <label for="class" 
             class="col-md-4 col-form-label text-md-right">{{ __('Go TO') }}</label>

         <div class="col-md-6">
             <select class="form-control " id="class"  
               
            name="class"  required autocomplete="class" autofocus >

             
              <option v-for="form in forms" >@{{form}} </option>
                

             </select>

                          @error('class')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                             </span>
                                @enderror
                    </div>
                </div>
                         <div class="form-group row mb-0">
                             <div class="col-md-6 offset-md-4">
                                 <button type="submit" class="btn btn-success">
                                     {{ __('GO') }}
                                 </button>
                             </div>
                         </div>
              
             </div>


             </form>
       
        
        
       
    </div>
    
    </div>
     
  </div>

@endsection