<div class="row">
	<div class="col-lg-12">
		<?php include '../component/header-back.php'; ?>
		<?php include '../component/info-detail-cnasabah.php'; ?>
		<?php include '../component/info-detail-order.php'; ?>
		<?php include '../component/info-detail-kreditc.php'; ?>
		<?php include '../component/info-detail-memo-ao.php'; ?>
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
	var id_kredit_check = $('#paramsID3').val()

	$('#load_page').val('false');
	$('#title-header').html('Detail Memo Ao')

	$('#backcn').click(function () {
		$('#load_page').val('false');
		load()
		$('#tamplate').val('views/content/data/data-memo-kredit-ao.php');
		$('#app').load('views/content/data/data-memo-kredit-ao.php');
	})

	$('.Buttoggle').click(function () {
		var from = $(this).attr('from')
		if (from == 'cnasabah') {
			$('#conCnasabah').toggle()
		}else if (from == 'order') {
			$('#conOrder').toggle()
		}else if (from == 'kredit') {
			$('#conKredit').toggle()
		}else if (from == 'memoao') {
			$('#conMemoAo').toggle()
		}
	})

	/*$('#conCnasabah').hide()
	$('#conOrder').hide()
	$('#conKredit').hide()*/
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
				        icon: "error",
				        type: "error"
				    });
	        	}
			}
		})
	}

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
				$.each(res,function (v,k) {
					if (k.verifikasi == 0) {
						$('#verifkredit').addClass('text-danger')
						$('#verifbykredit').addClass('text-danger')
						$('#tglverifkredit').addClass('text-danger')
						verifikasi = 'belum terverifikasi'
						verifikasi_by = 'belum terverifikasi'
						verifikasi_date = 'belum terverifikasi'
						$('#divButvk').html('<a href="javascript:void(0)" class="btn btn-success" style="width: 100%" id="buttonVerifKredit"><i class="mdi mdi-verified"></i>&nbsp;Verifikasi Kredit</a>')
					}else{
						$('#divButvk').html('')
						$('#verifkredit').addClass('text-primary')
						$('#verifbykredit').addClass('text-primary')
						$('#tglverifkredit').removeClass('text-danger')
						verifikasi = 'Terverifikasi'
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
					$('#notes').html(k.notes)
				})
			}
		})
	}

	$('#wadahInfoVerifMemoAo').on('click', '#buttonVerifMemoAo', function () {
		swal({
			title: "Verifikasi Memo Ao ?",
			text: "pastikan data sudah di cek terlebih dahulu",
			icon: "info",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					type:'GET',
					url:url+'Home/verifikasiMemoAo/'+id_order,
					dataType:'JSON',
					beforeSend:function () {
						load()
						$('#buttonVerifMemoAo').val(loading+" Sedang verifikasi . . .")
						swal({
							text:'Sedang verifikasi Memo Ao . . .',
							buttons: false,
							closeModal: false,
						})
					},success:function (res) {
						if (res.msg == 'success') {
							$('#app').load('views/content/data/detail-memo-ao.php');
							swal({
				        title: "Sukses!",
				        text: "data berhasil di verifikasi!",
				        icon: "success",
				        timer:2500,
								buttons: false
					    });
						}else{
							swal({
				        title: "Warning!",
				        text: "data gagal di verifikasi!",
				        icon: "danger"
					    });
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
			} else {
				swal({
					text:'Verifikasi dibatalkan',
					timer:1000,
					buttons: false
				})
			}
		});
	})

	get_detailMemoAo(id_order)
	function get_detailMemoAo(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detailMemoAo/'+id,
			dataType:'JSON',
			beforeSend:function () {
				load()
				$('idor').html(loading)
				$('idcb').html(loading)
				$('idvkao').html(loading)
				$('vkao').html(loading)
				$('#divButvao').html(loading)
				$('#nama_anak').html(loading)
				$('#nama_sekolah_anak').html(loading)
				$('#alamat_sekolah_anak').html(loading)
				$('#no_aplikasi').html(loading)
				$('#nama_calon_nasabah_ao').html(loading)
				$('#jaminan_utama').html(loading)
				$('#sumber_informasi').html(loading)
				$('#tujuan_kredit').html(loading)
				$('#type_kredit').html(loading)
				$('#jenis_fasilitas').html(loading)
				$('#produk').html(loading)
				$('#plafond_kredit').html(loading)
				$('#jangka_waktu').html(loading)
				$('#suku_bunga').html(loading)
				$('#akad_kredit').html(loading)
				$('#akad_jaminan').html(loading)
				$('#gaji_debitur').html(loading)
				$('#gaji_pasangan').html(loading)
				$('#gaji_penjamin').html(loading)
				$('#pengeluaran_rumah_tangga').html(loading)
				$('#pengeluaran_transportasi').html(loading)
				$('#pengeluaran_pendidikan').html(loading)
				$('#pengeluaran_lainnya').html(loading)
				$('#angsuran_lain').html(loading)
				$('textarea').html('Sedang mengambil data . . .')
				$('#vertifikasi_data_debitur').html(loading)
				$('#ket_calon_debitur').html(loading)
				$('#realisasi').html(loading)
				$('#tenor_ao').html(loading)
				$('#angsuran_kdpms').html(loading)
				$('#penghasilan_lainnya').html(loading)
			},
			success:function (res) {
				$('vkao').html('')
				$.each(res,function (v,k) {
					if (k.verifikasi == 0) {
						$('#verifmemoao').addClass('text-danger')
						$('#tglverifmemoao').addClass('text-danger')
						verifikasi = 'belum terverifikasi'
						verifikasi_by = 'belum terverifikasi'
						verifikasi_date = 'belum terverifikasi'
						$('#divButvao').html('<a href="javascript:void(0)" class="btn btn-success" style="width: 100%" id="buttonVerifMemoAo"><i class="mdi mdi-verified"></i>&nbsp;Verifikasi Memo Ao</a>')
					}else{
						$('#divButvao').html('')
						$('#verifmemoao').addClass('text-primary')
						$('#tglverifmemoao').removeClass('text-danger')
						verifikasi = 'Terverifikasi'
						verifikasi_by = k.pelaku_verifikasi
						verifikasi_date = changeDate(k.verifikasi_date)
					}

					$('idor').html(k.id_order)
					$('idcb').html(k.id_calon_debitur)
					$('idvkao').html(k.id_kredit_checking)
					$('#verifmemoao').html("&nbsp;"+verifikasi)
					$('#tglverifmemoao').html("&nbsp;"+verifikasi_date)

					$('#nama_anak').html('<p>'+k.nama_anak+'</p>')
					$('#nama_sekolah_anak').html('<p>'+k.nama_sekolah_anak+'</p>')
					$('#alamat_sekolah_anak').html('<p>'+k.alamat_sekolah_anak+'</p>')
					$('#no_aplikasi').html('<p>'+k.no_aplikasi+'</p>')
					$('#nama_calon_nasabah_ao').html('<p>'+k.calon_debitur+'</p>')
					$('#jaminan_utama').html('<p>'+k.jenis_jaminan+'</p>')
					$('#sumber_informasi').html('<p>'+k.deskripsi_group4+'</p>')
					$('#tujuan_kredit').html('<p>'+k.tujuan_kredit+'</p>')
					$('#type_kredit').html('<p>'+k.type_kredit+'</p>')
					$('#jenis_fasilitas').html('<p>'+k.jenis_fasilitas+'</p>')
					$('#produk').html('<p>'+k.DESKRIPSI_PRODUK+'</p>')
					$('#plafond_kredit').html('<p>Rp. '+FormatRupiah(k.plafon_kredit)+'</p>')
					$('#jangka_waktu').html('<p>'+k.jangka_waktu+' Bulan</p>')
					$('#suku_bunga').html('<p>'+k.suku_bunga+'</p>')
					$('#akad_kredit').html('<p>'+k.akad_kredit+'</p>')
					$('#akad_jaminan').html('<p>'+k.akad_jaminan+'</p>')
					$('#gaji_debitur').html('<p> Rp. '+FormatRupiah(k.gaji_debitur)+'</p>')
					$('#gaji_pasangan').html('<p> Rp. '+FormatRupiah(k.gaji_pasangan)+'</p>')
					$('#gaji_penjamin').html('<p> Rp. '+FormatRupiah(k.gaji_penjamin)+'</p>')
					$('#pengeluaran_rumah_tangga').html('<p> Rp. '+FormatRupiah(k.pengeluaran_rumah_tangga)+'</p>')
					$('#pengeluaran_transportasi').html('<p> Rp. '+FormatRupiah(k.pengeluaran_transportasi)+'</p>')
					$('#pengeluaran_pendidikan').html('<p> Rp. '+FormatRupiah(k.pengeluaran_pendidikan)+'</p>')
					$('#pengeluaran_lainnya').html('<p> Rp. '+FormatRupiah(k.pengeluaran_lainya)+'</p>')
					$('#angsuran_lain').html('<p> Rp. '+FormatRupiah(k.angsuran_lain)+'</p>')
					$('#angsuran_kdpms').html('<p> Rp. '+FormatRupiah(k.angsuran_kdpms)+'</p>')
					$('#penghasilan_lainnya').html('<p> Rp. '+FormatRupiah(k.penghasilan_lainnya)+'</p>')
					$('#hasil_cek_lingkungan').html(k.hasil_cek_lingkungan)
					$('#vertifikasi_data_debitur').html('<p>'+k.vertifikasi_data_debitur+'</p>')
					$('#ket_calon_debitur').html('<p>'+k.ket_calon_debitur+'</p>')
					$('#realisasi').html('<p>Rp. '+k.realisasi+'</p>')
					$('#tenor_ao').html('<p>'+k.tenor+' Bulan</p>')
				})
			}
		})
	}
	$('.d_shm').hide()
	$('.d_shgb').hide()
	$('.d_ajb').hide()
	$('.d_shrms').hide()
	$('#angunansertifikat').hide()
	get_detailMemoAoSertifikat(id_order)
	function get_detailMemoAoSertifikat(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detailMemoAoSertifikat/'+id,
			dataType:'JSON',
			beforeSend:function () {
				load()
			},
			success:function (res) {
				if (res.amount == 0) {
						$('#angunansertifikat').hide()
				}else{
					$('ang').html('Sertifikat')
					$('#angunansertifikat').show()
					$.each(res,function (v,k) {
							$('#penggunaan').html('<p>'+k.penggunaan+'</p>')
							$('#lokasi_setifikat').html('<p>'+k.lokasi+'</p>')
							$('#kepemilikan_sertifikat').html('<p>'+k.nama_kepemilikan+'</p>')
							$('#no_sertifikat').html('<p>'+k.no_sertifikat+'</p>')
							$('#tgl_sertifikat').html('<p>'+changeDate(k.tgl_sertifikat)+'</p>')
							$('#jenis_sertifikat').html('<p>'+k.jenis_sertifikat+'</p>')
							$('#atas_nama').html('<p>'+k.atas_nama+'</p>')
							$('#alamat-sertifikat').html('<p>'+k.alamat+'</p>')
							$('#tgl_surat_ukur').html('<p>'+k.tgl_surat_ukur+'</p>')
							$('#no_surat_ukur').html('<p>'+k.no_surat_ukur+'</p>')
							$('#luas_tanah').html('<p>'+parseInt(k.luas_tanah)+' METER</p>')
							$('#luas_bangunan').html('<p>'+parseInt(k.luas_bangunan)+' METER</p>')
							$('#tgl_surat_ukur').html('<p>'+changeDate(k.tgl_surat_ukur)+'</p>')
							$('#no_surat_ukur').html('<p>'+k.no_surat_ukur+'</p>')
							if (k.jenis_sertifikat == 'SHM') {
								$('.d_shm').show()
								$('#no_shm').html('<p>'+k.no_shm+'</p>')
							}else if (k.jenis_sertifikat == 'SHGB') {
								$('.d_shgb').show()
								$('#masa_berlaku_shgb').html('<p>'+k.masa_berlaku_shgb+'</p>')
							}else if (k.jenis_sertifikat == 'AJB'){
								$('.d_ajb').show()
								$('#no_ajb').html('<p>'+k.no_ajb+'</p>')
								$('#tgl_ajb').html('<p>'+k.tgl_ajb+'</p>')
							}else if (k.jenis_sertifikat == 'SHMRS'){
								$('.d_shrms').show()
								$('#masa_berlaku_shmrs').html('<p>'+k.masa_berlaku_shmrs+'</p>')
							}
							$('#imb').html('<p>'+k.imb+'</p>')
							$('#legalitas').html('<p>'+k.legalitas+'</p>')
							$('#catatan_lainnya').html('<p>'+k.catatan_lainnya+'</p>')
							$('#kondisi_bangunan').html('<p>'+k.kondisi_bangunan+'</p>')
							$('#nilai_njop').html('<p>'+k.nilai_njop+'</p>')
							$('#nilai_taksasi').html('<p>'+k.nilai_taksasi+'</p>')
							$('#tgl_taksasi').html('<p>'+changeDate(k.tgl_taksasi)+'</p>')
					})
				}

			}
		})
	}

	$('#angunankendaraan').hide()
	get_detailMemoAoKendaraan(id_order)
	function get_detailMemoAoKendaraan(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detailMemoAoKendaraan/'+id,
			dataType:'JSON',
			beforeSend:function () {
				load()
			},
			success:function (res) {
				console.log(res)
				if (res.amount == 0) {
						$('#angunankendaraan').hide()
				}else{
					$('ang').html('Kendaraan')
					$('#angunankendaraan').show()
					$.each(res,function (v,k) {
						$('#nama_merk').html('<p>'+k.nama_merk+'</p>')
						$('#type_kendaraan').html('<p>'+k.type_kendaraan+'</p>')
						$('#jenis_kendaraan').html('<p>'+k.jenis_kendaraan+'</p>')
						$('#kepemilikan').html('<p>'+k.kepemilikan+'</p>')
						$('#penggunaan_ken').html('<p>'+k.penggunaan+'</p>')
						$('#atas_nama_ken').html('<p>'+k.atas_nama+'</p>')
						$('#alamat_bpkb').html('<p>'+k.alamat_bpkb+'</p>')
						$('#kecamatan_bpkb').html('<p>'+k.kecamatan_bpkb+'</p>')
						$('#kelurahan_bpkb').html('<p>'+k.kelurahan_bpkb+'</p>')
						$('#kota_bpkb').html('<p>'+k.kota_bpkb+'</p>')
						$('#nilai_likuidas').html('<p>'+k.nilai_likuidas+'</p>')
						$('#kondisi_jaminan').html('<p>'+k.kondisi_jaminan+'</p>')
						$('#tgl_taksasi').html('<p>'+k.tgl_taksasi+'</p>')
						$('#tgl_exp_pajak').html('<p>'+k.tgl_exp_pajak+'</p>')
						$('#tgl_exp_stnk').html('<p>'+k.tgl_exp_stnk+'</p>')
						$('#no_bpkb').html('<p>'+k.no_bpkb+'</p>')
						$('#no_rangka').html('<p>'+k.no_rangka+'</p>')
						$('#no_mesin').html('<p>'+k.no_mesin+'</p>')
						$('#no_stnk').html('<p>'+k.no_stnk+'</p>')
						$('#no_polisi').html('<p>'+k.no_polisi+'</p>')
						$('#warna').html('<p>'+k.warna+'</p>')
						$('#tahun').html('<p>'+k.tahun+'</p>')
						$('#no_faktur').html('<p>'+k.no_faktur+'</p>')
						$('#silinder').html('<p>'+k.silinder+'</p>')
						$('#nilai_taksasi').html('<p>'+FormatRupiah(k.nilai_taksasi)+'</p>')
					})
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
