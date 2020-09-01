<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartInfoker extends Model
{
    protected $table = 'mitra_kerjasama';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_mitra', 'tahun'
    ];

}
