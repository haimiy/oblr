<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'web_admin':
                if (Auth::guard($guard)->check()) {
                    return redirect(RouteServiceProvider::ADMIN_HOME);
                }
            break;

            case 'web_government_official':
                if (Auth::guard($guard)->check()) {
                    return redirect(RouteServiceProvider::GOVERNMENT_OFFICIAL);
                }
            break;

            default:
                if (Auth::guard($guard)->check()) {
                    return redirect(RouteServiceProvider::APPLICANTS_HOME);
                }
                break;
        }

        return $next($request);
    }
}
