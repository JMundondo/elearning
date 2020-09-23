@extends('layouts.app')

@section('content')

<div class="container">
<div id="register">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    

                    <button type="button" class="btn btn-secondary"v-on:click="changestate">Teacher</button>
                   <br><br>
             <div class="card card-body" v-show="buttonstate">
                     <form method="POST" action="{{ route('teacherRegister') }}">
                   @csrf
            
               <div class="form-group row">
                         <label for="name" 
                         class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            
                     <div class="col-md-6">
                         <input id="name" type="text" 
                                     class="form-control @error('name') is-invalid @enderror" 
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                      @error('name')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                         </span>
                                            @enderror
                                </div>
                            </div>
                         <div class="form-group row">
                            <label for="subjects" 
                            class="col-md-4 col-form-label text-md-right">{{ __('Subjects') }}</label>
               
                        <div class="col-md-6">
                            <input id="subjects" type="text" 
                                        class="form-control @error('subjects') is-invalid @enderror" 
                                       name="subjects" value="{{ old('subjects') }}" required autocomplete="subjects" autofocus>
               
                                         @error('subjects')
                                       <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                            </span>
                                               @enderror
                                   </div>
                               </div>
            
                                    <div class="form-group row">
                                        <label for="email" 
                                        class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" 
                                            class="form-control @error('email') is-invalid @enderror" 
                                            name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password"
                                         class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" 
                                            class="form-control @error('password') is-invalid @enderror" 
                                            name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password-confirm" 
                                        class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" 
                                            class="form-control" name="password_confirmation" 
                                            required autocomplete="new-password">
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                         
                        </div>
        
    
                        </form>
                        <br><br>
                        <button type="button" class="btn btn-primary" v-on:click="changestudent">Student</button>
                        <br><br>
                        <div class="card card-body" v-show="student">
                                <form method="POST" action="{{ route('registerStudent') }}" v-if="buttonstate">
                              @csrf
                       
                          <div class="form-group row">
                                    <label for="name" 
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                       
                               <div class="col-md-6">
                                    <input id="name" type="text" 
                                                class="form-control @error('name') is-invalid @enderror" 
                                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       
                                                 @error('name')
                                               <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                    </span>
                                                       @enderror
                                           </div>
                                       </div>
                                <div class="form-group row">
                                       <label for="class" 
                                    class="col-md-4 col-form-label text-md-right">{{ __('Class') }}</label>
                       
                                <div class="col-md-6">
                                    <input id="class" type="text" 
                                                class="form-control @error('class') is-invalid @enderror" 
                                               name="class" value="{{ old('class') }}" required autocomplete="class" autofocus>
                       
                                                 @error('class')
                                               <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                    </span>
                                                       @enderror
                                           </div>
                                       </div>
                       
                                               <div class="form-group row">
                                                   <label for="email" 
                                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                       
                                                   <div class="col-md-6">
                                                       <input id="email" type="email" 
                                                       class="form-control @error('email') is-invalid @enderror" 
                                                       name="email" value="{{ old('email') }}" required autocomplete="email">
                       
                                                       @error('email')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                                   </div>
                                               </div>
                       
                                               <div class="form-group row">
                                                   <label for="password"
                                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                       
                                                   <div class="col-md-6">
                                                       <input id="password" type="password" 
                                                       class="form-control @error('password') is-invalid @enderror" 
                                                       name="password" required autocomplete="new-password">
                       
                                                       @error('password')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                                   </div>
                                               </div>
                       
                                               <div class="form-group row">
                                                   <label for="password-confirm" 
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                       
                                                   <div class="col-md-6">
                                                       <input id="password-confirm" type="password" 
                                                       class="form-control" name="password_confirmation" 
                                                       required autocomplete="new-password">
                                                   </div>
                                               </div>
                       
                                               <div class="form-group row mb-0">
                                                   <div class="col-md-6 offset-md-4">
                                                       <button type="submit" class="btn btn-primary">
                                                           {{ __('Register') }}
                                                       </button>
                                                   </div>
                                               </div>
                                           </form>
                        </div>
                        </div>
                        </div>
                      </div>
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>  
</div>
@endsection
