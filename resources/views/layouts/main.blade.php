<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">

    <meta name="theme-color" content="#030303">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300;1,500&family=Poppins:ital,wght@0,300;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link href="./css/styles.css?537a1bbd0e5129401d28" rel="stylesheet">
</head>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<body>
    <!-- loading -->
    <div class="loading-container">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <ul class="list-unstyled">
                <li>
                    <img src="images/placeholder/loading.png" alt="Insira Nome" height="100" />

                </li>
                <li>

                    <div class="spinner">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>

                    </div>

                </li>
                <li>
                    <p>Aguarde</p>
                </li>
            </ul>
        </div>
    </div>
    <!-- End loading -->

    <!-- Header news -->
    <header class="bg-light">
        <!-- Navbar  Top-->
        <div class="topbar d-none d-sm-block">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="topbar-left">
                            <div class="topbar-text">
                                Monday, March 22, 2020
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="list-unstyled topbar-right">
                            <ul class="topbar-link">

                                <li><a href="#" title="">Login / Register</a></li>
                            </ul>
                            <ul class="topbar-sosmed">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Top  -->
        <!-- Navbar  -->
        <!-- Navbar menu  -->
        <div class="navigation-wrap navigation-shadow bg-white">
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
                            <li class="nav-item"><a class="nav-link" href="#"> Home </a></li>

                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Category1 </a>
                                <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                                    <div class="container wrap__mobile-megamenu">
                                        <div class="col-megamenu">
                                            <h5 class="title">Recent news</h5>
                                            <hr>
                                            <!-- Popular news carousel -->
                                            <div class="popular__news-header-carousel">

                                                <div class="top__news__slider">
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- col-megamenu.// -->
                                    </div>
                                </div> <!-- dropdown-mega-menu.// -->
                            </li>


                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Category2 </a>
                                <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                                    <div class="container wrap__mobile-megamenu">
                                        <div class="col-megamenu">
                                            <h5 class="title">Recent news</h5>
                                            <hr>
                                            <!-- Popular news carousel -->
                                            <div class="popular__news-header-carousel">

                                                <div class="top__news__slider">
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- col-megamenu.// -->
                                    </div>
                                </div> <!-- dropdown-mega-menu.// -->
                            </li>

                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Category3 </a>
                                <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                                    <div class="container wrap__mobile-megamenu">
                                        <div class="col-megamenu">
                                            <h5 class="title">Recent news</h5>
                                            <hr>
                                            <!-- Popular news carousel -->
                                            <div class="popular__news-header-carousel">

                                                <div class="top__news__slider">
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- col-megamenu.// -->
                                    </div>
                                </div> <!-- dropdown-mega-menu.// -->
                            </li>

                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Category4 </a>
                                <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                                    <div class="container wrap__mobile-megamenu">
                                        <div class="col-megamenu">
                                            <h5 class="title">Recent news</h5>
                                            <hr>
                                            <!-- Popular news carousel -->
                                            <div class="popular__news-header-carousel">

                                                <div class="top__news__slider">
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- col-megamenu.// -->
                                    </div>
                                </div> <!-- dropdown-mega-menu.// -->
                            </li>

                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Category5 </a>
                                <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                                    <div class="container wrap__mobile-megamenu">
                                        <div class="col-megamenu">
                                            <h5 class="title">Recent news</h5>
                                            <hr>
                                            <!-- Popular news carousel -->
                                            <div class="popular__news-header-carousel">

                                                <div class="top__news__slider">
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- col-megamenu.// -->
                                    </div>
                                </div> <!-- dropdown-mega-menu.// -->
                            </li>

                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Category6 </a>
                                <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                                    <div class="container wrap__mobile-megamenu">
                                        <div class="col-megamenu">
                                            <h5 class="title">Recent news</h5>
                                            <hr>
                                            <!-- Popular news carousel -->
                                            <div class="popular__news-header-carousel">

                                                <div class="top__news__slider">
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- col-megamenu.// -->
                                    </div>
                                </div> <!-- dropdown-mega-menu.// -->
                            </li>

                        </ul>


                        <!-- Search bar.// -->
                        <ul class="navbar-nav ">
                            <li class="nav-item search hidden-xs hidden-sm "> <a class="nav-link" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Search content bar.// -->
                        <div class="top-search navigation-shadow">
                            <div class="container">
                                <div class="input-group ">
                                    <form action="#">

                                        <div class="row no-gutters mt-3">
                                            <div class="col">
                                                <input class="form-control border-secondary border-right-0 rounded-0" type="search" value="" placeholder="Search " id="example-search-input4">
                                            </div>
                                            <div class="col-auto">
                                                <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right" href="/search-result.html">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Search content bar.// -->
                    </div> <!-- navbar-collapse.// -->
                </div>
            </nav>
        </div>
        <!-- End Navbar menu  -->

        <!-- Navbar sidebar menu  -->
        <div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-aside" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="widget__form-search-bar  ">
                            <div class="row no-gutters">
                                <div class="col">
                                    <input class="form-control border-secondary border-right-0 rounded-0" value="" placeholder="Search">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <nav class="list-group list-group-flush">
                            <ul class="navbar-nav ">
                                 <li class="nav-item"><a class="nav-link  text-dark" href="#"> Home </a></li>
                                <li class="nav-item"><a class="nav-link  text-dark" href="#"> Category1 </a></li>
                                <li class="nav-item"><a class="nav-link  text-dark" href="#"> Category2 </a></li>
                                 <li class="nav-item"><a class="nav-link  text-dark" href="#"> Category3 </a></li>
                                <li class="nav-item"><a class="nav-link  text-dark" href="#"> Category4 </a></li>
                                <li class="nav-item"><a class="nav-link  text-dark" href="#"> Category5 </a></li>
                                <li class="nav-item"><a class="nav-link  text-dark" href="#"> Category6 </a></li>
                           
                            </ul>

                        </nav>
                    </div>
                    <div class="modal-footer">
                        <p>© 2020 <a href="http://retenvi.com" title="Premium WordPress news &amp; magazine theme">Magzrenvi</a>
                            -
                            Premium template news, blog & magazine &amp;
                            magazine theme by <a href="http://retenvi.com" title="retenvi">RETENVI.COM</a>.</p>
                    </div>
                </div>
            </div> <!-- modal-bialog .// -->
        </div> <!-- modal.// -->
        <!-- End Navbar sidebar menu  -->
        <!-- End Navbar  -->
    </header>
    <!-- End Header news -->
    @yield('content')

    <section class="wrapper__section p-0">
        <div class="wrapper__section__components">
            <!-- Footer -->
            <footer>
                <div class="wrapper__footer bg__footer-dark pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer ">
                                        <h4 class="footer-title">
                                            world
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>

                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">global economy</a>

                                        </li>
                                        <li>
                                            <a href="#">religion</a>
                                        </li>
                                        <li>
                                            <a href="#">bitcoin</a>
                                        </li>
                                        <li>
                                            <a href="#">conflict</a>
                                        </li>
                                        <li>
                                            <a href="#">sports</a>
                                        </li>
                                        <li>
                                            <a href="#">scandals</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer">
                                        <h4 class="footer-title">
                                            entertainment
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>

                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">celebity news</a>
                                        </li>
                                        <li>
                                            <a href="#">movies</a>
                                        </li>
                                        <li>
                                            <a href="#">tv news</a>
                                        </li>
                                        <li>
                                            <a href="#">music news</a>
                                        </li>
                                        <li>
                                            <a href="#">life style</a>
                                        </li>
                                        <li>
                                            <a href="#">entertainment video</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer">
                                        <h4 class="footer-title">
                                            health
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>
                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">medical research</a>
                                        </li>
                                        <li>
                                            <a href="#">healthy living</a>
                                        </li>
                                        <li>
                                            <a href="#">mental health</a>
                                        </li>
                                        <li>
                                            <a href="#">virus corona</a>
                                        </li>
                                        <li>
                                            <a href="#">children's health</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer">
                                        <h4 class="footer-title">
                                            business
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>

                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">merkets</a>
                                        </li>
                                        <li>
                                            <a href="#">technology</a>
                                        </li>
                                        <li>
                                            <a href="#">features</a>
                                        </li>
                                        <li>
                                            <a href="#">property</a>
                                        </li>
                                        <li>
                                            <a href="#">business leaders</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <figure class="image-logo">
                                        <img src="images/placeholder/logo.jpg" alt="" class="logo-footer">
                                    </figure>
                                </div>
                                <div class="col-md-8 my-auto ">

                                    <div class="social__media">

                                        <ul class="list-inline">

                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white whatsapp">
                                                    <i class="fa fa-whatsapp"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white telegram">
                                                    <i class="fa fa-telegram"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white linkedin">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                                <!-- Footer bottom -->
                    <div class="wrapper__footer-bottom bg__footer-dark">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="border-top-1 bg__footer-bottom-section">
                                    
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span>
                                                    Copyright © 2022 Feito com S2 por <a
                                                        href="#">Guilherme Vale, Jonathan Meira , Paulo Portugal e Gustavo Benites</a>
                                                </span>
                                            </li>
                                        </ul>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
            </footer>

            <script type="text/javascript" src="./js/index.bundle.js?537a1bbd0e5129401d28"></script>
            <script src="{{asset('js/index.bundle.js')}}"></script>
</body>

</html>