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
			 <h4 style="">Form Edit pasangan</h4><hr><br>
				<div class="col-12 grid-margin">
					<div class="card">
						<div class="card-body">
							<form class="form-sample" id="form-edit-pasangan">
								<div id="form_pasangan">
										<b class="card-description">
										Personal Info Pasangan
										</b><br><br>
										<input type="hidden" name="verifikasi" id="verifikasi">
										<input type="hidden" name="id_calon_debitur" id="id_cd">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Nomor Ktp</label>
													<div class="col-sm-9">
														<input type="number" class="form-control" name="no_ktp_pasangan" placeholder="Masukan Nomor Ktp" id="no_ktp_pasangan"/>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">NPWP</label>
													<div class="col-sm-9">
														<input type="number" class="form-control" name="npwp_pasangan" id="npwp_pasangan" placeholder="Masukan NPWP" />
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Nomor KK</label>
													<div class="col-sm-9">
														<input class="form-control" type="number" name="no_kk_pasangan" id="no_kk_pasangan" placeholder="Masukan Nomor KK" />
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Nama Lengkap</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="nama_lengkap_pasangan" id="nama_lengkap_pasangan" placeholder="Masuka Nama Lengkap Sesuai KTP" style="margin-left:-5%;width:105%;"/>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Nama Identitas</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="nama_identitas_pasangan" id="nama_identitas_pasangan" placeholder="Masuka Nama Lengkap" />
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Nama panggilan</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="nama_panggilan_pasangan" id="nama_panggilan_pasangan" placeholder="Masukan Nama Identitas" />
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="nama_gadis_ibu_kandung_pasangan" id="nama_gadis_ibu_kandung_pasangan" placeholder="Masukan Nama Ibu Kandung" />
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
													<div class="col-sm-9">
														<div id="opt-kelamin"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Tempat lahir</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="tempat_lahir_pasangan" id="tempat_lahir_pasangan" placeholder="Masukan Tempat lahir" />
													</div>
												</div>
											</div>
											 <div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Agama</label>
													<div class="col-sm-9">
															<div id="opt-agama-pasangan"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
												<div class="col-sm-9">
													<input class="form-control" type="text" placeholder="dd/mm/yyyy" name="tgl_lahir_pasangan" id="tgl_lahir_pasangan" />
												</div>
											</div>
										</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Kewarganegaraan</label>
												<div class="col-sm-9">
													<input class="form-control" type="text" placeholder="Kewarganegaraan" name="kewarganegaraan_pasangan" id="kewarganegaraan_pasangan" value="INDONESIA" readonly />
												</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Pekerjaan</label>
												<div class="col-sm-9">
													<input class="form-control" type="text" placeholder="Pekerjaan" name="pekerjaan_pasangan" id="pekerjaan_pasangan" />
												</div>
												</div>
											</div>
										</div>
						        <div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
													<div class="col-sm-9">
														<div id="opt-pendidikan-pasangan"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Sumber Penghasilan</label>
													<div class="col-sm-9">
														<div id="opt-sumber-penghasilan-pasangan"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Telp Rumah</label>
													<div class="col-sm-9">
														<input class="form-control" type="number" placeholder="telp rumah" name="telp_rumah_pasangan" id="telp_rumah_pasangan" />
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Telp Kantor</label>
													<div class="col-sm-9">
														<input class="form-control" type="number" placeholder="telp kantor" name="telp_kantor_pasangan" id="telp_kantor_pasangan" />
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Telp Handphone</label>
													<div class="col-sm-9">
														<input class="form-control" type="number" placeholder="telp hp" name="telp_hp_pasangan" id="telp_hp_pasangan" />
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Email</label>
													<div class="col-sm-9">
														<input class="form-control" type="email" placeholder="Email" name="email_pasangan" id="email_pasangan" />
													</div>
												</div>
											</div>
										</div>
										<br>
		              	<h5>ALamat KTP </h5><hr><br>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-1 col-form-label">Alamat</label>
													<div class="col-sm-11">
														<textarea class="form-control" name="alamat_pasangan" id="alamat_pasangan" placeholder="Masukan Alamat"></textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Provinsi</label>
													<div class="col-sm-9">
														<div id="opt-propinsi-pasangan"></div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Kota/Kab</label>
													<div class="col-sm-9">
														<div id="opt-kotakab-pasangan"> - </div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Kecamatan</label>
													<div class="col-sm-9">
														<div id="opt-kecamatan-pasangan"> - </div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Kelurahan</label>
													<div class="col-sm-9">
															<div id="opt-kelurahan-pasangan"> - </div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">RT</label>
													<div class="col-sm-9">
														<input type="number" name="rt_pasangan" id="rt_pasangan" class="form-control" placeholder="Masukan RT">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">RW</label>
													<div class="col-sm-9">
														<input type="number" name="rw_pasangan" id="rw_pasangan" class="form-control"  placeholder="Masukan RW"> 
													</div>
												</div>
											</div>
										</div>
										<br>
										<h5>ALamat Domisili </h5><hr><br>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-1 col-form-label">Alamat</label>
													<div class="col-sm-11">
														<textarea class="form-control" name="alamat_dom_pasangan" id="alamat_dom_pasangan" placeholder="Masukan Alamat"></textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Provinsi</label>
													<div class="col-sm-9">
														<div id="opt-propinsi-dom-pasangan"></div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Kota/Kab</label>
													<div class="col-sm-9">
														<div id="opt-kotakab-dom-pasangan"> - </div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Kecamatan</label>
													<div class="col-sm-9">
														<div id="opt-kecamatan-dom-pasangan"> - </div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Kelurahan</label>
													<div class="col-sm-9">
															<div id="opt-kelurahan-dom-pasangan"> - </div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">RT</label>
													<div class="col-sm-9">
														<input type="number" name="rt_dom_pasangan" id="rt_dom_pasangan" class="form-control" placeholder="Masukan RT">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">RW</label>
													<div class="col-sm-9">
														<input type="number" name="rw_dom_pasangan" id="rw_dom_pasangan" class="form-control"  placeholder="Masukan RW"> 
													</div>
												</div>
											</div>
										</div>
								</div></div></div>
							<button type="button" class="btn btn-primary btn-fw" id="simpan-edit-pasangan" style="width:100%;">Simpan perubahan pasangan</button>
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

	$('#simpan-edit-pasangan').click(function () {
		var no_ktp_pasangan = true
		var nama_lengkap_pasangan = true
		var nama_identitas_pasangan = true
		var nama_panggilan_pasangan = true
		var npwp_pasangan = true
		var kelamin_pasangan = true
		var no_kk_pasangan = true
		var tempat_lahir_pasangan = true
		var kewarganegaraan_pasangan = true
		var tgl_lahir_pasangan = true
		var agama_pasangan = true
		var nama_gadis_ibu_kandung_pasangan = true
		var jenis_debitur_pasangan = true
		var pekerjaan_pasangan = true
		var pen_terakhir_pasangan = true
		var sumber_peng_pasangan = true
		var telp_rumah_pasangan = true
		var telp_kantor_pasangan = true
		var telp_hp_pasangan = true
		var alamat_pasangan = true
		var propinsi_pasangan = true
		var kabkota_pasangan = true
		var kelurahan_pasangan = true
		var kecamatan_penjamin = true
		var rt_pasangan = true
		var rw_pasangan = true
		var alamat_dom_pasangan = true
		var propinsi_dom_pasangan = true
		var kabkota_dom_pasangan = true
		var kelurahan_dom_pasangan = true
		var kecamatan_dom_penjamin = true
		var rt_dom_pasangan = true
		var rw_dom_pasangan = true

		no_ktp_pasangan = checkEmpty('input[name=no_ktp_pasangan]')
		nama_lengkap_pasangan = checkEmpty('input[name=nama_lengkap_pasangan]')
		nama_identitas_pasangan = checkEmpty('input[name=nama_identitas_pasangan]')
		nama_panggilan_pasangan = checkEmpty('input[name=nama_panggilan_pasangan]')
		npwp_pasangan = checkEmpty('input[name=npwp_pasangan]')
		kelamin_pasangan = checkSelect('select[name=kelamin_pasangan]')
		no_kk_pasangan = checkEmpty('input[name=no_kk_pasangan]')
		tempat_lahir_pasangan = checkEmpty('input[name=tempat_lahir_pasangan]')
		tgl_lahir_pasangan = checkEmpty('input[name=tgl_lahir_pasangan]')
		agama_pasangan = checkSelect('select[name=agama_pasangan]')
		nama_gadis_ibu_kandung_pasangan = checkEmpty('input[name=nama_gadis_ibu_kandung_pasangan]')
		jenis_debitur_pasangan = checkSelect('select[name=jenis_debitur_pasangan]')
		pekerjaan_pasangan = checkEmpty('input[name=pekerjaan_pasangan]')
		pen_terakhir_pasangan = checkSelect('select[name=pen_terakhir_pasangan]')
		sumber_peng_pasangan = checkSelect('select[name=sumber_peng_pasangan]')
		telp_rumah_pasangan = checkEmpty('input[name=telp_rumah_pasangan]')
		telp_kantor_pasangan = checkEmpty('input[name=telp_kantor_pasangan]')
		telp_hp_pasangan = checkEmpty('input[name=telp_hp_pasangan]')
		alamat_pasangan = checkEmpty('textarea[name=alamat_pasangan]')
		propinsi_pasangan = checkSelect('select[name=propinsi_pasangan]')
		kabkota_pasangan = checkSelect('select[name=kabkota_pasangan]')
		kelurahan_pasangan = checkSelect('select[name=kelurahan_pasangan]')
		kecamatan_penjamin = checkSelect('select[name=kecamatan_penjamin]')
		rt_pasangan = checkEmpty('input[name=rt_pasangan]')
		rw_pasangan = checkEmpty('input[name=rw_pasangan]')
		alamat_dom_pasangan = checkEmpty('textarea[name=alamat_dom_pasangan]')
		propinsi_dom_pasangan = checkSelect('select[name=propinsi_dom_pasangan]')
		kabkota_dom_pasangan = checkSelect('select[name=kabkota_dom_pasangan]')
		kelurahan_dom_pasangan = checkSelect('select[name=kelurahan_dom_pasangan]')
		kecamatan_dom_penjamin = checkSelect('select[name=kecamatan_dom_penjamin]')
		rt_dom_pasangan = checkEmpty('input[name=rt_dom_pasangan]')
		rw_dom_pasangan = checkEmpty('input[name=rw_dom_pasangan]')

		if (no_ktp_pasangan && nama_lengkap_pasangan && nama_identitas_pasangan && nama_panggilan_pasangan && npwp_pasangan && kelamin_pasangan && no_kk_pasangan && tempat_lahir_pasangan && tgl_lahir_pasangan && agama_pasangan && nama_gadis_ibu_kandung_pasangan && jenis_debitur_pasangan && pekerjaan_pasangan && pen_terakhir_pasangan && sumber_peng_pasangan && telp_rumah_pasangan && telp_kantor_pasangan && telp_hp_pasangan && alamat_pasangan && propinsi_pasangan && kabkota_pasangan && kelurahan_pasangan && kecamatan_penjamin && rt_pasangan && rw_pasangan && alamat_dom_pasangan && propinsi_dom_pasangan && kabkota_dom_pasangan && kelurahan_dom_pasangan && kecamatan_dom_penjamin && rt_dom_pasangan &&rw_dom_pasangan) {
			editPasangan()
		}
	})

	'use strict'
	function editPasangan() {
		var data = $('#form-edit-pasangan').serialize();
		$.ajax({
			type:'POST',
			url:url+'Home/save_edit_pasangan_nasabah',
			dataType:'JSON',
			data:data,
			beforeSend:function () {
				load()
				$('#simpan-edit-pasangan').prop('disabled',true)
				$('#simpan-edit-pasangan').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Sedang mengirim data . . .')
			},
			success:function(res) {
				console.log(res)
				if (res.msg == 'success') {
					$('#simpan-edit-pasangan').prop('disabled',false)
					$('#simpan-edit-pasangan').html('Simpan')
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
				$('#simpan-edit-pasangan').prop('disabled',false)
				$('#simpan-edit-pasangan').html('Simpan')
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
			url:url+'Home/get_detail_pasangan/'+id_calon_debitur,
			dataType:'JSON',
			beforeSend:function() {
				$('input[type=text]').attr('disabled','true').val('Sedang mengambil data. . . ')
				$('input[type=number]').attr('disabled','true')
				$('input[type=email]').attr('disabled','true')
				$('#opt-kelamin').html(loading)
				$('#opt-agama-pasangan').html(loading)
				$('#opt-pendidikan-pasangan').html(loading)
				$('#opt-sumber-penghasilan-pasangan').html(loading)
				$('#opt-propinsi-pasangan').html(loading)
				$('#opt-propinsi-dom-pasangan').html(loading)
			},
			success:function (data) {
				$('input[type=text]').removeAttr('disabled').val('')
				$('input[type=number]').removeAttr('disabled').val('')
				$('input[type=email]').removeAttr('disabled').val('')
				$.each(data,function (key,val) {
					$('#id_cd').val(val.id_calon_debitur)
					$('#verifikasi').val(val.verifikasi)
					if (val.verifikasi == 1) {
						$('#no_ktp_pasangan').attr("readonly","")
						$('#npwp_pasangan').attr("readonly","")
						$('#no_kk_pasangan').attr("readonly","")
						$('#nama_gadis_ibu_kandung_pasangan').attr("readonly","")
						$('#tempat_lahir_pasangan').attr("readonly","")
						$('#tgl_lahir_pasangan').attr("readonly","")
						$('#tgl_lahir_pasangan').attr("type","text")
						$('#tgl_lahir_pasangan').val(changeDate(val.tgl_lahir))

						$('#verifnasabah').removeClass('text-danger')
						$('#verifnasabah').addClass('text-primary')
						var verifikasi = 'Terverifikasi'
					}else{
						$('#tgl_lahir_pasangan').attr("type","date")
						$('#tgl_lahir_pasangan').val(val.tgl_lahir)

						$('#verifnasabah').addClass('text-danger')
						$('#verifnasabah').removeClass('text-primary')
						var verifikasi = 'Belum terverifikasi'
					}
					$('#verifnasabah').html(verifikasi)
					$('#no_ktp_pasangan').val(val.no_ktp)
					$('#npwp_pasangan').val(val.npwp)
					$('#no_kk_pasangan').val(val.no_kk)
					$('#nama_lengkap_pasangan').val(val.nama_lengkap)
					$('#nama_identitas_pasangan').val(val.nama_identitas)
					$('#nama_panggilan_pasangan').val(val.nama_panggilan)
					$('#nama_gadis_ibu_kandung_pasangan').val(val.nama_gadis_ibu_kandung)
					kelamin(val.kelamin,val.verifikasi)
					$('#tempat_lahir_pasangan').val(val.tempat_lahir)
					getAgama(val.kode_agama)
					$('#kewarganegaraan_pasangan').val(val.kewarganegaraan)
					$('#pekerjaan_pasangan').val(val.pekerjaan)
					getPendidikan(val.pendidikan)
					getsumberPenghasilan(val.sumber_penghasilan)
					$('#telp_rumah_pasangan').val(val.telp_rumah)
					$('#telp_kantor_pasangan').val(val.telp_kantor)
					$('#telp_hp_pasangan').val(val.telp_hp)
					$('#email_pasangan').val(val.email)
					$('#alamat_pasangan').val(val.alamat)
					getPropinsi('alamat',val.propinsi_id)
					getKabKota('alamat',val.kotakab_id,val.propinsi_id)
					getKecamatan('alamat',val.kecamatan_id,val.kotakab_id)
					getKelurahan('alamat',val.kelurahan_id,val.kecamatan_id)
					$('#rt_pasangan').val(val.rt)
					$('#rw_pasangan').val(val.rw)
					$('#alamat_dom_pasangan').val(val.domisili_alamat)
					getPropinsi('alamat-dom',val.domisili_propinsi_id)
					getKabKota('alamat-dom',val.domisili_kotakab_id,val.domisili_propinsi_id)
					getKecamatan('alamat-dom',val.domisili_kecamatan_id,val.domisili_kotakab_id)
					getKelurahan('alamat-dom',val.domisili_kelurahan_id,val.domisili_kecamatan_id)
					$('#rt_dom_pasangan').val(val.domisili_rt)
					$('#rw_dom_pasangan').val(val.domisili_rw)
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
				$('#opt-kelamin').html('<input type="text" class="form-control" name="kelamin_cn" value="'+kelamin+'" readonly/>')
			}else{
				$('#opt-kelamin').html('<select class="form-control" name="kelamin_cn"><option value="null">Pilih</Option>'+html+'</select>')
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
				$('#opt-agama-pasangan').html('<select class="form-control" name="agama_pasangan"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	'use strict'
	function getPendidikan(pendidikan) {
		$.ajax({
			type:'GET',
			url:url+'Home/pendidikan',
			dataType:'JSON',
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					if (pendidikan == value.kode_pendidikan) {
						html += '<option value="'+value.kode_pendidikan+'" selected>'+value.nama_pendidikan+'</option>'
					}else{
						html += '<option value="'+value.kode_pendidikan+'">'+value.nama_pendidikan+'</option>'
					}
				})
				$('#opt-pendidikan-pasangan').html('<select class="form-control" name="pen_terakhir_pasangan"><option value="null">Pilih</option>'+html+'</select>')
			},
			error:function (xhr, status, error) {
				console.log(xhr.status)
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
	function getsumberPenghasilan(penghasilan) {
		$.ajax({
			type:'GET',
			url:url+'Home/sumberPenghasilan',
			dataType:'JSON',
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					if (penghasilan == value.kode_sumber_penghasilan) {
						html += '<option value="'+value.kode_sumber_penghasilan+'" selected>'+value.desk_sumber_penghasilan+'</option>'
					}else{
						html += '<option value="'+value.kode_sumber_penghasilan+'">'+value.desk_sumber_penghasilan+'</option>'
					}
				})
				$('#opt-sumber-penghasilan-pasangan').html('<select class="form-control" name="sumber_peng_pasangan"><option value="null">Pilih</option>'+html+'</select>')
			},
			error:function (xhr, status, error) {
				console.log(xhr.status)
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

	$('#opt-propinsi-pasangan').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan-pasangan').html(' - ')
		$('#opt-kelurahan-pasangan').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota('alamat',null,propinsi_id)
	})

	$('#opt-propinsi-dom-pasangan').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan-dom-pasangan').html(' - ')
		$('#opt-kelurahan-dom-pasangan').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota('alamat-dom',null,propinsi_id)
	})

	'use strict'
	function getPropinsi(status,propinsi) {
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
				//console.log(html)
			})

			if (status == 'alamat') {
				$('#opt-propinsi-pasangan').html('<select class="form-control" name="propinsi_pasangan" id="selectPropinsi"><option value="null">Pilih</Option>'
				+html+
				'</select>')
			}else if (status == 'alamat-dom') {
				$('#opt-propinsi-dom-pasangan').html('<select class="form-control" name="propinsi_dom_pasangan" id="selectPropinsi"><option value="null">Pilih</Option>'
				+html+
				'</select>')
			}
		}
		})
	}

	$('#opt-kotakab-pasangan').on('change','#selectKabkota', function () {
		$('#opt-kelurahan-pasangan').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan('alamat',null,kotakab_id)
	})

	$('#opt-kotakab-dom-pasangan').on('change','#selectKabkota', function () {
		$('#opt-kelurahan-dom-pasangan').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan('alamat-dom',null,kotakab_id)
	})

	'use strict'
	function getKabKota(status,kotakab,propinsi_id) {
		$.ajax({
		type:'GET',
		url:url+'Home/kotakab/'+propinsi_id,
		dataType:'JSON',
		beforeSend:function () {
			if (status == 'alamat') {
				$('#opt-kotakab-pasangan').html(loading)
			}else if(status == 'alamat-dom' ){
				$('#opt-kotakab-dom-pasangan').html(loading)
			}
		},
		success:function(data){
			//console.log(data)
			var html = ''
			$.each(data, function(index, value ) {
				if (value.kotakab_id == kotakab) {
					html += '<option value="'+value.kotakab_id+'" selected>'+value.name+'</option>'
				}else{
					html += '<option value="'+value.kotakab_id+'">'+value.name+'</option>'
				}
				//console.log(html)
			})
			if (status == 'alamat') {
				$('#opt-kotakab-pasangan').html('<select class="form-control" name="kabkota_pasangan" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
			}else if(status == 'alamat-dom' ){
				$('#opt-kotakab-dom-pasangan').html('<select class="form-control" name="kabkota_dom_pasangan" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
			}
		}
		})
	}

	$('#opt-kecamatan-pasangan').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan('alamat',null,kecamatan_id)
	})

	$('#opt-kecamatan-dom-pasangan').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan('alamat-dom',null,kecamatan_id)
	})

	'use strict'
	function getKecamatan(status,kecamatan,kotakab_id) {
		$.ajax({
			type:'GET',
			url:url+'Home/kecamatan/'+kotakab_id,
			dataType:'JSON',
			beforeSend:function () {
				if (status == 'alamat') {
					$('#opt-kecamatan-pasangan').html(loading)
				}else if(status == 'alamat-dom' ){
					$('#opt-kecamatan-dom-pasangan').html(loading)
				}
			},
			success:function(data){
				//console.log(data)
				var html = ''
				$.each(data, function(index, value ) {
					if (value.kecamatan_id == kecamatan) {
						html += '<option value="'+value.kecamatan_id+'" selected>'+value.name+'</option>'
					}else{
						html += '<option value="'+value.kecamatan_id+'">'+value.name+'</option>'
					}
				})
				if (status == 'alamat') {
					$('#opt-kecamatan-pasangan').html('<select class="form-control" name="kecamatan_pasangan" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if(status == 'alamat-dom' ){
					$('#opt-kecamatan-dom-pasangan').html('<select class="form-control" name="kecamatan_dom_pasangan" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
				}
			}
		})
	}

	'use strict'
	function getKelurahan(status,kelurahan,kecamatan_id) {
		$.ajax({
			type:'GET',
			url:url+'Home/kelurahan/'+kecamatan_id,
			dataType:'JSON',
			beforeSend:function () {
				if (status == 'alamat') {
					$('#opt-kelurahan-pasangan').html(loading)
				}else if(status == 'alamat-dom' ){
					$('#opt-kelurahan-dom-pasangan').html(loading)
				}
			},
			success:function(data){
				//console.log(data)
				var html = ''
				$.each(data, function(index, value ) {
					if (value.kelurahan_id == kelurahan) {
						html += '<option value="'+value.kelurahan_id+'" selected>'+value.name+'</option>'
					}else{
						html += '<option value="'+value.kelurahan_id+'">'+value.name+'</option>'
					}
				})
				if (status == 'alamat') {
					$('#opt-kelurahan-pasangan').html('<select class="form-control" name="kelurahan_pasangan" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if(status == 'alamat-dom' ){
					$('#opt-kelurahan-dom-pasangan').html('<select class="form-control" name="kelurahan_dom_pasangan" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
				}
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
			toastNotvalid('Tidak Boleh kosong !!')
			return false;
		}
		return true;
	}

	'use strict'
	function checkSelect(obj) {
	$(obj).css("border","")
	if($(obj).val() == "null") {
		$(obj).css("border","#FF0000 1px solid")
		toastNotvalid('Tidak Boleh kosong !!')
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
