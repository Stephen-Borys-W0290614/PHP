<div class="blog-post">

    <h1 class="blog-post-title">

        {{--<a href="/users/{{ $user->id }}">--}}

        <p>
            ID: {{ $user->id }} </br>

            Name: {{ $user->name }} <br/>

            Email: {{ $user->email }} <br/>

            Created: {{ $user->created_at }} <br/>

            Updated: {{ $user->updated_at }}

            <a href="/users/edit/{{ $user->id }}"> Edit User Role</a>


            <a href="/users/update/{{ $user->id }}"> Edit User Info</a>


            ===========================

        </p>

    </h1>


    {{--<p class="blog-post-meta">--}}

        {{--{{ $post->user->name }} on--}}

        {{--{{ $post->created_at->toFormattedDateString() }}--}}

    {{--</p>--}}

    {{--<h4>{{ $post->body }}</h4>--}}

</div>