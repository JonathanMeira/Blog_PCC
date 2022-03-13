@extends('layouts.main', [ 'pageSlug' => 'index'])

@section('title', config('app.name'))

@section('content')
<!-- Popular news -->
<section>
    <!-- Popular news  header-->
    <div class="popular__news-header">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-8 ">
                    <div class="card__post-carousel">
                        <div class="item">
                            <!-- Post Article -->
                            <div class="card__post">
                                <div class="card__post__body">
                                    <a href="./article-detail.blade.php">
                                        <img src="images/placeholder/800x600.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                        <div class="card__post__category">

                                        </div>
                                        <div class="card__post__title">
                                            <h2>
                                                <a href="#">
                                                    Global solidarity to fight COVID-19, and indonesia stay safe and health
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        by david hall
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        Descember 09, 2016
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="item">
                            <!-- Post Article -->
                            <div class="card__post">
                                <div class="card__post__body">
                                    <a href="./card-article-detail-v1.html">
                                        <img src="images/placeholder/800x600.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                        <div class="card__post__category">
                                            covid-19
                                        </div>
                                        <div class="card__post__title">
                                            <h2>
                                                <a href="#">
                                                    Global solidarity to fight COVID-19, and indonesia stay safe and health
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        by david hall
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        Descember 09, 2016
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="popular__news-right">
                        <!-- Post Article -->
                        <div class="card__post ">
                            <div class="card__post__body card__post__transition">
                                <a href="./card-article-detail-v1.html">
                                    <img src="images/placeholder/600x400.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="card__post__content bg__post-cover">
                                    <div class="card__post__category">
                                        politics
                                    </div>
                                    <div class="card__post__title">
                                        <h5>
                                            <a href="./card-article-detail-v1.html">
                                                Barack Obama and Family Visit borobudur temple enjoy holiday indonesia.</a>
                                        </h5>
                                    </div>
                                    <div class="card__post__author-info">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="./card-article-detail-v1.html">
                                                    by david hall
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    Descember 09, 2016
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Post Article -->
                        <div class="card__post ">
                            <div class="card__post__body card__post__transition">
                                <a href="./card-article-detail-v1.html">
                                    <img src="images/placeholder/600x400.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="card__post__content bg__post-cover">
                                    <div class="card__post__category">
                                        politics
                                    </div>
                                    <div class="card__post__title">
                                        <h5>
                                            <a href="./card-article-detail-v1.html">
                                                Barack Obama and Family Visit borobudur temple enjoy holiday indonesia.</a>
                                        </h5>
                                    </div>
                                    <div class="card__post__author-info">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="./card-article-detail-v1.html">
                                                    by david hall
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    Descember 09, 2016
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular news header-->
    <!-- Popular news carousel -->
    <div class="popular__news-header-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
            </div>
        </div>
    </div>
    <!-- End Popular news carousel -->
</section>
<!-- End Popular news -->

