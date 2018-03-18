<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Business extends UserVerified
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
        if ($this->notSignedIn($request) ?: $this->isBusiness($request)) {
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
            return redirect('/logout');
        }
        /**
         * Continue to the requested route if the user passes
         * the verification status test
         */
        return $next($request);
    }

    /**
     * Checks that the account type is a business account
     * @param  Request $request
     * @return boolean|string
     */
    public function isBusiness(Request $request)
    {
        if ($request->user() && $request->user->has('restaurant')) {
            return false;
        }

        $this->message = 'Your account is not associated with any business.';

        return $this->message;
    }
}
