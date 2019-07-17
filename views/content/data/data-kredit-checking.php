<div class="row">
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Kredit Checking</h4><hr>
      <p class="card-description">
      	<a href="javascript:void(0)" data-toggle="modal" data-target=".bd-example-modal-lg" id="tambah_kredit" style="display: none;">Tambah data</a>
      </p>
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
              <th>id kredit checking</th>
              <th>id order</th>
              <th>Calon Nasabah</th>
              <th>Tenor</th>
              <th>Kredit check</th>
              <th>Jenis Jaminan</th>
              <th>Status</th>
              <th>Status Verifikasi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="showKreditCheck">
          </tbody>
        </table>
      </div><br>
		<nav id="pagination" aria-label="Page navigation example" style="float:right;">
		  <ul class="pagination">
		    <li class="page-item"><button class="page-link previous-page" data="0" areakerja="semua">Previous</button></li>&nbsp;
		    <li class="page-item"><button class="page-link next-page" data="0" areakerja="semua">Next</button></li>
		  </ul>
		</nav>
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle">Order siap kredit checking</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="row" >
            <div class="col-lg-12" >
              <div class="card" >
                <div class="card-body" style="background-color: #fafbfb">
                  <div class="col-12 grid-margin" >
                    <div class="card" style="background-color: #fafbfb">
                      <div class="card-body">
                          <!-- <div class="form-group" style="float:right;">
                            <div class="input-group">
                             <input type="text" class="form-control" placeholder="Cari Berdasarkan NIK Atau Nama" aria-describedby="colored-addon1" style="width: 80%; box-shadow:0.2px 0.2px 0.2px 0.2px grey;">
                            </div>
                          </div> -->
													<div class="table-responsive" style="height:300px;overflow:auto;">
														<table class="table table-hover" >
															<thead>
										            <tr>
										              <th>id order</th>
										              <th>Calon Nasabah</th>
										              <th>Tenor</th>
										              <th>Jenis Jaminan</th>
										              <th>Ao Order</th>
										            </tr>
										          </thead>
										          <tbody id="showOrder">
										          </tbody>
														</table>
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
  </div>
