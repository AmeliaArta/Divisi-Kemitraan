<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'unit';

    /**
     * @return array [
     *		'tahun' => '2020',
     *		... 	
     * ]
     */
    public static function getUnitPengelolasDistinctGroupByTahun()
    {
        return self::selectRaw('YEAR(tahun) AS tahun')->distinct()->orderBy('tahun')->get();
    }

    /**
     * @param int $tahun
     * @param string $nama_unit ie. 'prodi', 'fakultas', 'institusi'
     */
	public static function countUnitPengelolaGroupByTahun($tahun, $nama_unit)
	{
		return self::whereYear('tahun', $tahun)->where('nama_unit', $nama_unit)->count('nama_unit');
	}
}
