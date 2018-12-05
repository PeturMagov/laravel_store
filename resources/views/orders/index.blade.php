@extends('layouts.app')

@section('content')
	<div class="col-md-6 offset-3">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">all orders</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-right">
                <a href="{{ route('order.create') }}">
                	<button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    	<i class="zmdi zmdi-plus"></i>add new order
                	</button>
                </a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>phone</th>
                        <th>address</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($orders as $order)
	                    <tr class="tr-shadow">
	                        <td>{{ $order->name }}</td>
	                        <td>{{ $order->phone }}</td>
                            <td>{{ $order->shipping_address }}</td>
	                        <td>{{ $order->status }}</td>
	                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>	
@endsection