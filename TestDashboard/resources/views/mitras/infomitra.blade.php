@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Daftar Mitra</b></h3>
									<div class="right">
									<a href="/mitra" class="btn btn-primary  btn-sm">Tambah Mitra</a>
									</div>	
								</div>
								<div class="panel-body">
									<div class="row">
					@foreach($mitra as $mitra)
						<div class="col-md-2 grid mitra">
							<div class="grid-image">
								<img class="img-responsive" src="{{'/images/'.$mitra->thumbnail}}" >							
							</div>
							<center>
								<p>{{$mitra->nama_mitra}}</p>
								<p>{{$mitra->keterangan}}</p>
							</center>

						<div class="col-md-2 grid mitra"></div>
						<div class="col-md-2 grid mitra"></div>
						<div class="col-md-2 grid mitra"></div>
						<div class="col-md-2 grid mitra"></div>
							
						</div>
					@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


@stop