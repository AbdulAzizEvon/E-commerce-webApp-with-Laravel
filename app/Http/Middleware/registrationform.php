<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
// use Auth;
use Session;
class registrationform
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
    //    dd(\Auth::guard('Registrationform')->check());
        // dd($this->guard()->check());
        // $path=$request->path();
        // // // dd( Session::get('user'));
        if($request->session()->has('user'))
        {

            return $next($request);
        }
        // abort(403);
        else
            return redirect()->route('login');

    }
}
