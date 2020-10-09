<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <style>.carousel-inner > .item > img { width:100%; height:570px; } </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="{{asset('download.jpg')}}" alt="Image" class="img-thumbnail rounded-circle img-fluid ">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'st_Michael`s_E_learning') }}
                </a>
          
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- web pages links -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('news') }}">News</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('aboutUs') }}">About US</a>
                            </li>

                            <li class="nav-item">
                              <a class="nav-link " href="{{ route('welcome') }}">E-Learning</a>
                            </li>
                          </ul>
                          
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<style type="text/css">
    .slide-show-render-full .slide-image {
    height: 100%;
    max-height: 62px;
    max-width: 110px;
    }
    
    .slide-show-render-full .slide-content {
    height: 62px;
    width: 110px;
    }
    
    .slide-show-render .slides {
    height: 62px;
    }
    
    .slide-show-render.slide-show {
    height: 62px;
    margin: 0 0 20px -60px;
    }
    
    .slide-show {
    width: 110px;
    }
    </style>
</html>