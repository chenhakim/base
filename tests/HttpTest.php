<?php
use Module\Base\Http;

if (! function_exists('logger')) {

	function logger($message = null, array $context = [])
	{
//		 print_r($message);
//		 print_r($context);
//		 echo "\n";
	}
}

class HttpSubclass extends Http
{

	protected $base_url = 'http://www.baidu.com';

	public function baidu()
	{
		return $this->httpGet('/');
	}

	protected function analyzeResponse($response, $http_status_code)
	{
		return $response;
	}
}

class HttpTest extends \PHPUnit_Framework_TestCase
{

	public function testGet()
	{
		$http = new HttpSubclass();
		$ret = $http->baidu();
		$this->assertContains('百度一下，你就知道', $ret);
	}
}
