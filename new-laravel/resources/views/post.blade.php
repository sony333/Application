@extends('layouts.main')

@section('container')

<article>
    <h2 class="mb-5">{{ $post->title }}</h2>
    <h5> By. <a href="">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a></h5>
    <p>{!! $post->body !!}</p>
</article>

<a href="/posts">Back to Posts</a>
@endsection