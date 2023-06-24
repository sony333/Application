@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-start my-4">
        <div class="col-lg-8">
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> back to posts</a>
            <a href="" class="btn btn-warning"><span><i class="bi bi-pencil"></i></span> Edit</a>
            <a href="" class="btn btn-danger"><span><i class="bi bi-trash"></i></span> Delete</a>
            <h2 class="my-3">{{ $post->title }}</h2>
            <img src="https://source.unsplash.com/1000x400/?{{ $post->category->name }}" class="card-img-top img-fluid mt-2" alt="...">
            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>
        </div>
    </div>
</div>


@endsection