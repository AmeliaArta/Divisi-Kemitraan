@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<center><h3 class="panel-title"><b>Detail Naskah</b></h3></center>
								</div>
								<table class="table table-bordered">
									{{csrf_field()}}

	                    			<tr>
	                        			<td><span><b> Nama Partner </b></span></td>
	                        			<td>
	                        		{{$data->nama_partner}}
	                        		
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b>  Negara </b></span></td>
	                        			<td>
	                        		{{$data->negara}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Jenis Lembaga </b></span></td>
	                        			<td>
	                        		{{$data->jenis_lembaga}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Jenis Dokumen </b></span></td>
	                        			<td>
	                        		{{$data->jenis_dokumen}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b>  Sumber Naskah </b></span></td>
	                        			<td>
	                        		{{$data->sumber_naskah}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b>  Naskah </b></span></td>
	                        			<td>
	                        		{{$data->unggah_naskah}}<br>
	                            		<a href="{{'/images/'.$data->unggah_naskah}}" view class="btn btn-primary btn-sm">View</a>
        
	                        		
	                        			</td>

	                    			</tr>

	        

	                    			<tr>
	                        			<td><span><b> Waktu Mulai Telaah </b></span></td>
	                        			<td>
	                        		{{$data->created_at}}
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Masa Waktu Telaah </b></span></td>
	                        			<td>
	                        		{{$data->masa_waktu_telaah}}
	                        		
	                        			</td>
	                    			</tr>

	                    			<tr>
	                        			<td><span><b> Komentar </b></span></td>
	                        			<td>
	                        		{{$data->komentar}}
	                        			</td>
	                    			</tr>



								</table>

									
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
