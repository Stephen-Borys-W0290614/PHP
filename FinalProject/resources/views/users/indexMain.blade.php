@if(Auth::user()->isAdministrator())

@else
    <script>window.location = "/home";</script>
@endif

@extends ('layouts.masterMain')


@section('content')

    {{--@if(Auth::user()->isAdministrator())--}}

    {{--@else--}}
        {{--<script>window.location = "/home";</script>--}}
    {{--@endif--}}

    <div class="col-md-6 text-right">
        <form method="POST" action="/users/searched">

            {{ csrf_field() }}

        {{--<form action="{{ route('users.indexMain') }}" method="get" class="form-inline">--}}
            <div class="form-group">

            <input type="text" class="form-control" name="search" placeholder="Keyword" value="{{ isset($search) ? $search : '' }}">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Search</button>
    </div>

    </form>


    </div>


    <div class="row">

        <div class="col-sm-8 blog-main">

            @foreach($users as $user)

                @include('users.user')



            @endforeach

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>
                {{--{{ $categories->appends(['search' => $search]) }}--}}


        </div><!-- /.blog-main -->
        @include('layouts.sidebar')
    </div>
    </main><!-- /.container -->
@endsection
