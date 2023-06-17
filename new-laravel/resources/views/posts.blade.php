@extends('layouts.main')

@section('container')
<h1 class="mt-3 mb-5">All Posts {{ $head }}</h1>
@foreach( $posts as $post)

<article class="mb-5 mt-2" pb-5>
    <h2><a href="/posts/{{ $post->slug }}" class="link">{{ $post->title }}</a></h2>
    <h5> By. <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a></h5>
    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}">Read more...</a>
</article>

@endforeach

@endsection