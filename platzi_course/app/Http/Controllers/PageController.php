<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request){
        $search = $request->search;
        $posts = Post::where('title', 'LIKE', "%{$search}%")->latest()->paginate(10);
        return view('home', ['posts'=>$posts]);
    }
    // public function blog(){
    //     // $posts = Post::get();
    //     $posts = Post::latest()->paginate(10);
    //     return view('blog', ['posts'=>$posts]);
    // }
    public function post(Post $post){
        return view('post', ['post'=>$post]);
    }
}
