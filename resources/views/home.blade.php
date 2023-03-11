@extends('Layouts.main')
@section('container')
    <div class="content-wrapper">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-xl-8 stretch-card grid-margin">
                    <div class="position-relative">
                        <img src="assets/images/dashboard/banner.jpg" alt="banner" class="img-fluid" />
                        <div class="banner-content">
                            <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                            </div>
                            <h1 class="mb-0">GLOBAL PANDEMIC</h1>
                            <h1 class="mb-2">
                                Coronavirus Outbreak LIVE Updates: ICSE, CBSE Exams
                                Postponed, 168 Trains
                            </h1>
                            <div class="fs-12">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 stretch-card grid-margin">
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            <h2>Latest news</h2>
                            @foreach($limit3 as $limit)
                            <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                                <div class="pr-3">
                                    <h5>{{$limit->title}}</h5>
                                </div>
                                <div class="rotate-img">
                                    <img src="" alt="thumb" class="img-fluid img-lg" width="50px" />
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="container">
                    <div class="col-sm-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1 class="font-weight-600 mb-4">
                                            RECENT POST
                                        </h1>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach($limit5 as $limit)
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-sm-4 grid-margin">
                                                <div class="rotate-img">
                                                    <img src="{{asset('storage/'.$limit->image)}}" alt="banner" class="img-fluid" />
                                                </div>
                                            </div>
                                            <div class="col-sm-8 grid-margin">
                                                <h2 class="font-weight-600 mb-2">
                                                    {{$limit->title}}
                                                </h2>
                                                <p class="fs-13 text-muted mb-0">
                                                    <span class="mr-2">Photo </span>{{$limit->created_at}}
                                                </p>
                                                <p class="fs-15">
                                                    Lorem Ipsum has been the industry's standard dummy
                                                    text ever since the 1500s, when an unknown printer
                                                    took a galley of type and scrambled it to make a
                                                    type specimen book.
                                                </p>

                                                <a href="{{route('show.post', $limit->slug)}}">
                                                    <p>
                                                        Read More
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
