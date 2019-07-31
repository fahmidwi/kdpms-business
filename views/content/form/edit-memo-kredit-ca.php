<div class="row">
	<div class="col-lg-12">
		<a href="javascript:void(0)" class="btn btn-dark btn-fw" id="backcn">
					<i class="mdi  mdi-keyboard-backspace"></i>Kembali
				</a><br><br>
				<h3 id="timeline">Form Edit Memo Kredit CA</h3><hr>
		<div class="card" style="margin-top: 1%">
			<div class="card-body">
			 <h4 style="">Form Edit Memo Kredit Ca</h4><hr><br>
				 <b class="card-description">
						Personal Debitur
					</b><br><br>
				<form class="form-sample" id="form-edit-memo-kredit-ca">
					<input type="hidden" name="id_order" id="id_order_ca">
					<input type="hidden" name="id_calon_debitur" id="id_calon_debitur_ca">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Calon Debitur</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_calon_debitur" style="margin-left: -5%; width: 105%;" placeholder="Masukan Calon Debitur" id="nama_calon_debitur" readonly>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Nomor Aplikasi</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" style="margin-left: -5%; width: 105%;" name="no_aplikasi_ca" placeholder="Masuka Nomor Aplikasi" id="no_aplikasi_ca" readonly />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Jaminan Utama</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" style="margin-left: -5%; width: 105%;" id="jaminan_utama_ca" readonly/>
									<input type="hidden" name="jaminan_utama_ca" id="k_jaminan_utama_ca" readonly>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Sumber Informasi</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" style="margin-left:15%;width:85%;" id="sumber_informasi_ca" readonly/>
									<input type="hidden" name="sumber_informasi_ca" id="k_sumber_informasi_ca">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Jumlah Tanggungan</label>
                <div class="col-sm-8">
                  <input type="text" name="jml_tanggungan" class="form-control" id="jml_tanggungan" style="margin-left: 15%; width: 80%;" placeholder="Masukan jumlah tanggungan">
								</div>
              </div>
            </div>
					</div><hr>
					<br><b class="card-description">
						Alamat
					</b><br><br>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Status Rumah</label>
								<div class="col-sm-8">
									<div id="opt-status-rumah-ca" style="margin-left: 15%; width: 80%;"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Alamat Sekarang</label>
								<div class="col-sm-9">
									<div id="opt-alamat-sekarang" style="margin-left: 15%; width: 80%;"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Alamat Domisili</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="alamat_domisili_ca" id="alamat_domisili_ca" style="margin-left: -5%; width: 105%;" placeholder="Masukan Alamat Domisili"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Provinsi Domisili</label>
								<div class="col-sm-8">
									<div id="opt-propinsi" style="margin-left: 15%; width: 80%;"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kota/Kab Domisili</label>
								<div class="col-sm-9">
									<div id="opt-kotakab"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Kecamatan Domisili</label>
								<div class="col-sm-8">
									<div id="opt-kecamatan" style="margin-left: 15%; width: 80%;"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kelurahan Domisili</label>
								<div class="col-sm-9">
									<div id="opt-kelurahan"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">RT Domisili</label>
								<div class="col-sm-8">
									<input class="form-control" type="text" name="rt_domisili" id="rt_domisili" placeholder="Masukan RT"  style="margin-left: 15%; width: 80%;"/>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">RW Domisili</label>
								<div class="col-sm-9">
									<input type="text" name="rw_domisili" class="form-control" id="rw_domisili" placeholder="Masukan RW">
								</div>
							</div>
						</div>
					</div><hr><br>
					<b class="card-description">
						Pekerjaan
					</b><br><br>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Pekerjaan Debitur</label>
								<div class="col-sm-9">
									<input class="form-control" type="text" placeholder="Masukan Pekerjaan Debitur" id="pekerjaan_debitur" style="margin-left: -5%; width: 105%;" name="pekerjaan_debitur" />
								</div>
							</div>
						</div>
						 <div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Nama Tempat Kerja</label>
								<div class="col-sm-8">
									<input type="text" style="margin-left: 15%; width: 80%;" name="nama_tempat_kerja" placeholder="Masukan Nama Tempat Kerja" id="nama_tempat_kerja" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Posisi</label>
								<div class="col-sm-9">
									<input type="text" name="posisi" placeholder="Masukan Posisi" id="posisi" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Jenis kerja Debitur</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="jenis_usaha_debitur" id="jenis_usaha_debitur" placeholder="Masukan Jenis Usakerjaha Debitur" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Alamat kerja Debitur</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="alamat_usaha_debitur" id="alamat_usaha_debitur" placeholder="Masukan Alamat kerja Debitur" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Masa Kerja Debitur</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="masa_kerja_debitur" id="masa_kerja_debitur" placeholder="Masukan Masa Kerja Debitur" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Nomor Telepon Kerja Debitur</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="no_telp_kerja_debitur" id="no_telp_kerja_debitur" placeholder="Masukan Nomor Telepon Kerja Debitur" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<hr><br>
          <b class="card-description">
            Usaha
          </b><br><br>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Usaha Debitur</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" placeholder="Masukan Usaha Debitur" id="usaha_debitur" style="margin-left: -5%; width: 105%;" name="usaha_debitur"/>
                </div>
              </div>
            </div>
             <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nama Tempat Usaha</label>
                <div class="col-sm-8">
                  <input type="text" style="margin-left: 15%; width: 80%;" name="nama_tempat_usaha" placeholder="Masukan Nama Tempat Kerja" id="nama_tempat_usaha" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Posisi</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="Masukan Posisi" id="posisi" class="form-control" value="PEMILIK USAHA" readonly> 
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jenis Usaha Debitur</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="jenis_usaha" id="jenis_usaha" placeholder="Masukan Jenis Usaha Debitur" style="margin-left: -5%; width: 105%;"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alamat Usaha Debitur</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="alamat_tempat_usaha" id="alamat_tempat_usaha" placeholder="Masukan Alamat Usaha Debitur" style="margin-left: -5%; width: 105%;"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Masa Usaha Debitur</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="masa_usaha" id="masa_usaha" placeholder="Masukan Masa Usaha Debitur" style="margin-left: -5%; width: 105%;"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nomor Telepon Usaha Debitur</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="no_telp_usaha" id="no_telp_usaha" placeholder="Masukan Nomor Telepon Usaha Debitur" style="margin-left: -5%; width: 105%;"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tempat Usaha</label>
                <div class="col-sm-9">
                <div id="opt-tempat-usaha"></div>
                </div>
              </div>
            </div>
          </div>
					<hr><br>
					<b class="card-description">
						Keuangan Debitur
					</b><br><br>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Pengeluaran Lainnya</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="pengeluaran_lainnya" id="pengeluaran_lainnya" placeholder="Masukan Pengeluaran Lainnya" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Pendapatan tunai</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="pendapatan_tunai" id="pendapatan_tunai" placeholder="Masukan Pendapatan tunai" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Pendapatan kredit</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="pendapatan_kredit" id="pendapatan_kredit" placeholder="Masukan Pendapatan kredit" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Pengeluaran Sewa</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="pengeluaran_sewa" id="pengeluaran_sewa" placeholder="Masukan Pengeluaran Sewa" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Pengeluaran Belanja</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="pengeluaran_belanja" id="pengeluaran_belanja" placeholder="Masukan Pengeluaran Belanja" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Pengeluaran Gaji Pegawai</label>
								<div class="col-sm-9">
									<input class="form-control" type="text" name="pengeluaran_gaji_pegawai" id="pengeluaran_gaji_pegawai" style="margin-left: -5%; width: 105%;" placeholder="Masukan Pengeluaran Gaji Pegawai">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Angsuran Lain Usaha</label>
								<div class="col-sm-9">
									<input class="form-control" type="text" name="angsuran_lain_usaha" id="angsuran_lain_usaha" style="margin-left: -5%; width: 105%;" placeholder="Masukan Angsuran Lain Usaha">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">pengeluaran Lain Usaha</label>
								<div class="col-sm-9">
									<input class="form-control" type="text" name="pengeluaran_lain_usaha" id="pengeluaran_lain_usaha" style="margin-left: -5%; width: 105%;" placeholder="Masukan pengeluaran Lain Usaha">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Pengeluaran Telp Listrik Air</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="pengeluaran_telp_listrik_air" id="pengeluaran_telp_listrik_air" style="margin-left: -5%; width: 105%;" placeholder="Masukan Pengeluaran Telp Listrik Air">
								</div>
							</div>
						</div>
					</div><hr>
					<b class="card-description">
						Verifikasi Data
					</b><br><br>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">KTP Calon Debitur</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="ktp_cln_debitur"  id="ktp_cln_debitur_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="ktp_cln_debitur" id="ktp_cln_debitur_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">KTP Pasangan</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="ktp_pasangan"  id="ktp_cln_pasangan_debitur_ca_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="ktp_pasangan" id="ktp_cln_pasangan_debitur_ca_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kartu Keluarga</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="kartu_keluarga"  id="kartu_keluarga_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="kartu_keluarga" id="kartu_keluarga_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Surat Nikah</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="surat_nikah"  id="surat_nikah_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="surat_nikah" id="surat_nikah_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Surat Cerai</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="surat_cerai"  id="surat_cerai_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="surat_cerai" id="surat_cerai_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">STTP PBB</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="sttp_pbb"  id="sttp_pbb_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="sttp_pbb" id="sttp_pbb_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Sertifikat / BPKB</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="sertifikat_or_bpkb"  id="sertifikat_or_bpkb_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="sertifikat_or_bpkb" id="sertifikat_or_bpkb_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">IMB</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="imb"  id="imb_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="imb" id="imb_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Slip Gaji</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="slip_gaji"  id="slip_gaji_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="slip_gaji" id="slip_gaji_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Rekening Tabungan</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="rekening_tabungan"  id="rekening_tabungan_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="rekening_tabungan" id="rekening_tabungan_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Data Penjamin</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="data_penjamin"  id="data_penjamin_ca_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="data_penjamin" id="data_penjamin_ca_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Catatan</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="catatan" id="catatan" style="margin-left: -5%; width: 105%;" placeholder="Masukan Catatan"></textarea>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<b class="card-description">
						Cek Pada Saat Survey
					</b><br><br>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Visit Calon Debitur</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="visit_cln_debitur"  id="visit_cln_debitur_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="visit_cln_debitur" id="visit_cln_debitur_0" value="0" > <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Visit Pasangan</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="visit_pasangan"  id="visit_pasangan_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="visit_pasangan" id="visit_pasangan_0" value="0" > <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Visit Penjamin</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="visit_penjamin"  id="visit_penjamin_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="visit_penjamin" id="visit_penjamin_0" value="0" > <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Visit Tempat Tinggal</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="visit_tmpt_tinggal"  id="visit_tmpt_tinggal_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="visit_tmpt_tinggal" id="visit_tmpt_tinggal_0" value="0" > <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Visit Jaminan</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="visit_jaminan"  id="visit_jaminan_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="visit_jaminan" id="visit_jaminan_0" value="0" > <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Visit Usaha</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="visit_usaha"  id="visit_usaha_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="visit_usaha" id="visit_usaha_0" value="0" > <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Cek Lingkungan</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="cek_lingkungan"  id="cek_lingkungan_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="cek_lingkungan" id="cek_lingkungan_0" value="0" > <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Alamat Domisili</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="alamat_domisili"  id="alamat_domisili_1" value="1" > <p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="alamat_domisili" id="alamat_domisili_0" value="0" > <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <hr>
					<b class="card-description">
						Kondisi Dan Lokasi Jaminan
					</b><br><br>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Pusat Keramaian</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="pusat_keramaian" id="pusat_keramaian" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Jarak Keramaian</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="jarak_keramaian" id="jarak_keramaian" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Akses Jalan</label>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="akses_jalan"  id="akses_jalan_none" value="None" =""> <p>None</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="akses_jalan"  id="akses_jalan_aspal" value="Aspal" > <p>Aspal</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="akses_jalan"  id="akses_jalan_tanah" value="Tanah" > <p>Tanah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="akses_jalan"  id="akses_jalan_rusak" value="Rusak" > <p>Rusak</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row"style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Tingkat Kepadatan</label>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="tingkat_kepadatan"  id="tingkat_kepadatan_none" value="None"  ><p>None</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="tingkat_kepadatan"  id="tingkat_kepadatan_padat" value="Padat"> <p>Padat</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="tingkat_kepadatan"  id="tingkat_kepadatan_kurang_padat" value="Kurang Padat"> <p>Kurang Padat</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="tingkat_kepadatan"  id="tingkat_kepadatan_sepi" value="Sepi"> <p>Sepi</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Luas Jalan</label>
								 <div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="luas_jalan"  id="luas_jalan_none" value="None" > <p>None</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="luas_jalan"  id="luas_jalan_2mobil" value=">=2 Mobil" > <p>>=2 Mobil</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="luas_jalan"  id="luas_jalan_1mobil" value="1 Mobil" > <p>1 Mobil</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="luas_jalan"  id="luas_jalan_gang" value="Gang" > <p>Gang</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Pertumbuhan Lingkungan</label>
								 <div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="pert_lingkungan"  id="pert_lingkungan_none" value="None" > <p>None</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="pert_lingkungan"  id="pert_lingkungan_cepat" value="cepat" > <p>Cepat</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="pert_lingkungan"  id="pert_lingkungan_stabil" value="Stabil" > <p>Stabil</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="pert_lingkungan"  id="pert_lingkungan_lambat" value="Lambat" > <p>Lambat</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Rawan Bencana</label>
								 <div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="rawan_bancana"  id="rawan_bancana_none" value="None" > <p>None</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="rawan_bancana"  id="rawan_bancana_tidak" value="Tidak Rawan" > <p>Tidak Rawan</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="rawan_bancana"  id="rawan_bancana_rawan" value="Rawan" > <p>Rawan</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="rawan_bancana"  id="rawan_bancana_sangat" value="Sangat Rawan" > <p>Sangat Rawan</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Daerah Banjir</label>
								 <div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="daerah_banjir"  id="daerah_banjir_none" value="None" > <p>None</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="daerah_banjir"  id="daerah_banjir_bebas" value="Bebas" ><p>Bebas</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="daerah_banjir"  id="daerah_banjir_jarang" value="Jarang" > <p>Jarang</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="daerah_banjir"  id="daerah_banjir_rawan" value="Sangat Rawan" > <p>Rawan</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
				 <b class="card-description">
					 Kondisi Tanah dan Bangunan
				 </b><br><br>
				 <div class="row">
					 <div class="col-md-12">
						 <div class="form-group row">
							 <label class="col-sm-3 col-form-label">Fasilitas Umum/Social</label>
							 <div class="col-sm-9">
								 <textarea class="form-control" name="fasilitas_umum" id="fasilitas_umum" style="margin-left: -5%; width: 105%;" placeholder="Contoh : Kendaraan umum, Sekolah, Masjid dll"></textarea>
							 </div>
						 </div>
					 </div>
				 </div>
				 <div class="row">
					 <div class="col-md-12">
						 <div class="form-group row">
							 <label class="col-sm-3 col-form-label">Luas Tanah <br>berdasarkan njop</label>
							 <div class="col-sm-9">
								 <input type="number" class="form-control" name="luas_tanah_njop" id="luas_tanah_njop" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
							 </div>
						 </div>
					 </div>
				 </div>
				 <div class="row">
					 <div class="col-md-12">
						 <div class="form-group row">
							 <label class="col-sm-3 col-form-label">Luas Bangunan <br>berdasarkan njop</label>
							 <div class="col-sm-9">
								 <input type="number" class="form-control" name="luas_bangunan_njop" id="luas_bangunan_njop" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
							 </div>
						 </div>
					 </div>
				 </div>
				 <div class="row">
					 <div class="col-md-12">
						 <div class="form-group row">
							 <label class="col-sm-3 col-form-label">Luas Tanah <br>berdasarkan harga pasar</label>
							 <div class="col-sm-9">
								 <input type="number" class="form-control" name="luas_tanah_ca" id="luas_tanah_ca" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
							 </div>
						 </div>
					 </div>
				 </div>
				 <div class="row">
					 <div class="col-md-12">
						 <div class="form-group row">
							 <label class="col-sm-3 col-form-label">Luas Bangunan <br>berdasarkan harga pasar</label>
							 <div class="col-sm-9">
								 <input type="number" class="form-control" name="luas_bangunan_ca" id="luas_bangunan_ca" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
							 </div>
						 </div>
					 </div>
				 </div>
				 <div class="row">
					 <div class="col-md-12">
						 <div class="form-group row">
							 <label class="col-sm-3 col-form-label">Kondisi / Bentuk Tanah</label>
							 <div class="col-sm-9">
								 <textarea class="form-control" name="kondisi_bentuk_tanah" id="kondisi_bentuk_tanah" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi"></textarea>
							 </div>
						 </div>
					 </div>
				 </div>
				 <div class="row">
					 <div class="col-md-12">
						 <div class="form-group row">
							 <label class="col-sm-3 col-form-label">Dibangun Tahun</label>
							 <div class="col-sm-9">
								 <input type="text" class="form-control" name="dibangun_tahun" id="dibangun_tahun" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
							 </div>
						 </div>
					 </div>
				 </div>
				 <div class="row">
					 <div class="col-md-12">
						 <div class="form-group row">
							 <label class="col-sm-3 col-form-label">Kegunaan Bangunan</label>
							 <div class="col-sm-9">
								 <input type="text" class="form-control" name="kegunaan_bangunan" id="kegunaan_bangunan" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
							 </div>
						 </div>
					 </div>
				 </div>
				 <div class="row">
					 <div class="col-md-12">
						 <div class="form-group row">
							 <label class="col-sm-3 col-form-label">Penguasaan Tanah dan Bangunan</label>
							 <div class="col-sm-9">
								 <input type="text" class="form-control" name="penguasaan_tanah_bangunan" id="penguasaan_tanah_bangunan" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
							 </div>
						 </div>
					 </div>
				 </div>
				 <div class="row">
					 <div class="col-md-12">
						 <div class="form-group row">
							 <label class="col-sm-3 col-form-label">Kondisi Fisik Secara Umum</label>
							 <div class="col-sm-9">
								 <input type="text" class="form-control" name="kondisi_fisik_bangunan" id="kondisi_fisik_bangunan" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
							 </div>
						 </div>
					 </div>
				 </div>
				 <hr>
					<b class="card-description">
	          Batas Batas
	        </b><br><br>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Sebelah Utara</label>
	              <div class="col-sm-9">
	                <input type="text" class="form-control" name="sebelah_utara" id="sebelah_utara" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Sebelah Selatan</label>
	              <div class="col-sm-9">
	                <input type="text" class="form-control" name="sebelah_selatan" id="sebelah_selatan" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Sebelah Timur</label>
	              <div class="col-sm-9">
	                <input type="text" class="form-control" name="sebelah_timur" id="sebelah_timur" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Sebelah Barat</label>
	              <div class="col-sm-9">
	                <input type="text" class="form-control" name="sebelah_barat" id="sebelah_barat" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
	              </div>
	            </div>
	          </div>
	        </div>
	         <hr>
					 <b class="card-description">
 	          Jalan Dilokasi
 	        </b><br><br>
 	        <div class="row">
 	          <div class="col-md-12">
 	            <div class="form-group row">
 	              <label class="col-sm-3 col-form-label">Jalan Depan</label>
 	              <div class="col-sm-9">
 	                <input type="text" class="form-control" name="jalan_depan" id="jalan_depan" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
 	              </div>
 	            </div>
 	          </div>
 	        </div>
 	        <div class="row">
 	          <div class="col-md-12">
 	            <div class="form-group row">
 	              <label class="col-sm-3 col-form-label">Jalan lingkungan yang terbesar</label>
 	              <div class="col-sm-9">
 	                <input type="text" class="form-control" name="jalan_lingkungan_terbesar" id="jalan_lingkungan_terbesar" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
 	              </div>
 	            </div>
 	          </div>
 	        </div>
 	        <!-- <div class="row">
 	          <div class="col-md-12">
 	            <div class="form-group row">
 	              <label class="col-sm-3 col-form-label">Peta Lokasi (terlampir)</label>
 	              <div class="col-sm-9">
 	                <input type="text" class="form-control" name="peta_lokasi" id="sebelah_timur" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
 	              </div>
 	            </div>
 	          </div>
 	        </div> -->
 	         <hr>
					<b class="card-description">
						Keadaan Bangunan
					</b><br><br>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kontruksi</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kontruksi" id="kontruksi" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Lantai</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="lantai" id="lantai" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Dinding</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="dinding" id="dinding" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kusen</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kusen" id="kusen" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Pintu</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="pintu" id="pintu" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Jendela</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="jendela" id="jendela" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kuda-Kuda</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kuda_kuda" id="kuda_kuda" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Rangkap Atap</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="rangkap_atap" id="rangkap_atap" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Langit-langit</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="langit_langit" id="langit_langit" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Atap</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="atap" id="atap" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Pagar</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="pagar" id="pagar" style="margin-left: -5%; width: 105%;" placeholder="Harap Lengkapi">
								</div>
							</div>
						</div>
					</div>
					<hr>
					<b class="card-description">
						Fasilitas Bangunan / Situasi Rumah
					</b><br><br>
					<h5>Lantai 1</h5>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Ruang Tamu</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="ruang_tamu" id="ruang_tamu" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kamar Mandi / WC</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kamar_mandi" id="kamar_mandi" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Ruang Makan</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="ruang_makan" id="ruang_makan" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Dapur</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="dapur" id="dapur" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kamar Pembantu</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kamar_pembantu" id="kamar_pembantu" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Teras</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="teras" id="teras" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kamar Tidur</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kamar_tidur" id="kamar_tidur" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Garasi</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="garasi" id="garasi" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<h5>Lantai 2</h5>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Ruang Keluarga</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="ruang_keluarga" id="ruang_keluarga" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kamar Mandi / WC</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kamar_mandi_2" id="kamar_mandi_2" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Ruang Makan</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="ruang_makan_2" id="ruang_makan_2" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Dapur</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="dapur_2" id="dapur_2" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kamar</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kamar" id="kamar" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Teras</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="teras" id="terasl2" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Listrik</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="listrik" id="listrik" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Telpon/fax/telex dll</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="telpon_fax" id="telpon_fax" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Air</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="air" id="air" placeholder="Harap Lengkapi" style="margin-left: -5%; width: 105%;"/>
								</div>
							</div>
						</div>
					</div>
					<hr>
				<b class="card-description"><br>
					Penilaian Taksasi Menurut Keadaan Sekarang
				</b><br><br>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
						<label class="col-sm-3 col-form-label">Luas Tanah <br>berdasarkan njop</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="luas_tanah_penilaian_njop" id="luas_tanah_penilaian_njop" placeholder="Masukan luas tanah" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Luas Bangunan <br>berdasarkan njop</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="luas_bangunan_penilaian_njop" id="luas_bangunan_penilaian_njop" placeholder="Masukan luas bangunan" readonly>
						</div>
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
						<label class="col-sm-3 col-form-label">Luas Tanah <br>berdasarkan harga pasar</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="luas_tanah_penilaian_ca" id="luas_tanah_penilaian_ca" placeholder="Masukan luas tanah" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Luas Bangunan <br>berdasarkan harga pasar</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="luas_bangunan_penilaian_ca" id="luas_bangunan_penilaian_ca" placeholder="Masukan luas bangunan" readonly>
						</div>
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Tahun NJOP</label>
							<div class="col-sm-8">
								<select name="tahun_njop" class="form-control">
									<option>->Pilih Tahun<-</option>
									<?php $tahun=2030; for ($i=2000; $i <= $tahun; $i++) {?>
										<?php $tahunnow = date('Y'); if ($tahunnow == $i) { ?>
												<option value="<?php echo $i; ?>" selected><?php echo $i; ?></option>
										<?php }else { ?>
												<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php } ?>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">NJOP Bumi</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="njop_bumi" id="njop_bumi" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan NJOP Bumi">
								<p style="margin-top: 2%;" >Jumlah : <b id="jumlah_njop_bumi">-</b></p>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">NJOP Bangunan</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="njop_bangunan" id="njop_bangunan" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan NJOP Bangunan">
								<p style="margin-top: 2%;">Jumlah : <b id="jumlah_njop_bangunan">-</b></p>
							</div>
						</div>
						<div class="form-group row">
							<p class="col-sm-3 col-form-label"><b>Total</b></p>
							<div class="col-sm-8">
								<b style="float: right;" id="jumlah_njop">-</b>
							</div>
						</div>
					</div>
					<div class="col-md-6" style="margin-top: 4%;">
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Harga Pasar Tanah</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="harga_pasaran_tanah" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" id="harga_pasaran_tanah" placeholder="Masukan Keterangan Penilaian">
								<p style="margin-top: 2%;">Jumlah: <b id="jumlah_pasaran_tanah">-</b></p>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Harga Pasar Bangunan</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="harga_pasaran_bangunan" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" id="harga_pasaran_bangunan" placeholder="Masukan Keterangan Penilaian">
								<p style="margin-top: 2%;">Jumlah: <b id="jumlah_pasaran_bangunan">-</b></p>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label"><b></b></label>
							<div class="col-sm-8">
								<b style="float: right;" class="total_harga_pasar">-</b>
							</div>
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Keterangan Penilaian</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="keterangan_penilaian" id="keterangan_penilaian" style="margin-left: -5%; width: 110%;" placeholder="Masukan Keterangan Penilaian" value="Harga Tanah & Bangunan yang terletak di"></textarea>
									<p style="margin-top: 2%; margin-left: -5%">Harga pasaran <b class="total_harga_pasar">-</b></p>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Nilai Taksasi</label>
								<div class="col-sm-2">
									<input type="number" class="form-control" name="nilai_taksasi_persen" id="nilai_taksasi_persen" style="margin-left: -25%;" placeholder="ex: 65">
								</div>
								<div class="col-sm-1" style="margin-left: -5%;">
									%
								</div>
							</div>
							<div class="row">
								<div class="col-sm-2">
								</div><Br>
								<div class="col-sm-9">
									<p style="margin-left: -5%;">Jadi nilai taksasinya <b><hp class="total_harga_pasar">-</hp> x <pt id="persen_taksasi">-</pt> = <ht id="hasil_taksasi">-</ht></b></p>
								</div>
							</div>
						</div>
					</div>
					<hr><br>
				<b class="card-description">
					Bahan Pertimbangan Penilaian
				</b><br><br>
				<div class="row">
					<div class="col-md-12">
						<u style="font-weight: bold; font-size: 10pt;">Sumber Informasi dan Besarnya Harga Pasarnya Tanah / Bangunan</u><br><br>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Sumber harga</label>
							<div class="col-sm-9">
								<textarea type="text" class="form-control" name="sumber_harga" id="sumber_harga" style="margin-left: -5%; width: 105%;" placeholder="Masukan sumber harga" id="Subject"></textarea>
							</div>
						</div>
						<br>
						<u style="font-weight: bold; font-size: 10pt;">Faktor yang dapat menaikan dan menurunkan penilaian</u><br><br>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Faktor yang dapat menaikan</label>
							<div class="col-sm-9">
								<textarea type="text" class="form-control" name="faktor_yang_dapat_menaikan" id="faktor_yang_dapat_menaikan" style="margin-left: -5%; width: 105%;" placeholder="Masukan Faktor yang dapat menaikan" id="Subject"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Faktor yang dapat menurunkan</label>
							<div class="col-sm-9">
								<textarea type="text" class="form-control" name="faktor_yang_dapat_menurunkan" id="faktor_yang_dapat_menurunkan" style="margin-left: -5%; width: 105%;" placeholder="Masukan Faktor yang dapat menurunkan" id="Subject"></textarea>
							</div>
						</div>
						</div>
					</div><hr>
					<b class="card-description">
						Lain-Lain
					</b><br><br><br>
					<div class="row"s tyle="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Sertifikat</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="sertifikat"  id="sertifikat_sudah" value="1"  ><p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="sertifikat"  id="sertifikat_belum" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">AJB</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="ajb"  id="ajb_1" value="1"  ><p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="ajb"  id="ajb_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="row" style="margin-top: -3%;">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Kendaraan</label>
								<div class="col-sm-3">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="kendaraan"  id="kendaraan_1" value="1"  ><p>Sudah</p>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-radio">
										<input type="radio" class="form-check-input" name="kendaraan"  id="kendaraan_0" value="0"> <p>Belum</p>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Team Survey</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="team_survey" id="team_survey" style="margin-left: -5%; width: 105%;" placeholder="Masukan Team Survey"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Penyimpangan</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="penyimpangan" id="penyimpangan" style="margin-left: -5%; width: 105%;" placeholder="Masukan Penyimpangan"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Verivikasi Data Debitur</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="vertifikasi_data_debitur" id="vertifikasi_data_debitur" style="margin-left: -5%; width: 105%;" placeholder="Masukan Verivikasi Data Debitur"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Verivikasi Penjamin</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="vertifikasi_penjamin" id="vertifikasi_penjamin" style="margin-left: -5%; width: 105%;" placeholder="Masukan Verivikasi Penjamin"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Verivikasi jaminan</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="vertifikasi_jaminan" id="vertifikasi_jaminan" style="margin-left: -5%; width: 105%;" placeholder="Masukan Verivikasi jaminan"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Analisa Kredit Checking</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="analisa_kredit_checking" id="analisa_kredit_checking" style="margin-left: -5%; width: 105%;" placeholder="Masukan Analisa Kredit Checking"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Keterangan Calon Debitur</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="ket_calon_debitur" id="ket_calon_debitur" style="margin-left: -5%; width: 105%;" placeholder="Masukan Keterangan Calon Debitur"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Masukan Analisa</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="comment_analisa" id="comment_analisa" style="margin-left: -5%; width: 105%;" placeholder="Masukan Komentar Analisa"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Hasil Cek Lingkungan</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="hasil_cek_lingk" id="hasil_cek_lingk" style="margin-left: -5%; width: 105%;" placeholder="Masukan Komentar Analisa"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Hasil Cek Aspek Kuantitatif</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="hasil_cek_aspek_kuantitatif" id="hasil_cek_aspek_kuantitatif" style="margin-left: -5%; width: 105%;" placeholder="Masukan Hasil Cek Aspek Kuantitatif"></textarea>
								</div>
							</div>
						</div>
					</div><br>
					<div class="row">
		      	<div class="col-md-4"></div>
              <div class="col-md-8">
                <div class="form-group row">
                  <label class="col-form-label">ACCOUNT OFFICER MEREKOMENDASIKAN PINJAMAN INI Rp.&nbsp;&nbsp;</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="realisasi" id="realisasi" style="margin-left: -5%; width: 105%;" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Rekomendasi">
                  </div>
                  <label class="col-form-label"> - &nbsp;Dengan Tenor</label>
                  <div class="col-sm-2">
                    <div id="tenor_req"></div>
                  </div>
                </div>
              </div>
	        </div><br>
					<button type="button" class="btn btn-primary btn-fw" style="width: 100%;" id="simpan-edit-memo-ca">Simpan Perubahan</button>&nbsp;
				</form><br><br>
				<h4 style="">Foto Jaminan</h4><hr><br>
		 		<div class="col-12 grid-margin" id="conFotojam">
		 			<div class="card">
		 				<div class="card-body">
		 					<div class="row" id="w_foto_jaminan">
		 					</div>
		 				</div>
		 			</div>
		 		</div>
				<form class="form-sample" id="form-edit-foto-jaminan-ca">
					<label class="col-sm-3 col-form-label">Pilih Foto Jaminan Baru</label>
					<div class="col-sm-9">
						<input type="file" class="form-control" name="foto_jaminan[]" id="foto_jaminan"  multiple>
					</div>
					<p style="color:red;margin-left:1%;"><i>Jika anda upload Foto Jaminan Baru, Foto Jaminan lama akan hilang</i></p>
					<button type="submit" class="btn btn-primary btn-fw" style="width: 100%;" id="simpan-edit-foto-jaminan-ca">Upload Foto Jaminan baru</button>&nbsp;
				</form>
				<h4 style="">Lampiran</h4><hr><br>
		 		<div class="col-12 grid-margin" id="conLampiran">
		 			<div class="card">
		 				<div class="card-body">
		 					<div class="row" id="w_lampiran">
		 					</div>
		 				</div>
		 			</div>
		 		</div>
				<form class="form-sample" id="form-edit-lampiran-ca">
					<label class="col-sm-3 col-form-label">Pilih Lampiran Baru</label>
					<div class="col-sm-9">
						<input type="file" class="form-control" name="lampiran_caa[]" id="lampiran"  multiple>
					</div>
					<p style="color:red;margin-left:1%;"><i>Jika anda upload Lampiran baru, Lampiran lama akan hilang</i></p>
					<button type="submit" class="btn btn-primary btn-fw" style="width: 100%;" id="simpan-edit-lampiran-ca">Upload lampiran baru</button>&nbsp;
				</form>
			</div>
		</div>
</div>
<script type="text/javascript" src="lib/js/changedate.js"></script>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript" src="lib/js/FormatPointInput.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'
	var id_order = $('#paramsID1').val()
	var id_calon_debitur = $('#paramsID2').val()
	var id_kredit_check = $('#paramsID3').val()
	$('#load_page').val('false');


	$('#id_order_ca').val(id_order)
	$('#id_calon_debitur_ca').val(id_calon_debitur)

	$('#backcn').click(function () {
		$('#load_page').val('false');
		load()
		$('#tamplate').val('views/content/data/data-memo-kredit-ca.php');
		$('#app').load('views/content/data/data-memo-kredit-ca.php');
	})

	$('#simpan-edit-memo-ca').click(function () {
		$('#load_page').val('true');
		load()
		saveEditMemoCa()
	})

	'use strict'
	function saveEditMemoCa() {
		var data = $('#form-edit-memo-kredit-ca').serialize()
		//console.log(data)
		$.ajax({
			type:'POST',
			url:url+'Home/SaveUpdateMemoCa',
			dataType:'JSON',
			data:data,
			beforeSend:function () {
				console.log('mengirim');
  			$('#load_page').val('true');
				load()
				$('#simpan-edit-memo-ca').prop('disabled',true);
				$('#simpan-edit-memo-ca').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Sedang mengirim data . . .');
			},
			success:function(data) {
				console.log(data);
  			$('#load_page').val('false');
				$('#simpan-edit-memo-ca').prop('disabled',false)
				$('#simpan-edit-memo-ca').html('Simpan Perubahan')
				if (data.msg == 'success') {
					$('#simpan-edit-memo-ca').prop('disabled',false)
					$('#simpan-edit-memo-ca').html('Simpan Perubahan')
					$('#tamplate').val('views/content/form/edit-memo-kredit-ca.php')
					$('#app').load('views/content/form/edit-memo-kredit-ca.php')
					swal({
				        title: "Sukses!",
				        text: "data berhasil di Update!",
				        icon: "success"
				    });
				}
			},
			error:function (xhr, status, error) {
				$('#simpan-edit-memo-ca').prop('disabled',false)
				$('#simpan-edit-memo-ca').html('Simpan Perubahan')
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

	$('#form-edit-foto-jaminan-ca').submit(function(e) {
		e.preventDefault();
		console.log('ya ya ya');
		var data = new FormData(this);
		saveEditFotoJaminanMemoCa(data,id_order)
	})

	'use strict'
	function saveEditFotoJaminanMemoCa(data,id_order) {
		console.log(id_order)
		$.ajax({
			type:'POST',
			url:url+'Home/EditFotoJaminanCa/'+id_order,
			dataType:'JSON',
			data:data,
			processData:false,
			contentType:false,
			cache:false,
			async:true,
			beforeSend:function () {
				console.log('mengirim');
  			$('#load_page').val('true');
				load()
				$('#simpan-edit-foto-jaminan-ca').prop('disabled',true);
				$('#simpan-edit-foto-jaminan-ca').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Sedang mengirim data . . .');
			},
			success:function(data) {
				console.log(data);
  			$('#load_page').val('false');
				$('#simpan-edit-foto-jaminan-ca').prop('disabled',false)
				$('#simpan-edit-foto-jaminan-ca').html('Upload Foto Jaminan baru')
				if (data.msg == 'success') {
					$('#simpan-edit-foto-jaminan-ca').prop('disabled',false)
					$('#simpan-edit-foto-jaminan-ca').html('Upload Foto Jaminan baru')
					$('#tamplate').val('views/content/form/edit-memo-kredit-ca.php')
					$('#app').load('views/content/form/edit-memo-kredit-ca.php')
					swal({
		        title: "Sukses!",
		        text: "data berhasil di Update!",
		        icon: "success"
			    });
				}else if (data.msg == 'gagal upload'){
					$('#simpan-order').prop('disabled',false)
					$('#simpan-order').html('Simpan')
					swal({
				        title: "Gagal upload!",
				        text: "Silahkan upload file lampiran",
				        button:false,
				        timer:1500,
				        icon: "error"
				    });
				}
			},
			error:function (xhr, status, error) {
				$('#simpan-edit-foto-jaminan-ca').prop('disabled',false)
				$('#simpan-edit-foto-jaminan-ca').html('Upload Foto Jaminan baru')
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

	$('#form-edit-lampiran-ca').submit(function(e) {
		e.preventDefault();
		console.log('ya ya ya');
		var data = new FormData(this);
		saveEditLampiranMemoCa(data,id_order)
	})
	'use strict'
	function saveEditLampiranMemoCa(data,id_order) {
		//console.log(data)
		$.ajax({
			type:'POST',
			url:url+'Home/EditLampiranCa/'+id_order,
			dataType:'JSON',
			data:data,
			processData:false,
			contentType:false,
			cache:false,
			async:true,
			beforeSend:function () {
				console.log('mengirim');
  			$('#load_page').val('true');
				load()
				$('#simpan-edit-lampiran-ca').prop('disabled',true);
				$('#simpan-edit-lampiran-ca').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Sedang mengirim data . . .');
			},
			success:function(data) {
				console.log(data);
  			$('#load_page').val('false');
				$('#simpan-edit-lampiran-ca').prop('disabled',false)
				$('#simpan-edit-lampiran-ca').html('Upload Foto Jaminan baru')
				if (data.msg == 'success') {
					$('#simpan-edit-lampiran-ca').prop('disabled',false)
					$('#simpan-edit-lampiran-ca').html('Upload Foto Jaminan baru')
					$('#tamplate').val('views/content/form/edit-memo-kredit-ca.php')
					$('#app').load('views/content/form/edit-memo-kredit-ca.php')
					swal({
		        title: "Sukses!",
		        text: "data berhasil di Update!",
		        icon: "success"
			    });
				}else if (data.msg == 'gagal upload'){
					$('#simpan-edit-lampiran-ca').prop('disabled',false)
					$('#simpan-edit-lampiran-ca').html('Upload lampiran baru')
					swal({
				        title: "Gagal upload!",
				        text: "Silahkan upload file lampiran",
				        button:false,
				        timer:1500,
				        icon: "error"
				    });
				}
			},
			error:function (xhr, status, error) {
				$('#simpan-edit-lampiran-ca').prop('disabled',false)
				$('#simpan-edit-lampiran-ca').html('Upload lampiran baru')
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


	/*PENILAIAN*/
	var jumlah_njop_tanah = 0
	var jumlah_njop_bangunan = 0
	var jumlah_pasaran_tanah = 0
	var jumlah_pasaran_bangunan = 0
	var total_harga_pasar = 0
	var nilai_taksasi = 0
	var hasil_taksasi = 0

  $('#luas_tanah_njop').keyup(function (){
    $('#luas_tanah_penilaian_njop').val($(this).val())
    const luas_tanah = $(this).val()
    const njop_bumi = $('#njop_bumi').val()
    jumlah_njop_tanah = luas_tanah*njop_bumi
    TotalNjop(jumlah_njop_tanah,jumlah_njop_bangunan)
    $('#jumlah_njop_bumi').html('Rp. '+FormatRupiah(jumlah_njop_tanah))
  })

  $('#luas_bangunan_njop').keyup(function () {
    $('#luas_bangunan_penilaian_njop').val($(this).val())
    const luas_bangunan = $(this).val()
    const njop_bangunan = $('#njop_bangunan').val()
    jumlah_njop_bangunan = luas_bangunan*njop_bangunan
    TotalNjop(jumlah_njop_tanah,jumlah_njop_bangunan)
    $('#jumlah_njop_bangunan').html('Rp. '+FormatRupiah(jumlah_njop_bangunan))
  })

	$('#luas_tanah_ca').keyup(function () {
		$('#luas_tanah_penilaian_ca').val($(this).val())
		const harga_pasaran_tanah = $('#harga_pasaran_tanah').val()
    const luas_tanah = $(this).val()
		jumlah_pasaran_tanah = luas_tanah*harga_pasaran_tanah
		TotalHargaPasar(jumlah_pasaran_tanah,jumlah_pasaran_bangunan)
		TotalTaksasi (total_harga_pasar,nilai_taksasi)
    console.log(jumlah_pasaran_tanah)
		$('#jumlah_pasaran_tanah').html('Rp. '+FormatRupiah(jumlah_pasaran_tanah))
	})

	$('#luas_bangunan_ca').keyup(function () {
		$('#luas_bangunan_penilaian_ca').val($(this).val())
		const harga_pasaran_bangunan = $('#harga_pasaran_bangunan').val()
    const luas_bangunan = $(this).val()
		jumlah_pasaran_bangunan = luas_bangunan*harga_pasaran_bangunan
		TotalHargaPasar(jumlah_pasaran_tanah,jumlah_pasaran_bangunan)
		TotalTaksasi (total_harga_pasar,nilai_taksasi)
		$('#jumlah_pasaran_bangunan').html('Rp. '+FormatRupiah(jumlah_pasaran_bangunan))
	})

	$('#njop_bumi').keyup(function () {
    const luas_tanah = $('#luas_tanah_penilaian_njop').val()
    const val_njop_bumi = $(this).val()
    const njop_bumi = val_njop_bumi.toString().split(".").join("")
		jumlah_njop_tanah = luas_tanah*njop_bumi
		TotalNjop(jumlah_njop_tanah,jumlah_njop_bangunan)
		$('#jumlah_njop_bumi').html('Rp. '+FormatRupiah(jumlah_njop_tanah))
	})

	$('#njop_bangunan').keyup(function () {
		const luas_ban = $('#luas_bangunan_penilaian_njop').val()
		const val_njop_bangunan = $(this).val()
    const njop_bangunan = val_njop_bangunan.toString().split(".").join("")
		jumlah_njop_bangunan = luas_ban*njop_bangunan
		TotalNjop(jumlah_njop_tanah,jumlah_njop_bangunan)
		$('#jumlah_njop_bangunan').html('Rp. '+FormatRupiah(jumlah_njop_bangunan))
	})

	'use strict'
	function TotalNjop(jumlah_njop_tanah,jumlah_njop_bangunan) {
		var total_njop = jumlah_njop_tanah+jumlah_njop_bangunan
		$('#jumlah_njop').html('Rp. '+FormatRupiah(total_njop))
	}

	$('#harga_pasaran_tanah').keyup(function() {
		const luas_tanah = $('#luas_tanah_penilaian_ca').val()
		const val_harga_pasaran_tanah = $(this).val()
    const harga_pasaran_tanah = val_harga_pasaran_tanah.toString().split(".").join("")
		jumlah_pasaran_tanah = luas_tanah*harga_pasaran_tanah
		TotalHargaPasar(jumlah_pasaran_tanah,jumlah_pasaran_bangunan)
		TotalTaksasi (total_harga_pasar,nilai_taksasi)
		$('#jumlah_pasaran_tanah').html('Rp. '+FormatRupiah(jumlah_pasaran_tanah))
	})

	$('#harga_pasaran_bangunan').keyup(function() {
		const luas_bangunan = $('#luas_bangunan_penilaian_ca').val()
		const val_harga_pasaran_bangunan = $(this).val()
    const harga_pasaran_bangunan = val_harga_pasaran_bangunan.toString().split(".").join("")
		jumlah_pasaran_bangunan = luas_bangunan*harga_pasaran_bangunan
		TotalHargaPasar(jumlah_pasaran_tanah,jumlah_pasaran_bangunan)
		TotalTaksasi (total_harga_pasar,nilai_taksasi)
		$('#jumlah_pasaran_bangunan').html('Rp. '+FormatRupiah(jumlah_pasaran_bangunan))
	})

	'use strict'
	function TotalHargaPasar(jumlah_pasaran_tanah,jumlah_pasaran_bangunan) {
		total_harga_pasar = jumlah_pasaran_tanah+jumlah_pasaran_bangunan
		$('#total_harga_pasar').html('Rp. '+FormatRupiah(total_harga_pasar))
		$('.total_harga_pasar').html('Rp. '+FormatRupiah(total_harga_pasar))
	}

	$('#nilai_taksasi_persen').keyup(function() {
		nilai_taksasi = $(this).val()
		$('#persen_taksasi').html(nilai_taksasi+'%')
		TotalTaksasi (total_harga_pasar,nilai_taksasi)
	})

	function TotalTaksasi (total_harga_pasar,nilai_taksasi) {
		hasil_taksasi = total_harga_pasar*(nilai_taksasi/100)
		$('#hasil_taksasi').html('Rp. '+FormatRupiah(hasil_taksasi))
	}

	'use strict'
	get_DetailCa(id_order)
	function get_DetailCa(id_order) {
		$.ajax({
			async: true,
			type:'GET',
			url:url+'Home/get_DetailCa/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#nama_calon_debitur').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#no_aplikasi_ca').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#jaminan_utama_ca').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#sumber_informasi_ca').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#ket_sla').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#alamat_domisili_ca').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#opt-status-rumah-ca').html(loading)
				$('#opt-alamat-sekarang').html(loading)
				$('#rt_domisili').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#rw_domisili').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#pekerjaan_debitur').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#nama_tempat_kerja').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#posisi').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#jenis_usaha_debitur').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#alamat_usaha_debitur').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#masa_kerja_debitur').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#no_telp_kerja_debitur').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#pengeluaran_lainnya').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#pendapatan_tunai').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#pendapatan_kredit').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#pengeluaran_sewa').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#pengeluaran_belanja').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#pengeluaran_gaji_pegawai').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#angsuran_lain_usaha').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#pengeluaran_lain_usaha').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#pengeluaran_telp_listrik_air').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#jml_tanggungan').attr('disabled',true).val('Sedang Mengambil Data . . .')

				$('#fasilitas_umum').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#luas_tanah_njop').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#luas_bangunan_njop').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#luas_tanah_ca').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#luas_bangunan_ca').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#kondisi_bentuk_tanah').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#dibangun_tahun').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#kegunaan_bangunan').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#penguasaan_tanah_bangunan').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#kondisi_fisik_bangunan').attr('disabled',true).val('Sedang Mengambil Data . . .')

				$('#sebelah_utara').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#sebelah_selatan').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#sebelah_timur').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#sebelah_barat').attr('disabled',true).val('Sedang Mengambil Data . . .')

				$('#jalan_depan').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#jalan_lingkungan_terbesar').attr('disabled',true).val('Sedang Mengambil Data . . .')

				$('#njop_bumi').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#njop_bangunan').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#harga_pasaran_tanah').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#harga_pasaran_bangunan').attr('disabled',true).val('Sedang Mengambil Data . . .')

				$('#keterangan_penilaian').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#nilai_taksasi_persen').attr('disabled',true).val('Sedang Mengambil Data . . .')

				$('#sumber_harga').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#faktor_yang_dapat_menaikan').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#faktor_yang_dapat_menurunkan').attr('disabled',true).val('Sedang Mengambil Data . . .')

				$('#usaha_debitur').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#nama_tempat_usaha').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#jenis_usaha').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#alamat_tempat_usaha').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#masa_usaha').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#no_telp_usaha').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#no_telp_kerja_debitur').attr('disabled',true).val('Sedang Mengambil Data . . .')
			},
			success:function (res) {
				$.each(res,function(k,v) {
					$('#nama_calon_debitur').removeAttr('disabled').val(v.calon_debitur)
					$('#no_aplikasi_ca').removeAttr('disabled').val(v.no_aplikasi)
					$('#jaminan_utama_ca').removeAttr('disabled').val(v.nama_jenis_jaminan)
					$('#sumber_informasi_ca').removeAttr('disabled').val(v.desk_sumber_informasi)
					$('#k_jaminan_utama_ca').val(v.jaminan_utama)
					$('#k_sumber_informasi_ca').val(v.sumber_informasi)
					$('#ket_sla').removeAttr('disabled').val(v.ket_sla)
					$('#alamat_domisili_ca').removeAttr('disabled').val(v.alamat_domisili)
					statusRumah(v.status_rumah)
					alamatSekarang(v.alamat_sekarang)
					getPropinsi(v.propinsi_id_domisili)
					getKabKota(v.kotakab_id_domisili,v.propinsi_id_domisili)
					getKecamatan(v.kecamatan_id_domisili,v.kotakab_id_domisili)
					getKelurahan(v.kelurahan_id_domisili,v.kecamatan_id_domisili)
					$('#rt_domisili').removeAttr('disabled').val(v.rt_domisili)
					$('#rw_domisili').removeAttr('disabled').val(v.rw_domisili)
					$('#pekerjaan_debitur').removeAttr('disabled').val(v.pekerjaan_debitur)
					$('#nama_tempat_kerja').removeAttr('disabled').val(v.nama_tempat_kerja)
					$('#posisi').removeAttr('disabled').val(v.posisi)
					$('#jenis_usaha_debitur').removeAttr('disabled').val(v.jenis_usaha_debitur)
					$('#alamat_usaha_debitur').removeAttr('disabled').val(v.alamat_usaha_debitur)
					$('#masa_kerja_debitur').removeAttr('disabled').val(v.masa_kerja_debitur)
					$('#no_telp_kerja_debitur').removeAttr('disabled').val(v.no_telp_kerja_debitur)
					$('#pengeluaran_lainnya').removeAttr('disabled').val(v.pengeluaran_lainya)
					$('#pendapatan_tunai').removeAttr('disabled').val(v.pendapatan_tunai)
					$('#pendapatan_kredit').removeAttr('disabled').val(v.pendapatan_kredit)
					$('#pengeluaran_sewa').removeAttr('disabled').val(v.pengeluaran_sewa)
					$('#pengeluaran_belanja').removeAttr('disabled').val(v.pengeluaran_belanja)
					$('#pengeluaran_gaji_pegawai').removeAttr('disabled').val(v.pengeluaran_gaji_pegawai)
					$('#angsuran_lain_usaha').removeAttr('disabled').val(v.angsuran_lain_usaha)
					$('#pengeluaran_lain_usaha').removeAttr('disabled').val(v.pengeluaran_lainya_usaha)
					$('#pengeluaran_telp_listrik_air').removeAttr('disabled').val(v.pengeluaran_telp_listrik_air)
					$('#jml_tanggungan').removeAttr('disabled').val(v.jml_tanggungan)

					$('#fasilitas_umum').removeAttr('disabled').val(v.fasilitas_umum)
					$('#luas_tanah_njop').removeAttr('disabled').val(v.luas_tanah_njop)
					$('#luas_bangunan_njop').removeAttr('disabled').val(v.luas_bangunan_njop)
					$('#luas_tanah_ca').removeAttr('disabled').val(v.luas_tanah_ca)
					$('#luas_bangunan_ca').removeAttr('disabled').val(v.luas_bangunan_ca)
					$('#kondisi_bentuk_tanah').removeAttr('disabled').val(v.kondisi_bentuk_tanah)
					$('#dibangun_tahun').removeAttr('disabled').val(v.dibangun_tahun)
					$('#kegunaan_bangunan').removeAttr('disabled').val(v.kegunaan_bangunan)
					$('#penguasaan_tanah_bangunan').removeAttr('disabled').val(v.penguasaan_tanah_bangunan)
					$('#kondisi_fisik_bangunan').removeAttr('disabled').val(v.kondisi_fisik)

					$('#sebelah_utara').removeAttr('disabled').val(v.sebelah_utara)
					$('#sebelah_selatan').removeAttr('disabled').val(v.sebelah_selatan)
					$('#sebelah_timur').removeAttr('disabled').val(v.sebelah_timur)
					$('#sebelah_barat').removeAttr('disabled').val(v.sebelah_barat)

					$('#jalan_depan').removeAttr('disabled').val(v.jalan_didepan)
					$('#jalan_lingkungan_terbesar').removeAttr('disabled').val(v.jalan_lingkungan_terbesar)

					$('#luas_tanah_penilaian_njop').val(v.luas_tanah_njop)
					$('#luas_bangunan_penilaian_njop').val(v.luas_bangunan_njop)
					$('#luas_tanah_penilaian_ca').val(v.luas_tanah_ca)
					$('#luas_bangunan_penilaian_ca').val(v.luas_bangunan_ca)

					$('#njop_bumi').removeAttr('disabled').val(v.njop_tanah)
					$('#njop_bangunan').removeAttr('disabled').val(v.njop_bangunan)
					$('#harga_pasaran_tanah').removeAttr('disabled').val(v.harga_pasar_tanah)
					$('#harga_pasaran_bangunan').removeAttr('disabled').val(v.harga_pasar_bangunan)

					let luas_tanah_njop_ca = v.luas_tanah_njop
					let luas_bangunan_njop_ca = v.luas_bangunan_njop
					let luas_tanah_ca = v.luas_tanah_ca
					let luas_bangunan_ca = v.luas_bangunan_ca

					let njop_bangunan = v.njop_bangunan
					let njop_bumi = v.njop_tanah

					let jumlah_njop_bangunan_info = luas_bangunan_njop_ca * njop_bangunan
					let jumlah_njop_tanah_info = luas_tanah_njop_ca * njop_bumi

					let jumlah_njop = jumlah_njop_bangunan_info + jumlah_njop_tanah_info

					jumlah_njop_tanah = jumlah_njop_tanah_info
					jumlah_njop_bangunan = jumlah_njop_bangunan_info

					$('#jumlah_njop_bangunan').html(FormatRupiah(jumlah_njop_bangunan_info))
					$('#jumlah_njop_bumi').html(FormatRupiah(jumlah_njop_tanah_info))
					$('#jumlah_njop').html(FormatRupiah(jumlah_njop))

					let harga_pasar_tanah = v.harga_pasar_tanah
					let jum_harga_pasar_tanah = luas_tanah_ca * harga_pasar_tanah
					let harga_pasar_bangunan = v.harga_pasar_bangunan
					let jum_harga_pasar_bangunan = luas_bangunan_ca * harga_pasar_bangunan
					let jumlah_harga_pasar = jum_harga_pasar_tanah + jum_harga_pasar_bangunan

					// isi var perhitungan
					jumlah_pasaran_tanah = jum_harga_pasar_tanah
					jumlah_pasaran_bangunan = jum_harga_pasar_bangunan
					total_harga_pasar = jumlah_harga_pasar

					$('#jumlah_pasaran_tanah').html(FormatRupiah(jum_harga_pasar_tanah))
					$('#jumlah_pasaran_bangunan').html(FormatRupiah(jum_harga_pasar_bangunan))
					$('.total_harga_pasar').html(FormatRupiah(jumlah_harga_pasar))

					let nilai_taksasi_info = v.nilai_taksasi
					let jum_taksasi = jumlah_harga_pasar * (nilai_taksasi_info/100)

					nilai_taksasi = nilai_taksasi_info
					hasil_taksasi = jum_taksasi

					$('#persen_taksasi').html(FormatRupiah(nilai_taksasi)+'%')
					$('#hasil_taksasi').html(FormatRupiah(jum_taksasi.toFixed()))

					$('#keterangan_penilaian').removeAttr('disabled').val(v.keterangan_penilaian)
					$('#nilai_taksasi_persen').removeAttr('disabled').val(v.nilai_taksasi)

					$('#sumber_harga').removeAttr('disabled').val(v.sumber_harga)
					$('#faktor_yang_dapat_menaikan').removeAttr('disabled').val(v.faktor_menaikan)
					$('#faktor_yang_dapat_menurunkan').removeAttr('disabled').val(v.faktor_menurunkan)

					$('#usaha_debitur').removeAttr('disabled').val(v.usaha_debitur)
					$('#nama_tempat_usaha').removeAttr('disabled').val(v.nama_tempat_usaha)
					$('#jenis_usaha').removeAttr('disabled').val(v.jenis_usaha)
					$('#alamat_tempat_usaha').removeAttr('disabled').val(v.alamat_tempat_usaha)
					$('#masa_usaha').removeAttr('disabled').val(v.masa_usaha)
					$('#no_telp_usaha').removeAttr('disabled').val(v.no_telp_usaha)
					$('#tempat_usaha').removeAttr('disabled').val(v.tempat_usaha)
					tempatusaha(v.tempat_usaha)
				})
			}
		})
	}

	'use strict'
	get_DetailCaBangunan(id_order)
	function get_DetailCaBangunan(id_order) {
		$.ajax({
			async: true,
			type:'GET',
			url:url+'Home/get_DetailCaBangunan/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#kontruksi').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#lantai').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#dinding').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#kusen').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#pintu').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#jendela').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#kuda_kuda').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#rangkap_atap').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#langit_langit').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#atap').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#pagar').attr('disabled',true).val('Sedang Mengambil Data . . .')

				$('#ruang_tamu').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#kamar_mandi').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#ruang_makan').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#dapur').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#kamar_pembantu').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#teras').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#kamar_tidur').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#garasi').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#ruang_keluarga').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#kamar_mandi_2').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#ruang_makan_2').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#dapur_2').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#kamar').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#terasl2').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#listrik').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#telpon_fax').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#air').attr('disabled',true).val('Sedang Mengambil Data . . .')
			},
			success:function (res) {
				console.log(res)
				$.each(res,function(k,v) {
					$('#kontruksi').removeAttr('disabled').val(v.kontruksi)
					$('#lantai').removeAttr('disabled').val(v.lantai)
					$('#dinding').removeAttr('disabled').val(v.dinding)
					$('#kusen').removeAttr('disabled').val(v.kusen)
					$('#pintu').removeAttr('disabled').val(v.pintu)
					$('#jendela').removeAttr('disabled').val(v.jendela)
					$('#kuda_kuda').removeAttr('disabled').val(v.kuda_kuda)
					$('#rangkap_atap').removeAttr('disabled').val(v.rangkap_atap)
					$('#langit_langit').removeAttr('disabled').val(v.langit_langit)
					$('#atap').removeAttr('disabled').val(v.atap)
					$('#pagar').removeAttr('disabled').val(v.pagar)

					$('#ruang_tamu').removeAttr('disabled').val(v.ruang_tamu)
					$('#kamar_mandi').removeAttr('disabled').val(v.kamar_mandi_wc)
					$('#ruang_makan').removeAttr('disabled').val(v.ruang_makan)
					$('#dapur').removeAttr('disabled').val(v.dapur)
					$('#kamar_pembantu').removeAttr('disabled').val(v.kamar_pembantu)
					$('#teras').removeAttr('disabled').val(v.teras)
					$('#kamar_tidur').removeAttr('disabled').val(v.kamar_tidur)
					$('#garasi').removeAttr('disabled').val(v.garasi)
					$('#ruang_keluarga').removeAttr('disabled').val(v.ruang_keluarga_l2)
					$('#kamar_mandi_2').removeAttr('disabled').val(v.kamar_mandi_wc_l2)
					$('#ruang_makan_2').removeAttr('disabled').val(v.ruang_makan_l2)
					$('#dapur_2').removeAttr('disabled').val(v.dapur_l2)
					$('#kamar').removeAttr('disabled').val(v.kamar_l2)
					$('#terasl2').removeAttr('disabled').val(v.teras_l2)
					$('#listrik').removeAttr('disabled').val(v.listrik_l2)
					$('#telpon_fax').removeAttr('disabled').val(v.telepon_fax_dll_l2)
					$('#air').removeAttr('disabled').val(v.air_l2)
				})
			}
		})
	}

	get_DetailCaVerifikasiData(id_order)
	'use strict'
	function get_DetailCaVerifikasiData(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaVerifikasiData/'+id_order,
			dataType:'JSON',
			success:function (res) {
				$.each(res,function(k,v) {
					if (v.ktp_cln_debitur == 0) {
						$('#ktp_cln_debitur_0').attr('checked',true)
					}else{
						$('#ktp_cln_debitur_1').attr('checked',true)
					}

					if (v.ktp_pasangan == 0) {
						$('#ktp_cln_pasangan_debitur_ca_0').attr('checked',true)
					}else{
						$('#ktp_cln_pasangan_debitur_ca_1').attr('checked',true)
					}

					if (v.kartu_keluarga == 0) {
						$('#kartu_keluarga_0').attr('checked',true)
					}else{
						$('#kartu_keluarga_1').attr('checked',true)
					}

					if (v.surat_nikah == 0) {
						$('#surat_nikah_0').attr('checked',true)
					}else{
						$('#surat_nikah_1').attr('checked',true)
					}

					if (v.surat_cerai == 0) {
						$('#surat_cerai_0').attr('checked',true)
					}else{
						$('#surat_cerai_1').attr('checked',true)
					}

					if (v.sttp_pbb == 0) {
						$('#sttp_pbb_0').attr('checked',true)
					}else{
						$('#sttp_pbb_1').attr('checked',true)
					}

					if (v.sertifikat_or_bpkb == 0) {
						$('#sertifikat_or_bpkb_0').attr('checked',true)
					}else{
						$('#sertifikat_or_bpkb_1').attr('checked',true)
					}

					if (v.imb == 0) {
						$('#imb_0').attr('checked',true)
					}else{
						$('#imb_1').attr('checked',true)
					}

					if (v.slip_gaji == 0) {
						$('#slip_gaji_0').attr('checked',true)
					}else{
						$('#slip_gaji_1').attr('checked',true)
					}

					if (v.rekening_tabungan == 0) {
						$('#rekening_tabungan_0').attr('checked',true)
					}else{
						$('#rekening_tabungan_1').attr('checked',true)
					}

					if (v.data_penjamin == 0) {
						$('#data_penjamin_ca_0').attr('checked',true)
					}else{
						$('#data_penjamin_ca_1').attr('checked',true)
					}

					$('#catatan').html(v.catatan)
				})
			}
		})
	}
	'use strict'
	get_DetailCaCeklisSurvey(id_order)
	function get_DetailCaCeklisSurvey(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaCeklisSurvey/'+id_order,
			dataType:'JSON',
			success:function (res) {
				$.each(res,function(k,v) {
					if (v.visit_cln_debitur == 0) {
						$('#visit_cln_debitur_0').attr('checked',true)
					}else{
						$('#visit_cln_debitur_1').attr('checked',true)
					}

					if (v.visit_pasangan == 0) {
						$('#visit_pasangan_0').attr('checked',true)
					}else{
						$('#visit_pasangan_1').attr('checked',true)
					}

					if (v.visit_penjamin == 0) {
						$('#visit_penjamin_0').attr('checked',true)
					}else{
						$('#visit_penjamin_1').attr('checked',true)
					}

					if (v.visit_tmpt_tinggal == 0) {
						$('#visit_tmpt_tinggal_0').attr('checked',true)
					}else{
						$('#visit_tmpt_tinggal_1').attr('checked',true)
					}

					if (v.visit_jaminan == 0) {
						$('#visit_jaminan_0').attr('checked',true)
					}else{
						$('#visit_jaminan_1').attr('checked',true)
					}

					if (v.visit_usaha == 0) {
						$('#visit_usaha_0').attr('checked',true)
					}else{
						$('#visit_usaha_1').attr('checked',true)
					}

					if (v.cek_lingkungan == 0) {
						$('#cek_lingkungan_0').attr('checked',true)
					}else{
						$('#cek_lingkungan_1').attr('checked',true)
					}

					if (v.alamat_domisili == 0) {
						$('#alamat_domisili_0').attr('checked',true)
					}else{
						$('#alamat_domisili_1').attr('checked',true)
					}
				})
			}
		})
	}
	'use strict'
	get_DetailCaKondisiLokasi(id_order)
	function get_DetailCaKondisiLokasi(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaKondisiLokasi/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#pusat_keramaian').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#jarak_keramaian').attr('disabled',true).val('Sedang Mengambil Data . . .')
			},
			success:function (res) {
				$.each(res,function(k,v) {
					$('#pusat_keramaian').removeAttr('disabled').val(v.pusat_keramaian)
					$('#jarak_keramaian').removeAttr('disabled').val(v.jarak_keramaian)
					if (v.akses_jalan == 'None') {
						$('#akses_jalan_none').attr('checked',true)
					}else if (v.akses_jalan == 'Aspal'){
						$('#akses_jalan_aspal').attr('checked',true)
					}else if (v.akses_jalan == 'Tanah'){
						$('#akses_jalan_tanah').attr('checked',true)
					}else if (v.akses_jalan == 'Rusak'){
						$('#akses_jalan_rusak').attr('checked',true)
					}

					if (v.tingkat_kepadatan == 'None') {
						$('#tingkat_kepadatan_none').attr('checked',true)
					}else if (v.tingkat_kepadatan == 'Padat'){
						$('#tingkat_kepadatan_padat').attr('checked',true)
					}else if (v.tingkat_kepadatan == 'Kurang Padat'){
						$('#tingkat_kepadatan_kurang_padat').attr('checked',true)
					}else if (v.tingkat_kepadatan == 'Sepi'){
						$('#tingkat_kepadatan_sepi').attr('checked',true)
					}

					if (v.luas_jalan == 'None') {
						$('#luas_jalan_none').attr('checked',true)
					}else if (v.luas_jalan == '>=2 Mobil'){
						$('#luas_jalan_2mobil').attr('checked',true)
					}else if (v.luas_jalan == '1 Mobil'){
						$('#luas_jalan_1mobil').attr('checked',true)
					}else if (v.luas_jalan == 'Gang'){
						$('#luas_jalan_gang').attr('checked',true)
					}

					if (v.pert_lingkungan == 'None') {
						$('#pert_lingkungan_none').attr('checked',true)
					}else if (v.pert_lingkungan == 'Cepat'){
						$('#pert_lingkungan_cepat').attr('checked',true)
					}else if (v.pert_lingkungan == 'Stabil'){
						$('#pert_lingkungan_stabil').attr('checked',true)
					}else if (v.pert_lingkungan == 'Lambat'){
						$('#pert_lingkungan_lambat').attr('checked',true)
					}

					if (v.rawan_bancana == 'None') {
						$('#rawan_bancana_none').attr('checked',true)
					}else if (v.rawan_bancana == 'Tidak Rawan'){
						$('#rawan_bancana_tidak').attr('checked',true)
					}else if (v.rawan_bancana == 'Rawan'){
						$('#rawan_bancana_rawan').attr('checked',true)
					}else if (v.rawan_bancana == 'Sangat Rawan'){
						$('#rawan_bancana_sangat').attr('checked',true)
					}

					if (v.daerah_banjir == 'None') {
						$('#daerah_banjir_none').attr('checked',true)
					}else if (v.daerah_banjir == 'Bebas'){
						$('#daerah_banjir_bebas').attr('checked',true)
					}else if (v.daerah_banjir == 'Jarang'){
						$('#daerah_banjir_jarang').attr('checked',true)
					}else if (v.daerah_banjir == 'Rawan'){
						$('#daerah_banjir_rawan').attr('checked',true)
					}

				})
			}
		})
	}
	'use strict'
	get_DetailCaLainLain(id_order)
	function get_DetailCaLainLain(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaLainLain/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#team_survey').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#penyimpangan').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#realisasi').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#tenor').attr('disabled',true).val('Sedang Mengambil Data . . .')
				$('#vertifikasi_data_debitur').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#vertifikasi_penjamin').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#vertifikasi_jaminan').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#analisa_kredit_checking').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#ket_calon_debitur').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#comment_analisa').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#hasil_cek_lingk').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#hasil_cek_aspek_kuantitatif').attr('disabled',true).html('Sedang Mengambil Data . . .')
			},
			success:function (res) {
				$.each(res,function(k,v) {
					console.log(res)
					if (v.sertifikat == 0) {
						$('#sertifikat_belum').attr('checked',true)
					}else{
						$('#sertifikat_sudah').attr('checked',true)
					}

					if (v.ajb == 0) {
						$('#ajb_0').attr('checked',true)
					}else{
						$('#ajb_1').attr('checked',true)
					}

					if (v.kendaraan == 0) {
						$('#kendaraan_0').attr('checked',true)
					}else{
						$('#kendaraan_1').attr('checked',true)
					}
					$('#team_survey').removeAttr('disabled').html(v.tim_survey)
					$('#penyimpangan').removeAttr('disabled').html(v.penyimpangan)
					$('#realisasi').removeAttr('disabled').val(parseInt(v.realisasi))
					tenorReq(v.tenor)
					$('#vertifikasi_data_debitur').removeAttr('disabled').html(v.vertifikasi_data_debitur)
					$('#vertifikasi_penjamin').removeAttr('disabled').html(v.vertifikasi_penjamin)
					$('#vertifikasi_jaminan').removeAttr('disabled').html(v.vertifikasi_jaminan)
					$('#analisa_kredit_checking').removeAttr('disabled').html(v.analisa_bi_checking)
					$('#ket_calon_debitur').removeAttr('disabled').html(v.ket_calon_debitur_ca)
					$('#comment_analisa').removeAttr('disabled').html(v.comment_analisa)
					$('#hasil_cek_lingk').removeAttr('disabled').html(v.hasil_cek_lingk)
					$('#hasil_cek_aspek_kuantitatif').removeAttr('disabled').html(v.hasil_cek_aspek_kuantitatif)
				})
			}
		})
	}
	get_DetailCAA(id_order)
	function get_DetailCAA(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCAA/'+id,
			dataType:'JSON',
			beforeSend:function () {
				$('#w_foto_jaminan').html(loading)
				$('#w_lampiran').html(loading)
			},
			success:function (res) {
				console.log(res)
				$.each(res,function (v,k) {
					var FotoJaminan = $.parseJSON(k.foto_jaminan)

					var htmlFotjam = ''
					if (FotoJaminan.length == 0) {
						$('#w_foto_jaminan').html('<p class="text-danger">Tidak ada Foto Jaminan!</p>')
					}else{
						$.each(FotoJaminan,function (v,k) {
							$.each(k,function (v,k) {
								var urlLampiran = url+'assets/foto_jaminan/'+k

								htmlFotjam += '<div class="col-sm-2 col-xs-2">'+
																'<a href="'+urlLampiran+'" target="_blank">'+
																	'<div id="hover_fot_jam" style="background:black;z-index:1;width:155px;height:155px;position:absolute;opacity:0.8">'+
																		'<p style="text-align:center;margin-top:33%;"><i class="mdi mdi-eye mdi-24px"></i><br>Lihat Foto</p>'+
																	'</div>'+
																	'<img src="'+urlLampiran+'" style="width:155px;height:155px;">'+
																'</a>'+
															'</div>'
							})
						})
						$('#w_foto_jaminan').html(htmlFotjam)
					}

					var lampiran = $.parseJSON(k.lampiran)

					var htmllam = ''
					if (lampiran.length == 0) {
						$('#w_lampiran').html('<p class="text-danger">Tidak ada lampiran!</p>')
					}else{
						$.each(lampiran,function (v,k) {
							$.each(k,function (v,k) {
								var urlLampiran = url+'assets/lampiran_caa/'+k
								htmllam += '<a href="'+urlLampiran+'" style="text-decoration:none;" target="_blank"><span class="mdi mdi-file-document"></span>'+k+'</a>&nbsp;&nbsp;&nbsp;&nbsp;'
							})
						})
						$('#w_lampiran').html(htmllam)
					}
				})
			}
		})
	}
	'use strict'
	function statusRumah(statusrumah) {
		var status_rumah = ['MILIK SENDIRI','SEWA KONTRAK', 'LAINNYA']
		var html = ''
		$.each(status_rumah,function(k,v) {
			if (v == statusrumah) {
				html += '<option value="'+v+'" selected>'+v+'</option>'
			}else{
				html += '<option value="'+v+'">'+v+'</option>'
			}
		})
		$('#opt-status-rumah-ca').html('<select class="form-control" name="status_rumah" id="status_rumah"><option value="null">Pilih</Option>'+html+'</select>')
	}

	'use strict'
	function tempatusaha(tempatusaha) {
		var tempatusaha = ['MILIK SENDIRI','SEWA']
		var html = ''
		$.each(tempatusaha,function(k,v) {
			if (v == tempatusaha) {
				html += '<option value="'+v+'" selected>'+v+'</option>'
			}else{
				html += '<option value="'+v+'">'+v+'</option>'
			}
		})
		$('#opt-tempat-usaha').html('<select class="form-control" name="tempat_usaha" id="tempat_usaha">'+html+'</select>')
	}

	'use strict'
	function alamatSekarang(alamatasekarang) {
		var alamat_sekarang = ['SESUAI KTP','BEDA DENGAN KTP']
		var html = ''
		$.each(alamat_sekarang,function(k,v) {
			if (v == alamatasekarang) {
				html += '<option value="'+v+'" selected>'+v+'</option>'
			}else{
				html += '<option value="'+v+'">'+v+'</option>'
			}
		})
		$('#opt-alamat-sekarang').html('<select class="form-control" name="alamat_sekarang" id="alamat_sekarang"><option value="null">Pilih</Option>'+html+'</select>')
	}

	$('#opt-propinsi').on('change','#selectPropinsi', function () {
		$('#opt-kecamatan').html(' - ')
		$('#opt-kelurahan').html(' - ')
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
				$('#opt-propinsi').html('<select class="form-control" name="propinsi_id_domisili" id="selectPropinsi"><option value="null">Pilih</Option>'
				+html+
				'</select>')
		}
		})
	}

	$('#opt-kotakab').on('change','#selectKabkota', function () {
		$('#opt-kelurahan').html(' - ')
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
			$('#opt-kotakab').html(loading)
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
			$('#opt-kotakab').html('<select class="form-control" name="kotakab_id_domisili" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
		}
		})
	}

	$('#opt-kecamatan').on('change','#selectKecamatan', function () {
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
				$('#opt-kecamatan').html(loading)
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
				$('#opt-kecamatan').html('<select class="form-control" name="kecamatan_id_domisili" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
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
				$('#opt-kelurahan').html(loading)
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
				$('#opt-kelurahan').html('<select class="form-control" name="kelurahan_id_domisili" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
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
