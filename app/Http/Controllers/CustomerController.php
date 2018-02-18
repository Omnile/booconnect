<?php

namespace App\Http\Controllers;

use App\BooConnect\Repository\CustomerRepository;
use App\BooConnect\Validation\Validation;
use App\Http\Requests\Customers\CreateCustomerRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
	private $customers;

	public function __construct(CustomerRepository $customers)
	{
		$this->customers = $customers;
	}

	public function create(Request $request)
	{
		$validator = Validation::customerValidator($request->all());

		if ($validator->fails()) {
			$response = array('response' => $validator->messages() , 'success' => false);
			return $response;
		} else{
		
		$customer = $this->customers->create($request->all());

		return response()->json($customer);	
		}
	}

	public function show($id)
	{
		$customer = $this->customers->show($id);

		return response()->json($customer);	
	}

	public function activate($id, Request $request)
	{
		$customer = $this->customers->activate($id, $request->code);

		return response()->json($customer);	
	}

    
}
