<div id="snackbar"></div>
<div class="row">
	<div class="col-lg-12">
		<?php include '../component/header-back.php'; ?>
		<?php include '../component/info-detail-order.php'; ?>
		<div class="card" style="margin-top: 1%">
			<div class="card-body">
				<h4><a href="javascript:void(0)" class="Buttoggle" from="cnasabah"><i class="mdi mdi-dots-horizontal" style="float:right;"></i></a>
				<a href="javascript:void(0)" id="tab_data_calon" style="text-decoration: none;color:black;">Calon Nasabah </a>&nbsp;|
				<a href="javascript:void(0)" id="tab_data_pasangan" style="text-decoration: none;color:black;">Pasangan </a>&nbsp;|
				<a href="javascript:void(0)" id="tab_data_penjamin" style="text-decoration: none;color:black;">Penjamin</a></h4>
				 <hr>
				 <div class="col-12 grid-margin" id="conCnasabah">
				    <div class="card" id="data_c_nasabah">
				      <div class="card-body">
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
										<div class="col-md-12" id="noktpbaru" style="background:#eeeeee;padding:1%;display:none;">
											<h5>Ubah No ktp</h5>
											<p style="font-style:italic;color:red;">Sebelum melakukan perubahan lakukan komunikasi dengan AO nasabah ini.</p>
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">No Ktp baru </label>
												<div class="col-sm-9">
													<form id="form-ubah-ktp">
														<div class="row">
															<div class="col-sm-4">
																<input type="number" name="new_no_ktp_from_kc" class="form-control" placeholder="Masukan No ktp baru">
															</div>
															<div class="col-sm-8">
																<a href="javascript:void(0)" class="btn btn-primary" id="simpan-ktp-baru"> simpan </a>
																<a href="javascript:void(0)" id="cancelubahktp" class="btn btn-danger"> cancel</a>
															</div>
														</div>
													</form>
												</div>
											</div>
											<br>
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
										<div class="col-md-12" id="namalengkapbaru" style="background:#eeeeee;padding:1%;display:none;">
											<h5>Ubah Nama Lengkap</h5>
											<p style="font-style:italic;color:red;">Sebelum melakukan perubahan lakukan komunikasi dengan AO nasabah ini.</p>
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nama Lengkap baru </label>
												<div class="col-sm-9">
													<form id="form-ubah-nama-lengkap">
														<div class="row">
															<div class="col-sm-4">
																<input type="text" name="new_nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap Baru">
															</div>
															<div class="col-sm-8">
																<a href="javascript:void(0)" class="btn btn-primary" id="simpan-nama-lengkap-baru"> simpan </a>
																<a href="javascript:void(0)" id="cancelubahnamalengkap" class="btn btn-danger"> cancel</a>
															</div>
														</div>
													</form>
												</div>
											</div>
											<br>
										</div>
				            <div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9" style="border-bottom: 1px solid grey">
													<div id="alamat">
													</div>
												</div>
											</div><br>
											<div id="alamatbaru" style="background:#eeeeee;padding:2%;display:none;">
											<h5>Ubah Alamat</h5>
											<p style="font-style:italic;color:red;">Sebelum melakukan perubahan lakukan komunikasi dengan AO nasabah ini.</p>
												<form id="form-ubah-alamat">
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
													</div><br>
													<a href="javascript:void(0)" class="btn btn-primary" id="simpan-alamat-baru"> simpan </a>
													<a href="javascript:void(0)" id="cancelubahalamat" class="btn btn-danger"> cancel</a>
												</form>
											</div>
										</div>
										<div class="col-md-12" id="infoibukandung">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nama ibu Kandung</label>
												<div class="col-sm-9" style="border-bottom: 1px solid grey">
													<div id="nibk">
													</div>
												</div>
											</div>
										</div>
				          </div>
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
							<div class="card" style="margin-top:-3%;"><br>
								<div class="card-body" id="form_kredit_debitur">
				    			<h5>Kredit Checking Calon debitur</h5><hr>
									<form class="form-sample" id="form-kredit-checking">
										<input type="hidden" name="id_order" class="id_order">
										<input type="hidden" name="id_calon_debitur" class="id_calon_debitur">
										<input type="hidden" name="jenis_debitur" value="NASABAH">
										<input type="hidden" name="ao_to_email" id="ao_to_email">
										<input type="hidden" name="name_to_email" id="name_to_email">
										<input type="hidden" name="nik_to_email" id="nik_to_email">
										<input type="hidden" name="plafond_to_email" id="plafond_to_email">
										<div class="row">
										  <div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Status</label>
													<div class="col-sm-9">
						                <div class="form-group row">
															<div class="col-sm-6">
					 	                   <div class="form-radio">
					  	                    <input type="radio" class="form-check-input" name="status" id="on_progress_debitur" value="ON PROGRESS" checked>
					    	                  <p> On Progress</p>
					      	              </div>
					       	           </div>
					        	          <div class="col-sm-6">
					          	          <div class="form-radio">
					          	              <input type="radio" class="form-check-input" name="status" id="done_debitur" value="DONE">
					           	             <p>Done</p>
					           	         </div>
					            	      </div>
					            	     </div>
													</div>
												</div>
											</div>
										  <div class="col-md-6">
										    <div class="form-group row">
										      <label class="col-sm-3 col-form-label">Account Officer (marketing)</label>
										      <div class="col-sm-9">
										        <input type="text" class="form-control ao_order_k" readonly>
										        <input type="hidden" class="form-control v_ao_order_k" name="ao">
										      </div>
										    </div>
										  </div>
										</div><br>
										<!-- <div class="row" id="lampiran_debitur">
										  <div class="col-md-8">
										    <div class="form-group row">
										      <label class="col-sm-2 col-form-label">Lampiran</label>
										      <div class="col-sm-10" >
										        <input type="file" class="form-control" name="files[]" id="file_debitur" placeholder="Masukan Lampiran"  style="margin-left:3.5%;" multiple>
										      </div>
										    </div>
										  </div>
										</div> -->
										<div class="row">
										  <div class="col-md-12">
										    <div class="form-group row">
										      <label class="col-sm-2 col-form-label">Catatan</label>
										      <div class="col-sm-10">
										        <textarea type="text" class="form-control" name="notes" id="notes_debitur" placeholder="Masukan Catatan"  style="margin-left: -5%; width: 105%;"></textarea>
										      </div>
										    </div>
										  </div>
										</div><br>
										<button type="submit" class="btn-k btn btn-primary btn-fw" style="width: 100%;">Simpan Kredit Checking Calon debitur</button>
									</form>
								</div><br>
								<div class="card-body" id="form_kredit_pasangan" style="display:none;">
				    			<h5>Kredit Checking Pasangan Debitur</h5><hr>
									<form class="form-sample" id="form-kredit-checking-pasangan">
										<input type="hidden" name="id_order" class="id_order">
										<input type="hidden" name="id_calon_debitur" class="id_calon_debitur">
										<input type="hidden" name="jenis_debitur" value="PASANGAN">
										<div class="row">
										  <div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Status</label>
													<div class="col-sm-9">
						                <div class="form-group row">
															<div class="col-sm-6">
					 	                   <div class="form-radio">
					  	                    <input type="radio" class="form-check-input" name="status" id="on_progress_pasangan" value="ON PROGRESS" checked>
					    	                  <p> On Progress</p>
					      	              </div>
					       	           </div>
					        	          <div class="col-sm-6">
					          	          <div class="form-radio">
					          	              <input type="radio" class="form-check-input" name="status" id="done_pasangan" value="DONE">
					           	             <p>Done</p>
					           	         </div>
					            	      </div>
					            	     </div>
													</div>
												</div>
											</div>
										  <div class="col-md-6">
										    <div class="form-group row">
										      <label class="col-sm-3 col-form-label">Account Officer (marketing)</label>
										      <div class="col-sm-9">
										        <input type="text" class="form-control ao_order_k" readonly>
										        <input type="hidden" class="form-control v_ao_order_k" name="ao">
										      </div>
										    </div>
										  </div>
										</div><br>
										<!-- <div class="row" id="lampiran_pasangan">
										  <div class="col-md-8">
										    <div class="form-group row">
										      <label class="col-sm-2 col-form-label">Lampiran</label>
										      <div class="col-sm-10" >
										        <input type="file" class="form-control" name="files[]" id="file_pasangan" placeholder="Masukan Lampiran"  style="margin-left:3.5%;" multiple>
										      </div>
										    </div>
										  </div>
										</div> -->
										<div class="row">
										  <div class="col-md-12">
										    <div class="form-group row">
										      <label class="col-sm-2 col-form-label">Catatan</label>
										      <div class="col-sm-10">
										        <textarea type="text" class="form-control" name="notes" id="notes_pasangan" placeholder="Masukan Catatan"  style="margin-left: -5%; width: 105%;"></textarea>
										      </div>
										    </div>
										  </div>
										</div><br>
										<button type="submit" class="btn-k btn btn-primary btn-fw" style="width: 100%;">Simpan Kredit Checking Pasangan</button>
									</form>
								</div><br>
								<div class="card-body" id="form_kredit_penjamin" style="display:none;">
				    			<h5>Kredit Checking Penjamin Debitur</h5><hr>
									<form class="form-sample" id="form-kredit-checking-penjamin">
										<input type="hidden" name="id_order" class="id_order">
										<input type="hidden" name="id_calon_debitur" class="id_calon_debitur">
										<input type="hidden" name="jenis_debitur" value="PENJAMIN">
										<div class="row">
										  <div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Status</label>
													<div class="col-sm-9">
						                <div class="form-group row">
															<div class="col-sm-6">
					 	                   <div class="form-radio">
					  	                    <input type="radio" class="form-check-input" name="status" id="on_progress_penjamin" value="ON PROGRESS" checked>
					    	                  <p> On Progress</p>
					      	              </div>
					       	           </div>
					        	          <div class="col-sm-6">
					          	          <div class="form-radio">
					          	              <input type="radio" class="form-check-input" name="status" id="done_penjamin" value="DONE">
					           	             <p>Done</p>
					           	         </div>
					            	      </div>
					            	     </div>
													</div>
												</div>
											</div>
										  <div class="col-md-6">
										    <div class="form-group row">
										      <label class="col-sm-3 col-form-label">Account Officer (marketing)</label>
										      <div class="col-sm-9">
										        <input type="text" class="form-control ao_order_k" readonly>
										        <input type="hidden" class="form-control v_ao_order_k" name="ao">
										      </div>
										    </div>
										  </div>
										</div><br>
										<!-- <div class="row" id="lampiran_penjamin">
										  <div class="col-md-8">
										    <div class="form-group row">
										      <label class="col-sm-2 col-form-label">Lampiran</label>
										      <div class="col-sm-10" >
										        <input type="file" class="form-control" name="files[]" id="file_penjamin" placeholder="Masukan Lampiran"  style="margin-left:3.5%;" multiple>
										      </div>
										    </div>
										  </div>
										</div> -->
										<div class="row">
										  <div class="col-md-12">
										    <div class="form-group row">
										      <label class="col-sm-2 col-form-label">Catatan</label>
										      <div class="col-sm-10">
										        <textarea type="text" class="form-control" name="notes" id="notes_penjamin" placeholder="Masukan Catatan"  style="margin-left: -5%; width: 105%;"></textarea>
										      </div>
										    </div>
										  </div>
										</div><br>
										<button type="submit" class="btn-k btn btn-primary btn-fw" style="width: 100%;">Simpan Kredit Checking Penjamin </button>
									</form>
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
	var id_order = $('#paramsID1').val()
	var id_calon_debitur = $('#paramsID2').val()
	var kantor_user = parseInt($('#session_kantor').val())

	$('.id_order').val(id_order)
	$('.id_calon_debitur').val(id_calon_debitur)
	$('#title-header').html('Tambah Kredit Checking')
	$('#load_page').val('false');

	$('#backcn').click(function () {
		$('#load_page').val('false');
		load()
		$('#tamplate').val('views/content/data/data-kredit-checking.php');
		$('#app').load('views/content/data/data-kredit-checking.php');
	})

	$('#lampiran_debitur').hide()
	$('#on_progress_debitur').click(function () {
		$('#lampiran_debitur').hide()
	})
	$('#done_debitur').click(function () {
		$('#lampiran_debitur').show()
	})

	$('#lampiran_pasangan').hide()
	$('#on_progress_pasangan').click(function () {
		$('#lampiran_pasangan').hide()
	})
	$('#done_pasangan').click(function () {
		$('#lampiran_pasangan').show()
	})

	$('#lampiran_penjamin').hide()
	$('#on_progress_penjamin').click(function () {
		$('#lampiran_penjamin').hide()
	})
	$('#done_penjamin').click(function () {
		$('#lampiran_penjamin').show()
	})


	$('#noktp').on('click','#ubahktp',function () {
		$('#noktpbaru').show()
		$('input[name=new_no_ktp_from_kc]').val($('noktp').html())
		$(this).hide()
	})

	$('#cancelubahktp').click(function () {
		$('#noktpbaru').hide()
		$('#ubahktp').show()
	})


	$('#simpan-ktp-baru').click(function (e) {
		e.preventDefault();

		let newktp = true
		newktp = checkEmpty('input[name=new_no_ktp_from_kc]')

		if (newktp){
			$('#noktpbaru').hide()
			changeKTP_fromKC()
		}

	})

	function changeKTP_fromKC() {
		var data = $('#form-ubah-ktp').serialize();
		$.ajax({
			type:'POST',
			url:url+'Home/saveeditnoktp_fromkreditceking/'+id_calon_debitur,
			data:data,
			dataType:'JSON',
			beforeSend:function () {
				$('#load_page').val('true')
				$('#noktp').html('<p>'+loading+' merubah ktp . . . .<p>')
				console.log('mengirim')
			},
			success:function (res) {
				if(res.msg == 'success'){
					$('#tamplate').val('views/content/form/add-kredit-checking.php');
					$('#app').load('views/content/form/add-kredit-checking.php');
					console.log('ya')
				}
			},
			error:function (xhr, status, error) {
				console.log(xhr.responseText)
			}
		})
	}


	$('#nama_lengkap').on('click','#ubahnamalengkap',function () {
		$('#namalengkapbaru').show()
		$(this).hide()
		$('input[name=new_nama_lengkap]').val($('namalengkap').html())
	})

	$('#cancelubahnamalengkap').click(function () {
		$('#namalengkapbaru').hide()
		$('#ubahnamalengkap').show()
	})

	$('#simpan-nama-lengkap-baru').click(function () {
		let new_nama_lengkap = true
		new_nama_lengkap = checkEmpty('input[name=new_nama_lengkap]')

		if (new_nama_lengkap){
			$('#namalengkapbaru').hide()
			_changeNAMALENGKAP_fromKC()
		}
	})

	function _changeNAMALENGKAP_fromKC(argument) {
		var data = $('#form-ubah-nama-lengkap').serialize()
		$.ajax({
			type:'POST',
			url:url+'Home/saveeditnamalengkap_fromkreditceking/'+id_calon_debitur,
			data:data,
			dataType:'JSON',
			beforeSend:function () {
				$('#load_page').val('true')
				$('#nama_lengkap').html('<p>'+loading+' merubah nama lengkap . . . .<p>')
				console.log('mengirim')
			},
			success:function (res) {
				if(res.msg == 'success'){
					$('#tamplate').val('views/content/form/add-kredit-checking.php');
					$('#app').load('views/content/form/add-kredit-checking.php');
					console.log('ya')
				}
			},
			error:function (xhr, status, error) {
				console.log(xhr.responseText)
			}
		})
	}

	$('#alamat').on('click','#ubahaalamat',function () {
		$('#alamatbaru').show()
		$(this).hide()
		$('#infoibukandung').attr('style','margin-top:2%');
	})

	$('#cancelubahalamat').click(function () {
		$('#alamatbaru').hide()
		$('#ubahaalamat').show()
	})

	$('#simpan-alamat-baru').click(function () {
		let alamat_cn = true
		let propinsi_cn = true
		let kabkota_cn = true
		let kecamatan_cn = true
		let kelurahan_cn = true
		let rt_cn = true
		let rw_cn = true

		alamat_cn = checkEmpty('textarea[name=alamat_cn]')
		propinsi_cn = checkSelect('select[name=propinsi_cn]')
		kabkota_cn = checkSelect('select[name=kabkota_cn]')
		kecamatan_cn = checkSelect('select[name=kecamatan_cn]')
		kelurahan_cn = checkSelect('select[name=kelurahan_cn]')
		rt_cn = checkEmpty('input[name=rt_cn]')
		rw_cn = checkEmpty('input[name=rw_cn]')

		if (alamat_cn && propinsi_cn && kabkota_cn && kecamatan_cn && kelurahan_cn){
			$('#alamatbaru').hide()
			_changeALAMAT_fromKC()
		}
	})

	function _changeALAMAT_fromKC() {
		var data = $('#form-ubah-alamat').serialize()
		$.ajax({
			type:'POST',
			url:url+'Home/saveeditalamat_fromkreditceking/'+id_calon_debitur,
			data:data,
			dataType:'JSON',
			beforeSend:function () {
				$('#load_page').val('true')
				$('#alamat').html('<p>'+loading+' merubah alamat . . . .<p>')
				console.log('mengirim')
			},
			success:function (res) {
				if(res.msg == 'success'){
					$('#tamplate').val('views/content/form/add-kredit-checking.php');
					$('#app').load('views/content/form/add-kredit-checking.php');
					console.log('ya')
				}
			},
			error:function (xhr, status, error) {
				console.log(xhr.responseText)
			}
		})
	}

	$('#form-kredit-checking').submit(function (e) {
			e.preventDefault()
			var on_progress = $('input[name=status]:checked').val();
			var done = $('input[name=status]:checked').val();
			var files = true
			var notes = true
			var ao  = true

			if (on_progress == 'ON PROGRESS') {
				notes = checkEmpty('textarea[id=notes_debitur]')
				ao = checkSelect('select[id=ao-debitur]')

				if (notes && ao) {
					var data = new FormData(this)
					saveKredit(data,'Calon Debitur')
				}
			}else if(done == 'DONE'){
				files = checkEmpty('input[id=file_debitur')
				notes = checkEmpty('textarea[id=notes_debitur]')
				ao = checkSelect('select[id=ao-debitur]')

				if (files && notes && ao) {
					var data = new FormData(this)
					saveKredit(data,'Calon Debitur')
				}
			}else{
				alert('Ada yang ga beres')
			}
	})

	$('#form-kredit-checking-pasangan').submit(function (e) {
			e.preventDefault()
			console.log('form-kredit-checking-pasangan')
			var on_progress = $('input[name=status]:checked').val();
			var done = $('input[name=status]:checked').val();
			var files = true
			var notes = true
			var ao  = true

			if (on_progress == 'ON PROGRESS') {
				notes = checkEmpty('textarea[id=notes_pasangan]')
				ao = checkSelect('select[id=ao-pasangan]')

				if (notes && ao) {
					var data = new FormData(this)
					saveKredit(data,'Pasangan')
				}
			}else if(done == 'DONE'){
				files = checkEmpty('input[id=file_pasangan')
				notes = checkEmpty('textarea[id=notes_pasangan]')
				ao = checkSelect('select[id=ao-pasangan]')

				if (files && notes && ao) {
					var data = new FormData(this)
					saveKredit(data,'Pasangan')
				}
			}else{
				alert('Ada yang ga beres')
			}
	})

	$('#form-kredit-checking-penjamin').submit(function (e) {
			e.preventDefault()
			console.log('form-kredit-checking-penjamin')
			var on_progress = $('input[name=status]:checked').val();
			var done = $('input[name=status]:checked').val();
			var files = true
			var notes = true
			var ao  = true

			if (on_progress == 'ON PROGRESS') {
				notes = checkEmpty('textarea[id=notes_penjamin]')
				ao = checkSelect('select[id=ao-penjamin]')

				if (notes && ao) {
					var data = new FormData(this)
					saveKredit(data,'Penjamin')
				}
			}else if(done == 'DONE'){
				files = checkEmpty('input[id=file_penjamin')
				notes = checkEmpty('textarea[id=notes_penjamin]')
				ao = checkSelect('select[id=ao-penjamin]')

				if (files && notes && ao) {
					var data = new FormData(this)
					saveKredit(data,'Penjamin')
				}
			}else{
				alert('Ada yang ga beres')
			}
	})

	function saveKredit (data,status,vbtn) {
		$.ajax({
			type:'POST',
			url:url+'Home/add_kreditCheck',
			data:data,
			dataType:'JSON',
			processData:false,
			contentType:false,
			cache:false,
			async:true,
			beforeSend:function () {
				//console.log('mengirim')
				$('#load_page').val('true');
				$('.btn-k').prop('disabled',true);
				$('.btn-k').html(loading+'Sedang Mengirim data . . . ')
			},
			success:function (res) {
					$('#load_page').val('false');
					if (res.msg == 'success') {
						swal({
						  title:'Info!',
						  text:'Kredit Checking '+status+' Berhasil di tambahkan.',
						  icon: "success",
						});
						$('#tamplate').val('views/content/data/data-kredit-checking.php');
						$('#app').load('views/content/data/data-kredit-checking.php');
					}
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

	$('.Buttoggle').click(function () {
		var from = $(this).attr('from')
		if (from == 'cnasabah') {
			$('#conCnasabah').toggle('slow')
		}else if (from == 'order') {
			$('#conOrder').toggle('slow')
		}
	})

	$('#data_pasangan').hide()
	$('#data_penjamin').hide()
	$('#tab_data_calon').addClass('link-active')

	$('#tab_data_calon').click(function (argument) {
		$(this).addClass('link-active')
		$('#form_kredit_debitur').show()
		$('#form_kredit_pasangan').hide()
		$('#form_kredit_penjamin').hide()
		$('#tab_data_pasangan').removeClass('link-active')
		$('#tab_data_penjamin').removeClass('link-active')
		$('#conCnasabah').show()
		$('#data_c_nasabah').show()
		$('#data_pasangan').hide()
		$('#data_penjamin').hide()
	})

	$('#tab_data_pasangan').click(function (argument) {
		showDetailPasangan(id_calon_debitur)
		$(this).addClass('link-active')
		$('#form_kredit_debitur').hide()
		$('#form_kredit_penjamin').hide()
		$('#tab_data_calon').removeClass('link-active')
		$('#tab_data_penjamin').removeClass('link-active')
		$('#conCnasabah').show()
		$('#data_pasangan').show()
		$('#data_penjamin').hide()
		$('#data_c_nasabah').hide()
	})

	$('#tab_data_penjamin').click(function (argument) {
		showDetailPenjamin(id_calon_debitur)
		$(this).addClass('link-active')
		$('#form_kredit_debitur').hide()
		$('#form_kredit_pasangan').hide()
		$('#tab_data_calon').removeClass('link-active')
		$('#tab_data_pasangan').removeClass('link-active')
		$('#conCnasabah').show()
		$('#data_penjamin').show()
		$('#data_pasangan').hide()
		$('#data_c_nasabah').hide()
	})



	showDetail(id_calon_debitur)
	'use strict'
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
			},
			success:function (data) {
				console.log(data)
				$.each(data,function (key,val) {
					$('#noktp').html('<p><noktp>'+val.no_ktp+'</noktp>&nbsp;&nbsp;<a href="javascript:void(0)" id="ubahktp"> Ubah </a> </p>')
					$('#nama_lengkap').html('<p><namalengkap>'+val.nama_lengkap+'</namalengkap>&nbsp;&nbsp;<a href="javascript:void(0)" id="ubahnamalengkap"> Ubah </a> </p>')
					$('#nibk').html('<p>'+val.nama_gadis_ibu_kandung+'</p>')
					$('#alamat').html('<p>'+val.alamat.toUpperCase()+', RT '+val.rt+' RW '+val.rw+', KELURAHAN '+val.Kelurahan+', KECAMATAN '+val.Kecamatan+', '+val.Kotakab+', PROVINSI '+val.propinsi+' &nbsp;&nbsp;<a href="javascript:void(0)" id="ubahaalamat"> Ubah </a></p>')
					getPropinsi(val.propinsi_id)
					getKabKota(val.kotakab_id,val.propinsi_id)
					getKecamatan(val.kecamatan_id,val.kotakab_id)
					getKelurahan(val.kelurahan_id,val.kecamatan_id)
					$('textarea[name=alamat_cn]').html(val.alamat.toUpperCase())
					$('input[name=rt_cn]').val(val.rt)
					$('input[name=rw_cn]').val(val.rw)
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
			beforeSend:function () {
				$('#noktp_pasangan').html(loading)
				$('#nama_lengkap_pasangan').html(loading)
				$('#nibk_pasangan').html(loading)
				$('#alamat_pasangan').html(loading)
			},
			success:function (data) {
				if (data.msg == 'Data tidak ditemukan') {
					$('#form_kredit_pasangan').hide()
					$('#data_pasangan').html('<vnp class="text-danger"><i class="mdi mdi-account-alert"></i> Tidak memiliki data pasangan</vnp><br>')
				}else{
					$('#form_kredit_pasangan').show()
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
			beforeSend:function(){
				$('#noktp_penjamin').html(loading)
				$('#nama_lengkap_penjamin').html(loading)
				$('#nibk_penjamin').html(loading)
				$('#alamat_penjamin').html(loading)
			},
			success:function (data) {
				if (data.msg == 'Data tidak ditemukan') {
					$('#form_kredit_penjamin').hide()
					$('#data_penjamin').html('<vnp class="text-danger"><i class="mdi mdi-account-alert"></i> Tidak memiliki data penjamin</vnp><br>')
				}else{
					$('#form_kredit_penjamin').show()
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
				//$('textarea').html('')
				$('textarea[name=notes]').html('')
				$('v').html('')
				$.each(res,function (v,k) {
					$('.ao_order_k').val(k.AO_ORDER)
					$('.v_ao_order_k').val(k.kode_ao)
					$('#ao_to_email').val(k.AO_ORDER)
					$('#name_to_email').val(k.nama_calon_nasabah)
					$('#nik_to_email').val(k.noktp)
					$('#plafond_to_email').val(FormatRupiah(k.plafond)+' - '+k.tenor+' bulan')
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

/*	getAo()
	'use strict'
	function getAo() {
		$.ajax({
			type:'GET',
			url:url+'Home/ao',
			dataType:'JSON',
			beforeSend:function () {
				$('.opt-ao').html(loading)
			},
			success:function(data){
				var html = ''
				$.each(data, function(index, value ) {
					html += '<option value="'+value.KODE_GROUP2+'">'+value.deskripsi_group2+'</option>'
					//console.log(html)
				})
				$('.opt-ao').html('<select class="form-control" id="ao-debitur" name="ao"><option value="null">Pilih</Option>'+html+'</select>')
				$('.opt-ao-pasangan').html('<select class="form-control" id="ao-pasangan" name="ao"><option value="null">Pilih</Option>'+html+'</select>')
				$('.opt-ao-penjamin').html('<select class="form-control" id="ao-penjamin" name="ao"><option value="null">Pilih</Option>'+html+'</select>')
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
	}
*/

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
			beforeSend:function () {
				$('#opt-propinsi').html(loading)
			},
			success:function(data){
				var html = ''
				$.each(data, function(index, value) {
					if (value.propinsi_id == propinsi) {
						html += '<option value="'+value.propinsi_id+'" selected>'+value.name+'</option>'
					}else{
						html += '<option value="'+value.propinsi_id+'">'+value.name+'</option>'
					}
				})

				$('#opt-propinsi').html('<select class="form-control" name="propinsi_cn" id="selectPropinsi"><option value="null">Pilih</Option>'
					+html+'</select>')
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
				$('#opt-kotakab').html('<select class="form-control" name="kabkota_cn" id="selectKabkota"><option value="null">Pilih</Option>'+html+'</select>')
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
				var html = ''
				$.each(data, function(index, value ) {
					if (value.kecamatan_id == kecamatan) {
						html += '<option value="'+value.kecamatan_id+'" selected>'+value.name+'</option>'
					}else{
						html += '<option value="'+value.kecamatan_id+'">'+value.name+'</option>'
					}
				})
				$('#opt-kecamatan').html('<select class="form-control" name="kecamatan_cn" id="selectKecamatan"><option value="null">Pilih</Option>'+html+'</select>')
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
				var html = ''
				$.each(data, function(index, value ) {
					if (value.kelurahan_id == kelurahan) {
						html += '<option value="'+value.kelurahan_id+'" selected>'+value.name+'</option>'
					}else{
						html += '<option value="'+value.kelurahan_id+'">'+value.name+'</option>'
					}
				})
				$('#opt-kelurahan').html('<select class="form-control" name="kelurahan_cn" id="selectKelurahan"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
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
