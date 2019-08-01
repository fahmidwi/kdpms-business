<div id="snackbar"></div>
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
        <form class="form-sample" id="form-memo-kredit-ca">
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
            <!-- <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">SLA</label>
                <div class="col-sm-8">
                  <select class="form-control" name="sla" id="sla">
                    <option value="NEW">NEW</option>
                    <option value="REPEAT ORDER">REPEAT ORDER</option>
                    <option value="TAKE OF">TAKE OF</option>
                  </select>
                </div>
              </div>
            </div> -->
          </div>
          <!-- <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Keterangan SLA</label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="ket_sla" id="ket_sla" style="margin-left: -5%; width: 105%;" placeholder="Masukan Keterangan SLA"></textarea>
                </div>
              </div>
            </div>
          </div> -->
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
                  <div id="opt-status-rumah-ca"></div>
                  <input type="hidden" name="status_rumah" id=_statusRumah>
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
                  <textarea class="form-control" name="alamat_domisili_ca" id="alamat_domisili_ca" style="margin-left: -5%; width: 105%;" placeholder="Masukan Alamat Domisili" readonly></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Provinsi Domisili</label>
                <div class="col-sm-8">
                  <div id="opt-propinsi"></div>
                  <input type="hidden" name="propinsi_id_domisili" id="_prop">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kota/Kab Domisili</label>
                <div class="col-sm-9">
                  <div id="opt-kotakab"></div>
                  <input type="hidden" name="kotakab_id_domisili" id="_kotakab">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Kecamatan Domisili</label>
                <div class="col-sm-8">
                  <div id="opt-kecamatan"></div>
                  <input type="hidden" name="kecamatan_id_domisili" id="_kecamatan">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kelurahan Domisili</label>
                <div class="col-sm-9">
                  <div id="opt-kelurahan"></div>
                  <input type="hidden" name="kelurahan_id_domisili" id="_kelurahan">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">RT Domisili</label>
                <div class="col-sm-8">
                  <input class="form-control" type="text" name="rt_domisili" id="rt_domisili" placeholder="Masukan RT"  style="margin-left: 15%; width: 80%;" readonly />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">RW Domisili</label>
                <div class="col-sm-9">
                  <input type="text" name="rw_domisili" class="form-control" id="rw_domisili" placeholder="Masukan RW" readonly >
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
                  <input class="form-control" type="text" placeholder="Masukan Pekerjaan Debitur" id="pekerjaan_debitur" style="margin-left: -5%; width: 105%;" name="pekerjaan_debitur" readonly="" />
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
                <label class="col-sm-3 col-form-label">Jenis Usaha Debitur</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="jenis_usaha_debitur" id="jenis_usaha_debitur" placeholder="Masukan Jenis Usaha Debitur" style="margin-left: -5%; width: 105%;"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alamat Usaha Debitur</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="alamat_usaha_debitur" id="alamat_usaha_debitur" placeholder="Masukan Alamat Usaha Debitur" style="margin-left: -5%; width: 105%;"/>
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
                  <input type="number" class="form-control" name="no_telp_kerja_debitur" id="no_telp_kerja_debitur" placeholder="Masukan Nomor Telepon Kerja Debitur" style="margin-left: -5%; width: 105%;"/>
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
                  <input type="text" name="posisi" placeholder="Masukan Posisi" id="posisi" class="form-control" value="PEMILIK USAHA" readonly> 
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
                  <input type="text" class="form-control" name="pengeluaran_lainnya" id="pengeluaran_lainnya" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Pengeluaran Lainnya" style="margin-left: -5%; width: 105%;"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pendapatan tunai</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="pendapatan_tunai" id="pendapatan_tunai" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Pendapatan tunai" style="margin-left: -5%; width: 105%;"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pendapatan kredit</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="pendapatan_kredit" id="pendapatan_kredit" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Pendapatan kredit" style="margin-left: -5%; width: 105%;"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pengeluaran Sewa</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="pengeluaran_sewa" id="pengeluaran_sewa" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Pengeluaran Sewa" style="margin-left: -5%; width: 105%;"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pengeluaran Belanja</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="pengeluaran_belanja" id="pengeluaran_belanja" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Pengeluaran Belanja" style="margin-left: -5%; width: 105%;"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pengeluaran Gaji Pegawai</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="pengeluaran_gaji_pegawai" id="pengeluaran_gaji_pegawai" style="margin-left: -5%; width: 105%;" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Pengeluaran Gaji Pegawai">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Angsuran Lain Usaha</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="angsuran_lain_usaha" id="angsuran_lain_usaha" style="margin-left: -5%; width: 105%;" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Angsuran Lain Usaha">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">pengeluaran Lain Usaha</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="pengeluaran_lain_usaha" id="pengeluaran_lain_usaha" style="margin-left: -5%; width: 105%;" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan pengeluaran Lain Usaha">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pengeluaran Telp Listrik Air</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="pengeluaran_telp_listrik_air" id="pengeluaran_telp_listrik_air" style="margin-left: -5%; width: 105%;" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Pengeluaran Telp Listrik Air">
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
	                  <input type="radio" class="form-check-input" name="ktp_cln_debitur" id="ktp_cln_debitur_0" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="ktp_pasangan" id="ktp_cln_pasangan_debitur_ca_0" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="kartu_keluarga" id="kartu_keluarga_0" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="surat_nikah" id="surat_nikah_0" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="surat_cerai" id="surat_cerai_0" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="sttp_pbb" id="sttp_pbb_0" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="sertifikat_or_bpkb" id="sertifikat_or_bpkb_0" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="imb" id="imb_0" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="slip_gaji" id="slip_gaji_0" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="rekening_tabungan" id="rekening_tabungan_0" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="data_penjamin" id="data_penjamin_ca_0" value="0" checked> <p>Belum</p>
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
                    <input type="radio" class="form-check-input" name="visit_cln_debitur"  id="visit_cln_debitur_1" value="1"> <p>Sudah</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="visit_cln_debitur" id="visit_cln_debitur_0" value="0" checked> <p>Belum</p>
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
                    <input type="radio" class="form-check-input" name="visit_pasangan" id="visit_pasangan_0" value="0" checked> <p>Belum</p>
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
                    <input type="radio" class="form-check-input" name="visit_penjamin" id="visit_penjamin_0" value="0" checked> <p>Belum</p>
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
                    <input type="radio" class="form-check-input" name="visit_tmpt_tinggal"  id="visit_tmpt_tinggal_1" value="1" > <p>Sesuai Data</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="visit_tmpt_tinggal" id="visit_tmpt_tinggal_0" value="0" checked> <p>Tidak Sesuai</p>
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
                    <input type="radio" class="form-check-input" name="visit_jaminan"  id="visit_jaminan_1" value="1" > <p>Sesuai Data</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="visit_jaminan" id="visit_jaminan_0" value="0" checked> <p>Tidak Sesuai</p>
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
                    <input type="radio" class="form-check-input" name="visit_usaha"  id="visit_usaha_1" value="1" > <p>Sesuai Data</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="visit_usaha" id="visit_usaha_0" value="0" checked> <p>Tidak Sesuai</p>
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
                    <input type="radio" class="form-check-input" name="cek_lingkungan"  id="cek_lingkungan_1" value="1" > <p>Sesuai Data</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="cek_lingkungan" id="cek_lingkungan_0" value="0" checked> <p>Tidak Sesuai</p>
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
                    <input type="radio" class="form-check-input" name="alamat_domisili"  id="alamat_domisili_1" value="1" > <p>Sesuai KTP</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="alamat_domisili" id="alamat_domisili_0" value="0" checked> <p>Tidak Sesuai KTP</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr><br>
          <b class="card-description">
            Surat Surat Kendaraan
          </b><br><br><br><br>
          <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">STNK</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="stnk"  id="stnk_ada" value="ada" checked> <p>ada</p>
	                </div>
	              </div>
	              <div class="col-sm-3">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="stnk"  id="stnk_tada" value="tidak ada" > <p>tidak ada</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="stnk1"  id="stnk_berlaku" value="berlaku" checked > <p>berlaku</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="stnk1"  id="stnk_habis" value="habis"> <p>habis</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Notes Pajak</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="notes_pajak"  id="notes_pajak_ada" value="ada" checked> <p>ada</p>
	                </div>
	              </div>
	              <div class="col-sm-3">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="notes_pajak"  id="notes_pajak_tada" value="tidak ada" > <p>tidak ada</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="notes_pajak1"  id="notes_pajak_berlaku" value="berlaku" checked > <p>berlaku</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="notes_pajak1"  id="notes_pajak_habis" value="habis"> <p>habis</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Trayek</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="trayek"  id="trayek_ada" value="ada" checked> <p>ada</p>
	                </div>
	              </div>
	              <div class="col-sm-3">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="trayek"  id="trayek_tada" value="tidak ada" > <p>tidak ada</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="trayek1"  id="trayek_berlaku" value="berlaku" checked > <p>berlaku</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="trayek1"  id="trayek_habis" value="habis"> <p>habis</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">BPKB</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="bpkb"  id="bpkb_ada" value="ada" checked> <p>ada</p>
	                </div>
	              </div>
	              <div class="col-sm-3">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="bpkb"  id="bpkb_tada" value="tidak ada" > <p>tidak ada</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="bpkb1"  id="bpkb_sah" value="sah" checked > <p>sah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="bpkb1"  id="bpkb_diragukan" value="diragukan"> <p>diragukan</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Faktur</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="faktur"  id="faktur_ada" value="ada" checked> <p>ada</p>
	                </div>
	              </div>
	              <div class="col-sm-3">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="faktur"  id="faktur_tada" value="tidak ada" > <p>tidak ada</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="faktur1"  id="faktur_sah" value="sah" checked > <p>sah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="faktur1"  id="faktur_diragukan" value="diragukan"> <p>diragukan</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Kwitansi Blangko</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kwitansi_blangko"  id="kwitansi_blangko_ada" value="ada" checked> <p>ada</p>
	                </div>
	              </div>
	              <div class="col-sm-3">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kwitansi_blangko"  id="kwitansi_blangko_tada" value="tidak ada" > <p>tidak ada</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kwitansi_blangko1"  id="kwitansi_blangko_sah" value="sah" checked > <p>sah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kwitansi_blangko1"  id="kwitansi_blangko_diragukan" value="diragukan"> <p>diragukan</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
          <hr>
          <b class="card-description">
          	Masa Berlaku
          </b><br><br>
           <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Masa Berlaku STNK</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" name="masa_berlaku_stnk" id="masa_berlaku_stnk" style="margin-left: -5%; width: 105%;"/>
                </div>
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pajak</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" name="masa_berlaku_pajak" id="masa_berlaku_pajak" style="margin-left: -5%; width: 105%;"/>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <b class="card-description">
          	Fisik
          </b><br><br><br><br>
          <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Chasis</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="chasis"  id="chasis" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="chasis"  id="chasis" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="chasis"  id="chasis" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="chasis"  id="chasis" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Body</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="body"  id="body" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="body"  id="body" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="body"  id="body" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="body"  id="body" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Kabin</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kabin"  id="kabin" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kabin"  id="kabin" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kabin"  id="kabin" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kabin"  id="kabin" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Plafon</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="flapon"  id="flapon" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="flapon"  id="flapon" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="flapon"  id="flapon" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="flapon"  id="flapon" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Dashboard</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="dashboard"  id="dashboard" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="dashboard"  id="dashboard" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="dashboard"  id="dashboard" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="dashboard"  id="dashboard" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Dek/landasan</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="dek_landasan"  id="dek_landasan" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="dek_landasan"  id="dek_landasan" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="dek_landasan"  id="dek_landasan" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="dek_landasan"  id="dek_landasan" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Ban</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="ban"  id="ban" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="ban"  id="ban" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="ban"  id="ban" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="ban"  id="ban" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Velg</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="velg"  id="velg" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="velg"  id="velg" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="velg"  id="velg" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="velg"  id="velg" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Jok</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="jok"  id="jok" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="jok"  id="jok" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="jok"  id="jok" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="jok"  id="jok" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Cat</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="cat"  id="cat" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="cat"  id="cat" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="cat"  id="cat" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="cat"  id="cat" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Lampu-lampu</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="lampu_lampu"  id="lampu_lampu" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="lampu_lampu"  id="lampu_lampu" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="lampu_lampu"  id="lampu_lampu" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="lampu_lampu"  id="lampu_lampu" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Klakson</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="klakson"  id="klakson" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="klakson"  id="klakson" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="klakson"  id="klakson" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="klakson"  id="klakson" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Speedometer</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="speedometer"  id="speedometer" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="speedometer"  id="speedometer" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="speedometer"  id="speedometer" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="speedometer"  id="speedometer" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Kaca Spion</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kaca_spion"  id="kaca_spion" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kaca_spion"  id="kaca_spion" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kaca_spion"  id="kaca_spion" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kaca_spion"  id="kaca_spion" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">Kunci Kontak</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kunci_kontak"  id="kunci_kontak" value="Baik" checked> <p>Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kunci_kontak"  id="kunci_kontak" value="Cukup" > <p>Cukup</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kunci_kontak"  id="kunci_kontak" value="Kurang Baik"  > <p>Kurang Baik</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kunci_kontak"  id="kunci_kontak" value="Rusak"> <p>Rusak</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
			      <div class="col-md-12">
			        <div class="form-group row">
			          <label class="col-sm-3 col-form-label">Kondisi Mesin Pada Saat Hidup</label>
			          <div class="col-sm-9">
			            <textarea class="form-control" name="kondisi_mesin_hidup" id="kondisi_mesin_hidup" style="margin-left: -5%; width: 105%;" placeholder="Masukan Kondisi Mesin"></textarea>
			          </div>
			        </div>
			      </div>
			    </div>
		    <div class="row">
		      <div class="col-md-12">
		        <div class="form-group row">
		          <label class="col-sm-3 col-form-label">Perlengkapan Yang Ada</label>
		          <div class="col-sm-9">
		            <textarea class="form-control" name="perlengkapan_yang_ada" id="perlengkapan_yang_ada" style="margin-left: -5%; width: 105%;" placeholder="Masukan Perlengkapan"></textarea>
		          </div>
		        </div>
		      </div>
		    </div><hr><br>
		    <b class="card-description">
		    	Penilaian Jaminan
		    </b><br><br>
		    <div class="row">
		      <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Sumber 1</label>
                <div class="col-sm-8">
                  <input type="text" style="margin-left: 15%; width: 80%;" name="sumber1" placeholder="Masukan Informasi" id="sumber1" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Harga 1</label>
                <div class="col-sm-9">
                  <input type="text" name="harga1" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan harga1" id="harga1" class="form-control">
                </div>
              </div>
            </div>
		    </div>
		    <div class="row">
		      <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Sumber 2</label>
                <div class="col-sm-8">
                  <input type="text" style="margin-left: 15%; width: 80%;" name="sumber2" placeholder="Masukan Informasi" id="sumber2" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Harga 2</label>
                <div class="col-sm-9">
                  <input type="text" name="harga2" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan harga" id="harga2" class="form-control">
                </div>
              </div>
            </div>
		    </div>
		    <div class="row">
				<div class="col-md-12">
				<div class="form-group row">
				  <label class="col-sm-3 col-form-label">Kesimpuplan Penilaian</label>
				  <div class="col-sm-9">
				    <textarea class="form-control" name="kesimpulan_penilaian" id="kesimpulan_penilaian" style="margin-left: -5%; width: 105%;" placeholder="Masukan Subject" id="Subject"></textarea>
				  </div>
				</div>
				</div>
		    </div>
		    <br><hr>
		    <b class="card-description">
            Lain-Lain
          </b><br><br>
          <!-- <div class="row" style="margin-top: -3%;">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kendaraan</label>
                <div class="col-sm-3">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="kendaraan"  id="kendaraan" value="1" ><p>Sudah</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="kendaraan"  id="kendaraan" value="0" checked> <p>Belum</p>
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
                <label class="col-sm-3 col-form-label">Verifikasi Data Debitur</label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="vertifikasi_data_debitur_ca" id="vertifikasi_data_debitur_ca" style="margin-left: -5%; width: 105%;" placeholder="Masukan Verivikasi Data Debitur"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Verifikasi Penjamin</label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="vertifikasi_penjamin" id="vertifikasi_penjamin" style="margin-left: -5%; width: 105%;" placeholder="Masukan Verivikasi Penjamin"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Verifikasi jaminan</label>
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
                  <textarea class="form-control" name="ket_calon_debitur" id="ket_calon_debitur_ca" style="margin-left: -5%; width: 105%;" placeholder="Masukan Keterangan Calon Debitur"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Comment Analisa</label>
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
	     		</div>
		    <br>
		    <!-- <div class="row">
	      <div class="col-md-12">
	        <div class="form-group row">
	          <label class="col-sm-3 col-form-label">User CAA</label>
	          <div class="col-sm-9">
	            <select class="form-control" style="margin-left: -5%; width: 105%;" disabled="true">
	              <option>MANAGER,KETUA</option>
	            </select>
	          </div>
	        </div>
	      </div>
	      <div class="col-md-12">
	        <div class="form-group row">
	          <label class="col-sm-3 col-form-label">Subject</label>
	          <div class="col-sm-9">
	            <textarea class="form-control" name="Subject" id="Subject" style="margin-left: -5%; width: 105%;" placeholder="Masukan Subject" id="Subject"></textarea>
	          </div>
	        </div>
	      </div>
	      <div class="col-md-12">
	        <div class="form-group row">
	          <label class="col-sm-3 col-form-label">Foto Jaminan</label>
	          <div class="col-sm-9">
	            <input type="file" class="form-control" name="foto_jaminan[]" id="foto_jaminan" style="margin-left: -5%; width: 105%;" multiple>
	          </div>
	        </div>
	      </div>
	      <div class="col-md-12">
	        <div class="form-group row">
	          <label class="col-sm-3 col-form-label">Lampiran</label>
	          <div class="col-sm-9">
	            <input type="file" class="form-control" name="lampiran_caa[]" id="lampiran" style="margin-left: -5%; width: 105%;" multiple>
	          </div>
	        </div>
	      </div>
	      </div> -->
	      <div class="row">
	      	<div class="col-md-4"></div>
              <div class="col-md-8">
                <div class="form-group row">
                  <label class="col-form-label">ACCOUNT OFFICER MEREKOMENDASIKAN PINJAMAN INI Rp.&nbsp;&nbsp;</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="realisasi" id="realisasi_req" style="margin-left: -5%; width: 105%;" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Rekomendasi">
                  </div>
                  <label class="col-form-label"> - &nbsp;Dengan Tenor</label>
                  <div class="col-sm-2">
                    <div id="tenor_req"></div>
                  </div>
                </div>
              </div>
            </div><br>
        	<button type="submit" class="btn btn-primary btn-fw" style="width: 100%;" id="simpan-edit-memo-ca">Simpan Perubahan</button>&nbsp;
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

	$('#id_order_ca').val(id_order)
	$('#id_calon_debitur_ca').val(id_calon_debitur)

	$('#load_page').val('false');
	$('#title-header').html('Edit Data Memo Ca')

	$('#backcn').click(function () {
	$('#load_page').val('false');
	load()
	$('#tamplate').val('views/content/data/data-memo-kredit-ca.php');
	$('#app').load('views/content/data/data-memo-kredit-ca.php');
	})

	$('.Buttoggle').click(function () {
	var from = $(this).attr('from')
	if (from == 'cnasabah') {
	$('#conCnasabah').toggle()
	}else if (from == 'order') {
	$('#conOrder').toggle()
	}else if (from == 'kredit') {
	$('#conKredit').toggle()
	}else if (from == 'memoao') {
	$('#conMemoAo').toggle()
	}
	})

	$('#simpan-edit-memo-ca').click(function(e){
		e.preventDefault();
		saveEditMemoCaKend()
	})

	'use strict'
	function saveEditMemoCaKend() {
		var data = 	$('#form-memo-kredit-ca').serialize()
		//console.log(data)
		$.ajax({
			type:'POST',
			url:url+'Home/SaveUpdateMemoCaKendaraan',
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
					$('#tamplate').val('views/content/form/edit-memo-kredit-ca-kendaraan.php')
					$('#app').load('views/content/form/edit-memo-kredit-ca-kendaraan.php')
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
		//console.log(data)
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
	},
	success:function (res) {
		$('textarea').html('')
	$('v').html('')
	$.each(res,function (v,k) {

	ao_to_email = k.AO_ORDER
	name_to_email = k.nama_calon_nasabah
	nik_to_email = k.noktp
	plafond_to_email = FormatRupiah(k.plafond)+' - '+k.tenor+' Bulan'

	$('#jaminan_utama_ca').val(k.nama_jenis_jaminan)
	$('#k_jaminan_utama_ca').val(k.jenis_jaminan)
	$('#sumber_informasi_ca').val(k.nama_sumber_aplikasi)
	$('#k_sumber_informasi_ca').val(k.sumber_aplikasi)

	$('#plafond_kredit').html('<p>Rp. '+FormatRupiah(k.plafond)+'</p>')
	$('#jangka_waktu').html('<p>'+k.tenor+' Bulan</p>')

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

	$('id').html(k.id)
	$('#veriforder').html("&nbsp;"+verifikasi)
	$('#verifby').html(verifikasi_by)
	$('#tglverif').html("&nbsp;"+verifikasi_date)
	$('#status_assign').html(status_assign)
	$('#keterangan_assign').html(k.keterangan_assign)
	$('#nama_calon_nasabah').html('<p>'+k.nama_calon_nasabah+' - '+k.noktp+'</p>')
	$('#ao').html('<p>'+k.AO_ORDER+'</p>')
	$('#kantor').html('<p>'+k.nama_area_kerja+'</p>')
	$('#plafond').html('<p> Rp.'+k.plafond+'</p>')
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
						$('#sttp_pbb_0').attr('_1checked',true)
					}else{
						$('#sttp_pbb_1').attr('_1checked',true)
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
					console.log(v.catatan);
					$('#catatan').html(v.catatan)
				})
			}
		})
	}
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

	get_DetailCaKendaraan(id_order)
	function get_DetailCaKendaraan(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaKendaraan/'+id_order,
			dataType:'JSON',
			success:function (res) {
				$.each(res,function(k,v) {
					let stnk = v.stnk.split(',')
					if (stnk[0] == 'ada') {
						$('#stnk_ada').attr('checked',true)
					}else{
						$('#stnk_tada').attr('checked',true)
					}
					if (stnk[1] == 'berlaku') {
						$('#stnk_berlaku').attr('checked',true)
					}else{
						$('#stnk_habis').attr('checked',true)
					}

					let notes_pajak = v.notes_pajak.split(',')
					if (notes_pajak[0] == 'ada') {
						$('#notes_pajak_ada').attr('checked',true)
					}else{
						$('#notes_pajak_tada').attr('checked',true)
					}
					if (notes_pajak[1] == 'berlaku') {
						$('#notes_pajak_berlaku').attr('checked',true)
					}else{
						$('#notes_pajak_habis').attr('checked',true)
					}

					let trayek = v.trayek.split(',')
					if (trayek[0] == 'ada') {
						$('#trayek_ada').attr('checked',true)
					}else{
						$('#trayek_tada').attr('checked',true)
					}
					if (trayek[1] == 'berlaku') {
						$('#trayek_berlaku').attr('checked',true)
					}else{
						$('#trayek_habis').attr('checked',true)
					}

					let bpkb = v.bpkb.split(',')
					if (bpkb[0] == 'ada') {
						$('#bpkb_ada').attr('checked',true)
					}else{
						$('#bpkb_tada').attr('checked',true)
					}
					if (bpkb[1] == 'berlaku') {
						$('#bpkb_sah').attr('checked',true)
					}else{
						$('#bpkb_diragukan').attr('checked',true)
					}

					let faktur = v.faktur.split(',')
					if (faktur[0] == 'ada') {
						$('#faktur_ada').attr('checked',true)
					}else{
						$('#faktur_tada').attr('checked',true)
					}
					if (faktur[1] == 'berlaku') {
						$('#faktur_sah').attr('checked',true)
					}else{
						$('#faktur_diragukan').attr('checked',true)
					}

					let kwitansi_blangko = v.kwitansi_blangko.split(',')
					if (kwitansi_blangko[0] == 'ada') {
						$('#kwitansi_blangko_ada').attr('checked',true)
					}else{
						$('#kwitansi_blangko_tada').attr('checked',true)
					}
					if (kwitansi_blangko[1] == 'berlaku') {
						$('#kwitansi_blangko_sah').attr('checked',true)
					}else{
						$('#kwitansi_blangko_diragukan').attr('checked',true)
					}

					$('#masa_berlaku_stnk').val(v.masa_berlaku_stnk)
					$('#masa_berlaku_pajak').val(v.masa_berlaku_pajak)
				})
			}
		})
	}

	get_DetailCaFisikKendaraan(id_order)
	function get_DetailCaFisikKendaraan(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaFisikKendaraan/'+id_order,
			dataType:'JSON',
			success:function (res) {
				$.each(res,function(k,v) {
					console.log(res);
					if (v.chasis == 'Baik') {
						$('#chasis').attr('checked',true)
					}else if(v.chasis == 'Cukup'){
						$('#chasis').attr('checked',true)
					}else if(v.chasis == 'Kurang Baik'){
						$('#chasis').attr('checked',true)
					}else if(v.chasis == 'Rusak'){
						$('#chasis').attr('checked',true)
					}

					if (v.body == 'Baik') {
						$('#body').attr('checked',true)
					}else if(v.body == 'Cukup'){
						$('#body').attr('checked',true)
					}else if(v.body == 'Kurang Baik'){
						$('#body').attr('checked',true)
					}else if(v.body == 'Rusak'){
						$('#body').attr('checked',true)
					}

					if (v.kabin == 'Baik') {
						$('#kabin').attr('checked',true)
					}else if(v.kabin == 'Cukup'){
						$('#kabin').attr('checked',true)
					}else if(v.kabin == 'Kurang Baik'){
						$('#kabin').attr('checked',true)
					}else if(v.kabin == 'Rusak'){
						$('#kabin').attr('checked',true)
					}

					if (v.plafon == 'Baik') {
						$('#flafon').attr('checked',true)
					}else if(v.plafon == 'Cukup'){
						$('#flafon').attr('checked',true)
					}else if(v.plafon == 'Kurang Baik'){
						$('#flafon').attr('checked',true)
					}else if(v.plafon == 'Rusak'){
						$('#flafon').attr('checked',true)
					}

					if (v.dashboard == 'Baik') {
						$('#dashboard').attr('checked',true)
					}else if(v.dashboard == 'Cukup'){
						$('#dashboard').attr('checked',true)
					}else if(v.dashboard == 'Kurang Baik'){
						$('#dashboard').attr('checked',true)
					}else if(v.dashboard == 'Rusak'){
						$('#dashboard').attr('checked',true)
					}

					if (v.dek_landasan == 'Baik') {
						$('#dek_landasan').attr('checked',true)
					}else if(v.dek_landasan == 'Cukup'){
						$('#dek_landasan').attr('checked',true)
					}else if(v.dek_landasan == 'Kurang Baik'){
						$('#dek_landasan').attr('checked',true)
					}else if(v.dek_landasan == 'Rusak'){
						$('#dek_landasan').attr('checked',true)
					}

					if (v.ban == 'Baik') {
						$('#ban').attr('checked',true)
					}else if(v.ban == 'Cukup'){
						$('#ban').attr('checked',true)
					}else if(v.ban == 'Kurang Baik'){
						$('#ban').attr('checked',true)
					}else if(v.ban == 'Rusak'){
						$('#ban').attr('checked',true)
					}

					if (v.velg == 'Baik') {
						$('#velg').attr('checked',true)
					}else if(v.velg == 'Cukup'){
						$('#velg').attr('checked',true)
					}else if(v.velg == 'Kurang Baik'){
						$('#velg').attr('checked',true)
					}else if(v.velg == 'Rusak'){
						$('#velg').attr('checked',true)
					}

					if (v.jok == 'Baik') {
						$('#jok').attr('checked',true)
					}else if(v.jok == 'Cukup'){
						$('#jok').attr('checked',true)
					}else if(v.jok == 'Kurang Baik'){
						$('#jok').attr('checked',true)
					}else if(v.jok == 'Rusak'){
						$('#jok').attr('checked',true)
					}

					if (v.cat == 'Baik') {
						$('#cat').attr('checked',true)
					}else if(v.cat == 'Cukup'){
						$('#cat').attr('checked',true)
					}else if(v.cat == 'Kurang Baik'){
						$('#cat').attr('checked',true)
					}else if(v.cat == 'Rusak'){
						$('#cat').attr('checked',true)
					}

					if (v.lampu_lampu == 'Baik') {
						$('#lampu_lampu').attr('checked',true)
					}else if(v.lampu_lampu == 'Cukup'){
						$('#lampu_lampu').attr('checked',true)
					}else if(v.lampu_lampu == 'Kurang Baik'){
						$('#lampu_lampu').attr('checked',true)
					}else if(v.lampu_lampu == 'Rusak'){
						$('#lampu_lampu').attr('checked',true)
					}

					if (v.klakson == 'Baik') {
						$('#klakson').attr('checked',true)
					}else if(v.klakson == 'Cukup'){
						$('#klakson').attr('checked',true)
					}else if(v.klakson == 'Kurang Baik'){
						$('#klakson').attr('checked',true)
					}else if(v.klakson == 'Rusak'){
						$('#klakson').attr('checked',true)
					}

					if (v.speedometer == 'Baik') {
						$('#speedometer').attr('checked',true)
					}else if(v.speedometer == 'Cukup'){
						$('#speedometer').attr('checked',true)
					}else if(v.speedometer == 'Kurang Baik'){
						$('#speedometer').attr('checked',true)
					}else if(v.speedometer == 'Rusak'){
						$('#speedometer').attr('checked',true)
					}

					if (v.kaca_spion == 'Baik') {
						$('#kaca_spion').attr('checked',true)
					}else if(v.kaca_spion == 'Cukup'){
						$('#kaca_spion').attr('checked',true)
					}else if(v.kaca_spion == 'Kurang Baik'){
						$('#kaca_spion').attr('checked',true)
					}else if(v.kaca_spion == 'Rusak'){
						$('#kaca_spion').attr('checked',true)
					}

					if (v.kaca_spion == 'Baik') {
						$('#kaca_spion').attr('checked',true)
					}else if(v.kaca_spion == 'Cukup'){
						$('#kaca_spion').attr('checked',true)
					}else if(v.kaca_spion == 'Kurang Baik'){
						$('#kaca_spion').attr('checked',true)
					}else if(v.kaca_spion == 'Rusak'){
						$('#kaca_spion').attr('checked',true)
					}

					if (v.kunci_kontak == 'Baik') {
						$('#kunci_kontak').attr('checked',true)
					}else if(v.kunci_kontak == 'Cukup'){
						$('#kunci_kontak').attr('checked',true)
					}else if(v.kunci_kontak == 'Kurang Baik'){
						$('#kunci_kontak').attr('checked',true)
					}else if(v.kunci_kontak == 'Rusak'){
						$('#kunci_kontak').attr('checked',true)
					}
					$('#kondisi_mesin_hidup').html(v.kondisi_mesin_hidup)
					$('#perlengkapan_yang_ada').html(v.perlengkapan)
				})
			}
		})
	}

	get_DetailCaPenilaianKendaraan(id_order)
	function get_DetailCaPenilaianKendaraan(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaPenilaianKendaraan/'+id_order,
			dataType:'JSON',
			success:function (res) {
				$.each(res,function(k,v) {
					$('#sumber1').val(v.sumber_informasi1)
					$('#harga1').val(FormatRupiah(v.harga1))
					$('#sumber2').val(v.sumber_informasi2)
					$('#harga2').val(FormatRupiah(v.harga2))
					$('#kesimpulan_penilaian').html(v.kesimpulan)
				})
			}
		})
	}

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
				$('#vertifikasi_data_debitur_ca').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#vertifikasi_penjamin').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#vertifikasi_jaminan').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#analisa_kredit_checking').attr('disabled',true).html('Sedang Mengambil Data . . .')
				$('#ket_calon_debitur_ca').attr('disabled',true).html('Sedang Mengambil Data . . .')
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
					$('#realisasi_req').removeAttr('disabled').val(parseInt(v.realisasi))
					tenorReq(v.tenor)
					$('#vertifikasi_data_debitur_ca').removeAttr('disabled').html(v.vertifikasi_data_debitur)
					$('#vertifikasi_penjamin').removeAttr('disabled').html(v.vertifikasi_penjamin)
					$('#vertifikasi_jaminan').removeAttr('disabled').html(v.vertifikasi_jaminan)
					$('#analisa_kredit_checking').removeAttr('disabled').html(v.analisa_bi_checking)
					$('#ket_calon_debitur_ca').removeAttr('disabled').html(v.ket_calon_debitur_ca)
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
	function kepemilikanRumah(kepRumah) {
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
	if (kepRumah == value.kode_kepemilikan) {
	html += '<option value="'+value.kode_kepemilikan+'" selected>'+value.nama_kepemilikan+'</option>'
	}else{
	html += '<option value="'+value.kode_kepemilikan+'">'+value.nama_kepemilikan+'</option>'
	}
	})
	$('#opt-kepemilikan-rumah-cn').html('<select class="form-control" name="status_rumah" disabled style="margin-left: 15%; width: 80%;><option value="null" >Pilih</option>'+html+'</select>')
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
		$('#opt-status-rumah-ca').html('<select class="form-control" name="status_rumah" id="status_rumah" disabled><option value="null">Pilih</Option>'+html+'</select>')
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
				$('#opt-propinsi').html('<select class="form-control" name="propinsi_id_domisili" id="selectPropinsi" disabled><option value="null">Pilih</Option>'
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
			$('#opt-kotakab').html('<select class="form-control" name="kotakab_id_domisili" id="selectKabkota" disabled><option value="null">Pilih</Option>'+html+'</select>')
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
				$('#opt-kecamatan').html('<select class="form-control" name="kecamatan_id_domisili" id="selectKecamatan" disabled><option value="null">Pilih</Option>'+html+'</select>')
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
				$('#opt-kelurahan').html('<select class="form-control" name="kelurahan_id_domisili" id="selectKelurahan" disabled><option value="null">Pilih</Option>'+html+'</select>')
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
