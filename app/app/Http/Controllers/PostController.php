<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostIndexResourceCollection;
use App\Http\Resources\TreeResourceShow;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller {

    public function delete(Post $post)
    {
       $delete = DB::table('posts')->where('id', $post->id)->delete();
    }

    public function show()
    {
       return DB::table('posts')->get();
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $input = $request->validated();
         DB::table('posts')
        ->where('id',$post->id)
        ->update($input);
    }

    public function index(Post $post)
    {
       return DB::table('posts')->where('id','=',$post->id)->first();
    }
}
