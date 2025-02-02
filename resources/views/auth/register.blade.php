<form action="{{ route('register.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input id="name" name="name" value="{{ old('name') }}">
    </div>
    <div>
        <label for="email">Email</label>
        <input id="email" name="email" value="{{ old('email') }}">
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
    <div>
        <a href="{{ route('login') }}">Back to login.</a>
    </div>
    @foreach ($errors->all() as $error)
    <div class="error">
        <p>{{ $error }}</p>
    </div>
    @endforeach
</form>
