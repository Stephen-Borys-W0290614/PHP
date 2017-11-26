<div class="blog-post">

    <h1 class="blog-post-title">

        {{--<a href="/users/{{ $user->id }}">--}}

        <p>
            ID: {{ $theme->id }} </br>

            Name: {{ $theme->name }} <br/>

            CND_URL: {{ $theme->cnd_url }} <br/>

            Description: {{ $theme->description }} <br/>

            Is Default: {{ $theme->is_default }}

            Created By: {{ $theme->created_by }}

            Last Updated By: {{ $theme->last_modified_by }}

            Time Created: {{ $theme->created_at }}

            Time Last Updated: {{ $theme->updated_at }}

            <a href="/themes/edit/{{ $theme->id }}"> Edit Theme</a>

            ===========================

        </p>

    </h1>


    {{--<p class="blog-post-meta">--}}

    {{--{{ $post->user->name }} on--}}

    {{--{{ $post->created_at->toFormattedDateString() }}--}}

    {{--</p>--}}

    {{--<h4>{{ $post->body }}</h4>--}}

</div>