
@extends('layout.main')


@section('content')
<div class="container">

  <h1>Film</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        <th scope="col">Handle</th>
        <th scope="col">Handle</th>

      </tr>
    </thead>

    <tbody>
      @foreach ($movie as $film)

      <tr>
        <th scope="row">{{$film->id}}</th>
        <td>{{$film->title}}</td>
        <td>{{$film->original_title}}</td>
        <td>{{$film->nationality}}</td>
        <td>{{$film->date}}</td>
        <td>{{$film->vote}}</td>

      </tr>
      @endforeach
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

</div>

@endsection
