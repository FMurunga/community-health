<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfCommunityhealthworker
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'communityhealthworker')
	{
	    if (Auth::guard($guard)->check()) {
	        return redirect('communityhealthworker/home');
	    }

	    return $next($request);
	}
}