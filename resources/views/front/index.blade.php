@extends('front.layouts.main')
@section('style')
    <style>
        html,
        body,
        header,
        .carousel{
            height: 60vh;
        }
        @media (max-width: 740px) {
            html,
            body,
            header,
            .carousel{
                height: 100vh;
            }
        }
        @media (min-width: 800px) and (max-width: 85px) {
            html,
            body,
            header,
            .carousel{
                height: 100vh;
            }
        }
    </style>
@endsection

@section('content')
    <div id="carousel-ex" class="carousel slide carousel-fade pt-4 mt-5 h-75" data-ride="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-target="#carousel-ex" data-slide-to="0"></li>
            <li data-target="#carousel-ex" data-slide-to="1"></li>
            <li data-target="#carousel-ex" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view" style="background-image: url('https://images.pexels.com/photos/3458448/pexels-photo-3458448.jpeg?cs=srgb&dl=pexels-designecologist-3458448.jpg&fm=jpg');
                    background-repeat: no-repeat; background-size: cover;">
                    <div class="rgba-black-strong d-flex justify-content-center align-items-center">

                        <div class="text-center white-text mx-5 wow fadeIn">

                             <h1 class="mb-4">
                                 <strong>Clothes Store</strong>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, reiciendis</p>

                                 <p class="mb-4 d-none d-md-block">
                                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorum inventore laboriosam nemo quia sint!
                                 </p>
                                 <a href="#" class="btn btn-outline-white btn-lg">
                                     Lorem ipsum dolor. <i class="fa fa-graduation-cap ml-2"></i>
                                 </a>
                             </h1>
                         </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view" style="background-image: url('https://images.pexels.com/photos/3458448/pexels-photo-3458448.jpeg?cs=srgb&dl=pexels-designecologist-3458448.jpg&fm=jpg');
                    background-repeat: no-repeat; background-size: cover;">
                    <div class="rgba-black-strong d-flex justify-content-center align-items-center">

                        <div class="text-center white-text mx-5 wow fadeIn">

                            <h1 class="mb-4">
                                <strong>Clothes Store</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, reiciendis</p>

                                <p class="mb-4 d-none d-md-block">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorum inventore laboriosam nemo quia sint!
                                </p>
                                <a href="#" class="btn btn-outline-white btn-lg">
                                    Lorem ipsum dolor. <i class="fa fa-graduation-cap ml-2"></i>
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view" style="background-image: url('https://images.pexels.com/photos/3458448/pexels-photo-3458448.jpeg?cs=srgb&dl=pexels-designecologist-3458448.jpg&fm=jpg');
                    background-repeat: no-repeat; background-size: cover;">
                    <div class="rgba-black-strong d-flex justify-content-center align-items-center">

                        <div class="text-center white-text mx-5 wow fadeIn">

                            <h1 class="mb-4">
                                <strong>Clothes Store</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, reiciendis</p>

                                <p class="mb-4 d-none d-md-block">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dolorum inventore laboriosam nemo quia sint!
                                </p>
                                <a href="#" class="btn btn-outline-white btn-lg">
                                    Lorem ipsum dolor. <i class="fa fa-graduation-cap ml-2"></i>
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#carousel-ex" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a href="#carousel-ex" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    <main>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">
                <span class="navbar-brand">Categories:</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nextNav"
                        aria-controls="nextNav" aria-expanded="false" aria-label="Toggle navigation"
                >
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="next-Nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{!$categoryId? 'active' : ''}}">
                            <a href="{{route('front.home')}}" class="nav-link">All</a>
                        </li>
                        @foreach($categories as $category)
                            <li class="nav-item {{$categoryId == $category->id ? 'active' : ''}}">
                                <a href="{{route('front.homeByCategories', $category)}}" class="nav-link">{{$category->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>

            <section class="text-center mb-4">
                <div class="row wow fadeIn">
                    @foreach($products as $product)
                        <div class="col-lg-3 col-md6 mb-4">
                            <div class="card">
                                <div class="view ovelay">
                                    <img class="card-img-top" src="{{Storage::url($product->image)}}">
                                    <a href="{{route('front.shop', $product)}}">
                                        <span class="mask rgba-white slight"></span>
                                    </a>
                                </div>

                                <div class="card-body text-center">
                                    <a href="#" class="grey-text">
                                        <h5>{{$product->categories->title}}</h5>
                                    </a>
                                    <h5>
                                        <strong>
                                            <a href="#" class="dark-grey-text">{{$product->title}}
                                                <span class="badge badge-pill danger-color">NEW</span>
                                            </a>
                                        </strong>
                                    </h5>
                                    <h4 class="font-weight-bold black-text">
                                        <strong>{{$product->price}}$</strong>
                                    </h4>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection
