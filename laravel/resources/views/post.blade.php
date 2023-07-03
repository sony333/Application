@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="my-3">{{ $post->title }}</h2>
            <h5> By. <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }} </a></h5>
            @if($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid mt-2" alt="...">
            </div>

            @else
            <img src="https://source.unsplash.com/1000x400?{{ $post->category->name }}" class="card-img-top img-fluid" alt="...">
            @endif

            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>
            <p> <a href="/posts">Back To Posts</a></p>
        </div>
    </div>
</div>


@endsection