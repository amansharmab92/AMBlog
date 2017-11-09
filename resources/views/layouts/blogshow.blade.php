@extends('layouts.layout')

@section('content')

<main role="main" class="container">

    <div class="row">

        <div class="col-sm blog-main">

            <h2 class="blog-post-title">

                {{$blog->title}}

            </h2>


            <p class="blog-post-meta">

                {{$blog->user->name}}, {{$blog->created_at->toFormattedDateString()}}

            </p>


            <p>

                {{$blog->body}}
            </p>


        </div><!-- /.blog-post -->
        @if ($blog->user->id == auth()->user()->id && !$edit)
        <div class="col-sm-1 ml-auto">
            <a href="/blog/{{$blog->id}}/edit" id="edit-link" ">Edit</a>
        </div>
        @endif





    </div>

    @if ($blog->user->id == auth()->user()->id && $edit)
    <div id="edit-blog">
        <form method="POST" action="/blog/{{$blog->id}}">

            {{method_field('PATCH')}}
            {{ csrf_field() }}

            <div class="form-group">

                <textarea class="form-control" rows="5" id="body" name="body" required>{{$blog->body}}</textarea>

            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/blog/{{$blog->id}}" id="edit-link" ">Cancel</a>

        </form>

        @include('layouts.errors')
    </div>
    @elseif($edit)
    <div class="form-group">
        <div class="alert-danger">
            <ul>
                You are not allowed to edit blogs created by other users.
            </ul>
        </div>
    </div>
    @endif
    <hr>

    <div class="frame-comments">

        <b>Comments</b>

        <ul class="col-sm-9 ml-auto list-group">

            @foreach($blog->comments as $comment)

                <li class="list-group-item">

                    <article>

                        {{$comment->body}}

                    </article>

                    <small>

                        {{$comment->user->name}}, {{$comment->created_at->diffForHumans()}}

                    </small>

                </li>

            @endforeach

        </ul>

    </div>
    <hr>

    <form method="POST" action="/blog/{{$blog->id}}/comment">


        {{ csrf_field() }}

        <div class="form-group">

            <textarea class="form-control" rows="5" id="body" name="body" placeholder="Add Comment" required></textarea>

        </div>

        <button type="submit" class="btn btn-primary">Add Comment</button>

    </form>

</main>

@endsection