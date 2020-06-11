@extends('layouts._master')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-2 bread">Our Blog</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row d-flex">
          @foreach ($posts as $post)
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                <a href="{{ route('blog.show',['blog' => $post->id])}}" class="block-20" style="background-image: url('/images/post/{{ $post->image }}');">
                </a>
                <div class="text d-flex float-right d-block">
                    <div class="topper text-center pt-4 px-3">
                        <span class="day">{{ $post->created_at->format('jS') }}</span>
                        <span class="mos">{{ $post->created_at->format('F') }}</span>
                        <span class="yr">{{ $post->created_at->format('Y') }}</span>
                    </div>
                    <div class="desc p-4">
                    <h3 class="heading mt-2"><a href="#">{{ $post->title }}</a></h3>
                    <p>{{ $post->preview }}</p>
                </div>
                </div>
            </div>
            </div>
          @endforeach
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
                @if ($posts->lastPage() > 1)
                    <li><a class="{{ ($posts->currentPage() == 1) ? 'link-disabled' : '' }}" href="{{ $posts->url($posts->currentPage() - 1) }}">&lt;</a></li>
                    @for ($i = 1; $i <= $posts->lastPage(); $i++)
                        <li class="{{ ($posts->currentPage() == $i) ? 'active' : '' }}"><span><a href="{{ $posts->url($i) }}">{{ $i }}</a></span></li>
                    @endfor
                    <li><a class="{{ ($posts->currentPage() == $posts->lastPage()) ? 'link-disabled' : '' }}" href="{{ $posts->url($posts->currentPage() + 1) }}">&gt;</a></li>
                @endif

              {{--

              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>  --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
