<div class="row">
  <div class="col-lg-12">
    <?php include '../component/header-back.php'; ?>
    <?php include '../component/info-detail-cnasabah.php'; ?>
    <?php include '../component/info-detail-order.php'; ?>
    <?php include '../component/info-detail-memo-ao.php'; ?>
    <div id="app-detail"></div>
    <?php include '../component/info-foto-jaminan-ca.php'; ?>
    <?php include '../component/info-lampiran-ca.php'; ?>
    <div class="card" style="margin-top: 1%">
      <div class="card-body">
        <a href="javascript:void(0)" class="Buttoggle" from="lampiran"><i class="mdi mdi-dots-horizontal"
            style="float:right;"></i></a>
        <h4 style="">Persetujuan</h4>
        <hr><br>
        <div class="col-12 grid-margin" id="conReq">
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="col-sm-4">
                      <label style="font-weight:bold;">Rekomendasi Ao</label>
                    </div>
                    <div class="col-sm-8">
                      <p id="req_ao">
                        <p>
                    </div>
                  </li>
                </ul>
                <form id="form-edit" style="display:none;">
                  <br><br>
                  <hr>
                  <h3>Ubah Persetujuan</h3>
                  <input type="hidden" name="id_order" class="m_id_order" value="">
                  <p style="color:grey;margin-top:12px;margin-left:5px;">Rekomendasi : </p>
                  <input type="text" name="plafond" id="plafond_bag_edit" class="form-control"
                    onkeydown="return numbersonly(this, event)" onkeyup="javascript:tandaPemisahTitik(this)"
                    placeholder="Masukan Plafond yang di setujui" min="5"><br>
                  <div id="opt-tenor-edit"></div>
                  <p style="color:grey;margin-top:12px;margin-left:5px;">Alasan : </p>
                  <textarea name="alasan_bag_edit" id="alasan_bag_edit" class="form-control"
                    placeholder="Masukan alasan persetujuan" style="height:85px;margin-top:3px;"></textarea>
                  <p style="color:grey;margin-top:12px;margin-left:5px;">Syarat : </p>
                  <textarea name="syarat_bag_edit" id="syarat_bag_edit" class="form-control"
                    placeholder="Masukan syarat persetujuan" style="height:85px;margin-top:3px;"></textarea>
                  <p style="color:grey;margin-top:12px;margin-left:5px;">Catatan : </p>
                  <textarea name="notes_bag_edit" id="notes_bag_edit" class="form-control"
                    placeholder="Masukan catatan persetujuan" style="height:85px;margin-top:3px;"></textarea>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btn-edit"><i
                        class="mdi mdi-checkbox-marked-circle"></i>Perbaharui</button>
                    <button type="button" class="btn btn-danger" id="btn-batal"><i
                        class="mdi mdi-checkbox-marked-circle"></i>Batal</button>
                  </div>
                </form>
              </div>
              <div class="col-sm">
                <ul class="list-group">
                  <div id="detail-app">
                  </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <divButApR id="divButApR" style="float:right;">
    </divButApR>
    <modalApprove>
      <div id="myModalApprove" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Persetujuan</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="form-approval">
              <div style="padding:2%;">
                <input type="hidden" name="id_order" class="m_id_order" value="">
                <input type="hidden" name="ao_to_email" class="ao_to_email" value="">
                <input type="hidden" name="name_to_email" class="name_to_email" value="">
                <input type="hidden" name="nik_to_email" class="nik_to_email" value="">
                <input type="hidden" name="plafond_to_email" class="plafond_to_email" value="">
                <p style="color:grey;margin-top:12px;margin-left:5px;">Rekomendasi : </p>
                <input type="text" name="plafond" id="plafond_persetujuan" class="form-control" onkeydown="return numbersonly(this, event)"
                  onkeyup="javascript:tandaPemisahTitik(this)" placeholder="Masukan Plafond yang di setujui" min="5">
                <select class="form-control" name="tenor" style="margin-top:3px;">'+
                  <option value="null">Pilih tenor</option>
                  <option value="6">6 Bulan</option>
                  <option value="12">12 Bulan</option>
                  <option value="18">18 Bulan</option>
                  <option value="24">24 Bulan</option>
                  <option value="30">30 Bulan</option>
                  <option value="36">36 Bulan</option>
                  <option value="40">40 Bulan</option>
                  <option value="48">48 Bulan</option>
                  <option value="60">60 Bulan</option>
                  <option value="72">72 Bulan</option>
                </select>
                <p style="color:grey;margin-top:12px;margin-left:5px;">Alasan : </p>
                <textarea type="text" name="alasan" class="form-control" placeholder="Masukan alasan persetujuan"
                  style="height:85px;margin-top:3px;"></textarea>
                <p style="color:grey;margin-top:12px;margin-left:5px;">Syarat : </p>
                <textarea type="text" name="syarat" class="form-control" placeholder="Masukan syarat persetujuan"
                  style="height:85px;margin-top:3px;"></textarea>
                <p style="color:grey;margin-top:12px;margin-left:5px;">Catatan : </p>
                <textarea type="text" name="notes" class="form-control" placeholder="Masukan catatan persetujuan"
                  style="height:155px;margin-top:3px;"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btn-approval"><i
                    class="mdi mdi-checkbox-marked-circle"></i>Approve</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </modalApprove>
    <modalReject>
      <div id="myModalReject" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Approval</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <p>Calon Debitur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <mcd class="m_cd"></mcd>
              </p>
              <form id="form-reject">
                <div style="padding:2%;">
                  <input type="hidden" name="id_order" class="m_id_order" value="">
                  <input type="hidden" name="ao_to_email" class="ao_to_email" value="">
                  <input type="hidden" name="name_to_email" class="name_to_email" value="">
                  <input type="hidden" name="nik_to_email" class="nik_to_email" value="">
                  <input type="hidden" name="plafond_to_email" class="plafond_to_email" value="">
                  <textarea type="text" name="notes" class="form-control" placeholder="Masukan catatan penolakan"
                    style="height:155px;margin-top:3px;"></textarea>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" id="btn-reject"><i
                      class="mdi mdi-close-circle"></i>Reject</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </modalReject>
  </div>
