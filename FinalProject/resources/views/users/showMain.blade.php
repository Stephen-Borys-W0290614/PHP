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
                <th>Last Name</th>
                <th>E-Mail</th>
                <th>Time Created</th>
                <th>Time Updated</th>
            </thead>
            <tbody>
            {{--@foreach ($users as $user)--}}
                <tr>
                    <form action="{{ route('users.user') }}" method="post">
                        <td> {{ $user->id }}</td>
                        <td> {{ $user->name }}</td>
                        <td> {{ $user->email }}</td>
                        <td> {{ $user->created_at }}</td>
                        <td> {{ $user->updated_at }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        {{ csrf_field() }}
                        <td><button type="submit">Update</button></td>


                    </form>
                </tr>
            {{--@endforeach--}}

            </tbody>




        </table>






    </div>
    @include('layouts.sidebar')

@endsection