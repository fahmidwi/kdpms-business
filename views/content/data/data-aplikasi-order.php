<div class="row">
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Order</h4><hr>
      <p class="card-description">
      	<a href="javascript:void(0)" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah data</a>
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
              <th>id order</th>
              <th>Calon Nasabah</th>
              <th>Plafond</th>
              <th>Tenor</th>
              <th>Jenis Jaminan</th>
              <th>Verifikasi</th>
              <th>Status assign</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="showOrder">
          </tbody>
        </table>
      </div><br>
      <nav id="pagination" aria-label="Page navigation example" style="float:right;">
			  <ul class="pagination">
			    <li class="page-item"><button class="page-link previous-page" areakerja="semua" data="0">Previous</button></li>&nbsp;
			    <li class="page-item"><button class="page-link next-page" areakerja="semua" data="0">Next</button></li>
			  </ul>
			</nav>
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle">Calon debitur siap Order</h4>
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
															    <th>NIK</th>
															    <th>Nama Calon Debitur</th>
															    <th>Jenis Debitur</th>
															    <th>Nama Ibu Kandung</th>
															  </tr>
															</thead>
															<tbody id="showNasabahOrder">
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
<script type="text/javascript" src="lib/js/formatRupiah.js"></script>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript">
		$(document).ready(function () {

		var paramsID1 = $('#paramsID1')
		var paramsID2 = $('#paramsID2')
		var session_jabatan = $('#session_jabatan').val()
		var session_jabatan_js = CryptoJS.MD5('IT')
		var session_kantor = $('#session_kantor').val()
		var session_id_user = $('#session_id_user').val()

		var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'


		$('#showNasabahOrder').on('click','#orderCNasabah',function () {
				var id_calon_debitur = $(this).attr('data')
				paramsID1.val(id_calon_debitur)
				$('#modal').modal('toggle')
				setTimeout(function () {
					load()
					$('#tamplate').val('views/content/form/add-aplikasi-order.php')
					$('#app').load('views/content/form/add-aplikasi-order.php')
				},500)
		})

		nasabah_order()
		function nasabah_order() {
				$.ajax({
						type:'GET',
            url:url+'Home/NasabahReadyOrder',
            dataType:'JSON',
            beforeSend: function(){
            	$('#showNasabahOrder').html('<tr><td colspan="5" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
              load()
            },
            success:function(data){
            	if (data.amount == 0) {
            			$('#showNasabahOrder').html('<tr><td colspan="5" style="text-align: center;"><i class="mdi mdi-close"></i> Data Kosong !!</td></tr>')
            	}else {
            			var html = '';
									var i;
									for(i=0; i<data.length; i++){
											html += '<tr href="#" style="cursor: pointer;" title="Order nasabah" id="orderCNasabah" data="'+data[i].id_calon_debitur+'" >'+
															'<td>'+data[i].no_ktp+'</td>'+
															'<td class="text-primary" style="font-weight:bold;">'+data[i].nama_identitas+'</td>'+
															'<td>'+data[i].jenis_debitur+'</td>'+
															'<td>'+data[i].nama_gadis_ibu_kandung+'</td>'
															'</tr>'
									}

									$('#showNasabahOrder').html(html);
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

		$('#showOrder').on('click','#detailorder',function () {
        $('#load_page').val('true');
				load()
				var id = $(this).attr('dataIdO')
				var idN = $(this).attr('dataIdN')
				paramsID1.val(id)
				paramsID2.val(idN)
				$('#tamplate').val('views/content/data/detail-aplikasi-order.php')
				$('#app').load('views/content/data/detail-aplikasi-order.php')
		})

    $('#showOrder').on('click','#editorder',function () {
        $('#load_page').val('true');
				load()
        var id_calon_debitur = $(this).attr('dataidcalonnasabah')
				var id_order = $(this).attr('dataidorder')
        paramsID1.val(id_calon_debitur)
				paramsID2.val(id_order)
				$('#tamplate').val('views/content/form/edit-data-order.php')
				$('#app').load('views/content/form/edit-data-order.php')
		})

		$('#showOrder').on('click','#hapusorder',function () {
				var id_order = $(this).attr('data')
				swal({
				  title: "Apakah kamu yakin?",
				  text: "Setelah dihapus, Anda tidak akan dapat memulihkan data ini!!",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {
				    $.ajax({
				    	type:'GET',
				    	url:url+'Home/delete_order/'+id_order,
				    	dataType:'JSON',
				    	beforeSend:function () {
								$('#load_page').val('true');
				    		swal({
				    			text:'Sedang menghapus data . . .',
				  				buttons: false,
				  				closeModal: false,
				    		})
				    	},
				    	success:function (res) {
								console.log(res)
								$('#load_page').val('false');
				    		swal({
				    			text:'Data terhapus',
				    			icon:'success',
				    			timer:1000,
								  buttons: false,
				    		})
								getOrder(0,session_kantor,'')
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
				});
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
	            url:url+'home/seacrhOrder',
	            dataType:'JSON',
	            data:data,
	            beforeSend: function(){
	            	//totalData()
								$('#load_page').val('true');
	            	$('#search').prop('disabled',true)
	            	$('#showOrder').html('<tr><td colspan="7" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
	            	$('#pagination').hide()
	              load()
	            },
	            success:function(data){
								$('#load_page').val('false');
	            	dataOrder(data)
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
			getOrder(0,areakerja,'')
		})

		/*if (session_jabatan == 'manager'){
			var areakerja = session_kantor
		}else{
			if (session_jabatan == 'ketua') {
				var areakerja = 'semua'
			}else{
				var areakerja = session_kantor
			}
		}*/

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
			getOrder(next,areakerja,'')
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
			getOrder(nextPrev,areakerja,'')
		})

		if (session_jabatan == 'manager'){
			$('.previous-page').attr('areakerja',session_kantor)
			$('.next-page').attr('areakerja',session_kantor)
			getOrder(0,session_kantor,'')
		}else{
			if (session_jabatan == 'ketua') {
				getOrder(0,'semua','')
			}else{
				getOrder(0,session_kantor,'')
			}
		}
		'use strict'
		function getOrder(startlimit,areakerja,keyword) {
				$.ajax({
						type:'GET',
            url:url+'Home/get_order/'+startlimit+'/'+areakerja+'/'+keyword,
            dataType:'JSON',
            beforeSend: function(){
            	totalData()
							$('#load_page').val('true');
            	$('#pagination').hide()
            	$('#search').prop('disabled',true)
            	$('#showOrder').html('<tr><td colspan="8" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
              load()
            },
            success:function(data){
							$('#load_page').val('false');
            	dataOrder(data)
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
						        icon: "error",
						        type: "error"
						    });
            	}
            }
				})
		}
		'use strict'
		function totalData() {
			$.ajax({
				type:'GET',
				url:url+'home/getTotalAllOrder/',
				dataType:'JSON',
				success:function(res) {
					console.log(res.total_order)
					if (res.total_order > 10) {
						let datapage = $('.next-page').attr('data')
						let lastpage = res.total_order - datapage
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

		if (session_jabatan == 'ketua') {
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

		function dataOrder (data) {
			$('#selectAreaKerja').prop('disabled',false)
			$('#search').prop('disabled',false)
			if (data.amount == 0) {
			  $('#pagination').hide()
    		$('#showOrder').html('<tr><td colspan="8" style="text-align: center;"><i class="mdi mdi-close-circle-outline"></i> Data Kosong!</td></tr>')
    	}else {
			  	$('#pagination').show()
    			//console.log(data.length)
    			var html = '';
					var i;
					for(i=0; i<data.length; i++){
						var butDetail = '<a href="javascript:void(0)" id="detailorder" dataIdO="'+data[i].id+'" dataIdN="'+data[i].id_calon_debitur+'"><label class="but badge badge-warning"><i class="mdi mdi-account-box"></i>&nbsp;detail</label></a>&nbsp;'

						var ButPrint = '<a href="'+url+'Report/ReportOrder/'+data[i].id+'" target="_blank"><label class="but badge badge-danger"><i class="mdi mdi-printer"></i>&nbsp;Cetak</label></a>&nbsp;'

						if (session_id_user == data[i].create_by){
								var Buthapus = '<a href="javascript:void(0)" id="hapusorder" data="'+data[i].id+'"><label class="but badge badge-danger"><i class="mdi mdi-delete-variant"></i>&nbsp;Hapus</label></a>&nbsp;'
                var Butedit = '<a href="javascript:void(0)" id="editorder" dataidcalonnasabah="'+data[i].id_calon_debitur+'" dataidorder="'+data[i].id+'"><label class="but badge badge-primary"><i class="mdi mdi-pencil"></i>&nbsp;Edit</label></a>&nbsp;'
						}else{
								var Buthapus = ''
                var Butedit = ''
								var ButPrint = ''
						}

						/*if (session_jabatan == 'ketua') {

								var Butedit = '<a href="javascript:void(0)" id="edirorder" data="'+data[i].id+'"><label class="but badge badge-primary"><i class="mdi mdi-pencil"></i>&nbsp;Edit</label></a>&nbsp;'
						}else{
								var Buthapus = ''
								var Butedit = ''
						}*/

						var butWaiting = ''
						var butOnprogress = ''
						var butCancel = ''

						if (data[i].status_assign == 'ON PROGRESS' && session_jabatan == session_jabatan_js) {
									butCancel = '<a href="javascript:void(0)" id="cancel" data="'+data[i].id+'" status="CANCEL"><label class="but badge badge-danger"><i class="mdi mdi-close-circle-outline"></i>&nbsp;Cancel Order</label></a>'
						}else if (data[i].status_assign == 'WAITING' && session_jabatan == session_jabatan_js){
									butOnprogress = '<a href="javascript:void(0)" id="onprogress" data="'+data[i].id+'" status="ON PROGRESS"><label class="but badge badge-primary"><i class="mdi mdi-check"></i>&nbsp;Progress Order</label></a>&nbsp;'
									butCancel = '<a href="javascript:void(0)" id="cancel" data="'+data[i].id+'" status="CANCEL"><label class="but badge badge-danger"><i class="mdi mdi-close-circle-outline"></i>&nbsp;Cancel Order</label></a>'

						}else if (data[i].status_assign == 'CANCEL' && session_jabatan == session_jabatan_js) {
									butWaiting = '<a href="javascript:void(0)" id="waiting" data="'+data[i].id+'" status="WAITING"><label class="but badge badge-success"><i class="mdi mdi-refresh"></i>&nbsp;Waiting order</label></a>&nbsp;'
						}

						if (data[i].status_assign == 'WAITING') {
								var status = '<label class="badge badge-success">'+data[i].status_assign+'</label>'
						}else if (data[i].status_assign == 'ON PROGRESS') {
								var status = '<label class="badge badge-primary">'+data[i].status_assign+'</label>'
								butWaiting
						}else if (data[i].status_assign == 'CANCEL') {
								var status = '<label class="badge badge-danger">'+data[i].status_assign+'</label>'
						}

						if (data[i].verifikasi == 0) {
								var verifikasi = '<td class="text-danger">Belum verifikasi</td>'
						}else{
								var verifikasi = '<td class="text-primary">Lanjut</td>'
						}

						html += '<tr>'+
											'<td>'+data[i].id+'</td>'+
											'<td>'+data[i].nama_calon_nasabah+'</td>'+
											'<td> Rp. '+FormatRupiah(data[i].plafond)+' </td>'+
											'<td>'+data[i].tenor+' Bulan </td>'+
											'<td class="text-primary">'+data[i].jenis_jaminan+'</td>'+
											verifikasi+
											'<td>'+
											status+
											'</td><td>'+
											/*Buthapus+*/
											butDetail+
                      Butedit+
											ButPrint+
											/*Butedit+*/
											/*butOnprogress+
											butWaiting+
											butCancel*/
											'</td></tr>'
					}

					$('#showOrder').html(html);
    	}
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
