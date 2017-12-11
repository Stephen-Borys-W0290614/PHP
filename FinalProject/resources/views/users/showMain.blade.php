@extends('layouts.masterMain')

{{--<script src="{{ URL::asset('js/video') }}"></script>--}}


@section('content')

    @if(Auth::user()->isAdministrator())
    @else
        <script>window.location = "/home";</script>
    @endif

    <table border="1" >
        <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Admin</th>
        <th>Theme Manager</th>
        <th>Moderator</th>
        <th>Assign Role</th>
        <th>Delete</th>
        </thead>
        <tbody>
        {{--@foreach($users as $user)--}}
            <tr>
                <form action="/admin" method="post">

                    <td>{{$user->name}} <input type="hidden" name="email" value=" {{$user->name}}"></td>
                    <td>{{$user->email}} <input type="hidden" name="email" value=" {{$user->email}}"></td>
                    <td><input type="checkbox" {{$user->hasRole('admin') ? 'checked' : '' }} name="role_admin"></td>
                    <td><input type="checkbox" {{$user->hasRole('theme manager') ? 'checked' : '' }} name="role_theme"></td>
                    <td><input type="checkbox" {{$user->hasRole('mod') ? 'checked' : '' }} name="role_mod"></td>

                    {{csrf_field() }}
                    <td><button type="submit">Assign Roles</button> </td>

                    </form>
                <form action="{{ route('users.delete', ['user_id' => $user->id]) }}" method="GET">
                    {{ csrf_field() }}

                    <td><a href="/users/update/{{ $user->id }}"> Edit User Info</a></td>

                    <td><button type="submit" class="btn btn-default">Delete</button></td>
                </form>
            </tr>

        {{--@endforeach--}}
        </tbody>
    </table>
    @include('layouts.sidebar')

@endsection