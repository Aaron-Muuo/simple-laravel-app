<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('pageTitle')</title>

        <!-- Fonts -->
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('css/all.css')}}" rel="stylesheet">
        <link href="{{asset('css/stylesheet.css')}}" rel="stylesheet">

    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="http://github.com/Aaron-Muuo" ><img src="{{asset('img/logo 2.png')}}" alt="" style="width: 30px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a href="/" class="{{ (request()->is('/') || request()-> is('dashboard')) ? 'nav-link active' : 'nav-link' }}">Feed</a>
                        </li>
                        <li class="nav-item">
                        <a href="/library" class="{{ (request()-> is('library')) ? 'nav-link active' : 'nav-link' }}">Library</a>
                        </li>
                        <li class="nav-item">
                        <a href="/library" class="{{ (request()-> is('library')) ? 'nav-link active' : 'nav-link' }}">Shop</a>
                        </li>
                        <li class="nav-item">
                        <a href="/library" class="{{ (request()-> is('library')) ? 'nav-link active' : 'nav-link' }}">Notifications</a>
                        </li>
                    </ul>
                </div>
                <div class="flex">
                    <a href="#"><img src="{{asset('img/user.png')}}" alt="" class="profile-img"></a>
                </div>
            </div>
            </nav>

            <div class="container">
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
