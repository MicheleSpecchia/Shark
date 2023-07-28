<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                //return redirect(RouteServiceProvider::HOME);
                $user_role = Auth::user()->role;

                switch ($user_role) {
                    case 1:
                        return redirect('/admin');
                        break;
                    case 2:
                        return redirect('/user');
                        break;
                    default:
                        Auth::logout();
                        return redirect('/login')->with('error', 'Oops, qualcosa è andato storto!');
                }
            }
        }

        return $next($request);
    }
}
