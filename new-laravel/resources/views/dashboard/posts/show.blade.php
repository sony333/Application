@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-start my-4">
        <div class="col-lg-8">

            <!-- Post edit menu -->
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> back to posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span><i class="bi bi-pencil"></i></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Ingin hapus file ?')"><span><i class="bi bi-trash"></i></span> Delete</button>
            </form>

            <!-- Post Image -->
            @if($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid mt-2" alt="...">
            </div>
            @else
            <h2 class="my-3">{{ $post->title }}</h2>
            <img src="https://source.unsplash.com/1000x400/?{{ $post->category->name }}" class="card-img-top img-fluid mt-2" alt="...">
            @endif

            <!-- Post Body -->
            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>
        </div>
    </div>
</div>


@endsection