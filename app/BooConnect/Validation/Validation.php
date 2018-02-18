<?php

namespace App\BooConnect\Validation;

use Illuminate\Support\Facades\Validator;


class Validation {


	public static function customerValidator($data)
	{
			return Validator::make($data,[
		            'name'=>'required',
		            'username'=>'required|unique:customers',
		            'phone'=>array('required','regex:/^(\+233|0)\d{9}$/','unique:customers'),
		            'password'=>'required'
		        ]);
	

	}

	public static function businessValidator($data)
	{
		# code...
	}



}