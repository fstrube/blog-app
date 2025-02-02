<form action="{{ route('password.email') }}" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input id="email" name="email" value="{{ old('email') }}">
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
