@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<center><h3 class="panel-title"><b>Upload Naskah Final</b></h3></center>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
										 <form action="{{route('nafil.create',$id)}}" method="POST" enctype="multipart/form-data">
							        	{{csrf_field()}}
							        	@method('PUT')
							        	
							    <table class="table table-bordered">
							    	<td>
			                    			<div class="panel-body">
											<div class="row">
												<div class="col-md-12">
							        	
							  						<h3 class="panel-title"><b>Biodata Instansi</b></h3>
									  			</div>
									  		</div>
									  		</div>
							  			</td>
							  		
	                    			<tr>
	                        			<td><span><b> Nama Instansi  </b></span></td>
	                            		<td>{{$file->naskah->nama_I}}</td>
	                        		
	                    			</tr>	
	                    			
	                    			<tr>
	                        			<td><span><b>  Alamat </b></span></td>
	                        			<td>{{$file->naskah->alamat_I}}</td>
	                        		
	                        			
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Website </b></span></td>
	                        			<td>
	                        		
	                            		{{$file->naskah->website}}
	                        		
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Email Instansi </b></span></td>
	                        			<td>
	                        		
	                            		{{$file->naskah->email_I}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b>  Telepon </b></span></td>
	                        			<td>
	                        		
	                            		{{$file->naskah->telp}}
	                        		
	                        			</td>
	                    			</tr>

	                    			

	                    			<tr>
	                        			<td><span><b> Fax </b></span></td>
	                        			<td>
	                        		{{$file->naskah->fax}}
	                        			</td>
	                    			</tr>

	                    			
	                    				<td>
			                    			<div class="panel-body">
											<div class="row">
												<div class="col-md-12">
							        	
							  						<h3 class="panel-title"><b>Biodata Pimpinan</b></h3>
									  			</div>
									  		</div>
									  		</div>
							  			</td>
							  		

	                    			<tr>
	                        			<td><span><b> Nama Pimpinan </b></span></td>
	                        			<td>
	                        		{{$file->naskah->nama_P}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Jabatan Pimpinan </b></span></td>
	                        			<td>
	                        		{{$file->naskah->jabatan_P}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Email Pimpinan </b></span></td>
	                        			<td>
	                        		{{$file->naskah->email_P}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> HP/WA Pimpinan </b></span></td>
	                        			<td>
	                        		{{$file->naskah->hp_P}}
	                        			</td>
	                    			</tr>

	                    				<td>
			                    			<div class="panel-body">
											<div class="row">
												<div class="col-md-12">
							        	
							  						<h3 class="panel-title"><b>Biodata Mitra</b></h3>
									  			</div>
									  		</div>
									  		</div>
							  			</td>
							  		

	                    			<tr>
	                        			<td><span><b> Nama Mitra </b></span></td>
	                        			<td>
	                        		{{$file->naskah->nama_K}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Jabatan Mitra </b></span></td>
	                        			<td>
	                        		{{$file->naskah->nama_K}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Email Mitra </b></span></td>
	                        			<td>
	                        		{{$file->naskah->email_K}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> HP/WA Mitra </b></span></td>
	                        			<td>
	                        		{{$file->naskah->hp_K}}
	                        			</td>
	                    			</tr>
	                    			
	                    		</table>
	                    						     
											
								<div class="form-group col-sm-7">
									<label for="exampleFormControlSelect2">Naskah Final
							 		</label>
							 		<input type="file" name="file" class="fomr-control">
						   
						  		</div>

						  			<div class="form-group col-sm-7">
						    <label for="exampleFormControlSelect2">Bahasa
						    </label>
						    <select name="bahasa" class="form-control" id="exampleFormControlSelect2">
						       <option>Silahkan Pilih</option>
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

