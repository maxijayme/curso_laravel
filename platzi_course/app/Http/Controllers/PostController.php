<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        return view(('posts.index'),[
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function create(){
        return view(('posts.create'));
    }

    public function store(Request $request, Post $post){
        $request->validate([
            'title' => 'required|unique:posts,title,' . $post->id,
            'body' => 'required'
        ]);

        $request->user()->posts()->create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body
        ]);
        return view(('posts.index'),[
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function edit(Post $post){
        return view(('posts.edit'),[
            'post' => $post
        ]);
    }
    public function update(Request $request,Post $post){
        $request->validate([
            'title' => 'required|unique:posts,title,' . $post->id,
            'body' => 'required'
        ]);

        $post->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body
        ]);
        return view(('posts.index'),[
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function destroy(Post $post){
        $post->delete();
        return back();
    }
}
