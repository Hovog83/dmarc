<?php

namespace App\Http\Controllers\Xml;

use App\Http\Controllers\Controller;
use App\Helper\Dns as Dns;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;


class IndexController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return View
     */
    public function index()
    {
        return view('xml.index');
    }

    public function fileUpload(Request $request)
    {
        $contents  = file_get_contents($request->file("file")->getRealPath());
        $xmlString = str_replace('<?xml version=\"1.0\" encoding=\"UTF-8\" ?>', '',$contents );


        $xml = new \SimpleXMLElement($xmlString);
        return view('xml.view',["xml"=>$xml->record]);

    }

}