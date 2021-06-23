@extends('layouts.main')

@section('content')
<section class="home">
    <div class="container">
        <h1>questa è la home con tutti i film</h1>
    
        <ul>
            @foreach ($movies as $movie)
                <li>{{$movie['title']}} || {{$movie['original_title']}}</li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
