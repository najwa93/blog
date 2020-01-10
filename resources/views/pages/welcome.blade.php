@extends('main')

@section('title','|Home Page')
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="styles.css">
    @endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="jumborton">
                <h1>Welcome To My blog</h1>
                <p class="lead">Thank you for visiting my website, this is popular posts.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8" >

            @foreach($posts as $post)
                <div class="post">
                    <h3>{{$post->title}}</h3>
                    <p>{{substr($post->body,0,200)}}{{strlen($post->body) > 200? "...":""}}</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                @endforeach
        </div>

        <div class="col-md-3 col-md-offset-1" >
            <h2>Side Bar</h2>
        </div>
    </div> <!-- end of container -->
@endsection

@section('scripts')
    <link src="js/script.js">
    @endsection
