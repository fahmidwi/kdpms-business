<div class="row">
	<div class="col-lg-12">
	<?php include '../component/header-back.php'; ?>
		<div class="card">
			<div class="card-body">
			<h4>
				<a href="javascript:void(0)" class="Buttoggle"><i class="mdi mdi-dots-horizontal" style="float:right;"></i></a>
				<a href="javascript:void(0)" id="tab_data_calon" style="text-decoration: none;color:black;">Calon Nasabah </a>&nbsp;|
				<a href="javascript:void(0)" id="tab_data_pasangan" style="text-decoration: none;color:black;">Pasangan </a>&nbsp;|
				<a href="javascript:void(0)" id="tab_data_penjamin" style="text-decoration: none;color:black;">Penjamin</a>
			</h4><hr>
				<div class="col-12 grid-margin" id="conCnasabah">
				<div class="col-md-12">
					<div style="float:right;" id="s">
						<div><p>Status Verifikasi : <v class="text-primary" style="float: right;" id="verifnasabah">Terverifikasi</v></p></div>
						<div><p>Tanggal Registrasi : <v style="float: right;" id="tglverif"> &nbsp;&nbsp;</v></p></div>
						<div id="but"></div>
					</div>
				</div>
					<div class="card">
						<div class="card-body" id="data_c_nasabah">
							<form class="form-sample">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Kantor</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="nama_kantor_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama area kerja</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="nama_area_kerja_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Ao</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="nama_ao_cn">
												</div>
											</div>
									</div>
								</div>
								<b class="card-description">
									Personal Info calon nasabah
								</b><br><br>
								<div class="row">
									<!-- <div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Lengkap</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="nama_lengkap_cn">
												</div>
											</div>
										</div>
									</div> -->
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Identitas</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="nama_identitas_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Panggilan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="nama_panggilan_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nomor Ktp</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="no_ktp_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">NPWP</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="no_npwp_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="jenis_kelamin_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nomor KK</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="no_kk_cn">
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tempat lahir</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="tempat_lahir__cn">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="tanggal_lahir_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kewarganegaraan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="negara_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Sumber Penghasilan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="sum_penghasilan_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="ibu_cn">
												</div>
											</div>
										</div>
									</div>
								 <div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jenis Debitur</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="jenis_deb_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Status Nikah</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="stat_nikah_cn">
												</div>
											</div>
										</div>
									</div>
									 <div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Agama</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="agama_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pekerjaan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="pekerjaan_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pendidikan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="pendidikan_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Status Kepemilikan Rumah</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="kepemilikan_rumah_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tinggal sejak</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="tinggal_sejak_cn">
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jumlah kepemilikan tanah  & bangunan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="jum_kep_tb_cn">
												</div>
											</div>
										</div>
									</div> -->
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jumlah kendaraan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="jum_kendaraan_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Alamat</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="alamat_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Telpon Rumah</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="telp_rumah">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Telpon Kantor</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="telp_kantor">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Telpon handphone</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="telp_hp">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Alamat Domisili</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="alamat_dom_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Email</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="email_cn">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Krabat</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="nama_kerabat">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Hubungan krabat dengan calon</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="hubungan_dengan_calon">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">No telp Krabat</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="no_telp_kerabat">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Alamat Krabat</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="alamat_kerabat">
												</div>
											</div>
										</div>
									</div>
								</div>
								</div>
							</form>
						</div>
						<div class="card-body" id="data_pasangan">
							<form class="form-sample">
								<b class="card-description">
									Personal Info Pasangan
								</b><br><br>
								<div class="row">
									<!-- <div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Lengkap</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="nama_lengkap_pasangan">
												</div>
											</div>
										</div>
									</div> -->
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Identitas</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="nama_identitas_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Panggilan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="nama_panggilan_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nomor Ktp</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="no_ktp_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">NPWP</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="no_npwp_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="jenis_kelamin_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nomor KK</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="no_kk_pasangan">
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tempat lahir</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="tempat_lahir_pasangan">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="tanggal_lahir_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kewarganegaraan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="negara_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Sumber Penghasilan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="sum_penghasilan_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="ibu_pasangan">
												</div>
											</div>
										</div>
									</div>
									 <div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Agama</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="agama_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pekerjaan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="pekerjaan_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pendidikan terakhir</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="pendidikan_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Alamat</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="alamat_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Telpon Rumah</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="telp_rum_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Telpon Kantor</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="telp_kant_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Telpon handphone</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="telp_hp_pasangan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Alamat Domisili</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="alamat_dom_pasangan">
												</div>
											</div>
										</div>
									</div>
								</div>
								</div>
							</form>
						</div>
						<div class="card-body" id="data_penjamin">
							<form class="form-sample">
								<b class="card-description">
									Personal Info Penjamin
								</b><br><br>
								<div class="row">
									<!-- <div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Lengkap</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="nama_lenkap_penjamin">
												</div>
											</div>
										</div>
									</div> -->
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Identitas</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="identitas_penjamin">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nomor Ktp</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="no_ktp_penjamin">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">NPWP</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="npwp_penjamin">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="kelamin_penjamin">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nomor KK</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="no_kk_penjamin">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Hubungan Debitur</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="hubungan_deb_penjamin">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Status nikah</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="status_nikah_penjamin">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tempat lahir</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="temmpat_lahir_penjamin">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="tgl_lahir_penjamin">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kewarganegaraan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="kewarganegaraan_penjamin">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="ibu_penjamin">
												</div>
											</div>
										</div>
									</div>
									 <div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Agama</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="agama_penjamin">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pekerjaan</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="pekerjaan_penjamin">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Alamat</label>
											<div class="col-sm-9" style="border-bottom: 1px solid grey">
												<div id="alamat_penjamin">
												</div>
											</div>
										</div>
									</div>
								</div>
								</div>
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
		var id_calon_debitur = $('#paramsID1').val()
		$('#load_page').val('false');
		$('#title-header').html('Detail calon Nasabah')

		$('#backcn').click(function () {
			$('#load_page').val('false');
			load()
			$('#tamplate').val('views/content/data/data-c-nasabah.php');
			$('#app').load('views/content/data/data-c-nasabah.php');
		})

		$('#but').on('click', '#buttonVerifCNasabah', function () {
			swal({
				title: "Verifikasi Calon nasabah?",
				text: "pastikan data sudah di cek terlebih dahulu",
				icon: "info",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						type:'GET',
						url:url+'Home/verifikasi_calon_nasabah/'+id_calon_debitur,
						dataType:'JSON',
						beforeSend:function () {
							load()
							$('#buttonVerifCNasabah').val(loading+" Sedang verifikasi . . .")
							swal({
								text:'Sedang verifikasi nasabah . . .',
								buttons: false,
								closeModal: false,
							})
						},success:function (res) {
							if (res.msg == 'success') {
								swal({
									text:'Calon Nasabah terverifikasi',
									icon:'success',
									timer:2000,
									buttons: false,
								})
								$('#app').load('views/content/data/detail-c-nasabah.php');
							}else{
								swal({
											title: "Warning!",
											text: "data gagal di verifikasi!",
											icon: "danger"
									});
							}
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
				} else {
					swal({
						text:'Verifikasi dibatalkan',
						timer:1000,
						buttons: false
					})
				}
			});
		})

		$('.Buttoggle').click(function () {
			$('#conCnasabah').toggle()
		})

		$('#data_pasangan').hide()
		$('#data_penjamin').hide()
		$('#tab_data_calon').addClass('link-active')

		$('#tab_data_calon').click(function (argument) {
			$(this).addClass('link-active')
			$('#tab_data_pasangan').removeClass('link-active')
			$('#tab_data_penjamin').removeClass('link-active')
			$('#conCnasabah').show()
			$('#data_c_nasabah').show()
			$('#data_pasangan').hide()
			$('#data_penjamin').hide()
		})

		$('#tab_data_pasangan').click(function (argument) {
			$(this).addClass('link-active')
			$('#tab_data_calon').removeClass('link-active')
			$('#tab_data_penjamin').removeClass('link-active')
			$('#conCnasabah').show()
			$('#data_pasangan').show()
			$('#data_penjamin').hide()
			$('#data_c_nasabah').hide()
		})

		$('#tab_data_penjamin').click(function (argument) {
			$(this).addClass('link-active')
			$('#tab_data_calon').removeClass('link-active')
			$('#tab_data_pasangan').removeClass('link-active')
			$('#conCnasabah').show()
			$('#data_penjamin').show()
			$('#data_pasangan').hide()
			$('#data_c_nasabah').hide()
		})

		showDetail(id_calon_debitur)
		showDetailPasangan(id_calon_debitur)
		showDetailPenjamin(id_calon_debitur)
		function showDetail(id_calon_debitur) {
			$.ajax({
				type:'GET',
				url:url+'Home/get_detail_calon_nasabah/'+id_calon_debitur,
				dataType:'JSON',
				beforeSend:function () {
					$('v').html(loading)
					$('#nama_kantor_cn').html(loading)
					$('#nama_area_kerja_cn').html(loading)
					$('#nama_ao_cn').html(loading)
					$('#nama_lengkap_cn').html(loading)
					$('#nama_identitas_cn').html(loading)
					$('#nama_panggilan_cn').html(loading)
					$('#no_ktp_cn').html(loading)
					$('#no_npwp_cn').html(loading)
					$('#jenis_kelamin_cn').html(loading)
					$('#no_kk_cn').html(loading)
					$('#tempat_lahir__cn').html(loading)
					$('#tanggal_lahir_cn').html(loading)
					$('#negara_cn').html(loading)
					$('#sum_penghasilan_cn').html(loading)
					$('#ibu_cn').html(loading)
					$('#jenis_deb_cn').html(loading)
					$('#stat_nikah_cn').html(loading)
					$('#agama_cn').html(loading)
					$('#pekerjaan_cn').html(loading)
					$('#pendidikan_cn').html(loading)
					$('#kepemilikan_rumah_cn').html(loading)
					$('#tinggal_sejak_cn').html(loading)
					$('#jum_kep_tb_cn').html(loading)
					$('#jum_kendaraan_cn').html(loading)
					$('#alamat_cn').html(loading)
					$('#telp_rumah').html(loading)
					$('#telp_kantor').html(loading)
					$('#telp_hp').html(loading)
					$('#alamat_dom_cn').html(loading)
					$('#email_cn').html(loading)
					$('#nama_kerabat').html(loading)
					$('#hubungan_dengan_calon').html(loading)
					$('#no_telp_kerabat').html(loading)
					$('#alamat_kerabat').html(loading)
					$('#but').html(loading)
				},
				success:function (data) {
					$.each(data,function (key,val) {
						if (val.verifikasi == 0) {
							$('#verifnasabah').addClass('text-danger')
							verifikasi = 'belum terverifikasi'
							tgl_register = 'belum terverifikasi'
							$('#but').html('<a href="javascript:void(0)" class="btn btn-success" style="width: 100%" id="buttonVerifCNasabah"><i class="mdi mdi-verified"></i>&nbsp;Verifikasi calon debitur</a>')
						}else{
							$('#but').html('')
							$('#verifnasabah').addClass('text-primary')
							verifikasi = 'Terverifikasi'
							tgl_register = changeDate(val.tgl_register)
						}
						$('#verifnasabah').html("&nbsp;"+verifikasi)
						$('#tglverif').html("&nbsp;"+tgl_register)
						$('#nama_kantor_cn').html('<p>'+val.NAMA_KANTOR+'</p>')
						$('#nama_area_kerja_cn').html('<p>'+val.nama_area_kerja+'</p>')
						$('#nama_ao_cn').html('<p>'+val.AO+'</p>')
						$('#nama_lengkap_cn').html('<p>'+val.nama_lengkap+'</p>')
						$('#nama_identitas_cn').html('<p>'+val.nama_identitas+'</p>')
						$('#nama_panggilan_cn').html('<p>'+val.nama_panggilan+'</p>')
						$('#no_ktp_cn').html('<p>'+val.no_ktp+'</p>')
						$('#no_npwp_cn').html('<p>'+val.npwp+'</p>')
						$('#jenis_kelamin_cn').html('<p>'+val.kelamin+'</p>')
						$('#no_kk_cn').html('<p>'+val.no_kk+'</p>')
						$('#tempat_lahir__cn').html('<p>'+val.tempat_lahir+'</p>')
						$('#tanggal_lahir_cn').html('<p>'+changeDate(val.tgl_lahir)+'</p>')
						$('#negara_cn').html('<p>'+val.kewarganegaraan+'</p>')
						$('#sum_penghasilan_cn').html('<p>'+val.sumber_penghasilan_cn+'</p>')
						$('#ibu_cn').html('<p>'+val.nama_gadis_ibu_kandung+'</p>')
						$('#jenis_deb_cn').html('<p>'+val.jenis_debitur+'</p>')
						$('#stat_nikah_cn').html('<p>'+val.status_nikah+'</p>')
						$('#agama_cn').html('<p>'+val.agama+'</p>')
						$('#pekerjaan_cn').html('<p>'+val.pekerjaan_cn+'</p>')
						$('#pendidikan_cn').html('<p>'+val.pendidikan_cn+'</p>')
						$('#kepemilikan_rumah_cn').html('<p>'+val.kep_rumah_cn+'</p>')
						$('#tinggal_sejak_cn').html('<p>'+val.tinggal_sejak+'</p>')
						$('#jum_kep_tb_cn').html('<p>'+val.jumlah_kepemilikan_tanah+' kavling tanah, '+val.jumlah_kepemilikan_tanah_bangunan+' kavling tanah & bangunan</p>')
						$('#jum_kendaraan_cn').html('<p>'+val.jumlah_kendaraan_motor+' Motor, '+val.jumlah_kendaraan_mobil+' Mobil</p>')
						$('#alamat_cn').html('<p>'+val.alamat+', RT '+val.rt+' RW '+val.rw+', KELURAHAN '+val.Kelurahan+' '+val.Kotakab+', KECAMATAN '+val.Kecamatan+', PROPINSI '+val.propinsi+'</p>')
						$('#telp_rumah').html('<p>'+val.telp_rumah+'</p>')
						$('#telp_kantor').html('<p>'+val.telp_kantor+'</p>')
						$('#telp_hp').html('<p>'+val.telp_hp+'</p>')
						$('#alamat_dom_cn').html('<p>'+val.alamat+', RT '+val.rt+' RW '+val.rw+', KELURAHAN '+val.Kelurahan_domisili+' '+val.Kotakab_domisili+', KECAMATAN '+val.Kecamatan_domisili+', PROPINSI '+val.propinsi_domisili+'</p>')
						$('#email_cn').html('<p>'+val.email+'</p>')
						$('#nama_kerabat').html('<p>'+val.nama_kerabat+'</p>')
						$('#hubungan_dengan_calon').html('<p>'+val.hubungan_dengan_calon+'</p>')
						$('#no_telp_kerabat').html('<p>'+val.no_telp_kerabat+'</p>')
						$('#alamat_kerabat').html('<p>'+val.alamat_kerabat+', RT '+val.rt_kerabat+' RW '+val.rw_kerabat+', '+val.kabupaten_kerabat+', '+val.kecamatan_kerabat+', '+val.propinsi_kerabat)
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

		function showDetailPasangan(id_calon_debitur) {
			$.ajax({
				type:'GET',
				url:url+'Home/get_detail_pasangan/'+id_calon_debitur,
				dataType:'JSON',
				success:function (data) {
					if (data.msg == 'Data tidak ditemukan') {
						$('#data_pasangan').html('<v class="text-danger"><i class="mdi mdi-account-alert"></i> Tidak memiliki data pasangan</v>')
					}else{
						$.each(data,function (key,val) {
							$('#nama_lengkap_pasangan').html('<p>'+val.nama_lengkap+'</p>')
							$('#nama_identitas_pasangan').html('<p>'+val.nama_identitas+'</p>')
							$('#nama_panggilan_pasangan').html('<p>'+val.nama_panggilan+'</p>')
							$('#no_ktp_pasangan').html('<p>'+val.no_ktp+'</p>')
							$('#no_npwp_pasangan').html('<p>'+val.npwp+'</p>')
							$('#jenis_kelamin_pasangan').html('<p>'+val.kelamin+'</p>')
							$('#no_kk_pasangan').html('<p>'+val.no_kk+'</p>')
							$('#tempat_lahir_pasangan').html('<p>'+val.tempat_lahir+'</p>')
							$('#tanggal_lahir_pasangan').html('<p>'+changeDate(val.tgl_lahir)+'</p>')
							$('#negara_pasangan').html('<p>'+val.kewarganegaraan+'</p>')
							$('#sum_penghasilan_pasangan').html('<p>'+val.sumber_penghasilan_cn_p+'</p>')
							$('#ibu_pasangan').html('<p>'+val.nama_gadis_ibu_kandung+'</p>')
							$('#agama_pasangan').html('<p>'+val.agama+'</p>')
							$('#pekerjaan_pasangan').html('<p>'+val.pekerjaan+'</p>')
							$('#pendidikan_pasangan').html('<p>'+val.pendidikan_cn_p+'</p>')
							$('#alamat_pasangan').html('<p>'+val.alamat+', RT '+val.rt+' RW '+val.rw+', KELURAHAN '+val.Kelurahan+' '+val.Kotakab+', KECAMATAN '+val.Kecamatan+', PROPINSI '+val.propinsi+'</p>')
							$('#telp_rum_pasangan').html('<p>'+val.telp_rumah+'</p>')
							$('#telp_kant_pasangan').html('<p>'+val.telp_kantor+'</p>')
							$('#telp_hp_pasangan').html('<p>'+val.telp_hp+'</p>')
							$('#alamat_dom_pasangan').html('<p>'+val.alamat+', RT '+val.rt+' RW '+val.rw+', KELURAHAN '+val.Kelurahan_domisili+' '+val.Kotakab_domisili+', KECAMATAN '+val.Kecamatan_domisili+', PROPINSI '+val.propinsi_domisili+'</p>')
						})
					}
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

		function showDetailPenjamin(id_calon_debitur) {
			$.ajax({
				type:'GET',
				url:url+'Home/get_detail_penjamin/'+id_calon_debitur,
				dataType:'JSON',
				success:function (data) {
					if (data.msg == 'Data tidak ditemukan') {
						$('#data_penjamin').html('<v class="text-danger"><i class="mdi mdi-account-alert"></i> Tidak memiliki data penjamin</v>')
					}else{
						$.each(data,function (key,val) {
							$('#nama_lenkap_penjamin').html('<p>'+val.nama_lengkap+'</p>')
							$('#identitas_penjamin').html('<p>'+val.nama_identitas+'</p>')
							$('#no_ktp_penjamin').html('<p>'+val.no_ktp+'</p>')
							$('#npwp_penjamin').html('<p>'+val.npwp+'</p>')
							$('#kelamin_penjamin').html('<p>'+val.kelamin+'</p>')
							$('#no_kk_penjamin').html('<p>'+val.no_kk+'</p>')
							$('#temmpat_lahir_penjamin').html('<p>'+val.tempat_lahir+'</p>')
							$('#tgl_lahir_penjamin').html('<p>'+changeDate(val.tgl_lahir)+'</p>')
							$('#agama_penjamin').html('<p>'+val.agama+'</p>')
							$('#pekerjaan_penjamin').html('<p>'+val.pekerjaan+'</p>')
							$('#ibu_penjamin').html('<p>'+val.nama_gadis_ibu_kandung+'</p>')
							$('#kewarganegaraan_penjamin').html('<p>'+val.kewarganegaraan+'</p>')
							$('#hubungan_deb_penjamin').html('<p>'+val.hubungan_debitur+'</p>')
							$('#status_nikah_penjamin').html('<p>'+val.status_nikah+'</p>')
							$('#alamat_penjamin').html('<p>'+val.alamat+', RT '+val.rt+' RW '+val.rw+', KELURAHAN '+val.Kelurahan+' '+val.Kotakab+', KECAMATAN '+val.Kecamatan+', PROPINSI '+val.propinsi+'</p>')
						})
					}
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

})
</script>
