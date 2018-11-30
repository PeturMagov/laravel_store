@extends('layouts.app')

@section('content')
	<div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <strong>Edit Brand</strong>
            </div>
            <div class="card-body card-block">
                @include('errors.require_error')
                <form action="{{ route('brand.update', ['id' => $brand->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                	{{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="name" class="form-control-label">Brand Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name" class="form-control" value="{{ $brand->name }}">
                        </div>
                    </div>
                    <div class="row form-group">
                    	<div class="col col-md-3">
                    		<label for="logo" class=" form-control-label">Logo</label>
                        	<img src="{{ asset($brand->logo) }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="logo" class=" form-control-label">New Logo</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="logo" class="form-control-file">
                        </div>
                    </div>
	                <div class="card-footer text-center">
		                <button type="submit" class="btn btn-success">
		                    <i class="fa fa-dot-circle-o"></i> Submit Changes
		                </button>
		            </div>
                </form>
            </div>
        </div>
    </div>
@endsection