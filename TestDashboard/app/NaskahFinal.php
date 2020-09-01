<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NaskahFinal extends Model
{
    protected $table = 'naskahfinal';
    protected $fillable = ['naskah_id','file','bahasa'];


    public function naskah()
	{
    	return $this->belongsTo(Naskah::class);
	}

       public function filenafil()
	{
    	return $this->hasMany(FileNafil::class);
	}
}
