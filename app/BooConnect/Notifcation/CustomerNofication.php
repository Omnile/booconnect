<?php

namespace App\BooConnect\Notifcation;

use App\BooConnect\Notifcation\Contracts\NotificationInterface;
use App\BooConnect\Notifcation\Contracts\SmsNotifierInterface;


class CustomerNotification implements NotificationInterface{
	private $smsNotifier;

	public function __construct(SmsNotifierInterface $smsNotifier)
	{
		$this->smsNotifier = $smsNotifier;
	}




	public function notify($customer, $command){
		//Notify customer 

		switch($command){
			case 'activation code':
				$this->sendActivationCode($customer);
				break;

				//we can attach other notification cases
		}
	}


	public function sms($number, $message){
		// send sms to customer
		$this->smsNotifier->send($number, $message);

	}


	public function email($email, $message){
		//send mail to customer
	}


	private function sendActivationCode($customer){
			// send Activation code sms
			$smsMessage = 'Dear '. $customer['name']. ', Activate your account at '.
			config('app.name').' with Activation Code ... . Thank you.';
			$this->sms($customer['phone'], $smsMessage);
		}


	

}