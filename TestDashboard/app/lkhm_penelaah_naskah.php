<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lkhm_penelaah_naskah extends Model
{
     protected $table = 'lkhm_penelaah_naskah';
    protected $fillable = ['dosen_id','id'];

   
	public function naskah()
	{
    	return $this->belongsTo(Naskah::class);
	}
}
