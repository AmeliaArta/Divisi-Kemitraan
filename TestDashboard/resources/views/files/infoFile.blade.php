@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Daftar Telaah Naskah</b></h3>
								</div>

								</div>
						
							
							
								<table bordir="1" cellspacing="10" cellpadding="10">
								 <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
								

								<tr>

									<td>Nomor Naskah    </td>
									
									<td> {{$naskah->nomor_naskah}} </td>
									
								</tr>

								<tr>

								<td> Nama Instansi   </td>

								<td> {{$naskah->nama_I}} </td>

								</tr>

								<tr>

								<td> Nama Pimpinan   </td>

								<td> {{$naskah->nama_P}} </td>

								</tr>

								<tr>

								<td> Jenis Kerjasama   </td>

								<td> {{$naskah->jenis_dokumen}} </td>

								</tr>

								</table>
								<br>
							</div>
								
						
								<div class="panel-body">
									<table class="table table-hover" id="myTable">
										<thead>

											<tr>
												<th><center>NO </center></th>
												<th><center> KOMENTAR </center> </th>
												<th><center> NAMA PENELAAH </center> </th>
												<th><center> WAKTU </center></th>
												<!-- <th>USER</th> -->
												<th><center> AKSI </center> </th>
											</tr>
										</thead>
										<tbody>
										@php 
									 		$j = 1;
									 		@endphp
											@foreach($file as $dataaa)
											<tr>

												
												
												<td>{{$j++}}</td>
												<td>{{$dataaa->komentar}}</td>
												<td>{{$dataaa->penelaah}}</td>
												<td>{{$dataaa->created_at}}</td>
												<td>
                          						<!-- <a href="/" class="btn btn-info btn-sm">Detail</a> -->
                          						<button href="{{'/images/'.$dataaa->file}}" download class="btn btn-primary btn-sm">Download</button>
                          						@if($naskah->status == 0)
                          						@if($maxid->id == $dataaa->id)

                          						<button href="{{route('nafiltelaah', $dataaa->id)}}" class="btn btn-primary  btn-sm">Upload Naskah Final</button>
													<!-- <a href="/" class="btn btn-warning btn-sm">Edit</a> -->
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


@stop

@section('footer')
		<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@stop

