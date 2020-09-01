<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infokerjasama extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'infokerjasama';

    /**
     * @return array [
     *		'tahun' => '2020',
     *		... 	
     * ]
     */
    public static function getTahunMulaisDistinctGroupByTahunMulai()
    {
    	return self::selectRaw('YEAR(tanggal_mulai) AS tahun_mulai')->distinct()->orderBy('tahun_mulai')->get();
    }

    /**
     * @param int $tahun
     * @param string $status ie. 'masih berjalan', 'telah berakhir'
     */
	public static function countStatusWhereTahunMulaiAndStatus($tahun, $status)
	{
		return self::whereYear('tanggal_mulai', $tahun)->where('status', $status)->count('status');
	}
}
