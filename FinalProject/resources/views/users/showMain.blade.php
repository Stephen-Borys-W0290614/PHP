@extends('layouts.masterMain')




@section('content')

    @if(Auth::user()->isAdministrator())
    @else
        <script>window.location = "/home";</script>
    @endif

    <div class="col-sm-8 blog-main">



        {{--<h1>{{ $user->id }}</h1>--}}

        {{--<h1>{{ $user->name }} </h1>--}}

        {{--<h1>{{ $user->email }} </h1>--}}

        {{--<h1>{{ $user->created_at }}</h1>--}}

        {{--<h1>{{ $user->updated_at }}</h1>--}}

        <table>
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>E-Mail</th>
                <th>Time Created</th>
                <th>Time Updated</th>
                <th>Admin</th>
                <th>Theme Manager</th>
                <th>Mod</th>
            </thead>
            <tbody>
            {{--@foreach ($users as $user)--}}
                <tr>
                    <form method="POST" action="/users">

                        {{ csrf_field() }}
                        <td> {{ $user->id }}</td>
                        <td> {{ $user->name }}</td>
                        <td> {{ $user->email }}</td>
                        <td> {{ $user->created_at }}</td>
                        <td> {{ $user->updated_at }}</td>
                        <td><input type="checkbox" {{ $user->hasRole('admin') ? 'checked' : '' }}></td>
                        <td><input type="checkbox" {{ $user->hasRole('theme manager') ? 'checked' : '' }}></td>
                        <td><input type="checkbox" {{ $user->hasRole('mod') ? 'checked' : '' }}></td>
                        <td><button type="submit">Update</button></td>

                        @include('layouts.errors')

                    </form>
                </tr>
            {{--@endforeach--}}

            </tbody>

            {{--$user->roles()->where('title', 'admin') ? 'checked' : ''--}}


        </table>






    </div>
    @include('layouts.sidebar')

@endsection