<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       $authToken = $request->get('auth_token');

        if( empty( $authToken ) ) {
            return response(['message' => 'You need an auth token to access this'], 403);
        }

        $user = User::withToken( $authToken )->first();
        if( empty( $user ) ) {
            return response(['message' => 'Unauthorized, Your credential does not work'], 401);
        }
        Auth::login( $user );
        return $next($request);
    }
}
