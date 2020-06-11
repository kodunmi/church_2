<div id="delete-post{{$post->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Delete Slide</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to deleted</p>
                <h3>{{ $post->title }}</h3>
            </div>
            <div class="modal-footer">
                <form action="{{route('post.destroy' ,['post' => $post->id])}}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn btn-gradient-danger mr-2" type="submit">Delete</button>
                </form>
                <button class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
            </div>
        </div>
    </div>
</div>
