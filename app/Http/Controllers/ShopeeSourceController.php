<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopeeSourceController extends Controller
{
    
    public function index()
    {
        return view('shopee.index');
    }
}
