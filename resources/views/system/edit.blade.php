@extends('layouts.app', ['page' => __('System'), 'pageSlug' => 'system'])


@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="title">{{ __('Editar sistema') }}</h5>
            </div>
            <form method="post" action="{{ route('system.update', $system->id) }}" autocomplete="off" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')


                    @include('alerts.success')

                    <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-single-02"></i>
                            </div>
                        </div>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ $system->name }}">
                        @include('alerts.feedback', ['field' => 'name'])
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-eye-dropper"></i>
                            </div>
                        </div>
                        <input type="color" name="color" class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" value="{{ $system->color }}">
                        @include('alerts.feedback', ['field' => 'color'])
                    </div>
                    <label class ="btn btn-default" for="logo">Alterar logo do site</label>
                    <input 
                        class="d-none"
                        type="file"
                        id="logo" 
                        name="logo"
                        accept="image/png, image/jpeg, image/jpg, image/gif"/>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">{{ __('Atualizar') }}</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-user">
            <div class="card-body">
                <p class="card-text">
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="#">
                            <img class="avatar" 
                            @if ($system->logo == null || $system->logo == "noimage.jpg")
                                src="{{asset('assets/img/noimage.jpg')}}"
                            @else 
                                src="{{ asset('storage/system/'.$system->logo)}}"
                            @endif
                            >
                            <h5 class="title">Logo do site</h5>
                        </a>
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>


@endsection