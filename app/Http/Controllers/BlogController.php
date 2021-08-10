<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tags;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Post $post)
    {
        $category = Category::all();
        $tags = Tags::all();
        $data = $post->latest()->take(4)->get();
        return view('blog', compact('data', 'category', 'tags'));
    }

    public function isi_blog($slug)
    {
        $category = Category::all();
        $tags = Tags::all();
        $data = Post::where('slug', $slug)->get();
        return view('blog.isi_post', compact('data', 'category', 'tags'));
    }

    public function list_blog()
    {
        $category = Category::all();
        $tags = Tags::all();
        $data = Post::latest()->paginate(3);
        return view('blog.list_post', compact('data', 'category', 'tags'));
    }
}
