<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

/**
 * This middleware should determine if a route can be accessed
 * based on the phone number verification status of a
 * requesting Restaurant
 */
class RestaurantVerified extends UserVerified
{
    /**
     * Check the Verified attribute of the requesting restaurant.
     *
     * All restaurants on the BooConnect Network should
     * have their phone verified. Unverified
     * accounts cannot use BooConnect
     *
     * @param  Request $request The server request instance
     * @return bool|string      This is either an error message or a false boolean.
     */
    public function verificationStatus(Request $request)
    {
        if (anyAuth()->user()->has('restaurant') && !anyAuth()->user()->restaurant->verified) {
            $this->message = 'Please verify your restaurant\'s phone number.';

            return $this->message;
        }

        return false;
    }
}
