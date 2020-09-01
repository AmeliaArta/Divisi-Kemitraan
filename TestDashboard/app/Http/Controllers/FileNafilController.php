<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FileNafil;
use DB;
use PDF;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\NaskahFinal;
use App\Naskah;

class FileNafilController extends Controller
{
    public function index($ids)
    {
        
        $naskahfinal = NaskahFinal::find($ids);
        
        return view('filenafil.add',compact('ids','naskahfinal'));
        
    }
//function for get list all naskah from db
    public function tampilkanFileNafil($ids){
        // $filenafil = FileNafil::all();
         $filenafil = FileNafil::where('nafil_id',$ids)->get();
       
        $maxids = FileNafil::select('id')->where('nafil_id', $ids)->orderby('id','desc')->first(); 
         $naskahfinal = NaskahFinal::find($ids);
          return view('filenafil.infofilenafil',compact('filenafil','naskahfinal','maxids'));
    }
//function for get naskah by ID from db
    // public function detail(File $data){
    //   return view('files.detail',['data' => $datas]);
    // }

     public function create(Request $request, $ids)
    {
        $filenafil = new FileNafil();
        $filenafil->nafil_id = $ids;
        if($request->hasFile('file')){
         $request->file('file')->move('images/final/',$request->file('file')->getClientOriginalName());
         $filenafil->file = $request->file('file')->getClientOriginalName();
       }
       $filenafil->keterangan = $request->keterangan;     
       // $data->thumbnail = $request->thumbnail;
       
       $filenafil->save();
        return redirect(route('filenafil.files',$ids));
    }

     public function upload(Request $request)
    {
      $file = $request->file('file');
      // Mendapatkan Nama File
      $nama_file = $file->getClientOriginalName();
   
      // Mendapatkan Extension File
      $extension = $file->getClientOriginalExtension();
  
      // Mendapatkan Ukuran File
      $ukuran_file = $file->getSize();
   
      // Proses Upload File
      $destinationPath = 'uploads';
      $file->move($destinationPath,$file->getClientOriginalName());
    }

    public function downfunc(){
        $filenafil=DB::table($this->table)->get(); //tak rubah dikit
        // return Storage::download('images')->download($data->path, $data->unggah_naskah);
        return view('filenafil.infofilenafil',compact(['filenafil']));
    }
}
