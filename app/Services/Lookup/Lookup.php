<?php

namespace App\Services\Lookup;


class Lookup {

	private  $selectot;
	private  $domen;

    public function __construct(string $selectot,string $domen)
    {
    	$this->selectot = $selectot;
    	$this->domen = $domen;
    }

    public function dmarc() : array
    {
        return dns_get_record('_dmarc.'.$this->domen, DNS_TXT);
    }

    public function dkim() : array
    {
       return dns_get_record($this->selectot.'._domainkey.'.$this->domen, DNS_TXT);
    }

    public function spf() :string
    {
       return $this->getSpf();
    }

    public  function getSpf() :string
    {
        foreach (dns_get_record($this->domen, DNS_TXT) as $key => $value) {
                $str = $value['txt'];
                $search = "v=spf1";
                if (preg_match("/{$search}/i", $str)) {
                    return $str;
                    break;
                }
            }
        return "Empty";
    }

}
