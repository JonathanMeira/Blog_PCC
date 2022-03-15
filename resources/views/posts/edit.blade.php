@extends('layouts.app', ['page' => __('Posts'), 'pageSlug' => 'posts'])


@section('content')
@include('ckfinder::setup')

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<style>
    select option{
        background-color: #27293d;
    }
    .input-group select{
        appearance:none;
        -webkit-appearance:none;
        -moz-appearance:none;
        -ms-appearance:none;
        background-position: calc(100% - 12px) center !important;
        background: url("data:image/svg+xml,<svg height='10px' width='10px' viewBox='0 0 16 16' fill='%23000000' xmlns='http://www.w3.org/2000/svg'><path d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/></svg>") no-repeat;
        padding: 8px 32px 8px 16px;
    }
</style>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Editar post: '. $post->title. ' ID: '. $post->id) }}</h5>
                </div>
                <form method="post" action="{{ route('post.update', $post->id) }}" autocomplete="off" enctype="multipart/form-data">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                <label>{{ __('Titulo') }}</label>
                                <input type="text" title="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome') }}" value="{{ old('title', $post->title) }}">
                                @include('alerts.feedback', ['field' => 'title'])
                            </div>
                            <div class="form-group{{ $errors->has('lead') ? ' has-danger' : '' }}">
                                <label>{{ __('Lead') }}</label>
                                <input type="text" lead="lead" class="form-control{{ $errors->has('lead') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome') }}" value="{{ old('lead', $post->lead) }}">
                                @include('alerts.feedback', ['field' => 'lead'])
                            </div>
                            <div class="input-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
                            
                                <select name="category_id" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Categoria') }}" required>
                                    <option value=""> Selecione... </option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id}}" {{ $category->id == $post->category_id ? 'selected' : '' }}> {{$category->name }}</option>
                                    @endforeach
                                </select>
                                @include('alerts.feedback', ['field' => 'category_id'])
                            </div> 
                            <label class ="btn btn-default"for="photo">Enviar foto principal do post</label>
                            <input 
                                class="d-none"
                                type="file"
                                id="photo" 
                                name="photo"
                                accept="image/png, image/jpeg, image/jpg, image/gif"/>
                            <div class="input-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    
                                <textarea id="description" name="description" class="CKEDITOR" required> {{$post->description}}</textarea>
            
                                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                <script>
                                     var editor = CKEDITOR.replace('description')
                                     CKFinder.setupCKEditor( editor );
                                </script>   
                                
                                @include('alerts.feedback', ['field' => 'description'])
                                
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Salvar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection