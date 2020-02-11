<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ppn;

class ppnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppn = Ppn::orderBy('id', 'desc')->get();
        return view('app.ppn.index', compact('ppn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ppn = new Ppn;
        $ppn->stok_minimum = $request->input('stok');
        $ppn->ppn = $request->input('ppn');
        $ppn->save();

        return redirect()->route('ppn.index');
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
        $ppn = Ppn::find($id);
        return view('app.ppn.modal', $ppn);
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
        $ppn = Ppn::find($id);
        $ppn->stok_minimum = $request->input('stok');
        $ppn->ppn = $request->input('ppn');
        $ppn->save();

        return redirect()->route('ppn.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ppn::find($id)->delete();
        return redirect()->route('ppn.index');
    }
}
