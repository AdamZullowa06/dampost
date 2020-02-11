<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Currency;
use App\Unit;
use App\Percent;
use App\Ppn;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['category'] = Category::orderBy("id", "desc")->get();
        $data['ppn'] = Ppn::orderBy('id', 'desc')->get();
        $data['currency'] = Currency::orderBy('id', 'desc')->get();
        $data['percent'] = Percent::orderBy('id', 'desc')->get();
        $data['unit'] = Unit::orderBy('id', 'desc')->get();
        $product = Product::orderBy('id', 'desc')->get();
        return view('app.product.index', $data, compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::orderBy("id", "desc")->get();
        $data['ppn'] = Ppn::orderBy('id', 'desc')->get();
        $data['currency'] = Currency::orderBy('id', 'desc')->get();
        $data['percent'] = Percent::orderBy('id', 'desc')->get();
        $data['unit'] = Unit::orderBy('id', 'desc')->get();
        $data['product'] = Product::orderBy('id', 'desc');
        return view('app.product.modal', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $kode_produk = rand(1111111111111111,9999999999999999);
        $product->categori_id = $request->categori_id;;
        $product->currency_id = $request->currency_id;
        $product->unit_id = $request->unit;
        $product->product_name = $request->product_name;
        $product->stok = $request->stok;
        $product->diskon = $request->diskon;
        $product->laba = $request->laba;
        $product->harga_beli = $request->harga_beli;
        $product->ppn = $request->ppn;
        $product->keterangan  = $request->keterangan;
        if($request->diskon != null){
            $diskon = $request->harga_beli * $request->diskon / '100';
            $minus = $request->harga_beli - $diskon;
            $percent = $minus * ($request->laba + $request->ppn) / '100';
            $product->harga_jual = $percent + $minus;
        } 
        else 
        {
            $percent = $request->harga_beli * ($request->laba + $request->ppn) /'100';
            $product->harga_jual = $request->harga_beli + $persen;
        }

        $product->save();
        return redirect()->route('product.index');
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
        $data['category'] = Category::orderBy("id", "desc")->get();
        $data['unit'] = Unit::orderBy('id', 'desc')->get();
        $data['ppn'] = Ppn::orderBy('id', 'desc')->get();
        $data['currency'] = Currency::orderBy('id', 'desc')->get();
        $data['percent'] = Percent::orderBy('id', 'desc')->get();
        $product = Product::orderBy('id', 'desc')->get();
        return view('app.product.modal', $data, compact('product'));
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
        $product = Product::find($id);
        $kode_produk = rand(1111111111111111,9999999999999999);
        $product->categori_id = $request->categori_id;
        $product->currency_id = $request->currency_id;
        $product->currency = $request->currency;
        $product->nama_produk = $request->nama_produk;
        $product->stok = $request->stok;
        $product->diskon = $request->diskon;
        $product->harga_beli = $request->harga_beli;
        $product->harga_jual = $request->harga_jual;
        $product->ppn = $request->ppn;
        $product->keterangan  = $request->keterangan;
        if($request->diskon != null){
            $diskon = $request->harga_beli * $request->diskon / '100';
            $minus = $request->harga_beli - $diskon;
            $percent = $minus * ($request->laba + $request->ppn) / '100';
            $product->harga_jual = $percent + $minus;
        } 
        else 
        {
            $percent = $request->harga_beli * ($request->laba + $request->ppn) /'100';
            $product->harga_jual = $request->harga_beli + $persen;
        }

        $product->save();
        return redirect()->route('product.index')->with('alert', 'Data Telah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.index');
    }
}
