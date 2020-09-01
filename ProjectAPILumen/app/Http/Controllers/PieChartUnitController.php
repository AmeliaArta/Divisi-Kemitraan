<?php

namespace App\Http\Controllers;

use App\ChartUnit;
use Illuminate\Http\Request;
use DB; 

class PieChartUnitController extends Controller
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

    function index()
    {
        $data = DB::table('infokerjasama')
            ->SELECT(
            DB::raw('count(*) as Jumlah, unit_pengelola'))
            ->groupBy('unit_pengelola')
            ->get();
        $array[] = ['unit', 'mitra'];
        foreach ($data as $key => $value) {
            $array[++$key] = [$value->unit_pengelola, $value->Jumlah];
        }
        return json_encode($array);
    }
}
