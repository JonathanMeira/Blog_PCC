@extends('layouts.app', ['page' => __('Users'), 'pageSlug' => 'users'])


@section('content')

<style type="text/css">
    .user-links {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

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
            <div class="card-header">
                    <span class="h2 card-title col-9"> Usuários</span>
                    <a class="btn btn-simple col-md-3" href="{{ route('user.create') }}">
                        <p>{{ __('Criar novo usuario') }}</p>
                    </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                            <tr>
                                <th>
                                    Id
                                </th>
                                <th>
                                    Nome
                                </th>
                                <th>
                                    E-mail
                                </th>
                                <th class="text-center">
                                    Super-admin?
                                </th>
                                <th>
                                    Opções
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{$user->id}}
                                </td>
                                <td>
                                    {{$user->name}}
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                                <td class="text-center">
                                    @if($user->role == 'admin')
                                    Sim
                                    @else
                                    Não
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('user.edit', $user->id)}}">
                                        <i class="fas fa-edit fa-lg"></i>
                                    </a>
                                    <a href="{{route('user.delete', $user->id)}}">
                                        <i class="fa fa-trash fa-lg"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="user-links">
                {{$users->links()}}
            </div>
        </div>
    </div>
</div>

@endsection