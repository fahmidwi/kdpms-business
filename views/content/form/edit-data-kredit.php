<div id="snackbar"></div>
<div class="row">
	<div class="col-lg-12">
		<a href="javascript:void(0)" class="btn btn-dark btn-fw" id="backcn">
		  <i class="mdi  mdi-keyboard-backspace"></i>Kembali
		</a><br><br>
		<div class="card" style="margin-top: 1%">
      <div class="card-body">
    	<div class="col-md-12">
				<div style="float:right;" id="s">
					<div><p>Status Verifikasi : <v class="text-primary" style="float: right;" id="verifnasabah"> Terverifikasi</v></p></div>
				</div>
			</div>
       <h4 style="">Form Kredit Checking</h4><hr><br>
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <form class="form-sample" id="form-edit-kredit-checking">
              	<input type="hidden" name="id" id="id">
              	<input type="hidden" name="ao_to_email" id="ao_to_email">
								<input type="hidden" name="name_to_email" id="name_to_email">
								<input type="hidden" name="nik_to_email" id="nik_to_email">
								<input type="hidden" name="plafond_to_email" id="plafond_to_email">
              	<div class="row">
              		<div class="col-md-6">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Status</label>
											<div class="col-sm-8" style="margin-left:5%;">
				                <div class="form-group row">
													<div class="col-sm-6">
			 	                   <div class="form-radio">
			  	                    <input type="radio" class="form-check-input" name="status" id="on_progress_penjamin" value="ON PROGRESS">
			    	                  <p> On Progress</p>
			      	              </div>
			       	           </div>
			        	          <div class="col-sm-6">
			          	          <div class="form-radio">
			          	              <input type="radio" class="form-check-input" name="status" id="done_penjamin" value="DONE">
			           	             <p>Done</p>
			           	         </div>
			            	      </div>
			            	     </div>
											</div>
										</div>
									</div>
              	</div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nomor</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nomor" id="nomor" readonly/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Jenis Debitur</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="jenis_debitur" id="jenis_debitur" readonly/>
                      </div>
                    </div>
                  </div>
                </div><br>
                <!-- <div class="row" id="choselampiran" style="display:none;">
                  <div class="col-md-8">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Lampiran</label>
                      <div class="col-sm-10" >
                        <input type="file" class="form-control" name="files[]" placeholder="Masukan Lampiran" multiple/ style="margin-left:3.5%;">
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="row">
                  <div class="col-md-8">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-10" >
                        <div id="kos-lampiran" style="margin-left:3.5%;">
	                      </div>
	                      <div id="lampiran" style="margin-left:3.5%;">
	                      </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Notes</label>
                      <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="notes" id="notes" placeholder="Masukan Notes"  style="margin-left: -5%; width: 105%;"></textarea>
                      </div>
                    </div>
                  </div>
                </div><br>
                <button type="submit" class="btn btn-primary btn-fw" style="width: 100%;" id="submit-edit">Simpan perubahan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript" src="lib/js/changedate.js"></script>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'
	var id_kredit_check = $('#paramsID1').val()
	var id_order = $('#paramsID2').val()
	$('#id').val(id_kredit_check)
	$('#load_page').val('false');

	$('#backcn').click(() => {
		$('#load_page').val('false');
		load();
		$('#tamplate').val('views/content/data/data-kredit-checking.php')
		$('#app').load('views/content/data/data-kredit-checking.php')
	})

	$('#form-edit-kredit-checking').submit(function (e) {
			e.preventDefault()
			var data = new FormData(this)

			var status = $('input[name=status]:checked').val()
			if (status == 'ON PROGRESS') {
				var notes = true
				notes = checkEmpty('textarea[name=notes]')
				if (notes){
					saveEditKredit(data)
				}
			}else if (status == 'DONE'){
				var notes = true
				var file = true
				notes = checkEmpty('textarea[name=notes]')
				file = checkEmpty('input[type=file]')
				if (notes && file) {
					saveEditKredit(data)
				}
			}else{
				alert('Not respon, detected problems')
			}
	})

	function saveEditKredit(data) {
		$.ajax({
				type:'POST',
				url:url+'Home/save_edit_kredit',
				data:data,
				processData:false,
				contentType:false,
				cache:false,
				async:true,
				dataType:'JSON',
				beforeSend:function(){
					load()
					$('#load_page').val('true');
					$('#submit-edit').html(loading+' Sedang mengirim Data . . . ').prop('disabled',true)
				},
				success:function (data) {
					//$('#submit-edit').html('Simpan').prop('disabled',false)
					$('#load_page').val('false');
					if (data.msg == 'success') {
						$('#submit-edit').prop('disabled',false)
						$('#submit-edit').html('Simpan')
						$('#tamplate').val('views/content/data/data-kredit-checking.php')
						$('#app').load('views/content/data/data-kredit-checking.php')
						swal({
			        title: "Sukses!",
			        text: "data berhasil di ubah!",
			        icon: "success"
				    });
					}
				},
				error:function (xhr, status, error) {
					$('#simpan-edit').prop('disabled',false)
					$('#simpan-edit').html('Simpan')
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

	/*$('#done_penjamin').click(function() {
		$('#kos-lampiran').hide()
		$('#lampiran').show()
		$('#choselampiran').show()
	})

	$('#on_progress_penjamin').click(function() {
		$('#kos-lampiran').show()
		$('#choselampiran').hide()
	})*/
	get_detailKreditcheck(id_kredit_check)
	'use strict'
	function get_detailKreditcheck(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detailKreditcheck/'+id,
			dataType:'JSON',
			beforeSend:function () {
				load()
				$('#verifnasabah').html(loading)
				$('#nomor').val('Sedang mengambil data. . . ')
				$('#jenis_debitur').val('Sedang mengambil data. . . ')
				$('#notes').attr('disabled',true).val('Sedang Mengambil data . . . ')
				$('#submit-edit').prop('disabled',true)
			},
			success:function (res) {
				$('#lampiran').html('')
				$('#submit-edit').prop('disabled',false)
				$.each(res,function (k,v) {
					if (v.verifikasi == 1) {
						$('#submit-edit').prop('disabled',true).html('Data sudah di verifikasi tidak dapat di ubah')
						$('#verifnasabah').removeClass('text-danger')
						$('#verifnasabah').addClass('text-primary')
						var verifikasi = 'Terverifikasi'
					}else{
						$('#verifnasabah').addClass('text-danger')
						$('#verifnasabah').removeClass('text-primary')
						var verifikasi = 'Belum terverifikasi'
					}

					if (v.status == 'DONE') {
						$('#choselampiran').show()
						$('#done_penjamin').attr('checked',true)
					}else{
						$('#on_progress_penjamin').attr('checked',true)
					}

					$('#verifnasabah').html('&nbsp;'+verifikasi)
					$('#id').val(v.id)
					$('#nomor').val(v.nomor)
					$('#jenis_debitur').val(v.jenis_debitur)
					$('#notes').removeAttr('disabled').val(v.notes)
					/*var lampiran = $.parseJSON(v.lampiran)

					var htmllam = ''
					if (lampiran == null) {
						$('#kos-lampiran').html('<p class="text-danger">Tidak ada lampiran (file) Kredit checking!,&nbsp;<i class="text-primary">ubah status menjadi "<b>done</b>" untuk tambah file</i></p>')
					}else{
						$.each(lampiran,function (v,k) {
							$.each(k,function (v,k) {
								var urlLampiran = url+'assets/lampiran_kreditChecking/'+k
								htmllam += '<a href="'+urlLampiran+'" style="text-decoration:none;" target="_blank"><span class="mdi mdi-file-document"></span>'+k+'</a><br>'
							})
						})
						$('#lampiran').html(htmllam)
					}*/
				})
			}
		})
	}

	get_detail_order(id_order)
	function get_detail_order(id) {
		$.ajax({
			type:'GET',
			url:url+'Home/get_detail_order/'+id,
			dataType:'JSON',
			success:function (res) {
				console.log(res)
				$.each(res,function (v,k) {
					$('.ao_order_k').val(k.AO_ORDER)
					$('.v_ao_order_k').val(k.kode_ao)
					$('#ao_to_email').val(k.AO_ORDER)
					$('#name_to_email').val(k.nama_calon_nasabah)
					$('#nik_to_email').val(k.noktp)
					$('#plafond_to_email').val(FormatRupiah(k.plafond)+' - '+k.tenor+' bulan')
				})
			}
		})
	}

	'use strict'
	function checkEmpty(obj) {
		$(obj).css("border","")
		if($(obj).val() == "") {
			$(obj).css("border","#FF0000 1px solid")
			toastNotvalid('Periksa kembali dan mohon lengkapi form !!')
			return false;
		}
		return true;
	}
	'use strict'
	function toastNotvalid(title) {
			$('#snackbar').html(title)
	    var x = document.getElementById("snackbar")
	    x.className = "show"
	    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)
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
