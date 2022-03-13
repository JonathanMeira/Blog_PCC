@extends('layouts.main', [ 'pageSlug' => 'article'])

@section('title', config('app.name'))

@section('content')
<section class="pb-80">
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
                                    <img src="images/placeholder/logo.jpg" alt="">
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
                                <i class="fa fa-tags">
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
                            
                            <img
                            alt="" 
                            class="img-fluid rounded-circle"
                            style="max-width: 64px"
                                @if ($user->photo == null || $user->photo == "noimage.jpg")
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
                        <h3 class="comments-title">Inserir count dos Comments do post aqui:</h3>

                        <ol class="comment-list">
                            <li class="comment">
                                <aside class="comment-body">
                                    <div class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img src="images/placeholder/80x80.jpg" class="avatar" alt="image">
                                            <b class="fn">Sinmun</b>
                                            <span class="says">says:</span>
                                        </div>

                                        <div class="comment-metadata">
                                            <a href="#">
                                                <span>April 24, 2019 at 10:59 am</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="comment-content">
                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown
                                            printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>

                                </aside>
                            </li>
                        </ol>
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Reply</h3>

                            <form class="comment-form">
                                <p class="comment-notes">
                                    <span id="email-notes">Your email address will not be published.</span>
                                    Required fields are marked
                                    <span class="required">*</span>
                                </p>
                                <p class="comment-form-comment">
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
                                </p>
                                <p class="form-submit">
                                    <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
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
                            you may also like
                        </h4>

                        <div class="article__entry-carousel-three">
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
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
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
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
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
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
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
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
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
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
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
    </div>
</section>
@endsection