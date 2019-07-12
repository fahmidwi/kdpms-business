<div class="row">
	<div class="col-lg-12">
		<a href="javascript:void(0)" class="btn btn-dark btn-fw" id="backcn">
      <i class="mdi  mdi-keyboard-backspace"></i>Kembali
    </a><br><br>
    <h3 id="timeline">Tambah CAA</h3><hr>
		<div class="card">
			<div class="card-body">
				<h4><a href="javascript:void(0)" class="Buttoggle" from="cnasabah"><i class="mdi mdi-dots-horizontal" style="float:right;"></i></a>
				<a href="javascript:void(0)" id="tab_data_calon" style="text-decoration: none;color:black;">Calon Nasabah </a>&nbsp;|
				<a href="javascript:void(0)" id="tab_data_pasangan" style="text-decoration: none;color:black;">Pasangan </a>&nbsp;|
				<a href="javascript:void(0)" id="tab_data_penjamin" style="text-decoration: none;color:black;">Penjamin</a></h4>
				 <hr>
				 <div class="col-12 grid-margin" id="conCnasabah">
				    <div class="card" id="data_c_nasabah">
				      <div class="card-body">
				        <form class="form-sample">
				          <div class="row">
					          <div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">No ktp</label>
												<div class="col-sm-9" style="border-bottom: 1px solid grey">
													<div id="noktp">
													</div>
												</div>
											</div>
										</div>
				            <div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nama Lengkap</label>
												<div class="col-sm-9" style="border-bottom: 1px solid grey">
													<div id="nama_lengkap">
													</div>
												</div>
											</div>
										</div>
				            <div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9" style="border-bottom: 1px solid grey">
													<div id="alamat-debitur">
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nama ibu Kandung</label>
												<div class="col-sm-9" style="border-bottom: 1px solid grey">
													<div id="nibk">
													</div>
												</div>
											</div>
										</div>
				          </div>
				        </form>
				      </div>
				    </div>
				    <div class="card" id="data_pasangan">
				      <div class="card-body">
				        <form class="form-sample">
				          <div class="row">
				            <div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">No ktp</label>
												<div class="col-sm-9" style="border-bottom: 1px solid grey">
													<div id="noktp_pasangan">
													</div>
												</div>
											</div>
										</div>
				            <div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nama Lengkap</label>
												<div class="col-sm-9" style="border-bottom: 1px solid grey">
													<div id="nama_lengkap_pasangan">
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
												<label class="col-sm-3 col-form-label">Nama ibu Kandung</label>
												<div class="col-sm-9" style="border-bottom: 1px solid grey">
													<div id="nibk_pasangan">
													</div>
												</div>
											</div>
										</div>
				          </div> 
				        </form>
				      </div>
				    </div>
				    <div class="card" id="data_penjamin">
				      <div class="card-body">
				        <form class="form-sample">
				          <div class="row">
				            <div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">No ktp</label>
												<div class="col-sm-9" style="border-bottom: 1px solid grey">
													<div id="noktp_penjamin">
													</div>
												</div>
											</div>
										</div>
				            <div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nama Lengkap</label>
												<div class="col-sm-9" style="border-bottom: 1px solid grey">
													<div id="nama_lengkap_penjamin">
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
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nama ibu Kandung</label>
												<div class="col-sm-9" style="border-bottom: 1px solid grey">
													<div id="nibk_penjamin">
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
		<div class="card" style="margin-top: 1%">
			<div class="card-body">
				<h4><a href="javascript:void(0)" class="Buttoggle" from="order"><i class="mdi mdi-dots-horizontal" style="float:right;"></i></a>
			 <h4 style="">Detail Data Order</h4><hr><br>
				<div class="col-12 grid-margin" id="conOrder">
					<div class="row">
			        <div class="col-md-12" id="wadahInfoVerifOrder">
				        <div style="float:right;" id="s">
				        	<div><p>id Order : <id style="float: right;">133</id></p></div>
				        	<div><p>Verifikasi Order : <v class="text-primary" style="float: right;" id="veriforder"> Terverifikasi</v></p></div>
				        	<!-- <div><p>Verifikasi by : <v class="text-primary" style="float: right;" id="verifby"> &nbsp;&nbsp;Fahmi dwi syahputra</v></p></div> -->
				        	<div><p>Tanggal Verifikasi : <v style="float: right;" id="tglverif"> &nbsp;&nbsp;2018-11-01 11:22:54</v></p></div>
				        	<div id="but"></div>
			        </div>
			        </div>
					<div class="card">
						<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Status assign (tanggal assign)</label>
											<div class="col-sm-8">
											<div id="status_assign">
											</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Keterangan assign</label>
											<div class="col-sm-8">
												<textarea class="form-control" readonly style="height:100px;overflow:auto;" id="keterangan_assign"></textarea>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nama Calon Debitur - NIK</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
											<div id="nama_calon_nasabah">
											</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Account Officer (marketing) Order</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
											<div id="ao"></div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Kantor order</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
											<div id="kantor">
											</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Plafond</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
											<div id="plafond">
											</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Tenor</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
											<div id="tenor">
											</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Jenis Pinjaman</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
											<div id="jenis_pinjaman">
											</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Tujuan penggunaan</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
											<div id="tujuan_penggunaan">
											</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Cara pembayaran</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
											<div id="cara_pembayaran">
											</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Jenis Jaminan</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
											<div id="jenis_jaminan">
											</div>
											</div>
										</div>
									</div><br>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Keterangan Jaminan</label>
											<div class="col-sm-8">
												<textarea class="form-control" readonly style="height:100px;overflow:auto;" id="keterangan_jaminan"></textarea>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">File Lampiran</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey;padding-bottom:1%;">
												<div id="file_lampiran"></div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Sumber aplikasi</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
												<div id="sumber_aplikasi">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">keterangan</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
												<div id="keterangan_order">
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="card" style="margin-top: 1%">
	    <div class="card-body">
	      <h4><a href="javascript:void(0)" class="Buttoggle" from="memoao"><i class="mdi mdi-dots-horizontal" style="float:right;"></i></a>
	     <h4 style="">Detail Data Memo Ao</h4><hr><br>
	      <div class="col-12 grid-margin" id="conMemoAo">
	        <div class="row">
            <div class="col-md-12" id="wadahInfoVerifMemoAo">
              <div style="float:right;" id="s">
                <div><p>id Order : <idor style="float: right;">133</idor></p></div>
                <div><p>id Calon debitur : <idcb style="float: right;">133</idcb></p></div>
                <div><p>id Kredit : <idvkao style="float: right;">133</idvkao></p></div>
                <div><p>Verifikasi Memo Ao : <vkao class="text-primary" style="float: right;" id="verifmemoao"> Terverifikasi</vkao></p></div>
                <!-- <div><p>Verifikasi by : <v class="text-primary" style="float: right;" id="verifby"> &nbsp;&nbsp;Fahmi dwi syahputra</v></p></div> -->
                <div><p>Tanggal Verifikasi : <vkao style="float: right;" id="tglverifmemoao"> &nbsp;&nbsp;2018-11-01 11:22:54</vkao></p></div>
                <div id="divButvao"></div>
              </div>
            </div>
	          <div class="card">
	            <div class="card-body">
	                <div class="row">
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">No Aplikasi</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="no_aplikasi">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Nama Calon Debitur - NIK</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="nama_calon_nasabah_ao">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Jaminan Utama</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="jaminan_utama"></div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Sumber informasi</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="sumber_informasi">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Tujuan Kredit</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="tujuan_kredit">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">type kredit</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="type_kredit">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Jenis fasilitas</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="jenis_fasilitas">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Produk</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="produk">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Plafond Kredit</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="plafond_kredit">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Jangka Waktu</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="jangka_waktu">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Suku bunga</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="suku_bunga">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Akad Kredit</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="akad_kredit">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Akad Jaminan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="akad_jaminan">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Gaji Debitur</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="gaji_debitur">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Gaji pasangan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="gaji_pasangan">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Gaji penjamin</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="gaji_penjamin">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Pengeluaran Rumah tangga</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="pengeluaran_rumah_tangga">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Pengeluaran transportasi</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="pengeluaran_transportasi">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Penegeluaran pendidikan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="pengeluaran_pendidikan">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Pengeluaran lainnya</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="pengeluaran_lainnya">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Angsuran Lain</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="angsuran_lain">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Hasil cek Lingkungan</label>
	                      <div class="col-sm-8">
	                        <textarea class="form-control" readonly style="height:100px;overflow:auto;" id="hasil_cek_lingkungan"></textarea>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Vertifikasi data debitur</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="vertifikasi_data_debitur">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Keterangan Calon Debitur</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="ket_calon_debitur">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Realisasi</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="realisasi">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">tenor</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="tenor_ao">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                </div><br>
	    						<h5 style="">Angunan (<ang></ang>)</h5><hr><br>
	    						<div id="angunansertifikat">
	    							<div class="row">
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Lokasi</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="lokasi_setifikat">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Kepemilikan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="kepemilikan_sertifikat">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Pengunaan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="penggunaan"></div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">No Sertifikat</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="no_sertifikat">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Tanggal Sertifikat</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="tgl_sertifikat">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Jenis Sertifikat</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="jenis_sertifikat">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Atas Nama</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="atas_nama">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Alamat</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="alamat-sertifikat">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Luas Tanah</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="luas_tanah">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Luas Bangunan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="luas_bangunan">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Masa berlaku Shgb</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="masa_berlaku_shgb">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">No ajb</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="no_ajb">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Tanggal ajb</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="tgl_ajb">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">No Surat Ukur</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="no_surat_ukur">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Kondisi Bangunan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="kondisi_bangunan">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Nilai Njop</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="nilai_njop">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Nilai Taksasi</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="nilai_taksasi">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Tanggal Taksasi</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="tgl_taksasi">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	               	 	</div>
	    						</div>
	    						<div id="angunankendaraan">
	    							<div class="row">
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Merk Kendaraan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="nama_merk">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Type Kendaraan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="type_kendaraan">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Jenis Kendaraan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="jenis_kendaraan"></div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Kepemilikan Kendaraan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="kepemilikan">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Pengunaan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="penggunaan">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Atas Nama</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="atas_nama">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Alamat Bpkb</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="alamat_bpkb">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Kecamatan Bpkb</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="kecamatan_bpkb">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Kelurahan Bpkb</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="kelurahan_bpkb">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Kota Bpkb</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="kota_bpkb">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Nilai likuidas</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="nilai_likuidas">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Kondisi Jaminan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="kondisi_jaminan">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Tangal taksasi</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="tgl_taksasi">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Tanggal Berakhir Pajak</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="tgl_exp_pajak">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Tanngal Berakhir Stnk</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="tgl_exp_stnk">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">No Bpkb</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="no_bpkb">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">No rangka</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="no_rangka">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">No Mesin</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="no_mesin">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">No Stnk</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="no_stnk">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">No Polisi</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="no_polisi">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Warna Kendaraan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="warna">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Tahun Kendaraan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="tahun">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">No faktur kendaraan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="no_faktur">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Slinder kendaraan</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="silinder">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group row">
	                      <label class="col-sm-4 col-form-label">Nilai Taksasi</label>
	                      <div class="col-sm-8" style="border-bottom: 1px solid grey">
	                      <div id="nilai_taksasi">
	                      </div>
	                      </div>
	                    </div>
	                  </div>
	               	 	</div>
	    						</div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
		<div class="card" style="margin-top: 1%">
			<div class="card-body">
			 <a href="javascript:void(0)" class="Buttoggle" from="ca"><i class="mdi mdi-dots-horizontal" style="float:right;"></i></a>
			 <h4 style="">Detail Data Memo CA</h4><hr><br>
				<div class="col-12 grid-margin" id="conCa">
					<div class="card">
						<div class="card-body">
							<b class="card-description">
									Personal Debitur
								</b><br><br>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Calon Debitur</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="nama_calon_nasabah_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nomor Aplikasi</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="no_aplikasi_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jaminan Utama</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="jaminan_utama_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Sumber Informasi</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="sumber_informasi_ca">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">SLA</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="sla">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Keterangan SLA</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="ket_sla_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Jumlah Tanggungan</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="jml_tanggungan_ca">
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">Produk</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="produk_ca">
												</div>
											</div>
										</div>
									</div> -->
								</div><hr>
								<br><b class="card-description">
									Alamat
								</b><br><br>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Status Rumah</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="status_rumah_ca">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Alamat Sekarang</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="alamat_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Alamat Domisili</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="alamat_dom_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<hr><br>
								<b class="card-description">
									Pekerjaan
								</b><br><br>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pekerjaan Debitur</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="pekerjaan_debitur_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Nama Tempat Kerja</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="nama_tempat_kerja_ca">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">Posisi</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="poisisi_ca">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jenis Usaha Debitur</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="jenis_usaha_debitur_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Alamat Usaha Debitur</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="alamat_usaha_debitur_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Masa Kerja Debitur</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="masa_kerja_debitur_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Nomor Telepon Kerja Debitur</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="no_telp_kerja_debitur_ca">
													</div>
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
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="pengeluaran_lainnya_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pendapatan tunai</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="pendapatan_tunai_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pendapatan kredit</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="pendapatan_kredit_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pengeluaran Sewa</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="pengeluaran_sewa_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pengeluaran Belanja</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="pengeluaran_belanja_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pengeluaran Gaji Pegawai</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="pengeluaran_gaji_pegawai_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Angsuran Lain Usaha</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="angsuran_lain_usaha_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">pengeluaran Lain Usaha</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="pengeluaran_lain_usaha_ca">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pengeluaran Telp Listrik Air</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="pengeluaran_telp_listrik_air_ca">
													</div>
											</div>
										</div>
									</div>
								</div><hr>
								<b class="card-description">
									Verifikasi Data
								</b><br><br>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">KTP Calon Debitur</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="ktp_cln_debitur_ca">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">KTP Pasangan</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="ktp_cln_pasangan_debitur_ca">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Kartu Keluarga</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="kertu_keluarga">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">Surat Nikah</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="surat_nikah">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Surat Cerai</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="surat_cerai">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">STT PBB</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="sttp_pbb">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Sertifikat / BPKB</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="sertifikat_or_bpkb">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">IMB</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="imb">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">SLIP Gaji</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="slip_gaji">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">Rekening Tabungan</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="rekening_tabungan">
												</div>
											</div>
										</div>
									</div>
								</div>
							<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Data Penjamin</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="data_penjamin_ca">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Catatan</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="catatan">
													</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<b class="card-description">
									Cek Pada Saat Survey
								</b><br><br>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Visit Calon Debitur</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="visit_cln_debitur">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">Visit Pasangan</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="visit_pasangan">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">visit penjami</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="visit_penjamin">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">Visit tempat tinggal</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="visit_tmpt_tinggal">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Visit Jaminan</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="visit_jaminan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">Visit Usaha</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="visit_usaha">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">ALamat Domisili</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="alamat_domisili">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">Cek Lingkungan</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="cek_lingkungan">
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
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="pusat_keramaian">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Jarak Keramaian</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="jarak_keramaian">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Akses Jalan</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="akses_jalan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">Tingkat Kepadatan</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="tingkat_kepadatan">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Luas Jalan</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="luas_jalan">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">Pertumbuhan Lingkungan</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="pert_lingkungan">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Rawan bencana</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="rawan_bancana">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">Daerah Banjir</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="daerah_banjir">
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<b class="card-description">
									Biaya Biaya
								</b><br><br>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Provisi</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="provisi">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Admin Kredit</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="admin_kredit">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Notaris</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="notaris">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Premi Ass Kredit</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="premi_ass_kredit">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Premi Ass Kebakaran</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="premi_ass_kebakaran">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Adendum</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="adendum">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Pelunasan</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="pelunasan">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tabungan</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="tabungan">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Biaya Lain Lain</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="biaya_lain_lain">
													</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<b class="card-description">
									Lain-Lain
								</b><br><br><br>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Sertifikat</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="Sertifikat">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label" style="margin-left: 9%;">AJB</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="ajb">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-6 col-form-label">Kendaraan</label>
											<div class="col-sm-6"  style="border-bottom: 1px solid grey">
												<div id="kendaraan">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Team Survey</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="tim_survey">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Penyimpangan</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="penyimpangan">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Realisasi</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="realisasi">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Tenor</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="tenor">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Verifikasi Data Debitur</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="vertifikasi_data_debitur">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Verivikasi Penjamin</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="vertifikasi_penjamin">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Verivikasi jaminan</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="vertifikasi_jaminan">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Analisa Kredit Checking</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="analisa_kredit_checking">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Keterangan Calon Debitur</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="ket_calon_debitur">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Masukan Analisa</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="comment_analisa">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Hasil Cek Lingkungan</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="hasil_cek_lingkungan">
													</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Hasil Cek Aspek Kuantitatif</label>
											<div class="col-sm-8" style="border-bottom: 1px solid grey">
													<div id="hasil_cek_aspek_kuantitatif">
													</div>
											</div>
										</div>
									</div>
								</div><br>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card" style="margin-top: 1%">
			<div class="card-body">
			 <a href="javascript:void(0)" class="Buttoggle" from="ca"><i class="mdi mdi-dots-horizontal" style="float:right;"></i></a>
			 <h4 style="">Form Caa</h4><hr><br>
				<div class="col-12 grid-margin" id="conCa">
					<div class="card">
						<div class="card-body">
					      <form id="form-caa">
					      <input type="hidden" name="id_order" id="form_id_order">
					      <div class="row">
					        <div class="col-md-12">
					          <div class="form-group row">
					            <label class="col-sm-3 col-form-label">Calon Debitur</label>
					            <div class="col-sm-9" style="border-bottom: 1px solid grey">
					                <div id="nama_calon_nasabah_di_caa">
					                </div>
					            </div>
					          </div>
					        </div>
					      </div>
					      <div class="row">
					        <div class="col-md-12">
					          <div class="form-group row">
					            <label class="col-sm-3 col-form-label">Jaminan</label>
					            <div class="col-sm-9" style="border-bottom: 1px solid grey">
					                <div id="jaminan_di_caa">
					                </div>
					            </div>
					          </div>
					        </div>
					      </div>
					    <div class="row">
					      <div class="col-md-12">
					        <div class="form-group row">
					          <label class="col-sm-3 col-form-label">Penyimpangan</label>
					          <div class="col-sm-3">
					            <div class="form-radio">
					              <input type="radio" class="form-check-input" name="is_penyimpangan"  id="is_penyimpangan" value="1" > <p>Ya</p>
					            </div>
					          </div>
					          <div class="col-sm-2">
					            <div class="form-radio">
					              <input type="radio" class="form-check-input" name="is_penyimpangan" id="is_penyimpangan" value="0"> <p>Tidak</p>
					            </div>
					          </div>
					        </div>
					      </div>
					    </div>
					    <div class="row">
					      <div class="col-md-12">
					        <div class="form-group row">
					          <label class="col-sm-3 col-form-label">Return</label>
					          <div class="col-sm-3">
					            <div class="form-radio">
					              <input type="radio" class="form-check-input" name="is_return"  id="is_return" value="1" > <p>Ya</p>
					            </div>
					          </div>
					          <div class="col-sm-2">
					            <div class="form-radio">
					              <input type="radio" class="form-check-input" name="is_return" id="is_return" value="0"> <p>Tidak</p>
					            </div>
					          </div>
					        </div>
					      </div>
					    </div>
					    <div class="row">
					      <div class="col-md-12">
					        <div class="form-group row">
					          <label class="col-sm-3 col-form-label">User CAA</label>
					          <div class="col-sm-9">
					            <select class="form-control" name="tim_caa" style="margin-left: -5%; width: 105%;" readonly>
					                <option value="DIR">DIR</option>
					            </select>
					          </div>
					        </div>
					      </div>
					    </div>
					    <div class="row">
					      <div class="col-md-12">
					        <div class="form-group row">
					          <label class="col-sm-3 col-form-label">Subject</label>
					          <div class="col-sm-9">
					            <textarea class="form-control" name="Subject" id="Subject" style="margin-left: -5%; width: 105%;" placeholder="Masukan Subject" id="" ></textarea>
					          </div>
					        </div>
					      </div>
					    </div>
					    <div class="row">
					        <div class="col-md-12">
					          <div class="form-group row">
					            <label class="col-sm-3 col-form-label">Status App</label>
					            <div class="col-sm-2">
					              <div class="form-radio">
					                <input type="radio" class="form-check-input" name="status_app"  id="status_app" value="0" checked ><p>0</p>
					              </div>
					            </div>
					            <div class="col-sm-2">
					              <div class="form-radio">
					                <input type="radio" class="form-check-input" name="status_app"  id="status_app" value="1"> <p>1</p>
					              </div>
					            </div>
					            <div class="col-sm-2">
					              <div class="form-radio">
					                <input type="radio" class="form-check-input" name="status_app"  id="status_app" value="2"> <p>2</p>
					              </div>
					            </div>
					            <div class="col-sm-2">
					              <div class="form-radio">
					                <input type="radio" class="form-check-input" name="status_app"  id="status_app" value="3"> <p>3</p>
					              </div>
					            </div>
					          </div>
					        </div>
					      </div>
					      <div class="row">
					      <div class="col-md-12">
					        <div class="form-group row">
					          <label class="col-sm-3 col-form-label">Foto Jaminan</label>
					          <div class="col-sm-9">
					            <input type="file" class="form-control" name="foto_jaminan[]" id="foto_jaminan" style="margin-left: -5%; width: 105%;" multiple>
					          </div>
					        </div>
					      </div>
					      </div>
					      <div class="row">
					      <div class="col-md-12">
					        <div class="form-group row">
					          <label class="col-sm-3 col-form-label">Lampiran</label>
					          <div class="col-sm-9">
					            <input type="file" class="form-control" name="lampiran_caa" id="lampiran" style="margin-left: -5%; width: 105%;">
					          </div>
					        </div>
					      </div>
					      </div><br>
					    <button type="submit" class="btn btn-primary btn-fw" style="width: 100%;" id="simpam-caa">Simpan</button>&nbsp;
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
	var id_order = $('#paramsID1').val()
	var id_calon_debitur = $('#paramsID2').val()

	$('#form_id_order').val(id_order)
	$('#load_page').val('false');

	$('#backcn').click(function () {
		$('#load_page').val('false');
		load()
		$('#app').load('views/content/data/data-caa.php');
	})

	$('.Buttoggle').click(function () {
		var from = $(this).attr('from')
		if (from == 'cnasabah') {
			$('#conCnasabah').toggle()
		}else if (from == 'order') {
			$('#conOrder').toggle()
		}else if (from == 'memoao') {
			$('#conMemoAo').toggle()
		}else if (from == 'ca') {
			$('#conCa').toggle()
		}
	})


	$('#form-caa').submit(function (e) {
		e.preventDefault()
		var data = new FormData(this)
		AddCaa(data)
	})

	function AddCaa(data) {
		$.ajax({
			'type':'POST',
			url:url+'Home/addCaa',
			data:data,
			dataType:'JSON',
			processData:false,
			contentType:false,
			cache:false,
			async:true,
			beforeSend:function () {
				console.log('mengirim')
				/*$('#simpam-caa').prop('disabled',true);
				$('#simpam-caa').html(loading+'Sedang Mengirim data . . . ')*/
			},
			success:function (res) {
					console.log(res)
					/*if (res.msg == 'success') {
						swal({
						  title:'Info!',
						  text:'Caa berhasil di tambahkan.',
						  icon: "info",
						});
						$('#app').load('views/content/form/data-caa.php');
					}*/
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


	$('#conCnasabah').hide()
	$('#conOrder').hide()
	$('#conMemoAo').hide()
	$('#conCa').hide()
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
	'use strict'
	function showDetail(id_calon_debitur) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detail_calon_nasabah/'+id_calon_debitur,
			dataType:'JSON',
			beforeSend:function () {
				$('input[type=text]').val('Sedang mengambil . . .')
				$('#nama_calon_nasabah_di_caa').html(loading)
			},
			success:function (data) {
				$('input[type=text]').val('')
				$.each(data,function (key,val) {
					$('#nama_calon_nasabah_di_caa').html('<p>'+val.nama_lengkap+'</p>')
					$('#noktp').html('<p>'+val.no_ktp+'</p>')
					$('#nama_lengkap').html('<p>'+val.nama_lengkap+'</p>')
					$('#nibk').html('<p>'+val.nama_gadis_ibu_kandung+'</p>')
					$('#alamat-debitur').html('<p>'+val.alamat+', RT.'+val.rt+' RW.'+val.rw+', KELURAHAN.'+val.Kelurahan+', KECAMATAN.'+val.Kecamatan+', '+val.Kotakab+', PROVINSI '+val.propinsi+'</p>')
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
	'use strict'
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
				$('#jaminan_di_caa').html(loading)
			},
			success:function (res) {
				$('v').html('')
				$('textarea').html('')
				$.each(res,function (v,k) {
					$('#jaminan_di_caa').html('<p>'+k.nama_jenis_jaminan+'</p>')
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
					$('#file_lampiran').html('<a href="http://localhost/kdpms-business/assets/lampiran/'+k.file_lampiran+'" class="btn btn-primary" target="_blank"><i class="mdi mdi-eye"></i>Lihat File lampiran</a>')
					$('#sumber_aplikasi').html('<p>'+k.nama_sumber_aplikasi+'</p>')
					$('#keterangan_order').html('<p>'+k.keterangan+'</p>')
				})
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
				$('idor').html(loading)
				$('idcb').html(loading)
				$('idvkao').html(loading)
				$('vkao').html(loading)
				$('#divButvao').html(loading)

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
				$('#vertifikasi_data_debitur').html(loading)
				$('#ket_calon_debitur').html(loading)
				$('#realisasi').html(loading)
				$('#tenor_ao').html(loading)
			},
			success:function (res) {
				$('vkao').html('')
				$.each(res,function (v,k) {
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

					$('#no_aplikasi').html('<p>'+k.no_aplikasi+'</p>')
					$('#nama_calon_nasabah_ao').html('<p>'+k.calon_debitur+'</p>')
					$('#jaminan_utama').html('<p>'+k.jenis_jaminan+'</p>')
					$('#sumber_informasi').html('<p>'+k.deskripsi_group4+'</p>')
					$('#tujuan_kredit').html('<p>'+k.tujuan_kredit+'</p>')
					$('#type_kredit').html('<p>'+k.type_kredit+'</p>')
					$('#jenis_fasilitas').html('<p>'+k.jenis_fasilitas+'</p>')
					$('#produk').html('<p>'+k.DESKRIPSI_PRODUK+'</p>')
					$('#plafond_kredit').html('<p>'+k.plafon_kredit+'</p>')
					$('#jangka_waktu').html('<p>'+k.jangka_waktu+'</p>')
					$('#suku_bunga').html('<p>'+k.suku_bunga+'</p>')
					$('#akad_kredit').html('<p>'+k.akad_kredit+'</p>')
					$('#akad_jaminan').html('<p>'+k.akad_jaminan+'</p>')
					$('#gaji_debitur').html('<p>'+k.gaji_debitur+'</p>')
					$('#gaji_pasangan').html('<p>'+k.gaji_pasangan+'</p>')
					$('#gaji_penjamin').html('<p>'+k.gaji_penjamin+'</p>')
					$('#pengeluaran_rumah_tangga').html('<p>'+k.pengeluaran_rumah_tangga+'</p>')
					$('#pengeluaran_transportasi').html('<p>'+k.pengeluaran_transportasi+'</p>')
					$('#pengeluaran_pendidikan').html('<p>'+k.pengeluaran_pendidikan+'</p>')
					$('#pengeluaran_lainnya').html('<p>'+k.pengeluaran_lainya+'</p>')
					$('#angsuran_lain').html('<p>'+k.angsuran_lain+'</p>')
					$('#hasil_cek_lingkungan').html(k.hasil_cek_lingkungan)
					$('#vertifikasi_data_debitur').html('<p>'+k.vertifikasi_data_debitur+'</p>')
					$('#ket_calon_debitur').html('<p>'+k.ket_calon_debitur+'</p>')
					$('#realisasi').html('<p>'+k.realisasi+'</p>')
					$('#tenor_ao').html('<p>'+k.tenor+'</p>')
				})
			}
		})
	}
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
							$('#tgl_sertifikat').html('<p>'+k.tgl_sertifikat+'</p>')
							$('#jenis_sertifikat').html('<p>'+k.jenis_sertifikat+'</p>')
							$('#atas_nama').html('<p>'+k.atas_nama+'</p>')
							$('#alamat-sertifikat').html('<p>'+k.alamat+'</p>')
							$('#luas_tanah').html('<p>'+k.luas_tanah+'</p>')
							$('#luas_bangunan').html('<p>'+k.luas_bangunan+'</p>')
							$('#masa_berlaku_shgb').html('<p>'+k.masa_berlaku_shgb+'</p>')
							$('#no_ajb').html('<p>'+k.no_ajb+'</p>')
							$('#tgl_ajb').html('<p>'+k.tgl_ajb+'</p>')
							$('#no_surat_ukur').html('<p>'+k.no_surat_ukur+'</p>')
							$('#kondisi_bangunan').html('<p>'+k.kondisi_bangunan+'</p>')
							$('#nilai_njop').html('<p>'+k.nilai_njop+'</p>')
							$('#nilai_taksasi').html('<p>'+k.nilai_taksasi+'</p>')
							$('#tgl_taksasi').html('<p>'+k.tgl_taksasi+'</p>')
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
				if (res.amount == 0) {
						$('#angunankendaraan').hide()
				}else{
					$('ang').html('Kendaraan')
					$('#angunankendaraan').show()
					$.each(res,function (v,k) {
						$('#nama_merk').html('<p>'+k.nama_merk+'</p>')
						$('#type_kendaraan').html('<p>'+k.type_kendaraan+'</p>')
						$('#jenis_kendaraan').html('<p>'+k.jenis_kendaraan+'</p>')
						$('#kepemilikan').html('<p>'+k.kepemilikan+'</p>')
						$('#penggunaan').html('<p>'+k.penggunaan+'</p>')
						$('#atas_nama').html('<p>'+k.atas_nama+'</p>')
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
						$('#nilai_taksasi').html('<p>'+k.nilai_taksasi+'</p>')
					})
				}

			}
		})
	}
	'use strict'
	get_DetailCa(id_order)
	function get_DetailCa(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCa/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#nama_calon_nasabah_ca').html(loading)
				$('#no_aplikasi_ca').html(loading)
				$('#jaminan_utama_ca').html(loading)
				$('#sumber_informasi_ca').html(loading)
				$('#sla').html(loading)
				$('#ket_sla_ca').html(loading)
				$('#jml_tanggungan_ca').html(loading)
				$('#status_rumah_ca').html(loading)
				$('#alamat_ca').html(loading)
				$('#alamat_dom_ca').html(loading)
				$('#pekerjaan_debitur_ca').html(loading)
				$('#nama_tempat_kerja_ca').html(loading)
				$('#poisisi_ca').html(loading)
				$('#jenis_usaha_debitur_ca').html(loading)
				$('#alamat_usaha_debitur_ca').html(loading)
				$('#masa_kerja_debitur_ca').html(loading)
				$('#no_telp_kerja_debitur_ca').html(loading)
				$('#pengeluaran_lainnya_ca').html(loading)
				$('#pendapatan_tunai_ca').html(loading)
				$('#pendapatan_kredit_ca').html(loading)
				$('#pengeluaran_sewa_ca').html(loading)
				$('#pengeluaran_belanja_ca').html(loading)
				$('#pengeluaran_gaji_pegawai_ca').html(loading)
				$('#angsuran_lain_usaha_ca').html(loading)
				$('#pengeluaran_lain_usaha_ca').html(loading)
				$('#pengeluaran_telp_listrik_air_ca').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {
					console.log(v.calon_debitur)
					$('#nama_calon_nasabah_ca').html('<p>'+v.calon_debitur+'</p>')
					$('#no_aplikasi_ca').html('<p>'+v.no_aplikasi+'</p>')
					$('#jaminan_utama_ca').html('<p>'+v.nama_jenis_jaminan+'</p>')
					$('#sumber_informasi_ca').html('<p>'+v.desk_sumber_informasi+'</p>')
					$('#sla').html('<p>'+v.sla+'</p>')
					$('#ket_sla_ca').html('<p>'+v.ket_sla+'</p>')
					$('#jml_tanggungan_ca').html('<p>'+v.jml_tanggungan+'</p>')
					$('#status_rumah_ca').html('<p>'+v.status_rumah+'</p>')
					$('#alamat_ca').html('<p>'+v.alamat_sekarang+'</p>')
					$('#alamat_dom_ca').html('<p>'+v.alamat_domisili+', RT '+v.rt_domisili+' RW '+v.rw_domisili+', KELURAHAN '+v.Kelurahan_domisili+' '+v.Kotakab_domisili+', KECAMATAN '+v.Kecamatan_domisili+', PROPINSI '+v.propinsi_domisili+'</p>')
					$('#pekerjaan_debitur_ca').html('<p>'+v.pekerjaan_debitur+'</p>')
					$('#nama_tempat_kerja_ca').html('<p>'+v.nama_tempat_kerja+'</p>')
					$('#poisisi_ca').html('<p>'+v.posisi+'</p>')
					$('#jenis_usaha_debitur_ca').html('<p>'+v.jenis_usaha_debitur+'</p>')
					$('#alamat_usaha_debitur_ca').html('<p>'+v.alamat_usaha_debitur+'</p>')
					$('#masa_kerja_debitur_ca').html('<p>'+v.masa_kerja_debitur+'</p>')
					$('#no_telp_kerja_debitur_ca').html('<p>'+v.no_telp_kerja_debitur+'</p>')
					$('#pengeluaran_lainnya_ca').html('<p>'+v.pengeluaran_lainya+'</p>')
					$('#pendapatan_tunai_ca').html('<p>'+v.pendapatan_tunai+'</p>')
					$('#pendapatan_kredit_ca').html('<p>'+v.pendapatan_kredit+'</p>')
					$('#pengeluaran_sewa_ca').html('<p>'+v.pengeluaran_sewa+'</p>')
					$('#pengeluaran_belanja_ca').html('<p>'+v.pengeluaran_belanja+'</p>')
					$('#pengeluaran_gaji_pegawai_ca').html('<p>'+v.pengeluaran_gaji_pegawai+'</p>')
					$('#angsuran_lain_usaha_ca').html('<p>'+v.angsuran_lain_usaha+'</p>')
					$('#pengeluaran_lain_usaha_ca').html('<p>'+v.pengeluaran_lainya_usaha+'</p>')
					$('#pengeluaran_telp_listrik_air_ca').html('<p>'+v.pengeluaran_telp_listrik_air+'</p>')
				})
			}
		})
	}
	'use strict'
	get_DetailCaVerifikasiData(id_order)
	function get_DetailCaVerifikasiData(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaVerifikasiData/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#ktp_cln_debitur_ca').html(loading)
				$('#ktp_cln_pasangan_debitur_ca').html(loading)
				$('#kertu_keluarga').html(loading)
				$('#surat_nikah').html(loading)
				$('#surat_cerai').html(loading)
				$('#sttp_pbb').html(loading)
				$('#sertifikat_or_bpkb').html(loading)
				$('#imb').html(loading)
				$('#slip_gaji').html(loading)
				$('#rekening_tabungan').html(loading)
				$('#data_penjamin_ca').html(loading)
				$('#catatan').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {
					if (v.ktp_cln_debitur == 0) {
						$('#ktp_cln_debitur_ca').html('<p> Belum </p>')
					}else{
						$('#ktp_cln_debitur_ca').html('<p> Sudah </p>')
					}

					if (v.ktp_pasangan == 0) {
						$('#ktp_cln_pasangan_debitur_ca').html('<p> Belum </p>')
					}else{
						$('#ktp_cln_pasangan_debitur_ca').html('<p> Sudah </p>')
					}

					if (v.kartu_keluarga == 0) {
						$('#kertu_keluarga').html('<p> Belum </p>')
					}else{
						$('#kertu_keluarga').html('<p> Sudah </p>')
					}

					if (v.surat_nikah == 0) {
						$('#surat_nikah').html('<p> Belum </p>')
					}else{
						$('#surat_nikah').html('<p> Sudah </p>')
					}

					if (v.surat_cerai == 0) {
						$('#surat_cerai').html('<p> Belum </p>')
					}else{
						$('#surat_cerai').html('<p> Sudah </p>')
					}

					if (v.sttp_pbb == 0) {
						$('#sttp_pbb').html('<p> Belum </p>')
					}else{
						$('#sttp_pbb').html('<p> Sudah </p>')
					}

					if (v.sertifikat_or_bpkb == 0) {
						$('#sertifikat_or_bpkb').html('<p> Belum </p>')
					}else{
						$('#sertifikat_or_bpkb').html('<p> Sudah </p>')
					}

					if (v.imb == 0) {
						$('#imb').html('<p> Belum </p>')
					}else{
						$('#imb').html('<p> Sudah </p>')
					}

					if (v.slip_gaji == 0) {
						$('#slip_gaji').html('<p> Belum </p>')
					}else{
						$('#slip_gaji').html('<p> Sudah </p>')
					}

					if (v.rekening_tabungan == 0) {
						$('#rekening_tabungan').html('<p> Belum </p>')
					}else{
						$('#rekening_tabungan').html('<p> Sudah </p>')
					}

					if (v.data_penjamin == 0) {
						$('#data_penjamin_ca').html('<p> Belum </p>')
					}else{
						$('#data_penjamin_ca').html('<p> Sudah </p>')
					}

					$('#catatan').html('<p>'+v.catatan+'</p>')
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
			beforeSend:function () {
				$('#visit_cln_debitur').html(loading)
				$('#visit_pasangan').html(loading)
				$('#visit_penjamin').html(loading)
				$('#visit_tmpt_tinggal').html(loading)
				$('#visit_jaminan').html(loading)
				$('#visit_usaha').html(loading)
				$('#alamat_domisili').html(loading)
				$('#cek_lingkungan').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {
					if (v.visit_cln_debitur == 0) {
						$('#visit_cln_debitur').html('<p> Tidak Sesuai data </p>')
					}else{
						$('#visit_cln_debitur').html('<p> Sesuai Data </p>')
					}

					if (v.visit_pasangan == 0) {
						$('#visit_pasangan').html('<p> Tidak sesuai data </p>')
					}else{
						$('#visit_pasangan').html('<p> Sesuai Data </p>')
					}

					if (v.visit_penjamin == 0) {
						$('#visit_penjamin').html('<p> Tidak sesuai data </p>')
					}else{
						$('#visit_penjamin').html('<p> Sesuai Data </p>')
					}

					if (v.visit_tmpt_tinggal == 0) {
						$('#visit_tmpt_tinggal').html('<p> Tidak sesuai data </p>')
					}else{
						$('#visit_tmpt_tinggal').html('<p> Sesuai Data </p>')
					}

					if (v.visit_jaminan == 0) {
						$('#visit_jaminan').html('<p> Tidak sesuai data </p>')
					}else{
						$('#visit_jaminan').html('<p> Sesuai Data </p>')
					}

					if (v.visit_usaha == 0) {
						$('#visit_usaha').html('<p> Tidak sesuai data </p>')
					}else{
						$('#visit_usaha').html('<p> Sesuai Data </p>')
					}

					if (v.cek_lingkungan == 0) {
						$('#cek_lingkungan').html('<p> Tidak sesuai data </p>')
					}else{
						$('#cek_lingkungan').html('<p> Sesuai Data </p>')
					}

					if (v.alamat_domisili == 0) {
						$('#alamat_domisili').html('<p> Sesuai Ktp </p>')
					}else{
						$('#alamat_domisili').html('<p> Tidak sesuai Ktp </p>')
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
				$('#pusat_keramaian').html(loading)
				$('#jarak_keramaian').html(loading)
				$('#akses_jalan').html(loading)
				$('#tingkat_kepadatan').html(loading)
				$('#luas_jalan').html(loading)
				$('#pert_lingkungan').html(loading)
				$('#rawan_bancana').html(loading)
				$('#daerah_banjir').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {
					$('#pusat_keramaian').html('<p>'+v.pusat_keramaian+'</p>')
					$('#jarak_keramaian').html('<p>'+v.jarak_keramaian+'</p>')
					$('#akses_jalan').html('<p>'+v.akses_jalan+'</p>')
					$('#tingkat_kepadatan').html('<p>'+v.tingkat_kepadatan+'</p>')
					$('#luas_jalan').html('<p>'+v.luas_jalan+'</p>')
					$('#pert_lingkungan').html('<p>'+v.pert_lingkungan+'</p>')
					$('#rawan_bancana').html('<p>'+v.rawan_bancana+'</p>')
					$('#daerah_banjir').html('<p>'+v.daerah_banjir+'</p>')
				})
			}
		})
	}
	'use strict'
	get_DetailCaBiaya(id_order)
	function get_DetailCaBiaya(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaBiaya/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#provisi').html(loading)
				$('#admin_kredit').html(loading)
				$('#notaris').html(loading)
				$('#premi_ass_kredit').html(loading)
				$('#no_telp_kerja_debitur').html(loading)
				$('#adendum').html(loading)
				$('#pelunasan').html(loading)
				$('#tabungan').html(loading)
				$('#biaya_lain_lain').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {
					$('#provisi').html('<p>'+v.provisi+'</p>')
					$('#admin_kredit').html('<p>'+v.admin_kredit+'</p>')
					$('#notaris').html('<p>'+v.notaris+'</p>')
					$('#premi_ass_kredit').html('<p>'+v.premi_ass_kredit+'</p>')
					$('#premi_ass_kebakaran').html('<p>'+v.premi_ass_kebakaran+'</p>')
					$('#adendum').html('<p>'+v.adendum+'</p>')
					$('#pelunasan').html('<p>'+v.pelunasan+'</p>')
					$('#tabungan').html('<p>'+v.tabungan+'</p>')
					$('#biaya_lain_lain').html('<p>'+v.biaya_lain_lain+'</p>')
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
				$('#Sertifikat').html(loading)
				$('#ajb').html(loading)
				$('#kendaraan').html(loading)
				$('#tim_survey').html(loading)
				$('#penyimpangan').html(loading)
				$('#realisasi').html(loading)
				$('#tenor').html(loading)
				$('#vertifikasi_data_debitur').html(loading)
				$('#vertifikasi_penjamin').html(loading)
				$('#vertifikasi_jaminan').html(loading)
				$('#analisa_kredit_checking').html(loading)
				$('#ket_calon_debitur').html(loading)
				$('#comment_analisa').html(loading)
				$('#hasil_cek_lingkungan').html(loading)
				$('#hasil_cek_aspek_kuantitatif').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {

					if (v.sertifikat == 0) {
						$('#Sertifikat').html('<p> Belum </p>')
					}else{
						$('#Sertifikat').html('<p> Sudah </p>')
					}

					if (v.ajb == 0) {
						$('#ajb').html('<p> Belum </p>')
					}else{
						$('#ajb').html('<p> Sudah </p>')
					}

					if (v.kendaraan == 0) {
						$('#kendaraan').html('<p> Belum </p>')
					}else{
						$('#kendaraan').html('<p> Sudah </p>')
					}
					$('#tim_survey').html('<p>'+v.tim_survey+'</p>')
					$('#penyimpangan').html('<p>'+v.penyimpangan+'</p>')
					$('#realisasi').html('<p>'+v.realisasi+'</p>')
					$('#tenor').html('<p>'+v.tenor+'</p>')
					$('#vertifikasi_data_debitur').html('<p>'+v.vertifikasi_data_debitur+'</p>')
					$('#vertifikasi_penjamin').html('<p>'+v.vertifikasi_penjamin+'</p>')
					$('#vertifikasi_jaminan').html('<p>'+v.vertifikasi_jaminan+'</p>')
					$('#analisa_kredit_checking').html('<p>'+v.analisa_bi_checking+'</p>')
					$('#ket_calon_debitur').html('<p>'+v.ket_calon_debitur_ca+'</p>')
					$('#comment_analisa').html('<p>'+v.comment_analisa+'</p>')
					$('#hasil_cek_lingkungan').html('<p>'+v.hasil_cek_lingk+'</p>')
					$('#hasil_cek_aspek_kuantitatif').html('<p>'+v.hasil_cek_aspek_kuantitatif+'</p>')
				})
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
