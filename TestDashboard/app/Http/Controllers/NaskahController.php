<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Naskah;
use APP\File;
use App\Dosen;
use DB;
use PDF;
use Auth;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\lkhm_penelaah_naskah;

class NaskahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datas = Dosen::all();
        return view('naskah.index',compact(['datas']));
    }
    
//function for get list all naskah from db
    public function tampilkanNaskah(){

        $data = Naskah::all();
          return view('naskah.listAllNaskah',compact(['data']));
    }  
//function for get naskah by ID from db
    public function detail(Naskah $data)
    {
        $data->alreadyRead();
      return view('naskah.detail',['data' => $data]);
    }

//function for edit naskah by ID
    public function edit1(Naskah $data)
   {
        
        $datas = Dosen::all();

     return view('naskah.edit',compact(['datas','data']));
   }
//function for store data yang di edit
   public function edit2(Request $request,Naskah $data)
    {
            $data->alreadyRead();
            $data->update($request->all());
            $data->save();
            return redirect('/infoker')->with('sukses', 'Berhasil dikonfirmasi');
    }
    

    // public function downfunc(){
    //     $pesru=DB::table($this->table)->get();
    //     return view('naskah.detail',compact(['data']));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $data = new Naskah();
        $datas = new Dosen();
         $nomor_naskah = $request->nomor_naskah;
       $data->nomor_naskah = $request->nomor_naskah;
       $data->nama_partner = $request->nama_partner;
       $data->negara = $request->negara;
       $data->jenis_lembaga = $request->jenis_lembaga;
       $data->jenis_dokumen = $request->jenis_dokumen;
       $data->sumber_naskah = $request->sumber_naskah;
       // $data->unggah_naskah = $request->unggah_naskah;
       if($request->hasFile('unggah_naskah')){
         $request->file('unggah_naskah')->move('images/',$request->file('unggah_naskah')->getClientOriginalName());
         $data->unggah_naskah = $request->file('unggah_naskah')->getClientOriginalName();
       }
       
       
       $data->masa_waktu_telaah = $request->masa_waktu_telaah;
       $data->komentar = $request->komentar;
       $data->nama_I = $request->nama_I;
       $data->alamat_I = $request->alamat_I;
       $data->website = $request->website;
       $data->email_I = $request->email_I;
       $data->telp = $request->telp;
       $data->fax = $request->fax;
       $data->nama_P = $request->nama_P;
       $data->jabatan_P = $request->jabatan_P;
       $data->email_P = $request->email_P;
       $data->hp_P = $request->hp_P;
       $data->nama_K = $request->nama_K;
       $data->jabatan_K = $request->jabatan_K;
       $data->email_K = $request->email_K;
       $data->hp_K = $request->hp_K;

       $data->save();

       $id = Naskah::select('id')->where('nomor_naskah','=', $nomor_naskah)->first();
        $id->id;

        $rules = [];

        foreach($request->input('dosen') as $key=> $value){
            $rules["dosen.{$key}"] = 'required';
        }

        $validator = Validator::make($request->all(), $rules);

        if($validator->passes()){
            foreach($request->input('dosen') as $key => $value){
                $tag = new lkhm_penelaah_naskah();
                $tag->dosen_id = $value;
                $tag->id = $id->id;
                $tag->save();
            }
        }
        return redirect('/infoker')->with('sukses', 'Berhasil diupload');
    }

    public function upload(Request $request)
    {
      $file = $request->file('unggah_naskah');
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

    public function downfunc($data){
        $data=DB::table($this->table)->get(); //tak rubah dikit
        // return Storage::download('images')->download($data->path, $data->unggah_naskah);
        return view('naskah.listAllNaskah',compact(['data']));
    }

     public function delete1($id)
    {
    $data = Naskah::find($id);
    $data->alreadyRead(); 
    $data->delete();
    return redirect('/infoker')->with('sukses', 'Berhasil dihapus');
    }

    

    public function status($id){
   
    $dataa = \DB::table('naskah')->where('id', $id)->first();

    $status_sekarang = $dataa->status;

        if($status_sekarang == 1){
            \DB::table('naskah')->where('id', $id)->update(['status'=>0]);

        }else{
            \DB::table('naskah')->where('id', $id)->update(['status'=>1]);
        }
            \Session::flash('sukses','Proses Telaah berhasil diubah');

        return redirect('/infoker');
        }


    public function alert(){
        return redirect('/naskah') ->with(['error' => 'Mohan maaf Naskah tidak dapat dimasukkan']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
