@extends('layouts.app')

@section('content')
<div class="row justify-content-center" >
  
  <div class="col-md-8">
    <div class="card jumbotron-fluid">
      <div class="card-header display-6">{{ __('Student DashBoard') }}</div>
      <div class="card-header text-md-center">{{ __('Select Your Class') }}</div>
      
      <div class="container">
        <div class="card card-body jumbotron">

          <div class="row">
            <div class="col-sm-6">
              <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                  <h5 class="card-title">FORM 1</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/1') }}" class="btn btn-success">Go to Form 1</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card text-white bg-secondary mb-3">
                <div class="card-body">
                  <h5 class="card-title">FORM 2</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/2') }}" class="btn btn-primary">Go TO Form 2</a>
                </div>
              </div>
            </div>
          </div><div class="row">
            <div class="col-sm-6">
              <div class="card text-white bg-success mb-3">
                <div class="card-body">
                  <h5 class="card-title">FORM 3 sciences</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/3') }}" class="btn btn-primary">Go TO Form 3 science</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card text-white bg-danger mb-3 ">
                <div class="card-body ">
                  <h5 class="card-title">FORM 3 arts</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/4') }}" class="btn btn-primary">Go TO Form 3 arts</a>
                </div>
              </div>
            </div>
          </div><div class="row">
            <div class="col-sm-6">
              <div class="card text-white bg-warning mb-3">
                <div class="card-body ">
                  <h5 class="card-title">FORM 3 commercials</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/5') }}" class="btn btn-primary">Go TO Form 3 commercials</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card text-white bg-info mb-3">
                <div class="card-body ">
                  <h5 class="card-title">FORM 4 science</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/6') }}" class="btn btn-primary">Go TO Form 4 sciences</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="card card bg-light mb-3">
                <div class="card-body">
                  <h5 class="card-title">FORM 4 arts</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/7') }}" class="btn btn-primary">Go TO Form 4 arts</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card text-white bg-dark mb-3">
                <div class="card-body ">
                  <h5 class="card-title">FORM 4  commercials</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/8') }}" class="btn btn-primary">Go TO Form 4 commercials</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="card text-white bg-warning mb-3 ">
                <div class="card-body  ">
                  <h5 class="card-title">L6 science  </h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/9') }}" class="btn btn-primary">Go TO L6 science</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card text-white bg-warning mb-3">
                <div class="card-body ">
                  <h5 class="card-title">L6 commercials</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/11') }}" class="btn btn-primary">Go TO L6 commercials</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="card text-white bg-dark mb-3 ">
                <div class="card-body">
                  <h5 class="card-title"> L6 arts</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/10') }}" class="btn btn-primary">Go TO  L6 arts</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                  <h5 class="card-title">U6 science</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/12') }}" class="btn btn-primary">Go TO U6 science</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="card text-white bg-success mb-3">
                <div class="card-body">
                  <h5 class="card-title">U6 arts</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/13') }}" class="btn btn-primary">Go TO U6 arts</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card card bg-light mb-3">
                <div class="card-body">
                  <h5 class="card-title">U6 commercials</h5>
                  <p class="card-text">Go To Download Posted Notes.</p>
                  <a href="{{ url('/student/14') }}" class="btn btn-primary">Go TO U6 commercials</a>
                </div>
              </div>
            </div>
          </div>
          
         {{--<form  class="form-inline"    method="POST" action="{{ route('posts.store') }}">
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


            </form>--}} {{--<form  class="form-inline"    method="POST" action="{{ route('posts.store') }}">
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
       
        --}}
        
       
    </div>
    
    </div>
     
  </div>

@endsection