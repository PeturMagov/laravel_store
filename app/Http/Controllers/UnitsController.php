<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Unit;
use App\Brand;
use App\Product;
class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $product = $request->product;
        $brand_id = $request->brand_id;
        $order_by = $request->order_by ? $request->order_by : 'id';
        $sort = $request->sort;
        $next_sort = $sort == 'asc' ? 'desc' : 'asc';
        $brands = Brand::all();

        $units = DB::table('units')
            ->join('products', 'products.id', '=', 'units.product_id')
            ->join('brands', 'brands.id', '=', 'products.brand_id')
            ->select('units.*', 'products.name', 'brands.logo')
            
            ->when($brand_id, function ($q) use ($brand_id) {
                $q->where('brand_id', '=', $brand_id);
            })
            ->where( function ($q) use ($product) {
                $q->where('products.name', 'like', '%'.$product.'%')
                ->orWhere('number', 'like', '%'.$product.'%');
            })
            ->orderByRaw($order_by .' '. $sort)
            ->get();

        return view('units.index')->with('units', $units)->with('brands', $brands)->with('brand_id', $brand_id)->with('product', $product)->with('order_by', $order_by)->with('next_sort', $next_sort);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('units.create')->with('products', Product::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'number' => 'required'
        ]);

        $unit = new Unit([
            'number' => $request->number,
            'product_id' => $request->product_id
        ]);

        $unit->save();

        return redirect('units');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit = Unit::find($id);
        return view('units.view')->with('unit', $unit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = Unit::find($id);
        return view('units.edit')->with('unit', $unit)->with('products', Product::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required',
            'number' => 'required',
            'status' => 'required'
        ]);

        $unit = Unit::find($id);

        $unit->number = $request->number;
        $unit->product_id = $request->product_id;
        $unit->status = $request->status;
        $unit->update();

        return redirect('units');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::find($id);
        $unit->delete();

        return redirect('units');
    }
}
