@extends('layouts.masterMain')

{{--<script src="{{ URL::asset('js/video') }}"></script>--}}


@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" method="POST" action="{{ url('/profile/update', array($user->id)) }}">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="form-group">
                            <label for="inputBio" class="col-lg-2 control-label">Bio</label>
                            <div class="col-lg-10">
                                <input type="text" name="bio" class="form-control" id="inputBio" value="{{ $user->bio }}" placeholder="Bio">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                    @include ('layouts.errors')

                </form>
            </div>
        </div>
    </div>


    @include('layouts.sidebar')

@endsection