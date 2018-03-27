<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

/**
 * This middleware should determine if a route can be accessed
 * based on the phone number verification status of the
 * authenticated User
 */
class UserVerified
{
    /**
     * The derived response after check
     * @var \Illuminate\Http\Response
     */
    protected $response;

    /**
     * This is the derived response status
     * code
     *
     * @var integer
     */
    protected $statusCode;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, Closure $next)
    {
        if ($this->notSignedIn($request) ?: $this->verificationStatus($request)) {
            /**
             * This should be self eplanatory.
             * It checks if the user is requesting
             * a json response or has Application/Json
             * and gives a json response
             */
            if ($request->expectsJson()) {
                return response(
                    collect(['message' => $this->message()]),
                    $httpStatusCode = $this->statusCode ?: 402,
                    $headers = []
                );
            }
            /**
             * Redirect the user to the verification
             * page if the user is not verified
             */
            return redirect('verify');
        }
        /**
         * Continue to the requested route if the user passes
         * the verification status test
         */
        return $next($request);
    }

    /**
     * Check that the request is authenticated
     * and signed correctly
     *
     * @param  Request $request The server request instance
     * @return bool|string      This is either an error message or a false boolean.
     */
    public function notSignedIn()
    {
        if (anyAuth()->check()) {
            $this->message = 'Unauthenticated Request.';
            $this->statusCode = 401;

            return $this->message;
        }

        return false;
    }

    /**
     * Check the Verified attribute of the requesting user.
     *
     * All users on the BooConnect Network should
     * have their phone verified. Unverified
     * accounts cannot use BooConnect
     *
     * @param  Request $request The server request instance
     * @return bool|string      This is either an error message or a false boolean.
     */
    public function verificationStatus(Request $request)
    {
        if (anyAuth()->user() && anyAuth()->user()->verified) {
            $this->message = 'Please verify the phone number in your account.';

            return $this->message;
        }

        return false;
    }
}
