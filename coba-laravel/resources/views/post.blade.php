@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title}}</h2>
            <p>By <a href="/authors/$post->author->username">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <!-- Menggunakan blade special syntax artinya mencetak menggunakan php echo sekaligus menjalankan html special chars, jadi ketika ada tag html di dalam maka dia akan mengescape, sehingga apabila ingin mengeksekusi semua yang ada didalam nilai maka kita harus menggantinya dengan   -->
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top image-fluid" alt="$post->category->name">
            <article class="my-3 fs-5">

                {!! $post->body !!}
            </article>

            <a href="/blog" class="d-block mt-3">Back to Posts</a>
        </div>
    </div>
</div>
<article>

</article>


@endsection