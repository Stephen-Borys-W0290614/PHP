@extends ('layouts.masterMain')


@section('content')

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function(){
            var postCount = null;
            window.setInterval(function(){
                $.get('/posts-count', function(data){
                    if(!postCount){
                        postCount = data.count;
                    }else{
                        if(data.count != postCount) {
                            location.reload();
                        }
                    }
                })

            }, 1000); // 5,000 milliseconds = 5 seconds
        });
    </script>

    {{--This is the script used for polling, It will call the database and get a count of the number of posts--}}
    {{--If this number is grater then the number it had before it will refresh the page--}}



    <div class="row">

        <div class="col-sm-8 blog-main">

            @foreach($posts as $post)

                @include('posts.post')

            @endforeach

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->
        @include('layouts.sidebar')
    </div>


</main><!-- /.container -->
@endsection
