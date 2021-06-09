@extends('layouts.main')

@section('content')
    <div class="container">
        @foreach ($movies as $movie)
        <div class="box">
            <h2>{{$movie['title']}}</h2>
            <h3>{{$movie['original_title']}}</h3>
            <p>{{$movie['date']}}</p>
            <p>{{$movie['vote']}}</p>
            <p>{{$movie['nationality']}}</p>
            <p>{{$movie['id']}}</p>
        </div>
        @endforeach
    </div>
@endsection