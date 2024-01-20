<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function show($id) {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message'=>'Data not found']);
        }
        return response()->json($post);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'status_id' => 'required|exists:statuses,id',
        ]);

        $post = Post::create($request->all());
        return response()->json($post, 201);
    }
    
    public function update(Request $request, $id) {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Data not found']);
        }
        $request->validate([
            'name'=> 'required',
            'content'=> 'required',
            'status_id'=>'required|exists:statuses,id',
        ]);

        $post->update($request->all());
        return response()->json($post);
    }

    public function destroy($id){
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Data not found']);
        }

        $post->delete();
        return response()->json(['message' => 'Delete successfully']);
    }
}
