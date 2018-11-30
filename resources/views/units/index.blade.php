@extends('layouts.app')

@section('content')
	<div class="col-md-6 offset-3">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">all units</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-right">
                <a href="{{ route('unit.create') }}">
                	<button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    	<i class="zmdi zmdi-plus"></i>add unit
                	</button>
                </a>
            </div>
        </div>

        <div class="card-body card-block">
            <form action="{{ route('units') }}" method="get" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="product" class=" form-control-label">Search Product</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="product" class="form-control" value="{{ request('product') }}">
                    </div>
                </div>
                <div class="row form-group">    
                    <div class="col col-md-3">
                        <label for="brand_id" class=" form-control-label">Search Brand</label>
                    </div>
                    <div class="col-12 col-md-9 input-group">
                        <select name="brand_id" id="select" class="form-control">
                            <option></option>
                            @foreach($brands as $brand)
                                <option 
                                    value="{{ $brand->id }}"
                                    @if (isset($brand_id)) 
                                        @if ($brand_id == $brand->id)
                                            selected ="true"
                                        @endif
                                    @endif
                                >
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>
        </div>

        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>product</th>
                        <th>brand</th>
                        <th>serial number</th>
                        <th>status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($units as $unit)
	                    <tr class="tr-shadow">
	                        <td>{{ $unit->name }}</td>
                            <td><img src="{{ $unit->logo }}" style="width: 100px; height: 60px"></td>
                            <td>{{ $unit->number }}</td>
                            <td>{{ $unit->status }}</td>
	                        <td>
	                            <div class="table-data-feature">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                        <a href="{{ route('unit.view', ['id' => $unit->id]) }}"><i class="zmdi zmdi-apps text-info"></i></a>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <a href="{{ route('unit.edit', ['id' => $unit->id]) }}"><i class="zmdi zmdi-edit text-warning"></i></a>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <a href="{{ route('unit.delete', ['id' => $unit->id]) }}"><i class="zmdi zmdi-delete text-danger"></i></a>
                                    </button>
                                </div>
	                        </td>
	                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>	
@endsection