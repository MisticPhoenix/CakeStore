@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Users</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 mb-3">
                        <a href="{{route('admin.users.create')}}" class="btn btn-block btn-success">Создать</a>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Пользователи</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th colspan="3" class="text">Действия</th>
                                        </tr>
                                        </thead>
                                        @foreach($users as $user)
                                            <tbody>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>
                                                    <a href="{{route('admin.users.show', $user)}}"><i class="far fa-eye"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.users.edit', $user)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{route('admin.users.destroy', $user)}}" method="POST">
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
