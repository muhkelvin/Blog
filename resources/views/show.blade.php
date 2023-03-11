@extends('Layouts.main')
@section('container')
    <div class="container mt-5">
        <div>
            <h2 class="text-center">{{$posts->title}}</h2>
            <p class="text-center">BY LIAM {{$posts->created_at}}</p>
            <img src="{{asset('storage/'.$posts->image)}}" alt="" class="d-flex m-auto">
            <div class="mt-5">
                <p>{!! $posts->body !!}</p>
            </div>
        </div>
    </div>
@endsection
