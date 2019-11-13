<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokopediaSourceController extends Controller
{
    public function index()
    {
        return view('tokopedia.index');
    }
}
