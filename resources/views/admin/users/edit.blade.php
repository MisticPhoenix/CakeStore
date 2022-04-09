@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создать категорию</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">categories</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <h5>Обновление категории</h5>
                    </div>
                    <form action="{{route('admin.users.update', $user)}}" method="POST" class="w-25">
                        @csrf
                        @method('patch')
                        <div class="form-group mt-1">
                            <input type="text" class="form-control" name="name" placeholder="Введите название категории"
                                value="{{$user->name}}">
                            @error('name')
                            <div class="text-danger">Это пустая строка</div>
                            @enderror

                            <input type="text" class="form-control mt-1" name="email" placeholder="Введите название категории"
                                   value="{{$user->email}}">
                            @error('email')
                            <div class="text-danger">Это пустая строка</div>
                            @enderror

                            <div class="form-group w-50">
                                <label>Выберите роль</label>
                                <select name="role" class="form-control">
                                    @foreach($roles as $id => $role)
                                        <option value="{{$id}}"
                                            {{$id == old('role') ? 'selected' : ''}}
                                        >{{$role}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group w-50">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Создать</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection
