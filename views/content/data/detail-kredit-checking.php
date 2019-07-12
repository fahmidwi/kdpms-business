<div class="row">
	<div class="col-lg-12">
		<?php include '../component/header-back.php'; ?>
		<?php include '../component/info-detail-cnasabah.php'; ?>
		<?php include '../component/info-detail-order.php'; ?>
		<?php include '../component/info-detail-kreditc.php'; ?>
	</div>
</div>
<script type="text/javascript" src="lib/js/changedate.js"></script>
<script type="text/javascript" src="lib/js/formatRupiah.js"></script>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'
	var id_kredit_check = $('#paramsID1').val()
	var id_order = $('#paramsID2').val()
	var id_calon_debitur = $('#paramsID3').val()
	var session_jabatan = $('#session_jabatan').val()

	$('#load_page').val('false');
	$('#title-header').html('Detail Kredit Checking')

	$('#backcn').click(function () {
		$('#load_page').val('false');
		load()
		$('#tamplate').val('views/content/data/data-kredit-checking.php');
		$('#app').load('views/content/data/data-kredit-checking.php');
	})

	$('.Buttoggle').click(function () {
		var from = $(this).attr('from')
		if (from == 'cnasabah') {
			$('#conCnasabah').toggle('slow')
		}else if (from == 'order') {
			$('#conOrder').toggle('slow')
		}else if (from == 'kredit') {
			$('#conKredit').toggle('slow')
		}
	})

	$('#data_pasangan').hide()
	$('#data_penjamin').hide()
	$('#tab_data_calon').addClass('link-active')

	$('#tab_data_calon').click(function (argument) {
		$(this).addClass('link-active')
		$('#tab_data_pasangan').removeClass('link-active')
		$('#tab_data_penjamin').removeClass('link-active')
		$('#conCnasabah').show()
		$('#data_c_nasabah').show()
		$('#data_pasangan').hide()
		$('#data_penjamin').hide()
	})

	$('#tab_data_pasangan').click(function (argument) {
		$(this).addClass('link-active')
		$('#tab_data_calon').removeClass('link-active')
		$('#tab_data_penjamin').removeClass('link-active')
		$('#conCnasabah').show()
		$('#data_pasangan').show()
		$('#data_penjamin').hide()
		$('#data_c_nasabah').hide()
	})

	$('#tab_data_penjamin').click(function (argument) {
		$(this).addClass('link-active')
		$('#tab_data_calon').removeClass('link-active')
		$('#tab_data_pasangan').removeClass('link-active')
		$('#conCnasabah').show()
		$('#data_penjamin').show()
		$('#data_pasangan').hide()
		$('#data_c_nasabah').hide()
	})

	showDetail(id_calon_debitur)
	showDetailPasangan(id_calon_debitur)
	showDetailPenjamin(id_calon_debitur)
	function showDetail(id_calon_debitur) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detail_calon_nasabah/'+id_calon_debitur,
			dataType:'JSON',
			beforeSend:function () {
				$('#noktp').html(loading)
				$('#nama_lengkap').html(loading)
				$('#nibk').html(loading)
				$('#alamat').html(loading)
			},
			success:function (data) {
				$.each(data,function (key,val) {
					$('#noktp').html('<p>'+val.no_ktp+'</p>')
					$('#nama_lengkap').html('<p>'+val.nama_lengkap+'</p>')
					$('#nibk').html('<p>'+val.nama_gadis_ibu_kandung+'</p>')
					$('#alamat').html('<p>'+val.alamat+', RT.'+val.rt+' RW.'+val.rw+', KELURAHAN.'+val.Kelurahan+', KECAMATAN.'+val.Kecamatan+', '+val.Kotakab+', PROVINSI '+val.propinsi+'</p>')
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

	function showDetailPasangan(id_calon_debitur) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detail_pasangan/'+id_calon_debitur,
			dataType:'JSON',
			success:function (data) {
				if (data.msg == 'Data tidak ditemukan') {
					$('#data_pasangan').html('<v class="text-danger"><i class="mdi mdi-account-alert"></i> Tidak memiliki data pasangan</v>')
				}else{
					$.each(data,function (key,val) {
						$('#noktp_pasangan').html('<p>'+val.no_ktp+'</p>')
						$('#nama_lengkap_pasangan').html('<p>'+val.nama_lengkap+'</p>')
						$('#nibk_pasangan').html('<p>'+val.nama_gadis_ibu_kandung+'</p>')
						$('#alamat_pasangan').html('<p>'+val.alamat+', RT '+val.rt+' RW '+val.rw+', KELURAHAN '+val.Kelurahan+', KECAMATAN '+val.Kecamatan+', '+val.Kotakab+', PROVINSI '+val.propinsi+'</p>')
					})
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

	function showDetailPenjamin(id_calon_debitur) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detail_penjamin/'+id_calon_debitur,
			dataType:'JSON',
			success:function (data) {
				if (data.msg == 'Data tidak ditemukan') {
					$('#data_penjamin').html('<v class="text-danger"><i class="mdi mdi-account-alert"></i> Tidak memiliki data penjamin</v>')
				}else{
					$.each(data,function (key,val) {
						$('#noktp_penjamin').html('<p>'+val.no_ktp+'</p>')
						$('#nama_lengkap_penjamin').html('<p>'+val.nama_lengkap+'</p>')
						$('#nibk_penjamin').html('<p>'+val.nama_gadis_ibu_kandung+'</p>')
						$('#alamat_penjamin').html('<p>'+val.alamat+', RT '+val.rt+' RW '+val.rw+', KELURAHAN '+val.Kelurahan+', KECAMATAN '+val.Kecamatan+', '+val.Kotakab+', PROVINSI '+val.propinsi+'</p>')
					})
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

	var ao_to_email = ''
	var name_to_email = ''
	var nik_to_email = ''
	var plafond_to_email = ''

	get_detail_order(id_order)
	function get_detail_order(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detail_order/'+id,
			dataType:'JSON',
			beforeSend:function () {
				$('id').html(loading)
				$('v').html(loading)
				$('#status_assign').html(loading)
				$('textarea').html('Sedang mengambil . . . . .')
				$('#nama_calon_nasabah').html(loading)
				$('#ao').html(loading)
				$('#kantor').html(loading)
				$('#tenor').html(loading)
				$('#jenis_pinjaman').html(loading)
				$('#tujuan_penggunaan').html(loading)
				$('#cara_pembayaran').html(loading)
				$('#mitra').html(loading)
				$('#jenis_jaminan').html(loading)
				$('#sumber_aplikasi').html(loading)
				$('#keterangan_order').html(loading)
				$('#but').html(loading)
			},
			success:function (res) {
				$('v').html('')
				$.each(res,function (v,k) {
					if (k.verifikasi == 0) {
						$('#veriforder').addClass('text-danger')
						$('#verifby').addClass('text-danger')
						$('#tglverif').addClass('text-danger')
						verifikasi = 'belum terverifikasi'
						verifikasi_by = 'belum terverifikasi'
						verifikasi_date = 'belum terverifikasi'
						$('#but').html('<a href="javascript:void(0)" class="btn btn-success" style="width: 100%" id="buttonVerifOrder"><i class="mdi mdi-verified"></i>&nbsp;Verifikasi Order</a>')
					}else{
						$('#but').html('')
						$('#veriforder').addClass('text-primary')
						$('#verifby').addClass('text-primary')
						$('#tglverif').removeClass('text-danger')
						verifikasi = 'Terverifikasi'
						verifikasi_by = k.pelaku_verifikasi
						verifikasi_date = changeDate(k.verifikasi_date)
					}

					if (k.status_assign == 'WAITING') {
						status_assign = '<label class="badge badge-success">'+k.status_assign+'&nbsp;&nbsp;('+changeDate(k.tgl_assign)+')</label>'

					}else if (k.status_assign == 'ON PROGRESS') {
						status_assign = '<label class="badge badge-primary">'+k.status_assign+'&nbsp;&nbsp;('+changeDate(k.tgl_assign)+')</label>'

					}else if (k.status_assign == 'CANCEL') {

						status_assign = '<label class="badge badge-danger">'+k.status_assign+'&nbsp;&nbsp;('+changeDate(k.tgl_assign)+')</label>'
					}
					ao_to_email = k.AO_ORDER
					name_to_email = k.nama_calon_nasabah
					nik_to_email = k.noktp
					plafond_to_email = FormatRupiah(k.plafond)+' - '+k.tenor+' Bulan'
					$('id').html(k.id)
					$('#veriforder').html("&nbsp;"+verifikasi)
					$('#verifby').html(verifikasi_by)
					$('#tglverif').html("&nbsp;"+verifikasi_date)
					$('#status_assign').html(status_assign)
					$('#keterangan_assign').html(k.keterangan_assign)
					$('#nama_calon_nasabah').html('<p>'+k.nama_calon_nasabah+' - '+k.noktp+'</p>')
					$('#ao').html('<p>'+k.AO_ORDER+'</p>')
					$('#kantor').html('<p>'+k.nama_area_kerja+'</p>')
					$('#plafond').html('<p> Rp.'+FormatRupiah(k.plafond)+'</p>')
					$('#tenor').html('<p>'+k.tenor+' bulan</p>')
					$('#jenis_pinjaman').html('<p>'+k.nama_jenis_pinjaman+'</p>')
					$('#tujuan_penggunaan').html('<p>'+k.tujuan_penggunaan+'</p>')
					$('#cara_pembayaran').html('<p>'+k.cara_pembayaran+'</p>')
					$('#mitra').html('<p>'+k.kode_mitra+'</p>')
					$('#jenis_jaminan').html('<p>'+k.nama_jenis_jaminan+'</p>')
					$('#keterangan_jaminan').html(k.ket_jaminan)
					var lampiran = $.parseJSON(k.file_lampiran)

					var htmllam = ''
					if (lampiran.length == 0) {
						$('#file_lampiran').html('<p class="text-danger">Tidak ada file_lampiran!</p>')
					}else{
						$.each(lampiran,function (v,k) {
							$.each(k,function (v,k) {
								var urlLampiran = url+'assets/lampiran/'+k
								htmllam += '<a href="'+urlLampiran+'" style="text-decoration:none;" target="_blank"><span class="mdi mdi-file-document"></span>'+k+'</a><br>'
							})
						})
						$('#file_lampiran').html(htmllam)
					}
					$('#sumber_aplikasi').html('<p>'+k.nama_sumber_aplikasi+'</p>')
					$('#keterangan_order').html('<p>'+k.keterangan+'</p>')
				})
			}
		})
	}

	$('#wadahInfoVerifKredit').on('click', '#buttonVerifKredit', function () {
		swal({
			title: "Verifikasi Kredit Checking ?",
			text: "pastikan data sudah di cek terlebih dahulu",
			icon: "info",
			buttons: true,
			dangerMode: true,
		})
		.then((willSetejui) => {
			if (willSetejui) {
				$.ajax({
					type:'POST',
					url:url+'Home/verifikasiKredit/',
					dataType:'JSON',
					data:{
						id_kredit_check:id_kredit_check,
						id_order:id_order,
						ao_to_email:ao_to_email,
						name_to_email:name_to_email,
						nik_to_email:nik_to_email,
						plafond_to_email:plafond_to_email
					},
					beforeSend:function () {
						$('#load_page').val('true');
						load()
						$('#buttonTolakKredit').hide()
						$('#buttonVerifKredit').hide()
						swal({
							text:'Sedang verifikasi Kredit Checking . . .',
							buttons: false,
							closeModal: false,
						})
					},success:function (res) {
						console.log(res)
						$('#load_page').val('false');
						if (res.msg == 'success') {
							$('#buttonTolakKredit').show()
							$('#buttonVerifKredit').show()
							$('#app').load('views/content/data/detail-kredit-checking.php');
							swal({
				        title: "Sukses!",
				        text: "data berhasil di verifikasi!",
				        icon: "success",
				        timer:2500,
								buttons: false
					    });
						}else{
							$('#buttonTolakKredit').show()
							$('#buttonVerifKredit').show()
							swal({
				        title: "Warning!",
				        text: "data gagal di verifikasi!",
				        icon: "danger"
					    });
						}
					},
					error:function (xhr, status, error) {
						$('#load_page').val('false');
						$('#buttonTolakKredit').show()
						$('#buttonVerifKredit').show()
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

	$('#wadahInfoVerifKredit').on('click', '#buttonTolakKredit', function () {
		swal("Masukan alasan penolakan:", {
			content: "input",
		})
		.then((value) => {
			if (value) {
				$.ajax({
					type:'POST',
					url:url+'Home/TolakKredit',
					data:{
						id_kredit_check:id_kredit_check,
						id_order:id_order,
						alasan:value
					},
					dataType:'JSON',
					beforeSend:function () {
						$('#load_page').val('true');
						load()
						$('#buttonVerifKredit').hide()
						$('#buttonTolakKredit').hide()
						swal({
							text:'Sedang menolak Kredit Checking . . .',
							buttons: false,
							closeModal: false
						})
					},success:function (res) {
						$('#load_page').val('false');
						if (res.msg == 'success') {
							$('#buttonVerifKredit').show()
							$('#buttonTolakKredit').show()
							$('#app').load('views/content/data/detail-kredit-checking.php');
							swal({
				        title: "Sukses!",
				        text: "data berhasil di tolak!",
				        icon: "warning",
				        timer:2500,
								buttons: false
					    });
						}else{
							$('#buttonVerifKredit').show()
							$('#buttonTolakKredit').show()
							swal({
				        title: "Warning!",
				        text: "data gagal di verifikasi!",
				        icon: "warning"
					    });
						}
					},
					error:function (xhr, status, error) {
						$('#load_page').val('false');
						$('#buttonVerifKredit').show()
						$('#buttonTolakKredit').show()
						console.log(xhr.responseText)
						$('#buttonTolakKredit').show()
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

	get_detailKreditcheck(id_kredit_check)
	function get_detailKreditcheck(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detailKreditcheck/'+id,
			dataType:'JSON',
			beforeSend:function () {
				$('idk').html(loading)
				$('vk').html(loading)
				$('#divButvk').html(loading)
				$('#divButvkT').html(loading)
				$('#status').html(loading)
				$('#nama_calon_nasabah_kredit').html(loading)
				$('#jenis_debitur_kredit').html(loading)
				$('#nomor_kredit').html(loading)
				$('#kantor_kreditC').html(loading)
				$('#ao_kredit').html(loading)
				$('#lampiran').html(loading)
				$('#notes').html('Sedang meangambil data . . . ')
			},
			success:function (res) {
				$('vk').html('')
				$.each(res,function (v,k) {
					if (k.verifikasi == 0) {
						$('#verifkredit').addClass('text-danger')
						$('#verifbykredit').addClass('text-danger')
						$('#tglverifkredit').addClass('text-danger')
						verifikasi = 'belum terverifikasi'
						verifikasi_by = 'belum terverifikasi'
						verifikasi_date = 'belum terverifikasi'
						if (session_jabatan == 'manager' || session_jabatan == 'ketua') {
								if (k.status == 'DONE') {
									$('#divButvk').html('<a href="javascript:void(0)" class="btn btn-success" style="width: 100%" id="buttonVerifKredit"><i class="mdi mdi-verified"></i>&nbsp;Setujui Kredit checking</a>')
									$('#divButvkT').html('<a href="javascript:void(0)" class="btn btn-danger" style="width: 100%" id="buttonTolakKredit"><i class="mdi mdi-close-circle"></i>&nbsp;Tolak Kredit checking</a>')
								}else{
									$('#divButvk').html('<i style="color:red">Kredit Checking Dalam Proses</i>')
								$('#divButvkT').html('')
								}
						}else{
							$('#divButvk').html('<i style="color:red">Menunggu konfirmasi dari Manager/Ketua</i>')
							$('#divButvkT').html('')
						}
					}else if(k.verifikasi == 1){
						$('#divButvk').html('')
						$('#divButvkT').html('')
						$('#verifkredit').addClass('text-primary')
						$('#verifbykredit').addClass('text-primary')
						$('#tglverifkredit').removeClass('text-danger')
						verifikasi = 'DI SETUJUI'
						verifikasi_by = k.pelaku_verifikasi
						verifikasi_date = changeDate(k.verifikasi_date)
					}else{
						$('#divButvk').html('')
						$('#divButvkT').html('')
						$('#verifkredit').addClass('text-danger')
						$('#verifbykredit').addClass('text-primary')
						$('#tglverifkredit').removeClass('text-danger')
						verifikasi = 'DI TOLAK'
						verifikasi_by = k.pelaku_verifikasi
						verifikasi_date = changeDate(k.verifikasi_date)
					}

					if (k.status == 'WAITING') {
						status = '<label class="badge badge-warning">'+k.status+'&nbsp;&nbsp;('+changeDate(k.proses_date)+')</label>'

					}else if (k.status == 'ON PROGRESS') {
						status = '<label class="badge badge-success">'+k.status+'&nbsp;&nbsp;('+changeDate(k.proses_date)+')</label>'

					}else if (k.status == 'DONE') {
						status = '<label class="badge badge-primary">'+k.status+'&nbsp;&nbsp;('+changeDate(k.proses_date)+')</label>'

					}else if (k.status == 'PENDING') {

						status = '<label class="badge badge-dark">'+k.status+'&nbsp;&nbsp;('+changeDate(k.proses_date)+')</label>'
					}
					$('idk').html(k.id)
					$('#verifkredit').html("&nbsp;"+verifikasi)
					$('#tglverifkredit').html("&nbsp;"+verifikasi_date)
					$('#status').html(status)
					$('#nama_calon_nasabah_kredit').html('<p>'+k.calon_debitur+'</p>')
					$('#jenis_debitur_kredit').html('<p>'+k.jenis_debitur+'</p>')
					$('#nomor_kredit').html('<p>'+k.nomor+'</p>')
					$('#kantor_kreditC').html('<p>'+k.nama_area_kerja+'</p>')
					$('#ao_kredit').html('<p>'+k.AO_Kredit+'</p>')
					/*var lampiran = $.parseJSON(k.lampiran)

					var htmllam = ''
					if (lampiran.length == 0) {
						$('#lampiran').html('<p class="text-danger">Tidak ada lampiran!</p>')
					}else{
						$.each(lampiran,function (v,k) {
							$.each(k,function (v,k) {
								var urlLampiran = url+'assets/lampiran_kreditChecking/'+k
								htmllam += '<a href="'+urlLampiran+'" style="text-decoration:none;" target="_blank"><span class="mdi mdi-file-document"></span>'+k+'</a><br>'
							})
						})
						$('#lampiran').html(htmllam)
					}*/
					$('#notes').html(k.notes)
				})
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
