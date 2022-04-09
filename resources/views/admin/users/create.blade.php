@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создать пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Users</a></li>
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
                        <h5>Добавление пользователя</h5>
                    </div>
                    <form action="{{route('admin.users.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control mt-1" name="name" placeholder="Введите имя пользователя"
                                   value="{{old('name')}}">
                            @error('name')
                            <div class="text-danger">Это пустая строка</div>
                            @enderror

                            <input type="text" class="form-control mt-1" name="email" placeholder="Введите email"
                                   value="{{old('email')}}">
                            @error('email')
                            <div class="text-danger">Это пустая строка</div>
                            @enderror

                            <input type="text" class="form-control mt-1" name="password" placeholder="Введите пароль"
                                   value="{{old('password')}}">
                            @error('password')
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
