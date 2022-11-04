<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function blog() {
        $posts = [
            ['id' => 1, 'title' => 'php',  'slug' => 'php'],
            ['id' => 2, 'title' => 'lavarel', 'slug' => 'laravel']
        ];
        return view('blog', ['posts' => $posts]);
    }

    public function post($slug) {
        // Consulta a base de datos
        $post = $slug;
        return view('post', ['post' => $post]);
    }
    
}
