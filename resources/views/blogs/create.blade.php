@extends('layouts.layout')

@section('content')
<main role="main" class="container">

    <h1>Create a blog</h1>

    <form method="POST" action="/blog">


        {{ csrf_field() }}

        <div class="form-group">

            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Give your blog a title" required>

        </div>

        <div class="form-group">

            <label for="body">Blog</label>
            <textarea class="form-control" rows="5" id="body" name="body" placeholder="Here goes your blog" required></textarea>

        </div>

        <button type="submit" class="btn btn-primary">Post</button>

    </form>
</main>
@endsection