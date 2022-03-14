<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->

    @if(config('app.logo') == null || config('app.logo')== 'noimage.jpg')
        <link rel="icon" type="image/png" href="{{asset('assets/img/noimage.jpg')}}">
    @else
        <link rel="icon" type="image/png" href="{{asset('storage/system/'. config('app.logo'))}}">
    @endif


    <meta name="theme-color" content="#030303">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300;1,500&family=Poppins:ital,wght@0,300;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css?537a1bbd0e5129401d28')}}">
</head>

<body>
    <!-- loading -->
    <div class="loading-container">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <ul class="list-unstyled">
                <li style="color: {{config('app.color')}}">
                    <p style="color: {{config('app.color')}}">Seja bem vindo ao {{config('app.name')}}</p>
                    <p style="color: {{config('app.color')}}">Aguarde</p>
                </li>
                <li>
                    <div class="spinner">
                        <div class="rect1" style="background: {{config('app.color')}}"></div>
                        <div class="rect2" style="background: {{config('app.color')}}"></div>
                        <div class="rect3" style="background: {{config('app.color')}}"></div>
                        <div class="rect4" style="background: {{config('app.color')}}"></div>
                        <div class="rect5" style="background: {{config('app.color')}}"></div>

                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- End loading -->

    <!-- Header news -->
    <header class="bg-light">
        <!-- Navbar  Top-->
        <div class="topbar d-none d-sm-block" style="background-color: {{config('app.color')}}">
            <div class="container p-1">
                <div class="row">
                    <div class="col-md-5">
                        <div class="topbar-left">
                            <div class="topbar-text">
                                <text class ="h4">
                                    {{now()->format('d/m/Y')}}
                                </text>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="topbar-left">
                                <div class="a topbar-text">
                                    <a class ="text h4 d-flex flex-row-reverse" href="{{route('login')}}">
                                    @if(auth()->user())
                                            Acessar painel
                                        @else
                                            Login / Registrar
                                        @endif
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Top  -->
        <!-- Navbar  -->
        <!-- Navbar menu  -->
        <div class="navigation-wrap navigation-shadow bg-white" id="home">
            <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
                <div class="container">
                    <div class="offcanvas-header">
                        <div data-toggle="modal" data-target="#modal_aside_right" class="btn-md">
                            <span class="navbar-toggler-icon"></span>
                        </div>
                    </div>
                    <figure class="mb-0 mx-auto">
                        <a href="/homepage-v1.html">
                            <img src="images/placeholder/logo.jpg" alt="" class="img-fluid logo">
                        </a>
                    </figure>

                    <div class="collapse navbar-collapse justify-content-between" id="main_nav99">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item">
                                <a class="nav-link" @if($pageSlug=='index' ) href="#home" @else href="{{route('index')}}" @endif>
                                    <i class="fa fa-home"></i>
                                    Home
                                </a>
                            </li>
                            @foreach($categories as $category)
                                <li class="nav-item dropdown has-megamenu">
                                    <a class="nav-link" href="#{{$category->name}}"> {{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
            </nav>
        </div>
        <!-- End Navbar menu  -->
    </header>
    <!-- End Header news -->

    <div class="wrapper wrapper-full-page">
        <div class="full-page {{ $contentClass ?? '' }}">
            <div class="content">
                <div class="container">
                    @yield('content')
                </div>
            </div>
            <div
            class="p-3"
            style="
            background: {{config('app.color')}};
            color: white;"
            >
                @include('layouts.footer')
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/index.bundle.js?537a1bbd0e5129401d28"></script>
    <script src="{{asset('js/index.bundle.js')}}"></script>
</body>

</html>