<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = Post::all();

        return response()->json([
            'status' => true,
            'post' => $post
        ]);
    }

    public function create(){

    }

    public function store(StorePostRequest $request){
        $post = Post::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Post Was Created Successfully!',
            'post' => $post
        ], 200);
    }

    public function update(StorePostRequest $request, Post $post){
        $post->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Post Was Updated Successfully!',
            'post' => $post
        ], 200);
    }

    public function destroy(Post $post){
        $post->delete();
        return response()->json([
            'status'=> true,
            'message' => 'Post was Deleted Successfully!',
    
        ], 200);
    }
}
