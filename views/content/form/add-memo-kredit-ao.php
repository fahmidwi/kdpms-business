<div id="snackbar"></div>
<div class="row">
	<div class="col-lg-12" id="wadah">
		<?php include '../component/header-back.php'; ?>
		<?php include '../component/info-detail-cnasabah.php'; ?>
		<?php include '../component/info-detail-order.php'; ?>
		<?php include '../component/info-detail-kreditc.php'; ?>
		<div class="card" style="margin-top: 1%">
			<div class="card-body">
				<a href="javascript:void(0)" class="Buttoggle" from="memoao"><i class="mdi mdi-dots-horizontal" style="float:right;"></i></a>
			 	<h4 style="">Form Memo Ao</h4><hr><br>
				<div id="conMemoAo">
					<form class="form-sample" id="form-memo-ao">
						<input type="hidden" name="id_order" id="id_order">
						<input type="hidden" name="id_calon_debitur" id="id_calon_debitur">
						<input type="hidden" name="id_kredit_checking" id="id_kredit_checking">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
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
                            <input type="hidden" name="jaminan_utama" id="k_jaminan_utama" readonly>
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
                            <input type="hidden" name="sumber_informasi" id="k_sumber_informasi">
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
                    <br>
                      <b class="card-description">
                        Kapasitas Peminjam
                      </b><br><br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gaji Peminjam</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="gaji_debitur" id="gaji_debitur" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Gaji Peminjam" style="margin-left: -5%; width: 105%;"/>
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
                            <input type="text" class="form-control" name="gaji_penjamin" id="gaji_penjamin"  onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Gaji Penjamin" style="margin-left: -5%; width: 105%;"/>
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
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Angsuran KDPMS</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="angsuran_kdpms" id="angsuran_kdpms" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Angsuran Lainnya" style="margin-left: -5%; width: 105%;"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Penghasilan Lainnya</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="pendapatan_lainnya" id="pendapatan_lainnya" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Pendapatan Lainnya" style="margin-left: -5%; width: 105%;"/>
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
                            <select class="form-control" name="type_kredit" id="type_kredit">
                              <option value="NEW">NEW</option>
                              <option value="REPEAT ORDER">REPEAT ORDER</option>
                              <option value="TAKE OF">TAKE OF</option>
                            </select>
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
                          <label class="col-sm-3 col-form-label">Pengajuan Plafond Kredit</label>
                          <div class="col-sm-1" style="margin-left: 15%; width: 80%;"><p>Rp.</p> </div>
                          <div class="col-sm-6">
                            <input class="form-control" type="text" name="plafond" id="plafond_mo_ao" readonly />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jangka Waktu</label>
                          <div class="col-sm-2">
                            <input type="text" name="jangka_waktu" class="form-control" id="jangka_waktu" readonly>
                          </div>
                          <div class="col-sm-3"><p style="margin-top:2%">Bulan</p> </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jasa</label>
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
                      <b class="card-description">
                      Lainnya
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
                          <label class="col-sm-3 col-form-label">Verifikasi Data Calon Peminjam</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" name="verifikasi_data_debitur" id="verifikasi_data_debitur" style="margin-left: -5%; width: 105%;" placeholder="Masukan Verifikasi Data Calon Peminjam"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Keterangan Calon Peminjam</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" name="ket_calon_debitur" id="ket_calon_debitur" style="margin-left: -5%; width: 105%;" placeholder="Masukan Keterangan Calon Peminjam"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
	                    <div class="col-md-12">
		                    <div class="form-group row">
		                      <label class="col-sm-3 col-form-label">Agunan</label>
		                      <div class="col-sm-2">
		                        <div class="form-radio">
		                          <input type="radio" class="form-check-input" name="angunan"  id="sertifikat" value="Sertifikat" id="sertifikat" checked> <p>Sertifikat</p>
		                        </div>
		                      </div>
		                      <div class="col-sm-2">
		                        <div class="form-radio">
		                          <input type="radio" class="form-check-input" name="angunan" id="kendaraan" value="Kendaraan"> <p>Kendaraan</p>
		                        </div>
		                      </div>
		                    </div>
		                  </div>
	                  </div>
                </div>
              </div>
            </div>
            <hr>
	          <div id="col-sertifikat">
				      <div class="col-12 grid-margin" >
				        <div class="card">
				          <div class="card-body">
				              <b class="card-description">
				                Sertifikat
				              </b><br><br>
				             <div class="row">
				                <div class="col-md-6">
				                  <div class="form-group row">
				                    <label class="col-sm-4 col-form-label">Lokasi</label>
				                    <div class="col-sm-8">
				                      <select class="form-control" style="margin-left: 15%; width: 80%;" name="lokasi" id="lokasi">
				                        <option value="null">Pilih Lokasi</option>
				                        <option value="PERKAMPUNGAN">PERKAMPUNGAN</option>
				                        <option value="PERUMAHAN">PERUMAHAN</option>
				                      </select>
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
				                      <select class="form-control" style="margin-left: 15%; width: 80%;" name="penggunaan" id="penggunaan">
				                        <option value="null">Pilih Penggunaan</option>
				                        <option value="PRIBADI">PRIBADI</option>
				                        <option value="USAHA">USAHA</option>
				                        <option value="ORANG LAIN TANPA SURAT">ORANG LAIN TANPA SURAT</option>
				                        <option value="ORANG LAIN DENGAN SURAT">ORANG LAIN DENGAN SURAT</option>
				                      </select>
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
				                      <select class="form-control" name="jenis_sertifikat" id="jenis_sertifikat">
				                        <option value="null">Pilih jenis sertifikat</option>
				                        <option value="SHM">SHM</option>
				                        <option value="SHGB">SHGB</option>
				                        <option value="AJB">AJB</option>
				                        <option value="SHMRS">SHMRS</option>
				                      </select>
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
				                    <label class="col-sm-4 col-form-label">Nomor Surat Ukur</label>
				                    <div class="col-sm-8">
				                      <input type="text" placeholder="Masukan Nomor Surat Ukur"  style="margin-left: 15%; width: 80%;" class="form-control" name="no_surat_ukur" id="no_surat_ukur" />
				                    </div>
				                  </div>
				                </div>
											</div>
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
				                    <label class="col-sm-3 col-form-label">Kondisi Bangunan</label>
				                    <div class="col-sm-9">
				                      <textarea class="form-control" name="kondisi_bangunan" name="kondisi_bangunan" style="margin-left: -5%; width: 105%;" placeholder="Masukan Kondisi Bangunan"></textarea>
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
							        <!-- <div class="row">
							          <div class="col-md-12">
							            <div class="form-group row">
							              <label class="col-sm-3 col-form-label">Legalitas</label>
							              <div class="col-sm-9">
							                <input type="text" class="form-control" name="legalitas" id="legalitas" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
							              </div>
							            </div>
							          </div>
							        </div> -->
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
	                            <select class="form-control" name="kepemilikan_kendaraan" id="kepemilikan_kendaraan" style="margin-left: -5%; width: 105%;">
	                              <option value="null">Pilih kepemilikan</option>
	                              <option value="MILIK SENDIRI">MILIK SENDIRI</option>
	                              <option value="MILIK PASANGAN">MILIK PASANGAN</option>
	                              <option value="MILIK ORANG LAIN">MILIK ORANG TUA</option>
	                            </select>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-12">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Penggunaan</label>
	                          <div class="col-sm-9">
	                            <select class="form-control" name="penggunaan_kendaraan" id="penggunaan_kendaraan" style="margin-left: -5%; width: 105%;">
	                              <option value="null">Pilih Penggunaan</option>
	                              <option value="PRIBADI">PRIBADI</option>
	                              <option value="USAHA">USAHA</option>
	                              <option value="ORANG LAIN TANPA SURAT">ORANG LAIN TANPA SURAT</option>
	                              <option value="ORANG LAIN DENGAN SURAT">ORANG LAIN DENGAN SURAT</option>
	                            </select>
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
	                    <!-- <div class="row">
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
	                          <label class="col-sm-3 col-form-label">Kota/Kab BPKB</label>
	                          <div class="col-sm-9">
	                            <textarea class="form-control" type="text" name="kota_bpkb_kendaraan" id="kota_bpkb" placeholder="Masukan Kota BPKB" style="margin-left: -5%; width: 105%;"></textarea>
	                          </div>
	                        </div>
	                      </div>
	                    </div> -->
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
	                            <input type="text" placeholder="Masukan Nomor BPKB" class="form-control" name="no_bpkb_kendaraaan" id="no_bpkb" style="margin-left: -5%; width: 105%;"/>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-4 col-form-label">Nomor Rangka</label>
	                          <div class="col-sm-8">
	                            <input type="text" style="margin-left: 15%; width: 80%;" placeholder="Masukan Nomor Rangka" class="form-control" name="no_rangka_kendaraaan"  id="no_rangka" >
	                          </div>
	                        </div>
	                      </div>
	                      <div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label">Nomor Mesin</label>
	                          <div class="col-sm-9">
	                            <input type="text" placeholder="Masukan Nomor Mesin" class="form-control" name="no_mesin_kendaraaan" id="no_mesin">
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
	                            <input type="text" placeholder="Masukan Nomor Polisi" class="form-control" name="no_polisi_kendaraaan" id="no_polisi" >
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
	                            <input type="text" placeholder="Masukan Nomor Faktur" id="no_faktur" style="margin-left: -5%; width: 105%;" class="form-control" name="no_faktur" >
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
                    <input type="number" class="form-control" name="realisasi" id="realisasi_req" style="margin-left: -5%; width: 105%;" placeholder="Rekomendasi">
                  </div>
                  <label class="col-form-label"> - &nbsp;Dengan Tenor</label>
                  <div class="col-sm-2">
                  	<div id="tenor_req"></div>
                  </div>
                </div>
              </div>
            </div> -->
						<button type="button" class="btn btn-primary btn-fw" id="simpan-memo-ao" style="width:100%;">Simpan Data Memo Ao</button>
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
	$('#title-header').html('Tambah Memo Ao')

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

	$('#conCnasabah').hide()
	$('#conOrder').hide()
	$('#conKredit').hide()
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
					$('#nama_calon_debitur').val('Sedang Mengambil Data . . .')
					$('#noktp').html(loading)
					$('#nama_lengkap').html(loading)
					$('#nibk').html(loading)
					$('#alamat').html(loading)
			},
			success:function (data) {
				$.each(data,function (key,val) {
					$('#nama_calon_debitur').val(val.nama_lengkap)
					$('#noktp').html('<p>'+val.no_ktp+'</p>')
					$('#nama_lengkap').html('<p>'+val.nama_lengkap+'</p>')
					$('#nibk').html('<p>'+val.nama_gadis_ibu_kandung+'</p>')
					$('#alamat').html('<p>'+val.alamat+', RT.'+val.rt+' RW.'+val.rw+', KELURAHAN.'+val.Kelurahan+', KECAMATAN.'+val.Kecamatan+', '+val.Kotakab+', PROVINSI '+val.propinsi+'</p>')
				})
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
						$('#noktp_pasangan').html('<p>'+val.no_ktp+'</p>')
						$('#nama_lengkap_pasangan').html('<p>'+val.nama_lengkap+'</p>')
						$('#nibk_pasangan').html('<p>'+val.nama_gadis_ibu_kandung+'</p>')
						$('#alamat_pasangan').html('<p>'+val.alamat+', RT '+val.rt+' RW '+val.rw+', KELURAHAN '+val.Kelurahan+', KECAMATAN '+val.Kecamatan+', '+val.Kotakab+', PROVINSI '+val.propinsi+'</p>')
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
						$('#noktp_penjamin').html('<p>'+val.no_ktp+'</p>')
						$('#nama_lengkap_penjamin').html('<p>'+val.nama_lengkap+'</p>')
						$('#nibk_penjamin').html('<p>'+val.nama_gadis_ibu_kandung+'</p>')
						$('#alamat_penjamin').html('<p>'+val.alamat+', RT '+val.rt+' RW '+val.rw+', KELURAHAN '+val.Kelurahan+', KECAMATAN '+val.Kecamatan+', '+val.Kotakab+', PROVINSI '+val.propinsi+'</p>')
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

	get_detail_order(id_order)
	function get_detail_order(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detail_order/'+id,
			dataType:'JSON',
			beforeSend:function () {
				$('id').html(loading)
				$('v').html(loading)
				$('#status_assign').html(loading)
				$('textarea').html('Sedang mengambil . . . . .')
				$('#nama_calon_nasabah').html(loading)
				$('#ao').html(loading)
				$('#kantor').html(loading)
				$('#tenor').html(loading)
				$('#jenis_pinjaman').html(loading)
				$('#tujuan_penggunaan').html(loading)
				$('#cara_pembayaran').html(loading)
				$('#mitra').html(loading)
				$('#jenis_jaminan').html(loading)
				$('#sumber_aplikasi').html(loading)
				$('#keterangan_order').html(loading)
				$('#but').html(loading)
				$('#jaminan_utama').val('Sedang Mengambil data . . .')
				$('#sumber_informasi').val('Sedang Mengambil data . . .')
			},
			success:function (res) {
				$('textarea').html('')
				$('v').html('')
				$.each(res,function (v,k) {
					$('#realisasi_req').val(k.plafond)
					tenorReq(k.tenor)
					$('#plafond_mo_ao').val(k.plafond)
					$('#jangka_waktu').val(k.tenor)
					$('#jaminan_utama').val(k.nama_jenis_jaminan)
					$('#k_jaminan_utama').val(k.jenis_jaminan)
					$('#sumber_informasi').val(k.nama_sumber_aplikasi)
					$('#k_sumber_informasi').val(k.sumber_aplikasi)

					if (k.verifikasi == 0) {
						$('#veriforder').addClass('text-danger')
						$('#verifby').addClass('text-danger')
						$('#tglverif').addClass('text-danger')
						verifikasi = 'belum terverifikasi'
						verifikasi_by = 'belum terverifikasi'
						verifikasi_date = 'belum terverifikasi'
						$('#but').html('<a href="javascript:void(0)" class="btn btn-success" style="width: 100%" id="buttonVerifOrder"><i class="mdi mdi-verified"></i>&nbsp;Verifikasi Order</a>')
					}else{
						$('#but').html('')
						$('#veriforder').addClass('text-primary')
						$('#verifby').addClass('text-primary')
						$('#tglverif').removeClass('text-danger')
						verifikasi = 'Terverifikasi'
						verifikasi_by = k.pelaku_verifikasi
						verifikasi_date = changeDate(k.verifikasi_date)
					}

					if (k.status_assign == 'WAITING') {
						status_assign = '<label class="badge badge-success">'+k.status_assign+'&nbsp;&nbsp;('+changeDate(k.tgl_assign)+')</label>'

					}else if (k.status_assign == 'ON PROGRESS') {
						status_assign = '<label class="badge badge-primary">'+k.status_assign+'&nbsp;&nbsp;('+changeDate(k.tgl_assign)+')</label>'

					}else if (k.status_assign == 'CANCEL') {

						status_assign = '<label class="badge badge-danger">'+k.status_assign+'&nbsp;&nbsp;('+changeDate(k.tgl_assign)+')</label>'
					}
					ao_to_email = k.AO_ORDER
					name_to_email = k.nama_calon_nasabah
					nik_to_email = k.noktp
					plafond_to_email = FormatRupiah(k.plafond)+' - '+k.tenor+' Bulan'
					$('id').html(k.id)
					$('#veriforder').html("&nbsp;"+verifikasi)
					$('#verifby').html(verifikasi_by)
					$('#tglverif').html("&nbsp;"+verifikasi_date)
					$('#status_assign').html(status_assign)
					$('#keterangan_assign').html(k.keterangan_assign)
					$('#nama_calon_nasabah').html('<p>'+k.nama_calon_nasabah+' - '+k.noktp+'</p>')
					$('#ao').html('<p>'+k.AO_ORDER+'</p>')
					$('#kantor').html('<p>'+k.nama_area_kerja+'</p>')
					$('#plafond').html('<p> Rp.'+FormatRupiah(k.plafond)+'</p>')
					$('#tenor').html('<p>'+k.tenor+' bulan</p>')
					$('#jenis_pinjaman').html('<p>'+k.nama_jenis_pinjaman+'</p>')
					$('#tujuan_penggunaan').html('<p>'+k.tujuan_penggunaan+'</p>')
					$('#cara_pembayaran').html('<p>'+k.cara_pembayaran+'</p>')
					$('#mitra').html('<p>'+k.kode_mitra+'</p>')
					$('#jenis_jaminan').html('<p>'+k.nama_jenis_jaminan+'</p>')
					$('#keterangan_jaminan').html(k.ket_jaminan)
					var lampiran = $.parseJSON(k.file_lampiran)

					var htmllam = ''
					if (lampiran.length == 0) {
						$('#file_lampiran').html('<p class="text-danger">Tidak ada file_lampiran!</p>')
					}else{
						$.each(lampiran,function (v,k) {
							$.each(k,function (v,k) {
								var urlLampiran = url+'assets/lampiran/'+k
								htmllam += '<a href="'+urlLampiran+'" style="text-decoration:none;" target="_blank"><span class="mdi mdi-file-document"></span>'+k+'</a><br>'
							})
						})
						$('#file_lampiran').html(htmllam)
					}
					$('#sumber_aplikasi').html('<p>'+k.nama_sumber_aplikasi+'</p>')
					$('#keterangan_order').html('<p>'+k.keterangan+'</p>')
				})
			}
		})
	}
	get_detailKreditcheck(id_kredit_check)
	function get_detailKreditcheck(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detailKreditcheck/'+id,
			dataType:'JSON',
			beforeSend:function () {
				$('idk').html(loading)
				$('vk').html(loading)
				$('#divButvk').html(loading)
				$('#divButvkT').html(loading)
				$('#status').html(loading)
				$('#nama_calon_nasabah_kredit').html(loading)
				$('#jenis_debitur_kredit').html(loading)
				$('#nomor_kredit').html(loading)
				$('#kantor_kreditC').html(loading)
				$('#ao_kredit').html(loading)
				$('#lampiran').html(loading)
				$('#notes').html('Sedang meangambil data . . . ')
			},
			success:function (res) {
				$('vk').html('')
				$.each(res,function (v,k) {
					if (k.verifikasi == 0) {
						$('#verifkredit').addClass('text-danger')
						$('#verifbykredit').addClass('text-danger')
						$('#tglverifkredit').addClass('text-danger')
						verifikasi = 'belum terverifikasi'
						verifikasi_by = 'belum terverifikasi'
						verifikasi_date = 'belum terverifikasi'
						if (session_jabatan == 'manager' || session_jabatan == 'ketua') {
							$('#divButvk').html('<a href="javascript:void(0)" class="btn btn-success" style="width: 100%" id="buttonVerifKredit"><i class="mdi mdi-verified"></i>&nbsp;Setujui Kredit checking</a>')
							$('#divButvkT').html('<a href="javascript:void(0)" class="btn btn-danger" style="width: 100%" id="buttonTolakKredit"><i class="mdi mdi-close-circle"></i>&nbsp;Tolak Kredit checking</a>')
						}else{
							$('#divButvk').html('<i style="color:red">Menunggu konfirmasi dari Manager/Ketua</i>')
							$('#divButvkT').html('')
						}
					}else if(k.verifikasi == 1){
						$('#divButvk').html('')
						$('#divButvkT').html('')
						$('#verifkredit').addClass('text-primary')
						$('#verifbykredit').addClass('text-primary')
						$('#tglverifkredit').removeClass('text-danger')
						verifikasi = 'DI SETUJUI'
						verifikasi_by = k.pelaku_verifikasi
						verifikasi_date = changeDate(k.verifikasi_date)
					}else{
						$('#divButvk').html('')
						$('#divButvkT').html('')
						$('#verifkredit').addClass('text-danger')
						$('#verifbykredit').addClass('text-primary')
						$('#tglverifkredit').removeClass('text-danger')
						verifikasi = 'DI TOLAK'
						verifikasi_by = k.pelaku_verifikasi
						verifikasi_date = changeDate(k.verifikasi_date)
					}

					if (k.status == 'WAITING') {
						status = '<label class="badge badge-warning">'+k.status+'&nbsp;&nbsp;('+changeDate(k.proses_date)+')</label>'

					}else if (k.status == 'ON PROGRESS') {
						status = '<label class="badge badge-success">'+k.status+'&nbsp;&nbsp;('+changeDate(k.proses_date)+')</label>'

					}else if (k.status == 'DONE') {
						status = '<label class="badge badge-primary">'+k.status+'&nbsp;&nbsp;('+changeDate(k.proses_date)+')</label>'

					}else if (k.status == 'PENDING') {

						status = '<label class="badge badge-dark">'+k.status+'&nbsp;&nbsp;('+changeDate(k.proses_date)+')</label>'
					}
					$('idk').html(k.id)
					$('#verifkredit').html("&nbsp;"+verifikasi)
					$('#tglverifkredit').html("&nbsp;"+verifikasi_date)
					$('#status').html(status)
					$('#nama_calon_nasabah_kredit').html('<p>'+k.calon_debitur+'</p>')
					$('#jenis_debitur_kredit').html('<p>'+k.jenis_debitur+'</p>')
					$('#nomor_kredit').html('<p>'+k.nomor+'</p>')
					$('#kantor_kreditC').html('<p>'+k.nama_area_kerja+'</p>')
					$('#ao_kredit').html('<p>'+k.AO_Kredit+'</p>')
					/*var lampiran = $.parseJSON(k.lampiran)

					var htmllam = ''
					if (lampiran.length == 0) {
						$('#lampiran').html('<p class="text-danger">Tidak ada lampiran!</p>')
					}else{
						$.each(lampiran,function (v,k) {
							$.each(k,function (v,k) {
								var urlLampiran = url+'assets/lampiran_kreditChecking/'+k
								htmllam += '<a href="'+urlLampiran+'" style="text-decoration:none;" target="_blank"><span class="mdi mdi-file-document"></span>'+k+'</a><br>'
							})
						})
						$('#lampiran').html(htmllam)
					}*/
					$('#notes').html(k.notes)
					console.log(k.notes)
				})
			}
		})
	}

	$('#col-kendaraan').hide()
	$('#sertifikat').click(function () {
		$('#col-kendaraan').hide()
		$('#col-sertifikat').show()
	})

	$('#kendaraan').click(function () {
		$('#col-kendaraan').show()
		$('#col-sertifikat').hide()
	})

	$('#shm').hide();
	$('#shgb').hide();
	$('#ajb').hide();
	$('#shmrs').hide();
	$('#jenis_sertifikat').on('change',function(){
		var val = $(this).val();
			if (val == 'SHM') {
				$('#shm').show();
				$('#shgb').hide();
				$('#ajb').hide();
				$('#shmrs').hide();
				$('#masa_berlaku_shmrs').val('')
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
				$('#masa_berlaku_shgb').val('')
				$('#masa_berlaku_shmrs').val('')
			}else if (val == 'SHMRS'){
				$('#shm').hide();
				$('#shgb').hide();
				$('#ajb').hide();
				$('#shmrs').show();
				$('#no_shm').val('')
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

	$('#simpan-memo-ao').click(function () {
		var angunan = $('input[name=angunan]:checked').val()
		var jaminan_utama = true
		var sumber_informasi = true
		var tujuan_kredit = true
		var jenis_fasilitas = true
		var kode_produk = true
		var plafond = true
		var jangka_waktu = true
		var suku_bunga = true
		var akad_kredit = true
		var akad_jaminan = true
		var gaji_debitur = true
		var gaji_pasangan = true
		var gaji_penjamin = true
		var pengeluaran_rumah_tangga = true
		var pengeluaran_transport = true
		var pengeluaran_pendidikan = true
		var pengeluaran_lainnya = true
		var angsuran_lain = true
		var hasil_cek_lingkungan = true
		var vertifikasi_data_debitur = true
		var ket_calon_debitur = true
		var realisasi = true
		var nama_anak = true
		var nama_sekolah = true
		var alamat_sekolah_anak = true
		
		var lokasi = true
		var kepemilikan = true
		var penggunaan = true
		var no_sertifikat = true
		var tgl_sertifikat = true
		var tgl_surat_ukur = true
		var no_surat_ukur = true
		var jenis_sertifikat = true
		var masa_berlaku_shgb = true
		var no_ajb = true
		var tgl_ajb = true
		var masa_berlaku_shmrs = true
		var atas_nama = true
		var alamat = true
		var luas_tanah = true
		var luas_bangunan = true
		var masa_berlaku_shgb = true
		var no_ajb = true
		var tgl_ajb = true
		var no_surat_ukur = true
		var kondisi_bangunan = true
		var nilai_taksasi = true
		var nilai_njop = true
		var tgl_taksasi = true
		
		
		var kd_merk_kendaraan = true
		var kd_type_kendaraan = true
		var kd_jenis_kendaraan = true
		var kepemilikan_kendaraan = true
		var penggunaan_kendaraan = true
		var atas_nama_kendaraan = true
		var alamat_bpkb_kendaraan = true
		var kecamatan_bpkb_kendaraan = true
		var kelurahan_bpkb_kendaraan = true
		var kota_bpkb_kendaraan = true
		var nilai_likuidas_kendaraan = true
		var kondisi_jaminan_kendaraan = true
		var tgl_taksasi_kendaraaan = true
		var tgl_exp_pajak_kendaraaan = true
		var tgl_exp_stnk_kendaraaan = true
		var no_bpkb_kendaraaan = true
		var no_rangka_kendaraaan = true
		var no_mesin_kendaraaan = true
		var no_stnk_kendaraaan = true
		var no_polisi_kendaraaan = true
		var tahun_kendaraan = true
		var warna_kendaraan = true
		var no_faktur = true
		var silinder_kendaraan = true
		var nilai_taksasi_kendaraan = true
		
		jaminan_utama = checkEmpty('input[name=jaminan_utama]')
		sumber_informasi = checkSelect('select[name=sumber_informasi]')
		tujuan_kredit = checkEmpty('textarea[name=tujuan_kredit]')
		jenis_fasilitas = checkSelect('select[name=jenis_fasilitas]')
		kode_produk = checkSelect('select[name=kode_produk]')
		plafond = checkEmpty('input[name=plafond]')
		jangka_waktu = checkEmpty('input[name=jangka_waktu]')
		suku_bunga = checkEmpty('input[name=suku_bunga]')
		akad_kredit = checkEmpty('input[name=akad_kredit]')
		akad_jaminan = checkEmpty('input[name=akad_jaminan]')
		gaji_debitur = checkEmpty('input[name=gaji_debitur]')
		gaji_pasangan = checkEmpty('input[name=gaji_pasangan]')
		gaji_penjamin = checkEmpty('input[name=gaji_penjamin]')
		pengeluaran_rumah_tangga = checkEmpty('input[name=pengeluaran_rumah_tangga]')
		pengeluaran_transport = checkEmpty('input[name=pengeluaran_transport]')
		pengeluaran_pendidikan = checkEmpty('input[name=pengeluaran_pendidikan]')
		pengeluaran_lainnya = checkEmpty('input[name=pengeluaran_lainnya]')
		angsuran_lain = checkEmpty('input[name=angsuran_lain]')
		hasil_cek_lingkungan = checkEmpty('textarea[name=hasil_cek_lingkungan]')
		verifikasi_data_debitur = checkEmpty('textarea[name=verifikasi_data_debitur]')
		ket_calon_debitur = checkEmpty('textarea[name=ket_calon_debitur]')
		realisasi = checkEmpty('textarea[name=realisasi]')
		nama_anak = checkEmpty('textarea[name=nama_anak]')
		nama_sekolah = checkEmpty('textarea[name=nama_sekolah]')
		alamat_sekolah_anak = checkEmpty('textarea[name=alamat_sekolah_anak]')
		
		if (angunan == 'Sertifikat') {
			var jenis_sertifikat_val = $('#jenis_sertifikat').val()
		
			if (jenis_sertifikat_val == 'SHM') {
				//no_shm = checkEmpty('input[name=no_shm]')
			}else if (jenis_sertifikat_val == 'SHGB') {
				masa_berlaku_shgb = checkEmpty('input[name=masa_berlaku_shgb]')
			}else if (jenis_sertifikat_val == 'AJB') {
				no_ajb = checkEmpty('input[name=no_ajb]')
				tgl_ajb = checkEmpty('input[name=tgl_ajb]')
			}else if (jenis_sertifikat_val == 'SHMRS') {
				masa_berlaku_shmrs = checkEmpty('input[name=masa_berlaku_shmrs]')
			}else{
				jenis_sertifikat = checkSelect('select[name=jenis_sertifikat]')
			}
			lokasi = checkSelect('select[name=lokasi]')
			kepemilikan = checkSelect('select[name=kepemilikan]')
			penggunaan = checkSelect('select[name=penggunaan]')
			no_sertifikat = checkEmpty('input[name=no_sertifikat]')
			tgl_surat_ukur = checkEmpty('input[name=tgl_surat_ukur]')
			no_surat_ukur = checkEmpty('input[name=no_surat_ukur]')
			tgl_sertifikat = checkEmpty('input[name=tgl_sertifikat]')
			atas_nama = checkEmpty('input[name=atas_nama]')
			alamat = checkEmpty('textarea[name=alamat]')
			luas_tanah = checkEmpty('input[name=luas_tanah]')
			luas_bangunan = checkEmpty('input[name=luas_bangunan]')
			kondisi_bangunan = checkEmpty('textarea[name=kondisi_bangunan]')
			nilai_taksasi = checkEmpty('input[name=nilai_taksasi]')
			nilai_njop = checkEmpty('input[name=nilai_njop]')
			tgl_taksasi = checkEmpty('input[name=tgl_taksasi]')
		
			if (jaminan_utama && sumber_informasi && tujuan_kredit && jenis_fasilitas && kode_produk && plafond && jangka_waktu && suku_bunga && akad_kredit && akad_jaminan && gaji_debitur && gaji_pasangan && gaji_penjamin && pengeluaran_rumah_tangga && pengeluaran_transport && pengeluaran_pendidikan && pengeluaran_lainnya && angsuran_lain && hasil_cek_lingkungan && verifikasi_data_debitur && ket_calon_debitur && realisasi && nama_anak && nama_sekolah && alamat_sekolah_anak && lokasi && kepemilikan && penggunaan && no_sertifikat && tgl_sertifikat && tgl_surat_ukur && no_surat_ukur && masa_berlaku_shgb && no_ajb && tgl_ajb && masa_berlaku_shmrs && jenis_sertifikat && atas_nama && alamat && luas_tanah && luas_bangunan && kondisi_bangunan && nilai_taksasi && nilai_njop && tgl_taksasi) {
				saveMemoAo()
			}
		}else if (angunan == 'Kendaraan') {
			kd_merk_kendaraan = checkSelect('select[name=kd_merk_kendaraan]')
			kd_type_kendaraan = checkSelect('select[name=kd_type_kendaraan]')
			kd_jenis_kendaraan = checkSelect('select[name=kd_jenis_kendaraan]')
			kepemilikan_kendaraan = checkSelect('select[name=kepemilikan_kendaraan]')
			penggunaan_kendaraan = checkSelect('select[name=penggunaan_kendaraan]')
			atas_nama_kendaraan = checkEmpty('input[name=atas_nama_kendaraan]')
			alamat_bpkb_kendaraan = checkEmpty('textarea[name=alamat_bpkb_kendaraan]')
			kecamatan_bpkb_kendaraan = checkEmpty('textarea[name=kecamatan_bpkb_kendaraan]')
			kelurahan_bpkb_kendaraan = checkEmpty('textarea[name=kelurahan_bpkb_kendaraan]')
			kota_bpkb_kendaraan = checkEmpty('textarea[name=kota_bpkb_kendaraan]')
			nilai_likuidas_kendaraan = checkEmpty('input[name=nilai_likuidas_kendaraan]')
			kondisi_jaminan_kendaraan = checkEmpty('textarea[name=kondisi_jaminan_kendaraan]')
			tgl_taksasi_kendaraaan = checkEmpty('input[name=tgl_taksasi_kendaraaan]')
			tgl_exp_pajak_kendaraaan = checkEmpty('input[name=tgl_exp_pajak_kendaraaan]')
			tgl_exp_stnk_kendaraaan = checkEmpty('input[name=tgl_exp_stnk_kendaraaan]')
			no_bpkb_kendaraaan = checkEmpty('input[name=no_bpkb_kendaraaan]')
			no_rangka_kendaraaan = checkEmpty('input[name=no_rangka_kendaraaan]')
			no_mesin_kendaraaan = checkEmpty('input[name=no_mesin_kendaraaan]')
			no_stnk_kendaraaan = checkEmpty('input[name=no_stnk_kendaraaan]')
				no_polisi_kendaraaan = checkEmpty('input[name=no_polisi_kendaraaan]')
			tahun_kendaraan = checkEmpty('input[name=tahun_kendaraan]')
			warna_kendaraan = checkEmpty('input[name=warna_kendaraan]')
			no_faktur = checkEmpty('input[name=no_faktur]')
			silinder_kendaraan = checkEmpty('input[name=silinder_kendaraan]')
			nilai_taksasi_kendaraan = checkEmpty('input[name=nilai_taksasi_kendaraan]')
		
			if (jaminan_utama && sumber_informasi && tujuan_kredit && jenis_fasilitas && kode_produk && plafond && jangka_waktu && suku_bunga && akad_kredit && akad_jaminan && gaji_debitur && gaji_pasangan && gaji_penjamin && pengeluaran_rumah_tangga && pengeluaran_transport && pengeluaran_pendidikan && pengeluaran_lainnya && angsuran_lain && hasil_cek_lingkungan && verifikasi_data_debitur && ket_calon_debitur && realisasi && nama_anak && nama_sekolah && alamat_sekolah_anak && kd_merk_kendaraan && kd_type_kendaraan && kd_jenis_kendaraan && kepemilikan_kendaraan && penggunaan_kendaraan && atas_nama_kendaraan && alamat_bpkb_kendaraan && kecamatan_bpkb_kendaraan && kelurahan_bpkb_kendaraan && kota_bpkb_kendaraan && nilai_likuidas_kendaraan && kondisi_jaminan_kendaraan && tgl_taksasi_kendaraaan && tgl_exp_pajak_kendaraaan && tgl_exp_stnk_kendaraaan && no_bpkb_kendaraaan && no_rangka_kendaraaan && no_mesin_kendaraaan && no_stnk_kendaraaan && no_polisi_kendaraaan && tahun_kendaraan && warna_kendaraan && no_faktur && silinder_kendaraan && nilai_taksasi_kendaraan) {
				saveMemoAo()
			}
		}

	//saveMemoAo()
	})

	'use strict'
	function saveMemoAo(argument) {
		var data = $('#form-memo-ao').serialize()
		$.ajax({
			type:'POST',
			url:url+'Home/saveAddMemoAo',
			dataType:'JSON',
			data:data,
			beforeSend:function () {
        $('#load_page').val('true');
        load()
				$('#simpan-memo-ao').prop('disabled',true);
				$('#simpan-memo-ao').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Sedang mengirim data . . .');
			},
			success:function(data) {
        $('#load_page').val('false');
				$('#simpan-memo-ao').prop('disabled',false)
				$('#simpan-memo-ao').html('Simpan')
				if (data.msg == 'success') {
					$('#simpan-nasabah').prop('disabled',false)
					$('#simpan-nasabah').html('Simpan')
					$('#tamplate').val('views/content/data/data-memo-kredit-ao.php')
					$('#app').load('views/content/data/data-memo-kredit-ao.php')
					swal({
		        title: "Sukses!",
		        text: "data berhasil ditambahkan!",
		        icon: "success"
		    	});
				}
			},
			error:function (xhr, status, error) {
				$('#simpan-memo-ao').prop('disabled',false)
				$('#simpan-memo-ao').html('Simpan')
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

	sumberInformasi()
	'use strict'
	function sumberInformasi() {
		$.ajax({
			type:'GET',
			url:url+'Home/sumberAplikasi',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-sumber-aplikasi').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.KODE_GROUP4+'">'+value.deskripsi_group4+'</option>'
				})
				$('#opt-sumber-aplikasi').html('<select class="form-control" name="sumber_informasi" style="margin-left: 15%; width: 80%;"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	Produk()
	'use strict'
	function Produk() {
		$.ajax({
			type:'GET',
			url:url+'Home/Produk',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-produk').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.KODE_PRODUK+'">'+value.DESKRIPSI_PRODUK+'</option>'
				})
				$('#opt-produk').html('<select class="form-control" name="kode_produk"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	kepemilikan()
	'use strict'
	function kepemilikan() {
		$.ajax({
			type:'GET',
			url:url+'Home/kepemilikanRumah',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-kepemilikan').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.kode_kepemilikan+'">'+value.nama_kepemilikan+'</option>'
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

	merkKendaraan()
	'use strict'
	function merkKendaraan() {
		$.ajax({
			type:'GET',
			url:url+'Home/merkKendaraan',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-merk-kendaraan').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.kd_merk+'">'+value.nm_merk+'</option>'
				})
				$('#opt-merk-kendaraan').html('<select class="form-control" name="kd_merk_kendaraan" style="margin-left: 15%; width: 80%;"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	typeKendaraan()
	'use strict'
	function typeKendaraan() {
		$.ajax({
			type:'GET',
			url:url+'Home/typeKendaraan',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-type-kendaraan').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.kd_type+'">'+value.nm_type+'</option>'
				})
				$('#opt-type-kendaraan').html('<select class="form-control" name="kd_type_kendaraan"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	jenisKendaraan()
	'use strict'
	function jenisKendaraan() {
		$.ajax({
			type:'GET',
			url:url+'Home/jenisKendaraan',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-jenis-kendaraan').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.kd_jenis+'">'+value.nm_jenis+'</option>'
				})
				$('#opt-jenis-kendaraan').html('<select class="form-control" name="kd_jenis_kendaraan" style="width:105%;margin-left:-5%;"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}
	'use strict'
	function tenorReq(tenor) {
		let ntenor = ['6','12','18','24','36','40','48','60','72']
		var html = ''
		$.each(ntenor,(k,v) => {
			if (tenor == v) {
					html += '<option value="'+v+'" selected>'+v+' bulan</option>'
			}else{
					html += '<option value="'+v+'">'+v+' bulan</option>'
			}
		})
		$('#tenor_req').html('<select class="form-control" name="tenor">'+html+'</select>')
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
