<?php
namespace domain\facades;

use domain\services\TodoServices;
use Illuminate\Support\Facades\Facade;


class Todofacades extends Facade{

    protected static function getFacadeAccessor()
    {
        return TodoServices::class;
    }
}