@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<center><h3 class="panel-title"><b>Tambah Mitra</b></h3></center>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
										 <form action="/mitra/create" method="POST" enctype="multipart/form-data">
							        	{{csrf_field()}}

								<div class="form-group">
									<label for="">Nama Mitra</label>
									<input type="text" name="nama_mitra" class="form-control" placeholder="Masukan nama Mitra">

							    </div>

							    <div class="form-group">
								    <label>Keterangan</label>
								    <small>Keterangan</small>
										 <textarea name="keterangan" class="form-control"></textarea>

								</div>

						   
						  		<div class="input-group">
									<label for="exampleFormControlSelect2">Mitra
							 		</label>
							 		<input type="file" name="thumbnail" class="fomr-control">
						  
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
        	 $('#lfm').filemanager('image');
        });
        
</script>

@stop

