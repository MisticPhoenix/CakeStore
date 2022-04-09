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
                                <form action="{{route('front.baskets.update', $product->pivot->id)}}" method="POST">
                                    @csrf
                                    @method('patch')
                                    <div class="form-group mt-1">
                                        <input type="number" value="1" aria-label="Search"
                                        style="width: 100px;" class="form-control" name="count">
                                        @error('count')
                                        <div class="text-danger">Это пустая строка</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-md my-0 p">
                                        Update to basket</i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
