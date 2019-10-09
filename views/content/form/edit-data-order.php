<div id="snackbar">Periksa kembali dan mohon lengkapi form !!</div>
<div class="row">
	<div class="col-lg-12">
	<?php include '../component/header-back.php'; ?>
	<?php include '../component/info-detail-cnasabah.php'; ?>
		<div class="card" style="margin-top: 1%;">
			<div class="card-body">
			 <h4 style="">FORM EDIT DATA ORDER</h4><hr><br>
				<div class="col-12 grid-margin">
					<div class="card">
						<div class="card-body">
              <h3>DATA ORDER</h3>
							<form class="form-sample" id="form-simpan-edit-order">
                <input type="hidden" name="id_calon_debitur" id="postid_calon">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Account Officer (marketing)</label>
                      <div class="col-sm-9">
                        <div id="opt-ao"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Kantor</label>
                      <div class="col-sm-9">
                        <div id="opt-kantor"></div>
                        <input type="hidden" name="kantor" id="v_kantor">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Plafond</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="plafond" onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan plafond"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Tenor</label>
                      <div class="col-sm-9">
                        <div id="opt-tenor"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Jenis Pinjaman</label>
                      <div class="col-sm-9">
                        <div id="opt-jenis-pinjaman"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Tujuan Penggunaan</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="tujuan_penggunaan"  placeholder="Masukan Tujuan Penggunaan" ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Cara Pembayaran</label>
                      <div class="col-sm-9">
                       <div id="opt-cara-pembayaran"><div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Jenis Jaminan</label>
                      <div class="col-sm-9">
                        <div id="opt-jenis_jaminan"></div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Keterangan Jaminan</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="ket_jaminan" placeholder="Masukan Keterangan Jaminan" ></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Sumber Aplikasi</label>
                      <div class="col-sm-9">
                        <div id="opt-sumber-aplikasi"></div>
                      </div>
                    </div>
                  </div>
                   <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">keterangan</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan"  />
                      </div>
                    </div>
                  </div>
                </div><br>
              <button type="submit" class="btn btn-primary btn-fw" style="width: 100%;" id="simpan-edit-order">Simpan Perubahan</button>
            </form><br><br><hr>
              <h3>FILE LAMPIRAN :</h3>
              <div id="file_lampiran"></div><br>
              <h3>UBAH FILE LAMPIRAN</h3>
              <form class="form-sample" id="form-lampiran-order">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Upload File Lampiran</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" name="lampiran[]" multiple/><br>
                        <p style="color:red;font-style:italic;">Ubah file lampiran (File lama akan hilang)</p>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-fw" style="width: 100%;" id="simpan-lampiran-order">Upload Lampiran</button>
              </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript" src="lib/js/FormatPointInput.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'
  var id_calon_debitur = $('#paramsID1').val()
	var id_order = $('#paramsID2').val()
	var kantor_user = parseInt($('#session_kantor').val())

	$('#load_page').val('false');
	$('#title-header').html('Edit Data Aplikasi Order')
	$('#postid_calon').val(id_calon_debitur)

	$('#backcn').click(function () {
		$('#load_page').val('false');
		load()
		$('#tamplate').val('views/content/data/data-aplikasi-order.php');
		$('#app').load('views/content/data/data-aplikasi-order.php');
	})

	$('.Buttoggle').click(function () {
		$('#conCnasabah').toggle('slow')
	})

	$('#data_pasangan').hide()
	$('#data_penjamin').hide()

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
				$('input[type=text]').val('Sedang mengambil . . .')
			},
			beforeSend:function(){
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
				        icon: "error"
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

  getOrder(id_order)
  function getOrder(id_order) {
    $.ajax({
      type:'GET',
      url:url+'Home/get_detail_order/'+id_order,
      dataType:'JSON',
      beforeSend:function() {
        console.log('mengirim');
        $('input[name=plafond]').attr('disabled',true);
        $('textarea[name=tujuan_penggunaan]').attr('disabled',true);
        $('textarea[name=ket_jaminan]').attr('disabled',true);
        $('input[name=keterangan]').attr('disabled',true);
        $('#opt-cara-pembayaran').html(loading)
        $('#opt-tenor').html(loading)
      },
      success:function(data){
        console.log(data);
        $.each(data, function(k,v) {
          getAo(v.kode_ao)
          $('input[name=plafond]').removeAttr('disabled').val(parseInt(v.plafond));
          tenor(v.tenor)
          jenisPinjaman(v.jenis_pinjaman)
          $('textarea[name=tujuan_penggunaan]').removeAttr('disabled').html(v.tujuan_penggunaan);
          cara_pembayaran(v.cara_pembayaran)
          getJaminan(v.jenis_jaminan)
          $('textarea[name=ket_jaminan]').removeAttr('disabled').val(v.ket_jaminan);
          sumberAplikasi(v.sumber_aplikasi)
          $('input[name=keterangan]').removeAttr('disabled').val(v.keterangan);
          var lampiran = $.parseJSON(v.file_lampiran)

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
        })
      }
    })
  }


	$('#form-simpan-edit-order').submit(function (e) {
		e.preventDefault();
		var data = new FormData(this);
    edit_data_order(data,id_order)
	})
  'use strict'
	function edit_data_order(data,id_order) {
		$.ajax({
			type:'POST',
			url:url+'Home/edit_data_order/'+id_order,
			data:data,
			processData:false,
			contentType:false,
			cache:false,
			async:true,
			dataType:'JSON',
			beforeSend:function () {
				load()
				$('#load_page').val('true');
				$('button[type=reset]').prop('disabled',true)
				$('#simpan-edit-order').prop('disabled',true)
				$('#simpan-edit-order').html(loading+' Sedang mengirim data . . . ')
			},
			success:function (res) {
        console.log(res);
				$('#load_page').val('false');
				$('#simpan-edit-order').prop('disabled',false)
				$('#simpan-edit-order').html('Simpan')
				if (res.msg == 'success') {
					$('#simpan-edit-order').prop('disabled',false)
					$('#simpan-edit-order').html('Simpan')
					$('#tamplate').val('views/content/form/edit-data-order.php')
					$('#app').load('views/content/form/edit-data-order.php')
					swal({
            title: "Sukses!",
            text: "data berhasil diubah!",
            icon: "success"
          });
				}else if (res.msg == 'gagal upload'){
					$('#simpan-edit-order').prop('disabled',false)
					$('#simpan-edit-order').html('Simpan')
					swal({
            title: "Gagal upload!",
            text: "Silahkan upload file lampiran",
            button:false,
            timer:1500,
            icon: "error"
          });
				}
			},
			error:function (xhr, status, error) {
				$('#simpan-edit-order').prop('disabled',false)
				$('#simpan-edit-order').html('Simpan')
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

  $('#form-lampiran-order').submit(function (e) {
		e.preventDefault();
		var data = new FormData(this);
    var lampiran = true;

    lampiran = checkEmpty('input[name=lampiran]');
    if (lampiran && true) {
      edit_lampiran_order(data,id_order)
    }
	})

  'use strict'
	function edit_lampiran_order(data,id_order) {
		$.ajax({
			type:'POST',
			url:url+'Home/edit_lampiran_order/'+id_order,
			data:data,
			processData:false,
			contentType:false,
			cache:false,
			async:true,
			dataType:'JSON',
			beforeSend:function () {
				load()
				$('#load_page').val('true');
				$('button[type=reset]').prop('disabled',true)
				$('#simpan-lampiran-order').prop('disabled',true)
				$('#simpan-lampiran-order').html(loading+' Sedang mengirim data . . . ')
			},
			success:function (res) {
        console.log(res);
				$('#load_page').val('false');
				$('#simpan-lampiran-order').prop('disabled',false)
				$('#simpan-lampiran-order').html('Simpan')
				if (res.msg == 'success') {
					$('#simpan-lampiran-order').prop('disabled',false)
					$('#simpan-lampiran-order').html('Upload Lampiran')
					$('#tamplate').val('views/content/form/edit-data-order.php')
					$('#app').load('views/content/form/edit-data-order.php')
					swal({
            title: "Sukses!",
            text: "data berhasil diubah!",
            icon: "success"
          });
				}else if (res.msg == 'gagal upload'){
					$('#simpan-lampiran-order').prop('disabled',false)
					$('#simpan-lampiran-order').html('Upload Lampiran')
					swal({
            title: "Gagal upload!",
            text: "Silahkan upload file lampiran",
            button:false,
            timer:1500,
            icon: "error"
          });
				}
			},
			error:function (xhr, status, error) {
				$('#simpan-lampiran-order').prop('disabled',false)
				$('#simpan-lampiran-order').html('Upload Lampiran')
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

  const tenor = (tenor) => {
		const ntenor = ['6','12','18','24','36','40','48','60','72']
		var html  = ''

		$.each(ntenor, (k,v) => {
				if (tenor == v) {
						html += '<option value="'+v+'" selected>'+v+' bulan</option>'
				}else{
						html += '<option value="'+v+'">'+v+' bulan</option>'
				}
		});

		$('#opt-tenor').html('<select class="form-control" name="tenor" id="tenor">'+html+'</select>')
	}

  const cara_pembayaran = (cara_pembayaran) => {
		const ncpembayaran = ['TRANSFER','LAINNYA']
		var html  = ''

		$.each(ncpembayaran, (k,v) => {
				if (cara_pembayaran == v) {
						html += '<option value="'+v+'" selected>'+v+'</option>'
				}else{
						html += '<option value="'+v+'">'+v+' bulan</option>'
				}
		});

		$('#opt-cara-pembayaran').html('<select class="form-control" name="cara_pembayaran" id="cara_pembayaran">'+html+'</select>')
	}

	'use strict'
	function getJaminan(kd_jj) {
		$.ajax({
			type:'GET',
			url:url+'Home/data_jaminan',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-jenis_jaminan').html(loading)
			},
			success:function(data){
			var html = ''
			$.each(data, function(index, value ) {
        if (kd_jj == value.kode_jenis_jaminan) {
          html += '<option value="'+value.kode_jenis_jaminan+'" selected>'+'['+value.kode_jenis_jaminan+'] '+value.nama_jenis_jaminan+'</option>'
        }else{
          html += '<option value="'+value.kode_jenis_jaminan+'">'+'['+value.kode_jenis_jaminan+'] '+value.nama_jenis_jaminan+'</option>'
        }
			//console.log(html)
			})
			$('#opt-jenis_jaminan').html('<select class="form-control" name="jenis_jaminan"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	getKantor(kantor_user)
	'use strict'
	function getKantor(kantor_user) {
		$.ajax({
			type:'GET',
			url:url+'Home/kantor',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-kantor').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
					if (value.KODE_KANTOR == kantor_user) {
						html += '<option selected>'+value.nama_area_kerja+'</option>'
						$('#v_kantor').val(value.KODE_KANTOR)
					}else{
						html += '<option>'+value.nama_area_kerja+'</option>'
					}
				//console.log(html)
				})
				$('#opt-kantor').html('<select class="form-control" disabled="true"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	'use strict'
	function getAo(kd_ao) {
		$.ajax({
			type:'GET',
			url:url+'Home/ao',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-ao').html(loading)
			},
			success:function(data){
				var html = ''
				$.each(data, function(index, value ) {
          if (kd_ao == value.kode_group2) {
            html += '<option value="'+value.kode_group2+'" selected>'+value.deskripsi_group2+'</option>'
          }else{
            html += '<option value="'+value.kode_group2+'">'+value.deskripsi_group2+'</option>'
          }
				})
				$('#opt-ao').html('<select class="form-control" name="ao"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	'use strict'
	function sumberAplikasi(sumber_aplikasi) {
		$.ajax({
			type:'GET',
			url:url+'Home/sumberAplikasi',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-sumber-aplikasi').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
          if (sumber_aplikasi == value.KODE_GROUP4) {
            html += '<option value="'+value.KODE_GROUP4+'" selected>'+value.deskripsi_group4+'</option>'
          }else{
            html += '<option value="'+value.KODE_GROUP4+'">'+value.deskripsi_group4+'</option>'
          }
				})
				$('#opt-sumber-aplikasi').html('<select class="form-control" name="sumber_aplikasi"><option value="null">Pilih</Option>'+html+'</select>')
			}
		})
	}

	'use strict'
	function jenisPinjaman(kd_jp) {
		$.ajax({
			type:'GET',
			url:url+'Home/jenisPinjaman',
			dataType:'JSON',
			beforeSend:function () {
				$('#opt-jenis-pinjaman').html(loading)
			},
			success:function(data){
			var html = ''
				$.each(data, function(index, value ) {
          if (kd_jp == value.kode_jenis_pinjaman) {
            html += '<option value="'+value.kode_jenis_pinjaman+'" selected>'+value.nama_jenis_pinjaman+'</option>'
          }else{
            html += '<option value="'+value.kode_jenis_pinjaman+'">'+value.nama_jenis_pinjaman+'</option>'
          }
				})
				$('#opt-jenis-pinjaman').html('<select class="form-control" name="jenis_pinjaman"><option value="null">Pilih</Option>'+html+'</select>')
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

	'use strict'
	function checkEmpty(obj) {
		$(obj).css("border","")
		if($(obj).val() == "") {
			$(obj).css("border","#FF0000 1px solid")
			toastNotvalid()
			return false;
		}
		return true;
	}

	'use strict'
	function checkSelect(obj) {
		$(obj).css("border","")
		if($(obj).val() == "null") {
			$(obj).css("border","#FF0000 1px solid")
			toastNotvalid()
		return false;
		}
		return true;
	}

	'use strict'
	function toastNotvalid() {
	    var x = document.getElementById("snackbar")
	    x.className = "show"
	    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)
	}

})
</script>
