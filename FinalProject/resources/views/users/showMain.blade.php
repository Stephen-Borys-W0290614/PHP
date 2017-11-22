@extends('layouts.masterMain')




@section('content')

    @if(Auth::user()->isAdministrator())
        Admin Page<br/>
    @else
        <script>window.location = "/home";</script>
    @endif

    <div class="col-sm-8 blog-main">



        <h1>{{ $user->id }}</h1>

        <h1>{{ $user->name }} </h1>

        <h1>{{ $user->email }} </h1>

        <h1>{{ $user->created_at }}</h1>

        <h1>{{ $user->updated_at }}</h1>






    </div>
    @include('layouts.sidebar')

@endsection