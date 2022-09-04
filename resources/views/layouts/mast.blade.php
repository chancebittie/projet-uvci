<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('action') }}">{{ __('action') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.index') }}">{{ __('Admin') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('counter') }}">{{ __('counter') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('espace_sante') }}">{{ __('espace_sante') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('espace_annonce') }}">{{ __('espace_annonce') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('apropos') }}">{{ __('apropos') }}</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary text-light" href="{{ route('login') }}">{{ __('connexion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="pt-1 mb-4">
            @yield('content')
        </main>

        <footer class="bg-dark d-flex text-light  pt-3">
            {{-- <div class="row"> --}}
                <div class="col-md-3 px-4">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro corrupti tempora quis eius voluptatem! Possimus eaque explicabo consequuntur velit! Accusantium cum rerum fuga ipsam ex eum vero aspernatur, quidem soluta!
                </div>
                <div class="col-md-3 px-4">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro corrupti tempora quis eius voluptatem! Possimus eaque explicabo consequuntur velit! Accusantium cum rerum fuga ipsam ex eum vero aspernatur, quidem soluta!
                </div>
                <div class="col-md-3 px-4">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro corrupti tempora quis eius voluptatem! Possimus eaque explicabo consequuntur velit! Accusantium cum rerum fuga ipsam ex eum vero aspernatur, quidem soluta!
                </div>
                <div class="col-md-3 px-4">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro corrupti tempora quis eius voluptatem! Possimus eaque explicabo consequuntur velit! Accusantium cum rerum fuga ipsam ex eum vero aspernatur, quidem soluta!
                </div>
            {{-- </div> --}}
            {{-- <div class="d-flex">
                <button ><i class="bi bi-facebook"></i></button>
            </div> --}}
        </footer>
        <div class="d-flex bg-dark text-center px-auto justify-content-center py-3">
            <a href="https://fr-fr.facebook.com/uvciv/" class="bg-dark  mx-3"><i class="bi bi-facebook text-primary"></i></a>
            <a href="https://twitter.com/uvciv?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor " class="bg-dark  mx-3"><i class="bi bi-twitter"></i></a>
            <a  href="https://ci.linkedin.com/company/universit%C3%A9-virtuelle-de-c%C3%B4te-d-ivoire" class="bg-dark  mx-3"><i class="bi bi-linkedin"></i></a>
            {{-- <a ><i class="bi bi-facebook"></i></a> --}}
        </div>
    </div>
    @livewireScripts
</body>
</html>
