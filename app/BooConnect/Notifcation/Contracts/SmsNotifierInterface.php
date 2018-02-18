<?php

namespace App\BooConnect\Notifcation\Contracts;


interface SmsNotifierInterface{

	public function send($number, $message);

}