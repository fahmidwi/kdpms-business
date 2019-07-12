<div id="snackbar"></div>
<div class="row">
	<div class="col-lg-12" id="wadah">
	<a href="javascript:void(0)" class="btn btn-dark btn-fw" id="backcn">
	<i class="mdi mdi-keyboard-backspace"></i>Kembali
	</a><br><br>
		 <h4 style="">Edit Data Legal</h4><hr>
			<div class="col-12 grid-margin">
				<div class="card">
					<div class="card-body">
						<a href="javascript:void(0)" class="Buttoggle" from="offering"><i class="mdi mdi-dots-horizontal" style="float:right;"></i></a>
					 	<h4 style="">Form Edit Biaya</h4><hr><br>
							<div id="conOffering">
								<form id="form-edit-offering">
									<input type="hidden" name="id_order" id="id_order">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nomor</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="nomor" style="margin-left: -5%; width: 105%;" id="nomor" readonly >
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Jenis Pinjaman</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="jenis_pinjaman" style="margin-left: -5%; width: 105%;" id="jenis_pinjaman" value="Jenis Pinjaman" readonly >
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Suku Bunga</label>
												<div class="col-sm-9">
													<input class="form-control" type="text" name="suku_bunga" id="suku_bunga" style="margin-left: -5%; width: 105%;" readonly />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Provisi</label>
												<div class="col-sm-9">
													<input type="text" name="provisi" class="form-control" style="margin-left: -5%; width: 105%;" id="provisi" placeholder="Provisi">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Administrasi</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="administrasi" style="margin-left: -5%; width: 105%;" id="administrasi" placeholder="administrasi">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Ass Jiwa</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="premi_ass_jiwa" style="margin-left: -5%; width: 105%;"Ass Jiwa" id="premi_ass_jiwa" placeholder="Asuransi jiwa" >
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Ass Kebakaran</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="premi_ass_kebakaran" style="margin-left: -5%; width: 105%;" id="premi_ass_kebakaran" placeholder="Ass Kebakaran">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Ass TLO</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="premi_ass_tlo" style="margin-left: -5%; width: 105%;"Ass tlo" id="premi_ass_tlo" placeholder="Asuransi TLO">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
								    <div class="col-md-12">
								      <div class="form-group row">
								        <label class="col-sm-3 col-form-label">Ass Kredit</label>
								        <div class="col-sm-9">
								          <input type="text" class="form-control" name="premi_ass_kredit" id="premi_ass_kredit" placeholder="Masukan Premi Ass Kredit" style="margin-left: -5%; width: 105%;"/>
								        </div>
								      </div>
								    </div>
								  </div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Tabungan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="tabungan" style="margin-left: -5%; width: 105%;" id="tabungan" placeholder="tabungan">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Roya</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="roya" style="margin-left: -5%; width: 105%;" id="roya" placeholder="Roya">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Pelunasan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="pelunasan" style="margin-left: -5%; width: 105%;" id="pelunasan" placeholder="Pelunasan">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Notaris</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="notaris" style="margin-left: -5%; width: 105%;" id="notaris" placeholder="Notaris">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Kredit checking</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="kreditchecking" style="margin-left: -5%; width: 105%;" id="kreditchecking" placeholder="Kredit Checking">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Fidusia</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="fidusia" style="margin-left: -5%; width: 105%;" id="fidusia" placeholder="Fidusia">
												</div>
											</div>
										</div>
									</div>
