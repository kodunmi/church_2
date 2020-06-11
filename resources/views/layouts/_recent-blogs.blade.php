@if ($posts->count() > 0)
@foreach ($posts as $post)
<div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url('/images/post/{{ $post->image }}');"></a>
    <div class="text">
      <h3 class="heading"><a href="{{ route('blog.show',['blog' => $post->id])}}">{{ $post->title }}</a></h3>
      <div class="meta">
        <div><a href="#"><span class="icon-calendar"></span>{{ $post->created_at->toDayDateTimeString() }}</a></div>
        <div><a href="#"><span class="icon-person"></span> {{ $post->created_by }}</a></div>
        <div><a href="#"><span class="icon-chat"></span>{{ $post->comments->count() }}</a></div>
      </div>
    </div>
  </div>
@endforeach
@else
    <h3>No recent post</h3>
@endif
