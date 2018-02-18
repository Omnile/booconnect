<?php

namespace App\BooConnect\Repository;

use App\BooConnect\Notifcation\CustomerNotification;
use App\Customer;

class  CustomerRepository
{
	private $notifier;

	public function __construct(CustomerNotification $notifier)
	{
		$this->notifier = $notifier;
	}


	
	public function create($data)
	{
		//TO DO: Activation code generation and storing
		//
		$data['status'] = 'INACTIVE';
		$customer = Customer::create($data);

		if($customer) {
			$this->notifier->notify($customer, 'activation code');
			return $customer->code;
		}	
	}

	public function show($id)
	{
		return Customer::find($id);
	}

	public function activate($id, $activationCode)
	{
		$customer = Customer::find($id);
		if ($customer->code === $activationCode) {
			$customer->status = 'ACTIVE';
			$customer->save();

			return $customer;
		}

		return 'Invalid Activation Code';
	}



}

