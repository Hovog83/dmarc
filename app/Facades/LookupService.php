<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;


class LookupService extends Facade {
   
   protected static function getFacadeAccessor(){
    return "Lookup";
   }
}
