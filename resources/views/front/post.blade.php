@extends('front.layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1>single post</h1>
        
            <h2>{{ $post->title }}</h2>
            <h5>by: <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name }} </a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }} </a>  </></h5>
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
            <p>{!! $post->body !!}</p>
            </article>
    
    <a href="/posts">Back to Post</a>

        </div>
    </div>
</div>

   
@endsection 