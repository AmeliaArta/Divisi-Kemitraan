@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9" style="float: justify">
					<div class="panel">
								<div class="panel-heading">
									<center><h3 class="panel-title"><b>Upload Kerjasama</b></h3></center>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
										 <form class="form-wrap" action="/infokerjasama/create" method="POST" enctype="multipart/form-data">
								{{csrf_field()}}

								<div class="form-group {{$errors->has('tanggal_mulai')?' has-error' : ''}}">
								<label>Tanggal Mulai</label>
								<input type="date" class="form-control" id="datepicker" name="tanggal_mulai" placeholder="Masukan Tanggal Mulai Kerjasama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Tanggal Mulai'" >
								@if($errors->has('tanggal_mulai'))
								<span class="help-block">{{$errors->first('tanggal_mulai')}}</span>
@endif
								</div>

							<div class="form-group">
									<label for="">Tahun</label>
									<input type="text" name="tahun" class="form-control" placeholder="Masukan Tahun Kerjasama">
							</div>

							<div class="form-group">
									<label for="">Mitra</label>
									<input type="text" name="mitra" class="form-control" placeholder="Masukan nama Mitra">
							</div>

							<div class="form-group">
								 <label>Ruang Lingkup</label>
							<textarea name="deskripsi" class="form-control"></textarea>
							</div>

							<div class="form-group {{$errors->has('tanggal_selesai')?' has-error' : ''}}">
								<label>Tanggal Selesai</label>
								<input type="date" class="form-control" id="datepicker" name="tanggal_selesai" placeholder="Masukan Tanggal Selesai Kerjasama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Tanggal Selesai'" >
								@if($errors->has('tanggal_selesai'))
							<span class="help-block">{{$errors->first('tanggal_selesai')}}</span>
@endif
						    </div>


							<div class="form-group">
									<label for="exampleFormControlSelect2">Jenis Kerjasama</label>
									<select name="jenis_dokumen" class="form-control" id="exampleFormControlSelect2">
									<option>Silahkan Pilih</option>
									<option value="Nota Kesepahaman (NK)">Nota Kesepahaman (NK)</option>
									<option value="Perjanjian Kerjasama">PkS</option>
									</select>
							</div>

							<div class="form-group">
									<label for="exampleFormControlSelect2">Unit Pengelola</label>
									<select name="jenis_dokumen" class="form-control" id="exampleFormControlSelect2">
									<option>Silahkan Pilih</option>
									<option value="Nota Kesepahaman (NK)">Fakultas</option>
									<option value="Perjanjian Kerjasama">Institusi</option>
									<option value="Perjanjian Kerjasama">Prodi</option>
									<option value="Perjanjian Kerjasama">Wakil Rektor I</option>
									<option value="Perjanjian Kerjasama">Wakil Rektor II</option>
									<option value="Perjanjian Kerjasama">Wakil Rektor III</option>
									<option value="Perjanjian Kerjasama">FITE (Fakultas Informatika dan Teknik Elektro)</option>
									<option value="Perjanjian Kerjasama">FTI (Fakultas Teknik Industri)</option>
									<option value="Perjanjian Kerjasama">FB (Fakultas Bioproses)</option>
									<option value="Perjanjian Kerjasama">LPPM (Lembaga Penelitian dan Pengabdian Masyarakat)</option>
									<option value="Perjanjian Kerjasama">LKHM (Lembaga Kemitraan dan Hubungan Masyarakat)</option>
									</select>
							</div>

							<div class="form-group">
									<label for="exampleFormControlSelect2">Status</label>
									<select name="jenis_dokumen" class="form-control" id="exampleFormControlSelect2">
									<option>Silahkan Pilih</option>
									<option value="Nota Kesepahaman (NK)">Masih Berjalan</option>
									<option value="Perjanjian Kerjasama">Telah Berakhir</option>
									</select>
							</div>


						  <div class="input-group">
								<label for="exampleFormControlSelect2">File
							 </label>
							 <input type="file" name="files" class="fomr-control">
										  </div>



										  <br>

  <input  class="btn btn-primary"    type ="submit"  value="Kirim" style="text-align: center;">

						</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

@stop

@section('footer')
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
		 ClassicEditor
        .create( document.querySelector( '#deskripsi' ) )
        .catch( error => {
            console.error( error );
        });
         $(document).ready(function(){
        	 $('#lfm').filemanager('file');
        });
</script>
<script>
	$(function() {
    $( "#datepicker" ).datepicker();
  });
</script>
<script>
	$(document).ready(function(){
    $('input.timepicker').timepicker({});
});
</script>
@stop

