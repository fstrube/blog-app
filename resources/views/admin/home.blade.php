@extends('layouts.default')

@section('content')
    <article>
        <h3>Greetings, {{ auth()->user()->name }}</h3>
        <p>What would you like to do?</p>
        <a role="button" href="{{ route('posts.create') }}">New Post</a>
        <a role="button" href="{{ route('logout') }}">Logout</a>
    </article>
@endsection
