<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     * 不应加密的Cookie的名称。
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
