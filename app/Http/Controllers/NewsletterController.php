<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Newsletter;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{


	public function __invoke(Newsletter $newsletter, Request $request)
    {

		$request->validate([

		'email' => 'required|email'
	]);

	// calling mailchimp api and function 

	try {


		$newsletter->subscribe(request('email'));
	

	}catch (Exception $e){

		throw ValidationException::withMessages([

			'email' => 'Your email could not be added to our newsletter list!.'
		]);
	}
	return redirect('/')

		->with('success', 'Your now signed up for our newsletter!');
	}
}
