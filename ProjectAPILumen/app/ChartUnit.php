<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartUnit extends Model
{
    protected $table = 'infokerjasama';
    protected $primaryKey = 'id';

    protected $fillable = [
        'tahun', 'unit_pengelola', 'mitra'
    ];

}
