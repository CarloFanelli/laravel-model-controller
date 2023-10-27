@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>{{$heading}}</h1>
        </div>
    </div>

    <div class="row my-4">
        @foreach($movies as $movie)
        <div class="film col-4 gy-4">
            <div class=" film-front card h-100">
                <div class="card-header h-25">
                    <h4>{{$movie->title}}</h4>
                    <small>{{$movie->original_title}}</small>
                </div>
                <div class="card-body">
                    <img class="img-fluid" src="https://picsum.photos/200/300?random={{$movie->id}}">
                </div>
            </div>

            <div class=" film-back card h-100">
                <div class="card-header">
                    <h6 class="m-0">{{$movie->title}}</h6>
                    <small class="m-0">vote: {{$movie->vote}}</small>
                </div>
                <div class="card-body">
                    <span class="m-0">nation: {{$movie->nationality}}</span>
                    <img class="img-fluid" src="https://picsum.photos/200/300?random={{$movie->id}}">
                    <span>release: {{$movie->date}}</span>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection