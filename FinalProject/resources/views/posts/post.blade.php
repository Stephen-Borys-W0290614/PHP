<div class="blog-post">

    <h1 class="blog-post-title">

        <a href="/posts/{{ $post->id }}">

            {{ $post->title }}

        </a>

    </h1>


    <p class="blog-post-meta">

        {{ $post->user->name }} on

        {{ $post->created_at->toFormattedDateString() }}

    </p>

    <h4>{{ $post->body }}</h4>

    @if (Auth::check())


    @if(Auth::user()->isMod())

        <form action="/posts/delete" method="POST">
            {{ csrf_field() }}


            <button type="submit" class="btn btn-default">Delete</button>
        </form>

        @endif
        @endif
</div>