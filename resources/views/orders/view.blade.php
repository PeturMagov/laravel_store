@extends('layouts.app')

@section('content')
	<div class="col-md-6 offset-3">
        <div class="au-card au-card--no-shadow au-card--no-pad">
          <div class="au-card-title">
              <div class="bg-overlay bg-overlay--blue"></div>
              <h3>
                  <i class="fa fa-clipboard"></i>
                  Order ID #{{ $order->id }}
              </h3>
          </div>
         
          <div class="au-card-inner p-l-20 p-r-20 p-t-20 p-b-20">
              <h6 class="title-2 m-b-10">Available actions</h6>
              <a href="{{ route('order.change_status', ['id' => $order->id, 'status' => 'shipped']) }}" class="btn btn-outline-primary">Mark as shipped</a>
              <a href="{{ route('order.change_status', ['id' => $order->id, 'status' => 'completed']) }}" class="btn btn-outline-success">Mark as completed</a><a href="{{ route('order.change_status', ['id' => $order->id, 'status' => 'canceled']) }}" class="btn btn-outline-danger">Mark as cancled</a>
          </div>
                     
          <div class="au-task__footer">
            <a href="{{ route('orders') }}">
              <button class="au-btn au-btn-load js-load-btn">back</button>
            </a>
          </div>
        </div>
    </div>	
@endsection