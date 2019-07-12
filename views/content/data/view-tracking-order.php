	<div class="row">
		<div class="col-lg-12">
		<?php include '../component/header-back.php'; ?>
			<div class="card" style="margin-top:1%;">
				<div class="card-body">
					<h4><a href="javascript:void(0)" class="Buttoggle" from="tracking"><i class="mdi mdi-dots-horizontal" style="float:right;"></i></a>
					<div class="page-header">
							<h4>Tracking Order atas nama <nc>....</nc></h4><hr>
					</div>
				<div id="conTrack">
				<span><p>
					<button class="btn btn-success"></button> Selesai &nbsp;&nbsp;
					<button class="btn btn-primary"></button> Sedang Berjanlan &nbsp;&nbsp;
					<button class="btn btn-danger"></button> Ditolak &nbsp;&nbsp;
					<button class="btn btn-default"></button> Belum sampai &nbsp;&nbsp;
					<i class="mdi mdi-24px mdi-account-location" style="color:#308ee0;"></i> Posisi order
				</p></span> <br>
					<center><h5><vt style="color:white;background:#00ce68;width: auto;height: auto;padding:5px 10px 5px 10px;border-radius:55px 55px">Start Order</vt></h5></center><br>
					<ul class="timeline">
							<li>
								<div class="timeline-badge timeline-badge-order"><i class="mdi mdi-shopping icon-order"></i></div>
								<i class="mdi mdi-24px mdi-account-location" id="p_order" style="display:none;color:#308ee0;margin-left:7%;"></i>
								<div class="timeline-panel timeline-panel-order">
									<div class="timeline-heading">
										<h4 class="timeline-title">Order</h4>
										<p><small class="text-muted"><i class="mdi mdi-timer"></i>Tanggal Order</small>&nbsp;<v id="create_date_upload"></v></p>
									</div>
									<div class="timeline-body">
										<b>Account Official Marketing</b>&nbsp;<span><v id="ao_order"></v></span><br>
										<b>Deskripsi Order</b>&nbsp;<span><v id="desc_upload"></v></span><br>
										<b>Status Order</b>&nbsp;<span><v id="status"></v></span>
									</div>
								</div>
							</li>
							<li class="timeline-inverted">
								<div class="timeline-badge timeline-badge-kredit"><i class="mdi mdi-credit-card icon-kredit"></i></div>
								<i class="mdi mdi-24px mdi-account-location" id="p_kredit_check" style="display:none;color:#308ee0;margin-left:45%;"></i>
								<div class="timeline-panel timeline-panel-kredit">
									<div class="timeline-heading">
										<h4 class="timeline-title">Kredit Checking </h4>
										<p><small class="text-muted"><i class="mdi mdi-timer"></i>Tanggal kredit check</small>&nbsp;<v id="create_date_kredit_check"></v></p>
									</div>
									<div class="timeline-body">
										<b>Deskripsi kredit check</b>&nbsp;<span><v id="desc_kredit_check"> </v></span><br>
										<b>Status kredit check</b>&nbsp;<span><v id="status_kredit_check"></span><br>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-badge timeline-badge-survey"><i class="mdi mdi-clipboard-check icon-survey"></i></div>
								<i class="mdi mdi-24px mdi-account-location" id="p_survey" style="display:none;color:#308ee0;margin-left:7%;"></i>
								<div class="timeline-panel timeline-panel-survey">
									<div class="timeline-heading">
										<h4 class="timeline-title">Survey</h4>
										<p><small class="text-muted"><i class="mdi mdi-timer"></i>Tanggal Survey</small>&nbsp;<v id="create_date_survey"></v></p>
									</div>
									<div class="timeline-body">
										<b>Deskripsi Survey</b>&nbsp;<span><v id="desc_survey"></v></span><br>
										<b>Status Survey</b>&nbsp;<span><v id="status_survey"></v></span><br>
									</div>
								</div>
							</li>
							<li class="timeline-inverted">
								<div class="timeline-badge timeline-badge-memo-ao"><i class="mdi mdi-book-open icon-memo-ao"></i></div>
								<i class="mdi mdi-24px mdi-account-location" id="p_ao" style="display:none;color:#308ee0;margin-left:45%;"></i>
								<div class="timeline-panel timeline-panel-memo-ao">
									<div class="timeline-heading">
										<h4 class="timeline-title">Memo AO</h4>
										<p><small class="text-muted"><i class="mdi mdi-timer"></i>Tanggal memo AO</small>&nbsp;<v id="create_date_memo_ao"></v></p>
									</div>
									<div class="timeline-body">
										<b>Deskripsi Memo</b>&nbsp;<span><v id="desc_memo_ao"> </v></span><br>
										<b>Status Memo Ao</b>&nbsp;<span><v id="status_memo_ao"></span><br>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-badge timeline-badge-memo-ca"><i class="mdi mdi-book-open icon-memo-ca"></i></div>
								<i class="mdi mdi-24px mdi-account-location" id="p_ca" style="display:none;color:#308ee0;margin-left:7%;"></i>
								<div class="timeline-panel timeline-panel-memo-ca">
									<div class="timeline-heading">
										<h4 class="timeline-title">Memo Ca</h4>
										<p><small class="text-muted"><i class="mdi mdi-timer"></i>Tanggal memo Ca</small>&nbsp;<v id="create_date_memo_ca"></v></p>
									</div>
									<div class="timeline-body">
										<b>Deskripsi Memo</b>&nbsp;<span><v id="desc_memo_ca"> </v></span><br>
										<b>Status Memo Ca</b>&nbsp;<span><v id="status_memo_ca"></span><br>
									</div>
								</div>
							</li>
							<li class="timeline-inverted">
								<div class="timeline-badge timeline-badge-caa"><i class="mdi mdi-clipboard-check icon-caa"></i></div>
								<i class="mdi mdi-24px mdi-account-location" id="p_caa" style="display:none;color:#308ee0;margin-left:45%;"></i>
								<div class="timeline-panel timeline-panel-caa">
									<div class="timeline-heading">
										<h4 class="timeline-title">Approval</h4>
										<p><small class="text-muted"><i class="mdi mdi-timer"></i>Tanggal Approval</small>&nbsp;<v id="create_date_caa"></v></p>
									</div>
									<div class="timeline-body">
										<b>Deskripsi Approval</b>&nbsp;<span><v id="desc_caa"></v></span><br>
										<b>Status Approval</b>&nbsp;<span><v id="status_caa"></v></span><br>
									</div>
								</div>
							</li>
							<!-- <li>
								<div class="timeline-badge timeline-badge-lpdk"><i class="mdi mdi-bank icon-lpdk"></i></div>
								<i class="mdi mdi-24px mdi-account-location" id="p_lpdk" style="display:none;color:#308ee0;margin-left:7%;"></i>
								<div class="timeline-panel timeline-panel-lpdk">
									<div class="timeline-heading">
										<h4 class="timeline-title">LPDK</h4>
										<p><small class="text-muted"><i class="mdi mdi-timer"></i>Tanggal LPDK</small>&nbsp;<v id="create_date_lpdk"></v></p>
									</div>
									<div class="timeline-body">
										<b>Deskripsi LPDK</b>&nbsp;<span><v id="desc_lpdk"></v></span><br>
										<b>Status LPDK</b>&nbsp;<span><v id="status_lpdk"></v></span><br>
									</div>
								</div>
							</li> -->
							<li>
								<div class="timeline-badge timeline-badge-akad"><i class="mdi mdi-pocket icon-akad"></i></div>
								<i class="mdi mdi-24px mdi-account-location" id="p_akad" style="display:none;color:#308ee0;margin-left:7%;"></i>
								<div class="timeline-panel timeline-panel-akad">
									<div class="timeline-heading">
										<h4 class="timeline-title">Akad</h4>
										<p><small class="text-muted"><i class="mdi mdi-timer"></i>Tanggal Akad</small>&nbsp;<v id="create_date_akad"></v></p>
									</div>
									<div class="timeline-body">
										<b>Deskripsi Akad</b>&nbsp;<span><v id="desc_akad"></v></span><br>
										<b>Status Akad</b>&nbsp;<span><v id="status_akad"></v></span><br>
									</div>
								</div>
							</li>
					</ul><br>
					<center><h5><vt style="color:white;background:#00ce68;width: auto;height: auto;padding:5px 10px 5px 10px;border-radius:55px 55px">Finish Order</vt></h5></center>
				</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="lib/js/formatRupiah.js"></script>
