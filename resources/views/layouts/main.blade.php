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
        <!-- Navbar  Top
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
        -->
        <div class="topbar d-none d-sm-block" style="background-color: {{config('app.color')}}">
            <div class="container p-3">
                <div class="row">
                    <div class="col-md-2"  style="display: flex; align-items: center; justify-content: start;">
                        <div class="topbar-left">
                            <div class="topbar-text">
                                <text class ="h5">
                                    {{now()->format('d/m/Y')}}
                                </text>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-7">
                        <div class="topbar-left">
                            <div class="topbar-text" style="display: flex; justify-content: center;">
                                @if(config('app.logo') == null || config('app.logo')== 'noimage.jpg')
                                    <img src="{{asset('assets/img/noimage.jpg')}}" style="max-height: 52px;">
                                @else
                                    <img src="{{asset('storage/system/'. config('app.logo'))}}" style="max-height: 52px;">
                                @endif
                                
                            </div>
                            <div class="topbar-text" style="display: flex; align-items: center; justify-content: center; padding-top:0.5em">
                                <text class ="h4" style="color: #fff;">
                                    {{config('app.name')}}
                                </text>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3" style="display: flex; align-items: center; justify-content: end;">
                        <div class="topbar-left">
                            <div class="a topbar-text">
                                <a class ="text h5 d-flex flex-row-reverse" href="{{route('login')}}" style="margin: 0;">
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
        <div class="navigation-wrap bg-white" id="home">
            <nav class="navbar navbar-expand-lg navbar-soft">
                <div class="container">
                    <div class="navbar-collapse" >   
                        <ul class="navbar-nav ml-auto">
                            @if($pageSlug == "index")
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                                    Categorias 
                                </a>
                                <ul class="dropdown-menu dropdown-navbar" style="max-height: 400px; overflow-y: auto;">
                                    @foreach($categories as $category)
                                        <li class="nav-item">
                                            <a 
                                            class="dropdown-item" 
                                            href="#{{$category->name}}"> {{$category->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                            <li class="separator d-lg-none"></li>
                            <li class="nav-item">
                                    <a class="nav-link" @if($pageSlug=='index' ) href="#home" @else href="{{route('index')}}" @endif>
                                        <i class="fa fa-home"></i>
                                        Home
                                    </a>
                            </li>
                        </ul>
                    </div>
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
            <div class="p-3" style="background: {{config('app.color')}}; color: white;">
                @include('layouts.footer')
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/index.bundle.js?537a1bbd0e5129401d28"></script>
    <script src="{{asset('js/index.bundle.js')}}"></script>
</body>

</html>