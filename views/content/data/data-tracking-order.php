<div class="row">
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">TRACKING ORDER</h4><hr>
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
              <th>id Order</th>
              <th>Calon Nasabah</th>
              <th>Plafond</th>
              <th>Tenor</th>
              <th>Jenis Jaminan</th>
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
		var session_jabatan = $('#session_jabatan').val()
		var session_jabatan_js = CryptoJS.MD5('IT')
		var session_kantor = $('#session_kantor').val()

		var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'

		$('#showOrder').on('click','#viewTracking',function () {
				load()
				var id_order = $(this).attr('dataIdO')
				var id_calon_debitur = $(this).attr('dataIdC')
				paramsID1.val(id_order)
				paramsID2.val(id_calon_debitur)
				$('#tamplate').val('views/content/data/view-tracking-order.php')
				$('#app').load('views/content/data/view-tracking-order.php')
		})

		/*SELECT AREA KERJA*/
		$('#opt-areakerja').on('change','#selectAreaKerja',function() {
			let areakerja = $(this).val()
			$('#v_area').val(areakerja)
			$('#search').attr('areakerja',areakerja).val('').css({'border':'1px #e5e5e5 solid'})
			$('.next-page').attr('areakerja',areakerja).attr('data',0).prop('disabled',false).css({'cursor':'pointer'})
			$('.previous-page').prop('disabled',true).css({'cursor':'not-allowed'})
			getTrackingOrder(0,areakerja,'')
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
	            url:url+'home/SearchOrderTracking',
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
	            	dataTracking(data)
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

		/*PAGE*/
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
			getTrackingOrder(next,areakerja,'')
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
			getTrackingOrder(nextPrev,areakerja,'')
		})

		if (session_jabatan == 'manager'){
			$('.previous-page').attr('areakerja',session_kantor)
			$('.next-page').attr('areakerja',session_kantor)
			getTrackingOrder(0,session_kantor,'')
		}else{
			if (session_jabatan == 'ketua') {
				getTrackingOrder(0,'semua','')
			}else{
				getTrackingOrder(0,session_kantor,'')
			}
		}

		'use strict'
		function getTrackingOrder(startlimit,areakerja,keyword) {
			$.ajax({
				type:'GET',
        url:url+'Home/OrderTracking/'+startlimit+'/'+areakerja+'/'+keyword,
        dataType:'JSON',
        beforeSend: function(){
          totalData()
         	$('#load_page').val('true');
        	$('#selectAreaKerja').prop('disabled',true)
        	$('#search').prop('disabled',true)
        	$('#showOrder').html('<tr><td colspan="7" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
        	$('#pagination').hide()
          load()
        },
        success:function(data){
        	console.log(data)
         	$('#load_page').val('false');
        	dataTracking(data)
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
				        icon: "error",
				        type: "error"
				    });
        	}
        }
			})
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

		function totalData() {
			$.ajax({
				type:'GET',
				url:url+'home/getTotalAllTrackingOrder',
				dataType:'JSON',
				success:function(res) {
					if (res.total_tracking > 10) {
						let datapage = $('.next-page').attr('data')
						let lastpage = res.total_tracking - datapage
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
		function dataTracking(data) {
    	$('#selectAreaKerja').prop('disabled',false)
    	$('#search').prop('disabled',false)
			if (data.amount == 0) {
       	$('#pagination').hide()
    		$('#showOrder').html('<tr><td colspan="7" style="text-align: center;"><i class="mdi mdi-close-circle-outline"></i> Data Kosong!</td></tr>')
    	}else {
	       	$('#pagination').show()
    			var html = '';
					var i;
					for(i=0; i<data.length; i++){

						var butViewTracking = '<a href="javascript:void(0)" id="viewTracking" dataIdO="'+data[i].id+'" dataIdC="'+data[i].id_calon_debitur+'"><label class="but badge badge-success"><i class="mdi mdi-eye"></i>&nbsp;View Tracking</label></a>&nbsp;'

						if (data[i].status_assign == 'WAITING') {
								var status = '<label class="badge badge-success">'+data[i].status_assign+'</label>'
						}else if (data[i].status_assign == 'ON PROGRESS') {
								var status = '<label class="badge badge-primary">'+data[i].status_assign+'</label>'
						}else if (data[i].status_assign == 'CANCEL') {
								var status = '<label class="badge badge-danger">'+data[i].status_assign+'</label>'
						}else{
								var status = 'ga beres hub IT'
						}

						html += '<tr>'+
											'<td>'+data[i].id+'</td>'+
											'<td>'+data[i].nama_calon_nasabah+'</td>'+
											'<td> Rp. '+FormatRupiah(data[i].plafond)+'</td>'+
											'<td>'+data[i].tenor+' Bulan </td>'+
											'<td class="text-primary">'+data[i].jenis_jaminan+'</td>'+
											'<td>'+status+'</td>'+
											'<td>'+butViewTracking+'</td>'+
										'</tr>'
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

