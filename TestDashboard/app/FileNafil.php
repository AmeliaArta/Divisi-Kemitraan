<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileNafil extends Model
{
    protected $table = 'filenafil';
    protected $fillable = ['nafil_id','file','keterangan'];

    public function naskahfinal()
	{
    	return $this->belongsTo(NaskahFinal::class);
	}
	public function naskah()
	{
    	return $this->belongsTo(Naskah::class);
	}
}
