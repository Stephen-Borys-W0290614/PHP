@extends ('layouts.masterMain')
@section('content')
    <div class="col-sm-8 blog-main">
        @if(Auth::user()->isAdministrator())
            {{--@include('users.indexMain')--}}
            Greate Work
        @endif
        <hr>
        <h1>Secret Admin Zone</h1>
        <hr>
        @include('layouts.errors')


    </div>


@endsection