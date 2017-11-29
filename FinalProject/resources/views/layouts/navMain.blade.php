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


                    @if(Auth::user()->isAdministrator())
                    <style>
                        .dropdown {
                        position: relative;
                        display: inline-block;
                        }

                        .dropdown-content {
                        display: none;
                        position: absolute;
                        background-color: #f9f9f9;
                        min-width: 160px;
                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                        z-index: 1;
                        }

                        .dropdown-content a {
                        color: black;
                        padding: 12px 16px;
                        text-decoration: none;
                        display: block;
                        }

                        .dropdown-content a:hover {background-color: #f1f1f1}

                        .dropdown:hover .dropdown-content {
                        display: block;
                        }

                        .dropdown:hover .dropbtn {
                        background-color: #3e8e41;
                        }
                    </style>
                        <div class="dropdown">
                            <button class="dropbtn">Admin Controls</button>
                            <div class="dropdown-content">
                                <a href="/users">Edit User</a>

                            </div>
                        </div>



                    @elseif(Auth::user()->isTheme())
                        <style>
                            .dropdown {
                                position: relative;
                                display: inline-block;
                            }

                            .dropdown-content {
                                display: none;
                                position: absolute;
                                background-color: #f9f9f9;
                                min-width: 160px;
                                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                z-index: 1;
                            }

                            .dropdown-content a {
                                color: black;
                                padding: 12px 16px;
                                text-decoration: none;
                                display: block;
                            }

                            .dropdown-content a:hover {background-color: #f1f1f1}

                            .dropdown:hover .dropdown-content {
                                display: block;
                            }

                            .dropdown:hover .dropbtn {
                                background-color: #3e8e41;
                            }
                        </style>
                        <div class="dropdown">
                            <button class="dropbtn">Theme Manager Controls</button>
                            <div class="dropdown-content">
                                <a href="/themes">Edit Themes</a>

                            </div>
                        </div>
                    @endif

                    <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>



                @endif

                {{--@if(Auth::user()->isAdministrator())--}}
                   {{--<a class="nav-link" href="/users">Edit User</a>--}}
                {{--@endif--}}

                {{--@if (! Auth::user()->isAdministrator())--}}
                    {{--<p>wow</p>--}}
                    {{--@endif --}}

                @if(Auth::check() && Auth::user()->role === "admin")
                    <a class="nav-link" href="/users">Edit User</a>
                @endif

            </nav>
        </div>
    </div>


