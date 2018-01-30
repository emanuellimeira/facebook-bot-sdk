<?php 

namespace CodeBot;

use GuzzleHttp\Client;

class CallSendApi
{
	const URL = 'https://graph.facebook.com/v2.6/me/messages';
	const URL_PROFILE = 'https://graph.facebook.com/v2.6/me/messenger_profile';
	private $pageAccessToken;
	public function __construct($pageAccessToken)
	{
		$this->pageAccessToken = $pageAccessToken;
	}
	public function make($message, $url = null, $method = 'POST') :string
	{
		$cliente = new Client;
		$url = $url ?? CallSendApi::URL;
		$response = $client->request($method, $url, [
				'json' => $message,
				'query' => ['access_token' => $this->pageAccessToken]
			]);
		
		return (string)$response->getBody();
	}
}