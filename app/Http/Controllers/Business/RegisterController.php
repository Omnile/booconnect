<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Auth\RegisterController as Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('business.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'registration_number' => 'required|numeric|unique:registration_number',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'username' => 'required|string|unique:users|min:4',
            'gender' => 'required|string|min:4',
            'phone' => 'required|string|min:4',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'registration_number' => $data['registrationNumber'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
