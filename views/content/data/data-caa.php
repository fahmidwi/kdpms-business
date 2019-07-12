<div class="row">
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Credit Authority Approval</h4><hr>
      <div class="filterAreakerja" style="float:right;">
				<div class="row">
				  <div class="col-md-6">
						<div id="opt-areakerja"></div>
				  </div>
				  <div class="col-md-6">
				  	<form id="form-search">
				  	<input type="hidden" name="areakerja" id="v_area" value="semua">
						<input type="text" class="form-control" name="keyword" id="search" placeholder="Cari Berdasarkan Nama Lengkap. . ." areakerja="semua">
						</form>
				  </div>
				</div>
			</div><br>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th style="text-align: center;" colspan="1">Rekomendasi</th>
              <th></th>
              <th></th>
              <th></th>
            <tr>
              <th style="text-align: center;"></th>
              <th style="text-align: center;">Informasi</th>
              <th style="text-align: center;">AO</th>
              <th style="text-align: center;">Status Approval</th>
              <th style="text-align: center;">Tanngal terakhir approve/reject</th>
              <th style="text-align: center;">Aksi</th>
            </tr>
          </thead>
          <tbody id="showCaa">
          </tbody>
          <div id="modalApprove"></div>
          <div id="modalReject"></div>
        </table>
      </div><br>
			<nav id="pagination" aria-label="Page navigation example" style="float:right;">
			  <ul class="pagination">
			    <li class="page-item"><button class="page-link previous-page" data="0" areakerja="semua">Previous</button></li>&nbsp;
			    <li class="page-item"><button class="page-link next-page" data="0" areakerja="semua">Next</button></li>
			  </ul>
			</nav>
    </div>
  </div>
