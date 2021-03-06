@extends('layouts.app')

@section('content')

<div class="row justify-content-center" >
  
  <div class="col-md-8">
    <div class="card jumbotron-fluid">
      <div class="card-header display-6">{{ __('Teacher Dashboard') }}</div>
      <div class="card-header text-md-center">{{ __('POST NOTES TO CLASS') }}</div>
      
      <div class="container">
        <div class="card card-body jumbotron">
          <form method="post" action="{{ route('posts.store') }}"  enctype="multipart/form-data">
        @csrf
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
      @endif

      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
 
    <div class="form-group row">
              <label for="title" 
              class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
 
          <div class="col-md-6">
              <input id="title" type="text" 
                          class="form-control @error('title') is-invalid @enderror" 
                         name="title" value="{{ old('name') }}" required autocomplete="title" autofocus>
 
                           @error('title')
                         <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                              </span>
                                 @enderror
                     </div>
                 </div>
              <div class="form-group row">
                 <label for="subject" 
                 class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>
    
             <div class="col-md-6">
                 <input id="subject" type="text" 
                             class="form-control @error('subject') is-invalid @enderror" 
                            name="subject" value="{{ old('subject') }}" required autocomplete="subject" autofocus>
    
                              @error('subject')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                 </span>
                                    @enderror
                        </div>
                    </div>
                              <div class="form-group row">
                                       <label for="class" 
                                    class="col-md-4 col-form-label text-md-right">{{ __('POST TO') }}</label>
                       
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
 
                        <div class="form-group row">
                             <label for="file" 
                             class="col-md-4 col-form-label text-md-right">{{ __('POST FILE') }}</label>
 
                             <div class="col-md-6">
                             {{--<input id="file" type="file" 
                                 class="form-control-file @error('file') is-invalid @enderror" 
                                 name="file" value="{{ old('file') }}" required autocomplete="file">--}}
                                 <input type="file" name="file" class="custom-file-input" id="chooseFile">
                                 <label class="custom-file-label" for="chooseFile">Select file</label>
 
                                 @error('file')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                         </div> 
                        
                      {{--<div class="form-group row">
                        <label for="file" 
                        class="col-md-4 col-form-label text-md-right">{{ __('POST FILE') }}</label>
                              <div class="custom-file  col-md-6" >

                                 <input type="file" name="file" class="custom-file-input" id="chooseFile">
                                  <label class="custom-file-label" for="chooseFile">Select file</label>
                             </div>
                             </div>--}} 
                         
                        
                    
                         
 
                         <div class="form-group row mb-0">
                             <div class="col-md-6 offset-md-4">
                                 <button type="submit" class="btn btn-primary" value="Save">
                                     {{ __('POST') }}
                                 </button>
                             </div>
                         </div>
              
             </div>


             </form>
        
        
       
    </div>
    
    </div>
     
  </div>
</div>

 @endsection

 