@extends('layouts.masterMain')




@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; mardian-right:25px;">
                <h1> {{ $user->name }} Profile</h1>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" vlaue={{ csrf_field() }}>
                    <input type="submit" class="pull-right btn btn-sm btm-primary">
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3>{{ $user->bio }}</h3>
                <td><a href="/profile/update/{{ $user->id }}"> Edit Your Bio</a></td>

            </div>
        </div>
    </div>





@include('layouts.sidebar')

@endsection