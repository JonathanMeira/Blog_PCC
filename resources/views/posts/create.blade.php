@extends('layouts.app', ['page' => __('Posts'), 'pageSlug' => 'create.post'])


@section('content')

@include('ckfinder::setup')

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <h5 class="title">{{ __('Criar post') }}</h5>
        </div>
        <form method="post" action="{{ route('post.store') }}" autocomplete="off" enctype="multipart/form-data">
            <div class="card-body">
                @csrf

                @include('alerts.success')

                <div class="input-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Titulo') }}" required>
                    @include('alerts.feedback', ['field' => 'title'])
                </div>
                <div class="input-group{{ $errors->has('lead') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <input type="text" name="lead" class="form-control{{ $errors->has('lead') ? ' is-invalid' : '' }}" placeholder="{{ __('Lead') }}" required>
                    @include('alerts.feedback', ['field' => 'lead'])
                </div> 
                <div class="input-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <select name="category_id" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Categoria') }}" required>
                        <option value=""> Selecione... </option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id}}"> {{$category->name }}</option>
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
                        
                    <textarea id="description" name="description" class="CKEDITOR" required></textarea>

                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                         var editor = CKEDITOR.replace('description')
                         CKFinder.setupCKEditor( editor );
                    </script>   
                    
                    @include('alerts.feedback', ['field' => 'description'])
                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">{{ __('Criar') }}</button>
            </div>
        </form>
    </div>
</div>

@endsection