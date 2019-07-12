<div class="row">
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Offering Letter</h4><hr>
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
        <table class="table table-hover" style="font-size:12pt;">
          <thead>
            <tr>
              <th>id order</th>
              <th>No Aplikasi</th>
              <th>Calon Nasabah</th>
              <th>Pengajuan plafond</th>
              <th>Rekomendasi AO - CA</th>
              <th>Aksi</th>
            </tr>
          </thead>
					<tbody id="showOffering">
					</tbody>
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

		$('#showOffering').on('click','#detailof',function () {
			var id_order = $(this).attr('dataIdOr')
			paramsID1.val(id_order)
			load()
			$('#tamplate').val('views/content/data/detail-offering.php')
			$('#app').load('views/content/data/detail-offering.php')
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
	            url:url+'home/searchOffering',
	            dataType:'JSON',
	            data:data,
	            beforeSend: function(){
	            	$('#load_page').val('true');
	            	$('#selectAreaKerja').prop('disabled',true)
	            	$('#search').prop('disabled',true)
	            	$('#showOffering').html('<tr><td colspan="7" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
	              $('#pagination').hide()
	              load()
	            },
	            success:function(data){
	            	$('#load_page').val('false');
	            	dataOffering(data)
	            	/*console.log(data.length)
	            	if (data.length != 2 || data.length == 2){
	            		console.log('ya')
	            		$('.next-page').prop('disabled',true).css({'cursor':'not-allowed'})
	            		$('.previous-page').prop('disabled',true).css({'cursor':'not-allowed'})
		            	dataNasabah(data)
	            	}else{
	            		$('.next-page').prop('disabled',false).css({'cursor':'pointer'})
		            	dataNasabah(data)
	            	}*/
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
			OfferingLatter(0,areakerja,'')
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
			OfferingLatter(next,areakerja,'')
		})

		$('.previous-page').click(function() {
			let start = $(this).attr('data')
			let nextPrev = parseInt(start) - 10
			console.log('prev selanjutnnya : '+nextPrev)
			console.log('start : '+start)
			if (nextPrev == 0) {
				$('.previous-page').prop('disabled',true).css({'cursor':'not-allowed'})
			}else{
				$('.previous-page').prop('disabled',false).css({'cursor':'pointer'})
			}

			let areakerja = $(this).attr('areakerja')

			$(this).attr('data',nextPrev)
			$('.next-page').attr('data',nextPrev)
			OfferingLatter(nextPrev,areakerja,'')
		})

		if (session_kantor == 01){
			OfferingLatter(0,'semua','')
		}else{
			OfferingLatter(0,session_kantor,'')
		}
		'use strict'
		function OfferingLatter(startlimit,areakerja,keywsearch) {
				$.ajax({
						type:'GET',
            url:url+'Home/OfferingLatter/'+startlimit+'/'+areakerja+'/'+keywsearch,
            dataType:'JSON',
            beforeSend: function(){
            	totalData()
	            $('#load_page').val('true');
            	$('#selectAreaKerja').prop('disabled',true)
            	$('#search').prop('disabled',true)
            	$('#showOffering').html('<tr><td colspan="7" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
              $('#pagination').hide()
              load()
            },
            success:function(data){
            	//console.log(data)
            	$('#load_page').val('false');
            	dataOffering(data)
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

		function dataOffering(data) {
			$('#selectAreaKerja').prop('disabled',false)
      $('#search').prop('disabled',false)
			if (data.amount == 0) {
					$('#pagination').hide()
    			$('#showOffering').html('<tr><td colspan="7" style="text-align: center;"><i class="mdi mdi-close"></i> Data Kosong !!</td></tr>')
    	}else {
					$('#pagination').show()
    			var html = '';
					var i;
					for(i=0; i<data.length; i++){
							var ButPrint = '<a href="'+url+'Report/ReportOfferingLetter/'+data[i].id_order+'" target="_blank"><label class="but badge badge-danger"><i class="mdi mdi-printer"></i>&nbsp;Cetak</label></a>&nbsp;'

							var butDetail = '<a href="javascript:void(0)" id="detailof" dataIdOr="'+data[i].id_order+'"><label class="but badge badge-warning"><i class="mdi mdi-account-box"></i>&nbsp;detail</label></a>&nbsp;'

							/*var butEdit = '<a href="javascript:void(0)" id="edit" dataIdOr="'+data[i].id_order+'"><label class="but badge badge-primary"><i class="mdi mdi-pencil"></i>&nbsp;Edit</label></a>&nbsp;'*/

							var ButHapus = '<a href="javascript:void(0)" id="hapus" dataIdOr="'+data[i].id_order+'"><label class="but badge badge-danger"><i class="mdi mdi-delete-variant"></i>&nbsp;Hapus</label></a>&nbsp;'
							if (data[i].verifikasi == 0) {
								var verifikasi = '<td class="text-danger">Belum verifikasi</td>'
							}else{
								var verifikasi = '<td class="text-primary">Terverifikasi</td>'
							}

							html += '<tr>'+
											'<td>'+data[i].id_order+'</td>'+
											'<td>'+data[i].nomor+'</td>'+
											'<td>'+data[i].calon_debitur+'</td>'+
											'<td> Rp. '+FormatRupiah(data[i].pengajuan)+' - '+data[i].pengajuan_tenor+' Bulan </td>'+
											'<td> AO : Rp. '+FormatRupiah(data[i].rek_ca)+' - '+data[i].rek_tenor_ca+' Bulan</td>'+
											'<td>'+
													ButPrint+
													butDetail+
											'</td>'
											'</tr>'
					}

					$('#showOffering').html(html);
    	}
		}

		if (session_jabatan == 'teller' || session_jabatan == 'TELLER' || session_jabatan == 'ketua'){
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
				url:url+'home/getAllOffering',
				dataType:'JSON',
				success:function(res) {
					if (res.total_off > 10) {
						let datapage = $('.next-page').attr('data')
						let lastpage = res.total_off - datapage
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

