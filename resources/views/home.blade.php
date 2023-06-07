
@extends('layout.main')


@section('content')
<h1>Home</h1>


@foreach ($movie as $film)
<div class=" d-flex">
  <div class="card" style="width: 18rem;">
    <div class="card-body" >
      <h5 class="card-title fw-bold">{{$film->title}}</h5>
      <p class="card-text">{{$film->nationality}}</p>
      <p class="card-text">{{$film->date}}</p>
      <p class="card-text">{{$film->vote}}</p>
    </div>
  </div>
</div>

@endforeach

@endsection