</div>
<script type="text/javascript" src="lib/js/formatRupiah.js"></script>
<script type="text/javascript" src="lib/js/changedate.js"></script>
<script type="text/javascript" src="lib/js/url.js"></script>
<script type="text/javascript" src="lib/js/FormatPointInput.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  var loading = '<i class="mdi mdi-18px mdi-spin mdi-loading"></i>'
  var id_order = $('#paramsID1').val()
  var id_calon_debitur = $('#paramsID2').val()
  var id_kredit_check = $('#paramsID3').val()
  var session_id_user = $('#session_id_user').val();

  $('#load_page').val('false');
  $('#title-header').html('Detail Data Persetujuan')
  $('.m_id_order').val(id_order)

  $('#backcn').click(function() {
    $('#load_page').val('true');
    load()
    $('#tamplate').val('views/content/data/data-caa.php');
    $('#app').load('views/content/data/data-caa.php');
  })

  $('.Buttoggle').click(function() {
    var from = $(this).attr('from')
    if (from == 'cnasabah') {
      $('#conCnasabah').toggle()
    } else if (from == 'order') {
      $('#conOrder').toggle()
    } else if (from == 'memoao') {
      $('#conMemoAo').toggle()
    } else if (from == 'ca') {
      $('#conCa').toggle()
    } else if (from == 'foto_jaminan') {
      $('#conFotojam').toggle()
    } else if (from == 'lampiran') {
      $('#conLampiran').toggle()
    } else if (from == 'req') {
      $('#conReq').toggle()
    }
  })

  /*$('#conCnasabah').hide()
  $('#conOrder').hide()
  $('#conMemoAo').hide()
  $('#conKredit').hide()*/
  $('#data_pasangan').hide()
  $('#data_penjamin').hide()
  $('#tab_data_calon').addClass('link-active')

  $('#tab_data_calon').click(function(argument) {
    $(this).addClass('link-active')
    $('#tab_data_pasangan').removeClass('link-active')
    $('#tab_data_penjamin').removeClass('link-active')
    $('#conCnasabah').show()
    $('#data_c_nasabah').show()
    $('#data_pasangan').hide()
    $('#data_penjamin').hide()
  })

  $('#tab_data_pasangan').click(function(argument) {
    $(this).addClass('link-active')
    $('#tab_data_calon').removeClass('link-active')
    $('#tab_data_penjamin').removeClass('link-active')
    $('#conCnasabah').show()
    $('#data_pasangan').show()
    $('#data_penjamin').hide()
    $('#data_c_nasabah').hide()
  })

  $('#tab_data_penjamin').click(function(argument) {
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
      type: 'GET',
      url: url + 'Home/get_detail_calon_nasabah/' + id_calon_debitur,
      dataType: 'JSON',
      beforeSend: function() {
        $('#noktp').html(loading)
        $('#nama_lengkap').html(loading)
        $('#nibk').html(loading)
        $('#alamat').html(loading)
        $('.m_cd').html(loading)
      },
      success: function(data) {
        $.each(data, function(key, val) {
          $('.m_cd').html(val.nama_lengkap)
          $('#noktp').html('<p>' + val.no_ktp + '</p>')
          $('#nama_lengkap').html('<p>' + val.nama_lengkap + '</p>')
          $('#nibk').html('<p>' + val.nama_gadis_ibu_kandung + '</p>')
          $('#alamat').html('<p>' + val.alamat + ', RT.' + val.rt + ' RW.' + val.rw + ', KELURAHAN.' + val
            .Kelurahan + ', KECAMATAN.' + val.Kecamatan + ', ' + val.Kotakab + ', PROVINSI ' + val
            .propinsi + '</p>')
        })
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText)
        if (xhr.status == 500) {
          swal({
            title: error,
            text: 'Server bermasalah, periksa koneksi internet anda.',
            icon: "error"
          });
        }
      }
    })
  }
  'use strict'

  function showDetailPasangan(id_calon_debitur) {
    $.ajax({
      type: 'GET',
      url: url + 'Home/get_detail_pasangan/' + id_calon_debitur,
      dataType: 'JSON',
      success: function(data) {
        if (data.msg == 'Data tidak ditemukan') {
          $('#data_pasangan').html(
            '<v class="text-danger"><i class="mdi mdi-account-alert"></i> Tidak memiliki data pasangan</v>')
        } else {
          $.each(data, function(key, val) {
            $('#noktp_pasangan').html('<p>' + val.no_ktp + '</p>')
            $('#nama_lengkap_pasangan').html('<p>' + val.nama_identitas + '</p>')
            $('#nibk_pasangan').html('<p>' + val.nama_gadis_ibu_kandung + '</p>')
            $('#alamat_pasangan').html('<p>' + val.alamat + ', RT ' + val.rt + ' RW ' + val.rw +
              ', KELURAHAN ' + val.Kelurahan + ', KECAMATAN ' + val.Kecamatan + ', ' + val.Kotakab +
              ', PROVINSI ' + val.propinsi + '</p>')
          })
        }
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText)
        if (xhr.status == 500) {
          swal({
            title: error,
            text: 'Server bermasalah, periksa koneksi internet anda.',
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
      type: 'GET',
      url: url + 'Home/get_detail_penjamin/' + id_calon_debitur,
      dataType: 'JSON',
      success: function(data) {
        if (data.msg == 'Data tidak ditemukan') {
          $('#data_penjamin').html(
            '<v class="text-danger"><i class="mdi mdi-account-alert"></i> Tidak memiliki data penjamin</v>')
        } else {
          $.each(data, function(key, val) {
            $('#noktp_penjamin').html('<p>' + val.no_ktp + '</p>')
            $('#nama_lengkap_penjamin').html('<p>' + val.nama_lengkap + '</p>')
            $('#nibk_penjamin').html('<p>' + val.nama_gadis_ibu_kandung + '</p>')
            $('#alamat_penjamin').html('<p>' + val.alamat + ', RT ' + val.rt + ' RW ' + val.rw +
              ', KELURAHAN ' + val.Kelurahan + ', KECAMATAN ' + val.Kecamatan + ', ' + val.Kotakab +
              ', PROVINSI ' + val.propinsi + '</p>')
          })
        }
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText)
        if (xhr.status == 500) {
          swal({
            title: error,
            text: 'Server bermasalah, periksa koneksi internet anda.',
            icon: "error",
          });
        }
      }
    })
  }
  get_detail_order(id_order)

  function get_detail_order(id) {
    $.ajax({
      type: 'GET',
      url: url + 'Home/get_detail_order/' + id,
      dataType: 'JSON',
      beforeSend: function() {
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
      success: function(res) {
        $('textarea').html('')
        $('v').html('')
        $.each(res, function(v, k) {
          if (k.verifikasi == 0) {
            $('#veriforder').addClass('text-danger')
            $('#verifby').addClass('text-danger')
            $('#tglverif').addClass('text-danger')
            verifikasi = 'belum terverifikasi'
            verifikasi_by = 'belum terverifikasi'
            verifikasi_date = 'belum terverifikasi'
            $('#but').html(
              '<a href="javascript:void(0)" class="btn btn-success" style="width: 100%" id="buttonVerifOrder"><i class="mdi mdi-verified"></i>&nbsp;Verifikasi Order</a>'
            )
          } else {
            $('#but').html('')
            $('#veriforder').addClass('text-primary')
            $('#verifby').addClass('text-primary')
            $('#tglverif').removeClass('text-danger')
            verifikasi = 'Terverifikasi'
            verifikasi_by = k.pelaku_verifikasi
            verifikasi_date = changeDate(k.verifikasi_date)
          }

          if (k.status_assign == 'WAITING') {
            status_assign = '<label class="badge badge-success">' + k.status_assign + '&nbsp;&nbsp;(' +
              changeDate(k.tgl_assign) + ')</label>'

          } else if (k.status_assign == 'ON PROGRESS') {
            status_assign = '<label class="badge badge-primary">' + k.status_assign + '&nbsp;&nbsp;(' +
              changeDate(k.tgl_assign) + ')</label>'

          } else if (k.status_assign == 'CANCEL') {

            status_assign = '<label class="badge badge-danger">' + k.status_assign + '&nbsp;&nbsp;(' +
              changeDate(k.tgl_assign) + ')</label>'
          }
          ao_to_email = k.AO_ORDER
          name_to_email = k.nama_calon_nasabah
          nik_to_email = k.noktp
          plafond_to_email = FormatRupiah(k.plafond) + ' - ' + k.tenor + ' Bulan'
          $('.ao_to_email').val(ao_to_email)
          $('.name_to_email').val(name_to_email)
          $('.nik_to_email').val(nik_to_email)
          $('.plafond_to_email').val(plafond_to_email)
          $('id').html(k.id)
          $('#veriforder').html("&nbsp;" + verifikasi)
          $('#verifby').html(verifikasi_by)
          $('#tglverif').html("&nbsp;" + verifikasi_date)
          $('#status_assign').html(status_assign)
          $('#keterangan_assign').html(k.keterangan_assign)
          $('#nama_calon_nasabah').html('<p>' + k.nama_calon_nasabah + ' - ' + k.noktp + '</p>')
          $('#ao').html('<p>' + k.AO_ORDER + '</p>')
          $('#kantor').html('<p>' + k.nama_area_kerja + '</p>')
          $('#plafond').html('<p> Rp.' + FormatRupiah(k.plafond) + '</p>')
          $('#tenor').html('<p>' + k.tenor + ' bulan</p>')
          $('#jenis_pinjaman').html('<p>' + k.nama_jenis_pinjaman + '</p>')
          $('#tujuan_penggunaan').html('<p>' + k.tujuan_penggunaan + '</p>')
          $('#cara_pembayaran').html('<p>' + k.cara_pembayaran + '</p>')
          $('#mitra').html('<p>' + k.kode_mitra + '</p>')
          $('#jenis_jaminan').html('<p>' + k.nama_jenis_jaminan + '</p>')

          if (k.nama_jenis_jaminan == 'SERTIFIKAT') {
            $('#app-detail').load('views/content/component/info-detail-memo-ca-ser.php')
          } else {
            $('#app-detail').load('views/content/component/info-detail-memo-ca-ken.php')
          }

          $('#keterangan_jaminan').html(k.ket_jaminan)
          var lampiran = $.parseJSON(k.file_lampiran)

          var htmllam = ''
          if (lampiran.length == 0) {
            $('#file_lampiran').html('<p class="text-danger">Tidak ada file_lampiran!</p>')
          } else {
            $.each(lampiran, function(v, k) {
              $.each(k, function(v, k) {
                var urlLampiran = url + 'assets/lampiran/' + k
                htmllam += '<a href="' + urlLampiran +
                  '" style="text-decoration:none;" target="_blank"><span class="mdi mdi-file-document"></span>' +
                  k + '</a><br>'
              })
            })
            $('#file_lampiran').html(htmllam)
          }
          $('#sumber_aplikasi').html('<p>' + k.nama_sumber_aplikasi + '</p>')
          $('#keterangan_order').html('<p>' + k.keterangan + '</p>')
        })
      }
    })
  }
  get_detailMemoAo(id_order)

  function get_detailMemoAo(id) {
    $.ajax({
      type: 'GET',
      url: url + 'Home/get_detailMemoAo/' + id,
      dataType: 'JSON',
      beforeSend: function() {
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
      },
      success: function(res) {
        $('vkao').html('')
        $.each(res, function(v, k) {
          if (k.verifikasi == 0) {
            $('#verifmemoao').addClass('text-danger')
            $('#tglverifmemoao').addClass('text-danger')
            verifikasi = 'belum terverifikasi'
            verifikasi_by = 'belum terverifikasi'
            verifikasi_date = 'belum terverifikasi'
            $('#divButvao').html(
              '<a href="javascript:void(0)" class="btn btn-success" style="width: 100%" id="buttonVerifMemoAo"><i class="mdi mdi-verified"></i>&nbsp;Verifikasi Memo Ao</a>'
            )
          } else {
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
          $('#verifmemoao').html("&nbsp;" + verifikasi)
          $('#tglverifmemoao').html("&nbsp;" + verifikasi_date)

          $('#nama_anak').html('<p>' + k.nama_anak + '</p>')
          $('#nama_sekolah_anak').html('<p>' + k.nama_sekolah_anak + '</p>')
          $('#alamat_sekolah_anak').html('<p>' + k.alamat_sekolah_anak + '</p>')
          $('#no_aplikasi').html('<p>' + k.no_aplikasi + '</p>')
          $('#nama_calon_nasabah_ao').html('<p>' + k.calon_debitur + '</p>')
          $('#jaminan_utama').html('<p>' + k.jenis_jaminan + '</p>')
          $('#sumber_informasi').html('<p>' + k.deskripsi_group4 + '</p>')
          $('#tujuan_kredit').html('<p>' + k.tujuan_kredit + '</p>')
          $('#type_kredit').html('<p>' + k.type_kredit + '</p>')
          $('#jenis_fasilitas').html('<p>' + k.jenis_fasilitas + '</p>')
          $('#produk').html('<p>' + k.DESKRIPSI_PRODUK + '</p>')
          $('#plafond_kredit').html('<p>Rp. ' + FormatRupiah(k.plafon_kredit) + '</p>')
          $('#jangka_waktu').html('<p>' + k.jangka_waktu + ' Bulan</p>')
          $('#suku_bunga').html('<p>' + k.suku_bunga + ' %</p>')
          $('#akad_kredit').html('<p>' + k.akad_kredit + '</p>')
          $('#akad_jaminan').html('<p>' + k.akad_jaminan + '</p>')
          $('#gaji_debitur').html('<p> Rp. ' + FormatRupiah(k.gaji_debitur) + '</p>')
          $('#gaji_pasangan').html('<p> Rp. ' + FormatRupiah(k.gaji_pasangan) + '</p>')
          $('#gaji_penjamin').html('<p> Rp. ' + FormatRupiah(k.gaji_penjamin) + '</p>')
          $('#pengeluaran_rumah_tangga').html('<p> Rp. ' + FormatRupiah(k.pengeluaran_rumah_tangga) +
            '</p>')
          $('#pengeluaran_transportasi').html('<p> Rp. ' + FormatRupiah(k.pengeluaran_transportasi) +
            '</p>')
          $('#pengeluaran_pendidikan').html('<p> Rp. ' + FormatRupiah(k.pengeluaran_pendidikan) + '</p>')
          $('#pengeluaran_lainnya').html('<p> Rp. ' + FormatRupiah(k.pengeluaran_lainya) + '</p>')
          $('#angsuran_lain').html('<p> Rp. ' + FormatRupiah(k.angsuran_lain) + '</p>')
          $('#angsuran_kdpms').html('<p> Rp. ' + FormatRupiah(k.angsuran_kdpms) + '</p>')
          $('#hasil_cek_lingkungan').html(k.hasil_cek_lingkungan)
          $('#vertifikasi_data_debitur').html('<p>' + k.vertifikasi_data_debitur + '</p>')
          $('#ket_calon_debitur').html('<p>' + k.ket_calon_debitur + '</p>')
          $('#realisasi').html('<p>Rp. ' + k.realisasi + '</p>')
          $('#tenor_ao').html('<p>' + k.tenor + ' Bulan</p>')
        })
      }
    })
  }
  $('.d_shm').hide()
  $('.d_shgb').hide()
  $('.d_ajb').hide()
  $('.d_shrms').hide()
  get_detailMemoAoSertifikat(id_order)
  $('#angunansertifikat').hide()

  function get_detailMemoAoSertifikat(id) {
    $.ajax({
      type: 'GET',
      url: url + 'Home/get_detailMemoAoSertifikat/' + id,
      dataType: 'JSON',
      beforeSend: function() {
        load()
      },
      success: function(res) {
        if (res.amount == 0) {
          $('#angunansertifikat').hide()
        } else {
          $('ang').html('Sertifikat')
          $('#angunansertifikat').show()
          $.each(res, function(v, k) {
            $('#penggunaan').html('<p>' + k.penggunaan + '</p>')
            $('#lokasi_setifikat').html('<p>' + k.lokasi + '</p>')
            $('#kepemilikan_sertifikat').html('<p>' + k.nama_kepemilikan + '</p>')
            $('#no_sertifikat').html('<p>' + k.no_sertifikat + '</p>')
            $('#tgl_sertifikat').html('<p>' + changeDate(k.tgl_sertifikat) + '</p>')
            $('#jenis_sertifikat').html('<p>' + k.jenis_sertifikat + '</p>')
            $('#atas_nama').html('<p>' + k.atas_nama + '</p>')
            $('#alamat-sertifikat').html('<p>' + k.alamat + '</p>')
            $('#luas_tanah').html('<p>' + k.luas_tanah + ' M²</p>')
            $('#luas_bangunan').html('<p>' + k.luas_bangunan + ' M²</p>')
            $('#tgl_surat_ukur').html('<p>' + changeDate(k.tgl_surat_ukur) + '</p>')
            $('#no_surat_ukur').html('<p>' + k.no_surat_ukur + '</p>')
            if (k.jenis_sertifikat == 'SHM') {
              $('.d_shm').show()
              $('#no_shm').html('<p>' + k.no_shm + '</p>')
            } else if (k.jenis_sertifikat == 'SHGB') {
              $('.d_shgb').show()
              $('#no_surat_ukur').html('<p>' + k.no_surat_ukur + '</p>')
              $('#masa_berlaku_shgb').html('<p>' + k.masa_berlaku_shgb + '</p>')
            } else if (k.jenis_sertifikat == 'AJB') {
              $('.d_ajb').show()
              $('#no_ajb').html('<p>' + k.no_ajb + '</p>')
              $('#tgl_ajb').html('<p>' + k.tgl_ajb + '</p>')
            } else if (k.jenis_sertifikat == 'SHMRS') {
              $('.d_shrms').show()
              $('#masa_berlaku_shmrs').html('<p>' + k.masa_berlaku_shmrs + '</p>')
            }
            $('#imb').html('<p>' + k.imb + '</p>')
            $('#legalitas').html('<p>' + k.legalitas + '</p>')
            $('#catatan_lainnya').html('<p>' + k.catatan_lainnya + '</p>')
            $('#kondisi_bangunan').html('<p>' + k.kondisi_bangunan + '</p>')
            $('#nilai_njop').html('<p>' + k.nilai_njop + '</p>')
            $('#nilai_taksasi').html('<p>' + k.nilai_taksasi + '</p>')
            $('#tgl_taksasi').html('<p>' + changeDate(k.tgl_taksasi) + '</p>')
          })
        }

      }
    })
  }

  get_detailMemoAoKendaraan(id_order)
  $('#angunankendaraan').hide()

  function get_detailMemoAoKendaraan(id) {
    $.ajax({
      type: 'GET',
      url: url + 'Home/get_detailMemoAoKendaraan/' + id,
      dataType: 'JSON',
      beforeSend: function() {
        load()
      },
      success: function(res) {
        if (res.amount == 0) {
          $('#angunankendaraan').hide()
        } else {
          $('ang').html('Kendaraan')
          $('#angunankendaraan').show()
          $.each(res, function(v, k) {
            $('#nama_merk').html('<p>' + k.nama_merk + '</p>')
            $('#type_kendaraan').html('<p>' + k.type_kendaraan + '</p>')
            $('#jenis_kendaraan').html('<p>' + k.jenis_kendaraan + '</p>')
            $('#kepemilikan').html('<p>' + k.kepemilikan + '</p>')
            $('#penggunaan_ao_ken').html('<p>' + k.penggunaan + '</p>')
            $('#atas_nama_ken').html('<p>' + k.atas_nama + '</p>')
            $('#alamat_bpkb').html('<p>' + k.alamat_bpkb + '</p>')
            $('#kecamatan_bpkb').html('<p>' + k.kecamatan_bpkb + '</p>')
            $('#kelurahan_bpkb').html('<p>' + k.kelurahan_bpkb + '</p>')
            $('#kota_bpkb').html('<p>' + k.kota_bpkb + '</p>')
            $('#nilai_likuidas').html('<p>' + FormatRupiah(k.nilai_likuidas) + '</p>')
            $('#kondisi_jaminan').html('<p>' + k.kondisi_jaminan + '</p>')
            $('#tgl_taksasi').html('<p>' + k.tgl_taksasi + '</p>')
            $('#tgl_exp_pajak').html('<p>' + k.tgl_exp_pajak + '</p>')
            $('#tgl_exp_stnk').html('<p>' + k.tgl_exp_stnk + '</p>')
            $('#no_bpkb').html('<p>' + k.no_bpkb + '</p>')
            $('#no_rangka').html('<p>' + k.no_rangka + '</p>')
            $('#no_mesin').html('<p>' + k.no_mesin + '</p>')
            $('#no_stnk').html('<p>' + k.no_stnk + '</p>')
            $('#no_polisi').html('<p>' + k.no_polisi + '</p>')
            $('#warna').html('<p>' + k.warna + '</p>')
            $('#tahun').html('<p>' + k.tahun + '</p>')
            $('#no_faktur').html('<p>' + k.no_faktur + '</p>')
            $('#silinder').html('<p>' + k.silinder + '</p>')
            $('#nilai_taksasi').html('<p>' + FormatRupiah(k.nilai_taksasi) + '</p>')
          })
        }

      }
    })
  }

  $('#myModalApprove').on('click', '#btn-approval', function() {
    var id_order = $(this).attr('dataIdOr')
    var data = $('#form-approval').serialize()
    var plafond = true
    var tenor = true
    var notes = true

    plafond = checkEmpty('#plafond_persetujuan')
    tenor = checkSelect('select[name=tenor]')
    alasan = checkEmpty('textarea[name=alasan]')
    syarat = checkEmpty('textarea[name=syarat]')
    notes = checkEmpty('textarea[name=notes]')

    if (plafond && tenor && alasan && syarat && notes) {
      Approval(data, id_order)
    }
  })
  'use strict'

  function Approval(data, id_order) {
    $.ajax({
      type: 'POST',
      url: url + 'Home/AddCaaApproval',
      data: data,
      dataType: 'JSON',
      beforeSend: function() {
        $('#load_page').val('true');
        load()
        $('#btn-approval').prop('disabled', true);
        $('#btn-approval').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Approved . . .');
      },
      success: function(data) {
        $('#load_page').val('false');
        if (data.msg == 'success') {
          $('#btn-approval').prop('disabled', false)
          $('#btn-approval').html('Simpan')
          $('#myModalApprove').modal('hide');
          setTimeout(function() {
            load()
            $('#app').load('views/content/data/data-caa.php')
          }, 500)
          swal({
            title: "Sukses!",
            text: "data berhasil di approve!",
            icon: "success"
          });
        }
      },
      error: function(xhr, status, error) {
        $('#btn-approval').prop('disabled', false)
        $('#btn-approval').html('Simpan')
        console.log(xhr.responseText)
        if (xhr.status == 500) {
          swal({
            title: error,
            text: 'Server bermasalah, periksa koneksi internet anda.',
            icon: "error"
          });
        }
      }
    })
  }

  $('#myModalReject').on('click', '#btn-reject', function() {
    var id_order = $(this).attr('dataIdOr')
    var data = $('#form-reject').serialize()
    var notes = true

    notes = checkEmpty('textarea[name=notesR]')

    if (notes) {
      Reject(data, id_order)
    }
  })

  'use strict'

  function Reject(data, id_order) {
    $.ajax({
      type: 'POST',
      url: url + 'Home/AddCaaReject',
      data: data,
      dataType: 'JSON',
      beforeSend: function() {
        $('#load_page').val('true');
        load()
        $('#btn-reject').prop('disabled', true);
        $('#btn-reject').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Rejected . . .');
      },
      success: function(data) {
        $('#load_page').val('false');
        if (data.msg == 'success') {
          $('#btn-reject').prop('disabled', false)
          $('#btn-reject').html('Simpan')
          $('#myModalReject').modal('hide');
          setTimeout(function() {
            load()
            $('#app').load('views/content/data/data-caa.php')
          }, 500)
          swal({
            title: "Sukses!",
            text: "data berhasil di reject!",
            icon: "success"
          });
        }
      },
      error: function(xhr, status, error) {
        $('#simpan-memo-ca').prop('disabled', false)
        $('#simpan-memo-ca').html('Simpan')
        console.log(xhr.responseText)
        if (xhr.status == 500) {
          swal({
            title: error,
            text: 'Server bermasalah, periksa koneksi internet anda.',
            icon: "error"
          });
        }
      }
    })
  }

  get_DetailCAA(id_order)

  function get_DetailCAA(id) {
    $.ajax({
      type: 'GET',
      url: url + 'Home/get_DetailCAA/' + id,
      dataType: 'JSON',
      beforeSend: function() {
        $('#w_foto_jaminan').html(loading)
        $('#divButApR').html(loading)
        $('#w_lampiran').html(loading)
      },
      success: function(res) {
        $.each(res, function(v, k) {
          console.log(res)
          if (k.status_app == '0') {
            var ButAppR =
              '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalApprove"><i class="mdi mdi-checkbox-marked-circle"></i>Approve</button>&nbsp;&nbsp;<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalReject"><i class="mdi mdi-close-circle"></i>Reject</button>'
          } else {
            var ButAppR = ''
          }

          $('#divButApR').html(ButAppR)

          var FotoJaminan = $.parseJSON(k.foto_jaminan)

          var htmlFotjam = ''
          if (FotoJaminan.length == 0) {
            $('#w_foto_jaminan').html('<p class="text-danger">Tidak ada Foto Jaminan!</p>')
          } else {
            $.each(FotoJaminan, function(v, k) {
              $.each(k, function(v, k) {
                var urlLampiran = url + 'assets/foto_jaminan/' + k

                htmlFotjam += '<div class="col-sm-2 col-xs-2">' +
                  '<a href="' + urlLampiran + '" target="_blank">' +
                  '<div id="hover_fot_jam" style="background:black;z-index:1;width:155px;height:155px;position:absolute;opacity:0.8">' +
                  '<p style="text-align:center;margin-top:33%;"><i class="mdi mdi-eye mdi-24px"></i><br>Lihat Foto</p>' +
                  '</div>' +
                  '<img src="' + urlLampiran + '" style="width:155px;height:155px;">' +
                  '</a>' +
                  '</div>'
              })
            })
            $('#w_foto_jaminan').html(htmlFotjam)
          }

          var lampiran = $.parseJSON(k.lampiran)

          var htmllam = ''
          if (lampiran.length == 0) {
            $('#w_lampiran').html('<p class="text-danger">Tidak ada lampiran!</p>')
          } else {
            $.each(lampiran, function(v, k) {
              $.each(k, function(v, k) {
                var urlLampiran = url + 'assets/lampiran_caa/' + k
                htmllam += '<a href="' + urlLampiran +
                  '" style="text-decoration:none;" target="_blank"><span class="mdi mdi-file-document"></span>' +
                  k + '</a>&nbsp;&nbsp;&nbsp;&nbsp;'
              })
            })
            $('#w_lampiran').html(htmllam)
          }
        })
      }
    })
  }
  chechkAppMgr(id_order)
  'use strict'

  function chechkAppMgr(id_order) {
    $.ajax({
      type: 'GET',
      url: url + 'Home/checkApproveManager/' + id_order,
      dataType: 'JSON',
      success: function(data) {
        if (data.length == 1) {
          if (session_jabatan == 'manager') {
            $('#divButApR').html(' ')
          }
        }
      }
    })
  }
  'use strict'

  function chechkRejectMgr(id_order) {
    $.ajax({
      type: 'GET',
      url: url + 'Home/checkRejectManager/' + id_order,
      dataType: 'JSON',
      success: function(data) {
        if (data.length == 1) {
          $('#alert-app' + id_order).html(' ')
        }
      }
    })
  }
	
	$('#form-edit').on('click', '#btn-edit', function() {
		var plafond = $('input[name=plafond]').val();
		var tenor_bag_edit = $('select[name=tenor_bag_edit]').val();
		var alasan_bag_edit = CKEDITOR.instances.alasan_bag_edit.getData();
		var syarat_bag_edit = CKEDITOR.instances.syarat_bag_edit.getData();
		var notes_bag_edit = CKEDITOR.instances.notes_bag_edit.getData();
		const data = {
			id_order:id_order,
			alasan_bag_edit:alasan_bag_edit,
			syarat_bag_edit:syarat_bag_edit,
			notes_bag_edit:notes_bag_edit,
			plafond:plafond,
			tenor_bag_edit:tenor_bag_edit
		}
		UbahPersetujuan(data)
  })

	function UbahPersetujuan(data) {
    $.ajax({
      type: 'POST',
      url: url + 'Home/ChangeApproval',
      data:data,
      dataType: 'JSON',
      beforeSend: function() {
        $('#load_page').val('true');
        load()
        $('#btn-edit').prop('disabled', true);
        $('#btn-batal').prop('disabled', true);
        $('#btn-edit').html('<i class="mdi mdi-18px mdi-spin mdi-loading"></i> Mengirim data . . .');
      },
      success: function(data) {
				console.log(data);
        $('#load_page').val('false');
        if (data.msg == 'success') {
          $('#btn-edit').prop('disabled', false)
          $('#btn-edit').html('Perbaharui')
          $('#myModalApprove').modal('hide');
          $('#app').load('views/content/data/detail-caa.php')
          swal({
            title: "Sukses!",
            text: "data berhasil di ubah!",
            icon: "success"
          });
        }
      },
      error: function(xhr, status, error) {
        $('#btn-approval').prop('disabled', false)
        $('#btn-approval').html('Simpan')
        console.log(xhr.responseText)
        if (xhr.status == 500) {
          swal({
            title: error,
            text: 'Server bermasalah, periksa koneksi internet anda.',
            icon: "error"
          });
        }
      }
    })
  }

  DataApprove(id_order)
  $('#detail-app').on('click', '#ubah', function() {
		getEditAproval(id_order);
  })

  $('#form-edit').on('click', '#btn-batal', function() {
    $('#form-edit').hide();
		$('#ubah').show();
  })

  'use strict'
	function getEditAproval(id_order) {
		// PARSING DATA EDIT
		$.ajax({
      type: 'GET',
      url: url + 'Home/getDataApproval/' + id_order,
      dataType: 'JSON',
      beforeSend: () => {
        $('#load_page').val('true');
				load()
				swal({
					text:'Sedang mengambil data . . .',
					buttons: false,
					closeModal: false,
				})
      },
      success: function(res) {
				stateformedit = true;
				swal.close();
        $('#load_page').val('false');
				$('#plafond_bag_edit').val(res.plafon.split('.')[0]);
				tenor(res.tenor);
				CKEDITOR.instances.alasan_bag_edit.setData(res.alasan);
				CKEDITOR.instances.syarat_bag_edit.setData(res.syarat);
				CKEDITOR.instances.notes_bag_edit.setData(res.notes);
				$('#form-edit').show();
				$('#ubah').hide();
			}
		});
	}

  function DataApprove(id_order) {
    $.ajax({
      type: 'GET',
      url: url + 'Home/DataApprove/' + id_order,
      dataType: 'JSON',
      beforeSend: () => {
        $('#detail-app').html('<p style="font-style:italic;color:grey;">' + loading +
          ' Sedang mengambil data persetujuan/Penolakan . . . . .</p>')
      },
      success: function(data) {
        console.log(data)
        var html = ''
        $.each(data, function(k, v) {
          console.log(v.status_app)
          if (v.status_app == 1) {
            var status_app =
              '<b class="text-success" style="float:right;"><i class="mdi mdi-check-circle">Menyetujui</i></b>'
            var syarat_alasan = '<div class="row">' +
              '<div class="col-sm-4">' +
              '<label>Alasan</label>' +
              '</div>' +
              '<div class="col-sm-8">' +
              '<p>' + v.alasan + '<p>' +
              '</div>' +
              '</div>' +
              '<div class="row">' +
              '<div class="col-sm-4">' +
              '<label>Syarat</label>' +
              '</div>' +
              '<div class="col-sm-8">' +
              '<p>' + v.syarat + '<p>' +
              '</div>' +
              '</div>'
            var persetujuan = '<p>Rp.' + FormatRupiah(v.plafon) + ' - ' + v.tenor + ' Bulan<p>'
          } else if (v.status_app == 2) {
            var status_app =
              '<b class="text-danger" style="float:right;"><i class="mdi mdi-close-circle">Menolak</i></b>'
            var syarat_alasan = ''
            var persetujuan =
              '<p style="color:grey;font-weight:bold;"><i>Tidak menyetujui pinjaman</i></p>'
          } else {
            var syarat_alasan = ''
            var status_app = ''
            var persetujuan = ''
          }

          if (v.user_id != session_id_user) {
            var hideditbtn = 'display:none';
          } else {
            var hideditbtn = '';
          }

          html += '<li class="list-group-item">' +
            '<div class="row">' +
            '<div class="col-sm-4">' +
            '<label><b>' + v.jabatan + '</b></label>' +
            '</div>' +
            '<div class="col-sm-8">' +
            status_app +
            persetujuan +
            '</div>' +
            '</div>' +
            syarat_alasan +
            '<div class="row">' +
            '<div class="col-sm-4">' +
            '<label>Notes</label>' +
            '</div>' +
            '<div class="col-sm-8">' +
            '<p>' + v.notes + '<p>' +
            '<a href="javascript:void(0)" id="ubah" class="text-primary" style="float:right;' +
            hideditbtn + '"><i class="mdi mdi-pencil">Ubah</i></a>' +
            '</div>' +
            '</div>' +
            '</li>'
        })
        $('#detail-app').html(html)
      }
    })
  }

  const tenor = (tenor) => {
    const ntenor = ['6', '12', '18', '24', '36', '40', '48', '60', '72']
    var html = ''

    $.each(ntenor, (k, v) => {
      if (tenor == v) {
        html += '<option value="' + v + '" selected>' + v + ' bulan</option>'
      } else {
        html += '<option value="' + v + '">' + v + ' bulan</option>'
      }
    });

    $('#opt-tenor-edit').html('<select class="form-control" name="tenor_bag_edit" id="tenor">' + html +
      '</select>')
  }

  'use strict'

  function checkEmpty(obj) {
    $(obj).css("border", "")
    if ($(obj).val() == "") {
      $(obj).css("border", "#FF0000 1px solid")
      return false;
    }
    return true;
  }

  'use strict'

  function checkSelect(obj) {
    $(obj).css("border", "")
    if ($(obj).val() == "null") {
      $(obj).css("border", "#FF0000 1px solid")
      return false;
    }
    return true;
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
});
CKEDITOR.config.toolbar = [
  ['Styles', 'Format', 'Font', 'FontSize'],
  '/',
  ['Bold', 'Italic', 'Underline', 'StrikeThrough', '-', 'Undo', 'Redo', '-', 'Cut', 'Copy', 'Paste', 'Find',
    'Replace', '-', 'Outdent', 'Indent', '-', 'Print'
  ],
  '/',
  ['NumberedList', 'BulletedList', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
];
CKEDITOR.replace('alasan_bag_edit', {
  removeButtons: 'Cut,Copy,Paste,Undo,Redo,Anchor'
});
CKEDITOR.replace('syarat_bag_edit', {
  removeButtons: 'Cut,Copy,Paste,Undo,Redo,Anchor'
});
CKEDITOR.replace('notes_bag_edit', {
  removeButtons: 'Cut,Copy,Paste,Undo,Redo,Anchor'
});
</script>