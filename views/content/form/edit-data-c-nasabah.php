<div class="row">
	<div class="col-lg-12" id="wadah">
	<?php include '../component/header-back.php'; ?>
		<div class="card"><br>
			<div class="card-body">
			<div id="snackbar"></div>
			<div class="col-md-12">
				<div style="float:right;" id="s">
					<div><p>Status Verifikasi : <v class="text-primary" style="float: right;" id="verifnasabah"></v></p></div>
				</div>
			</div>
			 <h4 style="">Form Edit Calon Nasabah</h4><hr>
				<div class="col-12 grid-margin">
					<div class="card">
						<div class="card-body">
							<form class="form-sample" id="form-calon-nasabah">
								<b class="card-description">
									Personal Info
								</b><br><br>
								<input type="hidden" name="verifikasi" id="verifikasi">
								<input type="hidden" name="id_calon_debitur" id="id_cd">
								<input type="hidden" name="status_pasangan" id="status_pasangan">
								<input type="hidden" name="status_penjamin" id="status_penjamin">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nomor Ktp</label>
											<div class="col-sm-9">
												<input type="number" class="form-control" name="no_ktp_cn" placeholder="Masukan Nomor Ktp" id="no_ktp"/>
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
												<input type="number" class="form-control" name="npwp_cn" placeholder="Masukan NPWP" id="npwp_cn"/>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nomor KK</label>
											<div class="col-sm-9">
												<input class="form-control" type="number" name="no_kk_cn" placeholder="Masukan Nomor KK" id="no_kk_cn"/>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="nama_lengkap_cn" id="nama_lengkap_cn" placeholder="Masuka Nama Lengkap Sesuai KTP" style="margin-left:-5%;width:105%;" required/>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Identitas</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="nama_identitas_cn" id="nama_identitas_cn" placeholder="Masuka Nama Lengkap" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama panggilan</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="nama_panggilan_cn" id="nama_panggilan_cn" placeholder="Masukan Nama Identitas" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="nama_gadis_ibu_kandung_cn" placeholder="Masukan Nama Ibu Kandung" id="nama_gadis_ibu_kandung_cn" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jenis Kelamin</label>
											<div class="col-sm-9">
												<div id="opt-kelamin-cn"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tempat lahir</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="tempat_lahir_cn" id="tampat_lahir_cn" placeholder="Masukan Tempat lahir" />
											</div>
										</div>
									</div>
									 <div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Agama</label>
											<div class="col-sm-9">
												<div id="opt-agama-debitur"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-9">
											<input class="form-control" type="text" placeholder="dd/mm/yyyy" name="tgl_lahir_cn" id="tanggal_lahir_cn" />
										</div>
									</div>
								</div>
								 <div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jenis Debitur</label>
											<div class="col-sm-9">
												<div id="opt-jd"></div>
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
											<input class="form-control" type="text" placeholder="Kewarganegaraan" name="kewarganegaraan_cn" id="kewarganegaraan_cn" />
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
												<input type="text" class="form-control" name="tinggal_sejak_cn" id="tinggal_sejak_cn" placeholder="Masukan Tinggal Sejak"/>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jumlah Kepemilikan tanah</label>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="jum_tanah_cn" id="jum_tanah_cn" placeholder="Masukan Jumlah Kepemilikan tanah"/>
											</div>
											<div class="col-sm-4"><p style="margin-top:5px;">Kavling tanah</p></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jumlah Kepemilikan tanah Bangunan</label>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="jum_tanah_bangunan_cn" id="jum_tanah_bangunan_cn" placeholder="Masukan Jumlah Kepemilikan  Bangunan"/>
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
												<input type="number" class="form-control" name="jum_motor_cn" id="jum_motor_cn" placeholder="Masukan Jumlah Kepemilikan  Bangunan" size="5"/>
											</div>
											<div class="col-sm-1"><p style="margin-top:5px;">Motor</p></div>
											<div class="col-sm-2">
												<input type="number" class="form-control" name="jum_mobil_cn" id="jum_mobil_cn" placeholder="Masukan Jumlah Kepemilikan  Bangunan" size="5"/>
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
												<input class="form-control" type="number" placeholder="telp rumah" name="telp_rumah_cn" id="telp_rumah_cn" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Telp Kantor</label>
											<div class="col-sm-9">
												<input class="form-control" type="number" placeholder="telp kantor" name="telp_kantor_cn" id="telp_kantor_cn" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Telp Handphone</label>
											<div class="col-sm-9">
												<input class="form-control" type="number" placeholder="telp hp" name="telp_hp_cn" id="telp_hp_cn" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Email</label>
											<div class="col-sm-9">
												<input class="form-control" type="email" placeholder="Email" name="email_cn" id="email_cn" />
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
												<textarea class="form-control" name="alamat_cn" id="alamat_cn" placeholder="Masukan Alamat"></textarea>
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
												<input type="number" name="rt_cn" id="rt_cn" class="form-control" placeholder="Masukan RT">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">RW</label>
											<div class="col-sm-9">
												<input type="number" name="rw_cn" id="rw_cn" class="form-control"  placeholder="Masukan RW"> 
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
												<textarea class="form-control" name="alamat_dom_cn" id="alamat_dom_cn" placeholder="Masukan Alamat"></textarea>
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
												<input type="number" name="rt_dom_cn" id="rt_dom_cn" class="form-control" placeholder="Masukan RT">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">RW</label>
											<div class="col-sm-9">
												<input type="number" name="rw_dom_cn" id="rw_dom_cn" class="form-control"  placeholder="Masukan RW">
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
												<input type="number" name="kode_pos_Kerabat" class="form-control" id="kode_pos_Kerabat"  placeholder="Masukan kode pos"> 
											</div>
										</div>
									</div>
								</div>
								<div id="form_pasangan">
									<hr><br><br>
										<b class="card-description">
										Personal Info Pasangan
										</b><br><br>
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
														<div id="opt-kelamin-pasangan"></div>
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
								</div>
								<div id="form_penjamin">
									<hr><br><br>
									<b class="card-description">
									Personal Info Penjamin
									</b><br><br>
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
							<button type="button" class="btn btn-primary btn-fw" id="edit-nasabah" style="width:100%;">Simpan Perubahan</button>
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
	$('#title-header').html('Edit Calon Nasabah')

	$('#backcn').click(function () {
		$('#load_page').val('false');
		load()
		$('#tamplate').val('views/content/data/data-c-nasabah.php')
		$('#app').load('views/content/data/data-c-nasabah.php')
	})

	/*$('#form_pasangan').hide()
	$('#form_penjamin').hide()

	if ($("input[name=status_nikah_cn_]").prop("checked", true)) {
		console.log('cek')
	}

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
*/
	$('#edit-nasabah').click(function () {
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

		var nama_kerabat = true
		var hubungan_dengan_calon = true
		var no_telp_kerabat = true
		var alamat_dom_cn = true
		var propinsi_kerabat = true
		var kabupaten_kerabat = true
		var kecamatan_kerabat = true
		var rt_kerabat = true
		var rw_kerabat = true
		var kode_pos_Kerabat = true

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

		if (ao_cn && nama_lengkap_cn && no_ktp_cn && nama_identitas_cn && nama_panggilan_cn && kelamin_cn && no_kk_cn && tempat_lahir_cn && tgl_lahir_cn && agama_cn && nama_gadis_ibu_kandung_cn && jenis_debitur_cn && pekerjaan_cn && kantor_cn && pen_terakhir_cn && sumber_peng_cn && status_kep_rumah_cn && tinggal_sejak_cn && jum_tanah_cn && jum_tanah_bangunan_cn && jum_motor_cn && jum_mobil_cn /*&& telp_rumah_cn && telp_kantor_cn*/ && telp_hp_cn && alamat_cn && propinsi_cn && kabkota_cn && kecamatan_cn && kelurahan_cn && rt_cn && rw_cn && alamat_dom_cn && propinsi_dom_cn && kabkota_dom_cn && kecamatan_dom_cn && kelurahan_dom_cn && rt_dom_cn && rw_dom_cn) {
				editCalonNasabah()
			}
	})
	'use strict'
	function editCalonNasabah(argument) {
		var data = $('#form-calon-nasabah').serialize();
		//console.log(data)
		$.ajax({
			type:'POST',
			url:url+'Home/save_edit_c_nasabah',
			dataType:'JSON',
			data:data,
			beforeSend:function () {
				load()
				$('#load_page').val('true');
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang merubah data . . .')
			},
			success:function (res) {
				$('#load_page').val('false');
				if (res.msg == 'success') {
					$('#edit-nasabah').prop('disabled',false)
					$('#edit-nasabah').html('Simpan Perubahan')
					$('#tamplate').val('views/content/data/data-c-nasabah.php')
					$('#app').load('views/content/data/data-c-nasabah.php')
					swal({
					  title: "Sukses!",
					  text: "data berhasil di ubah!",
					  icon: "success"
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
	}
	showDetail(id_calon_debitur)
	function showDetail(id_calon_debitur) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detail_calon_nasabah/'+id_calon_debitur,
			dataType:'JSON',
			beforeSend:function () {
				$('#verifnasabah').html(loading)
				$('#opt-kelamin-cn').html(loading)
				$('#opt-kantor').html(loading)
				$('#opt-pekerjaan-cn').html(loading)
				$('#opt-ao').html(loading)
				$('#opt-agama-debitur').html(loading)
				$('#opt-propinsi').html(loading)
				$('#opt-kotakab').html(loading)
				$('#opt-kecamatan').html(loading)
				$('#opt-kelurahan').html(loading)
				$('input[type=text]').attr('disabled','true').val('Sedang mengambil . . .')
				$('input[type=number]').attr('disabled','true')
				$('textarea').html('Sedang mengambil . . .')
				$('#opt-sumber-penghasilan-cn').html(loading)
				$('#opt-sumber-penghasilan-pasangan').html(loading)
				$('#opt-pendidikan-cn').html(loading)
				$('#opt-pendidikan-pasangan').html(loading)
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
			},
			success:function (data) {
				$('#edit-nasabah').prop('disabled',false)
				$('#edit-nasabah').html('Simpan Perubahan')
				$.each(data,function (key,val) {
				console.log(val.verifikasi)
				$('input[type=text]').removeAttr('disabled').val('')
				$('input[type=number]').removeAttr('disabled')
				$('textarea').html('')
					$('#id_cd').val(val.id_calon_debitur)
					$('#verifikasi').val(val.verifikasi)
					$('#kewarganegaraan_cn').attr("readonly","")
					if (val.verifikasi == 1) {
						$('#no_ktp').attr("readonly","")
						$('#npwp_cn').attr("readonly","")
						$('#no_kk_cn').attr("readonly","")
						//$('#nama_gadis_ibu_kandung_cn').attr("readonly","")
						$('#tampat_lahir_cn').attr("readonly","")
						$('#tanggal_lahir_cn').attr("readonly","")
						$('#tanggal_lahir_cn').attr("type","text")
						$('#tanggal_lahir_cn').val(changeDate(val.tgl_lahir))
					}else{
						$('#tanggal_lahir_cn').attr("type","date")
						$('#tanggal_lahir_cn').val(val.tgl_lahir)
					}
					if (val.status_nikah == 'KAWIN') {
						$('#nasabah_kawin').attr('checked',true)
					}else if (val.status_nikah == 'BELUM KAWIN') {
						$('#nasabah_belum_kawin').attr('checked',true)
					}else if (val.status_nikah == 'CERAI HIDUP') {
						$('#nasabah_cerai_hidup').attr('checked',true)
					}else if (val.status_nikah == 'CERAI MATI') {
						$('#nasabah_cerai_mati').attr('checked',true)
					}

					if (val.verifikasi == 1) {
						$('#verifnasabah').removeClass('text-danger')
						$('#verifnasabah').addClass('text-primary')
						var verifikasi = 'Terverifikasi'
					}else{
						$('#verifnasabah').addClass('text-danger')
						$('#verifnasabah').removeClass('text-primary')
						var verifikasi = 'Belum terverifikasi'
					}
					$('#verifnasabah').html(verifikasi)
					$('#no_ktp').val(val.no_ktp)
					$('#npwp_cn').val(val.npwp)
					$('#no_kk_cn').val(val.no_kk)
					$('#nama_lengkap_cn').val(val.nama_lengkap)
					$('#nama_identitas_cn').val(val.nama_identitas)
					$('#nama_panggilan_cn').val(val.nama_panggilan)
					$('#nama_gadis_ibu_kandung_cn').val(val.nama_gadis_ibu_kandung)
					$('#tampat_lahir_cn').val(val.tempat_lahir)
					$('#kewarganegaraan_cn').val(val.kewarganegaraan)
					$('#tinggal_sejak_cn').val(val.tinggal_sejak)
					$('#jum_tanah_cn').val(val.jumlah_kepemilikan_tanah)
					$('#jum_tanah_bangunan_cn').val(val.jumlah_kepemilikan_tanah_bangunan)
					$('#jum_motor_cn').val(val.jumlah_kendaraan_motor)
					$('#jum_mobil_cn').val(val.jumlah_kendaraan_mobil)
					$('#telp_rumah_cn').val(val.telp_rumah)
					$('#telp_kantor_cn').val(val.telp_kantor)
					$('#telp_hp_cn').val(val.telp_hp)
					$('#email_cn').val(val.email)
					$('#alamat_cn').val(val.alamat)
					$('#rt_cn').val(val.rt)
					$('#rw_cn').val(val.rw)
					$('#alamat_dom_cn').val(val.domisili_alamat)
					$('#rt_dom_cn').val(val.domisili_rt)
					$('#rw_dom_cn').val(val.domisili_rw)
					$('#nama_kerabat').val(val.nama_kerabat)
					$('#hubungan_dengan_calon').val(val.hubungan_dengan_calon)
					$('#no_telp_kerabat').val(val.no_telp_kerabat)
					$('#alamat_kerabat').val(val.alamat_kerabat)
					$('#propinsi_kerabat').val(val.propinsi_kerabat)
					$('#kabupaten_kerabat').val(val.kabupaten_kerabat)
					$('#kecamatan_kerabat').val(val.kecamatan_kerabat)
					$('#rt_kerabat').val(val.rt_kerabat)
					$('#rw_kerabat').val(val.rw_kerabat)
					$('#kode_pos_Kerabat').val(val.kode_pos_kerabat)
					getPekerjaan(val.pekerjaan)
					getPendidikan(val.pendidikan,'cn')
					getsumberPenghasilan(val.sumber_penghasilan,'cn')
					kepemilikanRumah(val.kepemilikan_rumah)
					jenis_debitur(val.jenis_debitur,val.verifikasi)
					kelamin(val.kelamin,val.verifikasi,'cn')
					getAo(val.kode_ao,val.verifikasi)
					getKantor(val.kode_kantor,val.verifikasi)
					getAgama(val.kode_agama,'cn')
					console.log(val.kode_agama)
					getPropinsi('cn','alamat',val.propinsi_id)
					getPropinsi('cn','alamat-dom',val.domisili_propinsi_id)
					getKabKota('cn','alamat',val.kotakab_id,val.propinsi_id)
					getKabKota('cn','alamat-dom',val.domisili_kotakab_id,val.domisili_propinsi_id)
					getKecamatan('cn','alamat',val.kecamatan_id,val.kotakab_id)
					getKecamatan('cn','alamat-dom',val.domisili_kecamatan_id,val.domisili_kotakab_id)
					getKelurahan('cn','alamat',val.kelurahan_id,val.kecamatan_id)
					getKelurahan('cn','alamat-dom',val.domisili_kelurahan_id,val.domisili_kecamatan_id)
					//console.log(val.kode_ao)
				})
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
	showDetailPasangan(id_calon_debitur)
	'use strict'
	function showDetailPasangan(id_calon_debitur) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detail_pasangan/'+id_calon_debitur,
			dataType:'JSON',
			beforeSend:function() {
				/*$('input[type=text]').attr('disabled','true').val('Sedang mengambil data. . . ')
				$('input[type=number]').attr('disabled','true')
				$('input[type=email]').attr('disabled','true')*/
				$('#opt-kelamin-pasangan').html(loading)
				$('#opt-agama-pasangan').html(loading)
				$('#opt-pendidikan-pasangan').html(loading)
				$('#opt-sumber-penghasilan-pasangan').html(loading)
				$('#opt-propinsi-pasangan').html(loading)
				$('#opt-propinsi-dom-pasangan').html(loading)
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')

			},
			success:function (data) {
				$('#edit-nasabah').prop('disabled',false)
				$('#edit-nasabah').html('Simpan Perubahan')
				if (data.msg == 'Data tidak ditemukan') {
					$('#form_pasangan').hide()
					$('#status_pasangan').val('tidakada')
				}else{
					$.each(data,function (key,val) {
						if (val.verifikasi == 1) {
							$('#no_ktp_pasangan').attr("readonly","")
							$('#npwp_pasangan').attr("readonly","")
							$('#no_kk_pasangan').attr("readonly","")
							//$('#nama_gadis_ibu_kandung_pasangan').attr("readonly","")
							$('#tempat_lahir_pasangan').attr("readonly","")
							$('#tgl_lahir_pasangan').attr("readonly","")
							$('#tgl_lahir_pasangan').attr("type","text")
							$('#tgl_lahir_pasangan').val(changeDate(val.tgl_lahir))
						}else{
							$('#tgl_lahir_pasangan').attr("type","date")
							$('#tgl_lahir_pasangan').val(val.tgl_lahir)
						}
						$('#no_ktp_pasangan').val(val.no_ktp)
						$('#npwp_pasangan').val(val.npwp)
						$('#no_kk_pasangan').val(val.no_kk)
						$('#nama_lengkap_pasangan').val(val.nama_lengkap)
						$('#nama_identitas_pasangan').val(val.nama_identitas)
						$('#nama_panggilan_pasangan').val(val.nama_panggilan)
						$('#nama_gadis_ibu_kandung_pasangan').val(val.nama_gadis_ibu_kandung)
						kelamin(val.kelamin,val.verifikasi,'pasangan')
						$('#tempat_lahir_pasangan').val(val.tempat_lahir)
						getAgama(val.kode_agama,'pasangan')
						$('#kewarganegaraan_pasangan').val(val.kewarganegaraan)
						$('#pekerjaan_pasangan').val(val.pekerjaan)
						getPendidikan(val.pendidikan,'pasangan')
						getsumberPenghasilan(val.sumber_penghasilan,'pasangan')
						$('#telp_rumah_pasangan').val(val.telp_rumah)
						$('#telp_kantor_pasangan').val(val.telp_kantor)
						$('#telp_hp_pasangan').val(val.telp_hp)
						$('#email_pasangan').val(val.email)
						$('#alamat_pasangan').val(val.alamat)
						getPropinsi('pasangan','alamat',val.propinsi_id)
						getKabKota('pasangan','alamat',val.kotakab_id,val.propinsi_id)
						getKecamatan('pasangan','alamat',val.kecamatan_id,val.kotakab_id)
						getKelurahan('pasangan','alamat',val.kelurahan_id,val.kecamatan_id)
						$('#rt_pasangan').val(val.rt)
						$('#rw_pasangan').val(val.rw)
						$('#alamat_dom_pasangan').val(val.domisili_alamat)
						getPropinsi('pasangan','alamat-dom',val.domisili_propinsi_id)
						getKabKota('pasangan','alamat-dom',val.domisili_kotakab_id,val.domisili_propinsi_id)
						getKecamatan('pasangan','alamat-dom',val.domisili_kecamatan_id,val.domisili_kotakab_id)
						getKelurahan('pasangan','alamat-dom',val.domisili_kelurahan_id,val.domisili_kecamatan_id)
						$('#rt_dom_pasangan').val(val.domisili_rt)
						$('#rw_dom_pasangan').val(val.domisili_rw)
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

	showDetailPenjamin(id_calon_debitur)
	function showDetailPenjamin(id_calon_debitur) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detail_penjamin/'+id_calon_debitur,
			dataType:'JSON',
			beforeSend:function() {
				/*$('input[type=text]').attr('disabled','true').val('Sedang mengambil data. . . ')
				$('input[type=number]').attr('disabled','true')
				$('input[type=email]').attr('disabled','true')*/
				$('#opt-kelamin-penjamin').html(loading)
				$('#opt-agama-penjamin').html(loading)
				$('#opt-propinsi-penjamin').html(loading)
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
			},
			success:function (data) {
				$('#edit-nasabah').prop('disabled',false)
				$('#edit-nasabah').html('Simpan Perubahan')
				if (data.msg == 'Data tidak ditemukan') {
					$('#form_penjamin').hide()
					$('#status_penjamin').val('tidakada')
				}else{
					$.each(data,function (key,val) {
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
							//$('#nama_gadis_ibu_kandung_penjamin').attr("readonly","")
							$('#tempat_lahir_penjamin').attr("readonly","")
							$('#tgl_lahir_penjamin').attr("readonly","")
							$('#hub_debitur').attr("readonly","")

							$('#tgl_lahir_penjamin').attr("type","text")
							$('#tgl_lahir_penjamin').val(changeDate(val.tgl_lahir))
						}else{
							$('#tgl_lahir_penjamin').attr("type","date")
							$('#tgl_lahir_penjamin').val(val.tgl_lahir)

						}
						$('#no_ktp_penjamin').val(val.no_ktp)
						$('#nama_lengkap_penjamin').val(val.nama_lengkap)
						$('#nama_identitas_penjamin').val(val.nama_identitas)
						$('#npwp_penjamin').val(val.npwp)
						kelamin (val.kelamin,val.verifikasi,'penjamin')
						$('#no_kk_penjamin').val(val.no_kk)
						$('#tempat_lahir_penjamin').val(val.tempat_lahir)
						$('#kewarganegaraan_penjamin').val(val.kewarganegaraan)
						getAgama(val.kode_agama,'penjamin')
						$('#nama_gadis_ibu_kandung_penjamin').val(val.nama_gadis_ibu_kandung)
						$('#pekerjaan_penjamin').val(val.pekerjaan)
						$('#hub_debitur').val(val.hubungan_debitur)
						$('#alamat_penjamin').val(val.alamat)
						getPropinsi('penjamin','alamat',val.propinsi_id)
						getKabKota('penjamin','alamat',val.kotakab_id,val.propinsi_id)
						getKecamatan('penjamin','alamat',val.kecamatan_id,val.kotakab_id)
						getKelurahan('penjamin','alamat',val.kelurahan_id,val.kecamatan_id)
						$('#rt_penjamin').val(val.rt)
						$('#rw_penjamin').val(val.rw)
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
	function getPekerjaan(pekerjaan) {
		$.ajax({
			type:'GET',
			url:url+'Home/Pekerjaan',
			dataType:'JSON',
			beforeSend:function () {
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
			},
			success:function(data){
			$('#edit-nasabah').prop('disabled',false)
			$('#edit-nasabah').html('Simpan Perubahan')
			var html = ''
				$.each(data, function(index, value ) {
					if (pekerjaan == value.KODE_PEKERJAAN) {
						html += '<option value="'+value.KODE_PEKERJAAN+'" selected>'+value.DESKRIPSI_PEKERJAAN+'</option>'
					}else{
						html += '<option value="'+value.KODE_PEKERJAAN+'">'+value.DESKRIPSI_PEKERJAAN+'</option>'
					}
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

	'use strict'
	function getPendidikan(pendidikan,status) {
		$.ajax({
			type:'GET',
			url:url+'Home/pendidikan',
			dataType:'JSON',
			beforeSend:function () {
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
			},
			success:function(data){
			$('#edit-nasabah').prop('disabled',false)
			$('#edit-nasabah').html('Simpan Perubahan')
			var html = ''
				$.each(data, function(index, value ) {
					if (pendidikan == value.kode_pendidikan) {
						html += '<option value="'+value.kode_pendidikan+'" selected>'+value.nama_pendidikan+'</option>'
					}else{
						html += '<option value="'+value.kode_pendidikan+'">'+value.nama_pendidikan+'</option>'
					}
				})

				if (status == 'cn') {
					$('#opt-pendidikan-cn').html('<select class="form-control" name="pen_terakhir_cn"><option value="null">Pilih</option>'+html+'</select>')
				}else if (status == 'pasangan') {
					$('#opt-pendidikan-pasangan').html('<select class="form-control" name="pen_terakhir_pasangan"><option value="null">Pilih</option>'+html+'</select>')
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

	'use strict'
	function getsumberPenghasilan(penghasilan,status) {
		$.ajax({
			type:'GET',
			url:url+'Home/sumberPenghasilan',
			dataType:'JSON',
			beforeSend:function () {
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
			},
			success:function(data){
			$('#edit-nasabah').prop('disabled',false)
			$('#edit-nasabah').html('Simpan Perubahan')
			var html = ''
				$.each(data, function(index, value ) {
					if (penghasilan == value.kode_sumber_penghasilan) {
						html += '<option value="'+value.kode_sumber_penghasilan+'" selected>'+value.desk_sumber_penghasilan+'</option>'
					}else{
						html += '<option value="'+value.kode_sumber_penghasilan+'">'+value.desk_sumber_penghasilan+'</option>'
					}
				})
				if (status == 'cn') {
					$('#opt-sumber-penghasilan-cn').html('<select class="form-control" name="sumber_peng_cn"><option value="null">Pilih</option>'+html+'</select>')
				}else if (status == 'pasangan') {
					$('#opt-sumber-penghasilan-pasangan').html('<select class="form-control" name="sumber_peng_pasangan"><option value="null">Pilih</option>'+html+'</select>')
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

	'use strict'
	function kepemilikanRumah(kepRumah) {
		$.ajax({
			type:'GET',
			url:url+'Home/kepemilikanRumah',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-kepemilikan-rumah-cn').html(loading)
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
			},
			success:function(data){
			$('#edit-nasabah').prop('disabled',false)
			$('#edit-nasabah').html('Simpan Perubahan')
			var html = ''
				$.each(data, function(index, value ) {
					if (kepRumah == value.kode_kepemilikan) {
						html += '<option value="'+value.kode_kepemilikan+'" selected>'+value.nama_kepemilikan+'</option>'
					}else{
						html += '<option value="'+value.kode_kepemilikan+'">'+value.nama_kepemilikan+'</option>'
					}
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

	function kelamin (kelamin,verifikasi,status) {
		var jenis_kelamin = ['L','P']
		var html = ''
		$.each(jenis_kelamin,function(k,v) {
			if (v == kelamin) {
				html += '<option value="'+v+'" selected>'+v+'</option>'
			}else{
				html += '<option value="'+v+'">'+v+'</option>'
			}
		})
			if (verifikasi == 1 && status == 'cn') {
				$('#opt-kelamin-cn').html('<input type="text" class="form-control" name="kelamin_cn" value="'+kelamin+'" readonly/>')
			}else if (verifikasi == 0 && status == 'cn'){
				$('#opt-kelamin-cn').html('<select class="form-control" name="kelamin_cn"><option value="null">Pilih</Option>'+html+'</select>')
			}else if (verifikasi == 1 && status == 'pasangan'){
				$('#opt-kelamin-pasangan').html('<input type="text" class="form-control" name="kelamin_pasangan" value="'+kelamin+'" readonly/>')
			}else if (verifikasi == 0 && status == 'pasangan'){
				$('#opt-kelamin-pasangan').html('<select class="form-control" name="kelamin_pasangan"><option value="null">Pilih</Option>'+html+'</select>')
			}else if (verifikasi == 1 && status == 'penjamin'){
				$('#opt-kelamin-penjamin').html('<input type="text" class="form-control" name="kelamin_penjamin" value="'+kelamin+'" readonly/>')
			}else if (verifikasi == 0 && status == 'penjamin'){
				$('#opt-kelamin-penjamin').html('<select class="form-control" name="kelamin_penjamin"><option value="null">Pilih</Option>'+html+'</select>')
			}
	}


	function jenis_debitur (jd,status) {
		var jenis_debitur = ['INDIVIDU','BADAN USAHA']
		var html = ''
		$.each(jenis_debitur,function(k,v) {
			if (v == jd) {
				html += '<option value="'+v+'" selected>'+v+'</option>'
			}else{
				html += '<option value="'+v+'">'+v+'</option>'
			}
		})
			if (status == 1) {
				$('#opt-jd').html('<input type="text" class="form-control" name="jenis_debitur_cn" value="'+jd+'" readonly/>')
			}else{
				$('#opt-jd').html('<select class="form-control" name="jenis_debitur_cn"><option value="null">Pilih</Option>'+html+'</select>')
			}
	}

	'use strict'
	function getKantor(kode_kantor,status) {
		$.ajax({
			type:'GET',
			url:url+'Home/kantor',
			dataType:'JSON',
			beforeSend:function () {
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
			},
			success:function(data){
				$('#edit-nasabah').prop('disabled',false)
				$('#edit-nasabah').html('Simpan Perubahan')
			var html = ''
				$.each(data, function(index, value ) {
					if (value.KODE_KANTOR == kode_kantor) {
						if (status == 1) {
						 	val = value.nama_area_kerja
						}else{
							html += '<option value="'+value.KODE_KANTOR+'" selected>'+value.nama_area_kerja+'</option>'
						}
					}else{
						html += '<option value="'+value.KODE_KANTOR+'">'+value.nama_area_kerja+'</option>'
					}
				})

				if (status == 1) {
					$('#opt-kantor').html('<input type="text" class="form-control" value="'+val+'" readonly=""/>')
				}else{
					$('#opt-kantor').html('<select class="form-control" name="kantor" disabled="true"><option value="null">Pilih</Option>'+html+'</select>')
				}
			}
		})
	}

	'use strict'
	function getAo(Ao,status) {
		$.ajax({
			type:'GET',
			url:url+'Home/ao',
			dataType:'JSON',
			beforeSend:function () {
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
			},
			success:function(data){
				$('#edit-nasabah').prop('disabled',false)
				$('#edit-nasabah').html('Simpan Perubahan')
				var html = ''
				$.each(data, function(index, value ) {
					//console.log(Ao)
					if (value.KODE_GROUP2 == Ao) {
						if (status == 1) {
							val = value.deskripsi_group2
						}else{
							html += '<option value="'+value.KODE_GROUP2+'" selected>'+value.deskripsi_group2+'</option>'
						}
					}else{
						html += '<option value="'+value.KODE_GROUP2+'" >'+value.deskripsi_group2+'</option>'
					}
					//console.log(html)
				})
					if (status == 1) {
						$('#opt-ao').html('<input type="text" class="form-control" value="'+val+'" readonly=""/>')
					}else{
						$('#opt-ao').html('<select class="form-control" name="ao"><option value="null">Pilih</Option>'+html+'</select>')
					}
			}
		})
	}

	'use strict'
	function getAgama(agama,status) {
		$.ajax({
			type:'GET',
			url:url+'Home/agama',
			dataType:'JSON',
			beforeSend:function () {
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
			},
			success:function(data){
				$('#edit-nasabah').prop('disabled',false)
				$('#edit-nasabah').html('Simpan Perubahan')
				var html = ''
				$.each(data, function(index, value ) {
					if (value.kode_agama == agama) {
						html += '<option value="'+value.kode_agama+'" selected>'+value.DESKRIPSI+'</option>'
					}else{
						html += '<option value="'+value.kode_agama+'">'+value.DESKRIPSI+'</option>'
					}
				})

				if (status == 'cn') {
					$('#opt-agama-debitur').html('<select class="form-control" name="agama_cn"><option value="null">Pilih</Option>'+html+'</select>')
				}else if(status == 'pasangan'){
					$('#opt-agama-pasangan').html('<select class="form-control" name="agama_pasangan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if(status == 'penjamin'){
					$('#opt-agama-penjamin').html('<select class="form-control" name="agama_penjamin"><option value="null">Pilih</Option>'+html+'</select>')
				}
			}
		})
	}

	$('#opt-propinsi').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan').html(' - ')
		$('#opt-kelurahan').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota('cn','alamat',null,propinsi_id)
	})

	$('#opt-propinsi-dom-cn').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan-dom-cn').html(' - ')
		$('#opt-kelurahan-dom-cn').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota('cn','alamat-dom',null,propinsi_id)
	})

	$('#opt-propinsi-pasangan').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan-pasangan').html(' - ')
		$('#opt-kelurahan-pasangan').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota('pasangan','alamat',null,propinsi_id)
	})

	$('#opt-propinsi-dom-pasangan').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan-dom-pasangan').html(' - ')
		$('#opt-kelurahan-dom-pasangan').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota('pasangan','alamat-dom',null,propinsi_id)
	})

	$('#opt-propinsi-penjamin').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan-penjamin').html(' - ')
		$('#opt-kelurahan-penjamin').html(' - ')
		var propinsi_id = $(this).val()
		getKabKota('penjamin','alamat',null,propinsi_id)
	})

	'use strict'
	function getPropinsi(status_or,status,propinsi) {
		$.ajax({
		type:'GET',
		url:url+'Home/provinsi',
		dataType:'JSON',
		beforeSend:function () {
			$('#edit-nasabah').prop('disabled',true)
			$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
		},
		success:function(data){
			$('#edit-nasabah').prop('disabled',false)
			$('#edit-nasabah').html('Simpan Perubahan')
			var html = ''
			$.each(data, function(index, value) {
				if (value.propinsi_id == propinsi) {
					html += '<option value="'+value.propinsi_id+'" selected>'+value.name+'</option>'
				}else{
					html += '<option value="'+value.propinsi_id+'">'+value.name+'</option>'
				}
				//console.log(html)
			})

			if (status == 'alamat' && status_or == 'cn') {
				$('#opt-propinsi').html('<select class="form-control" name="propinsi_cn" id="selectPropinsi"><option value="null">Pilih</Option>'
				+html+
				'</select>')
			}else if (status == 'alamat-dom' && status_or == 'cn') {
				$('#opt-propinsi-dom-cn').html('<select class="form-control" name="propinsi_dom_cn" id="selectPropinsi"><option value="null">Pilih</Option>'
				+html+
				'</select>')
			}else if (status == 'alamat' && status_or == 'pasangan') {
				$('#opt-propinsi-pasangan').html('<select class="form-control" name="propinsi_pasangan" id="selectPropinsi"><option value="null">Pilih</Option>'
				+html+
				'</select>')
			}else if (status == 'alamat-dom' && status_or == 'pasangan') {
				$('#opt-propinsi-dom-pasangan').html('<select class="form-control" name="propinsi_dom_pasangan" id="selectPropinsi"><option value="null">Pilih</Option>'
				+html+
				'</select>')
			}else if (status == 'alamat' && status_or == 'penjamin') {
				$('#opt-propinsi-penjamin').html('<select class="form-control" name="propinsi_penjamin" id="selectPropinsi"><option value="null">Pilih</Option>'
				+html+
				'</select>')
			}
		}
		})
	}

	$('#opt-kotakab').on('change','#selectKabkota', function () {
		$('#opt-kelurahan').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan('cn','alamat',null,kotakab_id)
	})

	$('#opt-kotakab-dom-cn').on('change','#selectKabkota', function () {
		$('#opt-kelurahan-dom-cn').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan('cn','alamat-dom',null,kotakab_id)
	})

	$('#opt-kotakab-pasangan').on('change','#selectKabkota', function () {
		$('#opt-kelurahan-pasangan').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan('pasangan','alamat',null,kotakab_id)
	})

	$('#opt-kotakab-dom-pasangan').on('change','#selectKabkota', function () {
		$('#opt-kelurahan-dom-pasangan').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan('pasangan','alamat-dom',null,kotakab_id)
	})

	$('#opt-kotakab-penjamin').on('change','#selectKabkota', function () {
		$('#opt-kelurahan-penjamin').html(' - ')
		var kotakab_id = $(this).val()
		getKecamatan('penjamin','alamat',null,kotakab_id)
	})

	'use strict'
	function getKabKota(status_or,status,kotakab,propinsi_id) {
		$.ajax({
		type:'GET',
		url:url+'Home/kotakab/'+propinsi_id,
		dataType:'JSON',
		beforeSend:function () {
			$('#edit-nasabah').prop('disabled',true)
			$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
			if (status == 'alamat' && status_or =='cn') {
				$('#opt-kotakab').html(loading)
			}else if(status == 'alamat-dom' && status_or =='cn'){
				$('#opt-kotakab-dom-cn').html(loading)
			}else if(status == 'alamat' && status_or =='pasangan'){
				$('#opt-kotakab-pasangan').html(loading)
			}else if(status == 'alamat-dom' && status_or =='pasangan'){
				$('#opt-kotakab-dom-pasangan').html(loading)
			}else if(status == 'alamat' && status_or =='penjamin'){
				$('#opt-kotakab-penjamin').html(loading)
			}
		},
		success:function(data){
			//console.log(data)
			$('#edit-nasabah').prop('disabled',false)
			$('#edit-nasabah').html('Simpan Perubahan')
			var html = ''
			$.each(data, function(index, value ) {
				if (value.kotakab_id == kotakab) {
					html += '<option value="'+value.kotakab_id+'" selected>'+value.name+'</option>'
				}else{
					html += '<option value="'+value.kotakab_id+'">'+value.name+'</option>'
				}
				//console.log(html)
			})
			if (status == 'alamat' && status_or == 'cn') {
				$('#opt-kotakab').html('<select class="form-control" name="kabkota_cn" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
			}else if(status == 'alamat-dom' && status_or == 'cn'){
				$('#opt-kotakab-dom-cn').html('<select class="form-control" name="kabkota_dom_cn" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
			}else if(status == 'alamat' && status_or == 'pasangan'){
				$('#opt-kotakab-pasangan').html('<select class="form-control" name="kabkota_pasangan" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
			}else if(status == 'alamat-dom' && status_or == 'pasangan'){
				$('#opt-kotakab-dom-pasangan').html('<select class="form-control" name="kabkota_dom_pasangan" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
			}else if(status == 'alamat' && status_or == 'penjamin'){
				$('#opt-kotakab-penjamin').html('<select class="form-control" name="kabkota_penjamin" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
			}
		}
		})
	}

	$('#opt-kecamatan').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan('cn','alamat',null,kecamatan_id)
	})

	$('#opt-kecamatan-dom-cn').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan('cn','alamat-dom',null,kecamatan_id)
	})

	$('#opt-kecamatan-pasangan').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan('pasangan','alamat',null,kecamatan_id)
	})

	$('#opt-kecamatan-dom-pasangan').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan('pasangan','alamat-dom',null,kecamatan_id)
	})

	$('#opt-kecamatan-penjamin').on('change','#selectKecamatan', function () {
		var kecamatan_id = $(this).val()
		getKelurahan('penjamin','alamat',null,kecamatan_id)
	})

	'use strict'
	function getKecamatan(status_or,status,kecamatan,kotakab_id) {
		$.ajax({
			type:'GET',
			url:url+'Home/kecamatan/'+kotakab_id,
			dataType:'JSON',
			beforeSend:function () {
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
				if (status == 'alamat' && status_or == 'cn') {
					$('#opt-kecamatan').html(loading)
				}else if(status == 'alamat-dom' && status_or == 'cn'){
					$('#opt-kecamatan-dom-cn').html(loading)
				}else if(status == 'alamat' && status_or == 'pasangan'){
					$('#opt-kecamatan-pasangan').html(loading)
				}else if(status == 'alamat-dom' && status_or == 'pasangan'){
					$('#opt-kecamatan-dom-pasangan').html(loading)
				}else if(status == 'alamat' && status_or == 'penjamin'){
					$('#opt-kecamatan-penjamin').html(loading)
				}
			},
			success:function(data){
				$('#edit-nasabah').prop('disabled',false)
				$('#edit-nasabah').html('Simpan Perubahan')
				//console.log(data)
				var html = ''
				$.each(data, function(index, value ) {
					if (value.kecamatan_id == kecamatan) {
						html += '<option value="'+value.kecamatan_id+'" selected>'+value.name+'</option>'
					}else{
						html += '<option value="'+value.kecamatan_id+'">'+value.name+'</option>'
					}
				})
				if (status == 'alamat' && status_or == 'cn') {
					$('#opt-kecamatan').html('<select class="form-control" name="kecamatan_cn" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if(status == 'alamat-dom' && status_or == 'cn'){
					$('#opt-kecamatan-dom-cn').html('<select class="form-control" name="kecamatan_dom_cn" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if(status == 'alamat' && status_or == 'pasangan'){
					$('#opt-kecamatan-pasangan').html('<select class="form-control" name="kecamatan_pasangan" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if(status == 'alamat-dom' && status_or == 'pasangan'){
					$('#opt-kecamatan-dom-pasangan').html('<select class="form-control" name="kecamatan_dom_pasangan" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if(status == 'alamat' && status_or == 'penjamin'){
					$('#opt-kecamatan-penjamin').html('<select class="form-control" name="kecamatan_penjamin" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
				}
			}
		})
	}

	'use strict'
	function getKelurahan(status_or,status,kelurahan,kecamatan_id) {
		$.ajax({
			type:'GET',
			url:url+'Home/kelurahan/'+kecamatan_id,
			dataType:'JSON',
			beforeSend:function () {
				$('#edit-nasabah').prop('disabled',true)
				$('#edit-nasabah').html(loading+'Sedang mengambil data . . .')
				if (status == 'alamat' && status_or == 'cn') {
					$('#opt-kelurahan').html(loading)
				}else if(status == 'alamat-dom' && status_or == 'cn'){
					$('#opt-kelurahan-dom-cn').html(loading)
				}else if(status == 'alamat' && status_or == 'pasangan'){
					$('#opt-kelurahan-pasangan').html(loading)
				}else if(status == 'alamat-dom' && status_or == 'pasangan'){
					$('#opt-kelurahan-dom-pasangan').html(loading)
				}else if(status == 'alamat' && status_or == 'penjamin'){
					$('#opt-kelurahan-penjamin').html(loading)
				}
			},
			success:function(data){
				$('#edit-nasabah').prop('disabled',false)
				$('#edit-nasabah').html('Simpan Perubahan')
				//console.log(data)
				var html = ''
				$.each(data, function(index, value ) {
					if (value.kelurahan_id == kelurahan) {
						html += '<option value="'+value.kelurahan_id+'" selected>'+value.name+'</option>'
					}else{
						html += '<option value="'+value.kelurahan_id+'">'+value.name+'</option>'
					}
				})
				if (status == 'alamat' && status_or == 'cn') {
					$('#opt-kelurahan').html('<select class="form-control" name="kelurahan_cn" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if(status == 'alamat-dom' && status_or == 'cn'){
					$('#opt-kelurahan-dom-cn').html('<select class="form-control" name="kelurahan_dom_cn" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if(status == 'alamat' && status_or == 'pasangan'){
					$('#opt-kelurahan-pasangan').html('<select class="form-control" name="kelurahan_pasangan" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if(status == 'alamat-dom' && status_or == 'pasangan'){
					$('#opt-kelurahan-dom-pasangan').html('<select class="form-control" name="kelurahan_dom_pasangan" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
				}else if(status == 'alamat' && status_or == 'penjamin'){
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
			toastNotvalid('Tidak boleh kosong!')
			return false;
		}
		return true;
	}

	'use strict'
	function checkSelect(obj) {
	$(obj).css("border","")
	if($(obj).val() == "null") {
		$(obj).css("border","#FF0000 1px solid")
		toastNotvalid('Tidak boleh kosong!')
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
