<?php

namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
	public function create()
	{

    return view('register.create');

    }

    public function store(Request $request)
	{
		//validate user input

		$request->validate([

	    	'name' => 'required|max:255',
	    	'username' => 'required|min:3|max:255|unique:users,username',
	    	'email' => 'required|email|max:255|unique:users,email', 
			'password' => 'required|min:7|max:255',
	    	
    	]);

		//insert into database

		$user = User::create([

			'name' => $request->name,
			'username' => $request->username,
			'email' => $request->email,
			'password' => Hash::make($request->password),

		]);
		
		//log in registered user

		auth()->login($user);

		return Redirect('/')->with('success', 'Your account has been created.');


    }
}
