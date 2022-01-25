@extends('layouts.app', ['page' => __('Categories'), 'pageSlug' => 'categories'])


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
                        <h4 class="card-title"> Categorias</h4>
                    </div>
                    <div class="card-body">
                        <div class="user-links">
                            {{$categories->links()}}
                        </div>
                        <a href="{{ route('category.create') }}">
                            <p>{{ __('Criar nova categoria') }}</p>
                        </a>
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
                                Opções
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        {{$category->id}}
                                    </td>
                                    <td>
                                        {{$category->name}}
                                    </td>
                                    <td>
                                        <a href="{{route('category.edit', $category->id)}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{route('category.delete', $category->id)}}">
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