@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Daftar Naskah Final</b></h3>
									<div class="right">
									
									
									</div>	
								</div>
								

								</div>
								<div class="panel-body">
									<table class="table table-hover" id="myTable">
										<thead>
											<tr>
												<th>NO</th>
												<th>NAMA INSTANSI</th>
												<th>NAMA PIMPINAN</th>
												<th>NAMA MITRA</th>
												<th>BAHASA</th>
												<!-- <th>USER</th> -->
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											@php 
									 		$j = 1;
									 		@endphp
											<tr>
											@foreach($dataa as $dataks)
												<td> {{$j++}} </td>
												<td>{{$dataks->naskah->nama_I}}</td>
												<td>{{$dataks->naskah->nama_P}}</td>
												<td>{{$dataks->naskah->nama_K}}</td>
												
												<td>{{$dataks->bahasa}}</td>
												<td>
													<div class="dropdown">
                    								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Tools
										                <span class="caret"></span>
										                <span class="sr-only">Toggle Dropdown</span>
									                </button>

													  <div class="dropdown-menu dropdown-menu-right">
					                                    <li><a class="dropdown-item" href="/listAllNaskahFinals/{{$dataks->id}}/detail">Detail</a></li>
					                                    @if(auth()->user()->role == '1')
					                                    <li><a class="dropdown-item" href="/listAllNaskahFinals/{{$dataks->id}}/edit">Edit</a></li>
					                                    <li><a class="dropdown-item" href="/listAllNafil/{{$dataks->id}}/delete">Delete</a></li>
					                                    @endif
					                                    
					                                    @if(auth()->user()->role == '3')
					                                    <li><a class="dropdown-item" href="{{route('telaahs',$dataks->id)}}">Kirim Perbaikan</a></li>
					                                    @endif
					                                    <li><a class="dropdown-item" href="{{route('filenafil.files', $dataks->id)}}">Lihat Naskah Final</a>
					                                    </ul></li>
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
