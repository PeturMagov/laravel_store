@extends('layouts.app')

@section('content')
    <div class="col-md-6 offset-3">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
            <div class="table-data__tool-right">
                <a href="{{ route('unit.create') }}">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>add unit
                    </button>
                </a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>product</th>
                        <th>serial number</th>
                        <th>status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tr-shadow">
                        <td>{{ $unit->product->name }}</td>
                        <td>{{ $unit->number }}</td>
                        <td>{{ $unit->status }}</td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <a href="{{ route('unit.edit', ['id' => $unit->id]) }}"><i class="zmdi zmdi-edit text-warning"></i></a>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <a href="{{ route('unit.delete', ['id' => $unit->id]) }}"><i class="zmdi zmdi-delete text-danger"></i></a>
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