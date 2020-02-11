<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <form action="{{ route('logout')}}" method="POST">
            @csrf
            <a class="btn btn-secondary" data-dismiss="modal" href="#">cancel</a>
            <button class="btn btn-danger" type="submit">Log out</button>
          </form>
        </div>
      </div>
    </div>
  </div>