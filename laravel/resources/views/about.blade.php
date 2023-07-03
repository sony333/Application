@extends('layouts.main')

@section('container')

<h1>About Me</h1>
<h3>{{ $nama }}</h3>
<p>{{ $email }}</p>
<img src="/img/{{ $image }}" alt="{{ $nama }}" class="img-thumbnail">


<p>Hi, Im Sony Tri Prasetyo Pamekas, an Junior web development, i made this blog as practice to develop my laravel skill </p>

@endsection