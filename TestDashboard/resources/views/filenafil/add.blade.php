@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<center><h3 class="panel-title"><b>Kirim Perbaikan Naskah Final </b></h3></center>
								</div>
							</div>
							<table bordir="1" cellspacing="10" cellpadding="10">
								 <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
								

								<tr>

									<td>Nomor Naskah    </td>
									
									<td> {{$naskahfinal->naskah->nomor_naskah}} </td>
									
								</tr>

								<tr>

								<td> Nama Instansi   </td>

								<td> {{$naskahfinal->naskah->nama_I}} </td>

								</tr>

								<tr>

								<td> Nama Pimpinan   </td>

								<td> {{$naskahfinal->naskah->nama_P}} </td>

								</tr>

								<tr>

								<td> Jenis Kerjasama </td>

								<td> {{$naskahfinal->naskah->jenis_dokumen}} </td>

								</tr>

								</table>
								<br>

							</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
										 <form action="{{route('filenafil.create', $ids)}}" method="POST" enctype="multipart/form-data">
							        	{{csrf_field()}}
							        	@method('PUT')

							    <div class="form-group">
								    <label>Keterangan</label>
								    <small>Keterangan</small>
										 <textarea name="keterangan" class="form-control"></textarea>

								</div>

						   
						  		<div class="input-group">
									<label for="exampleFormControlSelect2">File
							 		</label>
							 		<input type="file" name="file" class="fomr-control">
						  
						  		</div>


										  <br>

  <input  class="btn btn-primary"    type ="submit"  value="Kirim" style="text-align: center;">
</form>
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
        	 $('#lfm').filemanager('image');
        });
        
</script>

@stop

