<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('category.store') }}" method="POST" class="user">
                @csrf 
                <div class="form-group">
                    <label for="">Category</label>
                    <input type="text" class="form-control form-control-user" name="category" required>
                </div>
            </div>
        <div class="modal-footer">
            <a class="btn btn-secondary" data-dismiss="modal" href="#">cancel</a>
            <button class="btn btn-success" type="submit">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  @foreach ($category as $item)
  <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="formEdit" action="{{ route('category.update', $item->id) }}" method="POST" class="user">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Category</label>
                    <input id="inputCategory" type="text" class="form-control form-control-user" name="category" value="{{ $item->category }}" required>
                </div>
            </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">cancel</button>
            <button class="btn btn-success" type="submit">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
