@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<center><h3 class="panel-title"><b>Edit Naskah Final</b></h3></center>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
										 <form class="form-wrap" action="/listAllNaskahFinals/{{$dataa->id}}/edit" method="POST" enctype="multipart/form-data">
								{{csrf_field()}}

								

								<div class="form-group col-sm-7">
								<label for="exampleFormControlSelect2">Naskah Final
							 </label>
							 <input type="file" name="file" class="fomr-control">{{$dataa->file}}
										  </div>

						  			<div class="form-group col-sm-7">
						    <label for="exampleFormControlSelect2">Bahasa
						    </label>
						    <select name="bahasa" class="form-control" id="exampleFormControlSelect2">
						       <option>{{$dataa->bahasa}}</option>
						       <option value="Indonesia">Indonesia</option>
						      <option value="Inggris">Inggris</option>
						    </select>

						  </div>


										  <br>

  <div class="form-group col-sm-7">
  <input  class="btn btn-primary"    type ="submit"  value="Kirim" style="text-align: center;">
</div>

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
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<!-- <script>
		 ClassicEditor
        .create( document.querySelector( '#deskripsi' ) )
        .catch( error => {
            console.error( error );
        });
         $(document).ready(function(){
        	 $('#lfm').filemanager('file');

        });
</script> -->

@stop