<script type="text/javascript" src="lib/js/changedate.js"></script>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript">
$(document).ready(function () {
		var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'
		var id_order = $('#paramsID1').val()
		var id_calon_debitur = $('#paramsID2').val()

		$('#load_page').val('false');
		$('#title-header').html('Tracking Order')

		$('#backcn').click(function () {
			$('#load_page').val('false');
			load()
			$('#tamplate').val('views/content/data/data-tracking-order.php');
			$('#app').load('views/content/data/data-tracking-order.php');
		})

		getTrackingOrder(id_order)

		'use strict'
		function getTrackingOrder (id_order) {
			$.ajax({
					type:'GET',
					url:url+'Home/getTrackingOrder/'+id_order,
					dataType:'JSON',
					beforeSend:function(){
						load()
					},
					success:function (res) {
							if (res.amount == 0) {
								console.log('data kosong')
								alert('data kosong')
							}else{
									$.each(res,function (k,v) {
											if (v.status_upload == 0) {
													$('.timeline-badge-order').css({'background':'#e2e2e2'})
													$('.icon-order').css({'color':'#cacaca'})
													$('.timeline-panel-order').css({'background':'#e2e2e2','border':'none','bos-shadow':'none','color':'#cacaca'})

											}else if (v.status_upload == 1) {
													$('#p_order').show()
													$('.timeline-badge-order').css({'background':'#308ee0'})
													$('.timeline-panel-order').css({'background':'white','color':'#6f6f6f'})
													$('#status').html(': Sedang Berjanlan')

											}else if (v.status_upload == 2) {
													$('.timeline-badge-order').css({'background':'#00ce68'})
													$('.timeline-panel-order').css({'background':'white','box-shadow':'0 1px 11px green','color':'#6f6f6f'})
													$('#status').html(': Sudah selesai')
											}else if (v.status_upload == 3) {
													$('.timeline-badge-order').css({'background':'#e65251'})
													$('.timeline-panel-order').css({'background':'white','box-shadow':'0 1px 11px #e65251','color':'#6f6f6f'})
													$('#status').html(': Di tolak')
											}

											if (v.status_credit_checking == 0) {
													$('.timeline-badge-kredit').css({'background':'#e2e2e2'})
													$('.icon-kredit').css({'color':'#cacaca'})
													$('.timeline-panel-kredit').css({'background':'#e2e2e2','border':'none','bos-shadow':'none','color':'#cacaca'})
											}else if (v.status_credit_checking == 1) {
													$('#p_kredit_check').show()
													$('.timeline-badge-kredit').css({'background':'#308ee0'})
													$('.timeline-panel-kredit').css({'background':'white','color':'#6f6f6f'})
													$('#status_kredit_check').html(': Sedang Berjanlan')
													$('#create_date_kredit_check').html(': '+changeDate(v.create_date_upload))

											}else if (v.status_credit_checking == 2) {
													$('.timeline-badge-kredit').css({'background':'#00ce68'})
													$('.timeline-panel-kredit').css({'background':'white','box-shadow':'0 1px 11px green','color':'#6f6f6f'})
													$('#status_kredit_check').html(': Sudah Selesai')
													$('#create_date_kredit_check').html(': '+changeDate(v.create_date_credit_checking))
											}else if (v.status_credit_checking == 3) {
													$('#create_date_kredit_check').html(': '+changeDate(v.create_date_credit_checking))
													$('.timeline-badge-kredit').css({'background':'#e65251'})
													$('.timeline-panel-kredit').css({'background':'white','box-shadow':'0 1px 11px #e65251','color':'#6f6f6f'})
													$('#status_kredit_check').html(': Di tolak')
											}

											if (v.status_survey == 0) {
													$('.timeline-badge-survey').css({'background':'#e2e2e2'})
													$('.icon-survey').css({'color':'#cacaca'})
													$('.timeline-panel-survey').css({'background':'#e2e2e2','border':'none','bos-shadow':'none','color':'#cacaca'})
											}else if (v.status_survey == 1) {
													$('#p_survey').show()
													$('.timeline-badge-survey').css({'background':'#308ee0'})
													$('.timeline-panel-survey').css({'background':'white','color':'#6f6f6f'})
													$('#status_survey').html(': Sedang Berjanlan')
													$('#create_date_survey').html(': '+changeDate(v.create_date_survey))

											}else if (v.status_survey == 2) {
													$('.timeline-badge-survey').css({'background':'#00ce68'})
													$('.timeline-panel-survey').css({'background':'white','box-shadow':'0 1px 11px green','color':'#6f6f6f'})
													$('#status_survey').html(': Sudah Selesai')
													$('#create_date_survey').html(': '+changeDate(v.create_date_survey))
											}else if (v.status_survey == 3) {
													$('#create_date_survey').html(': '+changeDate(v.create_date_survey))
													$('.timeline-badge-survey').css({'background':'#e65251'})
													$('.timeline-panel-survey').css({'background':'white','box-shadow':'0 1px 11px #e65251','color':'#6f6f6f'})
													$('#status_survey').html(': Di tolak')
											}

											if (v.status_memo_ao == 0) {
													$('.timeline-badge-memo-ao').css({'background':'#e2e2e2'})
													$('.icon-memo-ao').css({'color':'#cacaca'})
													$('.timeline-panel-memo-ao').css({'background':'#e2e2e2','border':'none','bos-shadow':'none','color':'#cacaca'})

											}else if (v.status_memo_ao == 1) {
													$('#p_ao').show()
													$('.timeline-badge-memo-ao').css({'background':'#308ee0	'})
													$('.timeline-panel-memo-ao').css({'background':'white','color':'#6f6f6f'})
													$('#status_memo_ao').html(': Sedang Berjanlan')

											}else if (v.status_memo_ao == 2) {
													$('.timeline-badge-memo-ao').css({'background':'#00ce68'})
													$('.timeline-panel-memo-ao').css({'background':'white','box-shadow':'0 1px 11px green','color':'#6f6f6f'})
													$('#status_memo_ao').html(': Sudah Selesai')
											}else if (v.status_memo_ao == 3) {
													$('.timeline-badge-memo-ao').css({'background':'#e65251'})
													$('.timeline-panel-memo-ao').css({'background':'white','box-shadow':'0 1px 11px #e65251','color':'#6f6f6f'})
													$('#status_memo_ao').html(': Di tolak')
											}

											if (v.status_memo_ca == 0) {
													$('.timeline-badge-memo-ca').css({'background':'#e2e2e2'})
													$('.icon-memo-ca').css({'color':'#cacaca'})
													$('.timeline-panel-memo-ca').css({'background':'#e2e2e2','border':'none','bos-shadow':'none','color':'#cacaca'})

											}else if (v.status_memo_ca == 1) {
													$('#p_ca').show()
													$('.timeline-badge-memo-ca').css({'background':'#308ee0	'})
													$('.timeline-panel-memo-ca').css({'background':'white','color':'#6f6f6f'})
													$('#status_memo_ca').html(': Sedang Berjanlan')

											}else if (v.status_memo_ca == 2) {
													$('.timeline-badge-memo-ca').css({'background':'#00ce68'})
													$('.timeline-panel-memo-ca').css({'background':'white','box-shadow':'0 1px 11px green','color':'#6f6f6f'})
													$('#status_memo_ca').html(': Sudah Selesai')
											}else if (v.status_memo_ca == 3) {
													$('.timeline-badge-memo-ca').css({'background':'#e65251'})
													$('.timeline-panel-memo-ca').css({'background':'white','box-shadow':'0 1px 11px #e65251','color':'#6f6f6f'})
													$('#status_memo_ca').html(': Di tolak')
											}

											if (v.status_caa == 0) {
													$('.timeline-badge-caa').css({'background':'#e2e2e2'})
													$('.icon-caa').css({'color':'#cacaca'})
													$('.timeline-panel-caa').css({'background':'#e2e2e2','border':'none','bos-shadow':'none','color':'#cacaca'})
											}else if (v.status_caa == 1) {
													$('#p_caa').show()
													$('.timeline-badge-caa').css({'background':'#308ee0'})
													$('.timeline-panel-caa').css({'background':'white','color':'#6f6f6f'})
													$('#status_caa').html(': Sedang Berjanlan')
											}else if (v.status_caa == 2) {
													$('.timeline-badge-caa').css({'background':'#00ce68'})
													$('.timeline-panel-caa').css({'background':'white','box-shadow':'0 1px 11px green','color':'#6f6f6f'})
													$('#status_caa').html(': Sudah Selesai')
											}else if (v.status_caa == 3) {
													$('.timeline-badge-caa').css({'background':'#e65251'})
													$('.timeline-panel-caa').css({'background':'white','box-shadow':'0 1px 11px #e65251','color':'#6f6f6f'})
													$('#status_caa').html(': Di tolak')
											}

											if (v.status_lpdk == 0) {
													$('.timeline-badge-lpdk').css({'background':'#e2e2e2'})
													$('.icon-lpdk').css({'color':'#cacaca'})
													$('.timeline-panel-lpdk').css({'background':'#e2e2e2','border':'none','bos-shadow':'none','color':'#cacaca'})
											}else if (v.status_lpdk == 1) {
													$('#p_lpdk').show()
													$('.timeline-badge-lpdk').css({'background':'#308ee0'})
													$('.timeline-panel-lpdk').css({'background':'white','color':'#6f6f6f'})
													$('#status_lpdk').html(': Sedang Berjanlan')
											}else if (v.status_lpdk == 2) {
													$('.timeline-badge-lpdk').css({'background':'#00ce68'})
													$('.timeline-panel-lpdk').css({'background':'white','box-shadow':'0 1px 11px green','color':'#6f6f6f'})
													$('#status_lpdk').html(': Sudah Selesai')
											}else if (v.status_lpdk == 3) {
													$('.timeline-badge-lpdk').css({'background':'#e65251'})
													$('.timeline-panel-lpdk').css({'background':'white','box-shadow':'0 1px 11px #e65251','color':'#6f6f6f'})
													$('#status_lpdk').html(': Di tolak')
											}

											if (v.status_akad == 0) {
													$('.timeline-badge-akad').css({'background':'#e2e2e2'})
													$('.icon-akad').css({'color':'#cacaca'})
													$('.timeline-panel-akad').css({'background':'#e2e2e2','border':'none','bos-shadow':'none','color':'#cacaca'})
											}else if (v.status_akad == 1) {
													$('#p_akad').show()
													$('.timeline-badge-akad').css({'background':'#308ee0'})
													$('.timeline-panel-akad').css({'background':'white','color':'#6f6f6f'})
													$('#status_akad').html(': Sedang Berjanlan')
											}else if (v.status_akad == 2) {
													$('.timeline-badge-akad').css({'background':'#00ce68'})
													$('.timeline-panel-akad').css({'background':'white','box-shadow':'0 1px 11px green','color':'#6f6f6f'})
													$('#status_akad').html(': Sudah Selesai')
											}else if (v.status_akad == 3) {
													$('.timeline-badge-akad').css({'background':'#e65251'})
													$('.timeline-panel-akad').css({'background':'white','box-shadow':'0 1px 11px #e65251','color':'#6f6f6f'})
													$('#status_akad').html(': Di tolak')
											}
											//data track order
											$('#create_date_upload').html(': '+changeDate(v.create_date_upload))
											$('#ao_order').html(': '+v.AO_ORDER)
											$('#desc_upload').html(': '+v.desc_upload)
											//data track kredit checking
											$('#desc_kredit_check').html(': '+v.desc_credit_checking)
											//data track survevy
											$('#desc_survey').html(': '+v.desc_survey)
											//data track memo ao
											$('#create_date_memo_ao').html(': '+changeDate(v.create_date_memo_ao))
											$('#desc_memo_ao').html(': '+v.desc_memo_ao)
											//data track memo ca
											$('#create_date_memo_ca').html(': '+changeDate(v.create_date_memo_ca))
											$('#desc_memo_ca').html(': '+v.desc_memo_ca)
											//data track caa
											$('#create_date_caa').html(': '+changeDate(v.create_date_caa))
											$('#desc_caa').html(': '+v.desc_caa)
											//data track lpdk
											$('#create_date_lpdk').html(': '+changeDate(v.create_date_lpdk))
											$('#desc_lpdk').html(': '+v.desc_lpdk)
											//daa track akad
											$('#create_date_akad').html(': '+changeDate(v.create_date_akad))
											$('#desc_akad').html(': '+v.desc_akad)
									})
							}
					},
					error:function(xhr, status, error) {
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

		$('.Buttoggle').click(function () {
			var from = $(this).attr('from')
			if (from == 'cnasabah') {
				$('#conCnasabah').toggle('slow')
			}else if (from == 'order') {
				$('#conOrder').toggle('slow')
			}else if (from == 'tracking') {
				$('#conTrack').toggle('slow')
			}
		})

		showDetail(id_calon_debitur)
		function showDetail(id_calon_debitur) {
			$.ajax({
				type:'GET',
				url:url+'Home/get_detail_calon_nasabah/'+id_calon_debitur,
				dataType:'JSON',
				success:function (data) {
					$.each(data,function (key,val) {
						$('nc').html(val.nama_lengkap.toUpperCase()).css({'color':'grey','font-weight':'bold'})
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
