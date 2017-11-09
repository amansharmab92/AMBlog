<div class="blog-post">


    <h2 class="blog-post-title">
        <a href="/blog/{{$blog->id}}">
            {{$blog->title}}
        </a>
    </h2>

    <p class="blog-post-meta">{{$blog->user->name}},  {{$blog->created_at->toFormattedDateString()}}</p>

    <p>{{$blog->body}}</p>

</div><!-- /.blog-post -->

<hr>
