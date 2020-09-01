<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Naskah extends Model
{
	protected $casts = ['read' => 'boolean'];
	protected $dates = ['masa_waktu_telaah'];
	protected $table = 'naskah';
    protected $fillable = ['nomor_naskah','nama_partner','negara','status','jenis_lembaga','jenis_dokumen','sumber_naskah','unggah_naskah','masa_waktu_telaah','komentar','nama_I','alamat_I','website','email_I','telp','fax','nama_P','jabatan_P','email_P','hp_P','nama_K','jabatan_K','email_K','hp_K'];
 
       public function file()
	{
    	return $this->hasMany(File::class);
	}
    public function naskahFinal()
    {
        return $this->hasMany(NaskahFinal::class);
    }
       public function filenafil()
    {
        return $this->hasMany(filenafil::class);
    }
    public function lkhm_penelaah_naskah()
    {
        return $this->hasMany(lkhm_penelaah_naskah::class);
    }

	    public function alreadyRead()
    {
    	 $this->read=1;
    	 $this->save();
    }

}
