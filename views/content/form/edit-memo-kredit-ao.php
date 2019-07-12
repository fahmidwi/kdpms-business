<div id="snackbar"></div>
<div class="row">
	<div class="col-lg-12" id="wadah">
		<?php include '../component/header-back.php'; ?>
		<div class="card" style="margin-top: 1%">
			<div class="card-body">
				<a href="javascript:void(0)" class="Buttoggle" from="memoao"><i class="mdi mdi-dots-horizontal" style="float:right;"></i></a>
			 	<h4 style="">Form Edit Memo Ao</h4><hr><br>
				<div id="conMemoAo">
					<form class="form-sample" id="form-edit-memo-ao">
						<div class="col-12 grid-margin">
	            <div class="card">
	              <div class="card-body">
	              	<input type="hidden" id="id_order" name="id_order">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Calon Debitur</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" style="margin-left: -5%; width: 105%;" id="nama_calon_debitur" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Jaminan Utama</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" style="margin-left: -5%; width: 105%;" id="jaminan_utama" readonly/>
													<input type="hidden" name="jaminan_utama" id="v_jaminan_utama" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Sumber Informasi</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" style="margin-left: -5%; width: 105%;"  id="sumber_informasi" readonly/>
													<input type="hidden" name="sumber_informasi" id="v_sumber_informasi">
												</div>
											</div>
										</div>
									</div>
	              	<div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Anak</label>
                          <div class="col-sm-9">
                            <textarea type="text" class="form-control" style="margin-left: -5%; width: 105%;"  id="nama_anak" name="nama_anak" placeholder="Masukan Nama Anak" /></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Sekolah</label>
                          <div class="col-sm-9">
                            <textarea type="text" class="form-control" style="margin-left: -5%; width: 105%;"  id="nama_sekolah" name="nama_sekolah" placeholder="Masukan Nama Sekolah" /></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alamat Sekolah Anak</label>
                          <div class="col-sm-9">
                            <textarea type="text" class="form-control" style="margin-left: -5%; width: 105%;"  id="alamat_sekolah_anak" name="alamat_sekolah_anak" placeholder="Masukan Alamat Sekolah"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
										<hr><br>
                      <b class="card-description">
                      Fasilitas
                      </b><br><br>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Type Kredit</label>
	                        <div class="col-sm-9">
	                          <div id="opt-type-kredit"></div>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
										<div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tujuan Kredit</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" name="tujuan_kredit" id="tujuan_kredit" style="margin-left: -5%; width: 105%;" placeholder="Masukan Tujuan Kredit"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
	                  <div class="row">
	                    <div class="col-md-6">
	                      <div class="form-group row">
	                        <label class="col-sm-4 col-form-label">Jenis Fasilitas</label>
	                        <div class="col-sm-8">
	                          <select class="form-control" name="jenis_fasilitas" id="jenis_fasilitas" style="margin-left: 15%; width: 80%;">
	                            <option value="KONSUMTIF">KONSUMTIF</option>
	                            <option value="MODAL KERJA">MODAL KERJA</option>
	                            <option value="INVESTASI">INVESTASI</option>
	                          </select>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="col-md-6">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Produk</label>
	                        <div class="col-sm-9">
	                          <div id="opt-produk"></div>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row">
	                    <div class="col-md-6">
	                      <div class="form-group row">
	                        <label class="col-sm-4 col-form-label">Plafond Kredit</label>
	                        <div class="col-sm-8">
	                          <input class="form-control" type="text" name="plafond" id="plafond" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Plafond"  style="margin-left: 15%; width: 80%;"/>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="col-md-6">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Jangka Waktu</label>
	                        <div class="col-sm-9">
	                          <input type="text" name="jangka_waktu" class="form-control" id="jangka_waktu" placeholder="Masukan Jangka Waktu">
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Suku Bunga</label>
	                        <div class="col-sm-9">
	                          <input class="form-control" type="text" placeholder="Masukan Suku Bunga" id="suku_bunga" style="margin-left: -5%; width: 105%;" name="suku_bunga" />
	                        </div>
	                      </div>
	                    </div>
	                     <div class="col-md-6">
	                      <div class="form-group row">
	                        <label class="col-sm-4 col-form-label">Akad Kredit</label>
	                        <div class="col-sm-8">
	                          <input type="text" style="margin-left: 15%; width: 80%;" name="akad_kredit" placeholder="Masukan Akad Kredit" id="akad_kredit" class="form-control">
	                        </div>
	                      </div>
	                    </div>
	                    <div class="col-md-6">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Akad Jaminan</label>
	                        <div class="col-sm-9">
	                          <input type="text" name="akad_jaminan" placeholder="Masukan Akad Kredit" id="akad_jaminan" class="form-control">
	                        </div>
	                      </div>
	                    </div>
	                  </div>
										<hr><br>
                    <br>
                      <b class="card-description">
                        Kapasitas Peminjam
                      </b><br><br>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Gaji Debitur</label>
	                        <div class="col-sm-9">
	                          <input type="text" class="form-control" name="gaji_debitur" id="gaji_debitur" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Gaji Debitur" style="margin-left: -5%; width: 105%;"/>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Gaji Pasangan</label>
	                        <div class="col-sm-9">
	                          <input type="text" class="form-control" name="gaji_pasangan" id="gaji_pasangan" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Gaji Pasangan" style="margin-left: -5%; width: 105%;"/>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Gaji Penjamin</label>
	                        <div class="col-sm-9">
	                          <input type="text" class="form-control" name="gaji_penjamin" id="gaji_penjamin" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Gaji Penjamin" style="margin-left: -5%; width: 105%;"/>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Pengeluaran Rumah Tangga</label>
	                        <div class="col-sm-9">
	                          <input type="text" class="form-control" name="pengeluaran_rumah_tangga" id="pengeluaran_rumah_tangga" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Pengeluaran Rumah Tangga" style="margin-left: -5%; width: 105%;"/>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Pengeluaran Transport</label>
	                        <div class="col-sm-9">
	                          <input type="text" class="form-control" name="pengeluaran_transport" id="pengeluaran_transport" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Pengeluaran Transport" style="margin-left: -5%; width: 105%;"/>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Pengeluaran Pendidikan</label>
	                        <div class="col-sm-9">
	                          <input type="text" class="form-control" name="pengeluaran_pendidikan" id="pengeluaran_pendidikan" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Pengeluaran Pendidikan" style="margin-left: -5%; width: 105%;"/>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Pengeluaran Lainnya</label>
	                        <div class="col-sm-9">
	                          <input type="text" class="form-control" name="pengeluaran_lainnya" id="pengeluaran_lainnya" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Pengeluaran Lainnya" style="margin-left: -5%; width: 105%;"/>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Angsuran Lain</label>
	                        <div class="col-sm-9">
	                          <input type="text" class="form-control" name="angsuran_lain" id="angsuran_lain" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Angsuran Lainnya" style="margin-left: -5%; width: 105%;"/>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
										<hr><br>
                      <b class="card-description">
                      Fasilitas
                      </b><br><br>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Hasil Cek Lingkungan</label>
	                        <div class="col-sm-9">
	                          <textarea class="form-control" name="hasil_cek_lingkungan" id="hasil_cek_lingkungan" style="margin-left: -5%; width: 105%;" placeholder="Masukan Hasil Cek Lingkungan"></textarea>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Vertifikasi Data Calon Debitur</label>
	                        <div class="col-sm-9">
	                          <textarea class="form-control" name="vertifikasi_data_debitur" id="verifikasi_data_debitur" style="margin-left: -5%; width: 105%;" placeholder="Masukan Verifikasi Data Calon Debitur"></textarea>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group row">
	                        <label class="col-sm-3 col-form-label">Keterangan Calon Debitur</label>
	                        <div class="col-sm-9">
	                          <textarea class="form-control" name="ket_calon_debitur" id="ket_calon_debitur" style="margin-left: -5%; width: 105%;" placeholder="Masukan Keterangan Calon Debitur Debitur"></textarea>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	              </div>
	            </div>
	          </div>
	          <h4>Angunan</h4><hr>
	          <div id="col-sertifikat">
				      <div class="col-12 grid-margin" >
				        <div class="card">
				          <div class="card-body">
				              <b class="card-description">
				                Sertifikat
				              </b><br><br>
				             <input type="hidden" name="status_ser" id="status_ser">
				             <div class="row">
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-4 col-form-label">Lokasi</label>
				                    <div class="col-sm-8">
				                      <div id="opt-lokasi-ser"></div>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Kepemilikan</label>
				                    <div class="col-sm-9">
				                      <div id="opt-kepemilikan"></div>
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="row">
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-4 col-form-label">Penggunaan</label>
				                    <div class="col-sm-8">
				                      <div id="opt-penggunaan-ser"></div>
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="row">
				                <div class="col-md-12">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Nomor Sertifikat</label>
				                    <div class="col-sm-9">
				                      <input type="number" class="form-control" name="no_sertifikat" id="no_sertifikat" placeholder="Masukan Nomor Sertifikat" style="margin-left: -5%; width: 105%;" />
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="row">
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-4 col-form-label">Tanggal Sertifikat</label>
				                    <div class="col-sm-8">
				                      <input type="date" name="tgl_sertifikat" class="form-control" id="tgl_sertifikat" style="margin-left: 15%; width: 80%;">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Jenis Sertifikat</label>
				                    <div class="col-sm-9">
				                     <div id="opt-jenis-sertifikat"></div>
				                    </div>
				                  </div>
				                </div>
				              </div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group row">
														<label class="col-sm-4 col-form-label">Tanggal Surat Ukur</label>
														<div class="col-sm-8">
															<input type="date" placeholder="Masukan Nomor Surat Ukur"  style="margin-left: 15%; width: 80%;" class="form-control" name="tgl_surat_ukur" id="tgl_surat_ukur" />
														</div>
													</div>
												</div>
												<div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Nomor Surat Ukur</label>
				                    <div class="col-sm-9">
				                      <input type="text" placeholder="Masukan Nomor Surat Ukur" class="form-control" name="no_surat_ukur" id="no_surat_ukur" />
				                    </div>
				                  </div>
				                </div>
											</div>
				              <!-- <div class="row" id="shm">
				                <div class="col-md-12">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">No SHM</label>
				                    <div class="col-sm-9">
				                      <input class="form-control" type="text" name="no_shm" id="no_shm" placeholder="Masukan Atas Nomor SHM"  style="margin-left: -5%; width: 105%;"/>
				                    </div>
				                  </div>
				                </div>
				              </div> -->
				              <div class="row" id="shgb">
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Masa Berlaku SHGB</label>
				                    <div class="col-sm-9">
				                      <input type="date" name="masa_berlaku_shgb" class="form-control" placeholder="Masukan Pekerjaan" id="masa_berlaku_shgb">
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="row" id="ajb">
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-4 col-form-label">Nomor AJB</label>
				                    <div class="col-sm-8">
				                      <input type="number" placeholder="Masukan Nomor AJB"  style="margin-left: 15%; width: 80%;" class="form-control" name="no_ajb" id="no_ajb" />
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Tanggal AJB</label>
				                    <div class="col-sm-9">
				                      <input type="date" name="tgl_ajb" class="form-control" placeholder="Masukan Pekerjaan" id="tgl_ajb">
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="row" id="shmrs">
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-4 col-form-label">Masa Berlaku SHMRS</label>
				                    <div class="col-sm-8">
				                      <input type="date" name="masa_berlaku_shmrs" class="form-control" id="masa_berlaku_shmrs" style="margin-left: 15%; width: 80%;">
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="row">
				                <div class="col-md-12">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Atas Nama</label>
				                    <div class="col-sm-9">
				                      <input class="form-control" type="text" name="atas_nama" id="atas_nama" placeholder="Masukan Atas Nama"  style="margin-left: -5%; width: 105%;"/>
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="row">
				                <div class="col-md-12">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Alamat</label>
				                    <div class="col-sm-9">
				                      <textarea class="form-control" type="text" name="alamat" id="alamat" placeholder="Masukan Alamat" style="margin-left: -5%; width: 105%;"></textarea>
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="row">
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-4 col-form-label">Luas Tanah</label>
				                    <div class="col-sm-8">
				                      <input class="form-control"  style="margin-left: 15%; width: 80%;" type="number" placeholder="Masukan Luas Tanah" id="luas_tanah" name="luas_tanah" />
				                    </div>
				                  </div>
				                </div>
				                 <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Luas Bangunan</label>
				                    <div class="col-sm-9">
				                      <input class="form-control" type="number" placeholder="Masukan Luas Bangunan" id="luas_bangunan" name="luas_bangunan" />
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="row">
							          <div class="col-md-12">
							            <div class="form-group row">
							              <label class="col-sm-3 col-form-label">IMB</label>
							              <div class="col-sm-9">
							                <input type="text" class="form-control" name="imb" id="imb" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
							              </div>
							            </div>
							          </div>
							        </div>
							        <div class="row">
							          <div class="col-md-12">
							            <div class="form-group row">
							              <label class="col-sm-3 col-form-label">Legalitas</label>
							              <div class="col-sm-9">
							                <input type="text" class="form-control" name="legalitas" id="legalitas" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
							              </div>
							            </div>
							          </div>
							        </div>
							        <div class="row">
							          <div class="col-md-12">
							            <div class="form-group row">
							              <label class="col-sm-3 col-form-label">Catatan Lainnya</label>
							              <div class="col-sm-9">
							                <input type="text" class="form-control" name="catatan_lainnya" id="catatan_lainnya" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
							              </div>
							            </div>
							          </div>
							        </div>
				              <!-- <div class="row">
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-4 col-form-label">Masa Berlaku SHGB</label>
				                    <div class="col-sm-8">
				                      <input type="date" class="form-control"  style="margin-left: 15%; width: 80%;" name="masa_berlaku_shgb" id="masa_berlaku_shgb" />
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="row">
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-4 col-form-label">Nomor AJB</label>
				                    <div class="col-sm-8">
				                      <input type="number" placeholder="Masukan Nomor AJB"  style="margin-left: 15%; width: 80%;" class="form-control" name="no_ajb" id="no_ajb" />
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Tanggal AJB</label>
				                    <div class="col-sm-9">
				                      <input type="date" name="tgl_ajb" class="form-control" placeholder="Masukan Pekerjaan" id="tgl_ajb">
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="row">
				                <div class="col-md-12">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Nomor Surat Ukur</label>
				                    <div class="col-sm-9">
				                      <input type="number" class="form-control" name="no_surat_ukur" id="no_surat_ukur" placeholder="Masukan Nomor Surat Ukur" style="margin-left: -5%; width: 105%;"/>
				                    </div>
				                  </div>
				                </div>
				              </div> -->
				              <div class="row">
				                <div class="col-md-12">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Kondisi Bangunan</label>
				                    <div class="col-sm-9">
				                      <textarea class="form-control" name="kondisi_bangunan" id="kondisi_bangunan" style="margin-left: -5%; width: 105%;" placeholder="Masukan Kondisi Bangunan"></textarea>
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <!-- <div class="row">
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-4 col-form-label">Nilai Taksasi</label>
				                    <div class="col-sm-8">
				                      <input type="text"  style="margin-left: 15%; width: 80%; placeholder="Masukan Nilai Taksasi" id="nilai_taksasi" class="form-control" name="nilai_taksasi"/>
				                    </div>
				                  </div>
												</div>
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Nilai NJOP</label>
				                    <div class="col-sm-9">
				                      <input type="text" name="nilai_njop" class="form-control" id="nilai_njop" placeholder="Masukan Nilai NJOP">
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="row">
				                <div class="col-md-12">
				                  <div class="form-group row">
				                    <label class="col-sm-3 col-form-label">Tanggal Taksasi</label>
				                    <div class="col-sm-9">
				                      <input type="date" placeholder="Masukan Nilai Taksasi" class="form-control" name="tgl_taksasi" id="tgl_taksasi" style="margin-left: -5%; width: 105%;"/>
				                    </div>
				                  </div>
				                </div>
				         			 </div> -->
				        </div>
					      </div><hr>
				      </div>
				    </div>
	          <div id="col-kendaraan">
				      <div class="col-12 grid-margin">
	              <div class="card">
	                <div class="card-body">
	                    <b class="card-description">
	                      Kendaraan
	                    </b><br><br>
	                   <input type="hidden" name="status_ken" id="status_ken">
	                   <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Merk</label>
	                          <div class="col-sm-8">
	                            <div id="opt-merk-kendaraan"></div>
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Type</label>
	                          <div class="col-sm-9">
	                          	<div id="opt-type-kendaraan"></div>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Jenis</label>
	                          <div class="col-sm-9">
	                          	<div id="opt-jenis-kendaraan"></div>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Kepemilikan</label>
	                          <div class="col-sm-9">
	                            <div id="opt-kepemilikan-ken"></div>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Penggunaan</label>
	                          <div class="col-sm-9">
	                            <div id="opt-penggunaan-ken"></div>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Atas Nama</label>
	                          <div class="col-sm-9">
	                            <input class="form-control" type="text" name="atas_nama_kendaraan" id="atas_nama_kendaraan" placeholder="Masukan Atas Nama" style="margin-left: -5%; width: 105%;"/>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Alamat BPKB</label>
	                          <div class="col-sm-9">
	                            <textarea class="form-control" type="text" name="alamat_bpkb_kendaraan" id="alamat_bpkb" placeholder="Masukan Alamat BPKB" style="margin-left: -5%; width: 105%;"></textarea>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Kecamatan BPKB</label>
	                          <div class="col-sm-9">
	                            <textarea class="form-control" type="text" name="kecamatan_bpkb_kendaraan" id="kecamatan_bpkb" placeholder="Masukan Kecamatan BPKB" style="margin-left: -5%; width: 105%;"></textarea>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Kelurahan BPKB</label>
	                          <div class="col-sm-9">
	                            <textarea class="form-control" type="text" name="kelurahan_bpkb_kendaraan" id="kelurahan_bpkb" placeholder="Masukan Kelurahan BPKB" style="margin-left: -5%; width: 105%;"></textarea>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Kota BPKB</label>
	                          <div class="col-sm-9">
	                            <textarea class="form-control" type="text" name="kota_bpkb_kendaraan" id="kota_bpkb" placeholder="Masukan Kota BPKB" style="margin-left: -5%; width: 105%;"></textarea>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Nilai Likuidas</label>
	                          <div class="col-sm-9">
	                            <input class="form-control" type="text" name="nilai_likuidas_kendaraan" id="nilai_likuidas" placeholder="Masukan Nilai Likuidas" style="margin-left: -5%; width: 105%;">
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Kondisi Jaminan</label>
	                          <div class="col-sm-9">
	                            <textarea class="form-control" type="text" name="kondisi_jaminan_kendaraan" id="kondisi_jaminan_kendaraan" placeholder="Masukan Kondisi Jaminan" style="margin-left: -5%; width: 105%;"></textarea>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Tanggal Takasi</label>
	                          <div class="col-sm-9">
	                            <input type="date" placeholder="Masukan Tanggal Takasi" class="form-control" id="tgl_taksasi_kendaraan"  name="tgl_taksasi_kendaraaan" style="margin-left: -5%; width: 105%;"/>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Tanggal Expired Pajak</label>
	                          <div class="col-sm-9">
	                            <input type="date" class="form-control" name="tgl_exp_pajak_kendaraaan"  id="tgl_exp_pajak" style="margin-left: -5%; width: 105%;"/>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Tanggal Expired STNK</label>
	                          <div class="col-sm-9">
	                            <input type="date" class="form-control" name="tgl_exp_stnk_kendaraaan" id="tgl_exp_stnk_kendaraaan" style="margin-left: -5%; width: 105%;"/>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Nomor BPKB</label>
	                          <div class="col-sm-9">
	                            <input type="number" placeholder="Masukan Nomor BPKB" class="form-control" name="no_bpkb_kendaraaan" id="no_bpkb" style="margin-left: -5%; width: 105%;"/>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Nomor Rangka</label>
	                          <div class="col-sm-8">
	                            <input type="number" style="margin-left: 15%; width: 80%;" placeholder="Masukan Nomor Rangka" class="form-control" name="no_rangka_kendaraaan"  id="no_rangka" >
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Nomor Mesin</label>
	                          <div class="col-sm-9">
	                            <input type="number" placeholder="Masukan Nomor Mesin" class="form-control" name="no_mesin_kendaraaan" id="no_mesin">
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Nomor STNK</label>
	                          <div class="col-sm-8">
	                            <input type="number" style="margin-left: 15%; width: 80%;" placeholder="Masukan Nomor STNK" class="form-control" name="no_stnk_kendaraaan" id="no_stnk" >
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Nomor Polisi</label>
	                          <div class="col-sm-9">
	                            <input type="number" placeholder="Masukan Nomor Polisi" class="form-control" name="no_polisi_kendaraaan" id="no_polisi" >
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Tahun</label>
	                          <div class="col-sm-8">
	                            <input type="number" style="margin-left: 15%; width: 80%;" placeholder="Masukan Tahun" class="form-control" name="tahun_kendaraan" id="tahun_kendaraan" >
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Warna</label>
	                          <div class="col-sm-9">
	                            <input type="text" placeholder="Masukan Warna" class="form-control" name="warna_kendaraan" id="warna_kendaraan" >
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Nomor Faktur</label>
	                          <div class="col-sm-9">
	                            <input type="number" placeholder="Masukan Nomor Faktur" id="no_faktur" style="margin-left: -5%; width: 105%;" class="form-control" name="no_faktur" >
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Silinder</label>
	                          <div class="col-sm-9">
	                            <input type="number" placeholder="Masukan Silinder" id="silinder" style="margin-left: -5%; width: 105%;" class="form-control" name="silinder_kendaraan" >
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Nilai Taksasi</label>
	                          <div class="col-sm-9">
	                            <input type="number" placeholder="Masukan Nilai Taksasi" id="nilai_taksasi_kendaraan" style="margin-left: -5%; width: 105%;" class="form-control" name="nilai_taksasi_kendaraan" >
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                </div>
	              </div>
	            </div>
			      </div>
			      <!-- <div class="row">
			      	<div class="col-md-4"></div>
              <div class="col-md-8">
                <div class="form-group row">
                  <label class="col-form-label">ACCOUNT OFFICER MEREKOMENDASIKAN PINJAMAN INI Rp.&nbsp;&nbsp;</label>
                  <div class="col-sm-3">
                    <input type="number" class="form-control" name="realisasi" id="realisasi" style="margin-left: -5%; width: 105%;" placeholder="Rekomendasi">
                  </div>
                  <label class="col-form-label"> - &nbsp;Dengan Tenor</label>
                  <div class="col-sm-2">
                    <div id="opt-tenor"></div>
                  </div>
                </div>
              </div>
            </div> -->
						<button type="button" class="btn btn-primary btn-fw" id="simpan-edit-memo-ao" style="width:100%;">Simpan Data Memo Ao</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="lib/js/changedate.js"></script>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript" src="lib/js/FormatPointInput.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'
	var id_kredit_check = $('#paramsID1').val()
	var id_order = $('#paramsID2').val()
	var id_calon_debitur = $('#paramsID3').val()

	$('#load_page').val('false');
	$('#title-header').html('Edit memo Ao')

	$('#id_order').val(id_order)
	$('#id_calon_debitur').val(id_calon_debitur)
	$('#id_kredit_checking').val(id_kredit_check)

	$('#backcn').click(function () {
		$('#load_page').val('false');
		load()
		$('#tamplate').val('views/content/data/data-memo-kredit-ao.php');
		$('#app').load('views/content/data/data-memo-kredit-ao.php');
	})

	$('.Buttoggle').click(function () {
		var from = $(this).attr('from')
		if (from == 'cnasabah') {
			$('#conCnasabah').toggle('slow')
		}else if (from == 'order') {
			$('#conOrder').toggle('slow')
		}else if (from == 'kredit') {
			$('#conKredit').toggle('slow')
		}else if (from == 'memoao') {
			$('#conMemoAo').toggle('slow')
		}
	})

