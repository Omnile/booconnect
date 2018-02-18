<?php

namespace App\BooConnect\Notifcation\Sms;

use App\BooConnect\Notifcation\Contracts\SmsNotifierInterface;

//Dummy sms client class
class SmsClientNotifier implements SmsNotifierInterface {


	public function send($number, $message)
	{
		//sms client logic
		var_dump($message);
	}
}