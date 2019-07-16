<div class="row">
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Memo kredit CA</h4><hr>
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
						<input type="text" class="form-control" name="keyword" id="search" placeholder="Cari Berdasarkan Nama Lengkap. . ." areakerja="semua">
						</form>
				  </div>
				</div>
			</div><br>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID Order</th>
              <th>NO Aplikasi</th>
              <th>Calon Debitur</th>
              <th>Jaminan utama</th>
              <th>Sumber informasi</th>
              <th>Aksi</th>
            </tr>
          </thead>
					<tbody id="showMemoCa">
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
            <h4 class="modal-title" id="exampleModalLongTitle">Memo Ao siap Memo Ca</h4>
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
										              <th>No Aplikasi</th>
										              <th>Calon Nasabah</th>
										              <th>Plafond Kredit</th>
										              <th>Tenor</th>
              										<th>Jaminan utama</th>
										            </tr>
										          </thead>
										          <tbody id="showMemoAo">
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
<script type="text/javascript" srrc="lib/js/formatRupiah.js"></script>
<script type="text/javascript" srrc="lib/js/url.js"></script>
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

		$('#showMemoAo').on('click','#MemoAoKreditCa',function () {
				var id_order = $(this).attr('dataIdO')
				var id_calon_debitur = $(this).attr('dataIdN')
				var id_kredit_checking = $(this).attr('dataIdKC')
				var jaminan = $(this).attr('jaminan')
				paramsID1.val(id_order)
				paramsID2.val(id_calon_debitur)
				paramsID3.val(id_kredit_checking)
				$('#modal').modal('toggle')
				if (jaminan == 'SERTIFIKAT') {
					 setTimeout(function () {
					 	load()
					 	$('#tamplate').val('views/content/form/add-memo-kredit-ca.php')
					 	$('#app').load('views/content/form/add-memo-kredit-ca.php')
					 },500)
					//checkOrder(id_order,jaminan)
				}else if (jaminan == 'BPKB'){
					//	alert('ANGUNAN KENDARAAN# FITUR SEDANG DALAM PROSES PERBAIKAN')
					load()
					 setTimeout(function () {
					 	load()
					 	$('#tamplate').val('views/content/form/add-memo-kredit-ca-kendaraan.php')
					 	$('#app').load('views/content/form/add-memo-kredit-ca-kendaraan.php')
					 },500)
					//checkOrder(id_order,jaminan)
				}
		})
		function checkOrder (id_order,jaminan) {
			$.ajax({
				type:'GET',
				url:url+'Home/checkOrderInMemoCa/'+id_order,
				dataType:'JSON',
				beforeSend:function () {
					load()
				},
				success:function (res) {
					if (res.amount == 1) {
							swal({
				        title:'Info!',
				        text:'Data Memo Ao dengan id order '+id_order+' sudah memiliki data Memo Ca.',
				        icon: "info"
					    });
					}else{
						if (jaminan == 'SERTIFIKAT') {
							setTimeout(function () {
								load()
								$('#tamplate').val('views/content/form/add-memo-kredit-ca.php')
								$('#app').load('views/content/form/add-memo-kredit-ca.php')
							},500)
						}else if (jaminan == 'BPKB'){
							//	alert('ANGUNAN KENDARAAN# FITUR SEDANG DALAM PROSES PERBAIKAN')
							load()
							setTimeout(function () {
								load()
								$('#tamplate').val('views/content/form/add-memo-kredit-ca-kendaraan.php')
								$('#app').load('views/content/form/add-memo-kredit-ca-kendaraan.php')
							},500)
						}
					}
				}
			})
		}

		MEmoAo_readyCa()
		function MEmoAo_readyCa() {
				$.ajax({
						type:'GET',
            url:url+'Home/MemoAoReadyCA',
            dataType:'JSON',
            beforeSend: function(){
            	$('#showMemoAo').html('<tr><td colspan="6" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
              load()
            },
            success:function(data){
            	console.log(data)
            	if (data.amount == 0) {
            			$('#showMemoAo').html('<tr><td colspan="6" style="text-align: center;"><i class="mdi mdi-close"></i> Data Kosong !!</td></tr>')
            	}else {
            			var html = '';
									var i;
									for(i=0; i<data.length; i++){
											html += '<tr href="#" style="cursor: pointer;" id="MemoAoKreditCa" dataIdKC="'+data[i].id_kredit_checking+'" dataIdO="'+data[i].id_order+'" dataIdN="'+data[i].id_calon_debitur+'" jaminan="'+data[i].nama_jenis_jaminan+'">'+
															'<td>'+data[i].id_order+'</td>'+
															'<td>'+data[i].no_aplikasi+'</td>'+
															'<td>'+data[i].nama_calon_debitur+'</td>'+
															'<td> Rp.'+FormatRupiah(data[i].plafon_kredit)+'</td>'+
															'<td>'+data[i].tenor+' Bulan</td>'+
															'<td>'+data[i].nama_jenis_jaminan+'</td>'+
															'</tr>'
									}

									$('#showMemoAo').html(html);
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

		$('#showMemoCa').on('click','#detailmemoca',function () {
			var id_order = $(this).attr('dataIdOr')
			var id_calon_debitur = $(this).attr('dataIdCdeb')
			var jaminan = $(this).attr('jaminan')
			paramsID1.val(id_order)
			paramsID2.val(id_calon_debitur)

			//$('#tamplate').val('views/content/data/detail-memo-ca.php')
			//$('#app').load('views/content/data/detail-memo-ca.php')
			if (jaminan == 'SERTIFIKAT') {
				load()
				$('#tamplate').val('views/content/data/detail-memo-ca.php')
				$('#app').load('views/content/data/detail-memo-ca.php')
			}else if (jaminan == 'BPKB') {
				$('#tamplate').val('views/content/data/detail-memo-ca-kendaraan.php')
				$('#app').load('views/content/data/detail-memo-ca-kendaraan.php')
			}
		})

		$('#showMemoCa').on('click','#edit',function () {
			var id_order = $(this).attr('dataIdOr')
			var id_calon_debitur = $(this).attr('dataIdCdeb')
			var jaminan = $(this).attr('jaminan')

			paramsID1.val(id_order)
			paramsID2.val(id_calon_debitur)
			if (jaminan == 'SERTIFIKAT') {
				load()
				$('#tamplate').val('views/content/form/edit-memo-kredit-ca.php')
				$('#app').load('views/content/form/edit-memo-kredit-ca.php')
			}else if (jaminan == 'BPKB') {
				//alert('FITUR BELUM ADA')
        load()
				$('#tamplate').val('views/content/form/edit-memo-kredit-ca-kendaraan.php')
				$('#app').load('views/content/form/edit-memo-kredit-ca-kendaraan.php')
			}
		})

		/*SEARCH*/
		$('#search').keydown(function (e) {
			if (e.keyCode == 13) {
				e.preventDefault()
				$('.next-page').attr('data',0)
				$('.previous-page').prop('disabled',true).css({'cursor':'not-allowed'})
				let data = $('#form-search').serialize()
				console.log(data)
				if ($(this).val() == '') {
					$(this).css({'border':'1px red solid'})
				}else{
					$(this).css({'border':'1px #e5e5e5 solid'})
					$.ajax({
							type:'POST',
	            url:url+'home/searchCa',
	            dataType:'JSON',
	            data:data,
	            beforeSend: function(){
	            	//totalData()
								$('#load_page').val('true');
	            	$('#search').prop('disabled',true)
	            	$('#showMemoCa').html('<tr><td colspan="6" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
	            	$('#pagination').hide()
	              load()
	            },
	            success:function(data){
								$('#load_page').val('false');
	            	dataCa(data)
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
			get_DataMemoCA(0,areakerja,'')
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
			get_DataMemoCA(next,areakerja,'')
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
			get_DataMemoCA(nextPrev,areakerja,'')
		})

		if (session_jabatan == 'manager'){
			$('.previous-page').attr('areakerja',session_kantor)
			$('.next-page').attr('areakerja',session_kantor)
			get_DataMemoCA(0,session_kantor,'')
		}else{
			if (session_jabatan == 'ketua') {
				get_DataMemoCA(0,'semua','')
			}else{
				get_DataMemoCA(0,session_kantor,'')
			}
		}

		'use strict'
		function get_DataMemoCA(startlimit,areakerja,keysearch) {
				$.ajax({
						type:'GET',
            url:url+'Home/get_DataMemoCA/'+startlimit+'/'+areakerja+'/'+keysearch,
            dataType:'JSON',
            beforeSend: function(){
            	totalData()
							$('#load_page').val('true');
            	$('#search').prop('disabled',true)
            	$('#showMemoCa').html('<tr><td colspan="6" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
            	$('#pagination').hide()
              load()
            },
            success:function(data){
							$('#load_page').val('false');
            	dataCa(data)
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

		function dataCa(data) {
			$('#selectAreaKerja').prop('disabled',false)
      $('#search').prop('disabled',false)
			if (data.amount == 0) {
          $('#pagination').hide()
    			$('#showMemoCa').html('<tr><td colspan="6" style="text-align: center;"><i class="mdi mdi-close"></i> Data Kosong !!</td></tr>')
    	}else {
          $('#pagination').show()
    			var html = '';
					var i;
					console.log(data)
					for(i=0; i<data.length; i++){
							var ButPrint = '<a href="'+url+'Report/ReportMemoCA/'+data[i].id_order+'/'+data[i].nama_jenis_jaminan+'" target="_blank"><label class="but badge badge-danger"><i class="mdi mdi-printer"></i>&nbsp;Cetak</label></a>&nbsp;'

							var butDetail = '<a href="javascript:void(0)" id="detailmemoca" dataIdOr="'+data[i].id_order+'" dataIdCdeb="'+data[i].id_calon_debitur+'" jaminan="'+data[i].nama_jenis_jaminan+'"><label class="but badge badge-warning"><i class="mdi mdi-account-box"></i>&nbsp;detail</label></a>&nbsp;'

						if (session_id_user == data[i].create_by){
							var butEdit = '<a href="javascript:void(0)" id="edit" dataIdOr="'+data[i].id_order+'" dataIdCdeb="'+data[i].id_calon_debitur+'" jaminan="'+data[i].nama_jenis_jaminan+'"><label class="but badge badge-primary"><i class="mdi mdi-pencil"></i>&nbsp;Edit</label></a>&nbsp;'
						}else{
							var butEdit = ''
						}

							var ButHapus = '<a href="javascript:void(0)" id="hapus" dataIdOr="'+data[i].id_order+'"><label class="but badge badge-danger"><i class="mdi mdi-delete-variant"></i>&nbsp;Hapus</label></a>&nbsp;'
							if (data[i].verifikasi == 0) {
								var verifikasi = '<td class="text-danger">Belum verifikasi</td>'
							}else{
								var verifikasi = '<td class="text-primary">Terverifikasi</td>'
							}

							html += '<tr>'+
											'<td>'+data[i].id_order+'</td>'+
											'<td>'+data[i].no_aplikasi+'</td>'+
											'<td>'+data[i].calon_debitur+'</td>'+
											'<td>'+data[i].nama_jenis_jaminan+'</td>'+
											'<td>'+data[i].desk_sumber_informasi+'</td>'+
											'<td>'+
												ButPrint+
												butDetail+
												butEdit+
											'</td>'+
											'</tr>'
					}

					$('#showMemoCa').html(html);
    	}
		}

		if (session_jabatan == 'ketua') {
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
				url:url+'home/getTotalAllCa',
				dataType:'JSON',
				success:function(res) {
					if (res.total_all_ca > 10) {
						let datapage = $('.next-page').attr('data')
						let lastpage = res.total_all_ca - datapage
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
