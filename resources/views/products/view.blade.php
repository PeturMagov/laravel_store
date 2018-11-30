@extends('layouts.app')

@section('content')
	<div class="col-md-6 offset-3">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">{{ $product->name }}</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-right">
                <a href="{{ route('product.create') }}">
                	<button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    	<i class="zmdi zmdi-plus"></i>add product
                	</button>
                </a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>brand</th>
                        <th>price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr-shadow">
                        <td>{{ $product->name }}</td>
                        <td>
                            <img src="{{ asset($product->brand->logo) }}" style="width: 100px; height: 60px">
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <a href="{{ route('product.edit', ['id' => $product->id]) }}"><i class="zmdi zmdi-edit text-warning"></i></a>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <a href="{{ route('product.delete', ['id' => $product->id]) }}"><i class="zmdi zmdi-delete text-danger"></i></a>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>	
@endsection