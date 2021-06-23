@extends('layouts.main')

@section('content')
  <h1>film più votati</h1>
  <ul>
    @foreach ($movies as $movie)

      <li>{{$movie['title']}} || {{$movie['vote']}}</li>
      
    @endforeach
  </ul>
@endsection