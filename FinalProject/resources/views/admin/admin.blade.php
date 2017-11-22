@extends ('layouts.masterMain')
@section('content')
    <div class="col-sm-8 blog-main">

        @if(Auth::user()->isAdministrator())
            Youare logged in as an admin
        @else
            <script>window.location = "/home";</script>
        @endif
        <hr>
        <h1>Secret Admin Zone</h1>
        <hr>
        @include('layouts.errors')


    </div>


@endsection