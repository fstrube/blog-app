<div>
    <nav>
        <a href="{{ route('posts.create') }}">New Post</a>
    </nav>
    @foreach($posts as $post)
    <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
    <p>{{ $post->excerpt }}</p>
    @endforeach
</div>
