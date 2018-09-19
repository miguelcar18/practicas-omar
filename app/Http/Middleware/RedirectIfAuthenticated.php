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
            return redirect('/home');
        }

        //Llamado al helper que verifica el codigo de compra
        /*if($request->is('login') && strtolower($request->method()) == 'post' && getMode()){
            if(is_connected()){
                $data = verifyPurchase();
                if($data['status'] == 'error'){
                    envu(['PURCHASE_CODE' => '']);
                    return redirect('/verify-purchase')->withErrors($data['message']);
                }
            }
        }*/

        return $next($request);
    }
}
