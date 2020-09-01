<?php

namespace App\Http\Controllers\Chart;

use App\Unit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UnitController extends Controller
{
    /**
     * @return Json
     */
    function index()
    {
        $data = [];
        $data[] = [
            'Tahun',
            'Prodi',
            'Fakultas',
            'Institusi'
        ];

        $units = Unit::getUnitPengelolasDistinctGroupByTahun();

        foreach ($units as $unit) {
            $tahun = $unit['tahun'];
            $prodi = Unit::countUnitPengelolaGroupByTahun($tahun, 'prodi');
            $fakultas = Unit::countUnitPengelolaGroupByTahun($tahun, 'fakultas');
            $institusi = Unit::countUnitPengelolaGroupByTahun($tahun, 'institusi');

            $data[] = [
                (string) $tahun,
                $prodi,
                $fakultas,
                $institusi
            ];
        }

        return response()->json($data);
    }
}
