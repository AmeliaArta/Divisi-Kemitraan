<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartNaskah extends Model
{
    protected $table = 'infokerjasama';
    protected $primaryKey = 'id';

    protected $fillable = [
        'jenis_kerjasama', 'tahun'
    ];

}
