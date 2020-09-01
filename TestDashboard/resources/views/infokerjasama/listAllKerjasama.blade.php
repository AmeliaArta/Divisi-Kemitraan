@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
                <div class="panel-heading" style="background: #F0FFF0; color:#000000;">
                  <h3 class="panel-title"><b>Daftar Kerjasama</b></h3>
                     
                </div>

                </div>
                <div class="panel-body">
                  <table class="table table-hover" id="myTable" style="background:#F0F8FF; color:#000000; outline: #F0F8FF; border-collapse: collapse;">
                    <thead>
                      <tr style="background:#F0F8FF; color:#000000; outline: #F0F8FF">
                        <th>TAHUN</th>
                        <th>TANGGAL MULAI</th>
                        <th>TANGGAL SELESAI</th>
                        <th>MITRA</th>
                        <th>RUANG LINGKUP</th>
                        <th>JENIS KERJASAMA</th>
                        <th>UNIT PENGELOLA</th>
                        <th>STATUS</th>
                        <!-- <th>USER</th> -->
                        <th>AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($datas as $dataas)
                      <tr>
                        <td>{{$dataas->tahun}}</td>
                        <td>{{$dataas->tanggal_mulai}}</td>
                        <td>{{$dataas->tanggal_selesai}}</td>
                        <td>{{$dataas->mitra}}</td>
                        <td>{{$dataas->deskripsi}}</td>
                        <td>{{$dataas->jenis_kerjasama}}</td>
                        <td>{{$dataas->unit_pengelola}}</td>
                        <td>{{$dataas->status}}</td>
                        <td>
                          <!-- Button trigger modal -->
                           <div class="form-group row">
                             <a href="{{'/images/'.$dataas->files}}" view class="btn btn-success btn-sm">Detail</a>
                           </div>
                         </div>    
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
@section('footer')

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@stop