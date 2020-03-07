<?php

namespace App\Services\Lookup;

use App\Services\Lookup\Lookup;

class LookupFactory {

    public  function dns(string $selectot,string $domen) : Lookup
    {	
        return new Lookup($selectot, $domen);
    } 
}
