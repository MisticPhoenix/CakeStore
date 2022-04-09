@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создать пост</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.products.index')}}">Posts</a></li>
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
                        <h5>Добавление пост</h5>
                    </div>
                    <form action="{{route('admin.products.update', $id)}}" method="POST", enctype="multipart/form-data" class="w-25">
                    @csrf
                    @method('patch')
                        <div class="form-group">

                            <input type="file" class="mb-1" name="image" placeholder="Введите название категории">
                            @error('image')
                                <div class="text-danger">Это пустая строка</div>
                            @enderror

                            <input type="text" class="form-control mb-1" name="title" placeholder="Введите название категории"
                                   value="{{$product->title}}">
                            @error('title')
                                <div class="text-danger">Это пустая строка</div>
                            @enderror

                            <input type="text" class="form-control mb-1" name="content" placeholder="Введите название категории"
                                   value="{{$product->content}}">
                            @error('content')
                                <div class="text-danger">Это пустая строка</div>
                            @enderror

                            <input type="number" class="form-control mb-1" name="price" placeholder="Введите название категории"
                                   value="{{$product->price}}">
                            @error('price')
                                <div class="text-danger">Это пустая строка</div>
                            @enderror

                            <label>Выберите категорию</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{$category->id == old('category_id') ? 'selected' : ''}}
                                    >{{$category->title}}</option>
                                @endforeach
                            </select>

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
