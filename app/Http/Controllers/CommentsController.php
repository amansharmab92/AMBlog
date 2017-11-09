<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Blog;
use App\Comment;

class CommentsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function store(Blog $blog) {

        $this->validate(request(),[
            'body' => 'required|min:2'
        ]);

        Comment::create([
            'blog_id'=>$blog->id,

            'body' => request('body'),

            'user_id' => auth()->user()->id

        ]);

        return back();
    }
}
