<?php

namespace App\Http\Controllers\Lookup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LookupService;

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
        $dns = LookupService::dns($request->selectot,$request->domen);

        return response()->json([
            "dmarc"  =>  $dns->dmarc(),
            "dkim"   =>  $dns->dkim(),
            "spf"    =>  $dns->spf(),
        ]);
    }
}