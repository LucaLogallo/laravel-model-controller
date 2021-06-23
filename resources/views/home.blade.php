@extends('layouts.main')

@section('content')
<div class="container">
    <h1>questa è la home con tutti i film</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>{{$movie['title']}}</li>
        @endforeach
    </ul>
</div>
@endsection
