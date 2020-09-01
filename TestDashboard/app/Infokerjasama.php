<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infokerjasama extends Model
{
    protected $table = 'infokerjasama';
    protected $fillable = ['tahun', 'tanggal_mulai','tanggal_selesai','mitra','deskripsi','jenis_kerjasama','unit_pengelola','status','files'];
}
