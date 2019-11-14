<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MediatedSchemaController extends Controller
{
    public function index()
    {    
        return view('mediated-schema.index');
    }

    public function getData($tokped, $shopee)
    {
        $tpArr = explode(".", $tokped);
        $spArr = explode(".", $shopee);

        $jsonShopee = file_get_contents(public_path() . ('/js/sourceShopee.json'));
        $arrayShopee = json_decode($jsonShopee);
        $data = $arrayShopee->Product;

        $jsonTokped = file_get_contents(public_path() . ('/js/sourceTokped.json'));
        $arrayTokped = json_decode($jsonTokped);
        foreach ($arrayTokped->Product as $key) {
            array_push($data, $key);
        }

        foreach ($data as $key) {
            $key->description = $this->stemming($key->description);
            $key->name = $this->stemming($key->name);
        }

        if ($tokped != "n") {
            foreach ($data as $key) {
                if ($key->source == "tokopedia") {
                    if (in_array("name", $tpArr)) {
                        $key->name = "-";
                    }
                    if (in_array("price", $tpArr)) {
                        $key->price = "-";
                    }
                    if (in_array("description", $tpArr)) {
                        $key->description = "-";
                    }
                    if (in_array("rating", $tpArr)) {
                        $key->rating = "-";
                    }
                }
            }
        }

        if ($shopee != "n") {
            foreach ($data as $key) {
                if ($key->source == "shopee") {
                    if (in_array("name", $tpArr)) {
                        $key->name = "-";
                    }
                    if (in_array("price", $tpArr)) {
                        $key->price = "-";
                    }
                    if (in_array("description", $tpArr)) {
                        $key->description = "-";
                    }
                    if (in_array("rating", $tpArr)) {
                        $key->rating = "-";
                    }
                }
            }
        }

        return DataTables::of($data)
            ->make(true);
    }

    public function stemming($str)
    {
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();
        $output   = $stemmer->stem($str);

        return $output;
    }
}
