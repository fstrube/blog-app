<form action="{{ $post->exists ? route('posts.update', $post) : route('posts.store') }}" method="POST">
    @csrf
    @method($post->exists ? 'PUT' : 'POST')
    <div>
        <label for="title">Title</label>
        <input id="title" name="title" value="{{ old('title', $post->title) }}">
    </div>
    <div>
        <label for="slug">URL</label>
        <input id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
    </div>
    <div>
        <label for="content">Content</label>
        <textarea name="content">{{ old('content', $post->content) }}</textarea>
    </div>
    <input type="submit" value="Save">
    @foreach ($errors->all() as $error)
    <div class="error">
        <p>{{ $error }}</p>
    </div>
    @endforeach
</form>