</div>
</div>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript">
$(document).ready(function () {

		var paramsID1 = $('#paramsID1')
		var paramsID2 = $('#paramsID2')
		var paramsID3 = $('#paramsID3')
		var session_jabatan = $('#session_jabatan').val()
		var session_jabatan_js = CryptoJS.MD5('IT')
		var session_kantor = $('#session_kantor').val()
		var session_id_user = $('#session_id_user').val()

		var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'

		if (session_jabatan == 'TELLER' || session_jabatan == 'teller'){
			$('#tambah_kredit').show()
		}

		$('#showOrder').on('click','#KreditCheckingOrder',function () {
				var id_order = $(this).attr('dataIdO')
				var id_calon_debitur = $(this).attr('dataIdN')
				paramsID1.val(id_order)
				paramsID2.val(id_calon_debitur)
				$('#modal').modal('toggle')
				/*setTimeout(function () {
					load()
					$('#tamplate').val('views/content/form/add-kredit-checking.php')
					$('#app').load('views/content/form/add-kredit-checking.php')
				},500)*/
				checkOrder(id_order,id_calon_debitur)
		})

		'use strict'
		function checkOrder(id_order,id_calon_debitur) {
			$.ajax({
				type:'GET',
				url:url+'Home/checkOrderInKredit/'+id_order+'/'+id_calon_debitur,
				dataType:'JSON',
				beforeSend:() => {
					load()
				},
				success:function (res) {
					if (res.amount == 1) {
						swal({
						  title:'Info!',
						  text:'Data order dengan id '+id_order+' sudah memiliki data Kredit Checking.',
						  icon: "info"
						});
					}else{
						setTimeout(function () {
							load()
							$('#tamplate').val('views/content/form/add-kredit-checking.php')
							$('#app').load('views/content/form/add-kredit-checking.php')
						},500)
					}
				}
			})
		}

		Order_kreditcheck()
		function Order_kreditcheck() {
				$.ajax({
						type:'GET',
            url:url+'Home/OrderReady',
            dataType:'JSON',
            beforeSend: function(){
            	$('#showOrder').html('<tr><td colspan="5" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
              load()
            },
            success:function(data){
            	if (data.amount == 0) {
            			$('#showOrder').html('<tr><td colspan="5" style="text-align: center;"><i class="mdi mdi-close"></i> Data Kosong !!</td></tr>')
            	}else {
            			var html = '';
									var i;
									for(i=0; i<data.length; i++){
											html += '<tr href="#" style="cursor: pointer;" id="KreditCheckingOrder" dataIdO="'+data[i].id+'" dataIdN="'+data[i].id_calon_debitur+'">'+
															'<td>'+data[i].id+'</td>'+
															'<td>'+data[i].nama_identitas+'</td>'+
															'<td>'+data[i].tenor+' Bulan</td>'+
															'<td class="text-primary" style="font-weight:bold;">'+data[i].nama_jenis_jaminan+'</td>'+
															'<td>'+data[i].AO_ORDER+'</td>'+
															'</tr>'
									}

									$('#showOrder').html(html);
            	}
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

		$('#showKreditCheck').on('click','#detail',function () {
				var id_kredit_check = $(this).attr('dataIdKc')
				var id_order = $(this).attr('dataIdO')
				var id_calon_debitur = $(this).attr('dataIdN')
				paramsID1.val(id_kredit_check)
				paramsID2.val(id_order)
				paramsID3.val(id_calon_debitur)
				load()
				$('#tamplate').val('views/content/data/detail-kredit-checking.php')
				$('#app').load('views/content/data/detail-kredit-checking.php')
		})

		$('#showKreditCheck').on('click','#edit',function () {
				var id = $(this).attr('dataIdKc')
				var id_order = $(this).attr('dataIdOr')
				paramsID1.val(id)
				paramsID2.val(id_order)
				load()
				$('#tamplate').val('views/content/form/edit-data-kredit.php')
				$('#app').load('views/content/form/edit-data-kredit.php')
		})

		/*SEARCH*/
		$('#search').keydown(function (e) {
			if (e.keyCode == 13) {
				e.preventDefault()
				$('.next-page').attr('data',0)
				$('.previous-page').prop('disabled',true).css({'cursor':'not-allowed'})
				let data = $('#form-search').serialize()
				if ($(this).val() == '') {
					$(this).css({'border':'1px red solid'})
				}else{
					$(this).css({'border':'1px #e5e5e5 solid'})
					$.ajax({
							type:'POST',
	            url:url+'home/seacrhKredit',
	            dataType:'JSON',
	            data:data,
	            beforeSend: function(){
	            	//totalData()
								$('#load_page').val('true');
	            	$('#search').prop('disabled',true)
	            	$('#showKreditCheck').html('<tr><td colspan="9" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
	            	$('#pagination').hide()
	              load()
	            },
	            success:function(data){
								$('#load_page').val('false');
	            	dataKredit(data)
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
			DataKreditCheck(0,areakerja,'')
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
			DataKreditCheck(next,areakerja,'')
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
			DataKreditCheck(nextPrev,areakerja,'')
		})

		if (session_jabatan == 'manager'){
			$('.previous-page').attr('areakerja',session_kantor)
			$('.next-page').attr('areakerja',session_kantor)
			DataKreditCheck(0,session_kantor,'')
		}else{
			if (session_jabatan == 'ketua') {
				DataKreditCheck(0,'semua','')
			}else{
				DataKreditCheck(0,session_kantor,'')
			}
		}
		'use strict'
		function DataKreditCheck(startlimit,areakerja,keysearch) {
			$.ajax({
				type:'GET',
        url:url+'Home/get_dataKreditcheck/'+startlimit+'/'+areakerja+'/'+keysearch,
        dataType:'JSON',
        beforeSend: function(){
        	totalData()
					$('#load_page').val('true');
        	$('#search').prop('disabled',true)
        	$('#pagination').hide()
        	$('#showKreditCheck').html('<tr><td colspan="9" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
          load()
        },
        success:function(data){
					$('#load_page').val('false');
        	dataKredit(data)
        	if (data.length < 10) {
						$('.next-page').prop('disabled',true).css({'cursor':'not-allowed'})
					}else{
						$('.next-page').prop('disabled',false).css({'cursor':'pointer'})
					}
        },
        error:function (xhr, status, error) {
        	//console.log(xhr.status)
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

		function dataKredit(data) {
			console.log(data)
     	$('#selectAreaKerja').prop('disabled',false)
     	$('#search').prop('disabled',false)
			if (data.amount == 0) {
          $('#pagination').hide()
	  			$('#showKreditCheck').html('<tr><td colspan="9" style="text-align: center;"><i class="mdi mdi-close-circle-outline"></i> Data Kosong!</td></tr>')
	  	}else {
          $('#pagination').show()
	  			var html = '';
					var i;
					for(i=0; i<data.length; i++){
						/*if (session_jabatan == session_jabatan_js){*/
							if (session_id_user == data[i].proses_by){
								var butEdit = '<a href="javascript:void(0)" id="edit" dataIdKc="'+data[i].id+'" dataIdOr="'+data[i].id_order+'"><label class="but badge badge-primary"><i class="mdi mdi-pencil"></i>&nbsp;Edit</label></a>&nbsp;'
							}else{
								var butEdit = ''
							}
							var ButHapus = '<a href="javascript:void(0)" id="hapus" dataIdKc="'+data[i].id+'"><label class="but badge badge-danger"><i class="mdi mdi-delete-variant"></i>&nbsp;Hapus</label></a>&nbsp;'
							var butDetail = '<a href="javascript:void(0)" id="detail" dataIdKc="'+data[i].id+'" dataIdO="'+data[i].id_order+'" dataIdN="'+data[i].id_calon_debitur+'"><label class="but badge badge-warning"><i class="mdi mdi-account-box"></i>&nbsp;detail</label></a>&nbsp;'
						/*}else{
							var butEdit = ''
							var ButHapus = ''
							var butDetail = ''
						}*/

						if (data[i].status_kredit == 'WAITING') {
								var status = '<label class="badge badge-info">'+data[i].status_kredit+'</label>'
						}else if (data[i].status_kredit == 'PENDING') {
								var status = '<label class="badge badge-dark">'+data[i].status_kredit+'</label>'
						}else if (data[i].status_kredit == 'ON PROGRESS') {
								var status = '<label class="badge badge-primary">'+data[i].status_kredit+'</label>'
						}else if (data[i].status_kredit == 'DONE') {
								var status = '<label class="badge badge-success">'+data[i].status_kredit+'</label>'
						}
						if (data[i].status_verifikasi == 0) {
								var verifikasi = '<td class="text-danger">Menunggu konfirmasi</td>'
						}else if (data[i].status_verifikasi == 1){
								var verifikasi = '<td class="text-primary">Lanjut (di setujui)</td>'
						}else{
								var verifikasi = '<td class="text-danger">DI TOLAK!</td>'
						}

						html += '<tr>'+
											'<td>'+data[i].id+'</td>'+
											'<td>'+data[i].id_order+'</td>'+
											'<td>'+data[i].calon_debitur+'</td>'+
											'<td>'+data[i].tenor+' Bulan </td>'+
											'<td class="text-defau;t">'+data[i].jenis_debitur+'</td>'+
											'<td class="text-primary">'+data[i].jenis_jaminan+'</td>'+
											'<td>'+status+'</td>'+
											verifikasi+
											'<td>'+
											butDetail/*+ButHapus*/+butEdit+'</td>'+
										'</tr>'
					}

					$('#showKreditCheck').html(html);
	  	}
		}

		function totalData() {
			$.ajax({
				type:'GET',
				url:url+'home/getTotalAllKredit',
				dataType:'JSON',
				success:function(res) {
					if (res.total_kredit > 10) {
						let datapage = $('.next-page').attr('data')
						let lastpage = res.total_kredit - datapage
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

		if (session_jabatan == 'teller' || session_jabatan == 'TELLER' || session_jabatan == 'ketua'){
			areakerja(session_kantor)
		}else{
			$('#opt-areakerja').hide()
		}
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

		$('#showKreditCheck').on('click','#done',function () {
				var id = $(this).attr('data')
				var status = $(this).attr('status')
				var nama = $(this).attr('nama')
				alertProsesKredit(id,status,nama)
		})

		$('#showKreditCheck').on('click','#onprogress',function () {
				var id = $(this).attr('data')
				var status = $(this).attr('status')
				var nama = $(this).attr('nama')
				alertProsesKredit(id,status,nama)
		})

		$('#showKreditCheck').on('click','#waiting',function () {
				var id = $(this).attr('data')
				var status = $(this).attr('status')
				var nama = $(this).attr('nama')
				alertProsesKredit(id,status,nama)
		})

		$('#showKreditCheck').on('click','#pending',function () {
				var id = $(this).attr('data')
				var status = $(this).attr('status')
				var nama = $(this).attr('nama')
				console.log(status)
				alertProsesKredit(id,status,nama)
		})


		'use strict'
		function alertProsesKredit (id,status,nama) {
			swal({
				text: "Proses "+status+" Kredit Checking ?",
				icon: "info",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					ProsesKredit(id,status,nama)
				} else {
					swal({
						text:'Proses dibatalkan',
						timer:1000,
						buttons: false
					})
				}
			});
		}
		'use strict'
		function ProsesKredit(id,status,nama) {
			$.ajax({
				type:'POST',
				url:url+'Home/prosesKredit',
				dataType:'JSON',
				data:{
				  id:id,
					status:status
				},
				beforeSend:function() {
						swal({
							text:'Sedang Proses . . .',
							icon:'warning',
							buttons: false,
							closeModal: false,
						})
					load()
				},
				success:function(res) {
						if (res.msg == 'success_done') {
						DataKreditCheck()
							messageProsesKredit(nama,status)
						}else if (res.msg == 'success_onprogress') {
						DataKreditCheck()
							messageProsesKredit(nama,status)
						}else if (res.msg = 'success_waiting'){
							DataKreditCheck()
							messageProsesKredit(nama,status)
						}else if (res.msg = 'success_cancel'){
							DataKreditCheck()
							messageProsesKredit(nama,status)
						}else{
							console.log(res)
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
		function messageProsesKredit (nama,status) {
			swal({
    			text:'Proses Kredit Checking Atas nama '+nama+' "'+status+'"',
    			icon:'success',
  				buttons: false,
  				closeModal: false,
  				timer:4000
    		})
		}
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

