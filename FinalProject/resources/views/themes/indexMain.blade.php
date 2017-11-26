@extends ('layouts.masterMain')


@section('content')

    @if(Auth::user()->isTheme())

    @else
        <script>window.location = "/home";</script>
    @endif

    <div class="col-md-6 text-right">



    </div>


    <div class="row">

        <div class="col-sm-8 blog-main">

            @foreach($themes as $theme)

                @include('themes.theme')



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
