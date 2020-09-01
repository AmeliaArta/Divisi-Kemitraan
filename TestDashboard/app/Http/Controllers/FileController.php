<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Naskah;
use DB;
use PDF;
use Auth;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{

	public function index($id)
    {
        // $data_File = File::all();
        // return view('files.add');
        // $data = Naskah::all();
        $naskah = Naskah::find($id);
        return view('files.add',compact('id','naskah'));
    }
//function for get list all naskah from db
    public function tampilkanFile($id){
        $file = File::where('naskah_id',$id)->get();
        $maxid = File::select('id')->where('naskah_id', $id)->orderby('id','desc')->first(); 
        $naskah = Naskah::find($id);

        return view('files.infoFile',compact('file','id','naskah','maxid'));
    }
    
//function for get naskah by ID from db
    // public function detail(File $data){
    //   return view('files.detail',['data' => $datas]);
    // }

     public function create(Request $request,$id)
    {
        $datass = new File();
        $datass->penelaah = $request->penelaah;
        // $naskah = Naskah::find($id);
        $datass->naskah_id = $id;
        if($request->hasFile('file')){
         $request->file('file')->move('images/',$request->file('file')->getClientOriginalName());
         $datass->file = $request->file('file')->getClientOriginalName();
       }
       $datass->komentar = $request->komentar;
       // $data->thumbnail = $request->thumbnail;
       
       $datass->save();
        return redirect(route('file.fileelse',$id));
    }

    public function downfunc(){
        $datass=DB::table($this->table)->get(); //tak rubah dikit
        // return Storage::download('images')->download($data->path, $data->unggah_naskah);
        return view('files.infoFile',compact(['datass']));
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

    
}