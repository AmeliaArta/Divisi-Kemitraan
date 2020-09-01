<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grafik extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'id';

    protected $fillable = [
        'tahun', 'nama_mitra'
    ];
}
