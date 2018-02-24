<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Auth;
use Illuminate\Http\Response;

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
            if ($request->expectsJson()) {
                return response(
                    collect(['message' => $this->message()]),
                    $httpStatusCode = $this->statusCode ?: 402,
                    $headers = []
                );
            }

            return redirect('verify');
        }

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
        if (Auth::check()) {
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
        if (!$request->user()->verified) {
            $this->message = 'Please verify the phone number in your account.';

            return $this->message;
        }

        return false;
    }
}
