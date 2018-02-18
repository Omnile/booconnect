<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'username', 'password', 'phone', 'gender','status','code'
    ];


    public function name()
    {
    	return $this->name;
    }

    public function phone()
    {
    	return $this->phone;
    }
}
