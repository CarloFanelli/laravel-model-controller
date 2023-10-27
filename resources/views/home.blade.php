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
        <div class="col-4 gy-4">
            <div class="card h-100">
                <div class="card-header h-25">
                    <h4>{{$movie->title}}</h4>
                    <small>{{$movie->original_title}}</small>
                </div>
                <div class="card-body">
                    <img class="img-fluid" src="https://picsum.photos/200/300?random=<?= rand() ?>">
                    <span>release: {{$movie->date}}</span>
                </div>
                <div class="card-footer">

                    <p>nation: {{$movie->nationality}}</p>
                    <p>vote: {{$movie->vote}}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection