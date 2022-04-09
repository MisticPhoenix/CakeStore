@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Посты</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.products.index')}}">Posts</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 mb-3">
                        <a href="{{route('admin.products.create')}}" class="btn btn-block btn-success">Создать</a>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Посты</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th>Описание</th>
                                            <th colspan="3" class="text">Действия</th>
                                        </tr>
                                    </thead>
                                    @foreach($products as $product)
                                        <tbody>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->title}}</td>
                                            <td>{{\Illuminate\Support\Str::limit($product->content, 30, "...")}}</td>
                                            <td>
                                                <a href="{{route('admin.products.show', $product)}}"><i class="far fa-eye"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.products.edit', $product)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                            <td>
                                                <form action="{{route('admin.products.destroy', $product)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <button type="submit" class="border-0 bg-white">
                                                        <i class="fas fa-trash text-danger" role="button"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
