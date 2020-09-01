<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartStatusKerjasama extends Model
{
    protected $table = 'mitra_kerjasama';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_mitra', 'tahun'
    ];
}
