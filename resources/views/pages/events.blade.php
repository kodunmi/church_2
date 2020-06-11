@extends('layouts._master')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-2 bread">Upcoming Events</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Events <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                @if ($events->count() > 0)
                @foreach ($events as $event)
                <div class="event-wrap d-md-flex ftco-animate">
                    <div class="img" style="background-image: url(images/event/{{ $event->image }});"></div>
                    <div class="text pl-md-5">
                        <h2 class="mb-3"><a href="sermons.html">{{ $event->title }}</a></h2>
                        <div class="meta">
                            <p>
                                <span><i class="icon-calendar mr-2"></i> {{ $event->starting_date }},  {{ $event->starting_time }} - {{ $event->ending_date }}, {{ $event->ending_time }}</span>
                                <span><i class="icon-location_city mr-2"></i>{{ $event->location }}</span>
                            </p>
                        </div>
                        <p><a href="{{ route('upcomingevent.show', ['id' => $event->id]) }}" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
                @endforeach
                @else
                   <h3>No Upcoming Events</h3>
                @endif


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
</section>
@endsection
