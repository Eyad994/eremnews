@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="col-md-12">
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Add New Product</h3>
                </div>
                <div class="block-content block-fx-shadow">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12 col-xl-8">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Product Name</span>
                                        </div>
                                        <input type="text" class="form-control" name="product_name">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-8">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Product Price</span>
                                        </div>
                                        <input type="number" class="form-control" name="product_price">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-8">
                                <div class="form-group">
                                    <select name="category" class="js-select2 form-control js-select2-enabled select2-hidden-accessible"
                                            data-placeholder="Choose one..">

                                        <option selected disabled>Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-8">
                                <div class="form-group">
                                    <textarea name="product_desc" cols="83" rows="5" placeholder="Product Description"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-x1-8">
                                <div class="form-group">
                                    <input type="file" name="product_image">
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-8">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Create</button>
                                </div>
                            </div>

                        </div>
                    </form>
                    @include('partials.errors')
                </div>

            </div>
        </div>
    </div>

@endsection