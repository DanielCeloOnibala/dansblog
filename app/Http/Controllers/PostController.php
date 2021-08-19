<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tags;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::paginate(5);
        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tags::all();
        $category = Category::all();
        return view('admin.post.create', compact('tags', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'gambar' => 'required',
        ]);
        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $post = Post::create([
            'judul' => $request->judul,
            'featured' => $request->featured,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'gambar' => 'public/uploads/posts/'.$new_gambar,
            'slug' => Str::slug($request->judul),            
            'user_id' => Auth::id(),
            'featured' => $request->featured,
        ]);

        $post->tags()->attach($request->tags);
        $gambar->move('public/uploads/posts/', $new_gambar);
        return redirect()->back()->with('success', 'Postingan Anda Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $tags = Tags::all();
        $post = Post::findorfail($id);
        return view('admin.post.edit', compact('post', 'tags', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required',            
        ]);
        $post = Post::findorfail($id);
        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('public/uploads/posts/', $new_gambar);

            $post_data = [
                'judul' => $request->judul,
                'category_id' => $request->category_id,
                'content' => $request->content,
                'gambar' => 'public/uploads/posts/'.$new_gambar,
                'slug' => Str::slug($request->judul),
                'featured' => $request->featured,
            ];
        }
        else {
           $post_data = [
            'judul' => $request->judul,
            'featured' => $request->featured,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'slug' => Str::slug($request->judul),
            'featured' => $request->featured,
        ];
        }
        $post->tags()->sync($request->tags);
        $post->update($post_data);        
        return redirect()->route('post.index')->with('success', 'Postingan Anda Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorfail($id);
        $post->delete();
        return redirect()->back()->with('success','Data Berhasil Dihapus (Silahkan Check Trash Post) ');
    }
    public function tampil_hapus()
    {
        $post = Post::onlyTrashed()->paginate();
        return view('admin.post.hapus', compact('post'));
    }
    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();
        return redirect()->back()->with('success', 'Postingan Berhasil Di Restore (Silahkan Cek List Post)');
    }
    public function kill($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus Secara Permanen');
    }
}
