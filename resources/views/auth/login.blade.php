<form action="{{ route('login.store') }}" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input id="email" name="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input id="password" name="password" type="password">
    </div>
    <input type="submit" value="Login">
    <div>
        <a href="{{ route('register') }}">Create an account.</a>
    </div>
    <div>
        <a href="{{ route('password.request') }}">Forgot password?</a>
    </div>
    @foreach ($errors->all() as $error)
    <div class="error">
        <p>{{ $error }}</p>
    </div>
    @endforeach
</form>
