<div class="row">
	<div class="col-lg-12" id="wadah">
	<?php include '../component/header-back.php'; ?>
		<div class="card">
			<div class="card-body">
			<div id="snackbar"></div>
			 <h4 style="">Form Data Calon Nasabah</h4><hr><br>
				<div class="col-12 grid-margin">
					<div class="card">
						<div class="card-body">
							<form class="form-sample" id="form-calon-nasabah">
								<b class="card-description">
									Personal Info
								</b><br><br>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nomor Ktp</label>
											<div class="col-sm-9">
												<input type="number" class="form-control" name="no_ktp_cn" placeholder="Masukan Nomor Ktp" id="no_ktp"/>
												<div id="msg_nasabah_exist"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Account Officer (Marketing)</label>
											<div class="col-sm-9">
												<div id="opt-ao"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">NPWP</label>
											<div class="col-sm-9">
												<input type="number" class="form-control" name="npwp_cn" placeholder="Masukan NPWP (OPSIONAL)" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nomor KK</label>
											<div class="col-sm-9">
												<input class="form-control" type="number" name="no_kk_cn" placeholder="Masukan Nomor KK" />
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="nama_lengkap_cn" placeholder="Masuka Nama Lengkap Sesuai KTP" style="margin-left:-5%;width:105%;"/>
											</div>
										</div>
									</div>
								</div> -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Identitas</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="nama_identitas_cn" placeholder="Masuka Nama Sesuai KTP" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama panggilan</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="nama_panggilan_cn" placeholder="Masukan Nama Panggilan" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="nama_gadis_ibu_kandung_cn" placeholder="Masukan Nama Ibu Kandung" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
											<div class="col-sm-9">
												<select class="form-control" name="kelamin_cn">
													<option value="null">Pilih</option>
													<option value="L">Pria</option>
													<option value="P">Wanita</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tempat lahir</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="tempat_lahir_cn" placeholder="Masukan Tempat lahir" />
											</div>
										</div>
									</div>
									 <div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Agama</label>
											<div class="col-sm-9">
													<div class="opt-agama"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-9">
											<input class="form-control" type="date" placeholder="dd/mm/yyyy" name="tgl_lahir_cn" />
										</div>
									</div>
								</div>
								 <div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jenis Debitur</label>
											<div class="col-sm-9">
												<select class="form-control" name="jenis_debitur_cn">
													<option value="INDIVIDU" checked>INDIVIDU</option>
													<option value="BADAN USAHA">BADAN USAHA</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kantor</label>
											<div class="col-sm-9">
												<div id="opt-kantor"></div>
												<input type="hidden" name="kantor" id="v_kantor">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kewarganegaraan</label>
										<div class="col-sm-9">
											<input class="form-control" type="text" placeholder="Kewarganegaraan" name="kewarganegaraan_cn" value="INDONESIA" readonly />
										</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pekerjaan</label>
										<div class="col-sm-9">
											<div id="opt-pekerjaan-cn"></div>
										</div>
										</div>
									</div>
								</div>
								<div>
								<div class="row">
	                <div class="col-md-12">
	                <div class="form-group row">
	                  <label class="col-sm-3 col-form-label">Status Nikah</label>
	                  <div class="col-sm-2">
	                    <div class="form-radio">
	                      <input type="radio" class="form-check-input" name="status_nikah_cn" id="nasabah_kawin" value="KAWIN">
	                      <p> Kawin</p>
	                    </div>
	                  </div>
	                  <div class="col-sm-2">
	                    <div class="form-radio">
	                        <input type="radio" class="form-check-input" name="status_nikah_cn" id="nasabah_belum_kawin" value="BELUM KAWIN" checked>
	                        <p>Belum Kawin</p>
	                    </div>
	                  </div>
	                  <div class="col-sm-2">
	                    <div class="form-radio">
	                        <input type="radio" class="form-check-input" name="status_nikah_cn" id="nasabah_cerai_hidup" value="CERAI HIDUP">
	                        <p>Cerai Hidup</p>
	                    </div>
	                  </div>
	                  <div class="col-sm-2">
	                    <div class="form-radio">
	                        <input type="radio" class="form-check-input" name="status_nikah_cn" id="nasabah_cerai_mati" value="CERAI MATI">
	                        <p>Cerai Mati</p>
	                    </div>
	                  </div>
	                </div>
				                <div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
											<div class="col-sm-9">
												<div id="opt-pendidikan-cn"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Sumber Penghasilan</label>
											<div class="col-sm-9">
												<div id="opt-sumber-penghasilan-cn"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Status kepemilikan rumah</label>
											<div class="col-sm-9">
												<div id="opt-kepemilikan-rumah-cn"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tinggal Sejak</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="tinggal_sejak_cn" placeholder="Masukan Tinggal Sejak"/>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jumlah Kepemilikan tanah</label>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="jum_tanah_cn" placeholder="Masukan Jumlah Kepemilikan tanah"/>
											</div>
											<div class="col-sm-4"><p style="margin-top:5px;">Kavling tanah</p></div>
										</div>
									</div>
								</div> -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jumlah Kepemilikan tanah Bangunan</label>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="jum_tanah_bangunan_cn" placeholder="Masukan Jumlah Kepemilikan  Bangunan"/>
											</div>
											<div class="col-sm-4"><p style="margin-top:5px;">Kavling tanah & bangunan</p></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jumlah Kepemilikan Kendaraan</label>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="jum_motor_cn" placeholder="Masukan Jumlah Kepemilikan  Bangunan" size="5"/>
											</div>
											<div class="col-sm-1"><p style="margin-top:5px;">Motor</p></div>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="jum_mobil_cn" placeholder="Masukan Jumlah Kepemilikan  Bangunan" size="5"/>
											</div>
											<div class="col-sm-1"><p style="margin-top:5px;">Mobil</p></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Telp Rumah</label>
											<div class="col-sm-9">
												<input class="form-control" type="number" placeholder="telp rumah (OPSIONAL)" name="telp_rumah_cn" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Telp Kantor</label>
											<div class="col-sm-9">
												<input class="form-control" type="number" placeholder="telp kantor (OPSIONAL)" name="telp_kantor_cn" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Telp Handphone</label>
											<div class="col-sm-9">
												<input class="form-control" type="number" placeholder="telp hp" name="telp_hp_cn" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Email</label>
											<div class="col-sm-9">
												<input class="form-control" type="email" placeholder="Email (OPSIONAL)" name="email_cn" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
                  <div class="col-md-12">
		                <div class="form-group row">
		                  <label class="col-sm-2 col-form-label">Penjamin</label>
		                  <div class="col-sm-4">
		                    <div class="form-radio">
		                        <input type="radio" class="form-check-input" name="penjamin" id="penjamin_ya" value="ya_penjamin"> <p>Ya</p>
		                    </div>
		                  </div>
		                  <div class="col-sm-2">
		                    <div class="form-radio">
		                        <input type="radio" class="form-check-input" name="penjamin" id="penjamin_tidak" value="tidak_penjamin" checked> <p>Tidak</p>
		                    </div>
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
												<textarea class="form-control" name="alamat_cn" placeholder="Masukan Alamat"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Provinsi</label>
											<div class="col-sm-9">
												<div id="opt-propinsi"></div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kota/Kab</label>
											<div class="col-sm-9">
												<div id="opt-kotakab"> - </div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kecamatan</label>
											<div class="col-sm-9">
												<div id="opt-kecamatan"> - </div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kelurahan</label>
											<div class="col-sm-9">
													<div id="opt-kelurahan"> - </div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">RT</label>
											<div class="col-sm-9">
												<input type="number" name="rt_cn" class="form-control" placeholder="Masukan RT">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">RW</label>
											<div class="col-sm-9">
												<input type="number" name="rw_cn" class="form-control"  placeholder="Masukan RW"> 
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
												<textarea class="form-control" name="alamat_dom_cn" placeholder="Masukan Alamat"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Provinsi</label>
											<div class="col-sm-9">
												<div id="opt-propinsi-dom-cn"></div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kota/Kab</label>
											<div class="col-sm-9">
												<div id="opt-kotakab-dom-cn"> - </div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kecamatan</label>
											<div class="col-sm-9">
												<div id="opt-kecamatan-dom-cn"> - </div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kelurahan</label>
											<div class="col-sm-9">
													<div id="opt-kelurahan-dom-cn"> - </div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">RT</label>
											<div class="col-sm-9">
												<input type="number" name="rt_dom_cn" class="form-control" placeholder="Masukan RT">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">RW</label>
											<div class="col-sm-9">
												<input type="number" name="rw_dom_cn" class="form-control"  placeholder="Masukan RW"> 
											</div>
										</div>
									</div>
								</div>
								<br>
								<h5>Kerabat yang dapat dihubungi</h5><hr><br>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="nama_kerabat" id="nama_kerabat" placeholder="Masuka Nama Lengkap Sesuai KTP" style="margin-left:-5%;width:105%;"/>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Hubungan Dengan Calon</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="hubungan_dengan_calon" id="hubungan_dengan_calon" placeholder="Masukan Hubungan"></input>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">No Telp</label>
											<div class="col-sm-9">
												<input type="number" class="form-control" name="no_telp_kerabat" id="no_telp_kerabat" placeholder="Masukan No Hp"></input>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-1 col-form-label">Alamat Kerabat</label>
											<div class="col-sm-11">
												<textarea class="form-control" name="alamat_kerabat" id="alamat_kerabat" placeholder="Masukan Alamat" style="margin-left:5%;"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Provinsi</label>
											<div class="col-sm-9">
												<input type="text" name="propinsi_kerabat" class="form-control" id="propinsi_kerabat" placeholder="Masukan Provinsi">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kota/Kab Kerabat</label>
											<div class="col-sm-9">
												<input type="text" name="kabupaten_kerabat" class="form-control" id="kabupaten_kerabat" placeholder="Masukan kabupaten/kota">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kecamatan Kerabat</label>
											<div class="col-sm-9">
												<input type="text" name="kecamatan_kerabat" class="form-control" id="kecamatan_kerabat" placeholder="Masukan Kecamatan">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">RT</label>
											<div class="col-sm-9">
												<input type="number" name="rt_kerabat" class="form-control" id="rt_kerabat" placeholder="Masukan RT">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">RW</label>
											<div class="col-sm-9">
												<input type="number" name="rw_kerabat" class="form-control" id="rw_kerabat"  placeholder="Masukan RW"> 
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Kode POS</label>
											<div class="col-sm-9">
												<input type="number" name="kode_pos_Kerabat" class="form-control" id="kode_pos_Kerabat"  placeholder="Masukan RW"> 
											</div>
										</div>
									</div>
								</div>
								<br>
	              <!-- FORM PASANGAN CALON NASABAH -->
								<div id="form_pasangan">
									<hr>
									<b class="card-description">
									Personal Info Pasangan
									</b><br><br>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nomor Ktp</label>
												<div class="col-sm-9">
													<input type="number" class="form-control" name="no_ktp_pasangan" placeholder="Masukan Nomor Ktp" id="no_ktp_pas"/>
													<div id="msg_nasabah_exist_pas"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">NPWP</label>
												<div class="col-sm-9">
													<input type="number" class="form-control" name="npwp_pasangan" placeholder="Masukan NPWP (OPSIONAL)" />
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nomor KK</label>
												<div class="col-sm-9">
													<input class="form-control" type="number" name="no_kk_pasangan" placeholder="Masukan Nomor KK" />
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-2 col-form-label">Nama Lengkap</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="nama_lengkap_pasangan" placeholder="Masuka Nama Lengkap Sesuai KTP" style="margin-left:-5%;width:105%;"/>
												</div>
											</div>
										</div>
									</div> -->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nama Identitas</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="nama_identitas_pasangan" placeholder="Masuka Nama Sesuai KTP" />
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nama panggilan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="nama_panggilan_pasangan" placeholder="Masukan Nama Panggilan" />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="nama_gadis_ibu_kandung_pasangan" placeholder="Masukan Nama Ibu Kandung" />
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
												<div class="col-sm-9">
													<select class="form-control" name="kelamin_pasangan">
														<option value="null">Pilih</option>
														<option value="L">Pria</option>
														<option value="P">Wanita</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Tempat lahir</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="tempat_lahir_pasangan" placeholder="Masukan Tempat lahir" />
												</div>
											</div>
										</div>
										 <div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Agama</label>
												<div class="col-sm-9">
														<div class="opt-agama-pasangan"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
											<div class="col-sm-9">
												<input class="form-control" type="date" placeholder="dd/mm/yyyy" name="tgl_lahir_pasangan" />
											</div>
										</div>
									</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Kewarganegaraan</label>
											<div class="col-sm-9">
												<input class="form-control" type="text" placeholder="Kewarganegaraan" name="kewarganegaraan_pasangan" value="INDONESIA" readonly />
											</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Pekerjaan</label>
											<div class="col-sm-9">
												<input class="form-control" type="text" placeholder="Pekerjaan" name="pekerjaan_pasangan" />
											</div>
											</div>
										</div>
									</div>
									<div>
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
													<input class="form-control" type="number" placeholder="telp rumah (OPSIONAL)" name="telp_rumah_pasangan" />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Telp Kantor</label>
												<div class="col-sm-9">
													<input class="form-control" type="number" placeholder="telp kantor (OPSIONAL)" name="telp_kantor_pasangan" />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Telp Handphone</label>
												<div class="col-sm-9">
													<input class="form-control" type="number" placeholder="telp hp" name="telp_hp_pasangan" />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Email</label>
												<div class="col-sm-9">
													<input class="form-control" type="email_pasangan" placeholder="Email (OPSIONAL)" name="email_pasangan" />
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
													<textarea class="form-control" name="alamat_pasangan" placeholder="Masukan Alamat"></textarea>
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
													<input type="number" name="rt_pasangan" class="form-control" placeholder="Masukan RT">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">RW</label>
												<div class="col-sm-9">
													<input type="number" name="rw_pasangan" class="form-control"  placeholder="Masukan RW"> 
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
													<textarea class="form-control" name="alamat_dom_pasangan" placeholder="Masukan Alamat"></textarea>
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
													<input type="number" name="rt_dom_pasangan" class="form-control" placeholder="Masukan RT">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">RW</label>
												<div class="col-sm-9">
													<input type="number" name="rw_dom_pasangan" class="form-control"  placeholder="Masukan RW"> 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div></div></div>
								<br><br>
								<!-- FORM PENJAMIN NASABAH -->
								<div id="form_penjamin">
									<hr>
									<b class="card-description">
									Personal Info Penjamin
									</b><br><br>
									<div class="row">
										<div class="col-md-12">
										  <div class="form-group row">
										    <label class="col-sm-2 col-form-label">Nomor Ktp</label>
										    <div class="col-sm-10">
										      <input type="number" class="form-control" name="no_ktp_penjamin" style="margin-left: -5%; width: 105%;" placeholder="Masukan Nomor Ktp" / >
										    </div>
										  </div>
										</div>
									</div>
									<!-- <div class="row">
										<div class="col-md-12">
										  <div class="form-group row">
										    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" style="margin-left: -5%; width: 105%;" name="nama_lengkap_penjamin" placeholder="Masuka Nama Lengkap" />
										    </div>
										  </div>
										</div>
									</div> -->
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Nama Identitas</label>
										    <div class="col-sm-9">
										      <input type="text" class="form-control" name="nama_identitas_penjamin" placeholder="Masukan Nama Sesuai KTP" />
										    </div>
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">NPWP</label>
										    <div class="col-sm-9">
										      <input type="number" class="form-control" name="npwp_penjamin" placeholder="Masukan NPWP (OPSIONAL)" />
										    </div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
										    <div class="col-sm-9">
										      <select class="form-control" name="kelamin_penjamin">
										        <option value="L">Pria</option>
										        <option value="P">Wanita</option>
										      </select>
										    </div>
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Nomor KK</label>
										    <div class="col-sm-9">
										      <input class="form-control" type="number" name="no_kk_penjamin" placeholder="Masukan Nomor KK" />
										    </div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Tempat Lahir</label>
										    <div class="col-sm-9">
										      <input class="form-control" type="text" name="tempat_lahir_penjamin" placeholder="Masukan Tempat Lahir" />
										    </div>
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-4 col-form-label">Kewarganegaraan</label>
										    <div class="col-sm-8">
										      <input type="text" name="kewarganegaraan_penjamin" class="form-control" value="INDONESIA" readonly>
										    </div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
										    <div class="col-sm-9">
										      <input class="form-control" type="date" placeholder="dd/mm/yyyy" name="tgl_lahir_penjamin" />
										    </div>
										  </div>
										</div>
										 <div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Agama</label>
										    <div class="col-sm-9">
										    	<div class="opt-agama-penjamin"></div>
										  	</div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
										    <div class="col-sm-9">
										      <input type="text" class="form-control" name="nama_gadis_ibu_kandung_penjamin" placeholder="Masukan Nama Ibu Kandung" />
										    </div>
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Pekerjaan</label>
										    <div class="col-sm-9">
										      <input type="text" name="pekerjaan_penjamin" class="form-control" placeholder="Masukan Pekerjaan">
										    </div>
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">Hubungan dengan debitur</label>
										    <div class="col-sm-9">
										      <input type="text" name="hub_debitur" class="form-control" placeholder="Masukan hubungan dengan debitur">
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
													    <input type="radio" class="form-check-input" name="status_nikah_penjamin" id="status_nikah_penjamin" value="KAWIN" checked> <p>Kawin</p>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-radio">
													    <input type="radio" class="form-check-input" name="status_nikah_penjamin" id="status_nikah_penjamin" value="BELUM KAWIN"> <p>Belum Kawin</p>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-radio">
													    <input type="radio" class="form-check-input" name="status_nikah_penjamin" id="status_nikah_penjamin" value="CERAI HIDUP"> <p>Cerai Hidup</p>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-radio">
													    <input type="radio" class="form-check-input" name="status_nikah_penjamin" id="status_nikah_penjamin" value="CERAI MATI"> <p>Cerai Mati</p>
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
											  <textarea class="form-control" name="alamat_penjamin" placeholder="Masukan Alamat"></textarea>
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
										      <input type="number" name="rt_penjamin" class="form-control" placeholder="Masukan RT">
										    </div>
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="form-group row">
										    <label class="col-sm-3 col-form-label">RW</label>
										    <div class="col-sm-9">
										      <input type="number" name="rw_penjamin" class="form-control"  placeholder="Masukan RW">
										    </div>
										  </div>
										</div>
									</div>
								</div>
							<button type="button" class="btn btn-primary btn-fw" id="simpan-nasabah" style="width:100%;">Simpan Data calon nasabah</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'
	var kantor_user = parseInt($('#session_kantor').val())

	$('#load_page').val('false');
	$('#title-header').html('Tambah Calon Nasabah')

	$('#backcn').click(function () {
		$('#load_page').val('false');
		load()
		$('#tamplate').val('views/content/data/data-c-nasabah.php');
		$('#app').load('views/content/data/data-c-nasabah.php');
	})

	$('#no_ktp').keyup(function () {
		var noktp = $(this).val()
		checkExist('#no_ktp','checkNasabahExist',noktp,'#msg_nasabah_exist')
	})

	$('#no_ktp_pas').keyup(function () {
		var noktp = $(this).val()
		checkExist('#no_ktp_pas','checkPasanganExist',noktp,'#msg_nasabah_exist_pas')
	})


	function checkExist (selector,controller,noktp,msg) {
		$.ajax({
			type:'GET',
			url:url+'Home/'+controller+'/'+noktp,
			dataType:'JSON',
			success:function (res) {
				if (res.amount == 0) {
					$('input[type=text]').removeAttr('disabled')
					$('input[type=number]').removeAttr('disabled')
					$('select').removeAttr('disabled')
					$('textarea').removeAttr('disabled')
					$('#simpan-nasabah').prop('disabled',false)
					$(''+msg+'').html('')
				}else{
					$('input[type=text]').attr('disabled','true')
					$('input[type=number]').attr('disabled','true')
					$('select').attr('disabled','true')
					$('textarea').attr('disabled','true')
					$(''+selector+'').removeAttr('disabled')
					toastNotvalid('No ktp sudah terdaftar!! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;')
					$('#simpan-nasabah').prop('disabled',true)
					$(''+msg+'').html('<p style="margin-top:2%;color: red;">Data dengan nik <v style="font-weight:bold;">'+noktp+' </v>sudah terdaftar!, <a href="javascript:void(0)" class="ubahdata" data="'+noktp+'">ubah data?</a></p>')
				}
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

	$('#msg_nasabah_exist').on('click','.ubahdata', function () {
		load()
		var noktp = $(this).attr('data')
		$.ajax({
			type:'GET',
			url:url+'Home/getIdnasabah/'+noktp,
			dataType:'JSON',
			success:function (res) {
				$('#paramsID1').val(res.id_calon_debitur)
				$('#app').load('views/content/form/edit-data-c-nasabah.php')
			},
			error:function (xhr, status, error) {
				console.log(xhr.status)
      	if (xhr.status == 500) {
      		swal({
		        title:error,
		        text:'Server bermasalah, periksa koneksi internet anda.',
		        icon: "error"
			    });
      	}
			}
		})
	})

	$('#msg_nasabah_exist_pas').on('click','.ubahdata', function () {
		var noktp = $(this).attr('data')
		swal({
			title: "Tinggalkan halaman ?",
			text: "mungkin sudah ada data yang anda isikan pada form",
			icon: "info",
			buttons: true,
			dangerMode: true,
		})
		.then((Next) => {
			if (Next) {
				$.ajax({
					type:'GET',
					url:url+'Home/getIdpasangan/'+noktp,
					dataType:'JSON',
					beforeSend:function () {
						load()
					},
					success:function (res) {
						$('#paramsID1').val(res.id_calon_debitur)
						$('#app').load('views/content/form/edit-pasangan-cn.php')
					}
				})
			}
		});
	})

	$('#form_pasangan').hide()
	$('#form_penjamin').hide()

	$('#nasabah_kawin').click(function () {
		$('#form_pasangan').show('slow')
	})

	$('#nasabah_belum_kawin').click(function () {
		$('#form_pasangan').hide('slow')
	})

	$('#nasabah_cerai_hidup').click(function () {
		$('#form_pasangan').hide('slow')
	})

	$('#nasabah_cerai_mati').click(function () {
		$('#form_pasangan').hide('slow')
	})

	$('#penjamin_ya').click(function () {
		$('#form_penjamin').show('slow')
	})

	$('#penjamin_tidak').click(function () {
		$('#form_penjamin').hide('slow')
	})

	$('#simpan-nasabah').click(function () {
		var scn = $('input[name=status_nikah_cn]:checked').val()
		var penjamin = $('input[name=penjamin]:checked').val()

		var ao_cn = true
		var nama_lengkap_cn = true
		var no_ktp_cn = true
		var nama_identitas_cn = true
		var nama_panggilan_cn = true
		/*var npwp_cn = true*/
		var kelamin_cn = true
		var no_kk_cn = true
		var tempat_lahir_cn = true
		var tgl_lahir_cn = true
		var agama_cn = true
		var nama_gadis_ibu_kandung_cn = true
		var jenis_debitur_cn = true
		var pekerjaan_cn = true
		var kewarganegaraan_cn = true
		var kantor_cn = true
		var pen_terakhir_cn = true
		var sumber_peng_cn = true
		var status_kep_rumah_cn = true
		var tinggal_sejak_cn = true
		var jum_tanah_cn = true
		var jum_tanah_bangunan_cn = true
		var jum_motor_cn = true
		var jum_mobil_cn = true
		/*var telp_rumah_cn = true*/
		/*var telp_kantor_cn = true*/
		var telp_hp_cn = true
		var alamat_cn = true
		var propinsi_cn = true
		var kabkota_cn = true
		var kecamatan_cn = true
		var kelurahan_cn = true
		var rt_cn = true
		var rw_cn = true
		var alamat_kerabat = true
		var propinsi_dom_cn = true
		var kabkota_dom_cn = true
		var kecamatan_dom_cn = true
		var kelurahan_dom_cn = true
		var rt_dom_cn = true
		var rw_dom_cn = true

		var no_ktp_pasangan = true
		var nama_lengkap_pasangan = true
		var nama_identitas_pasangan = true
		var nama_panggilan_pasangan = true
		/*var npwp_pasangan = true*/
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
		/*var telp_rumah_pasangan = true
		var telp_kantor_pasangan = true*/
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

		var no_ktp_penjamin = true
		var nama_lengkap_penjamin = true
		var nama_identitas_penjamin = true
		/*var npwp_penjamin = true*/
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

		ao_cn = checkSelect('select[name=ao]')
		nama_lengkap_cn = checkEmpty('input[name=nama_lengkap_cn]')
		no_ktp_cn = checkEmpty('input[name=no_ktp_cn]')
		nama_identitas_cn = checkEmpty('input[name=nama_identitas_cn]')
		nama_panggilan_cn = checkEmpty('input[name=nama_panggilan_cn]')
		/*npwp_cn = checkEmpty('input[name=npwp_cn]')*/
		kelamin_cn = checkSelect('select[name=kelamin_cn]')
		no_kk_cn = checkEmpty('input[name=no_kk_cn]')
		tgl_lahir_cn = checkEmpty('input[name=tgl_lahir_cn]')
		tempat_lahir_cn = checkEmpty('input[name=tempat_lahir_cn]')
		agama_cn = checkSelect('select[name=agama_cn]')
		nama_gadis_ibu_kandung_cn = checkEmpty('input[name=nama_gadis_ibu_kandung_cn]')
		jenis_debitur_cn = checkSelect('select[name=jenis_debitur_cn]')
		pekerjaan_cn = checkSelect('select[name=pekerjaan_cn]')
		pen_terakhir_cn = checkSelect('select[name=pen_terakhir_cn]')
		sumber_peng_cn = checkSelect('select[name=sumber_peng_cn]')
		status_kep_rumah_cn = checkSelect('select[name=status_kep_rumah_cn]')
		tinggal_sejak_cn = checkEmpty('input[name=tinggal_sejak_cn]')
		jum_tanah_cn = checkEmpty('input[name=jum_tanah_cn]')
		jum_tanah_bangunan_cn = checkEmpty('input[name=jum_tanah_bangunan_cn]')
		jum_motor_cn = checkEmpty('input[name=jum_motor_cn]')
		jum_mobil_cn = checkEmpty('input[name=jum_mobil_cn]')
		/*telp_rumah_cn = checkEmpty('input[name=telp_rumah_cn]')*/
		/*telp_kantor_cn = checkEmpty('input[name=telp_kantor_cn]')*/
		telp_hp_cn = checkEmpty('input[name=telp_hp_cn]')
		alamat_cn = checkEmpty('textarea[name=alamat_cn]')
		propinsi_cn = checkSelect('select[name=propinsi_cn]')
		kabkota_cn = checkSelect('select[name=kabkota_cn]')
		kecamatan_cn = checkSelect('select[name=kecamatan_cn]')
		kelurahan_cn = checkSelect('select[name=kelurahan_cn]')
		rt_cn = checkEmpty('input[name=rt_cn]')
		rw_cn = checkEmpty('input[name=rw_cn]')
		alamat_dom_cn = checkEmpty('textarea[name=alamat_dom_cn]')
		propinsi_dom_cn = checkSelect('select[name=propinsi_dom_cn]')
		kabkota_dom_cn = checkSelect('select[name=kabkota_dom_cn]')
		kecamatan_dom_cn = checkSelect('select[name=kecamatan_dom_cn]')
		kelurahan_dom_cn = checkSelect('select[name=kelurahan_dom_cn]')
		rt_dom_cn = checkEmpty('input[name=rt_dom_cn]')
		rw_dom_cn = checkEmpty('input[name=rw_dom_cn]')

		if (scn == 'KAWIN' && penjamin == 'ya_penjamin') {
			console.log('dua')
			no_ktp_penjamin = checkEmpty('input[name=no_ktp_penjamin]')
			nama_lengkap_penjamin = checkEmpty('input[name=nama_lengkap_penjamin]')
			nama_identitas_penjamin = checkEmpty('input[name=nama_identitas_penjamin]')
			/*npwp_penjamin = checkEmpty('input[name=npwp_penjamin]')*/
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

			no_ktp_pasangan = checkEmpty('input[name=no_ktp_pasangan]')
			nama_lengkap_pasangan = checkEmpty('input[name=nama_lengkap_pasangan]')
			nama_identitas_pasangan = checkEmpty('input[name=nama_identitas_pasangan]')
			nama_panggilan_pasangan = checkEmpty('input[name=nama_panggilan_pasangan]')
			/*npwp_pasangan = checkEmpty('input[name=npwp_pasangan]')*/
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
			/*telp_rumah_pasangan = checkEmpty('input[name=telp_rumah_pasangan]')
			telp_kantor_pasangan = checkEmpty('input[name=telp_kantor_pasangan]')*/
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
			if (ao_cn && nama_lengkap_cn && no_ktp_cn && nama_identitas_cn && nama_panggilan_cn && /*npwp_cn &&*/ kelamin_cn && no_kk_cn && tempat_lahir_cn && tgl_lahir_cn && agama_cn && nama_gadis_ibu_kandung_cn && jenis_debitur_cn && pekerjaan_cn && kantor_cn && pen_terakhir_cn && sumber_peng_cn && status_kep_rumah_cn && tinggal_sejak_cn && jum_tanah_cn && jum_tanah_bangunan_cn && jum_motor_cn && jum_mobil_cn && /*telp_rumah_cn &&*/ /*telp_kantor_cn &&*/ telp_hp_cn && alamat_cn && propinsi_cn && kabkota_cn && kecamatan_cn && kelurahan_cn && rt_cn && rw_cn && alamat_dom_cn && propinsi_dom_cn && kabkota_dom_cn && kecamatan_dom_cn && kelurahan_dom_cn && rt_dom_cn && rw_dom_cn && no_ktp_pasangan && nama_lengkap_pasangan && nama_identitas_pasangan && nama_panggilan_pasangan && /*npwp_pasangan &&*/ kelamin_pasangan && no_kk_pasangan && tempat_lahir_pasangan && tgl_lahir_pasangan && agama_pasangan && nama_gadis_ibu_kandung_pasangan && jenis_debitur_pasangan && pekerjaan_pasangan && pen_terakhir_pasangan && sumber_peng_pasangan && /*telp_rumah_pasangan && telp_kantor_pasangan && */ telp_hp_pasangan && alamat_pasangan && propinsi_pasangan && kabkota_pasangan && kelurahan_pasangan && kecamatan_penjamin && rt_pasangan && rw_pasangan && alamat_dom_pasangan && propinsi_dom_pasangan && kabkota_dom_pasangan && kelurahan_dom_pasangan && kecamatan_dom_penjamin && rt_dom_pasangan &&rw_dom_pasangan && no_ktp_penjamin && nama_lengkap_penjamin && nama_identitas_penjamin && /*npwp_penjamin &&*/ kelamin_penjamin && no_kk_penjamin && tempat_lahir_penjamin && tgl_lahir_penjamin && agama_penjamin && nama_gadis_ibu_kandung_penjamin && pekerjaan_penjamin && hub_debitur && alamat_penjamin && propinsi_penjamin && kabkota_penjamin && kecamatan_penjamin && kelurahan_penjamin && rt_penjamin && rw_penjamin) {
				saveCalonNasabah()
			}
		}else if (scn == 'KAWIN') {
			console.log('satu pasangan')
			no_ktp_pasangan = checkEmpty('input[name=no_ktp_pasangan]')
			nama_lengkap_pasangan = checkEmpty('input[name=nama_lengkap_pasangan]')
			nama_identitas_pasangan = checkEmpty('input[name=nama_identitas_pasangan]')
			nama_panggilan_pasangan = checkEmpty('input[name=nama_panggilan_pasangan]')
			/*npwp_pasangan = checkEmpty('input[name=npwp_pasangan]')*/
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
			/*telp_rumah_pasangan = checkEmpty('input[name=telp_rumah_pasangan]')
			telp_kantor_pasangan = checkEmpty('input[name=telp_kantor_pasangan]')*/
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
			if (ao_cn && nama_lengkap_cn && no_ktp_cn && nama_identitas_cn && nama_panggilan_cn && /*npwp_cn &&*/ kelamin_cn && no_kk_cn && tempat_lahir_cn && tgl_lahir_cn && agama_cn && nama_gadis_ibu_kandung_cn && jenis_debitur_cn && pekerjaan_cn && kantor_cn && pen_terakhir_cn && sumber_peng_cn && status_kep_rumah_cn && tinggal_sejak_cn && jum_tanah_cn && jum_tanah_bangunan_cn && jum_motor_cn && jum_mobil_cn && /*telp_rumah_cn &&*/ /*telp_kantor_cn &&*/ telp_hp_cn && alamat_cn && propinsi_cn && kabkota_cn && kecamatan_cn && kelurahan_cn && rt_cn && rw_cn && alamat_dom_cn && propinsi_dom_cn && kabkota_dom_cn && kecamatan_dom_cn && kelurahan_dom_cn && rt_dom_cn && rw_dom_cn && no_ktp_pasangan && nama_lengkap_pasangan && nama_identitas_pasangan && nama_panggilan_pasangan && /*npwp_pasangan &&*/ kelamin_pasangan && no_kk_pasangan && tempat_lahir_pasangan && tgl_lahir_pasangan && agama_pasangan && nama_gadis_ibu_kandung_pasangan && jenis_debitur_pasangan && pekerjaan_pasangan && pen_terakhir_pasangan && sumber_peng_pasangan && /*telp_rumah_pasangan && telp_kantor_pasangan &&*/ telp_hp_pasangan && alamat_pasangan && propinsi_pasangan && kabkota_pasangan && kelurahan_pasangan && kecamatan_penjamin && rt_pasangan && rw_pasangan && alamat_dom_pasangan && propinsi_dom_pasangan && kabkota_dom_pasangan && kelurahan_dom_pasangan && kecamatan_dom_penjamin && rt_dom_pasangan &&rw_dom_pasangan) {
				saveCalonNasabah()
			}
		}else if (penjamin == 'ya_penjamin') {
			console.log('satu penjamin')
			no_ktp_penjamin = checkEmpty('input[name=no_ktp_penjamin]')
			nama_lengkap_penjamin = checkEmpty('input[name=nama_lengkap_penjamin]')
			nama_identitas_penjamin = checkEmpty('input[name=nama_identitas_penjamin]')
			/*npwp_penjamin = checkEmpty('input[name=npwp_penjamin]')*/
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
			if (ao_cn && nama_lengkap_cn && no_ktp_cn && nama_identitas_cn && nama_panggilan_cn && /*npwp_cn &&*/ kelamin_cn && no_kk_cn && tempat_lahir_cn && tgl_lahir_cn && agama_cn && nama_gadis_ibu_kandung_cn && jenis_debitur_cn && pekerjaan_cn && kantor_cn && pen_terakhir_cn && sumber_peng_cn && status_kep_rumah_cn && tinggal_sejak_cn && jum_tanah_cn && jum_tanah_bangunan_cn && jum_motor_cn && jum_mobil_cn && /*telp_rumah_cn &&*/ /*telp_kantor_cn &&*/ telp_hp_cn && alamat_cn && propinsi_cn && kabkota_cn && kecamatan_cn && kelurahan_cn && rt_cn && rw_cn && alamat_dom_cn && propinsi_dom_cn && kabkota_dom_cn && kecamatan_dom_cn && kelurahan_dom_cn && rt_dom_cn && rw_dom_cn && no_ktp_penjamin && nama_lengkap_penjamin && nama_identitas_penjamin && /*npwp_penjamin &&*/ kelamin_penjamin && no_kk_penjamin && tempat_lahir_penjamin && tgl_lahir_penjamin && agama_penjamin && nama_gadis_ibu_kandung_penjamin && pekerjaan_penjamin && hub_debitur && alamat_penjamin && propinsi_penjamin && kabkota_penjamin && kecamatan_penjamin && kelurahan_penjamin && rt_penjamin && rw_penjamin) {
				saveCalonNasabah()
			}
		}else{
			if (ao_cn && nama_lengkap_cn && no_ktp_cn && nama_identitas_cn && nama_panggilan_cn && /*npwp_cn &&*/ kelamin_cn && no_kk_cn && tempat_lahir_cn && tgl_lahir_cn && agama_cn && nama_gadis_ibu_kandung_cn && jenis_debitur_cn && pekerjaan_cn && kantor_cn && pen_terakhir_cn && sumber_peng_cn && status_kep_rumah_cn && tinggal_sejak_cn && jum_tanah_cn && jum_tanah_bangunan_cn && jum_motor_cn && jum_mobil_cn && /*telp_rumah_cn &&*/ /*telp_kantor_cn &&*/ telp_hp_cn && alamat_cn && propinsi_cn && kabkota_cn && kecamatan_cn && kelurahan_cn && rt_cn && rw_cn && alamat_dom_cn && propinsi_dom_cn && kabkota_dom_cn && kecamatan_dom_cn && kelurahan_dom_cn && rt_dom_cn && rw_dom_cn) {
				saveCalonNasabah()
			}
		}
	})

	'use strict'
	function saveCalonNasabah(argument) {
		var data = $('#form-calon-nasabah').serialize();
		$.ajax({
			type:'POST',
			url:url+'Home/add_nasabah',
			dataType:'JSON',
			data:data,
			beforeSend:function () {
				load()
				$('#load_page').val('true');
				$('#simpan-nasabah').prop('disabled',true);
				$('#simpan-nasabah').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Sedang mengirim data . . .');
			},
			success:function(data) {
				$('#load_page').val('false');
				$('#simpan-nasabah').prop('disabled',false)
				$('#simpan-nasabah').html('Simpan')
				console.log(data)
				if (data.msg == 'success') {
					$('#simpan-nasabah').prop('disabled',false)
					$('#simpan-nasabah').html('Simpan')
					$('#app').load('views/content/data/data-c-nasabah.php')
					swal({
						title: "Sukses!",
						text: "data berhasil ditambahkan!",
						icon: "success"
					});
				}
			},
			error:function (xhr, status, error) {
				$('#simpan-nasabah').prop('disabled',false)
				$('#simpan-nasabah').html('Simpan')
      	console.log(xhr.responseText)
      	if (xhr.status == 500) {
      		swal({
		        title:error,
		        text:'Server bermasalah, periksa koneksi internet anda.',
		        icon: "error"
			    });
      	}
			}
		})
	}


	getPekerjaan()
	'use strict'
	function getPekerjaan() {
		$.ajax({
			type:'GET',
			url:url+'Home/Pekerjaan',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-pekerjaan-cn').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.KODE_PEKERJAAN+'">'+value.DESKRIPSI_PEKERJAAN+'</option>'
				})
				$('#opt-pekerjaan-cn').html('<select class="form-control" name="pekerjaan_cn"><option value="null">Pilih</option>'+html+'</select>')
			},
			error:function (xhr, status, error) {
				console.log(xhr.responseText)
      	if (xhr.status == 500) {
      		swal({
		        title:error,
		        text:'Server bermasalah, periksa koneksi internet anda.',
		        icon: "error"
			    });
      	}
			}
		})
	}

	getPendidikan()
	'use strict'
	function getPendidikan() {
		$.ajax({
			type:'GET',
			url:url+'Home/pendidikan',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-pendidikan-cn').html(loading)
				$('#opt-pendidikan-pasangan').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.kode_pendidikan+'">'+value.nama_pendidikan+'</option>'
				})
				$('#opt-pendidikan-cn').html('<select class="form-control" name="pen_terakhir_cn"><option value="null">Pilih</option>'+html+'</select>')
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

	getsumberPenghasilan()
	'use strict'
	function getsumberPenghasilan() {
		$.ajax({
			type:'GET',
			url:url+'Home/sumberPenghasilan',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-sumber-penghasilan-cn').html(loading)
				$('#opt-sumber-penghasilan-pasangan').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.kode_sumber_penghasilan+'">'+value.desk_sumber_penghasilan+'</option>'
				})
				$('#opt-sumber-penghasilan-cn').html('<select class="form-control" name="sumber_peng_cn"><option value="null">Pilih</option>'+html+'</select>')
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

	kepemilikanRumah()
	'use strict'
	function kepemilikanRumah() {
		$.ajax({
			type:'GET',
			url:url+'Home/kepemilikanRumah',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-kepemilikan-rumah-cn').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.kode_kepemilikan+'">'+value.nama_kepemilikan+'</option>'
				})
				$('#opt-kepemilikan-rumah-cn').html('<select class="form-control" name="status_kep_rumah_cn"><option value="null">Pilih</option>'+html+'</select>')
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

	getKantor(kantor_user)
	'use strict'
	function getKantor(kantor_user) {
		$.ajax({
			type:'GET',
			url:url+'Home/kantor',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-kantor').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					if (kantor_user == value.KODE_CABANG) {
						html += '<option selected>'+value.nama_area_kerja+'</option>'
						$('#v_kantor').val(value.KODE_KANTOR)
					}else{
						html += '<option>'+value.nama_area_kerja+'</option>'
					}
				//console.log(html)
				})
				$('#opt-kantor').html('<select class="form-control" disabled="true">'+html+'</select>')
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

	getAo()
	'use strict'
	function getAo() {
		$.ajax({
			type:'GET',
			url:url+'Home/ao',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-ao').html(loading)
			},
			success:function(data){
				var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.KODE_GROUP2+'">'+value.deskripsi_group2+'</option>'
					//console.log(html)
				})
				$('#opt-ao').html('<select class="form-control" name="ao"><option value="null">Pilih</Option>'+html+'</select>')
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

	getAgama()
	'use strict'
	function getAgama() {
		$.ajax({
			type:'GET',
			url:url+'Home/agama',
			dataType:'JSON',
			beforeSend:function () {
				$('.opt-agama').html(loading)
				$('.opt-agama-pasangan').html(loading)
				$('.opt-agama-penjamin').html(loading)
			},
			success:function(data){
				var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.kode_agama+'">'+value.DESKRIPSI+'</option>'
					//console.log(html)
				})
				$('.opt-agama').html('<select class="form-control" name="agama_cn"><option value="null">Pilih</Option>'+html+'</select>')
				$('.opt-agama-pasangan').html('<select class="form-control" name="agama_pasangan"><option value="null">Pilih</Option>'+html+'</select>')
				$('.opt-agama-penjamin').html('<select class="form-control" name="agama_penjamin"><option value="null">Pilih</Option>'+html+'</select>')
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


	$('#opt-propinsi').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan').html(' - ')
		$('#opt-kelurahan').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota(propinsi_id,'cn')
	})

	$('#opt-propinsi-dom-cn').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan-dom-cn').html(' - ')
		$('#opt-kelurahan-dom-cn').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota(propinsi_id,'dom-cn')
	})

	$('#opt-propinsi-pasangan').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan-pasangan').html(' - ')
		$('#opt-kelurahan-pasangan').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota(propinsi_id,'pasangan')
	})

	$('#opt-propinsi-dom-pasangan').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan-dom-pasangan').html(' - ')
		$('#opt-kelurahan-dom-pasangan').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota(propinsi_id,'dom-pasangan')
	})

	$('#opt-propinsi-penjamin').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan-penjamin').html(' - ')
		$('#opt-kelurahan-penjamin').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota(propinsi_id,'penjamin')
	})

	getPropinsi()
	'use strict'
	function getPropinsi() {
		$.ajax({
		type:'GET',
		url:url+'Home/provinsi',
		dataType:'JSON',
		beforeSend:function () {
			$('#opt-propinsi').html(loading)
			$('#opt-propinsi-dom-cn').html(loading)
			$('#opt-propinsi-pasangan').html(loading)
			$('#opt-propinsi-dom-pasangan').html(loading)
			$('#opt-propinsi-penjamin').html(loading)
		},
		success:function(data){
			var html = ''
			$.each(data, function(index, value ) {
				html += '<option value="'+value.propinsi_id+'">'+value.name+'</option>'
				//console.log(html)
			})
			$('#opt-propinsi').html('<select class="form-control" name="propinsi_cn" id="selectPropinsi"><option value="null">Pilih</Option>'
			+html+
			'</select>')
			$('#opt-propinsi-dom-cn').html('<select class="form-control" name="propinsi_dom_cn" id="selectPropinsi"><option value="null">Pilih</Option>'
			+html+
			'</select>')
			$('#opt-propinsi-pasangan').html('<select class="form-control" name="propinsi_pasangan" id="selectPropinsi"><option value="null">Pilih</Option>'
			+html+
			'</select>')
			$('#opt-propinsi-dom-pasangan').html('<select class="form-control" name="propinsi_dom_pasangan" id="selectPropinsi"><option value="null">Pilih</Option>'
			+html+
			'</select>')
			$('#opt-propinsi-penjamin').html('<select class="form-control" name="propinsi_penjamin" id="selectPropinsi"><option value="null">Pilih</Option>'
			+html+
			'</select>')
		}
		})
	}

	$('#opt-kotakab').on('change','#selectKabkota', function () {
		$('#opt-kelurahan').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan(kotakab_id,'cn')
	})

	$('#opt-kotakab-dom-cn').on('change','#selectKabkota', function () {
		$('#opt-kelurahan-dom-cn').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan(kotakab_id,'dom-cn')
	})

	$('#opt-kotakab-pasangan').on('change','#selectKabkota', function () {
		$('#opt-kelurahan-pasangan').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan(kotakab_id,'pasangan')
	})

	$('#opt-kotakab-dom-pasangan').on('change','#selectKabkota', function () {
		$('#opt-kelurahan-dom-pasangan').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan(kotakab_id,'dom-pasangan')
	})

	$('#opt-kotakab-penjamin').on('change','#selectKabkota', function () {
		$('#opt-kelurahan-penjamin').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan(kotakab_id,'penjamin')
	})
	'use strict'
	function getKabKota(propinsi_id,status) {
		$.ajax({
		type:'GET',
		url:url+'Home/kotakab/'+propinsi_id,
		dataType:'JSON',
		beforeSend:function () {
			if (status == 'cn') {
				$('#opt-kotakab').html(loading)
			}else if (status == 'dom-cn') {
				$('#opt-kotakab-dom-cn').html(loading)
			}else if (status == 'pasangan') {
				$('#opt-kotakab-pasangan').html(loading)
			}else if (status == 'dom-pasangan') {
				$('#opt-kotakab-dom-pasangan').html(loading)
			}else if (status == 'penjamin') {
				$('#opt-kotakab-penjamin').html(loading)
			}
		},
		success:function(data){
			//console.log(data)
			var html = ''
			$.each(data, function(index, value ) {
				html += '<option value="'+value.kotakab_id+'">'+value.name+'</option>'
				//console.log(html)
			})

			if (status == 'cn') {
				$('#opt-kotakab').html('<select class="form-control" name="kabkota_cn" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
			}else if (status == 'dom-cn') {
				$('#opt-kotakab-dom-cn').html('<select class="form-control" name="kabkota_dom_cn" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
			}else if (status == 'pasangan') {
				$('#opt-kotakab-pasangan').html('<select class="form-control" name="kabkota_pasangan" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')

			}else if (status == 'dom-pasangan') {
				$('#opt-kotakab-dom-pasangan').html('<select class="form-control" name="kabkota_dom_pasangan" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')

			}else if (status == 'penjamin') {
				$('#opt-kotakab-penjamin').html('<select class="form-control" name="kabkota_penjamin" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
			}
		}
		})
	}

	$('#opt-kecamatan').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan(kecamatan_id,'cn')
	})

	$('#opt-kecamatan-dom-cn').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan(kecamatan_id,'dom-cn')
	})

	$('#opt-kecamatan-pasangan').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan(kecamatan_id,'pasangan')
	})

	$('#opt-kecamatan-dom-pasangan').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan(kecamatan_id,'dom-pasangan')
	})

	$('#opt-kecamatan-penjamin').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan(kecamatan_id,'penjamin')
	})
	'use strict'
	function getKecamatan(kotakab_id,status) {
		$.ajax({
			type:'GET',
			url:url+'Home/kecamatan/'+kotakab_id,
			dataType:'JSON',
			beforeSend:function () {
				if (status == 'cn') {
					$('#opt-kecamatan').html(loading)
				}else if (status == 'dom-cn') {
					$('#opt-kecamatan-dom-cn').html(loading)
				}else if (status == 'pasangan') {
					$('#opt-kecamatan-pasangan').html(loading)
				}else if (status == 'dom-pasangan') {
					$('#opt-kecamatan-dom-pasangan').html(loading)
				}else if (status == 'penjamin') {
					$('#opt-kecamatan-penjamin').html(loading)
				}
			},
			success:function(data){
				//console.log(data)
				var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.kecamatan_id+'">'+value.name+'</option>'
				})
				if (status == 'cn') {
					$('#opt-kecamatan').html('<select class="form-control" name="kecamatan_cn" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if (status == 'dom-cn') {
					$('#opt-kecamatan-dom-cn').html('<select class="form-control" name="kecamatan_dom_cn" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if (status == 'pasangan') {
					$('#opt-kecamatan-pasangan').html('<select class="form-control" name="kecamatan_pasangan" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')

				}else if (status == 'dom-pasangan') {
					$('#opt-kecamatan-dom-pasangan').html('<select class="form-control" name="kecamatan_dom_pasangan" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')

				}else if (status == 'penjamin') {
					$('#opt-kecamatan-penjamin').html('<select class="form-control" name="kecamatan_penjamin" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
				}
			}
		})
	}

	'use strict'
	function getKelurahan(kecamatan_id,status) {
		$.ajax({
			type:'GET',
			url:url+'Home/kelurahan/'+kecamatan_id,
			dataType:'JSON',
			beforeSend:function () {
				if (status == 'cn') {
					$('#opt-kelurahan').html(loading)
				}else if (status == 'dom-cn') {
					$('#opt-kelurahan-dom-cn').html(loading)
				}else if (status == 'pasangan') {
					$('#opt-kelurahan-pasangan').html(loading)
				}else if (status == 'dom-pasangan') {
					$('#opt-kelurahan-dom-pasangan').html(loading)
				}else if (status == 'penjamin') {
					$('#opt-kelurahan-penjamin').html(loading)
				}
			},
			success:function(data){
				//console.log(data)
				var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.kelurahan_id+'">'+value.name+'</option>'
				})
				if (status == 'cn') {
					$('#opt-kelurahan').html('<select class="form-control" name="kelurahan_cn" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if (status == 'dom-cn') {
					$('#opt-kelurahan-dom-cn').html('<select class="form-control" name="kelurahan_dom_cn" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if (status == 'pasangan') {
					$('#opt-kelurahan-pasangan').html('<select class="form-control" name="kelurahan_pasangan" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if (status == 'dom-pasangan') {
					$('#opt-kelurahan-dom-pasangan').html('<select class="form-control" name="kelurahan_dom_pasangan" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if (status == 'penjamin') {
					$('#opt-kelurahan-penjamin').html('<select class="form-control" name="kelurahan_penjamin" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
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