/*	$('#col-kendaraan').hide()
	$('#sertifikat').click(function () {
		$('#col-kendaraan').hide()
		$('#col-sertifikat').show()
	})

	$('#kendaraan').click(function () {
		$('#col-kendaraan').show()
		$('#col-sertifikat').hide()
	})*/

	$('#simpan-edit-memo-ao').click(function () {
		saveEditMemoAo()
	})

	saveEditMemoAo = () => {
		const data = $('#form-edit-memo-ao').serialize()
		//console.log(data)
		$.ajax({
			type:'POST',
			url:url+'Home/saveEditMemoAo',
			dataType:'JSON',
			data:data,
			beforeSend:() => {
        $('#load_page').val('true');
				load()
				$('#simpan-edit-memo-ao').prop('disabled',true)
				$('#simpan-edit-memo-ao').html(loading+' Simpan perubahan . . . ')
			},
			success:(res) => {
				console.log(res);
        $('#load_page').val('false');
				$('#simpan-edit-memo-ao').prop('disabled',false)
				$('#simpan-edit-memo-ao').html('Simpan')
				if (res.msg == 'success') {
					$('#simpan-nasabah').prop('disabled',false)
					$('#simpan-nasabah').html('Simpan')
					$('#tamplate').val('views/content/data/data-memo-kredit-ao.php')
					$('#app').load('views/content/data/data-memo-kredit-ao.php')
					swal({
		        title: "Sukses!",
		        text: "data berhasil diperbarui!",
		        icon: "success"
			    });
				}
			},
			error:(xhr, status, error) => {
				$('#simpan-edit-memo-ao').prop('disabled',false)
				$('#simpan-edit-memo-ao').html('Simpan')
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

	get_detailMemoAo(id_order)
	'use strict'
	function get_detailMemoAo(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detailMemoAo/'+id,
			dataType:'JSON',
			beforeSend:function () {
				load()
				$('input[type=text]').val('Sedang mengambil data . . .').attr('disabled',true)
				$('#opt-sumber-aplikasi').html(loading)
				$('#opt-type-kredit').html(loading)
				$('#opt-produk').html(loading)
				$('#opt-tenor').html(loading)
			},
			success:function (res) {
				////console.log(res)
				$('input[type=text]').attr('disabled',false)
				$.each(res,function (k,v) {
					$('#nama_calon_debitur').val(v.calon_debitur)
					$('#nama_anak').val(v.nama_anak)
					$('#nama_sekolah').val(v.nama_sekolah_anak)
					$('#alamat_sekolah_anak').val(v.alamat_sekolah_anak)
					$('#jaminan_utama').val(v.jenis_jaminan)
					$('#v_jaminan_utama').val(v.jaminan_utama)
					sumberInformasi(v.sumber_informasi)
					$('#v_sumber_informasi').val(v.sumber_informasi)
					$('#sumber_informasi').val(v.deskripsi_group4)
					typeKredit(v.type_kredit)
					$('#tujuan_kredit').val(v.tujuan_kredit)
					Produk(v.kode_produk)
					$('#plafond').val(v.plafon_kredit).attr('disabled',true)
					$('#jangka_waktu').val(v.jangka_waktu+' Bulan').attr('disabled',true)
					$('#suku_bunga').val(v.suku_bunga)
					$('#akad_kredit').val(v.akad_kredit)
					$('#akad_jaminan').val(v.akad_jaminan)
					$('#gaji_debitur').val(v.gaji_debitur)
					$('#gaji_pasangan').val(v.gaji_pasangan)
					$('#gaji_penjamin').val(v.gaji_penjamin)
					$('#pengeluaran_rumah_tangga').val(v.pengeluaran_rumah_tangga)
					$('#pengeluaran_transport').val(v.pengeluaran_transportasi)
					$('#pengeluaran_pendidikan').val(v.pengeluaran_pendidikan)
					$('#pengeluaran_lainnya').val(v.pengeluaran_lainya)
					$('#angsuran_lain').val(v.angsuran_lain)
					$('#hasil_cek_lingkungan').val(v.hasil_cek_lingkungan)
					$('#verifikasi_data_debitur').val(v.vertifikasi_data_debitur)
					$('#ket_calon_debitur').val(v.ket_calon_debitur)
					$('#realisasi').val(v.realisasi)
					tenor(v.tenor)
				})
			}
		})
	}

	$('#opt-jenis-sertifikat').on('change','#jenis_sertifikat',function(){
		var val = $(this).val();
			if (val == 'SHM') {
				$('#shm').show();
				$('#shgb').hide();
				$('#ajb').hide();
				$('#shmrs').hide();
				$('#masa_berlaku_shmrs').val('')
				$('#no_surat_ukur_shgb').val('')
				$('#masa_berlaku_shgb').val('')
				$('#no_ajb').val('')
				$('#tgl_ajb').val('')
			}else if (val == 'SHGB') {
				$('#shm').hide();
				$('#shgb').show();
				$('#ajb').hide();
				$('#shmrs').hide();
				$('#no_shm').val('')
				$('#masa_berlaku_shmrs').val('')
				$('#no_ajb').val('')
				$('#tgl_ajb').val('')
			}else if (val == 'AJB'){
				$('#shm').hide();
				$('#shgb').hide();
				$('#ajb').show();
				$('#shmrs').hide();
				$('#no_shm').val('')
				$('#no_surat_ukur_shgb').val('')
				$('#masa_berlaku_shgb').val('')
				$('#masa_berlaku_shmrs').val('')
			}else if (val == 'SHMRS'){
				$('#shm').hide();
				$('#shgb').hide();
				$('#ajb').hide();
				$('#shmrs').show();
				$('#no_shm').val('')
				$('#no_surat_ukur_shgb').val('')
				$('#masa_berlaku_shgb').val('')
				$('#no_ajb').val('')
				$('#tgl_ajb').val('')
			}else{
				$('#shm').hide();
				$('#shgb').hide();
				$('#ajb').hide();
				$('#shmrs').hide();
			}
	})
	get_detailMemoAoSertifikat(id_order)
	function get_detailMemoAoSertifikat(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detailMemoAoSertifikat/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				load()
				$('#opt-kepemilikan').html(loading)
				$('#opt-lokasi-ser').html(loading)
				$('#opt-penggunaan-ser').html(loading)
				$('#opt-jenis-sertifikat').html(loading)
				$('#no_sertifikat').attr('disabled',true)
				$('#tgl_sertifikat').attr('disabled',true)
				$('#atas_nama').attr('disabled',true)
				$('#tgl_surat_ukur').attr('disabled',true)
				$('#no_surat_ukur').attr('disabled',true)
				$('#alamat').attr('disabled',true)
				$('#luas_tanah').attr('disabled',true)
				$('#luas_bangunan').attr('disabled',true)
				$('#kondisi_bangunan').attr('disabled',true)
				$('#imb').attr('disabled',true)
				$('#legalitas').attr('disabled',true)
				$('#catatan_lainnya').attr('disabled',true)
				$('#nilai_taksasi').attr('disabled',true)
				$('#nilai_njop').attr('disabled',true)
				$('#tgl_taksasi').attr('disabled',true)
			},
			success:function (res) {
				////console.log(res)
				if (res.amount == 0) {
					$('#col-sertifikat').hide()
					$("#status_ser").val('tidakada')
				}else{
					$.each(res, (k,v) => {
						kepemilikan(v.kepemilikan)
						Lokasi(v.lokasi)
						Penggunaan('sertifikat',v.penggunaan)
						jenisSertifikat(v.jenis_sertifikat)
						if (v.jenis_sertifikat == 'SHM') {
							$('#no_shm').val(v.no_shm)
							$('#shgb').hide();
							$('#ajb').hide();
							$('#shmrs').hide();
						}else if (v.jenis_sertifikat == 'SHGB') {
							$('#no_surat_ukur_shgb').val(v.no_surat_ukur_shgb)
							$('#masa_berlaku_shgb').val(v.masa_berlaku_shgb)
							$('#shm').hide();
							$('#ajb').hide();
							$('#shmrs').hide();
						}else if (v.jenis_sertifikat == 'AJB') {
							$('#no_ajb').val(v.no_ajb)
							$('#tgl_ajb').val(v.tgl_ajb)
							$('#shm').hide();
							$('#shgb').hide();
							$('#shmrs').hide();
						}else if (v.jenis_sertifikat == 'SHMRS') {
							$('#masa_berlaku_shmrs').val(v.masa_berlaku_shmrs)
							$('#shm').hide();
							$('#shgb').hide();
							$('#ajb').hide();
						}
						$('#no_sertifikat').attr('disabled',false).val(v.no_sertifikat)
						$('#tgl_sertifikat').attr('disabled',false).val(v.tgl_sertifikat)
						$('#tgl_surat_ukur').attr('disabled',false).val(v.tgl_surat_ukur)
						$('#no_surat_ukur').attr('disabled',false).val(v.no_surat_ukur)
						$('#atas_nama').attr('disabled',false).val(v.atas_nama)
						$('#alamat').attr('disabled',false).val(v.alamat)
						$('#luas_tanah').attr('disabled',false).val(parseInt(v.luas_tanah))
						$('#luas_bangunan').attr('disabled',false).val(parseInt(v.luas_bangunan))
						$('#kondisi_bangunan').attr('disabled',false).val(v.kondisi_bangunan)
						$('#imb').attr('disabled', false).val(v.imb);
						$('#legalitas').attr('disabled', false).val(v.legalitas);
						$('#catatan_lainnya').attr('disabled', false).val(v.catatan_lainnya);
						$('#nilai_taksasi').attr('disabled',false).val(v.nilai_taksasi)
						$('#nilai_njop').attr('disabled',false).val(v.nilai_njop)
						$('#tgl_taksasi').attr('disabled',false).val(v.tgl_taksasi)
					})
				}
			}
		})
	}
	get_detailMemoAoKendaraan(id_order)
	function get_detailMemoAoKendaraan(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detailMemoAoKendaraan/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				load()
				$('#opt-merk-kendaraan').html(loading)
				$('#opt-type-kendaraan').html(loading)
				$('#opt-jenis-kendaraan').html(loading)
				$('#opt-penggunaan-ken').html(loading)
				$('#atas_nama_kendaraan').attr('disabled',true)
				$('#alamat_bpkb').attr('disabled',true)
				$('#kecamatan_bpkb').attr('disabled',true)
				$('#kelurahan_bpkb').attr('disabled',true)
				$('#kota_bpkb').attr('disabled',true)
				$('#nilai_likuidas').attr('disabled',true)
				$('#kondisi_jaminan_kendaraan').attr('disabled',true)
				$('#tgl_taksasi_kendaraan').attr('disabled',true)
				$('#tgl_exp_pajak').attr('disabled',true)
				$('#tgl_exp_stnk_kendaraaan').attr('disabled',true)
				$('#no_bpkb').attr('disabled',true)
				$('#no_rangka').attr('disabled',true)
				$('#no_mesin').attr('disabled',true)
				$('#no_stnk').attr('disabled',true)
				$('#no_polisi').attr('disabled',true)
				$('#tahun_kendaraan').attr('disabled',true)
				$('#warna_kendaraan').attr('disabled',true)
				$('#no_faktur').attr('disabled',true)
				$('#silinder').attr('disabled',true)
				$('#nilai_taksasi_kendaraan').attr('disabled',true)
			},
			success:function (res) {
				if (res.amount == 0) {
					$('#col-kendaraan').hide()
					$("#status_ken").val('tidakada')
				}else{
					$.each(res,(k,v) => {
					//console.log(res)
						merkKendaraan(v.kd_merk)
						typeKendaraan(v.kd_type)
						jenisKendaraan(v.kd_jenis)
						Penggunaan('kendaraan',v.penggunaan)
						kepemilikanKen(v.kepemilikan)
						$('#atas_nama_kendaraan').attr('disabled',false).val(v.atas_nama)
						$('#alamat_bpkb').attr('disabled',false).html(v.alamat_bpkb)
						$('#kecamatan_bpkb').attr('disabled',false).html(v.kecamatan_bpkb)
						$('#kelurahan_bpkb').attr('disabled',false).html(v.kelurahan_bpkb)
						$('#kota_bpkb').attr('disabled',false).html(v.kota_bpkb)
						$('#nilai_likuidas').attr('disabled',false).val(v.nilai_likuidas)
						$('#kondisi_jaminan_kendaraan').attr('disabled',false).html(v.kondisi_jaminan)
						$('#tgl_taksasi_kendaraan').attr('disabled',false).val(v.tgl_taksasi)
						$('#tgl_exp_pajak').attr('disabled',false).val(v.tgl_exp_pajak)
						$('#tgl_exp_stnk_kendaraaan').attr('disabled',false).val(v.tgl_exp_stnk)
						$('#no_bpkb').attr('disabled',false).val(v.no_bpkb)
						$('#no_rangka').attr('disabled',false).val(v.no_rangka)
						$('#no_mesin').attr('disabled',false).val(v.no_mesin)
						$('#no_stnk').attr('disabled',false).val(v.no_stnk)
						$('#no_polisi').attr('disabled',false).val(v.no_polisi)
						$('#tahun_kendaraan').attr('disabled',false).val(v.tahun)
						$('#warna_kendaraan').attr('disabled',false).val(v.warna)
						$('#no_faktur').attr('disabled',false).val(v.no_faktur)
						$('#silinder').attr('disabled',false).val(v.silinder)
						$('#nilai_taksasi_kendaraan').attr('disabled',false).val(v.nilai_taksasi)
					})
				}
			}
		})
	}

	'use strict'
	function sumberInformasi(sumberInformasi) {
		$.ajax({
			type:'GET',
			url:url+'Home/sumberAplikasi',
			dataType:'JSON',
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					if (sumberInformasi == value.KODE_GROUP4) {
						html += '<option value="'+value.KODE_GROUP4+'" selected>'+value.deskripsi_group4+'</option>'
					}else{
						html += '<option value="'+value.KODE_GROUP4+'">'+value.deskripsi_group4+'</option>'
					}
				})
				$('#opt-sumber-aplikasi').html('<select class="form-control" name="sumber_informasi" style="margin-left: 15%; width: 80%;"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	'use strict'
	function typeKredit(typeKredit) {
		var type = ['NEW', 'REPEAT ORDER', 'TAKE OF']
		var html = ''
		$.each(type, function(index, value ) {
			if (typeKredit == value) {
				html += '<option value="'+value+'" selected>'+value+'</option>'
			}else{
				html += '<option value="'+value+'">'+value+'</option>'
			}
		})
		$('#opt-type-kredit').html('<select class="form-control" name="type_kredit"><option value="null">Pilih</Option>'+html+'</select>')
	}

	'use strict'
	function Produk(produk) {
		$.ajax({
			type:'GET',
			url:url+'Home/Produk',
			dataType:'JSON',
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					if (produk == value.KODE_PRODUK) {
						html += '<option value="'+value.KODE_PRODUK+'" selected>'+value.DESKRIPSI_PRODUK+'</option>'
					}else{
						html += '<option value="'+value.KODE_PRODUK+'">'+value.DESKRIPSI_PRODUK+'</option>'
					}
				})
				$('#opt-produk').html('<select class="form-control" name="kode_produk"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	'use strict'
	function kepemilikan(kepemilikan) {
		$.ajax({
			type:'GET',
			url:url+'Home/kepemilikanRumah',
			dataType:'JSON',
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					if (kepemilikan == value.kode_kepemilikan) {
						html += '<option value="'+value.kode_kepemilikan+'" selected>'+value.nama_kepemilikan+'</option>'
					}else{
						html += '<option value="'+value.kode_kepemilikan+'">'+value.nama_kepemilikan+'</option>'
					}
				})
				$('#opt-kepemilikan').html('<select class="form-control" name="kepemilikan"><option value="null">Pilih</option>'+html+'</select>')
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
	const Lokasi = (lokasi) => {
			const nlokasi = ['PERKAMPUNGAN','PRIBADI'];
			var html = ''

			$.each(nlokasi, (k,v) => {
				if (v == lokasi) {
					html += '<option value="'+v+'" selected>'+v+'</option>'
				}else{
					html += '<option value="'+v+'" >'+v+'</option>'
				}
			});

			$('#opt-lokasi-ser').html('<select class="form-control" style="margin-left: 15%; width: 80%;" name="lokasi" id="lokasi">'+html+'</select>')
	}

	'use strict'
	const Penggunaan = (status,penggunaan) => {
		const npenggunaan = ['PRIBADI','USAHA','ORANG LAIN TANPA SURAT','ORANG LAIN DENGAN SURAT']
		var html = ''
		$.each(npenggunaan, (k,v) => {
			if (v == penggunaan) {
				html += '<option value="'+v+'" selected>'+v+'</option>'
			}else{
				html += '<option value="'+v+'">'+v+'</option>'
			}
		});
		if (status == 'sertifikat') {
			$('#opt-penggunaan-ser').html('<select class="form-control" style="margin-left: 15%; width: 80%;" name="penggunaan" id="penggunaan">'+html+'</select>')
		}else{
			$('#opt-penggunaan-ken').html('<select class="form-control" name="penggunaan_kendaraan" id="penggunaan_kendaraan" style="margin-left: -5%; width: 105%;">'+html+'</select>')
		}
	}

	const kepemilikanKen = (kep) => {
		const vkep = ['MILIK SENDIRI','MILIK PASANGAN','MILIK ORANG LAIN']
		var html = ''

		$.each(vkep,(k,v) => {
			if (kep == v) {
				html += '<option value="'+v+'" selected>'+v+'</option>'
			}else{
				html += '<option value="'+v+'">'+v+'</option>'
			}
		})

		$('#opt-kepemilikan-ken').html('<select class="form-control" name="kepemilikan_kendaraan" id="kepemilikan_kendaraan" style="margin-left: -5%; width: 105%;">'+html+'</select>')
	}

	'use strict'
	const jenisSertifikat = (jenis_sertifikat) => {
		const jenisS = ['SHM','SHGB','AJB','SHMRS']
		var html = ''

		$.each(jenisS, (k,v) => {
			if (jenis_sertifikat == v) {
				html += '<option value="'+v+'" selected>'+v+'</option>'
			}else{
				html += '<option value="'+v+'">'+v+'</option>'
			}
		})

		$('#opt-jenis-sertifikat').html('<select class="form-control" name="jenis_sertifikat" id="jenis_sertifikat">'+html+'</select>')
	}

	'use strict'
	function merkKendaraan(merk){
		$.ajax({
			type:'GET',
			url:url+'Home/merkKendaraan',
			dataType:'JSON',
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					if (merk == value.kd_merk) {
						html += '<option value="'+value.kd_merk+'" selected>'+value.nm_merk+'</option>'
					}else{
						html += '<option value="'+value.kd_merk+'">'+value.nm_merk+'</option>'
					}
				})
				$('#opt-merk-kendaraan').html('<select class="form-control" name="kd_merk_kendaraan" style="margin-left: 15%; width: 80%;"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	'use strict'
	function typeKendaraan(type) {
		$.ajax({
			type:'GET',
			url:url+'Home/typeKendaraan',
			dataType:'JSON',
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					if (type == value.kd_type) {
						html += '<option value="'+value.kd_type+'" selected>'+value.nm_type+'</option>'
					}else{
						html += '<option value="'+value.kd_type+'">'+value.nm_type+'</option>'
					}
				})
				$('#opt-type-kendaraan').html('<select class="form-control" name="kd_type_kendaraan"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	'use strict'
	function jenisKendaraan(jeniskendaraan) {
		$.ajax({
			type:'GET',
			url:url+'Home/jenisKendaraan',
			dataType:'JSON',
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					if (jeniskendaraan == value.kd_jenis) {
						html += '<option value="'+value.kd_jenis+'" selected>'+value.nm_jenis+'</option>'
					}else{
						html += '<option value="'+value.kd_jenis+'">'+value.nm_jenis+'</option>'
					}
				})
				$('#opt-jenis-kendaraan').html('<select class="form-control" name="kd_jenis_kendaraan" style="width:105%;margin-left:-5%;"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	tenor = (tenor) => {
		const ntenor = ['6','12','18','24','36','40','48','60', '72']
		var html  = ''

		$.each(ntenor, (k,v) => {
				if (tenor == v) {
						html += '<option value="'+v+'" selected>'+v+' bulan</option>'
				}else{
						html += '<option value="'+v+'">'+v+' bulan</option>'
				}
		});

		$('#opt-tenor').html('<select class="form-control" name="tenor" id="tenor">'+html+'</select>')
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
