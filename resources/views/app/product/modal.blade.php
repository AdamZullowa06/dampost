<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('product.store') }}" method="POST">
                @csrf 
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control form-control-user" name="product_name" required>
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="categori_id" id="" class="form-control">
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Stock</label>
                    <input type="number" name="stok" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Currency</label>
                    <select name="currency_id" id="" class="form-control">
                        @foreach ($currency as $item)
                            <option value="{{ $item->id }}">{{ $item->currency }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Unit</label>
                    <select name="unit" class="form-control">
                        @foreach ($unit as $item)
                            <option value="{{ $item->id }}">{{ $item->unit }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Harga Beli</label>
                    <input type="number" name="harga_beli" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Harga Jual</label>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <select name="laba" id="" class="form-control" required>
                                <option value="">Persentase Laba</option>
                                @foreach ($percent as $item)
                                    <option value="{{ $item->percent}}">{{ $item->percent }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <select name="ppn" required id="" class="form-control">
                                <option value="">Stok Minimum dan PPN</option>
                                @foreach ($ppn as $item)
                                    <option value="{{ $item->ppn }}">{{ $item->ppn }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Diskon</label>
                    <input type="number" name="diskon" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            <div class="modal-footer">
            <a class="btn btn-secondary" data-dismiss="modal" href="#">cancel</a>
            <button class="btn btn-success" type="submit">Save</button>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>

  @foreach ($product as $item )
  <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('product.update', $item->id) }}" method="POST">
                @csrf 
                @method('put')
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control form-control-user" name="product_name" required>
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="categori_id" id="" class="form-control">
                        @foreach ($category as $res)
                            <option value="{{ $res->id }}">{{ $res->category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Stock</label>
                    <input type="number" name="stok" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Currency</label>
                    <select name="currency_id" id="" class="form-control">
                        @foreach ($currency as $res)
                            <option value="{{ $res->id }}">{{ $res->currency }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Unit</label>
                    <select name="unit" class="form-control">
                        @foreach ($unit as $res)
                            <option value="{{ $res->id }}">{{ $res->unit }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Harga Beli</label>
                    <input type="number" name="harga_beli" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Harga Jual</label>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <select name="laba" id="" class="form-control" required>
                                <option value="">Persentase Laba</option>
                                @foreach ($percent as $res)
                                    <option value="{{ $res->percent }}">{{ $res->percent }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <select name="ppn" required id="" class="form-control">
                                <option value="">Stok Minimum dan PPN</option>
                                @foreach ($ppn as $res)
                                    <option value="{{ $res->ppn }}">{{ $res->ppn }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Diskon</label>
                    <input type="number" name="diskon" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            <div class="modal-footer">
            <a class="btn btn-secondary" data-dismiss="modal" href="#">cancel</a>
            <button class="btn btn-success" type="submit">Save</button>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
