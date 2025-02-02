@extends('layouts.default')

@section('content')
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input name="token" type="hidden" value="{{ request('token') }}">
        <div>
            <label for="email">Email</label>
            <input id="email" name="email" readonly value="{{ request('email') }}">
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" value="{{ old('password') }}">
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" value="{{ old('password_confirmation') }}">
        </div>
        <input type="submit" value="Submit">
        @foreach ($errors->all() as $error)
        <div class="error">
            <p>{{ $error }}</p>
        </div>
        @endforeach
    </form>
@endsection
