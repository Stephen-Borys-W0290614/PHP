    <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#">New hires</a>


                @if ( ! Auth::check())

                    <a class="nav-link" href="/register">Create An Account</a>

                    <a class="nav-link" href="/login">Login</a>

                @endif



                @if (Auth::check())

                    <a class="nav-link" href="/logout">Logout</a>


                    <a class="nav-link" href="/posts/create">Create A Post</a>


                    <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>

                @endif


            </nav>
        </div>
    </div>


