@extends('Layouts.main')
@section('container')
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
                            @foreach($categories as $category)
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-sm-4 grid-margin">
                                            <div class="rotate-img">
                                                <img src="https://source.unsplash.com/1200x400?" alt="banner" class="img-fluid" />
                                            </div>
                                        </div>
                                        <div class="col-sm-8 grid-margin">
                                            <h2 class="font-weight-600 mb-2">
                                                {{$category->nama}}
                                            </h2>
                                            <p class="fs-15">
                                                Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer
                                                took a galley of type and scrambled it to make a
                                                type specimen book.
                                            </p>

{{--                                            <a href="{{route('showpostcategory', $category->id)}}">--}}
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
@endsection
