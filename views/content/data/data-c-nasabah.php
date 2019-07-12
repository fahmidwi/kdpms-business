<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Data Calon Nasabah</h4><hr>
				<p class="card-description">
					<a href="javascript:void(0)" id="add-calon-nasabah">Tambah data</a>
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
				</div>
				<div class="table-responsive">
					<table class="table table-hover" id="tableNasabah">
						<thead>
							<tr>
								<th></th>
								<th>No KTP</th>
								<th>Nama Lengkap</th>
								<th>Nama Ibu kandung</th>
								<th>AO</th>
								<th>Area kerja (Kantor)</th>
								<!-- <th>Status</th> -->
								<th>aksi</th>
							</tr>
						</thead>
						<tbody id="showDataNasabah">
						</tbody>
					</table>
				</div><br>
				<nav id="pagination" aria-label="Page navigation example" style="float:right;">
				  <ul class="pagination">
				    <li class="page-item"><button class="page-link previous-page" areakerja="semua" data="0">Previous</button></li>&nbsp;
				    <li class="page-item"><button class="page-link next-page" areakerja="semua" data="0">Next</button></li>
				  </ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript">
$(document).ready(function () {

		var paramsID1 = $('#paramsID1')
		var session_jabatan = $('#session_jabatan').val()
		var session_kantor = $('#session_kantor').val()
		var session_id_user = $('#session_id_user').val()
		var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'

		$('#add-calon-nasabah').click(function () {
        $('#load_page').val('true');
				load()
				$('#tamplate').val('views/content/form/add-data-c-nasabah.php')
				$('#app').load('views/content/form/add-data-c-nasabah.php')
		})

		$('#showDataNasabah').on('click','#editcalonnasabah',function () {
        $('#load_page').val('true');
				load()
				var id_calon_debitur = $(this).attr('data')
				paramsID1.val(id_calon_debitur);
				$('#tamplate').val('views/content/form/edit-data-c-nasabah.php')
				$('#app').load('views/content/form/edit-data-c-nasabah.php')
		})

		$('#showDataNasabah').on('click','#detailcalonnasabah',function () {
        $('#load_page').val('true');
				load()
				var id_calon_debitur = $(this).attr('data')
				paramsID1.val(id_calon_debitur);
				$('#tamplate').val('views/content/data/detail-c-nasabah.php')
				$('#app').load('views/content/data/detail-c-nasabah.php')
		})

		$('#showDataNasabah').on('click','#hapuscalonnasabah',function () {
				var id_calon_debitur = $(this).attr('data')
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
				    	url:url+'Home/delete_nasabah/'+id_calon_debitur,
				    	dataType:'JSON',
				    	beforeSend:function () {
				    		swal({
				    			text:'Sedang menghapus data . . .',
				  				buttons: false,
				  				closeModal: false,
				    		})
				    	},
				    	success:function (data) {
				    		swal({
				    			text:'Data terhapus',
				    			icon:'success',
				    			timer:1000,
								  buttons: false,
				    		})
								getDataNasabah()
				    		console.log(data);
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
				  } else {
				    swal({
		    			text:'Data aman',
		    			timer:2000,
						  buttons: false
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
				console.log(data)
				if ($(this).val() == '') {
					$(this).css({'border':'1px red solid'})
				}else{
					$(this).css({'border':'1px #e5e5e5 solid'})
					$.ajax({
							type:'POST',
	            url:url+'home/seacrhNasabah',
	            dataType:'JSON',
	            data:data,
	            beforeSend: function(){
	            	//totalData()
								$('#load_page').val('true');
	            	$('#search').prop('disabled',true)
	            	$('#showDataNasabah').html('<tr><td colspan="7" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
	            	$('#pagination').hide()
	              load()
	            },
	            success:function(data){
								$('#load_page').val('false');
	            	dataNasabah(data)
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
			$('.previous-page').attr('areakerja',areakerja).prop('disabled',true).css({'cursor':'not-allowed'})
			getDataNasabah(0,areakerja,'')
		})

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
			getDataNasabah(next,areakerja,'')
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
			getDataNasabah(nextPrev,areakerja,'')
		})

		if (session_jabatan == 'manager'){
			$('.previous-page').attr('areakerja',session_kantor)
			$('.next-page').attr('areakerja',session_kantor)
			getDataNasabah(0,session_kantor,'')
		}else{
			if (session_jabatan == 'ketua') {
				getDataNasabah(0,'semua','')
			}else{
				getDataNasabah(0,session_kantor,'')
			}
		}

		function getDataNasabah(limit,areakerja,keysearch) {
			$.ajax({
					type:'GET',
          url:url+'home/data_nasabah/'+limit+'/'+areakerja+'/'+keysearch,
          dataType:'JSON',
          beforeSend: function(){
          	totalData()
						$('#load_page').val('true');
          	$('#search').prop('disabled',true)
          	$('#showDataNasabah').html('<tr><td colspan="7" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
          	$('#pagination').hide()
            load()
          },
          success:function(data){
						$('#load_page').val('false');
          	dataNasabah(data)
          	if (data.data.length < 10) {
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

		function totalData() {
			$.ajax({
				type:'GET',
				url:url+'home/getTotalNasabah',
				dataType:'JSON',
				success:function(res) {
					if (res.total_nasabah > 10) {
						let datapage = $('.next-page').attr('data')
						let lastpage = res.total_nasabah - datapage

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

		function dataNasabah(data) {
			$('#search').prop('disabled',false)
			if (data.amount == 0) {
		    	$('#pagination').hide()
					$('#showDataNasabah').html('<tr><td colspan="7" style="text-align: center;"><i class="mdi mdi-close-circle-outline"></i> Data Kosong!</td></tr>')
			}else {
			  	$('#pagination').show()
					var html = '';
					var i;
					var data = data.data
					for(i=0; i<data.length; i++){
						/*if (session_jabatan == 'manager') {*/
								var Buthapus = '<a href="javascript:void(0)" id="hapuscalonnasabah" data="'+data[i].id_calon_debitur+'"><label class="but badge badge-danger"><i class="mdi mdi-delete-variant"></i>&nbsp;Hapus</label></a>&nbsp;'
								if (session_id_user == data[i].create_by){
									var Butedit = '<a href="javascript:void(0)" id="editcalonnasabah" data="'+data[i].id_calon_debitur+'"><label class="but badge badge-primary"><i class="mdi mdi-pencil"></i>&nbsp;Edit</label></a>&nbsp;'
								}else{
									Butedit = ''
								}
								var butDetail = '<a href="javascript:void(0)" id="detailcalonnasabah" data="'+data[i].id_calon_debitur+'"><label class="but badge badge-warning"><i class="mdi mdi-account-box"></i>&nbsp;detail</label></a>&nbsp;'

								var ButPrint = '<a href="'+url+'Report/ReportCalonNasabah/'+data[i].id_calon_debitur+'" target="_blank"><label class="but badge badge-danger"><i class="mdi mdi-printer"></i>&nbsp;Cetak</label></a>&nbsp;'

						/*}else{
								var Buthapus = ''
								var Butedit = ''
								var butDetail = ''
						}*/

						if (data[i].verifikasi == 0) {
								var verifikasi = '<td class="text-danger">Belum verifikasi</td>'
						}else{
								var verifikasi = '<td class="text-primary">Lanjut</td>'
						}


						html += '<tr>'+
											'<td>'+
												'<a href="javascript:void(0)" id="butinfo'+data[i].id_calon_debitur+'" selector="#info'+data[i].id_calon_debitur+'" title="lihat info debitur" id_deb="'+data[i].id_calon_debitur+'"><i class="mdi mdi-plus"></i></a>'+
												'<a href="javascript:void(0)" id="closeinfo'+data[i].id_calon_debitur+'" selector="#info'+data[i].id_calon_debitur+'" title="tutup info debitur" id_deb="'+data[i].id_calon_debitur+'" style="display:none;"><i class="mdi mdi-chevron-up"></i></a>'+
											'</td>'+
											'<td class="text-primary">'+data[i].no_ktp+'</td>'+
											'<td>'+data[i].nama_lengkap+'</td>'+
											'<td>'+data[i].nama_gadis_ibu_kandung+'</td>'+
											'<td>'+data[i].AO+'</td>'+
											'<td>'+data[i].nama_area_kerja+'</td>'+
											/*verifikasi+*/
											'<td>'+
											Butedit+
											/*Buthapus+*/
											butDetail+
											ButPrint+
											'</td>'+
										'</tr>'

						html += '<tr id="info'+data[i].id_calon_debitur+'" style="display:none;background:#f3f5f6;">'+
												'<td colspan="7" style="text-align: left;">'+

														'pasangan : <np id="wadahpasangan'+data[i].id_calon_debitur+'"></np>&nbsp;&nbsp;&nbsp;'+
														/*'<a href="javascript:void(0)" id="tambahpasangan" data="'+data[i].id_calon_debitur+'"><label class="but badge badge-primary"><i class="mdi mdi-plus"></i></label></a><br><br>'+*/

														'penjamin : <np id="wadahpenjamin'+data[i].id_calon_debitur+'"></np>&nbsp;&nbsp;&nbsp;'+
														/*'<a href="javascript:void(0)" id="tambahpenjamin" data="'+data[i].id_calon_debitur+'"><label class="but badge badge-primary"><i class="mdi mdi-plus"></i></label></a><br>'+*/

												'</td>'+
											'</tr>'

							$('#showDataNasabah').on('click','#namapasangan'+data[i].id_calon_debitur,function () {
									var id = $(this).attr('data')
									paramsID1.val(id)
									load()
									$('#app').load('views/content/form/edit-pasangan-cn.php')
							})

							$('#showDataNasabah').on('click','#namapenjamin'+data[i].id_calon_debitur,function () {
									var id = $(this).attr('data')
									paramsID1.val(id)
									load()
									$('#app').load('views/content/form/edit-penjamin-cn.php')
							})

							$('#showDataNasabah').on('click','#butinfo'+data[i].id_calon_debitur,function () {
									var selector = $(this).attr('selector')
									var id_calon_debitur = $(this).attr('id_deb')
									$(''+selector+'').show('slow')
									$(this).hide()
									$('#closeinfo'+id_calon_debitur).show()
									getPasanganDebitur(id_calon_debitur)
									getPenjaminDebitur(id_calon_debitur)
							})

							$('#showDataNasabah').on('click','#closeinfo'+data[i].id_calon_debitur,function () {
									var selector = $(this).attr('selector')
									var id_calon_debitur = $(this).attr('id_deb')
									$(''+selector+'').hide('slow')
									$(this).hide()
									$('#butinfo'+id_calon_debitur).show()
							})
					}

					$('#showDataNasabah').html(html);
			}
		}

		function getPasanganDebitur (id_calon_debitur) {
			$.ajax({
				type:'GET',
        url:url+'Home/get_detail_pasangan/'+id_calon_debitur,
        dataType:'JSON',
       	beforeSend:function(){
       		$('#wadahpasangan'+id_calon_debitur).html(loading)
       	},
        success:function(data){
        	var html = ''
        	if (data.msg == 'Data tidak ditemukan') {
        			$('#wadahpasangan'+id_calon_debitur).html('-')
        	}else{
        		$.each(data,function (v,k) {
        			var butEditP = '<a href="javascript:void(0)" class="but badge" id="namapasangan'+k.id_calon_debitur+'" data="'+k.id_calon_debitur+'" title="Edit Pasangan"><i class="mdi mdi-pencil"></i></a>'

        			html += '<np>'+k.nama_lengkap+butEditP+'</np>'+
        					'&nbsp;'
        		})
       			$('#wadahpasangan'+id_calon_debitur).html(html)
        	}
        }
			})
		}

		function getPenjaminDebitur (id_calon_debitur) {
			$.ajax({
				type:'GET',
        url:url+'Home/get_detail_penjamin/'+id_calon_debitur,
        dataType:'JSON',
       	beforeSend:function(){
       		$('#wadahpenjamin'+id_calon_debitur).html(loading)
       	},
        success:function(data){
        	var html = ''
        	if (data.msg == 'Data tidak ditemukan') {
        			$('#wadahpenjamin'+id_calon_debitur).html('-')
        	}else{
        		$.each(data,function (v,k) {
        			var butEditP = '<a href="javascript:void(0)" class="but badge" id="namapenjamin'+k.id_calon_debitur+'" data="'+k.id_calon_debitur+'" title="Edit Penjamin"><i class="mdi mdi-pencil"></i></a>'

        			html += '<np>'+k.nama_lengkap+butEditP+'</np>'+
        					'&nbsp;'
        		})
       			$('#wadahpenjamin'+id_calon_debitur).html(html)
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
