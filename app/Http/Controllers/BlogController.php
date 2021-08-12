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
        $category_widget = Category::all();
        $tags = Tags::latest()->take(6)->get();
        $data = $post->latest()->take(4)->get();
        return view('blog', compact('data', 'category_widget', 'tags'));
    }

    public function isi_blog($slug)
    {
        $category_widget = Category::all();
        $tags = Tags::latest()->take(6)->get();
        $data = Post::where('slug', $slug)->get();
        return view('blog.isi_post', compact('data', 'category_widget', 'tags'));
    }

    public function list_blog()
    {
        $category_widget = Category::all();
        $tags = Tags::latest()->take(6)->get();
        $data = Post::latest()->paginate(3);
        return view('blog.list_post', compact('data', 'category_widget', 'tags'));
    }

    public function list_category(category $category)
    {
        $category_widget = Category::all();

        $data = $category->post()->paginate(5);
        return view('blog.list_post', compact('data', 'category_widget'));
    }

    public function cari(request $request)
    {
        $category_widget = Category::all();

        $data = Post::where('judul', $request->cari)->orWhere('judul', 'like', '%'.$request->cari.'%')->paginate(5);
        return view('blog.list_post', compact('data', 'category_widget'));
    }
}
