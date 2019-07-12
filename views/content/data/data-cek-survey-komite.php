<div class="row">
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Survey Komite</h4><hr>
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
              <th>Status Survey</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="showSurveyKomite">
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
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript" src="lib/js/formatRupiah.js"></script>
<script type="text/javascript">
		$(document).ready(function () {

		var paramsID1 = $('#paramsID1')
		var paramsID2 = $('#paramsID2')
		var paramsID3 = $('#paramsID3')
		var session_jabatan = $('#session_jabatan').val()
		var session_jabatan_js = CryptoJS.MD5('IT')
		var session_kantor = $('#session_kantor').val()

		var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'
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
            url:url+'home/searchSurveyKomite',
            dataType:'JSON',
            data:data,
            beforeSend: function(){
            	//totalData()
							$('#load_page').val('true');
            	$('#search').prop('disabled',true)
            	$('#showSurveyKomite').html('<tr><td colspan="8" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
            	$('#pagination').hide()
              load()
            },
            success:function(data){
							$('#load_page').val('false');
            	dataSurvey(data)
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
			DataSurveyKomite(0,areakerja,'')
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
			DataSurveyKomite(next,areakerja,'')
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
			DataSurveyKomite(nextPrev,areakerja,'')
		})

		$('#showSurveyKomite').on('click','#sudah',function () {
				var id = $(this).attr('dataIdKc')
				var id_order = $(this).attr('dataIdOrder')
				var ao_to_email = $(this).attr('dataAo')
				var name_to_email = $(this).attr('dataNama')
				var nik_to_email = $(this).attr('dataNik')
				var plafond_to_email = $(this).attr('dataPlafond')
				swal({
					title: "Sudah survey?",
					text: "Tekan OKE untuk melanjutkan ke proses selanjutnnya",
					icon: "info",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						$.ajax({
							type:'POST',
							url:url+'Home/Act_SudahSurvey',
              data:{
                id_kredit_check:id,
                id_order:id_order,
                ao_to_email:ao_to_email,
                name_to_email:name_to_email,
                nik_to_email:nik_to_email,
                plafond_to_email:plafond_to_email
              },
              dataType:'JSON',
							beforeSend:function () {
								$('#load_page').val('true');
								load()
								swal({
									text:'Silahkan tunggu, Sedang memproses data . . .',
									buttons: false,
									closeModal: false,
								})
							},success:function (res) {
								$('#load_page').val('false');
								if (res.msg == 'success') {
									swal({
										text:'Data telah di survey',
										icon:'success',
										timer:2000,
										buttons: false,
									})
									$('#app').load('views/content/data/data-cek-survey-komite.php');
								}else{
									swal({
										title: "Warning!",
										text: "data gagal di verifikasi!",
										icon: "danger"
									});
								}
							},
							error:function (xhr, status, error) {
								$('#load_page').val('false');
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
				});
		})

		$('#showSurveyKomite').on('click','#tolak',function () {
				var id = $(this).attr('dataIdKc')
				var id_order = $(this).attr('dataIdOrder')
				var ao_to_email = $(this).attr('dataAo')
				var name_to_email = $(this).attr('dataNama')
				var nik_to_email = $(this).attr('dataNik')
				var plafond_to_email = $(this).attr('dataPlafond')
        swal("Masukan alasan penolakan:", {
          content: "input",
        })
        .then((value) => {
          if (value) {
            $.ajax({
            type:'POST',
            url:url+'Home/Act_TolakSurvey/',
            data:{
              id_kredit_check:id,
              id_order:id_order,
              ao_to_email:ao_to_email,
              name_to_email:name_to_email,
              nik_to_email:nik_to_email,
              plafond_to_email:plafond_to_email,
              alasan:value
            },
            dataType:'JSON',
            beforeSend:function () {
              $('#load_page').val('true');
              load()
              swal({
                text:'Silahkan tunggu, Sedang memproses data . . .',
                buttons: false,
                closeModal: false,
              })
            },success:function (res) {
              $('#load_page').val('false');
              if (res.msg == 'success') {
                swal({
                  text:'Data telah di tolak',
                  icon:'success',
                  timer:2000,
                  buttons: false,
                })
                $('#app').load('views/content/data/data-cek-survey-komite.php');
              }else{
                swal({
                  title: "Warning!",
                  text: "data gagal di verifikasi!",
                  icon: "danger"
                });
              }
            },
            error:function (xhr, status, error) {
              $('#load_page').val('false');
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
          }else{
            alert('Alasan tidak boleh kosong')
          }
        });
		})

		if (session_jabatan == 'manager' && session_kantor == 01){
			DataSurveyKomite(0,'01','')
		}else{
			if (session_jabatan == 'ketua') {
				DataSurveyKomite(0,'semua','')
			}else{
				DataSurveyKomite(0,session_kantor,'')
			}
		}
		function DataSurveyKomite(startlimit,areakerja,keysearch) {
				$.ajax({
						type:'GET',
            url:url+'Home/SurveyKomite/'+startlimit+'/'+areakerja+'/'+keysearch,
            dataType:'JSON',
            beforeSend: function(){
            	totalData()
							$('#load_page').val('true');
            	$('#search').prop('disabled',true)
            	$('#pagination').hide()
            	$('#showSurveyKomite').html('<tr><td colspan="8" style="text-align: center;"><i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengambil data . . .</td></tr>')
              load()
            },
            success:function(data){
							$('#load_page').val('false');
            	dataSurvey(data)
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
		function dataSurvey(data) {
     	$('#selectAreaKerja').prop('disabled',false)
     	$('#search').prop('disabled',false)
			if (data.amount == 0) {
          $('#pagination').hide()
	  			$('#showSurveyKomite').html('<tr><td colspan="8" style="text-align: center;"><i class="mdi mdi-close-circle-outline"></i> Data Kosong!</td></tr>')
	  	}else {
          $('#pagination').show()
	  			var html = '';
					var i;
					for(i=0; i<data.length; i++){
						/*if (session_jabatan == session_jabatan_js){*/
							if (data[i].flg_survey == 0) {
								var butTolak = '<a href="javascript:void(0)" id="tolak" dataIdKc="'+data[i].id+'" dataIdOrder="'+data[i].id_order+'" dataAo="'+data[i].AO_ORDER+'" dataNama="'+data[i].calon_debitur+'" dataNik="'+data[i].no_ktp+'" dataPlafond="'+FormatRupiah(data[i].plafond)+' - '+data[i].tenor+' Bulan'+'"><label class="but badge badge-danger"><i class="mdi mdi-close-circle"></i>&nbsp;Tolak</label></a>&nbsp;'
								var butSudah = '<a href="javascript:void(0)" id="sudah" dataIdKc="'+data[i].id+'" dataIdOrder="'+data[i].id_order+'" dataAo="'+data[i].AO_ORDER+'" dataNama="'+data[i].calon_debitur+'" dataNik="'+data[i].no_ktp+'" dataPlafond="'+FormatRupiah(data[i].plafond)+' - '+data[i].tenor+' Bulan'+'"><label class="but badge badge-success"><i class="mdi mdi-bookmark-check"></i>&nbsp;Sudah</label></a>&nbsp;'
							}else{
								var butTolak = '-'
								var butSudah = '-'
							}
						/*}else{
							var butTolak = ''
							var butSudah = ''
						}*/

						if (data[i].flg_survey == 0) {
								var verifikasi = '<td class="text-warning"><i class="mdi mdi-timer-sand">Menunggu</i></td>'
						}else if (data[i].flg_survey == 1){
								var verifikasi = '<td class="text-primary"><i class="mdi mdi-check-circle">Lanjut</i></td>'
						}else{
								var verifikasi = '<td class="text-danger"><i class="mdi mdi-close-circle">Ditolak</i></td>'
						}

						html += '<tr>'+
											'<td>'+data[i].id+'</td>'+
											'<td>'+data[i].id_order+'</td>'+
											'<td>'+data[i].calon_debitur+'</td>'+
											'<td>'+data[i].tenor+' Bulan </td>'+
											'<td class="text-defau;t">'+data[i].jenis_debitur+'</td>'+
											'<td class="text-primary">'+data[i].jenis_jaminan+'</td>'+
											verifikasi+
											'<td>'+
											butSudah+butTolak+
											'</td>'+
										'</tr>'
					}

					$('#showSurveyKomite').html(html);
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

		if (session_jabatan == 'ketua'){
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
