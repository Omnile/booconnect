<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Auth\RegisterController as Controller;
use App\Restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    protected $additional_validation = [
        'registration_no' => 'required|numeric|unique:restaurants',
        'restaurant_name' => 'required|string',
    ];

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
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = parent::create($data);

        DB::transaction(function () use ($data, $user) {

            $restaurant = new Restaurant($data + ['name' => $data['restaurant_name']]);
            $restaurant->owner()->associate($user);
            $restaurant->save();

            $user->restaurant()->associate($restaurant);
            $user->save();

        });

        return $user;
    }

    protected function registered(Request $request, $user)
    {
        if ($request->wantsJson()) {
            return $user->load('restaurant');
        }
    }
}
