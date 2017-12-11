@extends('layouts.masterMain')




@section('content')

    @if(Auth::user()->isAdministrator())
    @else
        <script>window.location = "/home";</script>
    @endif

    <div class="col-sm-8 blog-main">

        <form action="/users/searched" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="search">Search Users:</label>
                <input type="text" class="form-control" id="search" placeholder="Search"
                       name="search">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>



        {{--<h1>{{ $user->id }}</h1>--}}

        {{--<h1>{{ $user->name }} </h1>--}}

        {{--<h1>{{ $user->email }} </h1>--}}

        {{--<h1>{{ $user->created_at }}</h1>--}}

        {{--<h1>{{ $user->updated_at }}</h1>--}}

        <table>
            <thead>
            <th>ID</th>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Time Created</th>
            <th>Time Updated</th>
            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr>
                <form method="GET" action="/users/edit/{{ $user->id }}">

                    {{ csrf_field() }}
                    <td> {{ $user->id }}</td>
                    <td> {{ $user->name }}</td>
                    <td> {{ $user->email }}</td>
                    <td> {{ $user->created_at }}</td>
                    <td> {{ $user->updated_at }}</td>
                    <td></td>
                    <td></td>
                    <td><a href="/users/update/{{ $user->id }}"> Edit User Info</a></td>
                    <td><button type="submit">Update</button></td>

                    @include('layouts.errors')

                </form>
            </tr>
            @endforeach

            </tbody>




        </table>






    </div>
    @include('layouts.sidebar')

@endsection