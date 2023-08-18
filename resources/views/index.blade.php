@extends('layouts.basiclayout');

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <title>Songs</title>
</head>
<body class="bg-dark">
<div class="nav-bar">
    <div class="nav-bar-img">
        <img src="{{ asset('assets/images/heart.svg') }}" alt="">
    </div>
    <div class="nav-bar-text">
        <p>Lista</p>
        <h1>Canciones que te gustan</h1>
        <p>agalarza.ec.677canciones</p>
    </div>
</div>       
<img src="{{ asset('assets/images/play.svg') }}" width="65" height="65" alt="">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"></th>
      <th scope="col">Title</th>
      <th scope="col">Album</th>
      <th scope="col">When it was added <img src="{{ asset('assets/images/arrow.svg') }}" alt=""></th>
      <th scope="col"></th>
      <th scope="col"><img src="{{ asset('assets/images/time.svg') }}" alt=""></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($songs as $song)
    <tr>
      <th scope="row">{{ $song->id }}</th>
      <td><img src="{{ $song->image }}" alt=""></td>
      <td><strong>{{ $song->title }}</strong><br>{{ $song->artist }}</td>
      <td>{{ $song->album }}</td>
      <td>{{ $song->date }}</td>
      <td><img src="{{ asset('assets/images/heart.svg') }}" width="20" height="20" alt=""></td>
      <td>{{ $song->duration }}</td>
    </tr>
    @endforeach
  </tbody>
</table>


</body>
</html>


@endsection
