<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog app | @yield('pageTitle')</title>

        <!-- Fonts -->
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('css/all.css')}}" rel="stylesheet">
        <link href="{{asset('css/stylesheet.css')}}" rel="stylesheet">

        @yield('meta')
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h2 class="fw-bold fs-4 text-center theme-font fs-1"><img src="{{asset('img/tales.png')}}" alt="" style="width: 120px"></h2>
                    <p class="fw-bold text-center">Built with Laravel</p>
                    
                </div>
            </div>


                <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
                    <div class="container">
                        <a class="navbar-brand" href="http://github.com/Aaron-Muuo" ><img src="{{asset('img/logo 2.png')}}" alt="" style="width: 30px"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                            <a href="/" class="{{ (request()->is('/') || request()-> is('home')) ? 'nav-link active' : 'nav-link' }}">Home</a>
                            </li>
                            <li class="nav-item">
                            <a href="/blog" class="{{ (request()-> is('blog')) ? 'nav-link active' : 'nav-link' }}">Blog</a>
                            </li>
                            <li class="nav-item">
                            <a href="/media" class="{{ (request()-> is('media')) ? 'nav-link active' : 'nav-link' }}">Media</a>
                            </li>
                            <li class="nav-item">
                            <a href="/signin" class="{{ (request()-> is('signin')) ? 'nav-link active' : 'nav-link' }}">Sign in</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </nav>


            @yield('content')

        </div>

        {{-- footer section --}}
        <div class="bg-dark footer">
            <div class="container">
                <div class="row">
                <div class="col-md-12 text-center">
                <p class="text-light mt-3">Copyright 2021. Made by Aaron. Follow me on <a href="http://github.com/Aaron-Muuo" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Github: Aaron-Muuo" style="text-decoration: none" target="_blank">github.</a></p>
                </div>
                </div>
            </div>
        </div>
      {{-- end of footer --}}
       
        @yield('js')

        <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>

        <script src="{{asset('js/master.js')}}"></script>

    </body>
</html>
