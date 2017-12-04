<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module">
        <h4>Things To Do</h4>
        @if (Auth::check())
            <a class="nav-link" href="/posts/create">Create A Post</a>

            @if(Auth::user()->isMod())
            <a class="nav-link" href="/posts/deleted">View deleted Posts</a>

            @endif

        @endif

        @if (! Auth::check())

            <a class="nav-link" href="/register">Create An Account</a>

            <a class="nav-link" href="/login">Login</a>
        @endif
    </div>
            <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    {{--<div class="sidebar-module">--}}
        {{--<h4>Archives</h4>--}}
        {{--<ol class="list-unstyled">--}}

            {{--@foreach ($archives as $stats)--}}

                {{--<li>--}}

                    {{--<a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">--}}

                        {{--{{ $stats['month'] . ' ' . $stats['year'] }}</a>--}}

                {{--</li>--}}



            {{--@endforeach--}}

            {{--<li>--}}

                {{--<a href="/posts">All</a>--}}

            {{--</li>--}}

        {{--</ol>--}}
    {{--</div>--}}
    {{--<div class="sidebar-module">--}}
        {{--<h4>Tags</h4>--}}
        {{--<ol class="list-unstyled">--}}

            {{--@foreach ($tags as $tag)--}}

                {{--<li>--}}

                    {{--<a href="/posts/tags/{{ $tag }}">--}}
                        {{--{{ $tag }}</a>--}}

                {{--</li>--}}



            {{--@endforeach--}}

            {{--<li>--}}

                {{--<a href="/posts">All</a>--}}

            {{--</li>--}}

        {{--</ol>--}}
    {{--</div>--}}
<div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
    </ol>
</div>
    </div>
</aside><!-- /.blog-sidebar -->

