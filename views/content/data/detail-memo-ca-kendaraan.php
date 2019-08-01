<div class="row">
	<div class="col-lg-12">
		<?php include '../component/header-back.php'; ?>
		<?php include '../component/info-detail-cnasabah.php'; ?>
		<?php include '../component/info-detail-order.php'; ?>
		<?php include '../component/info-detail-memo-ao.php'; ?>
		<div id="app-detail"></div>
		<?php include '../component/info-foto-jaminan-ca.php'; ?>
		<?php include '../component/info-lampiran-ca.php'; ?>
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
	$('#title-header').html('Detal Memo Ca')

	$('#backcn').click(function () {
		$('#load_page').val('false');
		load()
		$('#tamplate').val('views/content/data/data-memo-kredit-ca.php');
		$('#app').load('views/content/data/data-memo-kredit-ca.php');
	})

	$('.Buttoggle').click(function () {
		var from = $(this).attr('from')
		if (from == 'cnasabah') {
			$('#conCnasabah').toggle()
		}else if (from == 'order') {
			$('#conOrder').toggle()
		}else if (from == 'memoao') {
			$('#conMemoAo').toggle()
		}else if (from == 'ca') {
			$('#conCa').toggle()
		}
	})

	/*$('#conCnasabah').hide()
	$('#conOrder').hide()
	$('#conMemoAo').hide()
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
	'use strict'
	function showDetail(id_calon_debitur) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detail_calon_nasabah/'+id_calon_debitur,
			dataType:'JSON',
			beforeSend:function () {
				$('input[type=text]').val('Sedang mengambil . . .')
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
	'use strict'
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
	'use strict'
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

					if (k.nama_jenis_jaminan == 'SERTIFIKAT'){
						$('#app-detail').load('views/content/component/info-detail-memo-ca-ser.php')
					}else{
						$('#app-detail').load('views/content/component/info-detail-memo-ca-ken.php')
					}

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
	get_detailMemoAo(id_order)
	'use strict'
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
				$('#realisasi_ao').html(loading)
				$('#tenor_ao').html(loading)
				$('#nama_anak').html(loading)
				$('#nama_sekolah_anak').html(loading)
				$('#alamat_sekolah_anak').html(loading)
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

					$('#no_aplikasi').html('<p>'+k.no_aplikasi+'</p>')
					$('#nama_calon_nasabah_ao').html('<p>'+k.calon_debitur+'</p>')
					$('#jaminan_utama').html('<p>'+k.jenis_jaminan+'</p>')
					$('#sumber_informasi').html('<p>'+k.deskripsi_group4+'</p>')
					$('#tujuan_kredit').html('<p>'+k.tujuan_kredit+'</p>')
					$('#type_kredit').html('<p>'+k.type_kredit+'</p>')
					$('#jenis_fasilitas').html('<p>'+k.jenis_fasilitas+'</p>')
					$('#produk').html('<p>'+k.DESKRIPSI_PRODUK+'</p>')
					$('#plafond_kredit').html('<p> Rp.'+FormatRupiah(k.plafon_kredit)+'</p>')
					$('#jangka_waktu').html('<p>'+k.jangka_waktu+' Bulan</p>')
					$('#suku_bunga').html('<p>'+k.suku_bunga+'</p>')
					$('#akad_kredit').html('<p>'+k.akad_kredit+'</p>')
					$('#akad_jaminan').html('<p>'+k.akad_jaminan+'</p>')
					$('#gaji_debitur').html('<p>'+FormatRupiah(k.gaji_debitur)+'</p>')
					$('#gaji_pasangan').html('<p>'+FormatRupiah(k.gaji_pasangan)+'</p>')
					$('#gaji_penjamin').html('<p>'+FormatRupiah(k.gaji_penjamin)+'</p>')
					$('#pengeluaran_rumah_tangga').html('<p>'+FormatRupiah(k.pengeluaran_rumah_tangga)+'</p>')
					$('#pengeluaran_transportasi').html('<p>'+FormatRupiah(k.pengeluaran_transportasi)+'</p>')
					$('#pengeluaran_pendidikan').html('<p>'+FormatRupiah(k.pengeluaran_pendidikan)+'</p>')
					$('#pengeluaran_lainnya').html('<p>'+FormatRupiah(k.pengeluaran_lainya)+'</p>')
					$('#angsuran_lain').html('<p>'+FormatRupiah(k.angsuran_lain)+'</p>')
					$('#hasil_cek_lingkungan').html(k.hasil_cek_lingkungan)
					$('#vertifikasi_data_debitur').html('<p>'+k.vertifikasi_data_debitur+'</p>')
					$('#ket_calon_debitur').html('<p>'+k.ket_calon_debitur+'</p>')
					$('#realisasi_ao').html('<p> Rp.'+k.realisasi+'</p>')
					$('#tenor_ao').html('<p>'+k.tenor+' Bulan</p>')
					$('#nama_anak').html('<p>'+k.nama_anak+'</p>')
					$('#nama_sekolah_anak').html('<p>'+k.nama_sekolah_anak+'</p>')
					$('#alamat_sekolah_anak').html('<p>'+k.alamat_sekolah_anak+'</p>')
				})
			}
		})
	}
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
							$('#tgl_sertifikat').html('<p>'+k.tgl_sertifikat+'</p>')
							$('#jenis_sertifikat').html('<p>'+k.jenis_sertifikat+'</p>')
							$('#atas_nama').html('<p>'+k.atas_nama+'</p>')
							$('#alamat-sertifikat').html('<p>'+k.alamat+'</p>')
							$('#luas_tanah').html('<p>'+parseInt(k.luas_tanah)+' METER</p>')
							$('#luas_bangunan').html('<p>'+parseInt(k.luas_bangunan)+' METER</p>')
							$('#masa_berlaku_shgb').html('<p>'+k.masa_berlaku_shgb+'</p>')
							$('#no_ajb').html('<p>'+k.no_ajb+'</p>')
							$('#tgl_ajb').html('<p>'+k.tgl_ajb+'</p>')
							$('#no_surat_ukur').html('<p>'+k.no_surat_ukur+'</p>')
							$('#kondisi_bangunan').html('<p>'+k.kondisi_bangunan+'</p>')
							$('#nilai_njop').html('<p>'+k.nilai_njop+'</p>')
							$('#nilai_taksasi').html('<p>'+k.nilai_taksasi+'</p>')
							$('#tgl_taksasi').html('<p>'+k.tgl_taksasi+'</p>')
					})
				}

			}
		})
	}

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
						$('#penggunaan_ao_ken').html('<p>'+k.penggunaan+'</p>')
						$('#atas_nama_ken').html('<p>'+k.atas_nama+'</p>')
						$('#alamat_bpkb').html('<p>'+k.alamat_bpkb+'</p>')
						$('#kecamatan_bpkb').html('<p>'+k.kecamatan_bpkb+'</p>')
						$('#kelurahan_bpkb').html('<p>'+k.kelurahan_bpkb+'</p>')
						$('#kota_bpkb').html('<p>'+k.kota_bpkb+'</p>')
						$('#nilai_likuidas').html('<p>'+FormatRupiah(k.nilai_likuidas)+'</p>')
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
	get_DetailCa(id_order)
	function get_DetailCa(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCa/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#nama_calon_nasabah_ca').html(loading)
				$('#no_aplikasi_ca').html(loading)
				$('#jaminan_utama_ca').html(loading)
				$('#sumber_informasi_ca').html(loading)
				$('#sla').html(loading)
				$('#ket_sla_ca').html(loading)
				$('#jml_tanggungan_ca').html(loading)
				$('#status_rumah_ca').html(loading)
				$('#alamat_ca').html(loading)
				$('#alamat_dom_ca').html(loading)
				$('#pekerjaan_debitur_ca').html(loading)
				$('#nama_tempat_kerja_ca').html(loading)
				$('#poisisi_ca').html(loading)
				$('#jenis_usaha_debitur_ca').html(loading)
				$('#alamat_usaha_debitur_ca').html(loading)
				$('#masa_kerja_debitur_ca').html(loading)
				$('#no_telp_kerja_debitur_ca').html(loading)
				$('#pengeluaran_lainnya_ca').html(loading)
				$('#pendapatan_tunai_ca').html(loading)
				$('#pendapatan_kredit_ca').html(loading)
				$('#pengeluaran_sewa_ca').html(loading)
				$('#pengeluaran_belanja_ca').html(loading)
				$('#pengeluaran_gaji_pegawai_ca').html(loading)
				$('#angsuran_lain_usaha_ca').html(loading)
				$('#pengeluaran_lain_usaha_ca').html(loading)
				$('#pengeluaran_telp_listrik_air_ca').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {
					console.log(v.calon_debitur)
					$('#nama_calon_nasabah_ca').html('<p>'+v.calon_debitur+'</p>')
					$('#no_aplikasi_ca').html('<p>'+v.no_aplikasi+'</p>')
					$('#jaminan_utama_ca').html('<p>'+v.nama_jenis_jaminan+'</p>')
					$('#sumber_informasi_ca').html('<p>'+v.desk_sumber_informasi+'</p>')
					$('#sla').html('<p>'+v.sla+'</p>')
					$('#ket_sla_ca').html('<p>'+v.ket_sla+'</p>')
					$('#jml_tanggungan_ca').html('<p>'+v.jml_tanggungan+'</p>')
					$('#status_rumah_ca').html('<p>'+v.status_rumah+'</p>')
					$('#alamat_ca').html('<p>'+v.alamat_sekarang+'</p>')
					$('#alamat_dom_ca').html('<p>'+v.alamat_domisili+', RT '+v.rt_domisili+' RW '+v.rw_domisili+', KELURAHAN '+v.Kelurahan_domisili+' '+v.Kotakab_domisili+', KECAMATAN '+v.Kecamatan_domisili+', PROPINSI '+v.propinsi_domisili+'</p>')
					$('#pekerjaan_debitur_ca').html('<p>'+v.pekerjaan_debitur+'</p>')
					$('#nama_tempat_kerja_ca').html('<p>'+v.nama_tempat_kerja+'</p>')
					$('#poisisi_ca').html('<p>'+v.posisi+'</p>')
					$('#jenis_usaha_debitur_ca').html('<p>'+v.jenis_usaha_debitur+'</p>')
					$('#alamat_usaha_debitur_ca').html('<p>'+v.alamat_usaha_debitur+'</p>')
					$('#masa_kerja_debitur_ca').html('<p>'+v.masa_kerja_debitur+'</p>')
					$('#no_telp_kerja_debitur_ca').html('<p>'+v.no_telp_kerja_debitur+'</p>')
					$('#pengeluaran_lainnya_ca').html('<p>'+v.pengeluaran_lainya+'</p>')
					$('#pendapatan_tunai_ca').html('<p>'+v.pendapatan_tunai+'</p>')
					$('#pendapatan_kredit_ca').html('<p>'+v.pendapatan_kredit+'</p>')
					$('#pengeluaran_sewa_ca').html('<p>'+v.pengeluaran_sewa+'</p>')
					$('#pengeluaran_belanja_ca').html('<p>'+v.pengeluaran_belanja+'</p>')
					$('#pengeluaran_gaji_pegawai_ca').html('<p>'+v.pengeluaran_gaji_pegawai+'</p>')
					$('#angsuran_lain_usaha_ca').html('<p>'+v.angsuran_lain_usaha+'</p>')
					$('#pengeluaran_lain_usaha_ca').html('<p>'+v.pengeluaran_lainya_usaha+'</p>')
					$('#pengeluaran_telp_listrik_air_ca').html('<p>'+v.pengeluaran_telp_listrik_air+'</p>')
				})
			}
		})
	}
	'use strict'
	get_DetailCaVerifikasiData(id_order)
	function get_DetailCaVerifikasiData(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaVerifikasiData/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#ktp_cln_debitur_ca').html(loading)
				$('#ktp_cln_pasangan_debitur_ca').html(loading)
				$('#kertu_keluarga').html(loading)
				$('#surat_nikah').html(loading)
				$('#surat_cerai').html(loading)
				$('#sttp_pbb').html(loading)
				$('#sertifikat_or_bpkb').html(loading)
				$('#imb').html(loading)
				$('#slip_gaji').html(loading)
				$('#rekening_tabungan').html(loading)
				$('#data_penjamin_ca').html(loading)
				$('#catatan').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {
					if (v.ktp_cln_debitur == 0) {
						$('#ktp_cln_debitur_ca').html('<p> Belum </p>')
					}else{
						$('#ktp_cln_debitur_ca').html('<p> Sudah </p>')
					}

					if (v.ktp_pasangan == 0) {
						$('#ktp_cln_pasangan_debitur_ca').html('<p> Belum </p>')
					}else{
						$('#ktp_cln_pasangan_debitur_ca').html('<p> Sudah </p>')
					}

					if (v.kartu_keluarga == 0) {
						$('#kertu_keluarga').html('<p> Belum </p>')
					}else{
						$('#kertu_keluarga').html('<p> Sudah </p>')
					}

					if (v.surat_nikah == 0) {
						$('#surat_nikah').html('<p> Belum </p>')
					}else{
						$('#surat_nikah').html('<p> Sudah </p>')
					}

					if (v.surat_cerai == 0) {
						$('#surat_cerai').html('<p> Belum </p>')
					}else{
						$('#surat_cerai').html('<p> Sudah </p>')
					}

					if (v.sttp_pbb == 0) {
						$('#sttp_pbb').html('<p> Belum </p>')
					}else{
						$('#sttp_pbb').html('<p> Sudah </p>')
					}

					if (v.sertifikat_or_bpkb == 0) {
						$('#sertifikat_or_bpkb').html('<p> Belum </p>')
					}else{
						$('#sertifikat_or_bpkb').html('<p> Sudah </p>')
					}

					if (v.imb == 0) {
						$('#imb').html('<p> Belum </p>')
					}else{
						$('#imb').html('<p> Sudah </p>')
					}

					if (v.slip_gaji == 0) {
						$('#slip_gaji').html('<p> Belum </p>')
					}else{
						$('#slip_gaji').html('<p> Sudah </p>')
					}

					if (v.rekening_tabungan == 0) {
						$('#rekening_tabungan').html('<p> Belum </p>')
					}else{
						$('#rekening_tabungan').html('<p> Sudah </p>')
					}

					if (v.data_penjamin == 0) {
						$('#data_penjamin_ca').html('<p> Belum </p>')
					}else{
						$('#data_penjamin_ca').html('<p> Sudah </p>')
					}

					$('#catatan').html('<p>'+v.catatan+'</p>')
				})
			}
		})
	}
	'use strict'
	get_DetailCaCeklisSurvey(id_order)
	function get_DetailCaCeklisSurvey(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaCeklisSurvey/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#visit_cln_debitur').html(loading)
				$('#visit_pasangan').html(loading)
				$('#visit_penjamin').html(loading)
				$('#visit_tmpt_tinggal').html(loading)
				$('#visit_jaminan').html(loading)
				$('#visit_usaha').html(loading)
				$('#alamat_domisili').html(loading)
				$('#cek_lingkungan').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {
					if (v.visit_cln_debitur == 0) {
						$('#visit_cln_debitur').html('<p> Tidak Sesuai data </p>')
					}else{
						$('#visit_cln_debitur').html('<p> Sesuai Data </p>')
					}

					if (v.visit_pasangan == 0) {
						$('#visit_pasangan').html('<p> Tidak sesuai data </p>')
					}else{
						$('#visit_pasangan').html('<p> Sesuai Data </p>')
					}

					if (v.visit_penjamin == 0) {
						$('#visit_penjamin').html('<p> Tidak sesuai data </p>')
					}else{
						$('#visit_penjamin').html('<p> Sesuai Data </p>')
					}

					if (v.visit_tmpt_tinggal == 0) {
						$('#visit_tmpt_tinggal').html('<p> Tidak sesuai data </p>')
					}else{
						$('#visit_tmpt_tinggal').html('<p> Sesuai Data </p>')
					}

					if (v.visit_jaminan == 0) {
						$('#visit_jaminan').html('<p> Tidak sesuai data </p>')
					}else{
						$('#visit_jaminan').html('<p> Sesuai Data </p>')
					}

					if (v.visit_usaha == 0) {
						$('#visit_usaha').html('<p> Tidak sesuai data </p>')
					}else{
						$('#visit_usaha').html('<p> Sesuai Data </p>')
					}

					if (v.cek_lingkungan == 0) {
						$('#cek_lingkungan').html('<p> Tidak sesuai data </p>')
					}else{
						$('#cek_lingkungan').html('<p> Sesuai Data </p>')
					}

					if (v.alamat_domisili == 0) {
						$('#alamat_domisili').html('<p> Sesuai Ktp </p>')
					}else{
						$('#alamat_domisili').html('<p> Tidak sesuai Ktp </p>')
					}
				})
			}
		})
	}
	'use strict'
	get_DetailCaKondisiLokasi(id_order)
	function get_DetailCaKondisiLokasi(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaKondisiLokasi/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#pusat_keramaian').html(loading)
				$('#jarak_keramaian').html(loading)
				$('#akses_jalan').html(loading)
				$('#tingkat_kepadatan').html(loading)
				$('#luas_jalan').html(loading)
				$('#pert_lingkungan').html(loading)
				$('#rawan_bancana').html(loading)
				$('#daerah_banjir').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {
					$('#pusat_keramaian').html('<p>'+v.pusat_keramaian+'</p>')
					$('#jarak_keramaian').html('<p>'+v.jarak_keramaian+'</p>')
					$('#akses_jalan').html('<p>'+v.akses_jalan+'</p>')
					$('#tingkat_kepadatan').html('<p>'+v.tingkat_kepadatan+'</p>')
					$('#luas_jalan').html('<p>'+v.luas_jalan+'</p>')
					$('#pert_lingkungan').html('<p>'+v.pert_lingkungan+'</p>')
					$('#rawan_bancana').html('<p>'+v.rawan_bancana+'</p>')
					$('#daerah_banjir').html('<p>'+v.daerah_banjir+'</p>')
				})
			}
		})
	}

	get_DetailCaKendaraan(id_order)
	function get_DetailCaKendaraan(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaKendaraan/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#stnk').html(loading)
				$('#notes_pajak').html(loading)
				$('#trayek').html(loading)
				$('#bpkb').html(loading)
				$('#faktur').html(loading)
				$('#kwitansi_blangko').html(loading)
				$('#masa_berlaku_stnk').html(loading)
				$('#masa_berlaku_pajak').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {
					$('#stnk').html('<p>'+v.stnk+'</p>')
					$('#notes_pajak').html('<p>'+v.notes_pajak+'</p>')
					$('#trayek').html('<p>'+v.trayek+'</p>')
					$('#bpkb').html('<p>'+v.bpkb+'</p>')
					$('#faktur').html('<p>'+v.faktur+'</p>')
					$('#kwitansi_blangko').html('<p>'+v.kwitansi_blangko+'</p>')
					$('#masa_berlaku_stnk').html('<p>'+v.masa_berlaku_stnk+'</p>')
					$('#masa_berlaku_pajak').html('<p>'+v.masa_berlaku_pajak+'</p>')
				})
			}
		})
	}

	get_DetailCaFisikKendaraan(id_order)
	function get_DetailCaFisikKendaraan(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaFisikKendaraan/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#chasis').html(loading)
				$('#body').html(loading)
				$('#kabin').html(loading)
				$('#plafon').html(loading)
				$('#dashboard_fisik').html(loading)
				$('#dek_landasan').html(loading)
				$('#ban').html(loading)
				$('#Velg').html(loading)
				$('#jok').html(loading)
				$('#cat').html(loading)
				$('#lampu_lampu').html(loading)
				$('#klakson').html(loading)
				$('#speedometer').html(loading)
				$('#kaca_spion').html(loading)
				$('#kunci_kontak').html(loading)
				$('#kondisi_mesin_pada_saat_hidup').html(loading)
				$('#perlengkapan_yang_ada').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {
				$('#chasis').html('<p>'+v.chasis+'</p>')
				$('#body').html('<p>'+v.body+'</p>')
				$('#kabin').html('<p>'+v.kabin+'</p>')
				$('#plafon').html('<p>'+v.plafon+'</p>')
				$('#dashboard_fisik').html('<p>'+v.dashboard+'</p>')
				$('#dek_landasan').html('<p>'+v.dek_landasan+'</p>')
				$('#ban').html('<p>'+v.ban+'</p>')
				$('#Velg').html('<p>'+v.velg+'</p>')
				$('#jok').html('<p>'+v.jok+'</p>')
				$('#cat').html('<p>'+v.cat+'</p>')
				$('#lampu_lampu').html('<p>'+v.lampu_lampu+'</p>')
				$('#klakson').html('<p>'+v.klakson+'</p>')
				$('#speedometer').html('<p>'+v.speedometer+'</p>')
				$('#kaca_spion').html('<p>'+v.kaca_spion+'</p>')
				$('#kunci_kontak').html('<p>'+v.kunci_kontak+'</p>')
				$('#kondisi_mesin_pada_saat_hidup').html(loading)
				$('#perlengkapan_yang_ada').html(loading)
					$('#kondisi_mesin_pada_saat_hidup').html('<p>'+v.kondisi_mesin_hidup+'</p>')
					$('#perlengkapan_yang_ada').html('<p>'+v.perlengkapan+'</p>')
				})
			}
		})
	}

	get_DetailCaPenilaianKendaraan(id_order)
	function get_DetailCaPenilaianKendaraan(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaPenilaianKendaraan/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#sumber_1').html(loading)
				$('#harga_1').html(loading)
				$('#sumber_2').html(loading)
				$('#harga_2').html(loading)
				$('#kesimpulan_penilaian').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {
					$('#sumber_1').html('<p>'+v.sumber_informasi1+'</p>')
					$('#harga_1').html('<p>'+FormatRupiah(v.harga1)+'</p>')
					$('#sumber_2').html('<p>'+v.sumber_informasi2+'</p>')
					$('#harga_2').html('<p>'+FormatRupiah(v.harga2)+'</p>')
					$('#kesimpulan_penilaian').html('<p>'+v.kesimpulan+'</p>')
				})
			}
		})
	}

	'use strict'
	get_DetailCaLainLain(id_order)
	function get_DetailCaLainLain(id_order) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCaLainLain/'+id_order,
			dataType:'JSON',
			beforeSend:function () {
				$('#Sertifikat').html(loading)
				$('#ajb').html(loading)
				$('#kendaraan').html(loading)
				$('#tim_survey').html(loading)
				$('#penyimpangan').html(loading)
				$('#realisasi_ca').html(loading)
				$('#tenor_ca').html(loading)
				$('#vertifikasi_data_debitur_ca').html(loading)
				$('#vertifikasi_penjamin').html(loading)
				$('#vertifikasi_jaminan').html(loading)
				$('#analisa_kredit_checking').html(loading)
				$('#ket_calon_debitur_ca').html(loading)
				$('#comment_analisa').html(loading)
				$('#hasil_cek_lingkungan_ca').html(loading)
				$('#hasil_cek_aspek_kuantitatif').html(loading)
				$('#rekomendasi_ao').html(loading)
				$('#tenor_rek').html(loading)
			},
			success:function (res) {
				$.each(res,function(k,v) {

					if (v.sertifikat == 0) {
						$('#Sertifikat').html('<p> Belum </p>')
					}else{
						$('#Sertifikat').html('<p> Sudah </p>')
					}

					if (v.ajb == 0) {
						$('#ajb').html('<p> Belum </p>')
					}else{
						$('#ajb').html('<p> Sudah </p>')
					}

					if (v.kendaraan == 0) {
						$('#kendaraan').html('<p> Belum </p>')
					}else{
						$('#kendaraan').html('<p> Sudah </p>')
					}
					$('#tim_survey').html('<p>'+v.tim_survey+'</p>')
					$('#penyimpangan').html('<p>'+v.penyimpangan+'</p>')
					$('#realisasi_ca').html('<p>Rp. '+FormatRupiah(v.realisasi)+'</p>')
					$('#tenor_ca').html('<p>'+v.tenor+' Bulan</p>')
					$('#vertifikasi_data_debitur_ca').html('<p>'+v.vertifikasi_data_debitur+'</p>')
					$('#vertifikasi_penjamin').html('<p>'+v.vertifikasi_penjamin+'</p>')
					$('#vertifikasi_jaminan').html('<p>'+v.vertifikasi_jaminan+'</p>')
					$('#analisa_kredit_checking').html('<p>'+v.analisa_bi_checking+'</p>')
					$('#ket_calon_debitur_ca').html('<p>'+v.ket_calon_debitur_ca+'</p>')
					$('#comment_analisa').html('<p>'+v.comment_analisa+'</p>')
					$('#hasil_cek_lingkungan_ca').html('<p>'+v.hasil_cek_lingk+'</p>')
					$('#hasil_cek_aspek_kuantitatif').html('<p>'+v.hasil_cek_aspek_kuantitatif+'</p>')
					$('#rekomendasi_ao').html('<p> Rp.'+FormatRupiah(v.realisasi)+'</p>')
					$('#tenor_rek').html('<p>'+v.tenor+' Bulan</p>')
				})
			}
		})
	}

	get_DetailCAA(id_order)
	function get_DetailCAA(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_DetailCAA/'+id,
			dataType:'JSON',
			beforeSend:function () {
				$('#w_foto_jaminan').html(loading)
				$('#divButApR').html(loading)
				$('#w_lampiran').html(loading)
			},
			success:function (res) {
				$.each(res,function (v,k) {
				console.log(res)
					if (k.status_app == '0'){
						var ButAppR = '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalApprove"><i class="mdi mdi-checkbox-marked-circle"></i>Approve</button>&nbsp;&nbsp;<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalReject"><i class="mdi mdi-close-circle"></i>Reject</button>'
					}else{
						var ButAppR = ''
					}

					$('#divButApR').html(ButAppR)

					var FotoJaminan = $.parseJSON(k.foto_jaminan)

					var htmlFotjam = ''
					if (FotoJaminan.length == 0) {
						$('#w_foto_jaminan').html('<p class="text-danger">Tidak ada Foto Jaminan!</p>')
					}else{
						$.each(FotoJaminan,function (v,k) {
							$.each(k,function (v,k) {
								var urlLampiran = url+'assets/foto_jaminan/'+k

								htmlFotjam += '<div class="col-sm-2 col-xs-2">'+
																'<a href="'+urlLampiran+'" target="_blank">'+
																	'<div id="hover_fot_jam" style="background:black;z-index:1;width:155px;height:155px;position:absolute;opacity:0.8">'+
																		'<p style="text-align:center;margin-top:33%;"><i class="mdi mdi-eye mdi-24px"></i><br>Lihat Foto</p>'+
																	'</div>'+
																	'<img src="'+urlLampiran+'" style="width:155px;height:155px;">'+
																'</a>'+
															'</div>'
							})
						})
						$('#w_foto_jaminan').html(htmlFotjam)
					}

					var lampiran = $.parseJSON(k.lampiran)

					var htmllam = ''
					if (lampiran.length == 0) {
						$('#w_lampiran').html('<p class="text-danger">Tidak ada lampiran!</p>')
					}else{
						$.each(lampiran,function (v,k) {
							$.each(k,function (v,k) {
								var urlLampiran = url+'assets/lampiran_caa/'+k
								htmllam += '<a href="'+urlLampiran+'" style="text-decoration:none;" target="_blank"><span class="mdi mdi-file-document"></span>'+k+'</a>&nbsp;&nbsp;&nbsp;&nbsp;'
							})
						})
						$('#w_lampiran').html(htmllam)
					}
				})
			}
		})
	}

	'use strict'
	function load(){
		var elem = document.getElementById("myBar");
		var width = 1;
		var id = setInterval(frame, 10);22
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
