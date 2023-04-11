<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{


	public function __invoke(Newsletter $newsletter, Request $request)
    {
		$request->validate([

		'email' => 'required|email'
	]);

	// calling mailchimp api and function 

	try {


		$newsletter->subscribe($request->email);
	

	}catch (Exception $e){

		throw ValidationException::withMessages([

			'email' => 'Your email could not be added to our newsletter list!.'
		]);
	}
	return redirect('/')

		->with('success', 'Your now signed up for our newsletter!');
	}
}
