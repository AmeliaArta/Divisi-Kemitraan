<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mitra;
use DB;
use PDF;
use Auth;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{

	public function index()
    {
        $data_mitra = Mitra::all();
        return view('mitras.add');
    }
//function for get list all naskah from db
    public function tampilkanMitra(){
        $mitra = Mitra::all();
          return view('mitras.infomitra',compact(['mitra']));
    }
//function for get naskah by ID from db
    public function detail(Mitra $data){
      return view('mitras.detail',['data' => $datas]);
    }

     public function create(Request $request)
    {
        $datas = new Mitra();
       $datas->nama_mitra = $request->nama_mitra;
       $datas->keterangan = $request->keterangan;
       // $data->thumbnail = $request->thumbnail;
       if($request->hasFile('thumbnail')){
         $request->file('thumbnail')->move('images/',$request->file('thumbnail')->getClientOriginalName());
         $datas->thumbnail = $request->file('thumbnail')->getClientOriginalName();
       }
       $datas->save();
        return redirect('/mitras');
    }

     public function inforuangan()
    {
        $mitra  = Mitra::all();
        return view('mitras.infomitra',['mitra'=>$mitra]);
    }

    
}
