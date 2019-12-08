@extends('main')

@section('title','|Home Page')
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="styles.css">
    @endsection

@section('content')
    <div class="row">
        <div class="col-md-8" >
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print,
                    and publishing industries for previewing layouts and visual mockups.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print,
                    and publishing industries for previewing layouts and visual mockups.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print,
                    and publishing industries for previewing layouts and visual mockups.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print,
                    and publishing industries for previewing layouts and visual mockups.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
        </div>

        <div class="col-md-3 col-md-offset-1" >
            <h2>Side Bar</h2>
        </div>
    </div> <!-- end of container -->
@endsection

@section('scripts')
    <link src="js/script.js">
    @endsection
