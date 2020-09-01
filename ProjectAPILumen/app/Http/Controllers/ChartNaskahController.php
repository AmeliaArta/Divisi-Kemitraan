<?php

namespace App\Http\Controllers;

use App\ChartNaskah;
use Illuminate\Http\Request;
use DB; 

class ChartNaskahController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    function naskah()
    {
        $data = DB::table('infokerjasama')
            ->SELECT(
            DB::raw('count(*) as Jumlah, tahun'))
            ->where('jenis_kerjasama', '=', 'PkS')
            ->groupBy('tahun')
            ->get();
        $array[] = ['tahun', 'jumlah naskah'];
        foreach ($data as $key => $value) {
            $tahun = (string) $value->tahun;
            $array[++$key] = [$tahun, $value->Jumlah];
        }
        // intval($array);
     // return view('columnchartnaskah')->with('tahun', json_encode($array));
    return json_encode($array);
        // echo '<pre>' , var_dump($array) , '</pre>';
    }
}
