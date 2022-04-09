@extends('front.layouts.main')
@section('content')
    <main class="mt-5 pt-4">
        <div class="container dark-grey-text mt-5">
            <div class="row wow fadeIn">
                <div class="col-md-6 mb-4">
                    <img src="{{Storage::url($product->image)}}" alt="macbook" class="img-fluid">
                </div>
                <div class="col-md-6 mb-4">
                    <div class="p-4">
                        <div class="mb-4">
                            <a href="#">
                                <span class="badge purple mr-1">{{$product->categories->title}}</span>
                            </a>
                            <a href="#">
                                <span class="badge blue mr-1">New</span>
                            </a>
                        </div>
                        <p class="lead">
                            <span class="mr-1">
                                <del>{{$product->price+100}}$</del>
                            </span>
                            <span class="mr-1">
                                {{$product->price}}$
                            </span>
                        </p>
                        <p class="lead font-weight-bolt">Description</p>
                        <p>{{$product->content}}</p>
                        @auth
                            <form action="{{route('front.baskets.store')}}" class="d-flex justify-content-left" method="POST">
                            @csrf
                                <input type="number" value="1" aria-label="Search"
                                style="width: 100px;" class="form-control" name="count">

                                <button type="submit" class="btn btn-primary btn-md my-0 p">
                                   Add to basket <i class="fa fa-shopping-cart ml-1"></i>
                                </button>

                                <div class="form-group">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                </div>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
