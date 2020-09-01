<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class DashboardController extends Controller
{


   public function index()
    {

        $unitPengelola = http::get('http://localhost:8000/api/chart/unit-pengelola');
        $dataNaskah = http::get('http://localhost:8000/api/naskah_chart');
        $statusKerjasama = http::get('http://localhost:8000/api/chart/status-kerjasama');
        $dataUnit = http::get('http://localhost:8000/api/unit_chart');

        return view('dashboards.index')->with([
            'unitPengelola' => $unitPengelola,
            'tahun3' => $dataNaskah,
            'statusKerjasama' => $statusKerjasama,
            'nama_unit' => $dataUnit,

          ]);
      
        // return json_encode($dataInfoker);  
     // return view('dashboards.index');
   }    

    	
}
