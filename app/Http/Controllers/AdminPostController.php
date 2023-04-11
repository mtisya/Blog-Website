<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
    	return view('admin.posts.index', [

    		'posts' => Post::paginate(20)

    	]);
    }
     public function create()

		{
			return view('admin.posts.create');
	    }

	    public function store(Request $request)

		{
		
			$attributes = request()->validate([
				'title' => 'required',
				'slug' => ['required', Rule::unique('posts', 'slug')],
				'thumbnail' => 'required|image',
				'excerpt' => 'required',
				'body' => 'required',
				'category_id' => ['required', Rule::exists('categories', 'id')]
			]);

			$attributes['user_id'] = auth()->id();
			$attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

			Post::create($attributes);

			return redirect('/');

	    }

	    public function edit(Post $post)
	    {
	    	return view('admin.posts.edit', [ 'post' => $post]);
	    }
}
