@extends ('layouts.masterMain')
@section('content')
    <table border="1" >
        <thead>
        <th>First Name</th>
        <th>Email</th>
        <th>User</th>
        <th>Admin</th>
        <th>Theme Manager</th>
        <th>Moderator</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <form action="/admin" method="post">
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}} <input type="hidden" name="email" value=" {{$user->email}}"></td>
                    <td><input type="checkbox" {{$user->hasRole('User') ? 'checked' : '' }} name="role_User"></td>
                    <td><input type="checkbox" {{$user->hasRole('Administrator') ? 'checked' : '' }} name="role_admin"></td>
                    <td><input type="checkbox" {{$user->hasRole('ThemeManager') ? 'checked' : '' }} name="role_theme"></td>
                    <td><input type="checkbox" {{$user->hasRole('Moderator') ? 'checked' : '' }} name="role_mod"></td>

                    {{csrf_field() }}
                    <td><button type="submit">Assign Roles</button> </td>
                    <td><button type="submit">Delete</button> </td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection