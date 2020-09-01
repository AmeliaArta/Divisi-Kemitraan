<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChartController extends Controller
{
  	public function index()
    {
      	//return view('chart.index');
      	//return view('chart.index')->with('thn_masuk', $data);
        //$client = new \GuzzleHttp\Client(); 
        $dataInfoker = http::get('http://localhost:8000/api/infoker_chart');
        $dataNaskah = http::get('http://localhost:8000/api/naskah_chart');
        $dataStatus = http::get('http://localhost:8000/api/status_chart');
        $dataUnit = http::get('http://localhost:8000/api/unit_chart');
        // $dataDropOut = http::get('http://localhost:8000/api/dropout_chart');
        // $dataDosen = http::get('http://localhost:8000/api/dosen_chart');
        // $dataMengundurkanDiri = http::get('http://localhost:8000/api/highchart');
        // $dataPegawai = http::get('http://localhost:8000/api/pegawai_chart');
        // $listdosen = $client->get('http://localhost:8000/api/list_dosen');


        return view('chart.index')->with([
        	'tahun' => $dataInfoker,
        	'tahun3' => $dataNaskah,
        	'tahun2' => $dataStatus,
          'nama_unit' => $dataUnit,
        	// 'status_akhir2' => $dataDosen,
         //  'Resigns' => $dataMengundurkanDiri,
          // 'Aktifs' => $dataAktif,
         //  'posisi' => $dataPegawai,
          ]);
          //'datadosen' => json_decode($listdosen->getBody()),]);

 	}	
}
