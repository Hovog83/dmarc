<?php

namespace App\Http\Controllers\Lookup;

use App\Http\Controllers\Controller;
use App\Helper\Dns as Dns;
use Illuminate\Http\Request;

class LookupController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return View
     */
    public function index()
    {
        return view('lookup.index');
    }

    public function getDns(Request $request)
    {
        $dns    = dns_get_record($request->domen, DNS_TXT);
        $dmarc  = dns_get_record('_dmarc.'.$request->domen, DNS_TXT);
        $dkim   = dns_get_record($request->selectot.'._domainkey.'.$request->domen, DNS_TXT);
        $spf    = Dns::getSpf($dns);
        
        return response()->json([
            "allDns" =>  $dns,
            "dmarc"  =>  $dmarc,
            "dkim"   =>  $dkim,
            "spf"    =>  $spf
        ]);
    }
}