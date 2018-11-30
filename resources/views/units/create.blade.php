@extends('layouts.app')

@section('content')
	<div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <strong>Add Unit</strong>
            </div>
            <div class="card-body card-block">
                @include('errors.require_error')
                <form action="{{ route('unit.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                	{{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Select Product</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="product_id" id="select" class="form-control">
                                <option></option>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}" {{ (collect(old('product_id'))->contains($product->id)) ? 'selected':'' }}>{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="number" class="form-control-label">Serial Number</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="number" class="form-control" value="{{ old('number') }}">
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