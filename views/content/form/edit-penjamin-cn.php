<div class="row">
	<div class="col-lg-12" id="wadah">
	<a href="javascript:void(0)" class="btn btn-dark btn-fw" id="backcn">
	<i class="mdi  mdi-keyboard-backspace"></i>Kembali
	</a><br><br>
		<div class="card">
			<div class="card-body">
			<div id="snackbar"></div>
				<div class="col-md-12">
					<div style="float:right;" id="s">
						<div><p>Status Verifikasi : <v class="text-primary" style="float: right;" id="verifnasabah"> Terverifikasi</v></p></div>
					</div>
				</div>
			 <h4 style="">Form Edit Penjamin</h4><hr><br>
				<div class="col-12 grid-margin">
					<div class="card">
						<div class="card-body">
							<form class="form-sample" id="form-edit-penjamin">
								<div id="form_penjamin">
									<b class="card-description">
									Personal Info Penjamin
									</b><br><br>
									<input type="hidden" name="verifikasi" id="verifikasi">
									<input type="hidden" name="id_calon_debitur" id="id_cd">
									<div class="row">
										<div class="col-md-12">
										  <div class="form-group row">
										    <label class="col-sm-2 col-form-label">Nomor Ktp</label>
										    <div class="col-sm-10">
										      <input type="number" class="form-control" name="no_ktp_penjamin" id="no_ktp_penjamin" style="margin-left: -5%; width: 105%;" placeholder="Masukan Nomor Ktp" / >
										    </div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
										  <div class="form-group row">
										    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" style="margin-left: -5%; width: 105%;" name="nama_lengkap_penjamin" id="nama_lengkap_penjamin" placeholder="Masuka Nama Lengkap" />
										    </div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Nama Identitas</label>
										    <div class="col-sm-9">
										      <input type="text" class="form-control" name="nama_identitas_penjamin" id="nama_identitas_penjamin" placeholder="Masukan Nama Identitas" />
										    </div>
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">NPWP</label>
										    <div class="col-sm-9">
										      <input type="number" class="form-control" name="npwp_penjamin" id="npwp_penjamin" placeholder="Masukan NPWP" />
										    </div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
										    <div class="col-sm-9">
										      <div id="opt-kelamin-penjamin"></div>
										    </div>
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Nomor KK</label>
										    <div class="col-sm-9">
										      <input class="form-control" type="number" name="no_kk_penjamin" id="no_kk_penjamin" placeholder="Masukan Nomor KK" />
										    </div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Tempat Lahir</label>
										    <div class="col-sm-9">
										      <input class="form-control" type="text" name="tempat_lahir_penjamin" id="tempat_lahir_penjamin" placeholder="Masukan Tempat Lahir" />
										    </div>
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-4 col-form-label">Kewarganegaraan</label>
										    <div class="col-sm-8">
										      <input type="text" name="kewarganegaraan_penjamin" id="kewarganegaraan_penjamin" class="form-control" value="INDONESIA" readonly>
										    </div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
										    <div class="col-sm-9">
										      <input class="form-control" type="text" placeholder="dd/mm/yyyy" name="tgl_lahir_penjamin" id="tgl_lahir_penjamin" />
										    </div>
										  </div>
										</div>
										 <div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Agama</label>
										    <div class="col-sm-9">
										    	<div id="opt-agama-penjamin"></div>
										  	</div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
										    <div class="col-sm-9">
										      <input type="text" class="form-control" name="nama_gadis_ibu_kandung_penjamin" id="nama_gadis_ibu_kandung_penjamin" placeholder="Masukan Nama Ibu Kandung" />
										    </div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Pekerjaan</label>
										    <div class="col-sm-9">
										      <input type="text" name="pekerjaan_penjamin" id="pekerjaan_penjamin" class="form-control" placeholder="Masukan Pekerjaan">
										    </div>
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Hubungan dengan debitur</label>
										    <div class="col-sm-9">
										      <input type="text" name="hub_debitur" id="hub_debitur" class="form-control" placeholder="Masukan hubungan dengan debitur">
										    </div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
											<label class="col-sm-3 col-form-label">Status Nikah Penjamin</label>
												<div class="col-sm-2">
													<div class="form-radio">
													    <input type="radio" class="form-check-input" name="status_nikah_penjamin" id="penjamin_kawin" value="KAWIN" checked> <p>Kawin</p>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-radio">
													    <input type="radio" class="form-check-input" name="status_nikah_penjamin" id="penjamin_belum_kawin" value="BELUM KAWIN"> <p>Belum Kawin</p>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-radio">
													    <input type="radio" class="form-check-input" name="status_nikah_penjamin" id="penjamin_cerai_hidup" value="CERAI HIDUP"> <p>Cerai Hidup</p>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-radio">
													    <input type="radio" class="form-check-input" name="status_nikah_penjamin" id="penjamin_cerai_mati" value="CERAI MATI"> <p>Cerai Mati</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
											<label class="col-sm-1 col-form-label">Alamat</label>
											<div class="col-sm-11">
											  <textarea class="form-control" name="alamat_penjamin" id="alamat_penjamin" placeholder="Masukan Alamat"></textarea>
											</div>
											</div>
										</div>
									</div>
									<div class="row">
									<div class="col-md-6">
									  <div class="form-group row">
									    <label class="col-sm-3 col-form-label">Provinsi</label>
									    <div class="col-sm-9">
											<div id="opt-propinsi-penjamin"></div>
										</div>
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="form-group row">
									    <label class="col-sm-3 col-form-label">Kota/Kab</label>
									    <div class="col-sm-9">
											<div id="opt-kotakab-penjamin"> - </div>
										</div>
									  </div>
									</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Kecamatan</label>
										    <div class="col-sm-9">
												<div id="opt-kecamatan-penjamin"> - </div>
											</div>
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Kelurahan</label>
										    <div class="col-sm-9">
												<div id="opt-kelurahan-penjamin"> - </div>
											</div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">RT</label>
										    <div class="col-sm-9">
										      <input type="number" name="rt_penjamin" id="rt_penjamin" class="form-control" placeholder="Masukan RT">
										    </div>
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">RW</label>
										    <div class="col-sm-9">
										      <input type="number" name="rw_penjamin" id="rw_penjamin" class="form-control"  placeholder="Masukan RW">
										    </div>
										  </div>
										</div>
									</div>
								</div><br>
							<button type="button" class="btn btn-primary btn-fw" id="simpan-edit-penjamin" style="width:100%;">Simpan perubahan pasangan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="lib/js/changedate.js"></script>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'
	var kantor_user = parseInt($('#session_kantor').val())
	var id_calon_debitur = $('#paramsID1').val()
	$('#load_page').val('false');

	$('#backcn').click(function () {
		$('#load_page').val('false');
		load()
		$('#app').load('views/content/data/data-c-nasabah.php');
	})

	$('#simpan-edit-penjamin').click(function () {
		var no_ktp_penjamin = true
		var nama_lengkap_penjamin = true
		var nama_identitas_penjamin = true
		var npwp_penjamin = true
		var kelamin_penjamin = true
		var no_kk_penjamin = true
		var tempat_lahir_penjamin = true
		var kewarganegaraan_penjamin = true
		var tgl_lahir_penjamin = true
		var agama_penjamin = true
		var nama_gadis_ibu_kandung_penjamin = true
		var pekerjaan_penjamin = true
		var hub_debitur = true
		var status_nikah_penjamin = true
		var alamat_penjamin = true
		var propinsi_penjamin = true
		var kabkota_penjamin = true
		var kecamatan_penjamin = true
		var kelurahan_penjamin = true
		var rt_penjamin = true
		var rw_penjamin = true

		no_ktp_penjamin = checkEmpty('input[name=no_ktp_penjamin]')
		nama_lengkap_penjamin = checkEmpty('input[name=nama_lengkap_penjamin]')
		nama_identitas_penjamin = checkEmpty('input[name=nama_identitas_penjamin]')
		npwp_penjamin = checkEmpty('input[name=npwp_penjamin]')
		kelamin_penjamin = checkSelect('select[name=kelamin_penjamin]')
		no_kk_penjamin = checkEmpty('input[name=no_kk_penjamin]')
		tempat_lahir_penjamin = checkEmpty('input[name=tempat_lahir_penjamin]')
		tgl_lahir_penjamin = checkEmpty('input[name=tgl_lahir_penjamin]')
		agama_penjamin = checkSelect('select[name=agama_penjamin]')
		nama_gadis_ibu_kandung_penjamin = checkEmpty('input[name=nama_gadis_ibu_kandung_penjamin]')
		pekerjaan_penjamin = checkEmpty('input[name=pekerjaan_penjamin]')
		hub_debitur = checkEmpty('input[name=hub_debitur]')
		alamat_penjamin = checkEmpty('textarea[name=alamat_penjamin]')
		propinsi_penjamin = checkSelect('select[name=propinsi_penjamin]')
		kabkota_penjamin = checkSelect('select[name=kabkota_penjamin]')
		kecamatan_penjamin = checkSelect('select[name=kecamatan_penjamin]')
		kelurahan_penjamin = checkSelect('select[name=kelurahan_penjamin]')
		rt_penjamin = checkEmpty('input[name=rt_penjamin]')
		rw_penjamin = checkEmpty('input[name=rw_penjamin]')

		if (no_ktp_penjamin && nama_lengkap_penjamin && nama_identitas_penjamin && npwp_penjamin && kelamin_penjamin && no_kk_penjamin && tempat_lahir_penjamin && tgl_lahir_penjamin && agama_penjamin && nama_gadis_ibu_kandung_penjamin && pekerjaan_penjamin && hub_debitur && alamat_penjamin && propinsi_penjamin && kabkota_penjamin && kecamatan_penjamin && kelurahan_penjamin && rt_penjamin && rw_penjamin) {
			editPenjamin()
		}
	})

	'use strict'
	function editPenjamin() {
		var data = $('#form-edit-penjamin').serialize();
		//console.log(data)
		$.ajax({
			type:'POST',
			url:url+'Home/save_edit_penjamin_nasabah',
			dataType:'JSON',
			data:data,
			beforeSend:function () {
				load()
				$('#simpan-edit-penjamin').prop('disabled',true)
				$('#simpan-edit-penjamin').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Sedang mengirim data . . .')
			},
			success:function(res) {
				if (res.msg == 'success') {
					$('#simpan-edit-penjamin').prop('disabled',false)
					$('#simpan-edit-penjamin').html('Simpan')
					$('#app').load('views/content/data/data-c-nasabah.php')
					swal({
		        title: "Sukses!",
		        text: "data berhasil diupdate!",
		        icon: "success"
			    });
				}
			},
			error:function (xhr, status, error) {
				console.log(xhr.responseText)
				$('#simpan-edit-penjamin').prop('disabled',false)
				$('#simpan-edit-penjamin').html('Simpan')
				if (xhr.status == 500) {
					swal({
						title:error,
						text:'Server bermasalah, periksa koneksi internet anda.',
						icon: "error",
						type: "error"
					});
				}
			}
		})
	}

	showDetailPasangan(id_calon_debitur)
	function showDetailPasangan(id_calon_debitur) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detail_penjamin/'+id_calon_debitur,
			dataType:'JSON',
			beforeSend:function() {
				$('input[type=text]').attr('disabled','true').val('Sedang mengambil data. . . ')
				$('input[type=number]').attr('disabled','true')
				$('input[type=email]').attr('disabled','true')
				$('#opt-kelamin-penjamin').html(loading)
				$('#opt-agama-penjamin').html(loading)
				$('#opt-propinsi-penjamin').html(loading)
			},
			success:function (data) {
				$('input[type=text]').removeAttr('disabled').val('')
				$('input[type=number]').removeAttr('disabled').val('')
				$('input[type=email]').removeAttr('disabled').val('')
				$.each(data,function (key,val) {
					$('#id_cd').val(val.id_calon_debitur)
					$('#verifikasi').val(val.verifikasi)
					if (val.status_nikah == 'KAWIN') {
						$('#penjamin_kawin').attr('checked',true)
					}else if (val.status_nikah == 'BELUM KAWIN') {
						$('#penjamin_belum_kawin').attr('checked',true)
					}else if (val.status_nikah == 'CERAI HIDUP') {
						$('#penjamin_cerai_hidup').attr('checked',true)
					}else if (val.status_nikah == 'CERAI MATI') {
						$('#penjamin_cerai_mati').attr('checked',true)
					}

					if (val.verifikasi == 1) {
						$('#no_ktp_penjamin').attr("readonly","")
						$('#npwp_penjamin').attr("readonly","")
						$('#no_kk_penjamin').attr("readonly","")
						$('#nama_gadis_ibu_kandung_penjamin').attr("readonly","")
						$('#tempat_lahir_penjamin').attr("readonly","")
						$('#tgl_lahir_penjamin').attr("readonly","")
						$('#hub_debitur').attr("readonly","")

						$('#tgl_lahir_penjamin').attr("type","text")
						$('#tgl_lahir_penjamin').val(changeDate(val.tgl_lahir))

						$('#verifnasabah').removeClass('text-danger')
						$('#verifnasabah').addClass('text-primary')
						var verifikasi = 'Terverifikasi'
					}else{
						$('#tgl_lahir_penjamin').attr("type","date")
						$('#tgl_lahir_penjamin').val(val.tgl_lahir)

						$('#verifnasabah').addClass('text-danger')
						$('#verifnasabah').removeClass('text-primary')
						var verifikasi = 'Belum terverifikasi'
					}
					$('#verifnasabah').html(verifikasi)
					$('#no_ktp_penjamin').val(val.no_ktp)
					$('#nama_lengkap_penjamin').val(val.nama_lengkap)
					$('#nama_identitas_penjamin').val(val.nama_identitas)
					$('#npwp_penjamin').val(val.npwp)
					kelamin (val.kelamin,val.verifikasi)
					$('#no_kk_penjamin').val(val.no_kk)
					$('#tempat_lahir_penjamin').val(val.tempat_lahir)
					$('#kewarganegaraan_penjamin').val(val.kewarganegaraan)
					getAgama(val.kode_agama)
					$('#nama_gadis_ibu_kandung_penjamin').val(val.nama_gadis_ibu_kandung)
					$('#pekerjaan_penjamin').val(val.pekerjaan)
					$('#hub_debitur').val(val.hubungan_debitur)
					$('#alamat_penjamin').val(val.alamat)
					getPropinsi(val.propinsi_id)
					getKabKota(val.kotakab_id,val.propinsi_id)
					getKecamatan(val.kecamatan_id,val.kotakab_id)
					getKelurahan(val.kelurahan_id,val.kecamatan_id)
					$('#rt_penjamin').val(val.rt)
					$('#rw_penjamin').val(val.rw)
				})
			},
			error:function (xhr, status, error) {
				console.log(xhr.responseText)
				if (xhr.status == 500) {
					swal({
							title:error,
							text:'Server bermasalah, periksa koneksi internet anda.',
							icon: "error",
							type: "error"
					});
				}
			}
		})
	}

	'use strict'
	function kelamin (kelamin,verifikasi) {
		var jenis_kelamin = ['L','P']
		var html = ''
		$.each(jenis_kelamin,function(k,v) {
			if (v == kelamin) {
				html += '<option value="'+v+'" selected>'+v+'</option>'
			}else{
				html += '<option value="'+v+'">'+v+'</option>'
			}
		})
			if (verifikasi == 1) {
				$('#opt-kelamin-penjamin').html('<input type="text" class="form-control" name="kelamin_penjamin" value="'+kelamin+'" readonly/>')
			}else{
				$('#opt-kelamin-penjamin').html('<select class="form-control" name="kelamin_penjamin"><option value="null">Pilih</Option>'+html+'</select>')
			}
	}

	'use strict'
	function getAgama(agama) {
		$.ajax({
			type:'GET',
			url:url+'Home/agama',
			dataType:'JSON',
			success:function(data){
				var html = ''
				$.each(data, function(index, value ) {
					if (value.kode_agama == agama) {
						html += '<option value="'+value.kode_agama+'" selected>'+value.DESKRIPSI+'</option>'
					}else{
						html += '<option value="'+value.kode_agama+'">'+value.DESKRIPSI+'</option>'
					}
				})
				$('#opt-agama-penjamin').html('<select class="form-control" name="agama_penjamin"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	$('#opt-propinsi-penjamin').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan-penjamin').html(' - ')
		$('#opt-kelurahan-penjamin').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota(null,propinsi_id)
	})

	'use strict'
	function getPropinsi(propinsi) {
		$.ajax({
			type:'GET',
			url:url+'Home/provinsi',
			dataType:'JSON',
			success:function(data){
				var html = ''
				$.each(data, function(index, value) {
					if (value.propinsi_id == propinsi) {
						html += '<option value="'+value.propinsi_id+'" selected>'+value.name+'</option>'
					}else{
						html += '<option value="'+value.propinsi_id+'">'+value.name+'</option>'
					}
				})
				$('#opt-propinsi-penjamin').html('<select class="form-control" name="propinsi_penjamin" id="selectPropinsi"><option value="null">Pilih</Option>'
				+html+
				'</select>')
			}
		})
	}

	$('#opt-kotakab-penjamin').on('change','#selectKabkota', function () {
		$('#opt-kelurahan-penjamin').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan(null,kotakab_id)
	})

	'use strict'
	function getKabKota(kotakab,propinsi_id) {
		$.ajax({
			type:'GET',
			url:url+'Home/kotakab/'+propinsi_id,
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-kotakab-penjamin').html(loading)
			},
			success:function(data){
				var html = ''
				$.each(data, function(index, value ) {
					if (value.kotakab_id == kotakab) {
						html += '<option value="'+value.kotakab_id+'" selected>'+value.name+'</option>'
					}else{
						html += '<option value="'+value.kotakab_id+'">'+value.name+'</option>'
					}
				})
					$('#opt-kotakab-penjamin').html('<select class="form-control" name="kabkota_penjamin" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	$('#opt-kecamatan-penjamin').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan(null,kecamatan_id)
	})

	'use strict'
	function getKecamatan(kecamatan,kotakab_id) {
		$.ajax({
			type:'GET',
			url:url+'Home/kecamatan/'+kotakab_id,
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-kecamatan-penjamin').html(loading)
			},
			success:function(data){
				var html = ''
				$.each(data, function(index, value ) {
					if (value.kecamatan_id == kecamatan) {
						html += '<option value="'+value.kecamatan_id+'" selected>'+value.name+'</option>'
					}else{
						html += '<option value="'+value.kecamatan_id+'">'+value.name+'</option>'
					}
				})
				$('#opt-kecamatan-penjamin').html('<select class="form-control" name="kecamatan_penjamin" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	'use strict'
	function getKelurahan(kelurahan,kecamatan_id) {
		$.ajax({
			type:'GET',
			url:url+'Home/kelurahan/'+kecamatan_id,
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-kelurahan-penjamin').html(loading)
			},
			success:function(data){
				var html = ''
				$.each(data, function(index, value ) {
					if (value.kelurahan_id == kelurahan) {
						html += '<option value="'+value.kelurahan_id+'" selected>'+value.name+'</option>'
					}else{
						html += '<option value="'+value.kelurahan_id+'">'+value.name+'</option>'
					}
				})
				$('#opt-kelurahan-penjamin').html('<select class="form-control" name="kelurahan_penjamin" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	'use strict'
	function load(){
		var elem = document.getElementById("myBar");
		var width = 1;
		var id = setInterval(frame, 10);
		function frame() {
		    if (width >= 100) {
		        clearInterval(id);
		    } else {
		        width++;
		        elem.style.width = width + '%';
		    }
		}
	}

	'use strict'
	function checkEmpty(obj) {
		$(obj).css("border","")
		if($(obj).val() == "") {
			$(obj).css("border","#FF0000 1px solid")
			toastNotvalid('Periksa kembali dan mohon lengkapi form !!')
			return false;
		}
		return true;
	}

	'use strict'
	function checkSelect(obj) {
	$(obj).css("border","")
	if($(obj).val() == "null") {
		$(obj).css("border","#FF0000 1px solid")
		toastNotvalid('Periksa kembali dan mohon lengkapi form !!')
	return false;
	}
	return true;
	}

	'use strict'
	function toastNotvalid(title) {
		$('#snackbar').html(title)
	    var x = document.getElementById("snackbar")
	    x.className = "show"
	    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)
	}

})
</script>
