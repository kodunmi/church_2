<div id="add-event" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Add Return</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('event.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-center">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-gradient-primary text-white"><i
                                        class="mdi mdi-account"></i></span>
                            </div>
                            <input type="file" class="form-control" placeholder="Image" required name="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-gradient-primary text-white"><i
                                        class="mdi mdi-account"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Title of event" required name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">

                            <textarea  rows="4" class="form-control summernote" placeholder="Location of event" required
                                name="location"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">

                            <textarea  rows="20" class="form-control summernote" placeholder="Discription of event" required
                                name="description"></textarea>
                        </div>
                    </div>

                    <h3 class="text-center">Starting</h3>

                    <div class="input-group mt-2">
                        <input type="date" class="form-control" aria-label="Recipient's username" name="starting_date">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-facebook" type="button">
                            <i class="mdi mdi-calendar"></i>
                          </button>
                        </div>
                      </div>
                    <div class="input-group mt-2">
                        <input type="time" class="form-control" aria-label="Recipient's username" name="starting_time" >
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-linkedin" type="button">
                            <i class="mdi mdi-watch"></i>
                          </button>
                        </div>
                      </div>
                    <h3 class="text-center mt-5">Ending</h3>
                    <div class="input-group mt-2">
                        <input type="date" class="form-control" aria-label="Recipient's username" name="ending_date">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-facebook" type="button">
                            <i class="mdi mdi-calendar"></i>
                          </button>
                        </div>
                      </div>
                    <div class="input-group mt-2">
                        <input type="time" class="form-control" aria-label="Recipient's username" name="ending_time" >
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-linkedin" type="button">
                            <i class="mdi mdi-watch"></i>
                          </button>
                        </div>
                      </div>

                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" checked name="feature"> Feature </label>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-gradient-primary mr-2">Add Event</button>
                    <button class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
