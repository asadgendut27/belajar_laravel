<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       //$posts = Post::latest()->get();
       $posts = Post::orderBy('created_at', 'desc')->paginate(10);
       $i = ($request->input('page', 1) - 1) * 10;
       return view('show', compact('posts','i'));
    }

    public function create()
    {
       return view('create');
    } 

    public function store(Request $request)
    {
         $validated = $request->validate([
        'title'   => 'required|min:3',
        'author'   => 'required|min:5',
        'content' => 'required|min:10'
        ]);

        Post::create($validated);

        return redirect('/posts/show')->with('success', 'Post berhasil disimpan');
    }

    public function edit(Post $post)
    {
        return view('edit', compact('post'));
    }
  
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title'   => 'required|min:3',
            'content' => 'required|min:10',
            'author'  => 'required'
        ]);

        $post->update($validated);

        return redirect('/posts')->with('success', 'Post diupdate');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
       $posts = Post::orderBy('created_at', 'desc')->paginate(10);
       $i = ($request->input('page', 1) - 1) * 10;
       return view('show', compact('posts','i'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post){
        $post->delete();
        return redirect('/posts')->with('success', 'Berhasil dihapus');
    }
}
