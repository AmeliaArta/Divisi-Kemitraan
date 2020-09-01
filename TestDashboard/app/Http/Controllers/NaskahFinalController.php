<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NaskahFinal;
use App\Naskah;
use App\File;
use DB;
use PDF;
use Auth;
use Illuminate\Support\Facades\Storage;

class NaskahFinalController extends Controller
{
    public function index($id)
    {
        $file = File::find($id);
        $id = $file->naskah->id;
        
        return view('nafil.add',compact(['file','id']));
    }
    

//function for get list all naskah from db
    public function tampilkanNaskahFinal($id){
        $dataa = NaskahFinal::all();
                
        return view('nafil.infonafil',compact(['dataa']));
    }
    public function detail($dataa){
      $datas = NaskahFinal::find($dataa);

      return view('nafil.detail',compact('datas'));
    }
//function for edit naskah by ID
    public function edit1(NaskahFinal $dataa)
   {
     return view('nafil.edit',['dataa' => $dataa]);
   }
//function for store data yang di edit
   public function edit2(Request $request,NaskahFinal $dataa)
    {
            $dataa->update($request->all());
            $dataa->save();
            return redirect('/naskahfinals')->with('sukses', 'Berhasil dikonfirmasi');
    }
//function for get naskah by ID from db
    // public function detail(Mitra $data){
    //   return view('nafil.detail',['data' => $datas]);
    // }

     public function create(Request $request, $id)
    {
        $dataa = new NaskahFinal();
       
       // $data->thumbnail = $request->thumbnail;
        $dataa->naskah_id = $id;
       if($request->hasFile('file')){
         $request->file('file')->move('images/',$request->file('file')->getClientOriginalName());
         $dataa->file = $request->file('file')->getClientOriginalName();    
       }
       $dataa->bahasa = $request->bahasa;

       $dataa->save();
        return redirect(route('nafil',$id));
    }

   

    public function downfunc(){
        $dataa=DB::table($this->table)->get(); //tak rubah dikit
        // return Storage::download('images')->download($data->path, $data->unggah_naskah);
        return view('nafil.infonafil',compact(['dataa']));
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


     public function delete2($id)
    {
    $dataa = NaskahFinal::find($id); 
    $dataa->delete();
    return redirect('/naskahfinals')->with('sukses', 'Berhasil dihapus');
   }


}
