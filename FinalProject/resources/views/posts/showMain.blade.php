@extends('layouts.masterMain')




@section('content')

    <div class="col-sm-8 blog-main">

        <h1>{{ $post->title }}</h1>

        <img src="{{asset('images/'.$post->image)}}" alt="Card image cap" height="140" width="206"/><br>
        <p class="card-text"></p>


        @if (count($post->tags))

            <ul>


                @foreach ($post->tags as $tag)

                    <li>

                        <a href="/posts/tags/{{ $tag->name }}">

                                {{ $tag->name }}



                        </a>

                    </li>

                @endforeach

            </ul>


        @endif

        {{ $post->body}}




        <hr>


        <div class="comments">

            <ul class="list-group">

            @foreach ($post->comments as $comment)

                <li class="list-group-item">

                    <strong>

                        {{ $comment->created_at->diffForHumans() }}: &nbsp;

                    </strong>

                    {{ $comment->body }}

                </li>

            @endforeach

            </ul>

        </div>

        <hr>


        <div class="card">

            <div class="card-block">

                <form method="POST" action="/posts/{{ $post->id }}/comments">

                    {{ csrf_field() }}


                    <div class="form-group">

                        <textarea name="body" placeholder="Your Comment Here." class="form-control" required></textarea>

                    </div>


                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">Submit Comment</button>

                    </div>


                </form>

                @include('layouts.errors')


            </div>



        </div>


    </div>
    @include('layouts.sidebar')

@endsection