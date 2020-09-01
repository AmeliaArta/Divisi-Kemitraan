<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infokerjasama;
use DB;
use PDF;
use Auth;
use Illuminate\Support\Facades\Storage;

class InfokerjasamaController extends Controller
{
    public function index()
    {
        $datas = Infokerjasama::all();
        return view('infokerjasama.index');
    }

    public function daftar()
    {
        $datas = Infokerjasama::all();
        return view('infokerjas.index',compact(['datas']));
    }
//function for get list all naskah from db
    public function tampilkanKerjasama(){

        $datas = Infokerjasama::all();
          return view('infokerjasama.listAllKerjasama',compact(['datas']));
    }

    public function create(Request $request)
    {
      $datas = new Infokerjasama();
       $datas->tanggal_mulai = $request->tanggal_mulai;
       $datas->tanggal_selesai = $request->tanggal_selesai;
       $datas->mitra = $request->mitra;
       $datas->deskripsi = $request->deskripsi;
       $datas->jenis_kerjasama = $request->jenis_kerjasama;
       $datas->unit_pengelola = $request->unit_pengelola;
       $datas->status = $request->status;
       // $data->unggah_naskah = $request->unggah_naskah;
       if($request->hasFile('files')){
         $request->file('files')->move('images/',$request->file('files')->getClientOriginalName());
         $datas->files = $request->file('files')->getClientOriginalName();
       }
      
       $datas->save();
        return redirect('/infokerjasamas');
    }

    public function downfunc(){
        $datas=DB::table($this->table)->get(); //tak rubah dikit
        // return Storage::download('images')->download($data->path, $data->unggah_naskah);
        return view('infokerjasama.listAllKerjasama',compact(['datas']));
    }

     public function upload(Request $request)
    {
      $files = $request->file('files');
      // Mendapatkan Nama File
      $nama_file = $files->getClientOriginalName();
   
      // Mendapatkan Extension File
      $extension = $files->getClientOriginalExtension();
  
      // Mendapatkan Ukuran File
      $ukuran_file = $files->getSize();
   
      // Proses Upload File
      $destinationPath = 'uploads';
      $files->move($destinationPath,$files->getClientOriginalName());
    }

}
