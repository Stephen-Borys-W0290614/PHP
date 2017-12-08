@extends('layouts.masterMain')



@section('content')

    <div class="col-sm-8 blog-main">

    <h1>Publish A Post</h1>

        <hr>

        <form method="POST" action="/posts">

            {{ csrf_field() }}



            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" reqiured>
            </div>


            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control" reqiured></textarea>
            </div>

            <div class="form-group">
                <label for="url">Image Url</label>
                <input type="url" pattern="^https?://(?:[a-z0-9\-]+\.)+[a-z]{2,6}(?:/[^/#?]+)+\.(?:jpg|gif|png)$" id="urlimage" name="urlimage" class="form-control" >
            </div>


            <button type="submit" class="btn btn-primary">Publish</button>


            @include ('layouts.errors')


        </form>



    </div>
    @include('layouts.sidebar')


@endsection