@extends('layouts.app')

@section('content')
    <div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <strong>Edit Product</strong>
            </div>
            <div class="card-body card-block">
                @include('errors.require_error')
                <form action="{{ route('product.update', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="name" class="form-control-label">Product Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name" class="form-control" value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Brand</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="brand_id" id="select" class="form-control">
                                <option value="{{ $product->brand->id }}">{{ $product->brand->name }}</option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="price" class="form-control-label">Price</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="price" class="form-control" value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>        
@endsection