@extends ('layouts.masterMain')


@section('content')

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        //on document load
        $(function(){
            //store first posts count
            var postCount = null;
            //add a timer that calls the get posts count controller and refreshs the page accordingly
            window.setInterval(function(){
                //execute an AJAX GET request
                $.get('/posts-count', function(data){
                    //{ count: X} , where X is the number of posts
                    if(!postCount){
                        //if this is the first time this is executed -> then store the original number of posts
                        postCount = data.count;
                    }else{
                        //otherwise compare our last posts count to the number of posts returned from the server
                        if(data.count != postCount) {
                            //if numbers are different then we should refresh to get the latest data
                            location.reload();
                        }
                    }
                })

            }, 1000); // 5,000 milliseconds = 5 seconds
        });
    </script>



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
