@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<center><h3 class="panel-title"><b>Detail Naskah Final</b></h3></center>
								</div>
								<table class="table table-bordered">
									{{csrf_field()}}


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
	                        			<td><span><b> Nama Instansi </b></span></td>
	                        			<td>
	                        		{{$datas->naskah->nama_I}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b>  Alamat </b></span></td>
	                        			<td>
	                        		{{$datas->naskah->alamat_I}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Website </b></span></td>
	                        			<td>
	                        		{{$datas->naskah->website}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Email Instansi </b></span></td>
	                        			<td>
	                        		{{$datas->naskah->email_I}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b>  Telepon </b></span></td>
	                        			<td>
	                        		{{$datas->naskah->telp}}
	                        			</td>
	                    			</tr>

	                    			

	                    			<tr>
	                        			<td><span><b> Fax </b></span></td>
	                        			<td>
	                        		{{$datas->naskah->fax}}
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
	                        		{{$datas->naskah->nama_P}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Jabatan Pimpinan </b></span></td>
	                        			<td>
	                        		value="{{$datas->naskah->jabatan_P}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Email Pimpinan </b></span></td>
	                        			<td>
	                        		{{$datas->naskah->email_P}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> HP/WA Pimpinan </b></span></td>
	                        			<td>
	                        		{{$datas->naskah->hp_P}}
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
	                        		{{$datas->naskah->nama_K}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Jabatan Mitra </b></span></td>
	                        			<td>
	                        	 {{$datas->naskah->nama_K}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Email Mitra </b></span></td>
	                        			<td>
	                        		{{$datas->naskah->email_K}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> HP/WA Mitra </b></span></td>
	                        			<td>
	                        		{{$datas->naskah->hp_K}}
	                        			</td>
	                    			</tr>
	                    			<tr>
	                        			<td><span><b> Naskah Final </b></span></td>
	                        			<td>
	                        		{{$datas->file}}<br>
	                            		<a href="{{'/images/'.$datas->file}}" view class="btn btn-primary btn-sm">View</a>
        
	                        		
	                        			</td>

	                    			</tr>

	                    			<tr>
	                        			<td><span><b> BAHASA </b></span></td>
	                        			<td>
	                        		{{$datas->bahasa}}
	                        			</td>
	                    			</tr>



								</table>
						  		


										  <br>

  

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

