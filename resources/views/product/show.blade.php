@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="d-xl-none push">
            <div class="row gutters-tiny">
                <div class="col-6">
                    <button type="button" class="btn btn-light btn-block" data-toggle="class-toggle"
                            data-target=".js-ecom-div-nav" data-class="d-none">
                        <i class="fa fa-fw fa-bars text-muted mr-1"></i> Navigation
                    </button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-light btn-block" data-toggle="class-toggle"
                            data-target=".js-ecom-div-cart" data-class="d-none">
                        <i class="fa fa-fw fa-shopping-cart text-muted mr-1"></i> Cart (3)
                    </button>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 10%">

            <div class="col-xl-12 order-xl-0">
                <div class="block">
                    <div class="block-content">
                        <div class="row items-push">
                            <div class="col-md-6">
                                <div class="row gutters-tiny js-gallery img-fluid-100 js-gallery-enabled">
                                    <div class="col-12 mb-3">
                                        <a target="_blank" class="img-link img-link-zoom-in img-lightbox"
                                           href="/images/{{$product->product_image}}">
                                            <img class="img-fluid" src="/images/{{$product->product_image}}" style="height: 500px" alt="">
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-between align-items-center">

                                    <div class="font-size-sm font-w600 text-success"><b style="text-transform: capitalize">{{ $product->product_name }}</b>
                                    </div>

                                    <div class="font-size-h2 font-w700">
                                        ${{ $product->product_price }}
                                    </div>

                                </div>
                                <hr>
                                <p>{!! $product->product_desc !!}</p>
                                <hr>
                                <p class="text-muted">{{ $product->user->name }}
                                    , {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $product->created_at)->diffForHumans() }}</p>

                                <a class="text-danger" href="#">{{ $product->category->name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection