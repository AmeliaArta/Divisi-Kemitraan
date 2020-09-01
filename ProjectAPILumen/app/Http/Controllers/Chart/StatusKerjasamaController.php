<?php

namespace App\Http\Controllers\Chart;

use App\Infokerjasama;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class StatusKerjasamaController extends Controller
{
    /**
     * @return Json
     */
    function index()
    {
        $data = [];
        $data[] = [
            'Tahun',
            'Berjalan',
            'Expired'
        ];

        $infokerjasamas = Infokerjasama::getTahunMulaisDistinctGroupByTahunMulai();

        foreach ($infokerjasamas as $infokerjasama) {
            $tahun = $infokerjasama['tahun_mulai'];
            $berjalan = Infokerjasama::countStatusWhereTahunMulaiAndStatus($tahun, 'masih berjalan');
            $telahBerakhir = Infokerjasama::countStatusWhereTahunMulaiAndStatus($tahun, 'telah berakhir');

            $data[] = [
                (string) $tahun,
                $berjalan,
                $telahBerakhir
            ];
        }

        return response()->json($data);
    }
}
