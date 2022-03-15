@extends('layouts.main', [ 'pageSlug' => 'index'])

@section('title', config('app.name'))

@section('content')

@if($latestPost != null)
<!-- Popular news -->
<section>
    <!-- Popular news  header-->
    <div class="popular__news-header">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="card__post-carousel">
                        @foreach($lastUpdatedPosts as $lastUpdatedPost)
                        <div class="item">
                            <!-- Post Article -->
                            <div class="card__post">
                                <div class="card__post__body">
                                    <a href="{{route('article-details', $lastUpdatedPost->id)}}">
                                        <img @if ($lastUpdatedPost->photo == null || $lastUpdatedPost->photo == "noimage.jpg")
                                        src="{{asset('assets/img/noimage.jpg')}}"
                                        @else
                                        src="{{ asset('storage/posts/'.$lastUpdatedPost->photo)}}"
                                        @endif" class="img-fluid" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                        <div class="card__post__category">
                                            {{$lastUpdatedPost->category->name}}
                                        </div>
                                        <div class="card__post__title">
                                            <h2>
                                                <a href="{{route('article-details', $lastUpdatedPost->id)}}">
                                                    {{$lastUpdatedPost->title}}
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="{{route('article-details', $lastUpdatedPost->id)}}">
                                                        por {{$lastUpdatedPost->user->name}}
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        {{$lastUpdatedPost->created_at->format('d/m/Y')}}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        @endforeach
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
                        @foreach($posts as $post)
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{route('article-details', $post->id)}}">
                                            <img @if ($post->photo == null || $post->photo == "noimage.jpg")
                                            src="{{asset('assets/img/noimage.jpg')}}"
                                            @else
                                            src="{{ asset('storage/posts/'.$post->photo)}}"
                                            @endif" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    por {{$post->user->name}}
                                                </span>,
                                            </li>

                                            <li class="list-inline-item">
                                                <span>
                                                    {{$post->created_at->format('d/m/Y')}}
                                                </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="{{route('article-details', $post->id)}}">
                                                {{$post->title}}
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
    </div>
    <!-- End Popular news carousel -->
</section>
<!-- End Popular news -->

<!-- Popular news category -->
<section class="pt-0">
    <div class="popular__section-news">
        <div class="container">
            <div class="row">
                @if($secondMostRecentPost || $thirdMostRecentPost)
                <div class="col-md-12 col-lg-8">
                    <div class="wrapper__list__article">
                        <h4 class="border_section">Posts mais recentes</h4>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 col-md-6 mb-4">
                            <!-- Post Article -->
                            <div class="card__post ">
                                <div class="card__post__body card__post__transition">
                                    <a href="{{route('article-details', $secondMostRecentPost->id)}}">
                                        <img @if ($secondMostRecentPost->photo == null || $secondMostRecentPost->photo == "noimage.jpg")
                                        src="{{asset('assets/img/noimage.jpg')}}"
                                        @else
                                        src="{{ asset('storage/posts/'.$secondMostRecentPost->photo)}}"
                                        @endif" class="img-fluid" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                        <div class="card__post__category">
                                            {{$secondMostRecentPost->category->name}}
                                        </div>
                                        <div class="card__post__title">
                                            <h5>
                                                <a href="{{route('article-details', $secondMostRecentPost->id)}}">
                                                    {{$secondMostRecentPost->title}}</a>
                                            </h5>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="{{route('article-details', $secondMostRecentPost->id)}}">
                                                        por {{$secondMostRecentPost->user->name}}
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        {{$secondMostRecentPost->created_at->format('d/m/Y')}}
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
                            @if($thirdMostRecentPost)
                            <div class="card__post ">
                                <div class="card__post__body card__post__transition">
                                    <a href="{{route('article-details', $thirdMostRecentPost->id)}}">
                                        <img @if ($thirdMostRecentPost->photo == null || $thirdMostRecentPost->photo == "noimage.jpg")
                                        src="{{asset('assets/img/noimage.jpg')}}"
                                        @else
                                        src="{{ asset('storage/posts/'.$thirdMostRecentPost->photo)}}"
                                        @endif" class="img-fluid" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                        <div class="card__post__category">
                                            {{$thirdMostRecentPost->category->name}}
                                        </div>
                                        <div class="card__post__title">
                                            <h5>
                                                <a href="{{route('article-details', $thirdMostRecentPost->id)}}">
                                                    {{$thirdMostRecentPost->title}}</a>
                                            </h5>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="{{route('article-details', $thirdMostRecentPost->id)}}">
                                                        por {{$thirdMostRecentPost->user->name}}
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        {{$thirdMostRecentPost->created_at->format('d/m/Y')}}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 col-md-6">
                            <div class="wrapp__list__article-responsive">
                                @foreach($recentPosts as $recentPost)
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="{{route('article-details', $recentPost->id)}}">
                                                <img @if ($recentPost->photo == null || $recentPost->photo == "noimage.jpg")
                                                src="{{asset('assets/img/noimage.jpg')}}"
                                                @else
                                                src="{{ asset('storage/posts/'.$recentPost->photo)}}"
                                                @endif" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                por {{$recentPost->user->name}}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                {{$recentPost->created_at->format('d/m/Y')}}
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="{{route('article-details', $recentPost->id)}}">
                                                           {{$recentPost->title}}
                                                        </a>
                                                    </h6>
                                                    <p class="d-none d-lg-block d-xl-block">
                                                        {{$recentPost->lead}}
                                                    </p> 

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 ">
                            <div class="wrapp__list__article-responsive">
                                @foreach($recentPosts2 as $recentPost2)
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="{{route('article-details', $recentPost2->id)}}">
                                                <img @if ($recentPost2->photo == null || $recentPost2->photo == "noimage.jpg")
                                                src="{{asset('assets/img/noimage.jpg')}}"
                                                @else
                                                src="{{ asset('storage/posts/'.$recentPost2->photo)}}"
                                                @endif" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                por {{$recentPost2->user->name}}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                {{$recentPost2->created_at->format('d/m/Y')}}
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="{{route('article-details', $recentPost2->id)}}">
                                                           {{$recentPost2->title}}
                                                        </a>
                                                    </h6>
                                                    <p class="d-none d-lg-block d-xl-block">
                                                        {{$recentPost2->lead}}
                                                    </p> 

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
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
    <div class="container" id="{{$category->name}}">
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
@else
<div style="height: 75.3vh;">   
</div>
@endif

@endsection