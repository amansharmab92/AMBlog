<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $blogs = Blog::orderBy('updated_at', 'DESC')->get();

        return view('blogs.index', compact('blogs'));
    }

    public function create(){
        return view('blogs.create');
    }

    public function show(Blog $blog){

        return view('layouts.blogshow', compact('blog'))->with('edit', false);
    }

    public function showedit(Blog $blog){

        return view('layouts.blogshow', compact('blog'))->with('edit', true);
    }

    public function store(){

        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);


        Blog::create([

            'title' => request('title'),

            'body' => request('body'),

            'user_id' => auth()->user()->id

        ]);
        return redirect('/');
    }

    public function update(Blog $blog){

        $validator = Validator::make(request()->all(), [
            'body' => 'required'
        ]);

        if($blog->user->id != auth()->user()->id) {
            return back()->withErrors(['You are not allowed to edit post not created by you.']);
        }

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $blog->body = request('body');

        $blog->save();

        return $this->show($blog);
    }

}
