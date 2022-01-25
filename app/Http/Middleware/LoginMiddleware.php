<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
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


        /*  session_start();
        if (isset($_SESSION['nome']) && $_SESSION['nome'] != "") {
            return $next($request);
        } else {

            return redirect()->route('box-login');
        }
 */
        if ($request->session()->has('nome') && $request->session()->has('email')) {

            return $next($request);
        } else {
            return redirect()->route('box-login');
        }
        // $this->login = new LoginPFM_Controller;

        /*if (($this->login->login($request) == "sucess")) {

            return $next($request);
        } else {
            return Response(" invalido Login ");
        }*/

        // dd($request);

        //return Response(" test de Middleware ");
    }
}
