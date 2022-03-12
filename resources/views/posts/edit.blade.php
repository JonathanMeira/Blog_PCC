@extends('layouts.app', ['page' => __('Posts'), 'pageSlug' => 'posts'])


@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Editar post: '. $post->title. ' ID: '. $post->id) }}</h5>
                </div>
                <form method="post" action="{{ route('post.update', $post->id) }}" autocomplete="off">
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