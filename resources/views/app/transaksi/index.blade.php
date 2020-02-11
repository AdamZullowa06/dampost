@extends('layouts.app')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
</div>

<div class="row">
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Pilih Produk</h6>
            </div>
            <div class="card-body">
              <form action="{{ route('transaksi.store') }}">
                  <div class="form-group">
                      <select name="produk_id" id="" class="form-control">
                        <option value="">Pilih Produk</option>
                        @foreach ($product as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->product_name }} - Rp. {{ $item->harga_jual}}
                            </option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <input type="text" name="jumlah" placeholder="Qty" class="form-control" required>
                  </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit"></button>
            </form>
            </div>
          </div>
    </div>
    <div class="col-xl-8 col-lg-7"></div>
</div>
<div class="row"></div>
@endsection