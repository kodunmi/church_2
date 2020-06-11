<div id="add-admin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Add Return</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.create')}}" method="POST">
                @csrf
                <div class="modal-body text-center">
                    <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-gradient-primary text-white"><i class="mdi mdi-account"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="First Name" required name="firstname">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-gradient-primary text-white"><i class="mdi mdi-account"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Last Name" required name="lastname">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-gradient-primary text-white"> <i class="mdi mdi-email-outline"></i> </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Email" required name="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-gradient-primary text-white"> <i class="mdi mdi-key"></i> </span>
                          </div>
                          <input type="password" class="form-control" placeholder="Password" required name="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-gradient-primary text-white"> <i class="mdi mdi-key-change"></i> </span>
                          </div>
                          <input type="password" class="form-control" placeholder="Confirm Password" required name="password_confirmation">
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-gradient-primary mr-2">Add Admin</button>
                    <button class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
