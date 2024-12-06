<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AllowNonLoggedInUsersOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            flash()->warning('You cannot access the page when you are logged-in.'); // TODO: Remove this line

            return redirect(route('homepage')); // TODO: Check to dashboard
        }

        return $next($request);
    }
}
