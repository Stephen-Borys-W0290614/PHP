@extends('layouts.masterMain')

{{--<script src="{{ URL::asset('js/video') }}"></script>--}}


@section('content')

    @if(Auth::user()->isAdministrator())
    @else
        <script>window.location = "/home";</script>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" method="POST" action="{{ url('/users/update', array($user->id)) }}">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="form-group">
                            <label for="inputName" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input type="text" name="name" class="form-control" id="inputName" value="{{ $user->name }}" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">E-Mail</label>
                            <div class="col-lg-10">
                                <input type="text" name="email" class="form-control" id="inputEmail" value="{{ $user->email }}" placeholder="E-Mail">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


    @include('layouts.sidebar')

@endsection