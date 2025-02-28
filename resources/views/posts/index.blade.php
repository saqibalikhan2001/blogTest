@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="titlebar">
            <a class="btn btn-secondary float-end mt-3" href="{{ route('posts.create') }}" role="button">Add Post</a>
            <h1>Posts listing</h1>
        </div>

        <hr>

        <!-- Success message if a post is created successfully -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

    <!-- Display posts if they exist -->
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <?php if(substr($post->image, -4) == '.pdf' || substr($post->image, -5) == '.docx' || substr($post->image, -4) == '.doc'){?>
                                    <embed
                                        src="{{ asset('images/posts/'.$post->image)}}"
                                        style="width:100px; height:100px;"
                                        frameborder="0"
                                    >
                                <?php }else{ ?>
                                    <img class="img-fluid" style="max-width:50%;" src="{{ asset('images/posts/'.$post->image)}}" alt="">
                                <?php } ?>
                            </div>
                            <div class="col-10">
                                <h4>{{ $post->title }}</h4>
                            </div>
                        </div>
                        <p>{{ $post->content }}</p>
                        <hr>
                    </div>
                </div>
            @endforeach
        @else
            <p>No Posts found</p>
        @endif
    </div>
@endsection
