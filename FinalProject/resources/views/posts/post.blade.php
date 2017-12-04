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

        <form action="{{ route('posts.delete', ['post_id' => $post->id]) }}" method="GET">
            {{ csrf_field() }}


            <button type="submit" class="btn btn-default">Delete</button>
        </form>


            {{--<a href="{{ route('posts.delete', ['post_id' => $post->id]) }}">Delete</a>--}}

        @endif
        @endif
</div>