@extends('layouts.main')

@section('content')
  <section class="filmpiuvotati">
    <div class="container">
      
      <h1>film con un voto > 8</h1>
    
      <ul>
        @foreach ($movies as $movie)
    
          <li>{{$movie['title']}} || {{$movie['vote']}}</li>
          
        @endforeach
      </ul>
    </div>
  </section>
@endsection