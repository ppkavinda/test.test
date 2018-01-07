<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
// use Auth;

class CommentsController extends Controller
{
    public function store (Post $post) {
    	// dd(Auth::user()->id);
    	Comment::create([
    		'body' => request('body'),
    		'post_id' => $post->id,
    		'user_id' => auth()->id(),
    	]);

    return redirect()->back();
    
    }

}
