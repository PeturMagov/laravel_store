@extends('layouts.app')

@section('content')
	<div>
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
    </div>    
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>status</th>
                    <th>ordered at</th>
                    <th>shipped at</th>
                    <th>completed at</th>
                    <th>canceled at</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            	@foreach($orders as $order)
                    <tr class="tr-shadow">
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->shipping_address }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->ordered_at }}</td>
                        <td>{{ $order->shipped_at }}</td>
                        <td>{{ $order->completed_at }}</td>
                        <td>{{ $order->canceled_at }}</td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                    <a href="{{ route('order.view', ['id' => $order->id]) }}"><i class="zmdi zmdi-apps text-info"></i></a>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <a href="{{ route('order.edit', ['id' => $order->id]) }}"><i class="zmdi zmdi-edit text-warning"></i></a>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <a href="{{ route('order.delete', ['id' => $order->id]) }}"><i class="zmdi zmdi-delete text-danger"></i></a>
                                </button>
                            </div>
                        </td>    
                    </tr>
                @endforeach
            </tbody>
        </table>  	
@endsection