<?php

namespace Surpaimb\PhpSms\Facades;

use Illuminate\Support\Facades\Facade;

class Sms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Surpaimb\\PhpSms\\Sms';
    }
}
