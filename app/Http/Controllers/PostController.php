<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use  Illuminate\Database\Eloquent\Builder;

class PostController extends Controller
{
    public function show($id) {

        // query-builder
        #$post = DB::table('posts')->where('slug', $slug)->first();
        #$post = Post::where('slug', $slug)->firstOrFail();

        $post = Post::find($id);

        /*if(! $post) {
            abort(404);
        }*/

        return view('pages.post', [ 'post' => $post ]);


    }


}
