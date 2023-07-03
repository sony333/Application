@extends('layouts.main')

@section('container')
<h1 class="mt-3 mb-5 text-center">{{ $title }}</h1>


<!-- SEARCH BAR -->
<div class="row justify-content-center mb-3">
    <div class="col-md-6 ">
        <form action="/posts" method="get">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Post" name="search" value="{{ request('search') }}" autocomplete="off">
                <button type="submit" class="btn btn-outline-secondary">Search</button>
            </div>
        </form>
    </div>
</div>

<!-- HERO Post -->
@if($posts->count())
<div class="card mb-3">
    @if($posts[0]->image)
    <div style="max-height: 400px; overflow:hidden;">
        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top img-fluid" alt="...">
    </div>
    @else
    <h2 class="my-3">{{ $posts[0]->title }}</h2>
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
    @endif

    <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-dark">{{ $posts[0]->title }}</a></h3>
        <p><small class="text-body-secondary">
                By. <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}"> {{ $posts[0]->category->name }} </a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>

    </div>
</div>


<!-- ALL POST -->
<div class="container">
    <div class="row">
        @foreach( $posts->skip(1) as $post)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 22rem;">
                <!-- Post Category -->
                <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7);"><a href="/posts?category={{ $post->category->slug }}" class="text-white">{{ $post->category->name }}</a> </div>
                <!-- End Post Category -->

                <!-- Card Image -->
                @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid mt-2" alt="...">
                @else
                <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" class="card-img-top" alt="...">
                @endif
                <!-- end card Image -->

                <!-- Card Body -->
                <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a> </h5>
                    <p><small class="text-body-secondary">
                            By. <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
                <!-- End Card Body -->
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="d-flex justify-content-start">
    {{ $posts->links() }}
</div>

@else
<p class="text-center fs-4">Posts Not Found</p>
@endif

<!-- END ALL POST -->


@endsection