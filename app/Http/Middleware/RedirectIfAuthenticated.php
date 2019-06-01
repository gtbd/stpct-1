<?php

namespace App\Http\Middleware;

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
        if (Auth::guard($guard)->check()) {
            /*switch (Auth::user()->account_type) {
                case 'Admin':
                    return redirect('/admin');
                    break;
                case 'Head Teacher':
                    return redirect('/head');
                    break;
                case 'Faculty':
                    return redirect('/faculty');
                    break;
                case 'Registrar':
                    return redirect('/registrar');
                    break;
                case 'Cashier':
                    return redirect('/cashier');
                    break;
                case 'Student':
                    return redirect('/student');
                    break;
            }*/
            //return redirect('/dashboard');
            return redirect('/dashboard');
        }

        return $next($request);
    }
}
