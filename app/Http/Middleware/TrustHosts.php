<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     *//**
    * The trusted proxies for this application.
    *
    * @var string|array
    */
    protected $proxies = '*';

    public function hosts()
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
            '*'
        ];
    }
}
