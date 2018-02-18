<?php

namespace App\Http\Middleware;

/**
 * This middleware should determine if a route can be accessed
 * based on the phone number verification status of a
 * requesting Resturant
 */
class ResturantVerified extends UserVerified
{
    /**
     * Check the Verified attribute of the requesting resturant.
     *
     * All resturants on the BooConnect Network should
     * have their phone verified. Unverified
     * accounts cannot use BooConnect
     *
     * @param  Request $request The server request instance
     * @return bool|string      This is either an error message or a false boolean.
     */
    public function verificationStatus(Request $request)
    {
        if ($request->user->has('resturant') && !$request->user()->resturant->verified) {
            $this->message = 'Please verify your resturant\'s phone number.';

            return $this->message;
        }

        return false;
    }
}
