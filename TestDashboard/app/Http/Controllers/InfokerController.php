<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfokerController extends Controller
{
    public function infoker()
    {
    	return view('infokers.info');
    }

}
