@extends('layouts.app')

@section('content')
	<div class="col-md-6 offset-3">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">all products</h3>
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
            @include('products.table', ['products' => $products])

        </div>
        <!-- END DATA TABLE -->
    </div>	
@endsection