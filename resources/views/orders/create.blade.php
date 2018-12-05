@extends('layouts.app')

@section('content')
	<div class="col-lg-6 offset-3">
        <div class="card">
            <div class="card-header">
                <strong>New Order</strong>
            </div>
            <div class="card-body card-block">
                @include('errors.require_error')
                <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                	{{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="name" class="form-control-label">Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="phone" class="form-control-label">Phone</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="phone" class="form-control" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="shipping_address" class="form-control-label">Address</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="shipping_address" class="form-control" value="{{ old('shipping_address') }}">
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