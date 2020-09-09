@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<center><h3 class="panel-title"><b>Edit Naskah</b></h3></center>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
										 <form class="form-wrap" action="/listAllNaskah/{{$data->id}}/edit" method="POST" enctype="multipart/form-data">
								{{csrf_field()}}

								<div class="form-group col-sm-7">
									<label for="">Nama Partner</label>
									<input type="text" name="nama_partner" class="form-control" value="{{$data->nama_partner}}">

							    </div>

							    <div class="form-group col-sm-7">
									<label for="">Negara</label>
									<select name="negara" class="form-control" id="exampleFormControlSelect2" placeholder="" value="{{$data->negara}}">
										<option>{{$data->negara}}</option>
										<option value="australia">Australia</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Aljazair">Aljazair</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Antigua dan Barbuda">Antigua dan Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahama">Bahama</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgia">Belgia</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Brasil">Brasil</option>
										<option value="Brunei Darussalam">Brunei Darussalam</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Kamboja">Kamboja</option>
										<option value="Kanada">Kanada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Afrika Tengah">Afrika Tengah</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="Cina">Cina</option>
										<option value="Kolombia">Kolombia</option>
										<option value="Komoro">Komoro</option>
										<option value="Kongo">Kongo</option>
										<option value="Kosta Rika">Kosta Rika</option>
										<option value="Pantai Gading">Pantai Gading</option>
										<option value="Kroasia">Kroasia</option>
										<option value="Kuba">Kuba</option>
										<option value="Siprus">Siprus</option>
										<option value="Republik Ceko">Republik Ceko</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominika">Dominika</option>
										<option value="Republik Dominika">Republik Dominika</option>
										<option value="Timor Leste">Timor Leste</option>										
										<option value="Ekuador">Ekuador</option>
										<option value="Mesir">Mesir</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Guinea Ekuatorial">Guinea Ekuatorial</option>
										<option value="Eritrea">Eritrea</option>
										<option value="indonesia">Indonesia</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Fiji">Fiji</option>
										<option value="Prancis">Prancis</option>
										<option value="Finlandia">Finlandia</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Jerman">Jerman</option>
										<option value="Ghana">Ghana</option>
										<option value="Yunani">Yunani</option>
										<option value="Grenada">Grenada</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Honduras">Honduras</option>
										<option value="Hongaria">Hongaria</option>
										<option value="Islandia">Islandia</option>
										<option value="India">India</option>
										<option value="Iran">Iran</option>
										<option value="Irak">Irak</option>
										<option value="Irlandia">Irlandia</option>
										<option value="Israel">Israel</option>
										<option value="Italia">Italia</option>
										<option value="Jamaika">Jamaika</option>
										<option value="Jepang">Jepang</option>
										<option value="Yordania">Yordania</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea Utara">Korea Utara</option>
										<option value="Korea Selatan">Korea Selatan</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Libya">Libya</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagaskar">Madagaskar</option>
										<option value="Meksiko">Meksiko</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Kepulauan Marshall">Kepulauan Marshall</option>
										<option value="Monako">Monako</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montenegro">Montenegro</option>
										<option value="Maroko">Maroko</option>
										<option value="Mozambik">Mozambik</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Belanda">Belanda</option>
										<option value="Nepal">Nepal</option>
										<option value="Selandia Baru">Selandia Baru</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Panama">Panama</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Papua Nugini">Papua Nugini</option>
										<option value="Filipina">Filipina</option>
										<option value="Portugal">Portugal</option>
										<option value="Arab Saudi">Arab Saudi</option>
										<option value="Singapura">Singapura</option>
										<option value="Afrika Selatan">Afrika Selatan</option>
										<option value="Spanyol">Spanyol</option>
										<option value="Thailand">Thailand</option>
										<option value="Swedia">Swedia</option>
										<option value="Swiss">Swiss</option>
										<option value="Turki">Turki</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Inggris">Inggris</option>
										<option value="Amerika Serikat">Amerika Serikat</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Vatikan">Vatikan</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Zimbabwe">Zimbabwe</option>

						    </select>
									
									</div>


									 <div class="form-group col-sm-7">
						    <label for="">Jenis Lembaga
						    </label> 
						    <select name="jenis_lembaga" class="form-control" id="exampleFormControlSelect2" placeholder="" value="{{$data->jenis_lembaga}}">
						       <option>{{$data->jenis_lembaga}}</option>
						      <option value="Dunia Usaha Dalam Negri">Dunia Usaha Dalam Negri</option>
						      <option value="Dunia Usaha Luar Negri">Dunia Usaha Luar Negri</option>
						      <option value="Institusi Pemerintahan Dalam Negri">Institusi Pemerintahan Dalam Negri</option>
						      <option value="Institusi Pemerintahan Luar Negri">Institusi Pemerintahan Luar Negri</option>
						      <option value="Institusi Pendidikan Dalam Negri">Institusi Pendidikan Dalam Negri</option>
						      <option value="Institusi Pendidikan Luar Negri">Institusi Pendidikan Luar Negri</option>
						      <option value="Organisasi Dalam Negri">Organisasi Dalam Negri</option>
						      <option value="Organisasi Luar Negri">Organisasi Luar Negri</option>

						    </select>
						  	</div>



						    <div class="form-group col-sm-7">
						    <label for="exampleFormControlSelect2">Jenis Dokumen
						    </label>
						    <select name="jenis_dokumen" class="form-control" id="exampleFormControlSelect2" placeholder="" value="{{$data->jenis_dokumen}}">
						       <option>{{$data->jenis_dokumen}}</option>
						       <option value="Nota Kesepahaman ">Nota Kesepahaman </option>
						      <option value="Perjanjian Kerjasama">Perjanjian Kerjasama</option>
						    </select>

						  </div>



						   <div class="form-group col-sm-7">
						    <label for="exampleFormControlSelect2">Sumber Naskah
						    </label>
						    <select name="sumber_naskah" class="form-control" id="exampleFormControlSelect2" placeholder="" value="{{$data->sumber_naskah}}">
						       <option>{{$data->sumber_naskah}}</option>
						       <option value="IT DEL">IT DEL</option>
						      <option value="Partner">Partner</option>
						    </select>

						  </div>



						  <div class="form-group col-sm-7">
								<label for="exampleFormControlSelect2">Unggah Naskah
							 </label>
							 <input type="file" name="unggah_naskah" class="fomr-control">{{$data->unggah_naskah}}
										  </div>

						  <div class="form-group col-sm-7" id="dynamic_field1">


						    <label for="exampleFormControlSelect2">Pihak Penelaah </label>
						    <select name="dosen[]" class="form-control" id="dosen">
						       <option>Silahkan Pilih</option>
						       @foreach($datas as $Dosen)
						       <option value="{{$Dosen->dosen_id}}">{{$Dosen->nama}}</option>
						       @endforeach
						    </select>
						    <button type="button" name="add" id="add" class="btn btn-success">+</button> 

						  	</div>

						  
						<div class="form-group col-sm-7">
									<label for="">Masa Waktu Menelaah</label>
									<input type="text" name="masa_waktu_telaah" class="form-control" value="{{$data->masa_waktu_telaah}}" >

									</div>

								<div class="form-group col-sm-7">
								 <label>Komentar</label>
								 <small>Komentar rapat min 50 karakter</small>
										 <textarea name="komentar" class="form-control" id="deskripsi" rows="3">{{$data->komentar}}</textarea>

										</div>
							<div class="form-group col-sm-7">
							<h3 class="panel-title"><b>Partner</b></h3>
							</div>
							    <br>
							    <div class="form-group col-sm-7">
									<label for="">Nama Instansi</label>
									<input type="text" name="nama_I" class="form-control" value="{{$data->nama_I}}">

							    </div>

							    <div class="form-group col-sm-7">
									<label for="">Alamat</label>
									<input type="text" name="alamat_I" class="form-control" value="{{$data->alamat_I}}" >
								</div>

								<div class="form-group col-sm-7">
									<label for="">Website</label>
									<input type="text" name="website" class="form-control" value="{{$data->website}}">

							    </div>

							    <div class="form-group col-sm-7">
									<label for="">Email Instansi</label>
									<input type="text" name="email_I" class="form-control" value="{{$data->email_I}}">
								</div>

								<div class="form-group col-sm-7">
									<label for="">Telp</label>
									<input type="text" name="telp" class="form-control" value="{{$data->telp}}">

							    </div>

							    <div class="form-group col-sm-7">
									<label for="">Fax</label>
									<input type="text" name="fax" class="form-control" value="{{$data->fax}}" >
								</div>


						  		<br><br><br>
						  		<div class="form-group col-sm-7">
						  		<h3 class="panel-title"><b>Pimpinan</b></h3>
						  		</div>
						  		<br>
								<div class="form-group col-sm-7">
									<label for="">Nama Pimpinan</label>
									<input type="text" name="nama_P" class="form-control" value="{{$data->nama_P}}">

							    </div>

							    <div class="form-group col-sm-7">
									<label for="">Jabatan Pimpinan</label>
									<input type="text" name="jabatan_P" class="form-control" value="{{$data->jabatan_P}}">
								</div>

								<div class="form-group col-sm-7">
									<label for="">Email</label>
									<input type="text" name="email_P" class="form-control" value="{{$data->email_P}}">

							    </div>

							    <div class="form-group col-sm-7">
									<label for="">HP/WA</label>
									<input type="text" name="hp_P" class="form-control" value="{{$data->hp_P}}">
								</div>

								<br><br><br>
								<div class="form-group col-sm-7">
								<h3 class="panel-title"><b>Pengurus Naskah Kerjasama</b></h3>
								</div>

								<div class="form-group col-sm-7">
									<label for="">Nama Mitra</label>
									<input type="text" name="nama_K" class="form-control" value="{{$data->nama_K}}">

							    </div>

							    <div class="form-group col-sm-7">
									<label for="">Jabatan Mitra</label>
									<input type="text" name="jabatan_K" class="form-control" value="{{$data->jabatan_K}}" >
								</div>

								<div class="form-group col-sm-7">
									<label for="">Email</label>
									<input type="text" name="email_K" class="form-control" value="{{$data->email_K}}">

							    </div>
 
							    <div class="form-group col-sm-7">
									<label for="">Handphone/Whatsapp</label>
									<input type="text" name="hp_K" class="form-control" value="{{$data->hp_K}}" >
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

<script>
 $('#dosen2').select2({
        placeholder: 'Pilih Dosen',
        allowClear: true
      });
</script>



<script >
    $("#dosen").select2({
        placeholder: 'Pilih Dosen',
        allowClear: true
    });    
</script>


<script type="text/javascript">
      var i =1;
      $('#add').click(function(){  

           i++;  
           $('#dynamic_field1').append('<tr id="row'+i+'" class="dynamic-added">'+
                                '<td>'+
                                '<div>'+
                                '<select name="dosen[]" style="width: 680px" placeholder="Pilih nama" id="dosen" required="required" >'+
                                    '<option></option>'+
                                    '@foreach($datas as $Dosen)'+
                                    '<option value="{{$Dosen->dosen_id}}" >{{$Dosen->nama}}</option>'+
                                    '@endforeach'+
                                '</select>'+                     
                                '</div>'+
                                '</td>'+
                        '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
 
      }); 

</script>
<script>
	$(function() {
    $( "#datepicker" ).datepicker();
  });
</script>
<script>
	$(document).ready(function(){
    $('input.timepicker').timepicker({});
});
</script>
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
<script>
	$(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });
</script>

@stop
