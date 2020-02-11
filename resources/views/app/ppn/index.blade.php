@extends('layouts.app')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master PPN</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="#" data-toggle="modal" data-target="#addCategory" class="btn btn-success">Tambah Data</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Stok Minimum</th>
              <th>Nominal PPN</th>
              <th>Created at</th>
              <th>Aksi</th>
            </tr>
          </thead>
          @foreach ($ppn as $item)
          <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->stok_minimum }}</td>
                <td>{{ $item->ppn }}%</td>
                <td>{{ $item->created_at->format('d-m-Y')}}</td>
                <td>
                    <div class="row">
                        <button href="#" data-toggle="modal" data-target="#editModal{{ $item->id }}" class="btn btn-warning ml-2 edit">Edit</button>
                        
                    <form action="{{ route('ppn.destroy', $item->id) }}" method="POST">
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
              <th>Stok Minimum</th>
              <th>Nominal PPN</th>
              <th>Created at</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
</div>
@include('app.ppn.modal')
@endsection