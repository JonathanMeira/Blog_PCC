@extends('layouts.app', ['page' => __('Posts'), 'pageSlug' => 'posts'])


@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Posts</h4>
                    </div>
                    <div class="card-body">
                        <div class="user-links">
                            {{$posts->links()}}
                        </div>
                        <a href="{{ route('post.create') }}">
                            <p>{{ __('Criar novo post') }}</p>
                        </a>
                    <div class="table-responsive">
                      <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                          <tr>
                            <th>
                              Id
                            </th>
                            <th>
                              Titulo
                            </th>
                            <th>
                                Usuario
                            </th>
                            <th>
                                Opções
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        {{$post->id}}
                                    </td>
                                    <td>
                                        {{$post->title}}
                                    </td>
                                    <td>
                                        {{$post->user()->name}}
                                    </td>
                                    <td>
                                        <a href="{{route('post.edit', $post->id)}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{route('post.delete', $post->id)}}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection