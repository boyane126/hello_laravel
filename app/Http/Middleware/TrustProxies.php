<?php

namespace App\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     * 此应用程序的受信任代理。
     *
     * @var array|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     * 应用于检测代理的标头。
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
