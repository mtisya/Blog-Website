<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter

{
	protected $client;

	public function __construct(ApiClient $client)
	{
		$this->client = $client;
	}

	public function subscribe(string $email, string $list = null)

	{
		$list = $list ?? config('services.mailchimp.lists.subscribers'); 

		return $this->client->lists->addListMember($list, [

			'email_address' => $email,
			'status' => 'subscribed'

		]);
	}

	// protected function client() 
	// {
	// 	//$mailchimp = new ApiClient();

	// 	return $this->client()->setConfig([

	// 	'apiKey' => config('services.mailchimp.key'),
	// 	'server' => 'us20'

	// 	]);
	// }
}
