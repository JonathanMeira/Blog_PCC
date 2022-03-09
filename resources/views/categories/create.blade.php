@extends('layouts.app', ['page' => __('Categories'), 'pageSlug' => 'create.category'])


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
            <h5 class="title">{{ __('Criar categoria') }}</h5>
        </div>
        <form method="post" action="{{ route('category.store') }}" autocomplete="off">
            <div class="card-body">
                @csrf

                @include('alerts.success')

                <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome') }}">
                    @include('alerts.feedback', ['field' => 'name'])
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">{{ __('Criar') }}</button>
            </div>
        </form>
    </div>
</div>

@endsection