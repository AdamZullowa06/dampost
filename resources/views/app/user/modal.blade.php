<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('user.store') }}" method="POST" class="user">
                @csrf 
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control form-control-user" name="name" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control form-control-user" name="email" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control form-control-user" name="password" required>
                </div>
                <div class="form-group">
                    <label for="">Level</label>
                    <select name="level" id="" class="form-control">
                        <option value="SuperAdmin">SuperAdmin</option>
                        <option value="Admin">Admin</option>
                        <option value="Kasir">Kasir</option>
                    </select>
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

  @foreach ($user as $item)
  <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="formEdit" action="{{ route('user.update', $item->id) }}" method="POST" class="user">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control form-control-user" value="{{ $item->name }}" name="name" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control form-control-user" value="{{ $item->email }}" name="email" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control form-control-user" name="password" required>
                </div>
                <div class="form-group">
                    <label for="">Level</label>
                    <select name="level" id="" class="form-control">
                        <option value="SuperAdmin">SuperAdmin</option>
                        <option value="Admin">Admin</option>
                        <option value="Kasir">Kasir</option>
                    </select>
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
