@extends('layouts.default')

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        {{ new Illuminate\Support\HtmlString($post->content) }}
    </article>
@endsection
