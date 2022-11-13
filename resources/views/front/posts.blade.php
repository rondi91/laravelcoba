{{-- @dd($posts) --}}
@extends('front.layouts.main')

@foreach ($posts as $post)
{{-- {{ dd($post->category) }} --}}
    
<h3>{{ $post->category->name }}</h3>


@endforeach

@section('content')
    
@endsection 