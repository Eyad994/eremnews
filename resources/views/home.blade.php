@extends('layouts.app')

@section('content')

        <div class="container-fluid">


            <div class="row page-titles" style="    margin-top: -24px;">
                <div class="col-lg-2"></div>
                <div class="col-lg-8"> <h4 class="text-themecolor">Products</h4></div>
                <div class="col-lg-2"><a href="{{ route('product.create') }}" style="color: white;width: 150px" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img" >
                                            <a href="{{ route('product.show', [$product->id]) }}"><img style="max-width: 100% !important;min-width: 100% !important;height: 250px;" src="images\{{ $product->product_image }}" width="100%"></a>
                                        </div>
                                        <div class="product-text">
                                            <span class="pro-price bg-success">${{ $product->product_price }}</span>
                                            <a href="{{ route('product.show', [$product->id]) }}"><h5 style="color: blue;text-transform: capitalize; text-decoration: underline;" class="card-title m-b-0">{{ $product->product_name }}</h5></a>
                                            <hr>

                                            <div  style="height: 150px" class="text-muted db">{{ \Illuminate\Support\Str::limit($product->product_desc, 70, $end="...") }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>


        </div>
        <div style="height: 100px">
            {{ $products->onEachSide(1)->links() }}
        </div>

<footer class="footer" style="margin-left: 0px !important;">
    © 2019 Eliteadmin by themedesigner.in
</footer>


@endsection