</div>
</div>
<script type="text/javascript" src="lib/js/formatRupiah.js"></script>
<script type="text/javascript" src="lib/js/changedate.js"></script>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript" src="lib/js/FormatPointInput.js"></script>
<script type="text/javascript">
		$(document).ready(function () {

		var paramsID1 = $('#paramsID1')
		var paramsID2 = $('#paramsID2')
		var paramsID3 = $('#paramsID3')
		var session_jabatan = $('#session_jabatan').val()
		var session_jabatan_js = CryptoJS.MD5('IT')
		var session_kantor = $('#session_kantor').val()

		var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'

		$('#showCaa').on('click','#detailcaa',function () {
  		$('#load_page').val('true');
			var id_order = $(this).attr('dataIdOr')
			var id_calon_debitur = $(this).attr('dataIdCdeb')
			paramsID1.val(id_order)
			paramsID2.val(id_calon_debitur)
			$('#tamplate').val('views/content/data/detail-caa.php')
			$('#app').load('views/content/data/detail-caa.php')
		})

		$('#modalReject').on('click','#btn-reject',function () {
			var id_order = $(this).attr('dataIdOr')
			var data = $('#form-reject'+id_order).serialize()
			var notes = true

			notes = checkEmpty('textarea[id=notesR'+id_order+']')

			if (notes) {
				Reject(data,id_order)
			}
		})

		$('#modalApprove').on('click','#btn-approval',function () {
			var id_order = $(this).attr('dataIdOr')
			var data = $('#form-approval'+id_order).serialize()

			var plafond = true
			var tenor = true
			var alasan = true
			var syarat = true
			var notes = true

			plafond = checkEmpty('input[id=plafond'+id_order+']')
			tenor = checkSelect('select[id=tenor'+id_order+']')
			notes = checkEmpty('textarea[id=alasan'+id_order+']')
			notes = checkEmpty('textarea[id=syarat'+id_order+']')
			notes = checkEmpty('textarea[id=notes'+id_order+']')

			if (plafond && tenor && notes && alasan && syarat) {
				Approval(data,id_order)
			}
		})

		function Approval(data,id_order) {
			$.ajax({
				type:'POST',
				url:url+'Home/AddCaaApproval',
				data:data,
				dataType:'JSON',
				beforeSend:function () {
  				$('#load_page').val('true');
					load()
					$('#btn-approval').prop('disabled',true);
					$('#btn-approval').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Approved . . .');
				},
				success:function(data) {
  				$('#load_page').val('false');
					if (data.msg == 'success') {
						$('#btn-approval').prop('disabled',false)
						$('#btn-approval').html('Simpan')
						$('#myModal'+id_order).modal('hide');
						setTimeout(function () {
							load()
							$('#app').load('views/content/data/data-caa.php')
						},500)
						swal({
			        title: "Sukses!",
			        text: "data berhasil di approve!",
			        icon: "success"
		    		});
					}
				},
				error:function (xhr, status, error) {
					$('#btn-approval').prop('disabled',false)
					$('#btn-approval').html('Simpan')
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

		function Reject(data,id_order) {
			$.ajax({
				type:'POST',
				url:url+'Home/AddCaaReject',
				data:data,
				dataType:'JSON',
				beforeSend:function () {
					console.log('mengirim')
  				$('#load_page').val('true');
					load()
					$('#btn-reject').prop('disabled',true);
					$('#btn-reject').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Rejected . . .');
				},
				success:function(data) {
  				$('#load_page').val('false');
					if (data.msg == 'success') {
						$('#btn-reject').prop('disabled',false)
						$('#btn-reject').html('Reject')
						$('#myModalR'+id_order).modal('hide');
						setTimeout(function () {
							load()
							$('#tamplate').val('views/content/data/data-caa.php')
							$('#app').load('views/content/data/data-caa.php')
						},500)
						swal({
			        title: "Sukses!",
			        text: "data berhasil di reject!",
			        icon: "success"
		    		});
					}
				},
				error:function (xhr, status, error) {
					$('#btn-reject').prop('disabled',false)
					$('#btn-reject').html('Reject')
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

		/*SEARCH*/
		$('#search').keydown(function (e) {
			if (e.keyCode == 13) {
				e.preventDefault()
				$('.next-page').attr('data',0)
				$('.previous-page').prop('disabled',true).css({'cursor':'not-allowed'})
				let data = $('#form-search').serialize()
				if (session_jabatan == 'manager') {
					var controller = 'searchCaa'
				}else{
					var controller = 'searchCaa_ketua'
				}
				if ($(this).val() == '') {
					$(this).css({'border':'1px red solid'})
				}else{
					$(this).css({'border':'1px #e5e5e5 solid'})
					$.ajax({
							type:'POST',
	            url:url+'home/'+controller,
	            dataType:'JSON',
	            data:data,
	            beforeSend: function(){
	            	//totalData()
								$('#load_page').val('true');
	            	$('#search').prop('disabled',true)
	            	$('#showCaa').html('<tr><td colspan="5" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
	            	$('#pagination').hide()
	              load()
	            },
	            success:function(data){
								$('#load_page').val('false');
	            	dataCaa(data)
	            	if (data.length < 10) {
									$('.next-page').prop('disabled',true).css({'cursor':'not-allowed'})
								}else{
									$('.next-page').prop('disabled',false).css({'cursor':'pointer'})
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
			}
		})

		/*SELECT AREA KERJA*/
		$('#opt-areakerja').on('change','#selectAreaKerja',function() {
			let areakerja = $(this).val()
			$('#v_area').val(areakerja)
			$('#search').attr('areakerja',areakerja).val('').css({'border':'1px #e5e5e5 solid'})
			$('.next-page').attr('areakerja',areakerja).attr('data',0).prop('disabled',false).css({'cursor':'pointer'})
			$('.previous-page').prop('disabled',true).css({'cursor':'not-allowed'})
			if (session_jabatan == 'manager') {
				get_DataCaa('get_DataCaa',0,areakerja,'')
			}else{
				get_DataCaa('get_DataCaa_ketua',0,areakerja,'')
			}
		})

		let startTable = $('.next-page').attr('data')
		if (startTable == 0) {
			$('.previous-page').prop('disabled',true).css({'cursor':'not-allowed'})
		}else{
			$('.previous-page').prop('disabled',false).css({'cursor':'pointer'})
		}

		$('.next-page').click(function(){
			let start = $(this).attr('data')
			let next = parseInt(start) + 10
			if (next > 0) {
				$('.previous-page').prop('disabled',false).css({'cursor':'pointer'})
			}
			let areakerja = $(this).attr('areakerja')
			$(this).attr('data',next)
			$('.previous-page').attr('data',next)
			if (session_jabatan == 'manager') {
				get_DataCaa('get_DataCaa',next,session_kantor,'')
			}else{
				get_DataCaa('get_DataCaa_ketua',next,'semua','')
			}
		})

		$('.previous-page').click(function() {
			let start = $(this).attr('data')
			let nextPrev = parseInt(start) - 10

			if (nextPrev == 0) {
				$('.previous-page').prop('disabled',true).css({'cursor':'not-allowed'})
			}else{
				$('.previous-page').prop('disabled',false).css({'cursor':'pointer'})
			}
			let areakerja = $(this).attr('areakerja')

			$(this).attr('data',nextPrev)
			$('.next-page').attr('data',nextPrev)
			if (session_jabatan == 'manager') {
				get_DataCaa('get_DataCaa',nextPrev,session_kantor,'')
			}else{
				get_DataCaa('get_DataCaa_ketua',nextPrev,'semua','')
			}
		})

		if (session_jabatan == 'manager'){
			$('.previous-page').attr('areakerja',session_kantor)
			$('.next-page').attr('areakerja',session_kantor)
			get_DataCaa('get_DataCaa',0,session_kantor,'')
		}else{
			if (session_jabatan == 'ketua') {
				get_DataCaa('get_DataCaa_ketua',0,'semua','')
			}else{
				alert('Tidak ada akses data!!')
			}
		}

		'use strict'
		function get_DataCaa(controller,startlimit,areakerja,keyword) {
			$.ajax({
				type:'GET',
        url:url+'Home/'+controller+'/'+startlimit+'/'+areakerja+'/'+keyword,
        dataType:'JSON',
        beforeSend: function(){
        	totalData()
					$('#load_page').val('true');
        	$('#selectAreaKerja').prop('disabled',true)
          $('#search').prop('disabled',true)
        	$('#showCaa').html('<tr><td colspan="7" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
        	$('#pagination').hide()
          load()
        },
        success:function(data){
					$('#load_page').val('false');
        	dataCaa(data)
        	if (data.length < 10) {
						$('.next-page').prop('disabled',true).css({'cursor':'not-allowed'})
					}else{
						$('.next-page').prop('disabled',false).css({'cursor':'pointer'})
					}
        },
        error:function (xhr, status, error) {
        	$('#selectAreaKerja').prop('disabled',false)
          $('#search').prop('disabled',false)
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
		function dataCaa (data) {
			console.log(data)
			$('#selectAreaKerja').prop('disabled',false)
			$('#search').prop('disabled',false)
			if (data.amount == 0) {
        	$('#pagination').hide()
	  			$('#showCaa').html('<tr><td colspan="6" style="text-align: center;"><i class="mdi mdi-close"></i> Data Kosong !!</td></tr>')
	  	}else {
        	$('#pagination').show()
	  			var html = '';
	  			var modalApprove = '';
	  			var modalReject = '';
					var i;
					for(i=0; i<data.length; i++){
						var Detail = '<a href="javascript:void(0)" id="detailcaa" dataIdOr="'+data[i].id_order+'" dataIdCdeb="'+data[i].id_calon_debitur+'"><label class="but badge badge-warning"><i class="mdi mdi-account-box"></i>&nbsp;detail</label></a>&nbsp;'
						var Approved = '<a href="javascript:void(0)" id="approve" data-toggle="modal" data-target="#myModal'+data[i].id_order+'"><label class="but badge badge-success"><i class="mdi mdi-bookmark-check"></i>&nbsp;Approve</label></a>&nbsp;'

						var ButPrint = '<a id="butprint'+data[i].id_order+'" data="'+data[i].id_order+'"><label class="but badge badge-danger"><i class="mdi mdi-printer"></i>&nbsp;Cetak</label></a>&nbsp;'
						$('#showCaa').on('click','#butprint'+data[i].id_order,function() {
							const id_order = $(this).attr('data')
							chechkOffering(id_order)
						})

						if (data[i].status_app == 0) {
							var Rejected = '<a href="javascript:void(0)" data="'+data[i].id_order+'" data-toggle="modal" data-target="#myModalR'+data[i].id_order+'"><label class="but badge badge-danger"><i class="mdi mdi-close-circle"></i>&nbsp;Reject</label></a>&nbsp;'
						}else{
							var Rejected = ''
						}

						if (data[i].status_app == 0) {
							var status_app = '<b class="text-warning"><i class="mdi mdi-timer-sand" id="menunggu'+data[i].id_order+'">Menunggu</i></b>'
						}else if (data[i].status_app == 1) {
								var status_app = '<b class="text-success"><i class="mdi mdi-check-circle">Disetujui</i></b>'
						}else if (data[i].status_app == 2){
								var status_app = '<b class="text-danger"><i class="mdi mdi-close-circle">Ditolak</i></b>'
						}
						//MODAL
						chechkAppMgr(data[i].id_order)
						chechkAppKetua(data[i].id_order)
						chechkRejectMgr(data[i].id_order)
						chechkRejectKetua(data[i].id_order)
						modalApprove += '<div id="myModal'+data[i].id_order+'" class="modal fade" role="dialog">'+
										  '<div class="modal-dialog">'+
										    '<div class="modal-content" style="background:#f7f7f7;">'+
										      '<div class="modal-header">'+
										        '<h4 class="modal-title">Persetujuan</h4>'+
										        '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
										      '</div>'+
										      '<div class="modal-body">'+
										      '<p>Informasi</p>'+
										      		'<ul class="list-group">'+
															  '<li class="list-group-item disabled">'+
																  '<div class="row">'+
																  	'<div class="col-sm-4">'+
																    	'<label>Calon Debitur</label>'+
																    '</div>'+
																    '<div class="col-sm-8">'+
																      '<p style="font-weight:bold">'+data[i].calon_debitur+'<p>'+
																    '</div>'+
																  '</div>'+
															  '</li>'+
															  '<li class="list-group-item">'+
															  	'<div class="row">'+
																  	'<div class="col-sm-4">'+
																    	'<label>Pengajuan</label>'+
																    '</div>'+
																    '<div class="col-sm-8">'+
																      '<p >Rp.'+FormatRupiah(data[i].pengajuan)+' - '+data[i].tenor_pengajuan+' Bulan<p>'+
																    '</div>'+
																  '</div>'+
															  '</li>'+
															  '<li class="list-group-item">'+
																  '<div class="row">'+
																  	'<div class="col-sm-4">'+
																    	'<label>Rekomendasi AO</label>'+
																    '</div>'+
																    '<div class="col-sm-8">'+
																      '<p >Rp.'+FormatRupiah(data[i].plafond_kredit_ca)+' - '+data[i].tenor_rek_ca+' Bulan<p>'+
																    '</div>'+
																  '</div>'+
															  '</li>'+
												      	'<div class="detail-app'+data[i].id_order+'">'+
										      			'</div>'+
															'</ul>'+
										      '</div>'+
										      '<div id="alert-app'+data[i].id_order+'" style="padding:0% 3% 3% 3%;">'+
										      '<p>Form Persetujuan</p>'+
							      			'<form id="form-approval'+data[i].id_order+'">'+
										      		'<input type="hidden" name="id_order" value="'+data[i].id_order+'">'+
										      		'<input type="hidden" name="status" value="manager">'+
										      		'<input type="hidden" name="ao_to_email" value="'+data[i].ao_order+'">'+
										      		'<input type="hidden" name="name_to_email" value="'+data[i].calon_debitur+'">'+
										      		'<input type="hidden" name="nik_to_email" value="'+data[i].no_ktp+'">'+
										      		'<input type="hidden" name="plafond_to_email" value="Rp. '+FormatRupiah(data[i].plafond_kredit_ca)+' - '+data[i].tenor_rek_ca+' Bulan">'+
										      		'<input type="text" name="plafond" id="plafond'+data[i].id_order+'" class="form-control" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Plafond yang di setujui">'+
										      		'<select class="form-control" name="tenor" id="tenor'+data[i].id_order+'" style="margin-top:3px;">'+
					                     ' <option value="null">Pilih tenor</option>'+
					                     ' <option value="6">6 Bulan</option>'+
					                      '<option value="12">12 Bulan</option>'+
					                      '<option value="18">18 Bulan</option>'+
					                      '<option value="24">24 Bulan</option>'+
					                      '<option value="30">30 Bulan</option>'+
					                      '<option value="36">36 Bulan</option>'+
					                      '<option value="40">40 Bulan</option>'+
					                      '<option value="48">48 Bulan</option>'+
					                      '<option value="60">60 Bulan</option>'+
					                      '<option value="72">72 Bulan</option>'+
					                    '</select>'+
										     			'<textarea type="text" name="alasan" class="form-control" placeholder="Masukan alasan persetujuan" id="alasan'+data[i].id_order+'" style="height:85px;margin-top:3px;"></textarea>'+
										     			'<textarea type="text" name="syarat" class="form-control" placeholder="Masukan syarat persetujuan" id="syarat'+data[i].id_order+'" style="height:85px;margin-top:3px;"></textarea>'+
										     			'<textarea type="text" name="notes" class="form-control" placeholder="Masukan catatan persetujuan" id="notes'+data[i].id_order+'" style="height:155px;margin-top:3px;"></textarea>'+
											      '<div class="modal-footer">'+
											        '<button type="button" class="btn btn-success" id="btn-approval" dataIdOr="'+data[i].id_order+'"><i class="mdi mdi-checkbox-marked-circle"></i>Approve</button>'+
											      '</div>'+
										      '</form>'+
										      '</div>'+
										    '</div>'+
										  '</div>'+
										'</div>'

						modalReject += '<div id="myModalR'+data[i].id_order+'" class="modal fade" role="dialog" >'+
										  '<div class="modal-dialog">'+
										    '<div class="modal-content">'+
										      '<div class="modal-header">'+
										        '<h4 class="modal-title">Reject</h4>'+
										        '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
										      '</div>'+
										      '<div class="modal-body">'+
										        '<p>Informasi</p>'+
										      		'<ul class="list-group">'+
															  '<li class="list-group-item disabled">'+
																  '<div class="row">'+
																  	'<div class="col-sm-4">'+
																    	'<label>Calon Debitur</label>'+
																    '</div>'+
																    '<div class="col-sm-8">'+
																      '<p >'+data[i].calon_debitur+'<p>'+
																    '</div>'+
																  '</div>'+
															  '</li>'+
															  '<li class="list-group-item">'+
															  	'<div class="row">'+
																  	'<div class="col-sm-4">'+
																    	'<label>Pengajuan</label>'+
																    '</div>'+
																    '<div class="col-sm-8">'+
																      '<p >Rp.'+FormatRupiah(data[i].pengajuan)+' - '+data[i].tenor_pengajuan+' Bulan<p>'+
																    '</div>'+
																  '</div>'+
															  '</li>'+
															  '<li class="list-group-item">'+
																  '<div class="row">'+
																  	'<div class="col-sm-4">'+
																    	'<label>Rekomendasi AO</label>'+
																    '</div>'+
																    '<div class="col-sm-8">'+
																      '<p >Rp.'+FormatRupiah(data[i].plafond_kredit_ca)+' - '+data[i].tenor_rek_ca+' Bulan<p>'+
																    '</div>'+
																  '</div>'+
															  '</li>'+
												      	'<div class="detail-app'+data[i].id_order+'">'+
										      			'</div>'+
															'</ul>'+
										      '</div>'+
										      '<div id="alert-rej'+data[i].id_order+'" style="padding:0% 3% 3% 3%;">'+
										      '<p>Form Penolakan</p>'+
										      '<form id="form-reject'+data[i].id_order+'">'+
										      		'<input type="hidden" name="id_order" value="'+data[i].id_order+'">'+
										      		'<input type="hidden" name="ao_to_email" value="'+data[i].ao_order+'">'+
										      		'<input type="hidden" name="name_to_email" value="'+data[i].calon_debitur+'">'+
										      		'<input type="hidden" name="nik_to_email" value="'+data[i].no_ktp+'">'+
										      		'<input type="hidden" name="plafond_to_email" value="Rp. '+FormatRupiah(data[i].plafond_kredit_ca)+' - '+data[i].tenor_rek_ca+' Bulan">'+
										     			'<textarea type="text" name="notes" class="form-control" placeholder="Masukan catatan penolakan" id="notesR'+data[i].id_order+'" style="height:155px;margin-top:3px;"></textarea>'+
											      '<div class="modal-footer">'+
											        '<button type="button" class="btn btn-danger" id="btn-reject" dataIdOr="'+data[i].id_order+'"><i class="mdi mdi-close-circle"></i>Reject</button>'+
											      '</div>'+
										      '</form>'+
										      '</div>'+
										    '</div>'+
										  '</div>'+
										'</div>'

							html +=	'<tr>'+
												'<td>'+
													'<a href="javascript:void(0)" id="butinfo'+data[i].id_order+'" selector="#info'+data[i].id_order+'" title="lihat info approval" id_order="'+data[i].id_order+'"><i class="mdi mdi-plus"></i></a>'+
													'<a href="javascript:void(0)" id="closeinfo'+data[i].id_order+'" selector="#info'+data[i].id_order+'" title="tutup info approval" id_order="'+data[i].id_order+'" style="display:none;"><i class="mdi mdi-chevron-up"></i></a>'+
												'</td>'+
					              '<td>'+
						              '<div class="row">'+
						                '<div class="col-md-12">'+
							                '<div class="col-md-6">'+data[i].calon_debitur+'</div>'+
							              '</div>'+
						              '</div>'+
					              '</td>'+
					              '<td>'+
					              		'Rp. '+FormatRupiah(data[i].plafond_kredit_ca)+' - '+data[i].tenor_rek_ca+' Bulan'+
					              '</td>'+
					             	'<td class="text-center">'+
					             			''+status_app+''+
					             	'</td>'+
					             	'<td>'+
					             	changeDate(data[i].tgl_last_app)+
					             	'</td>'+
					              '<td style="text-align: center;">'+
					                Detail+
					                Approved+
					                Rejected+
					                ButPrint+
					              '</td>'+
					            '</tr>'

				      html += '<tr id="info'+data[i].id_order+'" style="display:none;background:#f3f5f6;">'+
												'<td colspan="8" style="text-align: left;">'+
														'<div class="col-md-6">'+
							                '<b>AO</b> : '+data[i].ao_order+'&nbsp;&nbsp;&nbsp;'+
							                '<b>Area Kerja</b> : '+data[i].area_kerja+'&nbsp;&nbsp;&nbsp;'+
							                '<b>Jaminan</b> : '+data[i].nama_jenis_jaminan+'&nbsp;&nbsp;&nbsp;'+
							                '<b>Produk</b> : '+data[i].produk+'&nbsp;&nbsp;&nbsp;'+
							                '<b> Pengajuan</b> : Rp.'+FormatRupiah(data[i].pengajuan)+'&nbsp;&nbsp;&nbsp;'+
							                '<b> Tenor</b> : '+data[i].tenor_pengajuan+' Bulan'+
						                '</div>'+
												'</td>'+
											'</tr>'

							$('#showCaa').on('click','#butinfo'+data[i].id_order,function () {
									var selector = $(this).attr('selector')
									var id_order = $(this).attr('id_order')
									$(''+selector+'').show()
									$(this).hide()
									$('#closeinfo'+id_order).show()
							})

							$('#showCaa').on('click','#closeinfo'+data[i].id_order,function () {
									var selector = $(this).attr('selector')
									var id_order = $(this).attr('id_order')
									$(''+selector+'').hide()
									$(this).hide()
									$('#butinfo'+id_order).show()
							})
					}

					$('#showCaa').html(html);
					$('#modalApprove').html(modalApprove);
					$('#modalReject').html(modalReject);
	  	}
		}
		'use strict'
		function chechkAppMgr(id_order) {
			$.ajax({
				type:'GET',
				url:url+'Home/checkApproveManager/'+id_order,
				dataType:'JSON',
				success:function (data) {
					if (data.length == 1) {
						if (session_jabatan == 'manager') {
							$('#menunggu'+id_order).html('Menunggu approve ketua')
							$('#alert-app'+id_order).html(' ')
							$('#butreject'+id_order).hide()
							DataApprove(id_order)
						}
					}
				}
			})
		}
		'use strict'
		function chechkRejectMgr(id_order) {
			$.ajax({
				type:'GET',
				url:url+'Home/checkRejectManager/'+id_order,
				dataType:'JSON',
				success:function (data) {
					if (data.length == 1) {
						$('#alert-app'+id_order).html(' ')
						DataApprove(id_order)
					}
				}
			})
		}
		'use strict'
		function chechkAppKetua(id_order) {
			$.ajax({
				type:'GET',
				url:url+'Home/checkApproveKetua/'+id_order,
				dataType:'JSON',
				success:function (data) {
					if (data.length == 1) {
						if (session_jabatan == 'ketua') {
							$('#alert-app'+id_order).html(' ')
							DataApprove(id_order)
						}
					}
				}
			})
		}
		'use strict'
		function chechkRejectKetua(id_order) {
			$.ajax({
				type:'GET',
				url:url+'Home/checkRejectKetua/'+id_order,
				dataType:'JSON',
				success:function (data) {
					if (data.length == 1) {
						$('#alert-app'+id_order).html(' ')
						DataApprove(id_order)
					}
				}
			})
		}
		'use strict'
		function chechkOffering(id_order) {
			$.ajax({
				type:'GET',
				url:url+'Home/get_DetailOffering/'+id_order,
				dataType:'JSON',
				success:function(res) {
					if (res.amount == 0) {
						alert('Form persetujuan belum bisa di cetak, Lakukan proses Legal (lengkapi biaya - biaya)')
					}else{
						window.open(url+'Report/ReportCAA/'+id_order, '_blank');
					}
				}
			})
		}
		'use strict'
		function DataApprove(id_order) {
			$.ajax({
				type:'GET',
				url:url+'Home/DataApprove/'+id_order,
				dataType:'JSON',
				success:function (data) {
					var html = ''
					$.each(data,function (k,v) {
						if (v.status_app == 1) {
							var status_app = '<b class="text-success" style="float:right;"><i class="mdi mdi-check-circle">Menyetujui</i></b>'
							var syarat_alasan = '<div class="row">'+
																  	'<div class="col-sm-4">'+
																    	'<label>Alasan</label>'+
																    '</div>'+
																    '<div class="col-sm-8">'+
																      '<p>'+v.alasan+'<p>'+
																    '</div>'+
																  '</div>'+
																  '<div class="row">'+
																  	'<div class="col-sm-4">'+
																    	'<label>Syarat</label>'+
																    '</div>'+
																    '<div class="col-sm-8">'+
																      '<p>'+v.syarat+'<p>'+
																    '</div>'+
																  '</div>'
							var persetujuan = '<p>Rp.'+FormatRupiah(v.plafon)+' - '+v.tenor+' Bulan<p>'
						}else if (v.status_app == 2){
							var status_app = '<b class="text-danger" style="float:right;"><i class="mdi mdi-close-circle">Menolak</i></b>'
							var syarat_alasan = ''
							var persetujuan = '<p style="color:grey;font-weight:bold;"><i>Tidak menyetujui pinjaman</i></p>'
						}else{
							var syarat_alasan = ''
							var status_app = ''
							var persetujuan = ''
						}
						html += '<li class="list-group-item">'+
											'<div class="row">'+
										  	'<div class="col-sm-4">'+
										    	'<label><b>'+v.jabatan+'</b></label>'+
										    '</div>'+
										    '<div class="col-sm-8">'+
											  	status_app+
										      persetujuan+
										    '</div>'+
										  '</div>'+
										  syarat_alasan+
										  '<div class="row">'+
										  	'<div class="col-sm-4">'+
										    	'<label>Notes</label>'+
										    '</div>'+
										    '<div class="col-sm-8">'+
										      '<p>'+v.notes+'<p>'+
										    '</div>'+
										  '</div>'+
										'</li>'
					})
					$('.detail-app'+id_order).html(html)
				}
			})
		}

		if (session_jabatan == 'ketua'){
			areakerja(session_kantor)
		}else{
			$('#opt-areakerja').hide()
		}
		'use strict'
		function areakerja(cabang) {
			$.ajax({
				type:'GET',
				url:url+'Home/kantor',
				dataType:'JSON',
				beforeSend:function () {
					$('#opt-areakerja').html(loading)
				},
				success:function(data){
					var html = ''
					$.each(data, function(index, value ) {
						if (cabang == value.KODE_CABANG && cabang != 01) {
							html += '<option value="'+value.KODE_CABANG+'" selected>'+value.nama_area_kerja+'</option>'
						}else{
							html += '<option value="'+value.KODE_CABANG+'">'+value.nama_area_kerja+'</option>'
						}

					})
					if (session_kantor == 01) {
						$('#opt-areakerja').html('<select class="form-control" id="selectAreaKerja"><option value="semua">semua</option>'+html+'</select')
						$('#v_area').val('semua')
					}else{
						$('#opt-areakerja').html('<select class="form-control" id="selectAreaKerja" disabled="disabled"><option value="semua">semua</option>'+html+'</select')
						$('#v_area').val(session_kantor)
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
		'use strict'
		function totalData() {
			$.ajax({
				type:'GET',
				url:url+'home/getAllCaa',
				dataType:'JSON',
				success:function(res) {
					if (res.total_caa > 10) {
						let datapage = $('.next-page').attr('data')
						let lastpage = res.total_caa - datapage
						if (lastpage < datapage || lastpage == datapage){
							$('.next-page').prop('disabled',true).css({'cursor':'not-allowed'})
						}else{
							$('.next-page').prop('disabled',false).css({'cursor':'pointer'})
						}
					}else{
						$('.next-page').prop('disabled',true).css({'cursor':'not-allowed'})
					}
				}
			})
		}


		'use strict'
		function checkEmpty(obj) {
			$(obj).css("border","")
			if($(obj).val() == "") {
				$(obj).css("border","#FF0000 1px solid")
				return false;
			}
			return true;
		}
		'use strict'
		function checkSelect(obj) {
		$(obj).css("border","")
		if($(obj).val() == "null") {
			$(obj).css("border","#FF0000 1px solid")
		return false;
		}
		return true;
		}
		'use strict'
		function load() {
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

