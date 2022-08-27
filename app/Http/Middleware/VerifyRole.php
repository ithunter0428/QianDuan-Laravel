<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;
use Redirect;

class VerifyRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, String $roles)
    {
        $roles = explode('|', $roles);

        if (Auth::check())
        {
            $user_role = 'user';
            if (Auth::user()->is_admin)
                $user_role = 'admin';

            if (in_array($user_role, $roles))
                return $next($request);
        }

        return Redirect::route('view_signin');
    }
}
