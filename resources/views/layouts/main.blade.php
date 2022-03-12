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
<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300;1,500&family=Poppins:ital,wght@0,300;0,500;0,700;1,300;1,400&display=swap"
    rel="stylesheet">
<link href="./css/styles.css?537a1bbd0e5129401d28" rel="stylesheet"></head>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<body>
    <!-- loading -->
<div class="loading-container">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <ul class="list-unstyled">
            <li>
                <img src="images/placeholder/loading.png" alt="Alternate Text" height="100" />

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
                <p>Loading</p>
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
                        <li><a href="#" title="">Career</a></li>
                        <li><a href="#" title="">Contact Us</a></li>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> Home </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a class="dropdown-item" href="/homepage-v1.html"> Home version one </a>
                            </li>
                            <li><a class="dropdown-item" href="homepage-v2.html"> Home version two </a></li>
                            <li><a class="dropdown-item" href="/homepage-v3.html"> Home version three </a></li>
                            <li><a class="dropdown-item" href="/homepage-v4.html"> Home version four </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                        <ul class="dropdown-menu animate fade-up">

                            <li><a class="dropdown-item icon-arrow" href="#"> Blog </a>
                                <ul class="submenu dropdown-menu  animate fade-up">
                                    <li><a class="dropdown-item" href="/category-style-v1.html">Style 1</a></li>
                                    <li><a class="dropdown-item" href="/category-style-v2.html">Style 2</a></li>
                                    <li><a class="dropdown-item" href="/category-style-v3.html">Style 3</a></li>

                                    <li><a class="dropdown-item icon-arrow" href="">Submenu item 3 </a>
                                        <ul class="submenu dropdown-menu  animate fade-up">
                                            <li><a class="dropdown-item" href="">Multi level 1</a></li>
                                            <li><a class="dropdown-item" href="">Multi level 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="">Submenu item 4</a></li>
                                    <li><a class="dropdown-item" href="">Submenu item 5</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item icon-arrow" href="#"> Blog single detail </a>
                                <ul class="submenu dropdown-menu  animate fade-up">
                                    <li><a class="dropdown-item" href="/article-detail-v1.html">Style 1</a></li>
                                    <li><a class="dropdown-item" href="/article-detail-v2.html">Style 2</a></li>
                                    <li><a class="dropdown-item" href="/article-detail-v3.html">Style 3</a></li>

                                </ul>
                            </li>

                            <li><a class="dropdown-item icon-arrow" href="#"> Search Result </a>
                                <ul class="submenu dropdown-menu  animate fade-up">
                                    <li><a class="dropdown-item" href="/search-result.html">Style 1</a></li>
                                    <li><a class="dropdown-item" href="/search-result-v1.html">Style 2</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="/login.html">Login </a>
                            <li><a class="dropdown-item" href="/register.html"> Register </a>
                            <li><a class="dropdown-item" href="/contact.html"> Contact </a>
                            <li><a class="dropdown-item" href="/404.html"> 404 Error </a>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> About </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a class="dropdown-item" href="/about-us.html"> Style 1 </a>
                            </li>
                            <li><a class="dropdown-item" href="/about-us-v1.html"> Style 2 </a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> News </a>
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
                    <li class="nav-item"><a class="nav-link" href="#"> Category </a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact.html"> contact </a></li>
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
                                        <input class="form-control border-secondary border-right-0 rounded-0"
                                            type="search" value="" placeholder="Search " id="example-search-input4">
                                    </div>
                                    <div class="col-auto">
                                        <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                            href="/search-result.html">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-dark" href="#" data-toggle="dropdown"> Home
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a class="dropdown-item text-dark" href="/homepage-v1.html"> Home version one </a>
                                </li>
                                <li><a class="dropdown-item text-dark" href="homepage-v2.html"> Home version two </a>
                                </li>
                                <li><a class="dropdown-item text-dark" href="/homepage-v3.html"> Home version three </a>
                                </li>
                                <li><a class="dropdown-item text-dark" href="/homepage-v4.html"> Home version four </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  text-dark" href="#" data-toggle="dropdown"> Pages </a>
                            <ul class="dropdown-menu animate fade-up">

                                <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Blog </a>
                                    <ul class="submenu dropdown-menu  animate fade-up">
                                        <li><a class="dropdown-item" href="/category-style-v1.html">Style 1</a></li>
                                        <li><a class="dropdown-item" href="/category-style-v2.html">Style 2</a></li>
                                        <li><a class="dropdown-item" href="/category-style-v3.html">Style 3</a></li>

                                        <li><a class="dropdown-item icon-arrow  text-dark" href="">Submenu item 3 </a>
                                            <ul class="submenu dropdown-menu  animate fade-up">
                                                <li><a class="dropdown-item" href="">Multi level 1</a></li>
                                                <li><a class="dropdown-item" href="">Multi level 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item  text-dark" href="">Submenu item 4</a></li>
                                        <li><a class="dropdown-item" href="">Submenu item 5</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Blog single detail </a>
                                    <ul class="submenu dropdown-menu  animate fade-up">
                                        <li><a class="dropdown-item" href="/article-detail-v1.html">Style 1</a></li>
                                        <li><a class="dropdown-item" href="/article-detail-v2.html">Style 2</a></li>
                                        <li><a class="dropdown-item" href="/article-detail-v3.html">Style 3</a></li>

                                    </ul>
                                </li>

                                <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Search Result </a>
                                    <ul class="submenu dropdown-menu  animate fade-up">
                                        <li><a class="dropdown-item" href="/search-result.html">Style 1</a></li>
                                        <li><a class="dropdown-item" href="/search-result-v1.html">Style 2</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item  text-dark" href="/login.html">Login </a>
                                <li><a class="dropdown-item  text-dark" href="/register.html"> Register </a>
                                <li><a class="dropdown-item  text-dark" href="/contact.html"> Contact </a>
                                <li><a class="dropdown-item  text-dark" href="/404.html"> 404 Error </a>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle  text-dark" href="#" data-toggle="dropdown"> About
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a class="dropdown-item" href="/about-us.html"> Style 1 </a>
                                </li>
                                <li><a class="dropdown-item" href="/about-us-v1.html"> Style 2 </a></li>

                            </ul>
                        </li>


                        <li class="nav-item"><a class="nav-link  text-dark" href="#"> Category </a></li>
                        <li class="nav-item"><a class="nav-link  text-dark" href="/contact.html"> contact </a></li>
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
   
    <!-- Footer bottom -->
    <div class="wrapper__footer-bottom bg__footer-dark">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="border-top-1 bg__footer-bottom-section">
                        <ul class="list-inline link-column">
                            <li class="list-inline-item">
                                <a href="/contact-us.html">
                                    contact us
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"> terms of use</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    adchoice
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="/about-us.html">
                                    about us
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    newsletters
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    sitemap
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    magrenvi store
                                </a>
                            </li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span>
                                    Copyright © 2019 News and Magazine template based on Bootstrap 4 Theme by <a
                                        href="#">retenvi</a>
                                </span>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>

    </div>
</footer>
        </div>
    </section>


    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

<script type="text/javascript" src="./js/index.bundle.js?537a1bbd0e5129401d28"></script>
<script src="{{asset('js/index.bundle.js')}}"></script>
</body>

</html>