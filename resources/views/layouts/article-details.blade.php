@extends('layouts.main', [ 'pageSlug' => 'article'])

@section('title', config('app.name'))

@section('content')
<section class="pb-80">
    @if (\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- content article detail -->
                <!-- Article Detail -->
                <div class="wrap__article-detail">
                    <div class="wrap__article-detail-title">
                        <h1>
                            {{$post->title}}
                        </h1>
                        <h3>
                            {{$post->lead}}
                        </h3>
                    </div>
                    <hr>
                    <div class="wrap__article-detail-info">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <figure class="image-profile">
                                    <img @if ($user->photo == null || $user == "noimage.jpg")
                                    src="{{asset('assets/img/noimage.jpg')}}"
                                    @else
                                    src="{{ asset('storage/users/'.$user->photo)}}"
                                    @endif
                                    >
                                </figure>
                            </li>
                            <li class="list-inline-item">

                                <span>
                                    Por
                                </span>
                                <span>
                                    {{$user->name}}
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span class="text-dark text-capitalize ml-1">
                                    {{$post->created_at->format('d/m/Y')}}
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    {{$category->name}}
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="wrap__article-detail-image mt-4">
                        <figure>
                            <img src="images/placeholder/800x500.jpg" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="wrap__article-detail-content">
                        <div class="total-views">
                            {!!$post->description!!}
                        </div>
                    </div>
                    <!-- end content article detail -->

                    <!-- tags -->
                    <!-- News Tags -->
                    <div class="blog-tags">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-tags" style="color:black">
                                </i>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    {{$category->name}}
                                </a>
                        </ul>
                    </div>
                    <!-- end tags-->

                    <!-- authors-->
                    <!-- Profile author -->
                    <div class="wrap__profile">
                        <div class="wrap__profile-author">
                            <figure>

                                <img alt="" class="img-fluid rounded-circle" style="max-width: 64px" @if ($user->photo == null || $user->photo == "noimage.jpg")
                                src="{{asset('assets/img/noimage.jpg')}}"
                                @else
                                src="{{ asset('storage/users/'.$user->photo)}}"
                                @endif
                                >

                            </figure>
                            <div class="wrap__profile-author-detail">
                                <h4>{{$user->name}}</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end author-->

                    <!-- comment -->
                    <!-- Comment  -->
                    <div id="comments" class="comments-area">
                        <h3 class="comments-title">
                            Comentários({{count($comments)}}):
                        </h3>

                        @foreach($comments as $commentary)
                        <ol class="comment-list">
                            <li class="comment">
                                <aside class="comment-body">
                                    <div class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img style="max-height: 32px" @if ($commentary->user->photo == null || $commentary->user->photo == "noimage.jpg")
                                            src="{{asset('assets/img/noimage.jpg')}}"
                                            @else
                                            src="{{ asset('storage/users/'.$commentary->user->photo)}}"
                                            @endif
                                            >
                                            <b class="fn">
                                                {{$commentary->user->name}}
                                            </b>
                                            <span class="says">:</span>
                                        </div>

                                        <div class="comment-metadata">
                                            <span>{{$commentary->created_at->format('d/m/Y')}}
                                                @if(!Auth::guest() && $commentary->user_id == auth()->user()->id)
                                                <span class="comment-icons">
                                                    <form method="POST" id="delete-comment" action="/commentary/delete/{{$commentary->id}}" enctype="multipart/form-data">
                                                        @csrf
                                                            <i class="fa fa-trash fa-lg" 
                                                            style="color: {{config('app.color')}}; cursor:pointer;"
                                                            onclick="event.preventDefault();  document.getElementById('delete-comment').submit();"
                                                            ></i>
                                                    </form>
                                                </span>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>
                                            {{$commentary->text}}
                                        </p>
                                    </div>

                                </aside>
                            </li>
                        </ol>
                        @endforeach
                        <div class="comment-respond" id='commentary'>
                            <h3 class="comment-reply-title">Deixe seu comentário</h3>
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                            @endif
                            <form class="comment-form" method="post" action="{{ route('commentary.store', $post->id) }}" autocomplete="off">
                                @csrf
                                <p class="comment-form-comment">
                                    <textarea name="comment" id="comment" cols="45" rows="5" maxlength="280" required="required"></textarea>
                                </p>
                                <p class="form-submit">
                                    <input type="submit" name="submit" id="submit" class="submit" value="Enviar comentário">
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- Comment -->
                    <!-- end comment -->
                    <br>
                    <div class="clearfix"></div>

                    <div class="related-article">
                        <h4>
                            Sugestões com base no que você vê
                        </h4>
                        <div class="article__entry-carousel-three">
                            @foreach($posts as $p)
                            @if($p->id == $post->id)
                            @continue
                            @endif
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="/article/{{$p->id}}">
                                            <img class="img-fluid" @if ($p->photo == null || $p->photo == "noimage.jpg")
                                            src="{{asset('assets/img/noimage.jpg')}}"
                                            @else
                                            src="{{ asset('storage/posts/'.$p->photo)}}"
                                            @endif
                                            >
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    {{$p->user->name}}
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    {{$p->created_at->format('d/m/Y')}}
                                                </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="/article/{{$p->id}}">
                                                {{$p->lead}}
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
    </div>
</section>
@endsection