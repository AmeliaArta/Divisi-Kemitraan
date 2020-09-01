<?php

namespace App\Http\Controllers;

use App\ChartStatusKerjasama;
use Illuminate\Http\Request;
use DB;

class ChartStatusKerjasamaController extends Controller
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

    function status()
    {
        $data = DB::table('mitra_kerjasama')
            ->SELECT(
                DB::raw('count(*) as Jumlah, tahun'))
            ->groupBy('tahun')
            ->get();
        $array[] = ['Jumlah', 'Kerjasama'];
        foreach ($data as $key => $value) {
            $tahun = (string) $value->tahun;
            $array[++$key] = [$tahun, $value->Jumlah];
        }
        // return view('columnstatuschart')->with('tahun', json_encode($array));
        // return json_encode($array);
        // echo '<pre>' , var_dump($array) , '</pre>';
        return response()->json($array);
    }
}
