@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Daftar Perbaikan Naskah Final</b></h3>
									<div class="right">
									@if(auth()->user()->role == '3')
									<a href="/filenafil" class="btn btn-primary  btn-sm">Tambah File Perbaikan</a>
									@endif
									</div>
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
									<table class="table table-hover" id="myTable">
										<thead>
											<tr>
												<th><center>NO</center></th>
												<th><center>KETERANGAN</center></th>
												<th><center>WAKTU</center></th>
												<!-- <th>USER</th> -->
												<th><center>AKSI</center></th>
											</tr>
										</thead>
										<tbody>
										@php 
									 		$j = 1;
									 		@endphp
											@foreach($filenafil as $datas)

											<tr>
												<td> {{$j++}}</td>
												<td>{{$datas->keterangan}}</td>
												<td>{{$datas->created_at}}</td>
												<td>
												@if(auth()->user()->role == '3')
                          						<!-- 	<a href="/" class="btn btn-info btn-sm">Detail</a>
													<a href="/" class="btn btn-warning btn-sm">Edit</a> -->
												@endif
													<button href="{{'/images/final/'.$datas->file}}" download class="btn btn-primary btn-sm">Download</button>
												@if(auth()->user()->role == '1')
												@if($maxids->id == $datas->id)
													<button href="/sendemail" class="btn btn-primary  btn-sm">Send to mitra</button>
												@endif
												@endif
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
