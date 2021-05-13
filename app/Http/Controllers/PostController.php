<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts');
        return view('posts.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts', [
            'id' => $id,
        ]);
        return view('posts.show', ['post' => $post]);
    }

}