<!-- Popular news category -->
<section class="pt-0">
    <div class="popular__section-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="wrapper__list__article">
                        <h4 class="border_section">recent post</h4>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <!-- Post Article -->
                            <div class="card__post ">
                                <div class="card__post__body card__post__transition">
                                    <a href="./card-article-detail-v1.html">
                                        <img src="images/placeholder/600x400.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                        <div class="card__post__category">
                                            politics
                                        </div>
                                        <div class="card__post__title">
                                            <h5>
                                                <a href="./card-article-detail-v1.html">
                                                    Barack Obama and Family Visit borobudur temple enjoy holiday indonesia.</a>
                                            </h5>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="./card-article-detail-v1.html">
                                                        by david hall
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        Descember 09, 2016
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-4">
                            <!-- Post Article -->
                            <div class="card__post ">
                                <div class="card__post__body card__post__transition">
                                    <a href="./card-article-detail-v1.html">
                                        <img src="images/placeholder/600x400.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                        <div class="card__post__category">
                                            politics
                                        </div>
                                        <div class="card__post__title">
                                            <h5>
                                                <a href="./card-article-detail-v1.html">
                                                    Barack Obama and Family Visit borobudur temple enjoy holiday indonesia.</a>
                                            </h5>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="./card-article-detail-v1.html">
                                                        by david hall
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        Descember 09, 2016
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 col-md-6">
                            <div class="wrapp__list__article-responsive">
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="./card-article-detail-v1.html">
                                                <img src="images/placeholder/500x400.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                descember 09, 2016
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="./card-article-detail-v1.html">
                                                            6 Best Tips for Building a Good Shipping Boat
                                                        </a>
                                                    </h6>
                                                    <!-- <p class="d-none d-lg-block d-xl-block">
                  Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                  sollicitudin ut est. In fringilla dui dui.
              </p> -->

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="./card-article-detail-v1.html">
                                                <img src="images/placeholder/500x400.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                descember 09, 2016
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="./card-article-detail-v1.html">
                                                            6 Best Tips for Building a Good Shipping Boat
                                                        </a>
                                                    </h6>
                                                    <!-- <p class="d-none d-lg-block d-xl-block">
                  Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                  sollicitudin ut est. In fringilla dui dui.
              </p> -->

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 ">
                            <div class="wrapp__list__article-responsive">
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="./card-article-detail-v1.html">
                                                <img src="images/placeholder/500x400.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                descember 09, 2016
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="./card-article-detail-v1.html">
                                                            6 Best Tips for Building a Good Shipping Boat
                                                        </a>
                                                    </h6>
                                                    <!-- <p class="d-none d-lg-block d-xl-block">
                  Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                  sollicitudin ut est. In fringilla dui dui.
              </p> -->

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="./card-article-detail-v1.html">
                                                <img src="images/placeholder/500x400.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                descember 09, 2016
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="./card-article-detail-v1.html">
                                                            6 Best Tips for Building a Good Shipping Boat
                                                        </a>
                                                    </h6>
                                                    <!-- <p class="d-none d-lg-block d-xl-block">
                  Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                  sollicitudin ut est. In fringilla dui dui.
              </p> -->

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sticky-top">
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">
                                Última postagem
                            </h4>
                            <div class="wrapper__list__article-small">

                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="/article/{{$latestPost->id}}">
                                            <img style="width: 500px; height:400px" class="img-fluid" @if ($latestPost->photo == null || $latestPost->photo == "noimage.jpg")
                                            src="{{asset('assets/img/noimage.jpg')}}"
                                            @else
                                            src="{{ asset('storage/posts/'.$latestPost->photo)}}"
                                            @endif
                                            >
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <div class="article__category">
                                            {{$latestPost->category->name}}
                                        </div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    {{$latestPost->user->name}}
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-dark text-capitalize">
                                                    {{$latestPost->created_at->format('d/m/Y')}}
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="/article/{{$latestPost->id}}">
                                                {{$latestPost->title}}
                                            </a>
                                        </h5>
                                        <p>
                                            {{$latestPost->lead}}
                                        </p>
                                        <a href="/article/{{$latestPost->id}}" class="btn btn-outline-primary mb-4 text-capitalize"> Saiba mais</a>
                                    </div>

                                </div>

                            </div>


                    </div>
                </div>
            </div>
        </div>
        </aside>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Post news carousel -->

    @foreach($categories as $category)
            @php
                $categoryPosts = $category->posts;
            @endphp
    <div class="container" id ="{{$category->name}}">
        <div class="row">
            <div class="col-md-12">
                <aside class="wrapper__list__article">
                    <h4 class="border_section">{{$category->name}}</h4>
                </aside>
            </div>
            <div class="col-md-12">
                <div class="article__entry-carousel">
                    @foreach($categoryPosts as $singlePost)
                        @if($singlePost->id == $latestPost->id)
                            @continue
                        @endif
                    <div class="item">
                        <!-- Post Article -->
                        <div class="article__entry">
                            <div class="article__image">
                                <a href="/article/{{$singlePost->id}}">
                                    <img 
                                    style="width: 340; height:245px"
                                    @if ($singlePost->photo == null || $singlePost->photo == "noimage.jpg")
                                            src="{{asset('assets/img/noimage.jpg')}}"
                                            @else
                                            src="{{ asset('storage/posts/'.$singlePost->photo)}}"
                                            @endif
                                    alt="" 
                                    class="img-fluid">
                                </a>
                            </div>
                            <div class="article__content">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span class="text-primary">
                                        {{$singlePost->user->name}}
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                        {{$singlePost->created_at->format('d/m/Y')}}
                                        </span>
                                    </li>
                                </ul>
                                <h5>
                                    <a href="/article/{{$singlePost->id}}">
                                        {{$singlePost->title}}
                                    </a>
                                </h5>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- End Popular news category -->

    <div class="clearfix"></div>
    </div>
    </div>
    </div>
</section>
<!-- End Popular news category -->
@endsection