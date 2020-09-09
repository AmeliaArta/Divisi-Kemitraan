<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'hrdx_dosen';
    // protected $fillable = ['id','nama'];
}
