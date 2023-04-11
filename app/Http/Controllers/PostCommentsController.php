<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class PostCommentsController extends Controller
{
	public function store(Post $post, Request $request)
	{
		$request->validate([
			
			
			'body' => "required"
		]);

		$post->comments()->create([

			'user_id' => $request->user()->id,
			'body' => $request->input('body')

		]);

		return back();
	}
}
