<div id="edit-post{{ $post->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Edit slide</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('post.update',['post' => $post->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')

                    <div class="modal-body text-center">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-gradient-primary text-white"><i
                                            class="mdi mdi-account"></i></span>
                                </div>
                                <input type="file" class="form-control" placeholder="Image" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-gradient-primary text-white"><i
                                            class="mdi mdi-account"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Title of post" value="{{ $post->title }}" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-gradient-primary text-white"><i
                                            class="mdi mdi-account"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Title of post" value="{{ $post->created_by }}" name="created_by">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">

                                <textarea  rows="4" class="form-control summernote" placeholder="preview of post"
                                    name="preview">{{ $post->preview }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">

                                <textarea  rows="20" class="form-control summernote" placeholder="Description of post"
                                    name="body">{{ $post->body }}</textarea>
                            </div>
                        </div>

                    </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                    <button class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

