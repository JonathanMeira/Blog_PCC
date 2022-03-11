@extends('layouts.app', ['page' => __('Posts'), 'pageSlug' => 'create.post'])


@section('content')

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
        <form method="post" action="{{ route('post.store') }}" autocomplete="off">
            <div class="card-body">
                @csrf

                @include('alerts.success')

                <div class="input-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Titulo') }}">
                    @include('alerts.feedback', ['field' => 'title'])
                </div>
                <div class="input-group{{ $errors->has('lead') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <input type="text" name="lead" class="form-control{{ $errors->has('lead') ? ' is-invalid' : '' }}" placeholder="{{ __('Lead') }}">
                    @include('alerts.feedback', ['field' => 'lead'])
                </div> 
                <div class="input-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                </div> 
                        
                        <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
            

                        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('.ckeditor').ckeditor();
                            });
                        </script>
                        <script type="text/javascript">
                            CKEDITOR.replace('wysiwyg-editor', {
                                filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
                                filebrowserUploadMethod: 'form'
                            });
                        </script>   
                        

                        </html>
                    
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