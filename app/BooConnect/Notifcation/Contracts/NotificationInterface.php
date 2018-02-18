<?php

namespace App\BooConnect\Notifcation\Contracts;


interface NotificationInterface{

	public function notify($customer, $command);

}