<!-- 									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Biaya lain lain</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="lain_lain" style="margin-left: -5%; width: 105%;" id="lain_lain" readonly >
												</div>
											</div>
										</div>
									</div> -->
									<!-- <div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Nomor Telepon</label>
												<div class="col-sm-9">
													<input type="number" class="form-control" name="no_telp" style="margin-left: -5%; width: 105%;" id="no_telp" placeholder="No telpon">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Keterangan</label>
												<div class="col-sm-9">
													<textarea class="form-control" name="keterangan" id="keterangan" style="margin-left: -5%; width: 105%;" placeholder="Keterangan"></textarea>
												</div>
											</div>
										</div>
									</div> -->
									<!-- <div class="row">
								    <div class="col-md-12">
								      <div class="form-group row">
								        <label class="col-sm-3 col-form-label">Provisi</label>
								        <div class="col-sm-9">
								          <input type="text" class="form-control" name="provisi" id="provisi" placeholder="Masukan provisi" style="margin-left: -5%; width: 105%;"/>
								        </div>
								      </div>
								    </div>
								  </div> -->
								  <div class="row">
								    <div class="col-md-12">
								      <div class="form-group row">
								        <label class="col-sm-3 col-form-label">Admin Kredit</label>
								        <div class="col-sm-9">
								          <input type="text" class="form-control" name="admin_kredit" id="admin_kredit" placeholder="Masukan Admin Kredit" style="margin-left: -5%; width: 105%;"/>
								        </div>
								      </div>
								    </div>
								  </div>
								  <!-- <div class="row">
								    <div class="col-md-12">
								      <div class="form-group row">
								        <label class="col-sm-3 col-form-label">Notaris</label>
								        <div class="col-sm-9">
								          <input type="text" class="form-control" name="notaris" id="notaris" placeholder="Masukan Notaris" style="margin-left: -5%; width: 105%;"/>
								        </div>
								      </div>
								    </div>
								  </div> -->
								  <!-- <div class="row">
								    <div class="col-md-12">
								      <div class="form-group row">
								        <label class="col-sm-3 col-form-label">Premi Ass Kebakaran</label>
								        <div class="col-sm-9">
								          <input type="text" class="form-control" name="premi_ass_kebakaran" id="premi_ass_kebakaran" placeholder="Masukan Premi Ass Kebakaran" style="margin-left: -5%; width: 105%;"/>
								        </div>
								      </div>
								    </div>
								  </div> -->
								  <div class="row">
								    <div class="col-md-12">
								      <div class="form-group row">
								        <label class="col-sm-3 col-form-label">Adendum</label>
								        <div class="col-sm-9">
								          <input type="text" class="form-control" name="adendum" id="adendum" placeholder="Masukan Adendum" style="margin-left: -5%; width: 105%;"/>
								        </div>
								      </div>
								    </div>
								  </div>
								  <!-- <div class="row">
								    <div class="col-md-12">
								      <div class="form-group row">
								        <label class="col-sm-3 col-form-label">Tabungan</label>
								        <div class="col-sm-9">
								          <input type="text" class="form-control" name="tabungan" id="tabungan" placeholder="Masukan Tabungan" style="margin-left: -5%; width: 105%;"/>
								        </div>
								      </div>
								    </div>
								  </div> -->
								  <div class="row">
								    <div class="col-md-12">
								      <div class="form-group row">
								        <label class="col-sm-3 col-form-label">Biaya Matrai</label>
								        <div class="col-sm-9">
								          <input type="text" class="form-control" name="biaya_matrai" id="biaya_matrai" placeholder="Masukan Biaya Matrai" style="margin-left: -5%; width: 105%;"/>
								        </div>
								      </div>
								    </div>
								  </div>
								  <div class="row">
								    <div class="col-md-12">
								      <div class="form-group row">
								        <label class="col-sm-3 col-form-label">Biaya Lain Lain</label>
								        <div class="col-sm-9">
								          <input type="text" class="form-control" name="lain_lain" id="lain_lain" placeholder="Masukan Biaya Lain Lain" style="margin-left: -5%; width: 105%;"/>
								        </div>
								      </div>
								    </div>
								  </div>
									<br>
								<button type="button" class="btn btn-primary btn-fw" style="width: 100%;" id="simpan-edit-offering">Simpan</button>&nbsp;
								</form>
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
	/*var id_calon_debitur = $('#paramsID2').val()
	var id_kredit_check = $('#paramsID3').val()*/
	$('#load_page').val('false');

	$('#id_order').val(id_order)
	/*$('#id_calon_debitur').val(id_calon_debitur)
	$('#id_kredit_checking').val(id_kredit_check)*/

	$('#backcn').click(function () {
		$('#load_page').val('false');
		load()
		$('#tamplate').val('views/content/data/data-legal.php');
		$('#app').load('views/content/data/data-legal.php');
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
		}else if (from == 'offering') {
			$('#conOffering').toggle()
		}
	})

	$('#simpan-edit-offering').click(function() {
		saveOffering()
	})

	function saveOffering() {
		var data = $('#form-edit-offering').serialize()
		$.ajax({
			type:'POST',
			url:url+'Home/saveEditOffering',
			dataType:'JSON',
			data:data,
			beforeSend:function () {
				console.log('mengirim')
  			$('#load_page').val('true');
				load()
				$('#simpan-edit-offering').prop('disabled',true);
				$('#simpan-edit-offering').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Sedang mengirim data . . .');
			},
			success:function(data) {
  			$('#load_page').val('false');
				$('#simpan-edit-offering').prop('disabled',false)
				$('#simpan-edit-offering').html('Simpan')
				if (data.msg == 'success') {
					$('#simpan-edit-offering').prop('disabled',false)
					$('#simpan-edit-offering').html('Simpan')
					$('#app').load('views/content/data/data-legal.php')
					$('#tamplate').val('views/content/data/data-legal.php')
					swal({
				        title: "Sukses!",
				        text: "data berhasil di ubah!",
				        icon: "success"
				    });
				}
			},
			error:function (xhr, status, error) {
				$('#simpan-edit-offering').prop('disabled',false)
				$('#simpan-edit-offering').html('Simpan')
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

	get_Offering(id_order)
	'use strict'
	function get_Offering(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailOffering/'+id_order,
			dataType:'JSON',
			beforeSend:function() {
				$('#simpan-edit-offering').prop('disabled',true)
				$('#nomor').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#jenis_pinjaman').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#suku_bunga').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#provisi').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#administrasi').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#premi_ass_jiwa').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#premi_ass_kebakaran').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#premi_ass_tlo').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#tabungan').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#roya').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#pelunasan').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#notaris').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#kreditchecking').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#fidusia').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#lain_lain').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#no_telp').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#keterangan').attr('disabled',true).val('Sedang Mengambil Data . . . ')
			},
			success:function(res) {
				$.each(res,function (k,v) {
					$('#simpan-edit-offering').prop('disabled',false)
					$('#nomor').removeAttr('disabled').val(v.nomor)
					$('#jenis_pinjaman').removeAttr('disabled').val(v.jenis_pinjaman)
					$('#suku_bunga').removeAttr('disabled').val(v.suku_bunga)
					$('#provisi').removeAttr('disabled').val(v.provisi)
					$('#administrasi').removeAttr('disabled').val(v.administrasi)
					$('#premi_ass_jiwa').removeAttr('disabled').val(v.premi_ass_jiwa)
					$('#premi_ass_kebakaran').removeAttr('disabled').val(v.premi_ass_kebakaran)
					$('#premi_ass_tlo').removeAttr('disabled').val(v.premi_ass_tlo)
					$('#tabungan').removeAttr('disabled').val(v.tabungan)
					$('#roya').removeAttr('disabled').val(v.roya)
					$('#pelunasan').removeAttr('disabled').val(v.pelunasan)
					$('#notaris').removeAttr('disabled').val(v.notaris)
					$('#kreditchecking').removeAttr('disabled').val(v.kreditchecking)
					$('#fidusia').removeAttr('disabled').val(v.fidusia)
					$('#lain_lain').removeAttr('disabled').val(v.lain_lain)
					$('#no_telp').removeAttr('disabled').val(v.no_telp)
					$('#keterangan').removeAttr('disabled').val(v.keterangan)
				})
			},
			error:function (xhr, status, error) {
				$('#simpan-edit-offering').prop('disabled',false)
				$('#simpan-edit-offering').html('Simpan')
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

	get_biaya(id_order)
	'use strict'
	function get_biaya(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailBiaya/'+id_order,
			dataType:'JSON',
			beforeSend:function() {
				$('#simpan-edit-offering').prop('disabled',true)
				$('#premi_ass_kredit').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#admin_kredit').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#adendum').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#pelunasan').attr('disabled',true).val('Sedang Mengambil Data . . . ')
				$('#biaya_matrai').attr('disabled',true).val('Sedang Mengambil Data . . . ')
			},
			success:function(res) {
				$.each(res,function (k,v) {
					$('#simpan-edit-offering').prop('disabled',false)
					$('#premi_ass_kredit').removeAttr('disabled').val(v.premi_ass_kredit)
					$('#admin_kredit').removeAttr('disabled').val(v.admin_kredit)
					$('#adendum').removeAttr('disabled').val(v.adendum)
					$('#pelunasan').removeAttr('disabled').val(v.pelunasan)
					$('#biaya_matrai').removeAttr('disabled').val(v.biaya_matrai)
				})
			},
			error:function (xhr, status, error) {
				$('#simpan-edit-offering').prop('disabled',false)
				$('#simpan-edit-offering').html('Simpan')
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
