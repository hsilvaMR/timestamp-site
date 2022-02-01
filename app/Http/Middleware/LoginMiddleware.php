<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
// use App\Http\Controllers\plataforma\LoginPFM_Controller;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    // private $login;
    public function handle(Request $request, Closure $next)
    {

        //if ($request->session()->has('nome') && $request->session()->has('email')) {
        if (Session::get("email") != null  && Session::get("nome") != null) {

            return $next($request);

        } else {

            //return redirect()->route('box-login');

            return Redirect::route("box-login");
        }
    }
}
