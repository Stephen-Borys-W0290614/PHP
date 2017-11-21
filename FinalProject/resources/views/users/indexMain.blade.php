@extends ('layouts.masterMain')


@section('content')

    <div class="col-sm-8 blog-main">

        <form action="{{ route('users.indexMain') }}" method="get">
            <div class="form-group">

            <input type="text" class="form-control" name="search">

    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Search</button>
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

        </div><!-- /.blog-main -->
        @include('layouts.sidebar')
    </div>


    </main><!-- /.container -->
@endsection
