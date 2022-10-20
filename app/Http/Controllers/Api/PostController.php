<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $posts = Post::all(); per prenderli tutti
       $posts = Post::with(['category','tags'])->paginate(2);


       
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }

    public function show($slug)
    {
       // $posts = Post::all(); per prenderli tutti
       $posts = Post::where('slug', $slug)->with(['category','tags'])->first();

       return response()->json([

        'success' => true,
        'results' => $posts
       ]);
    }

}
