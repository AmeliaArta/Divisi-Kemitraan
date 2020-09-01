<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'file';
    protected $fillable = ['naskah_id','user_id','penelaah','file','komentar'];

   
	public function naskah()
	{
    	return $this->belongsTo(Naskah::class);
	}
       public function naskahfinal()
    {
        return $this->belongsTo(NaskahFinal::class);
    }

	public function alreadyRead()
    {
    	 $this->read=1;
    	 $this->save();
    }

}
