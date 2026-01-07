<?php

namespace App\Http\Controllers;
use App\Models\Post;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function create()
    {
        Post::create([
        'title' => 'Post Pertama',
        'author' => 'Asad',
        'content' => 'Belajar Laravel itu menyenangkan'
        ]);

        return 'Data berhasil disimpan';
    } 

    public function show(){
       $posts = Post::all(); 
       return view('show', compact('posts'));
    }   
}


?>