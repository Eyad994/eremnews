@extends('layouts.app')

@section('content')

    @if(auth()->check())
    <div class="col-md-12">
        <a href="{{ route('product.create') }}" class="btn btn-success btn1">Add Product</a>
    </div>
    @endif

    <div class="container">


        <div class="row">

            @foreach($products as $product)

                <div class="col-lg-4 d-flex js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50"
                     data-class="animated fadeIn" style="padding-top: 15px">
                    <a class="block block-link-pop" href="{{ route('product.show', [$product->id]) }}">
                        <div class="card">
                            <img class="card-img-top" src="images\{{ $product->product_image }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('product.show', [$product->id]) }}" style="text-transform: capitalize">{{ $product->product_name }}</a></h5>
                                <hr>
                                <a class="card-text">{!! $product->product_desc !!}</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Created By: <b>{{ $product->user->name }}</b>, {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $product->created_at)->diffForHumans() }} </small>

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

            {{ $products->onEachSide(1)->links() }}

    </div>
@endsection
