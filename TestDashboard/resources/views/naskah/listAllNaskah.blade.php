@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Daftar Naskah</b></h3>
									@if(auth()->user()->role == '1')
									<div class="right">
										<a href="/naskah" class="btn btn-primary  btn-sm">Tambah Naskah</a>
									</div>
									@endif
								</div>

								</div>
								<div class="panel-body">
									<table class="table table-hover" id="myTable">
										<thead>
											  <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
											  <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
											  <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
											<tr>
												<th>No</th>
												@if(auth()->user()->role == '1')
												<th>STATUS</th>
												@endif
												<th>NOMOR NASKAH</th>
												<th>NAMA PARTNER</th>
												<th>KOMENTAR</th>
                        						<th>JENIS KERJASAMA</th>
                        						
                        						<th>MASA WAKTU TELAAH</th>
                        						<th>STATUS</th>
												<th><center> AKSI </center></th>
											</tr>
										</thead>
								 		<tbody>
									 		@php 
									 		$j = 1;
									 		@endphp

											@foreach($data as $dataa)
											@if(auth()->user()->role == '2')
											<tr 
											@if(!$dataa->read) style="font-weight :bold" @endif>
											@endif
											<td> {{$j++}}</td>
											@if(auth()->user()->role == '1')
												<td> @if($dataa->status == 1)
														<a href="{{ url('naskah/status/'.$dataa->id) }}" class="btn btn-sm btn-danger">Non Aktifkan</a>
														@else
														<a href="{{ url('naskah/status/'.$dataa->id) }}" class="btn btn-sm btn-success">Aktifkan</a>
														@endif 
												</td>
												@endif
												<td>{{$dataa->nomor_naskah}}</td>
												<td>{{$dataa->nama_partner}}</td>
												<td>{{$dataa->komentar}}</td>
												<td>{{$dataa->jenis_dokumen}}</td>
												
												<?php 
													$tanggal = new DateTime();
												?>
												<td>{{$dataa->masa_waktu_telaah}}</td>
												<td>
													@if($dataa->masa_waktu_telaah > $tanggal)
												<label class="label label-success">Aktif</label>
													@else
												<label class="label label-danger">Tidak Aktif</label>
													@endif
												</td>
												@if(auth()->user()->role == '2')
												@if($dataa->status == 0)
												<td>Sudah Final, Terimakasih atas kerjanya</td>
												@else
												<td> Belum Final</td>
												@endif
												@endif
												<td> 
													<div class="dropdown">
                    								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Tools
										                <span class="caret"></span>
										                <span class="sr-only">Toggle Dropdown</span>
									                </button>

				                                    <div class="dropdown-menu dropdown-menu-right">
					                                    <li><a class="dropdown-item" href="/listAllNaskah/{{$dataa->id}}/detail">Detail</a></li>
					                                    @if(auth()->user()->role == '1')
					                                    <li><a class="dropdown-item" href="/listAllNaskah/{{$dataa->id}}/edit">Edit</a></li>
					                                    <li><a class="dropdown-item" href="/listAllNaskah/{{$dataa->id}}/delete">Delete</a></li>
					                                    @endif
					                                   	@if($dataa->status == 1)
					                                    @if($dataa->masa_waktu_telaah > $tanggal)
					                                    <li><a class="dropdown-item" href="{{route('telaah',$dataa->id)}}">Telaah</a></li>
					                                    @endif
					                                    @endif
					                                    <li><a class="dropdown-item" href="{{route('file.fileelse', $dataa->id)}}">Lihat Telaah</a>
					                                    </ul></li>
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
$(document).ready(function(){
	$('#myTable').DataTable();

 $('myTable tr').click(function(){ $(this).addClass("high-light");  });
 //If you have TD's background set try the below commented code
  $('myTable tr td').click(function(){ $(this).parent().find('td').addClass("high-light");  });
});
</script>
@stop