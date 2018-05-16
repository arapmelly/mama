<?php

class Lipisha extends \Eloquent {

	// api credentials

	

	/*$api_key = "0115020f49038db6fcd5e9bf467a6862";

	$api_signature = "x5Ri4QVS7LqsdYt4PuUNo6gbtelvmsVQWxZi+V+csRt581ySQr0QRtuQfvPsK9I9pD98A2uiVpQ7ceoEBQDPB/S38A64cxZUF9isPymPaoi2+lzFIZ006CQYWr17YmqTCpGIUnv/XmaoK4qfMnCXSQrbrJ49ijM4nJMeZJphoLg=";
*/

	public static function getBalance(){

		$api =  array(
		'api_key' => '0115020f49038db6fcd5e9bf467a6862',
		'api_signature' => 'x5Ri4QVS7LqsdYt4PuUNo6gbtelvmsVQWxZi+V+csRt581ySQr0QRtuQfvPsK9I9pD98A2uiVpQ7ceoEBQDPB/S38A64cxZUF9isPymPaoi2+lzFIZ006CQYWr17YmqTCpGIUnv/XmaoK4qfMnCXSQrbrJ49ijM4nJMeZJphoLg='
		);

		$response = Curl::to('https://api.lipisha.com/v2/get_balance')
        ->withData($api)
        ->post();
		
		$res = json_decode($response);

		return $res;

	}




	public static function confirmTransaction($transaction){

		$api =  array(
		'transaction' => $transaction,
		'api_key' => '0115020f49038db6fcd5e9bf467a6862',
		'api_signature' => 'x5Ri4QVS7LqsdYt4PuUNo6gbtelvmsVQWxZi+V+csRt581ySQr0QRtuQfvPsK9I9pD98A2uiVpQ7ceoEBQDPB/S38A64cxZUF9isPymPaoi2+lzFIZ006CQYWr17YmqTCpGIUnv/XmaoK4qfMnCXSQrbrJ49ijM4nJMeZJphoLg='
		);

		$response = Curl::to('https://api.lipisha.com/v2/acknowledge_transaction')
        ->withData($api)
        ->post();
		
		$res = json_decode($response);

		return $res;

	}
	

}