<?php
/**
 * Created by PhpStorm.
 * User: MarijaAngeli
 * Date: 4/25/18
 * Time: 10:04 AM
 */

namespace Maria\Nova;


use Illuminate\Support\Facades\Facade;

class NovaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'nova';
    }
}