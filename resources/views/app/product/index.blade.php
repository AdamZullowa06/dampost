@extends('layouts.app')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Produk</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="#" data-toggle="modal" data-target="#addProduct" class="btn btn-success">Tambah Produk</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal Buat</th>
              <th>Nama Produk</th>
              <th>Curr</th>
              <th>Stok</th>
              <th>Harga Beli</th>
              <th>Harga Jual</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          @foreach ($product as $item)
          <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->created_at->format('d-m-Y')}}</td>
                <td>{{ $item->product_name }}</td>
                <td>{{ $item->currency->currency}}</td>
                <td>{{ $item->stok }}</td>
                <td>Rp {{ number_format($item->harga_beli, 2,',','.')}}</td>
                <td>Rp {{ number_format($item->harga_jual, 2,',','.')}}</td>
                <td>{{ $item->keterangan }}</td>
                <td>
                    <div class="row">
                        <button href="#" data-toggle="modal" data-target="#editModal{{ $item->id }}" class="btn btn-warning ml-2 edit">Edit</button>
                        
                    <form action="{{ route('product.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger ml-2">Hapus</button>
                    </form>
                    </div>
                </td>
            </tr>
        </tbody>
          @endforeach
          <tfoot>
            <tr>
              <th>No</th>
              <th>Tanggal Buat</th>
              <th>Nama Produk</th>
              <th>Curr</th>
              <th>Stok</th>
              <th>Harga Beli</th>
              <th>Harga Jual</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
</div>
@include('app.product.modal')
@endsection