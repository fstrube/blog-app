<article>
    <h1>{{ $post->title }}</h1>
    {{ new Illuminate\Support\HtmlString($post->content) }}
</article>
