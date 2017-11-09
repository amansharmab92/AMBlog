@extends('layouts.layout')


@section('content')

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">AM Blog</h1>
    </div>
</div>


<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

            @foreach($blogs as $blog)
                @include('blogs.blog')
            @endforeach

        </div><!-- /.blog-main -->

    </div><!-- /.row -->

</main><!-- /.container -->

@endsection