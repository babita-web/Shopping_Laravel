@extends('layouts.frontend')
@section('title')
    Home | Babita
@endsection
@section('content')

    @include('frontend.slider.slider')
    <section class="py-5">
        <div class="container">
            <div class="row">

                <!--Grid column-->
                <div hidden >{{$products = \App\Product::all() }}</div>

                @foreach($products as $product)
                    <div class="col-md-3 col-6 mb-3">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('assets/img/'. $product->image) }}"
                                     class="card-img-top" alt="">
                                <a>
                                    <div class="{{ $product->slug }}"></div>
                                </a>
                            </div>


                            <!--Card content-->
                            <div class="card-body text-center">
                                <!--Category & Title-->
                                <a href="" class="grey-text">
                                    <h5>{{ $product->name }}</h5>
                                </a>
                                <h5>
                                    <strong>
                                        <a href="" class="dark-grey-text">{{ $product->details }}
                                        </a>
                                        <a>
                                            <div class="{{ $product->description}}"></div>
                                        </a>
                                    </strong>
                                </h5>

                                <h4 class="font-weight-bold blue-text">
                                    <strong>{{ $product->price }}$</strong>
                                </h4>



                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                @endforeach
            </div>
        </div>


    </section>

@endsection
