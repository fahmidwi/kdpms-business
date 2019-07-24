<div id="snackbar"></div>
<div class="row">
	<div class="col-lg-12">
	<?php include '../component/header-back.php'; ?>
	<?php include '../component/info-detail-cnasabah.php'; ?>
	<?php include '../component/info-detail-order.php'; ?>
	<?php include '../component/info-detail-kreditc.php'; ?>
	<?php include '../component/info-detail-memo-ao.php'; ?>
	  <div class="card" style="margin-top: 1%">
      <div class="card-body">
	     <h4 style="">Form Memo Kredit Ca</h4><hr><br>
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
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Produk</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="produk_ca" readonly/>
									<input type="hidden" name="kode_produk" id="k_produk_ca">
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
                  <div id="opt-kepemilikan-rumah-cn"></div>
                  <input type="hidden" name="status_rumah" id=_statusRumah>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alamat Sekarang</label>
                <div class="col-sm-9">
                  <select class="form-control" name="alamat_sekarang" id="alamat_sekarang">
                    <option value="null">Pilih Alamat</option>
                    <option value="SESUAI KTP">SESUAI KTP</option>
                    <option value="BEDA DENGAN KTP">BEDA DENGAN KTP</option>
                  </select>
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
          </div><hr><br>
           <b class="card-description">
            Usaha
          </b><br><br>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Usaha Debitur</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="usaha_debitur" placeholder="Masukan Usaha Debitur" id="usaha_debitur" style="margin-left: -5%; width: 105%;"/>
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
                <select class="form-control" name="tempat_usaha" id="tempat_usaha" style="margin-left: -5%; width: 105%;">
                  <option>MILIK SENDIRI</option>
                  <option>SEWA</option>
                </select>
                </div>
              </div>
            </div>
          </div><hr><br>
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
	                  <input type="radio" class="form-check-input" name="ktp_cln_debitur"  id="ktp_cln_debitur" value="1" > <p>Sudah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="ktp_cln_debitur" id="ktp_cln_debitur" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="ktp_pasangan"  id="ktp_pasangan" value="1" > <p>Sudah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="ktp_pasangan" id="ktp_pasangan" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="kartu_keluarga"  id="kartu_keluarga" value="1" > <p>Sudah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kartu_keluarga" id="kartu_keluarga" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="surat_nikah"  id="surat_nikah" value="1" > <p>Sudah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="surat_nikah" id="surat_nikah" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="surat_cerai"  id="surat_cerai" value="1" > <p>Sudah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="surat_cerai" id="surat_cerai" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="sttp_pbb"  id="sttp_pbb" value="1" > <p>Sudah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="sttp_pbb" id="sttp_pbb" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="sertifikat_or_bpkb"  id="sertifikat_or_bpkb" value="1" > <p>Sudah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="sertifikat_or_bpkb" id="sertifikat_or_bpkb" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="imb"  id="imb" value="1" > <p>Sudah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="imb" id="imb" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="slip_gaji"  id="slip_gaji" value="1" > <p>Sudah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="slip_gaji" id="slip_gaji" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="rekening_tabungan"  id="rekening_tabungan" value="1" > <p>Sudah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="rekening_tabungan" id="rekening_tabungan" value="0" checked> <p>Belum</p>
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
	                  <input type="radio" class="form-check-input" name="data_penjamin"  id="data_penjamin" value="1" > <p>Sudah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="data_penjamin" id="data_penjamin" value="0" checked> <p>Belum</p>
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
                    <input type="radio" class="form-check-input" name="visit_cln_debitur"  id="visit_cln_debitur" value="1"> <p>Sudah</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="visit_cln_debitur" id="visit_cln_debitur" value="0" checked> <p>Belum</p>
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
                    <input type="radio" class="form-check-input" name="visit_pasangan"  id="visit_pasangan" value="1" > <p>Sudah</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="visit_pasangan" id="visit_pasangan" value="0" checked> <p>Belum</p>
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
                    <input type="radio" class="form-check-input" name="visit_penjamin"  id="visit_penjamin" value="1" > <p>Sudah</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="visit_penjamin" id="visit_penjamin" value="0" checked> <p>Belum</p>
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
                    <input type="radio" class="form-check-input" name="visit_tmpt_tinggal"  id="visit_tmpt_tinggal" value="1" > <p>Sesuai Data</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="visit_tmpt_tinggal" id="visit_tmpt_tinggal" value="0" checked> <p>Tidak Sesuai</p>
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
                    <input type="radio" class="form-check-input" name="visit_jaminan"  id="visit_jaminan" value="1" > <p>Sesuai Data</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="visit_jaminan" id="visit_jaminan" value="0" checked> <p>Tidak Sesuai</p>
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
                    <input type="radio" class="form-check-input" name="visit_usaha"  id="visit_usaha" value="1" > <p>Sesuai Data</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="visit_usaha" id="visit_usaha" value="0" checked> <p>Tidak Sesuai</p>
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
                    <input type="radio" class="form-check-input" name="cek_lingkungan"  id="cek_lingkungan" value="1" > <p>Sesuai Data</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="cek_lingkungan" id="cek_lingkungan" value="0" checked> <p>Tidak Sesuai</p>
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
                    <input type="radio" class="form-check-input" name="alamat_domisili"  id="alamat_domisili" value="1" > <p>Sesuai KTP</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-radio">
                    <input type="radio" class="form-check-input" name="alamat_domisili" id="alamat_domisili" value="0" checked> <p>Tidak Sesuai KTP</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr><br>
          <b class="card-description">
            Surat Surat Kendaraan
          </b><br><br><br><br>
          <input type="hidden" name="merk_jenis_k" id="merk_jenis_k">
          <input type="hidden" name="no_rangka_k" id="no_rangka_k">
          <input type="hidden" name="no_stnk_k" id="no_stnk_k">
          <input type="hidden" name="no_polisi_k" id="no_polisi_k">
          <input type="hidden" name="no_faktur_k" id="no_faktur_k">
          <input type="hidden" name="no_bpkb_k" id="no_bpkb_k">
          <input type="hidden" name="atas_nama_k" id="atas_nama_k">
          <input type="hidden" name="alamat_k" id="alamat_k">
          <div class="row" style="margin-top: -3%;">
	          <div class="col-md-12">
	            <div class="form-group row">
	              <label class="col-sm-3 col-form-label">STNK</label>
	               <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="stnk"  id="stnk" value="ada" checked> <p>ada</p>
	                </div>
	              </div>
	              <div class="col-sm-3">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="stnk"  id="stnk" value="tidak ada" > <p>tidak ada</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="stnk1"  id="stnk" value="berlaku" checked > <p>berlaku</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="stnk1"  id="stnk" value="habis"> <p>habis</p>
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
	                  <input type="radio" class="form-check-input" name="notes_pajak"  id="notes_pajak" value="ada" checked> <p>ada</p>
	                </div>
	              </div>
	              <div class="col-sm-3">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="notes_pajak"  id="notes_pajak" value="tidak ada" > <p>tidak ada</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="notes_pajak1"  id="notes_pajak" value="berlaku" checked > <p>berlaku</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="notes_pajak1"  id="notes_pajak" value="habis"> <p>habis</p>
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
	                  <input type="radio" class="form-check-input" name="trayek"  id="trayek" value="ada" checked> <p>ada</p>
	                </div>
	              </div>
	              <div class="col-sm-3">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="trayek"  id="trayek" value="tidak ada" > <p>tidak ada</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="trayek1"  id="trayek" value="berlaku" checked > <p>berlaku</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="trayek1"  id="trayek" value="habis"> <p>habis</p>
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
	                  <input type="radio" class="form-check-input" name="bpkb"  id="bpkb" value="ada" checked> <p>ada</p>
	                </div>
	              </div>
	              <div class="col-sm-3">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="bpkb"  id="bpkb" value="tidak ada" > <p>tidak ada</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="bpkb1"  id="bpkb" value="sah" checked > <p>sah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="bpkb1"  id="bpkb" value="diragukan"> <p>diragukan</p>
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
	                  <input type="radio" class="form-check-input" name="faktur"  id="faktur" value="ada" checked> <p>ada</p>
	                </div>
	              </div>
	              <div class="col-sm-3">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="faktur"  id="faktur" value="tidak ada" > <p>tidak ada</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="faktur1"  id="faktur" value="sah" checked > <p>sah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="faktur1"  id="faktur" value="diragukan"> <p>diragukan</p>
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
	                  <input type="radio" class="form-check-input" name="kwitansi_blangko"  id="kwitansi_blangko" value="ada" checked> <p>ada</p>
	                </div>
	              </div>
	              <div class="col-sm-3">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kwitansi_blangko"  id="kwitansi_blangko" value="tidak ada" > <p>tidak ada</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kwitansi_blangko1"  id="kwitansi_blangko" value="sah" checked > <p>sah</p>
	                </div>
	              </div>
	              <div class="col-sm-2">
	                <div class="form-radio">
	                  <input type="radio" class="form-check-input" name="kwitansi_blangko1"  id="kwitansi_blangko" value="diragukan"> <p>diragukan</p>
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
                  <textarea class="form-control" name="vertifikasi_data_debitur" id="vertifikasi_data_debitur_ca" style="margin-left: -5%; width: 105%;" placeholder="Masukan Verivikasi Data Debitur"></textarea>
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
		    <br><hr>
		    <div class="row">
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
	      </div>
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
        	<button type="submit" class="btn btn-primary btn-fw" style="width: 100%;" id="simpan-memo-ca">Simpan Memo Kredit CA</button>&nbsp;
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
	$('#title-header').html('Tambah Memo Ca')

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

	var ao_to_email = '';
	var name_to_email = '';
	var nik_to_email = '';
	var plafond_to_email = '';


	$('#form-memo-kredit-ca').submit(function (e) {
	e.preventDefault()
	var data = new FormData(this)
	var jml_tanggungan = true
	var alamat_sekarang = true
	var nama_tempat_kerja = true
	var posisi = true
	var jenis_usaha_debitur = true
	var alamat_usaha_debitur = true
	var masa_kerja_debitur = true
	var no_telp_kerja_debitur = true

	var pengeluaran_lainnya = true
	var pendapatan_tunai = true
	var pendapatan_kredit = true
	var pengeluaran_sewa = true
	var pengeluaran_belanja = true
	var pengeluaran_gaji_pegawai = true
	var angsuran_lain_usaha = true
	var pengeluaran_lain_usaha = true
	var pengeluaran_telp_listrik_air = true
	var catatan = true

	var masa_berlaku_stnk = true
	var masa_berlaku_pajak = true

	var kondisi_mesin_hidup = true
	var perlengkapan_yang_ada = true

	var team_survey = true
	var penyimpangan = true
	var vertifikasi_data_debitur = true
	var vertifikasi_penjamin = true
	var vertifikasi_jaminan = true
	var analisa_kredit_checking = true
	var ket_calon_debitur = true
	var comment_analisa = true
	var hasil_cek_lingk = true
	var hasil_cek_aspek_kuantitatif = true

	var Subject = true
	var foto_jaminan = true
	var lampiran_caa = true

	jml_tanggungan = checkEmpty('input[name=jml_tanggungan]')
	alamat_sekarang = checkSelect('select[name=alamat_sekarang]')
	nama_tempat_kerja = checkEmpty('input[name=nama_tempat_kerja]')
	posisi = checkEmpty('input[name=posisi]')
	jenis_usaha_debitur = checkEmpty('input[name=jenis_usaha_debitur]')
	alamat_usaha_debitur = checkEmpty('input[name=alamat_usaha_debitur]')
	masa_kerja_debitur = checkEmpty('input[name=masa_kerja_debitur]')
	no_telp_kerja_debitur = checkEmpty('input[name=no_telp_kerja_debitur]')

	pengeluaran_lainnya = checkEmpty('input[name=pengeluaran_lainnya]')
	pendapatan_tunai = checkEmpty('input[name=pendapatan_tunai]')
	pendapatan_kredit = checkEmpty('input[name=pendapatan_kredit]')
	pengeluaran_sewa = checkEmpty('input[name=pengeluaran_sewa]')
	pengeluaran_belanja = checkEmpty('input[name=pengeluaran_belanja]')
	pengeluaran_gaji_pegawai = checkEmpty('input[name=pengeluaran_gaji_pegawai]')
	angsuran_lain_usaha = checkEmpty('input[name=angsuran_lain_usaha]')
	pengeluaran_lain_usaha = checkEmpty('input[name=pengeluaran_lain_usaha]')
	pengeluaran_telp_listrik_air = checkEmpty('input[name=pengeluaran_telp_listrik_air]')
	catatan = checkEmpty('textarea[name=catatan]')

	masa_berlaku_stnk = checkEmpty('input[name=masa_berlaku_stnk]')
	masa_berlaku_pajak = checkEmpty('input[name=masa_berlaku_pajak]')

	kondisi_mesin_hidup  = checkEmpty('textarea[name=kondisi_mesin_hidup]')
	perlengkapan_yang_ada  = checkEmpty('textarea[name=perlengkapan_yang_ada]')

	sumber1 = checkEmpty('input[name=sumber1]')
	harga1 = checkEmpty('input[name=harga1]')
	sumber2 = checkEmpty('input[name=sumber2]')
	harga2 = checkEmpty('input[name=harga2]')
	kesimpulan_penilaian  = checkEmpty('textarea[name=kesimpulan_penilaian]')

	team_survey = checkEmpty('textarea[name=team_survey]')
	penyimpangan = checkEmpty('textarea[name=penyimpangan]')
	vertifikasi_data_debitur = checkEmpty('textarea[name=vertifikasi_data_debitur]')
	vertifikasi_penjamin = checkEmpty('textarea[name=vertifikasi_penjamin]')
	vertifikasi_jaminan = checkEmpty('textarea[name=vertifikasi_jaminan]')
	analisa_kredit_checking = checkEmpty('textarea[name=analisa_kredit_checking]')
	ket_calon_debitur = checkEmpty('textarea[name=ket_calon_debitur]')
	comment_analisa = checkEmpty('textarea[name=comment_analisa]')
	hasil_cek_lingk = checkEmpty('textarea[name=hasil_cek_lingk]')
	hasil_cek_aspek_kuantitatif = checkEmpty('textarea[name=hasil_cek_aspek_kuantitatif]')

	Subject = checkEmpty('textarea[name=Subject]')
	foto_jaminan = checkEmpty('input[id=foto_jaminan]')
	lampiran_caa = checkEmpty('input[id=lampiran]')

	if (jml_tanggungan && alamat_sekarang && nama_tempat_kerja && posisi && jenis_usaha_debitur && alamat_usaha_debitur && masa_kerja_debitur && no_telp_kerja_debitur && pengeluaran_lainnya && pendapatan_tunai && pendapatan_kredit && pengeluaran_sewa && pengeluaran_belanja && pengeluaran_gaji_pegawai && angsuran_lain_usaha && pengeluaran_lain_usaha && pengeluaran_telp_listrik_air && catatan && masa_berlaku_stnk && masa_berlaku_pajak && kondisi_mesin_hidup && perlengkapan_yang_ada && sumber1 && harga1 && sumber2 && harga2 && kesimpulan_penilaian && team_survey && penyimpangan && vertifikasi_data_debitur && vertifikasi_penjamin && vertifikasi_jaminan && analisa_kredit_checking && ket_calon_debitur && comment_analisa && hasil_cek_lingk && hasil_cek_aspek_kuantitatif && Subject && foto_jaminan && lampiran_caa) {
	addMemoCa(data)
	}
	//addMemoCa(data)
	})


	function addMemoCa(data) {
	$.ajax({
	type:'POST',
	url:url+'Home/AddMemoKreditCaKendaraan/'+ao_to_email+'/'+name_to_email+'/'+nik_to_email+'/'+plafond_to_email,
	data:data,
	dataType:'JSON',
	processData:false,
	contentType:false,
	cache:false,
	async:true,
	beforeSend:function () {
	console.log('mengirim')
	load()
	$('#simpan-memo-ca').prop('disabled',true);
	$('#simpan-memo-ca').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Sedang mengirim data . . .');
	},
	success:function(data) {
	console.log(data)
	if (data.msg == 'success') {
	$('#simpan-memo-ca').prop('disabled',false)
	$('#simpan-memo-ca').html('Simpan')
	$('#app').load('views/content/data/data-memo-kredit-ca.php')
	$('#tamplate').val('views/content/data/data-memo-kredit-ca.php')
	swal({
	title: "Sukses!",
	text: "data berhasil ditambahkan!",
	icon: "success"
	});
	}
	},
	error:function (xhr, status, error) {
	$('#simpan-memo-ca').prop('disabled',false)
	$('#simpan-memo-ca').html('Simpan')
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


	$('#conCnasabah').hide()
	$('#conOrder').hide()
	$('#conKredit').hide()
	$('#conMemoAo').hide()
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
	$('#noktp').html(loading)
	$('#nama_lengkap').html(loading)
	$('#nibk').html(loading)
	$('#alamat').html(loading)
	$('#opt-propinsi').html(loading)
	$('#opt-kotakab').html(loading)
	$('#opt-kecamatan').html(loading)
	$('#opt-kelurahan').html(loading)
	$('#opt-kepemilikan-rumah-cn').html(loading)
	$('#alamat_domisili_ca').attr('disabled',true)
	$('#rt_domisili').attr('disabled',true)
	$('#rw_domisili').attr('disabled',true)
	},
	success:function (data) {
	console.log(data)
	$.each(data,function (key,val) {
	$('#alamat_domisili_ca').removeAttr('disabled').val(val.domisili_alamat)
	getPropinsi(val.domisili_propinsi_id)
	getKabKota(val.domisili_kotakab_id,val.domisili_propinsi_id)
	getKecamatan(val.domisili_kecamatan_id,val.domisili_kotakab_id)
	getKelurahan(val.domisili_kelurahan_id,val.domisili_kecamatan_id)
	kepemilikanRumah(val.kepemilikan_rumah)
	$('#_prop').val(val.domisili_propinsi_id)
	$('#_kotakab').val(val.domisili_kotakab_id)
	$('#_kecamatan').val(val.domisili_kecamatan_id)
	$('#_kelurahan').val(val.domisili_kelurahan_id)
	$('#pekerjaan_debitur').val(val.pekerjaan_cn)
	$('#_statusRumah').val(val.kepemilikan_rumah)
	$('#nama_calon_debitur').val(val.nama_lengkap)
	$('#rt_domisili').removeAttr('disabled').val(val.domisili_rt)
	$('#rw_domisili').removeAttr('disabled').val(val.domisili_rw)
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
	},
	success:function (res) {
	$('v').html('')
	$.each(res,function (v,k) {

	$('#realisasi_req').val(parseInt(k.plafond))
	tenorReq(k.tenor)

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
	$('#status').html(loading)
	$('#nama_calon_nasabah_kredit').html(loading)
	$('#jenis_debitur_kredit').html(loading)
	$('#nomor_kredit').html(loading)
	$('#kantor_kreditC').html(loading)
	$('#ao_kredit').html(loading)
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
	$('#divButvk').html('<a href="javascript:void(0)" class="btn btn-success" style="width: 100%" id="buttonVerifKredit"><i class="mdi mdi-verified"></i>&nbsp;Verifikasi Kredit</a>')
	}else{
	$('#divButvk').html('')
	$('#verifkredit').addClass('text-primary')
	$('#verifbykredit').addClass('text-primary')
	$('#tglverifkredit').removeClass('text-danger')
	verifikasi = 'Terverifikasi'
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
	$('#notes').html(k.notes)
	})
	}
	})
	}

	get_detailMemoAo(id_order)
	function get_detailMemoAo(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detailMemoAo/'+id,
			dataType:'JSON',
			beforeSend:function () {
				load()
				$('idor').html(loading)
				$('idcb').html(loading)
				$('idvkao').html(loading)
				$('vkao').html(loading)
				$('#divButvao').html(loading)
				$('#nama_anak').html(loading)
				$('#nama_sekolah_anak').html(loading)
				$('#alamat_sekolah_anak').html(loading)
				$('#no_aplikasi').html(loading)
				$('#nama_calon_nasabah_ao').html(loading)
				$('#jaminan_utama').html(loading)
				$('#sumber_informasi').html(loading)
				$('#tujuan_kredit').html(loading)
				$('#type_kredit').html(loading)
				$('#jenis_fasilitas').html(loading)
				$('#produk').html(loading)
				$('#plafond_kredit').html(loading)
				$('#jangka_waktu').html(loading)
				$('#suku_bunga').html(loading)
				$('#akad_kredit').html(loading)
				$('#akad_jaminan').html(loading)
				$('#gaji_debitur').html(loading)
				$('#gaji_pasangan').html(loading)
				$('#gaji_penjamin').html(loading)
				$('#pengeluaran_rumah_tangga').html(loading)
				$('#pengeluaran_transportasi').html(loading)
				$('#pengeluaran_pendidikan').html(loading)
				$('#pengeluaran_lainnya').html(loading)
				$('#angsuran_lain').html(loading)
				$('textarea').html('Sedang mengambil data . . .')
				$('#vertifikasi_data_debitur').html(loading)
				$('#ket_calon_debitur').html(loading)
				$('#realisasi').html(loading)
				$('#tenor_ao').html(loading)
			},
			success:function (res) {
				$('#catatan').val('')
				$('#pusat_keramaian').val('')
				$('#jarak_keramaian').val('')
				$('#fasilitas_umum').val('')
				$('#kondisi_bentuk_tanah').val('')
				$('#keterangan_penilaian').val('')
				$('#sumber_harga').val('')
				$('#faktor_yang_dapat_menaikan').val('')
				$('#faktor_yang_dapat_menurunkan').val('')
				$('#team_survey').val('')
				$('#penyimpangan').val('')
				$('#vertifikasi_data_debitur_ca').val('')
				$('#vertifikasi_penjamin').val('')
				$('#vertifikasi_jaminan').val('')
				$('#analisa_kredit_checking').val('')
				$('#ket_calon_debitur_ca').val('')
				$('#comment_analisa').val('')
				$('#hasil_cek_lingk').val('')
				$('#hasil_cek_aspek_kuantitatif').val('')
				$('#Subject').val('')
				$('vkao').html('')
				$('#produk_ca').val('Sedang Mengambil Data . . .')
				$('#kondisi_mesin_hidup').val('')
				$('#perlengkapan_yang_ada').val('')
				$('#kesimpulan_penilaian').val('')
				$.each(res,function (v,k) {
					$('#no_aplikasi_ca').val(k.no_aplikasi)
					$('#produk_ca').val(k.DESKRIPSI_PRODUK)
					$('#k_produk_ca').val(k.kode_produk)

					if (k.verifikasi == 0) {
						$('#verifmemoao').addClass('text-danger')
						$('#tglverifmemoao').addClass('text-danger')
						verifikasi = 'belum terverifikasi'
						verifikasi_by = 'belum terverifikasi'
						verifikasi_date = 'belum terverifikasi'
						$('#divButvao').html('<a href="javascript:void(0)" class="btn btn-success" style="width: 100%" id="buttonVerifMemoAo"><i class="mdi mdi-verified"></i>&nbsp;Verifikasi Memo Ao</a>')
					}else{
						$('#divButvao').html('')
						$('#verifmemoao').addClass('text-primary')
						$('#tglverifmemoao').removeClass('text-danger')
						verifikasi = 'Terverifikasi'
						verifikasi_by = k.pelaku_verifikasi
						verifikasi_date = changeDate(k.verifikasi_date)
					}

					$('idor').html(k.id_order)
					$('idcb').html(k.id_calon_debitur)
					$('idvkao').html(k.id_kredit_checking)
					$('#verifmemoao').html("&nbsp;"+verifikasi)
					$('#tglverifmemoao').html("&nbsp;"+verifikasi_date)

					$('#nama_anak').html('<p>'+k.nama_anak+'</p>')
					$('#nama_sekolah_anak').html('<p>'+k.nama_sekolah_anak+'</p>')
					$('#alamat_sekolah_anak').html('<p>'+k.alamat_sekolah_anak+'</p>')
					$('#no_aplikasi').html('<p>'+k.no_aplikasi+'</p>')
					$('#nama_calon_nasabah_ao').html('<p>'+k.calon_debitur+'</p>')
					$('#jaminan_utama').html('<p>'+k.jenis_jaminan+'</p>')
					$('#sumber_informasi').html('<p>'+k.deskripsi_group4+'</p>')
					$('#tujuan_kredit').html('<p>'+k.tujuan_kredit+'</p>')
					$('#type_kredit').html('<p>'+k.type_kredit+'</p>')
					$('#jenis_fasilitas').html('<p>'+k.jenis_fasilitas+'</p>')
					$('#produk').html('<p>'+k.DESKRIPSI_PRODUK+'</p>')
					$('#suku_bunga').html('<p>'+k.suku_bunga+'</p>')
					$('#akad_kredit').html('<p>'+k.akad_kredit+'</p>')
					$('#akad_jaminan').html('<p>'+k.akad_jaminan+'</p>')
					$('#gaji_debitur').html('<p> Rp. '+FormatRupiah(k.gaji_debitur)+'</p>')
					$('#gaji_pasangan').html('<p> Rp. '+FormatRupiah(k.gaji_pasangan)+'</p>')
					$('#gaji_penjamin').html('<p> Rp. '+FormatRupiah(k.gaji_penjamin)+'</p>')
					$('#pengeluaran_rumah_tangga').html('<p> Rp. '+FormatRupiah(k.pengeluaran_rumah_tangga)+'</p>')
					$('#pengeluaran_transportasi').html('<p> Rp. '+FormatRupiah(k.pengeluaran_transportasi)+'</p>')
					$('#pengeluaran_pendidikan').html('<p> Rp. '+FormatRupiah(k.pengeluaran_pendidikan)+'</p>')
					$('#pengeluaran_lainnya').html('<p> Rp. '+FormatRupiah(k.pengeluaran_lainya)+'</p>')
					$('#angsuran_lain').html('<p> Rp. '+FormatRupiah(k.angsuran_lain)+'</p>')
					$('#hasil_cek_lingkungan').html(k.hasil_cek_lingkungan)
					$('#vertifikasi_data_debitur').html('<p>'+k.vertifikasi_data_debitur+'</p>')
					$('#ket_calon_debitur').html('<p>'+k.ket_calon_debitur+'</p>')
					$('#realisasi').html('<p>Rp. '+k.realisasi+'</p>')
					$('#tenor_ao').html('<p>'+k.tenor+' Bulan</p>')
				})
			}
		})
	}
	$('.d_shm').hide()
	$('.d_shgb').hide()
	$('.d_ajb').hide()
	$('.d_shrms').hide()
	get_detailMemoAoSertifikat(id_order)
	function get_detailMemoAoSertifikat(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detailMemoAoSertifikat/'+id,
			dataType:'JSON',
			beforeSend:function () {
				load()
			},
			success:function (res) {
				if (res.amount == 0) {
						$('#angunansertifikat').hide()
				}else{
					$('ang').html('Sertifikat')
					$('#angunansertifikat').show()
					$.each(res,function (v,k) {
							$('#penggunaan').html('<p>'+k.penggunaan+'</p>')
							$('#lokasi_setifikat').html('<p>'+k.lokasi+'</p>')
							$('#kepemilikan_sertifikat').html('<p>'+k.nama_kepemilikan+'</p>')
							$('#no_sertifikat').html('<p>'+k.no_sertifikat+'</p>')
							$('#tgl_sertifikat').html('<p>'+changeDate(k.tgl_sertifikat)+'</p>')
							$('#jenis_sertifikat').html('<p>'+k.jenis_sertifikat+'</p>')
							$('#atas_nama').html('<p>'+k.atas_nama+'</p>')
							$('#alamat-sertifikat').html('<p>'+k.alamat+'</p>')
							$('#luas_tanah').html('<p>'+k.luas_tanah+'</p>')
							$('#luas_bangunan').html('<p>'+k.luas_bangunan+'</p>')
							if (k.jenis_sertifikat == 'SHM') {
								$('.d_shm').show()
								$('#no_shm').html('<p>'+k.no_shm+'</p>')
							}else if (k.jenis_sertifikat == 'SHGB') {
								$('.d_shgb').show()
								$('#no_surat_ukur').html('<p>'+k.no_surat_ukur+'</p>')
								$('#masa_berlaku_shgb').html('<p>'+k.masa_berlaku_shgb+'</p>')
							}else if (k.jenis_sertifikat == 'AJB'){
								$('.d_ajb').show()
								$('#no_ajb').html('<p>'+k.no_ajb+'</p>')
								$('#tgl_ajb').html('<p>'+k.tgl_ajb+'</p>')
							}else if (k.jenis_sertifikat == 'SHMRS'){
								$('.d_shrms').show()
								$('#masa_berlaku_shmrs').html('<p>'+k.masa_berlaku_shmrs+'</p>')
							}
							$('#imb').html('<p>'+k.imb+'</p>')
							$('#legalitas').html('<p>'+k.legalitas+'</p>')
							$('#catatan_lainnya').html('<p>'+k.catatan_lainnya+'</p>')
							$('#kondisi_bangunan').html('<p>'+k.kondisi_bangunan+'</p>')
							$('#nilai_njop').html('<p>'+k.nilai_njop+'</p>')
							$('#nilai_taksasi').html('<p>'+k.nilai_taksasi+'</p>')
							$('#tgl_taksasi').html('<p>'+changeDate(k.tgl_taksasi)+'</p>')
					})
				}

			}
		})
	}

	get_detailMemoAoKendaraan(id_order)
	function get_detailMemoAoKendaraan(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detailMemoAoKendaraan/'+id,
			dataType:'JSON',
			beforeSend:function () {
				load()
			},
			success:function (res) {
				console.log(res)
				if (res.amount == 0) {
						$('#angunankendaraan').hide()
				}else{
					$('ang').html('Kendaraan')
					$('#angunankendaraan').show()
					$.each(res,function (v,k) {
						$('#merk_jenis_k').val(k.nama_merk+' '+k.type_kendaraan+' '+k.jenis_kendaraan)
						$('#no_rangka_k').val(k.no_rangka)
						$('#no_stnk_k').val(k.no_stnk)
						$('#no_polisi_k').val(k.no_polisi)
						$('#no_faktur_k').val(k.no_faktur)
						$('#no_bpkb_k').val(k.no_bpkb)
						$('#atas_nama_k').val(k.atas_nama)
						$('#alamat_k').val(k.alamat_bpkb.toUpperCase()+' KECAMATAN '+k.kecamatan_bpkb.toUpperCase()+' KELURAHAN '+k.kelurahan_bpkb.toUpperCase()+' KOTA/KAB '+k.kota_bpkb.toUpperCase())
						$('#nama_merk').html('<p>'+k.nama_merk+'</p>')
						$('#type_kendaraan').html('<p>'+k.type_kendaraan+'</p>')
						$('#jenis_kendaraan').html('<p>'+k.jenis_kendaraan+'</p>')
						$('#kepemilikan').html('<p>'+k.kepemilikan+'</p>')
						$('#penggunaan_ken').html('<p>'+k.penggunaan+'</p>')
						$('#atas_nama_ken').html('<p>'+k.atas_nama+'</p>')
						$('#alamat_bpkb').html('<p>'+k.alamat_bpkb+'</p>')
						$('#kecamatan_bpkb').html('<p>'+k.kecamatan_bpkb+'</p>')
						$('#kelurahan_bpkb').html('<p>'+k.kelurahan_bpkb+'</p>')
						$('#kota_bpkb').html('<p>'+k.kota_bpkb+'</p>')
						$('#nilai_likuidas').html('<p>'+k.nilai_likuidas+'</p>')
						$('#kondisi_jaminan').html('<p>'+k.kondisi_jaminan+'</p>')
						$('#tgl_taksasi').html('<p>'+k.tgl_taksasi+'</p>')
						$('#tgl_exp_pajak').html('<p>'+k.tgl_exp_pajak+'</p>')
						$('#tgl_exp_stnk').html('<p>'+k.tgl_exp_stnk+'</p>')
						$('#no_bpkb').html('<p>'+k.no_bpkb+'</p>')
						$('#no_rangka').html('<p>'+k.no_rangka+'</p>')
						$('#no_mesin').html('<p>'+k.no_mesin+'</p>')
						$('#no_stnk').html('<p>'+k.no_stnk+'</p>')
						$('#no_polisi').html('<p>'+k.no_polisi+'</p>')
						$('#warna').html('<p>'+k.warna+'</p>')
						$('#tahun').html('<p>'+k.tahun+'</p>')
						$('#no_faktur').html('<p>'+k.no_faktur+'</p>')
						$('#silinder').html('<p>'+k.silinder+'</p>')
						$('#nilai_taksasi').html('<p>'+FormatRupiah(k.nilai_taksasi)+'</p>')
					})
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
	$('#opt-propinsi').html('<select class="form-control" name="propinsi_id_domisili" id="selectPropinsi" disabled style="margin-left: 15%; width: 80%;><option value="null">Pilih</Option>'
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
	$('#opt-kecamatan').html('<select class="form-control" name="kecamatan_id_domisili" id="selectKecamatan" disabled style="margin-left: 15%; width: 80%;><option value="null">Pilih</Option>'+html+'</select>')
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
	let ntenor = ['6','12','18','24','36','40','48','60', '72']
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

