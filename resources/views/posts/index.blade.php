@extends('layouts.default')

@section('content')
    <div>
        @foreach($posts as $post)
        <h3><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
        <p>{{ $post->excerpt }}</p>
        @endforeach
    </div>
@endsection
