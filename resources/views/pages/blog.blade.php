@extends('layouts._master')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-2 bread">Our Blog</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
            <p>
            <img src="/images/post/{{ $post->image}}" alt="" class="img-fluid">
          </p>
          <h2 class="mb-3">{{ $post->title }}</h2>
          <p>{!! $post->body !!}</p>

          <div class="pt-5 mt-5">
            <h3 class="mb-5">{{ $post->comments->count() }} Comments</h3>
            <ul class="comment-list">
                @if ($post->comments->count() > 0)
                    @foreach ($post->comments as $comment)
                    <li class="comment">
                        <div class="vcard bio">
                        <img src={{ "https://ui-avatars.com/api/?name=".$comment->name."&background=DA3179&color=fff&size=50" }} alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                        <h3>{{ $comment->name }}</h3>
                        <div class="meta">{{ $comment->created_at->toDayDateTimeString() }}</div>
                        <p>{{ $comment->message }}</p>

                        </div>
                    </li>
                    @endforeach
                @else
                    <h3>Be the first to comment</h3>
                @endif

            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
                @include('layouts._error')
                @include('layouts._alert')
              <form action="{{ route('post.comment',['post' => $post->id]) }}" class="p-5 bg-light" method="POST">
                @csrf
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>

              </form>
            </div>
          </div>

        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate">
          <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon icon-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
              </div>
            </form>
          </div>
          <div class="sidebar-box ftco-animate">
            <h3>Recent Blog</h3>
            @include('layouts._recent-blogs')
          </div>
        </div>

      </div>
    </div>
  </section> <!-- .section -->
@endsection
