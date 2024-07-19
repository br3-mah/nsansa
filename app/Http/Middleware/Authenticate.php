<?php

namespace App\Http\Middleware;

use App\Traits\PaymentTrait;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Str;

class Authenticate extends Middleware
{
    use PaymentTrait;
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $string = $request->getPathInfo();
        $substring = "transaction-summary";
        
        if(Str::contains($string, $substring)){
            $this->recordTransaction($request);
        }
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
