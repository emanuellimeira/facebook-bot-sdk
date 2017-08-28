<?php 
namespace CodeBot;

use CodeBot\Message\Text;
use PHPUnit\Framework\TestCase;

class CallSendApiTest extends TestCase
{
	/**
	 * @expectedException \GuzzleHttp\Exception\ClientException
	 */
	public function testMakeRequest()
	{
		$message = (new Text(1))->message('Oiii');
		(new CallSendApi( pageAccessToken '25fd29hg2f8 '))->make();
	}
}