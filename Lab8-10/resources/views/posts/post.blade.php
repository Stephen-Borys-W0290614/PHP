<div class="blog-post">

    <h1 class="blog-post-title">

        <a href="/posts/{{ $post->id }}">

            {{ $post->title }}

        </a>

    </h1>


    <p class="blog-post-meta">

        {{ $post->created_at->toFormattedDateString() }}

    </p>

    <h4>{{ $post->body }}</h4>

</div>