@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="col-md-12" style="margin-top: 10%">
            <div class="block">

                <div class="block-content block-fx-shadow">
                    <div class="card-body">
                        <h4 class="card-title">Add New Product</h4>
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" class="form-control" name="product_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Product Price</label>
                                <input type="number" class="form-control" name="product_price">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="custom-select col-12" name="category" >
                                    <option selected="">Choose...</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control" name="product_desc"  rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" class="form-control" name="product_image">
                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #fb9678;border-color: #fb9678;">Create</button>
                            
                        </form>
                    </div>
                    @include('partials.errors')
                </div>

            </div>
        </div>
    </div>

@endsection