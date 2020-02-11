@extends('layouts.app')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Info</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Informasi Toko</h6>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-5 col-lg-4">
          <div class="form-group">
            <label for="">Nama Instansi</label>
            <input type="text" readonly disabled value="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Telp</label>
            <input type="text" readonly disabled value="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Kode POS</label>
            <input type="text" readonly disabled value="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Deksripsi</label>
            <input type="text" readonly disabled value="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea readonly disabled name="" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
        </div>
        <div class="col-md-5 col-lg-8">
          <div class="row">
            <button class="btn btn-primary">Ubah</button>
          </div>
        </div>
      </div>
    </div>
</div>
@include('app.info.modal')
@endsection