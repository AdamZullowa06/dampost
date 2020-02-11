<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['products'] = Product::orderBy('product_name', 'asc')->get();
        $d['carts'] = Cart::where('user_id', \Auth::user()->id)->where('status', 1)->orderBy('id', 'desc')->get();
        $d['totalCarts'] = Cart::where("user_id", \Auth::user()->id)->where("status", 1)->sum('sub_total');
        return view('app.transaksi.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::find($request->input('product_id'));

        $cart = new Cart;
        $cart->product_id = $request->input('product_id');

        if($product->stok < $request->input('qty'))
        {
            return redirect()->route('transaksi.index')->with('alert', 'Stok tersisa'.$product->stok);
        }

        if($request->input('qty') < 1)
        {
            return redirect()->route('transaksi.index')->with('alert', 'masukkan jumlah produk');
        }

        $cart->jumlah = $request->input('qty');
        $cart->user_id = \Auth::user()->id;
        $cart->sub_total = $request->input("qty")*$product->harga_jual;
        $cart->status = 1;
        $cart->kode_unik = rand(1111111111,9999999999);
        $cart->save();

        return redirect()->route('transaksi.index')->with('alert', $request->input('product_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
