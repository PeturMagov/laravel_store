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
    	@foreach($products as $product)
            <tr class="tr-shadow">
                <td>{{ $product->name }}</td>
                <td>
                    <img src="{{ $product->logo }}" style="width: 100px; height: 60px">
                </td>
                <td>{{ $product->price }}</td>
                <td>
                    <div class="table-data-feature">
                        <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                            <a href="{{ route('product.view', ['id' => $product->id]) }}"><i class="zmdi zmdi-apps text-info"></i></a>
                        </button>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <a href="{{ route('product.edit', ['id' => $product->id]) }}"><i class="zmdi zmdi-edit text-warning"></i></a>
                        </button>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                            <a href="{{ route('product.delete', ['id' => $product->id]) }}"><i class="zmdi zmdi-delete text-danger"></i></a>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>