@extends('front.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content pt-5 mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Категории</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Название</th>
                                        <th>Количество</th>
                                        <th colspan="3" class="text">Действия</th>
                                    </tr>
                                    @foreach($products as $product)
                                        <tbody>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->pivot->count}}</td>
                                        <td>
                                            <a href="{{route('front.shop', $product->pivot->product_id)}}"><i class="far fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <a href="{{route('front.baskets.edit', $product)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{route('front.baskets.destroy', $product)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-white">
                                                    <i class="fas fa-trash text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </td>
                                        </tbody>
                                    @endforeach
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
