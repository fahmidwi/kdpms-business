<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Model_business extends CI_Model {

	//LOGIN
	public function cek_login($tabel,$where){
		return $this->db->get_where($tabel,$where);
	}

	/*DASHBOARD*/

	public function get_total_pengajuan($session_kantor)
	{
		$query = 'SELECT sum(los_order.plafond) AS total_pengajuan FROM los_calon_nasabah,los_order WHERE los_calon_nasabah.id_calon_debitur = los_order.id_calon_debitur AND los_calon_nasabah.kode_kantor ='.$session_kantor;
		return $this->db->query($query);

	}

	/*public function get_total_pengajuan_verifikasi($value='')
	{
		$query = 'SELECT sum(los_order.plafond) AS total_pengajuan FROM los_order WHERE verifikasi = 1';
		return $this->db->query($query);

	}*/

	/*public function get_total_pengajuan_belum_verifikasi($value='')
	{
		$query = 'SELECT sum(los_order.plafond) AS total_pengajuan FROM los_order WHERE verifikasi = 0';
		return $this->db->query($query);

	}*/

	public function get_total_disetujui($session_kantor)
	{
		$query = 'SELECT sum(los_caa_approval.plafon) AS total_approval FROM los_calon_nasabah,los_order,los_caa_approval WHERE los_calon_nasabah.id_calon_debitur = los_order.id_calon_debitur AND los_order.id = los_caa_approval.id_order AND los_caa_approval.status_app = "1" AND los_caa_approval.jabatan = "ketua" AND los_calon_nasabah.kode_kantor = '.$session_kantor;
		return $this->db->query($query);

	}


	//GET
	public function get($tabel,$id)
	{
		$this->db->order_by($id,'DESC');
		return $this->db->get($tabel);
	}

	public function get_where($tabel,$by,$urutan,$where)
	{
		$this->db->order_by($by,$urutan);
		$this->db->where($where);
		return $this->db->get($tabel);
	}

	public function add_data($tabel,$data)
	{
		return $this->db->insert($tabel,$data);
	}

	public function delete_data($tabel,$where)
	{
		$this->db->where($where);
		return $this->db->delete($tabel);
	}

	public function update_data($tabel,$data,$where)
	{
		return $this->db->update($tabel,$data,$where);
	}


	public function add_data_nasabah($tabel,$data)
	{
		$this->db->insert($tabel,$data);
		return $this->db->insert_id();
	}

	public function data_c_nasabah($areakerja,$startlimit,$keysearch,$ao)
	{
		if ($ao == null) {
			$queryAo = '';
		}else{
			$queryAo = 'AND los_cn.create_by = '.$ao.'';
		}
		if ($keysearch == '') {
			if ($areakerja == 'semua') {
				$query = 'SELECT los_cn.*,kre_kg2.deskripsi_group2 AS AO, app_kk.NAMA_KANTOR, app_kk.nama_area_kerja, app_kk.ALAMAT_KANTOR FROM los_calon_nasabah AS los_cn, kre_kode_group2 AS kre_kg2, app_kode_kantor AS app_kk WHERE los_cn.kode_kantor = app_kk.KODE_KANTOR AND los_cn.kode_ao = kre_kg2.KODE_GROUP2 '.$queryAo.' ORDER BY los_cn.id_calon_debitur DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT los_cn.*,kre_kg2.deskripsi_group2 AS AO, app_kk.NAMA_KANTOR, app_kk.nama_area_kerja, app_kk.ALAMAT_KANTOR FROM los_calon_nasabah AS los_cn, kre_kode_group2 AS kre_kg2, app_kode_kantor AS app_kk WHERE los_cn.kode_kantor = app_kk.KODE_KANTOR AND los_cn.kode_ao = kre_kg2.KODE_GROUP2 '.$queryAo.' AND los_cn.kode_kantor = '.$areakerja.' ORDER BY los_cn.id_calon_debitur DESC LIMIT '.$startlimit.',10';
			}
		}else{
			if ($areakerja == 'semua') {
				$query = 'SELECT los_cn.*,kre_kg2.deskripsi_group2 AS AO, app_kk.NAMA_KANTOR, app_kk.nama_area_kerja, app_kk.ALAMAT_KANTOR FROM los_calon_nasabah AS los_cn, kre_kode_group2 AS kre_kg2, app_kode_kantor AS app_kk WHERE los_cn.kode_kantor = app_kk.KODE_KANTOR AND los_cn.kode_ao = kre_kg2.KODE_GROUP2 '.$queryAo.' AND los_cn.nama_identitas LIKE "%'.$keysearch.'%" ORDER BY los_cn.id_calon_debitur DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT los_cn.*,kre_kg2.deskripsi_group2 AS AO, app_kk.NAMA_KANTOR, app_kk.nama_area_kerja, app_kk.ALAMAT_KANTOR FROM los_calon_nasabah AS los_cn, kre_kode_group2 AS kre_kg2, app_kode_kantor AS app_kk WHERE los_cn.kode_kantor = app_kk.KODE_KANTOR AND los_cn.kode_ao = kre_kg2.KODE_GROUP2 '.$queryAo.' AND los_cn.nama_identitas LIKE "%'.$keysearch.'%" AND los_cn.kode_kantor = '.$areakerja.' ORDER BY los_cn.id_calon_debitur DESC LIMIT '.$startlimit.',10';
			}
		}


		return $this->db->query($query);
	}

	public function get_calon_nasabah($id_calon_debitur)
	{
		$query = '
				SELECT los_cn.*,
				app_kk.NAMA_KANTOR, app_kk.nama_area_kerja, app_kk.ALAMAT_KANTOR,
				kre_kg2.deskripsi_group2 AS AO,
				css_ka.DESKRIPSI AS agama,
				css_kp.DESKRIPSI_PEKERJAAN AS pekerjaan_cn,
				css_sp.desk_sumber_penghasilan AS sumber_penghasilan_cn,
				los_pend.nama_pendidikan AS pendidikan_cn,
				los_kep_rum.nama_kepemilikan AS kep_rumah_cn,
				los_prop.name AS propinsi,
				los_kk.name AS Kotakab,
				los_kec.name AS Kecamatan,
				los_kel.name AS Kelurahan,
				los_prop_dom.name AS propinsi_domisili,
				los_kk_dom.name AS Kotakab_domisili,
				los_kec_dom.name AS Kecamatan_domisili,
				los_kel_dom.name AS Kelurahan_domisili,
				user.nama AS user_input
				FROM los_calon_nasabah AS los_cn,
					 app_kode_kantor AS app_kk,
					 kre_kode_group2 AS kre_kg2,
					 css_kode_agama AS css_ka,
					 css_kode_pekerjaan AS css_kp,
					 css_sumber_penghasilan AS css_sp,
					 los_pendidikan AS los_pend,
					 los_kepemilikan_rumah AS los_kep_rum,
					 los_propinsi AS los_prop,
					 los_kotakab AS los_kk,
					 los_kecamatan AS los_kec,
					 los_kelurahan AS los_kel,
					 los_propinsi AS los_prop_dom,
					 los_kotakab AS los_kk_dom,
					 los_kecamatan AS los_kec_dom,
					 los_kelurahan AS los_kel_dom,
					 user
				WHERE
				los_cn.kode_kantor = app_kk.KODE_KANTOR
				AND los_cn.kode_ao = kre_kg2.KODE_GROUP2
				AND los_cn.kode_agama = css_ka.DESKRIPSI
				AND los_cn.pekerjaan = css_kp.KODE_PEKERJAAN
				AND los_cn.sumber_penghasilan = css_sp.kode_sumber_penghasilan
				AND los_cn.pendidikan = los_pend.kode_pendidikan
				AND los_cn.kepemilikan_rumah = los_kep_rum.kode_kepemilikan
				AND los_cn.propinsi_id = los_prop.propinsi_id
				AND los_cn.kotakab_id = los_kk.kotakab_id
				AND los_cn.kecamatan_id = los_kec.kecamatan_id
				AND los_cn.kelurahan_id = los_kel.kelurahan_id
				AND los_cn.domisili_propinsi_id = los_prop_dom.propinsi_id
				AND los_cn.domisili_kotakab_id = los_kk_dom.kotakab_id
				AND los_cn.domisili_kecamatan_id = los_kec_dom.kecamatan_id
				AND los_cn.domisili_kelurahan_id = los_kel_dom.kelurahan_id
				AND los_cn.create_by = user.user_id
				AND  los_cn.id_calon_debitur = '.$id_calon_debitur;
		return $this->db->query($query);
	}

	public function get_pasangan($id_calon_debitur)
	{
		$query = '
				SELECT los_cn_p.*,
				css_ka.DESKRIPSI AS agama,
				css_sp.desk_sumber_penghasilan AS sumber_penghasilan_cn_p,
				los_pend.nama_pendidikan AS pendidikan_cn_p,
				los_prop.name AS propinsi,
				los_kk.name AS Kotakab,
				los_kec.name AS Kecamatan,
				los_kel.name AS Kelurahan,
				los_prop_dom.name AS propinsi_domisili,
				los_kk_dom.name AS Kotakab_domisili,
				los_kec_dom.name AS Kecamatan_domisili,
				los_kel_dom.name AS Kelurahan_domisili
				FROM los_calon_nasabah_pasangan AS los_cn_p,
					 css_kode_agama AS css_ka,
					 css_sumber_penghasilan AS css_sp,
					 los_pendidikan AS los_pend,
					 los_propinsi AS los_prop,
					 los_kotakab AS los_kk,
					 los_kecamatan AS los_kec,
					 los_kelurahan AS los_kel,
					 los_propinsi AS los_prop_dom,
					 los_kotakab AS los_kk_dom,
					 los_kecamatan AS los_kec_dom,
					 los_kelurahan AS los_kel_dom
				WHERE
				 los_cn_p.kode_agama = css_ka.DESKRIPSI
				AND los_cn_p.sumber_penghasilan = css_sp.kode_sumber_penghasilan
				AND los_cn_p.pendidikan = los_pend.kode_pendidikan
				AND los_cn_p.propinsi_id = los_prop.propinsi_id
				AND los_cn_p.kotakab_id = los_kk.kotakab_id
				AND los_cn_p.kecamatan_id = los_kec.kecamatan_id
				AND los_cn_p.kelurahan_id = los_kel.kelurahan_id
				AND los_cn_p.domisili_propinsi_id = los_prop_dom.propinsi_id
				AND los_cn_p.domisili_kotakab_id = los_kk_dom.kotakab_id
				AND los_cn_p.domisili_kecamatan_id = los_kec_dom.kecamatan_id
				AND los_cn_p.domisili_kelurahan_id = los_kel_dom.kelurahan_id
				AND  los_cn_p.id_calon_debitur = '.$id_calon_debitur;
		return $this->db->query($query);
	}

	public function get_penjamin($id_calon_debitur)
	{
		$query = '
				SELECT los_cn_p.*,
				css_ka.DESKRIPSI AS agama,
				los_prop.name AS propinsi,
				los_kk.name AS Kotakab,
				los_kec.name AS Kecamatan,
				los_kel.name AS Kelurahan
				FROM los_calon_nasabah_penjamin AS los_cn_p,
					 css_kode_agama AS css_ka,
					 los_propinsi AS los_prop,
					 los_kotakab AS los_kk,
					 los_kecamatan AS los_kec,
					 los_kelurahan AS los_kel
				WHERE
				los_cn_p.kode_agama = css_ka.DESKRIPSI
				AND los_cn_p.propinsi_id = los_prop.propinsi_id
				AND los_cn_p.kotakab_id = los_kk.kotakab_id
				AND los_cn_p.kecamatan_id = los_kec.kecamatan_id
				AND los_cn_p.kelurahan_id = los_kel.kelurahan_id
				AND  los_cn_p.id_calon_debitur = '.$id_calon_debitur;

		return $this->db->query($query);
	}

	/*ORDER*/
	public function get_order($areakerja,$startlimit,$keysearch,$ao)
	{
		if ($ao == null) {
			$queryAo = '';
		}else{
			$queryAo = 'AND los_cn.create_by = '.$ao.'';
		}
		if ($keysearch == '') {
			if ($areakerja == 'semua') {
				$query = 'SELECT los_or.*,los_cn.create_by, los_cn.nama_identitas AS nama_calon_nasabah, los_jj.nama_jenis_jaminan AS jenis_jaminan
				FROM los_order AS los_or, los_jenis_jaminan AS los_jj, los_calon_nasabah AS los_cn
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan '.$queryAo.' ORDER BY id DESC LIMIT '.$startlimit.',10';

			}else{
				$query = 'SELECT los_or.*,los_cn.create_by, los_cn.nama_identitas AS nama_calon_nasabah, los_jj.nama_jenis_jaminan AS jenis_jaminan
				FROM los_order AS los_or, los_jenis_jaminan AS los_jj, los_calon_nasabah AS los_cn
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan '.$queryAo.' AND los_cn.kode_kantor = '.$areakerja.' ORDER BY id DESC LIMIT '.$startlimit.',10';

			}
		}else{
			if ($areakerja == 'semua') {
				$query = 'SELECT los_or.*,los_cn.create_by, los_cn.nama_identitas AS nama_calon_nasabah, los_jj.nama_jenis_jaminan AS jenis_jaminan
				FROM los_order AS los_or, los_jenis_jaminan AS los_jj, los_calon_nasabah AS los_cn
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan '.$queryAo.'  AND los_cn.nama_identitas LIKE "%'.$keysearch.'%" ORDER BY id DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT los_or.*,los_cn.create_by, los_cn.nama_identitas AS nama_calon_nasabah, los_jj.nama_jenis_jaminan AS jenis_jaminan
				FROM los_order AS los_or, los_jenis_jaminan AS los_jj, los_calon_nasabah AS los_cn
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan '.$queryAo.'  AND los_cn.nama_identitas LIKE "%'.$keysearch.'%" AND los_cn.kode_kantor = '.$areakerja.' ORDER BY id DESC LIMIT '.$startlimit.',10';
			}
		}
		return $this->db->query($query);
	}

	public function get_detail_order($id)
	{
		$query = '
				SELECT
				los_or.*,
				los_cn.nama_identitas AS nama_calon_nasabah,
				los_cn.no_ktp AS noktp,
				los_jj.nama_jenis_jaminan AS nama_jenis_jaminan,
				app_kk.NAMA_KANTOR, app_kk.nama_area_kerja, app_kk.ALAMAT_KANTOR,
				kre_kg2.deskripsi_group2 AS AO_ORDER,
				los_jp.nama_jenis_pinjaman AS nama_jenis_pinjaman,
				kre_kg4.deskripsi_group4 AS nama_sumber_aplikasi
				/*user.nama AS pelaku_verifikasi*/
				FROM los_order AS los_or,
					 los_jenis_jaminan AS los_jj,
					 los_calon_nasabah AS los_cn,
					 app_kode_kantor AS app_kk,
					 kre_kode_group2 AS kre_kg2,
					 los_jenis_pinjaman AS los_jp,
					 kre_kode_group4 AS kre_kg4
					 /*user*/
				WHERE
				los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_or.kode_kantor = app_kk.KODE_KANTOR
				AND los_or.jenis_pinjaman = los_jp.kode_jenis_pinjaman
				AND los_or.sumber_aplikasi = kre_kg4.KODE_GROUP4
				/*AND los_or.verifikasi_by = user.user_id*/
				AND los_or.id = '.$id;

		return $this->db->query($query);
	}

	/*TRACKING ORDER*/
	public function DataTrackingOrder($startlimit,$areakerja,$keysearch,$ao)
	{
		if ($ao == null) {
			$queryAo = '';
		}else{
			$queryAo = 'AND los_cn.create_by = '.$ao.'';
		}
		if ($keysearch == '') {
			if ($areakerja == 'semua') {
				$query = 'SELECT los_or.id,los_or.id_calon_debitur, los_cn.nama_identitas AS nama_calon_nasabah, los_or.plafond AS plafond, los_or.tenor AS tenor, los_jj.nama_jenis_jaminan AS jenis_jaminan, los_or.status_assign FROM los_calon_nasabah AS los_cn, los_order AS los_or, los_jenis_jaminan AS los_jj WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan AND los_or.verifikasi = 1 '.$queryAo.' ORDER BY id DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT los_or.id,los_or.id_calon_debitur, los_cn.nama_identitas AS nama_calon_nasabah, los_or.plafond AS plafond, los_or.tenor AS tenor, los_jj.nama_jenis_jaminan AS jenis_jaminan, los_or.status_assign FROM los_calon_nasabah AS los_cn, los_order AS los_or, los_jenis_jaminan AS los_jj WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan AND los_or.verifikasi = 1 '.$queryAo.' AND los_cn.kode_kantor = '.$areakerja.' ORDER BY id DESC LIMIT '.$startlimit.',10';
			}
		}else{
			if ($areakerja == 'semua') {
				$query = 'SELECT los_or.id,los_or.id_calon_debitur, los_cn.nama_identitas AS nama_calon_nasabah, los_or.plafond AS plafond, los_or.tenor AS tenor, los_jj.nama_jenis_jaminan AS jenis_jaminan, los_or.status_assign FROM los_calon_nasabah AS los_cn, los_order AS los_or, los_jenis_jaminan AS los_jj WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan AND los_or.verifikasi = 1 '.$queryAo.' AND los_cn.nama_identitas LIKE "%'.$keysearch.'%" ORDER BY id DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT los_or.id,los_or.id_calon_debitur, los_cn.nama_identitas AS nama_calon_nasabah, los_or.plafond AS plafond, los_or.tenor AS tenor, los_jj.nama_jenis_jaminan AS jenis_jaminan, los_or.status_assign FROM los_calon_nasabah AS los_cn, los_order AS los_or, los_jenis_jaminan AS los_jj WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan AND los_or.verifikasi = 1 '.$queryAo.' AND los_cn.nama_identitas LIKE "%'.$keysearch.'%" AND los_cn.kode_kantor = '.$areakerja.' ORDER BY id DESC LIMIT '.$startlimit.',10';
			}
		}

		return $this->db->query($query);
	}

	public function getTrackingOrder($id_order)
	{
		$query = 'SELECT los_order_tracking.*,kre_kg2.deskripsi_group2 AS AO_ORDER FROM los_order_tracking,kre_kode_group2 AS kre_kg2 WHERE los_order_tracking.kode_ao = kre_kg2.KODE_GROUP2 AND los_order_tracking.id_order = '.$id_order;

		return $this->db->query($query);
	}


	/*KREDIT CHECKING*/
	public function OrderReady()
	{
		$query = 'SELECT los_or.id,
				los_or.tenor,
				los_cn.id_calon_debitur,
				los_cn.nama_identitas,
				los_jj.nama_jenis_jaminan,
				kre_kg2.deskripsi_group2 AS AO_ORDER
				FROM los_calon_nasabah AS los_cn,
				los_order AS los_or,
				los_jenis_jaminan AS los_jj,
				kre_kode_group2 AS kre_kg2
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_or.verifikasi = 1 ORDER BY id DESC';

		return $this->db->query($query);
	}

	public function get_dataKreditcheck($startlimit,$areakerja,$keysearch)
	{
		if ($keysearch == '') {
			if ($areakerja == 'semua') {
				$query = 'SELECT kc.id,
				kc.id_calon_debitur,
				kc.id_order,
				kc.proses_by,
				los_cn.nama_identitas AS calon_debitur,
				los_or.tenor AS tenor,
				los_jj.nama_jenis_jaminan AS jenis_jaminan,
				kc.jenis_debitur AS jenis_debitur,
				kc.status AS status_kredit,
				kc.verifikasi AS status_verifikasi
				FROM los_kredit_checking AS kc,
				los_calon_nasabah AS los_cn,
				los_order AS los_or,
				los_jenis_jaminan AS los_jj
				WHERE kc.id_order = los_or.id
				AND kc.id_calon_debitur = los_cn.id_calon_debitur
				AND los_jj.kode_jenis_jaminan = los_or.jenis_jaminan ORDER BY kc.id DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT kc.id,
				kc.id_calon_debitur,
				kc.id_order,
				kc.proses_by,
				los_cn.nama_identitas AS calon_debitur,
				los_or.tenor AS tenor,
				los_jj.nama_jenis_jaminan AS jenis_jaminan,
				kc.jenis_debitur AS jenis_debitur,
				kc.status AS status_kredit,
				kc.verifikasi AS status_verifikasi
				FROM los_kredit_checking AS kc,
				los_calon_nasabah AS los_cn,
				los_order AS los_or,
				los_jenis_jaminan AS los_jj
				WHERE kc.id_order = los_or.id
				AND kc.id_calon_debitur = los_cn.id_calon_debitur
				AND los_cn.kode_kantor = '.$areakerja.'
				AND los_jj.kode_jenis_jaminan = los_or.jenis_jaminan ORDER BY kc.id DESC LIMIT '.$startlimit.',10';
			}
		}else{
			if ($areakerja == 'semua') {
				$query = 'SELECT kc.id,
				kc.id_calon_debitur,
				kc.id_order,
				kc.proses_by,
				los_cn.nama_identitas AS calon_debitur,
				los_or.tenor AS tenor,
				los_jj.nama_jenis_jaminan AS jenis_jaminan,
				kc.jenis_debitur AS jenis_debitur,
				kc.status AS status_kredit,
				kc.verifikasi AS status_verifikasi
				FROM los_kredit_checking AS kc,
				los_calon_nasabah AS los_cn,
				los_order AS los_or,
				los_jenis_jaminan AS los_jj
				WHERE kc.id_order = los_or.id
				AND kc.id_calon_debitur = los_cn.id_calon_debitur
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				AND los_jj.kode_jenis_jaminan = los_or.jenis_jaminan ORDER BY kc.id DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT kc.id,
				kc.id_calon_debitur,
				kc.id_order,
				kc.proses_by,
				los_cn.nama_identitas AS calon_debitur,
				los_or.tenor AS tenor,
				los_jj.nama_jenis_jaminan AS jenis_jaminan,
				kc.jenis_debitur AS jenis_debitur,
				kc.status AS status_kredit,
				kc.verifikasi AS status_verifikasi
				FROM los_kredit_checking AS kc,
				los_calon_nasabah AS los_cn,
				los_order AS los_or,
				los_jenis_jaminan AS los_jj
				WHERE kc.id_order = los_or.id
				AND kc.id_calon_debitur = los_cn.id_calon_debitur
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				AND los_cn.kode_kantor = '.$areakerja.'
				AND los_jj.kode_jenis_jaminan = los_or.jenis_jaminan ORDER BY kc.id DESC LIMIT '.$startlimit.',10';
			}
		}
		return $this->db->query($query);
	}

	public function getDetailKreditChecking($id)
	{
		$query = ' SELECT kc.*, los_cn.nama_identitas AS calon_debitur, los_jj.nama_jenis_jaminan AS jenis_jaminan, app_kk.NAMA_KANTOR, app_kk.nama_area_kerja, app_kk.ALAMAT_KANTOR, kre_kg2.deskripsi_group2 AS AO_Kredit FROM los_kredit_checking AS kc, los_calon_nasabah AS los_cn, los_order AS los_or, los_jenis_jaminan AS los_jj, app_kode_kantor AS app_kk, kre_kode_group2 AS kre_kg2 WHERE kc.id_order = los_or.id AND kc.id_calon_debitur = los_cn.id_calon_debitur AND los_jj.kode_jenis_jaminan = los_or.jenis_jaminan AND kc.kode_kantor = app_kk.KODE_KANTOR AND kc.kode_ao = kre_kg2.KODE_GROUP2 AND kc.id ='.$id;

		return $this->db->query($query);
	}

	public function getNOKreditLastData($value='')
	{
		$query = "SELECT los_kredit_checking.nomor,los_kredit_checking.verifikasi_date FROM los_kredit_checking ORDER BY verifikasi_date DESC LIMIT 1";
		return $this->db->query($query);
	}

	/*SURVEY KOMITE*/
	public function SurveyKomite($startlimit,$areakerja,$keysearch)
	{
		if ($keysearch == '') {
			if ($areakerja == 'semua') {
				$query = 'SELECT kc.id,
				kc.id_calon_debitur,
				kc.id_order,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.no_ktp,
				los_or.tenor AS tenor,
				los_or.plafond,
				los_jj.nama_jenis_jaminan AS jenis_jaminan,
				kc.jenis_debitur AS jenis_debitur,
				kc.status AS status_kredit,
				kc.verifikasi AS status_verifikasi,
				kc.flg_survey,
				kre_kg2.deskripsi_group2 AS AO_ORDER
				FROM los_kredit_checking AS kc,
				los_calon_nasabah AS los_cn,
				los_order AS los_or,
				los_jenis_jaminan AS los_jj,
				kre_kode_group2 AS kre_kg2
				WHERE kc.id_order = los_or.id
				AND kc.id_calon_debitur = los_cn.id_calon_debitur
				AND kc.verifikasi = 1
				AND kc.status = "DONE"
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_jj.kode_jenis_jaminan = los_or.jenis_jaminan ORDER BY kc.flg_survey ASC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT kc.id,
				kc.id_calon_debitur,
				kc.id_order,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.no_ktp,
				los_or.tenor AS tenor,
				los_or.plafond,
				los_jj.nama_jenis_jaminan AS jenis_jaminan,
				kc.jenis_debitur AS jenis_debitur,
				kc.status AS status_kredit,
				kc.verifikasi AS status_verifikasi,
				kc.flg_survey,
				kre_kg2.deskripsi_group2 AS AO_ORDER
				FROM los_kredit_checking AS kc,
				los_calon_nasabah AS los_cn,
				los_order AS los_or,
				los_jenis_jaminan AS los_jj,
				kre_kode_group2 AS kre_kg2
				WHERE kc.id_order = los_or.id
				AND kc.id_calon_debitur = los_cn.id_calon_debitur
				AND kc.verifikasi = 1
				AND kc.status = "DONE"
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_cn.kode_kantor = '.$areakerja.'
				AND los_jj.kode_jenis_jaminan = los_or.jenis_jaminan ORDER BY kc.flg_survey ASC LIMIT '.$startlimit.',10';
			}
		}else{
			if ($areakerja == 'semua') {
				$query = 'SELECT kc.id,
				kc.id_calon_debitur,
				kc.id_order,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.no_ktp,
				los_or.tenor AS tenor,
				los_or.plafond,
				los_jj.nama_jenis_jaminan AS jenis_jaminan,
				kc.jenis_debitur AS jenis_debitur,
				kc.status AS status_kredit,
				kc.verifikasi AS status_verifikasi,
				kc.flg_survey,
				kre_kg2.deskripsi_group2 AS AO_ORDER
				FROM los_kredit_checking AS kc,
				los_calon_nasabah AS los_cn,
				los_order AS los_or,
				los_jenis_jaminan AS los_jj,
				kre_kode_group2 AS kre_kg2
				WHERE kc.id_order = los_or.id
				AND kc.id_calon_debitur = los_cn.id_calon_debitur
				AND kc.verifikasi = 1
				AND kc.status = "DONE"
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				AND los_jj.kode_jenis_jaminan = los_or.jenis_jaminan ORDER BY kc.flg_survey ASC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT kc.id,
				kc.id_calon_debitur,
				kc.id_order,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.no_ktp,
				los_or.tenor AS tenor,
				los_or.plafond,
				los_jj.nama_jenis_jaminan AS jenis_jaminan,
				kc.jenis_debitur AS jenis_debitur,
				kc.status AS status_kredit,
				kc.verifikasi AS status_verifikasi,
				kc.flg_survey,
				kre_kg2.deskripsi_group2 AS AO_ORDER
				FROM los_kredit_checking AS kc,
				los_calon_nasabah AS los_cn,
				los_order AS los_or,
				los_jenis_jaminan AS los_jj,
				kre_kode_group2 AS kre_kg2
				WHERE kc.id_order = los_or.id
				AND kc.id_calon_debitur = los_cn.id_calon_debitur
				AND kc.verifikasi = 1
				AND kc.status = "DONE"
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				AND los_cn.kode_kantor = '.$areakerja.'
				AND los_jj.kode_jenis_jaminan = los_or.jenis_jaminan ORDER BY kc.flg_survey ASC LIMIT '.$startlimit.',10';
			}
		}
		return $this->db->query($query);

	}
	/*--------*/
	/*MEMO KREDIT AO*/

	public function SurveyReadyMemoAo($ao)
	{
		$query = '
			SELECT
			kc.id AS id_kredit_checking,
			kc.id_order,
			kc.id_calon_debitur,
			los_cn.nama_identitas AS nama_calon_debitur,
			kc.jenis_debitur,
			kre_kg2.deskripsi_group2 AS Ao
			FROM los_kredit_checking AS kc,
			los_calon_nasabah AS los_cn,
			kre_kode_group2 AS kre_kg2
			WHERE kc.id_calon_debitur = los_cn.id_calon_debitur
			AND kc.kode_ao = kre_kg2.KODE_GROUP2
			AND kc.verifikasi = 1
			AND kc.status = "DONE"
			AND los_cn.create_by = "'.$ao.'"
			AND kc.flg_survey = 1 ORDER BY kc.id DESC
		';
		return $this->db->query($query);
	}

	public function get_dataMemoAo($startlimit,$areakerja,$keysearch,$ao)
	{
		if ($ao == null) {
			$queryAo = '';
		}else{
			$queryAo = 'AND los_cn.create_by = '.$ao.'';
		}
		if ($keysearch == '') {
			if ($areakerja == 'semua') {
				$query = 'SELECT
				ao.id_order,
				ao.no_aplikasi,
				ao.id_calon_debitur,
				ao.plafon_kredit,
				ao.id_kredit_checking,
				ao.realisasi,
				ao.type_kredit AS type_kredit,
				ao.jenis_fasilitas AS jenis_fasilitas,
				ao.verifikasi,
				los_cn.nama_identitas AS nama_calon_debitur,
				los_cn.create_by,
				ao.tenor AS tenor
				FROM los_memo_kredit_ao AS ao,
				los_calon_nasabah AS los_cn
				WHERE ao.id_calon_debitur = los_cn.id_calon_debitur
				'.$queryAo.'
				ORDER BY ao.create_date DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT
				ao.id_order,
				ao.no_aplikasi,
				ao.id_calon_debitur,
				ao.plafon_kredit,
				ao.id_kredit_checking,
				ao.realisasi,
				ao.type_kredit AS type_kredit,
				ao.jenis_fasilitas AS jenis_fasilitas,
				ao.verifikasi,
				los_cn.nama_identitas AS nama_calon_debitur,
				los_cn.create_by,
				ao.tenor AS tenor
				FROM los_memo_kredit_ao AS ao,
				los_calon_nasabah AS los_cn
				WHERE ao.id_calon_debitur = los_cn.id_calon_debitur
				'.$queryAo.'
				AND los_cn.kode_kantor = '.$areakerja.'
				ORDER BY ao.create_date DESC LIMIT '.$startlimit.',10';
			}
		}else{
			if ($areakerja == 'semua') {
				$query = 'SELECT
				ao.id_order,
				ao.no_aplikasi,
				ao.id_calon_debitur,
				ao.plafon_kredit,
				ao.id_kredit_checking,
				ao.realisasi,
				ao.type_kredit AS type_kredit,
				ao.jenis_fasilitas AS jenis_fasilitas,
				ao.verifikasi,
				los_cn.nama_identitas AS nama_calon_debitur,
				los_cn.create_by,
				ao.tenor AS tenor
				FROM los_memo_kredit_ao AS ao,
				los_calon_nasabah AS los_cn
				WHERE ao.id_calon_debitur = los_cn.id_calon_debitur
				'.$queryAo.'
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				ORDER BY ao.create_date DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT
				ao.id_order,
				ao.no_aplikasi,
				ao.id_calon_debitur,
				ao.plafon_kredit,
				ao.id_kredit_checking,
				ao.realisasi,
				ao.type_kredit AS type_kredit,
				ao.jenis_fasilitas AS jenis_fasilitas,
				ao.verifikasi,
				los_cn.nama_identitas AS nama_calon_debitur,
				los_cn.create_by,
				ao.tenor AS tenor
				FROM los_memo_kredit_ao AS ao,
				los_calon_nasabah AS los_cn
				WHERE ao.id_calon_debitur = los_cn.id_calon_debitur
				'.$queryAo.'
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				AND los_cn.kode_kantor = '.$areakerja.'
				ORDER BY ao.create_date DESC LIMIT '.$startlimit.',10';
			}
		}
		return $this->db->query($query);
	}

	public function DetailMemoAo($id_order)
	{
		$query = '
			SELECT ao.*,
			los_cn.nama_identitas AS calon_debitur,
			los_jj.nama_jenis_jaminan AS jenis_jaminan,
			kre_kg4.deskripsi_group4,
			prod.DESKRIPSI_PRODUK
			FROM los_memo_kredit_ao AS ao,
			los_calon_nasabah AS los_cn,
			los_jenis_jaminan AS los_jj,
			kre_kode_group4 AS kre_kg4,
			tab_produk AS prod
			WHERE ao.id_calon_debitur = los_cn.id_calon_debitur
			AND ao.jaminan_utama = los_jj.kode_jenis_jaminan
			AND ao.sumber_informasi = kre_kg4.KODE_GROUP4
			AND ao.kode_produk = prod.KODE_PRODUK
			AND ao.id_order ='.$id_order;
		return $this->db->query($query);
	}

	public function DetailMemoAoSetifikat($id)
	{
		$query = '
			SELECT aos.*,los_kep_rum.nama_kepemilikan FROM los_memo_kredit_ao_sertifikat AS aos, los_kepemilikan_rumah AS los_kep_rum WHERE aos.kepemilikan = los_kep_rum.kode_kepemilikan AND aos.id_order = '.$id;
		return $this->db->query($query);
	}

	public function DetailMemoAoKendaraan($id)
	{
		$query = '
			SELECT aok.*,merk_kendaraan.nm_merk AS nama_merk,type_kendaraan.nm_type AS type_kendaraan,jenis_kendaraan.nm_jenis AS jenis_kendaraan FROM los_memo_kredit_ao_kendaraan AS aok, merk_kendaraan, type_kendaraan, jenis_kendaraan WHERE aok.kd_merk = merk_kendaraan.kd_merk AND aok.kd_type = type_kendaraan.kd_type AND aok.kd_jenis = jenis_kendaraan.kd_jenis AND aok.id_order = '.$id;
		return $this->db->query($query);
	}

	public function getNOMemoAoLastData($value='')
	{
		$query = "SELECT los_memo_kredit_ao.no_aplikasi,los_memo_kredit_ao.create_date FROM los_memo_kredit_ao ORDER BY create_date DESC LIMIT 1";
		return $this->db->query($query);
	}

	public function DataReportMemoAo($id_order)
	{

		$query = '
			SELECT los_cn.*,
				los_prop.name AS propinsi,
				los_kk.name AS Kotakab,
				los_kec.name AS Kecamatan,
				los_kel.name AS Kelurahan,
				los_prop_dom.name AS propinsi_domisili,
				los_kk_dom.name AS Kotakab_domisili,
				los_kec_dom.name AS Kecamatan_domisili,
				los_kel_dom.name AS Kelurahan_domisili,
				kre_kg2.deskripsi_group2 AS AO,
				kre_kg2_or.deskripsi_group2 AS AO_ORDER,
				los_ao.*,
				kre_kg4.deskripsi_group4 AS sumber_aplikasi,
				los_or.keterangan,
				los_or.tujuan_penggunaan,
				prod.DESKRIPSI_PRODUK AS produk
			FROM los_calon_nasabah AS los_cn,
			los_memo_kredit_ao AS los_ao,
			los_propinsi AS los_prop,
			los_kotakab AS los_kk,
			los_kecamatan AS los_kec,
			los_kelurahan AS los_kel,
			los_propinsi AS los_prop_dom,
			los_kotakab AS los_kk_dom,
			los_kecamatan AS los_kec_dom,
			los_kelurahan AS los_kel_dom,
			kre_kode_group4 AS kre_kg4,
			kre_kode_group2 AS kre_kg2,
			kre_kode_group2 AS kre_kg2_or,
			los_order AS los_or,
			tab_produk AS prod
			WHERE los_ao.id_calon_debitur = los_cn.id_calon_debitur
			AND los_cn.propinsi_id = los_prop.propinsi_id
			AND los_cn.kotakab_id = los_kk.kotakab_id
			AND los_cn.kecamatan_id = los_kec.kecamatan_id
			AND los_cn.kelurahan_id = los_kel.kelurahan_id
			AND los_cn.domisili_propinsi_id = los_prop_dom.propinsi_id
			AND los_cn.domisili_kotakab_id = los_kk_dom.kotakab_id
			AND los_cn.domisili_kecamatan_id = los_kec_dom.kecamatan_id
			AND los_cn.domisili_kelurahan_id = los_kel_dom.kelurahan_id
			AND los_ao.sumber_informasi = kre_kg4.KODE_GROUP4
			AND los_cn.kode_ao = kre_kg2.KODE_GROUP2
			AND los_or.kode_ao = kre_kg2_or.KODE_GROUP2
			AND los_ao.id_order = los_or.id
			AND los_ao.kode_produk = prod.KODE_PRODUK
			AND los_ao.id_order= '.$id_order;
		return $this->db->query($query);
	}

	/*MEMO KREDIT CA*/
	public function MemoAoReadyCA($value='')
	{
		$query = '
			SELECT
			ao.id_order,
			ao.no_aplikasi,
			ao.id_calon_debitur,
			ao.id_kredit_checking,
			ao.plafon_kredit,
			ao.no_aplikasi,
			los_cn.nama_identitas AS nama_calon_debitur,
			ao.jangka_waktu AS tenor,
			los_jj.nama_jenis_jaminan
			FROM los_memo_kredit_ao AS ao,
			los_calon_nasabah AS los_cn,
			los_jenis_jaminan AS los_jj
			WHERE ao.id_calon_debitur = los_cn.id_calon_debitur
			AND ao.jaminan_utama = los_jj.kode_jenis_jaminan
			AND ao.verifikasi = 1
			AND los_cn.create_by = "'.$this->session->userdata('id').'"
			ORDER BY ao.create_date DESC
		';
		return $this->db->query($query);
	}

	public function get_DataMemoCA($startlimit,$areakerja,$keysearch,$ao)
	{
		if ($ao == null) {
			$queryAo = '';
		}else{
			$queryAo = 'AND los_cn.create_by = '.$ao.'';
		}
		if ($keysearch == '') {
			if ($areakerja == 'semua') {
				$query = 'SELECT
				ca.id_order,
				ca.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.create_by,
				ca.no_aplikasi,
				ca.jaminan_utama,
				los_jj.nama_jenis_jaminan,
				ca.sumber_informasi,
				kre_kg4.deskripsi_group4 AS desk_sumber_informasi
				FROM los_memo_kredit_ca AS ca,
				los_calon_nasabah AS los_cn,
				los_jenis_jaminan AS los_jj,
				kre_kode_group4 AS kre_kg4
				WHERE ca.id_calon_debitur = los_cn.id_calon_debitur
				AND ca.jaminan_utama = los_jj.kode_jenis_jaminan
				AND ca.sumber_informasi = kre_kg4.KODE_GROUP4
				'.$queryAo.'
				ORDER BY id_order DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT
				ca.id_order,
				ca.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.create_by,
				ca.no_aplikasi,
				ca.jaminan_utama,
				los_jj.nama_jenis_jaminan,
				ca.sumber_informasi,
				kre_kg4.deskripsi_group4 AS desk_sumber_informasi
				FROM los_memo_kredit_ca AS ca,
				los_calon_nasabah AS los_cn,
				los_jenis_jaminan AS los_jj,
				kre_kode_group4 AS kre_kg4
				WHERE ca.id_calon_debitur = los_cn.id_calon_debitur
				AND ca.jaminan_utama = los_jj.kode_jenis_jaminan
				AND ca.sumber_informasi = kre_kg4.KODE_GROUP4
				'.$queryAo.'
				AND los_cn.kode_kantor = '.$areakerja .'
				ORDER BY id_order DESC LIMIT '.$startlimit.',10';
			}
		}else{
			if ($areakerja == 'semua') {
				$query = 'SELECT
				ca.id_order,
				ca.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.create_by,
				ca.no_aplikasi,
				ca.jaminan_utama,
				los_jj.nama_jenis_jaminan,
				ca.sumber_informasi,
				kre_kg4.deskripsi_group4 AS desk_sumber_informasi
				FROM los_memo_kredit_ca AS ca,
				los_calon_nasabah AS los_cn,
				los_jenis_jaminan AS los_jj,
				kre_kode_group4 AS kre_kg4
				WHERE ca.id_calon_debitur = los_cn.id_calon_debitur
				AND ca.jaminan_utama = los_jj.kode_jenis_jaminan
				AND ca.sumber_informasi = kre_kg4.KODE_GROUP4
				'.$queryAo.'
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				ORDER BY id_order DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT
				ca.id_order,
				ca.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.create_by,
				ca.no_aplikasi,
				ca.jaminan_utama,
				los_jj.nama_jenis_jaminan,
				ca.sumber_informasi,
				kre_kg4.deskripsi_group4 AS desk_sumber_informasi
				FROM los_memo_kredit_ca AS ca,
				los_calon_nasabah AS los_cn,
				los_jenis_jaminan AS los_jj,
				kre_kode_group4 AS kre_kg4
				WHERE ca.id_calon_debitur = los_cn.id_calon_debitur
				AND ca.jaminan_utama = los_jj.kode_jenis_jaminan
				AND ca.sumber_informasi = kre_kg4.KODE_GROUP4
				'.$queryAo.'
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				AND los_cn.kode_kantor = '.$areakerja .'
				ORDER BY id_order DESC LIMIT '.$startlimit.',10';
			}
		}
		return $this->db->query($query);
	}

	public function get_DetailCa($id_order)
	{
		$query = '
				SELECT ca.*,
				ca.id_order,
				ca.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				ca.no_aplikasi,
				ca.jaminan_utama,
				los_jj.nama_jenis_jaminan,
				ca.sumber_informasi,
				kre_kg4.deskripsi_group4 AS desk_sumber_informasi,
				los_prop_dom.name AS propinsi_domisili,
				los_kk_dom.name AS Kotakab_domisili,
				los_kec_dom.name AS Kecamatan_domisili,
				los_kel_dom.name AS Kelurahan_domisili
				FROM los_memo_kredit_ca AS ca,
				los_calon_nasabah AS los_cn,
				los_jenis_jaminan AS los_jj,
				kre_kode_group4 AS kre_kg4,
				los_propinsi AS los_prop_dom,
				los_kotakab AS los_kk_dom,
				los_kecamatan AS los_kec_dom,
				los_kelurahan AS los_kel_dom
				WHERE ca.id_calon_debitur = los_cn.id_calon_debitur
				AND ca.jaminan_utama = los_jj.kode_jenis_jaminan
				AND ca.sumber_informasi = kre_kg4.KODE_GROUP4
				AND ca.propinsi_id_domisili = los_prop_dom.propinsi_id
				AND ca.kotakab_id_domisili = los_kk_dom.kotakab_id
				AND ca.kecamatan_id_domisili = los_kec_dom.kecamatan_id
				AND ca.kelurahan_id_domisili = los_kel_dom.kelurahan_id
				AND ca.id_order = "'.$id_order.'"
		';
		return $this->db->query($query);
	}

		public function DataReportMemoCA($id_order)
	{
		$query = '
			SELECT los_ca.*,
			los_cn.nama_identitas,
			los_cn.no_ktp,
			los_cn.tempat_lahir,
			los_cn.tgl_lahir,
			los_prop_dom.name AS propinsi_domisili,
			los_kk_dom.name AS Kotakab_domisili,
			los_kec_dom.name AS Kecamatan_domisili,
			los_kel_dom.name AS Kelurahan_domisili,
			kre_kg2.deskripsi_group2 AS AO,
			kre_kg4.deskripsi_group4 AS sumber_aplikasi
			FROM los_memo_kredit_ca AS los_ca,
			los_calon_nasabah AS los_cn,
			los_propinsi AS los_prop_dom,
			los_kotakab AS los_kk_dom,
			los_kecamatan AS los_kec_dom,
			los_kelurahan AS los_kel_dom,
			kre_kode_group2 AS kre_kg2,
			kre_kode_group4 AS kre_kg4
			WHERE los_ca.id_calon_debitur = los_cn.id_calon_debitur
			AND los_ca.propinsi_id_domisili = los_prop_dom.propinsi_id
			AND los_ca.kotakab_id_domisili = los_kk_dom.kotakab_id
			AND los_ca.kecamatan_id_domisili = los_kec_dom.kecamatan_id
			AND los_ca.kelurahan_id_domisili = los_kel_dom.kelurahan_id
			AND los_cn.kode_ao = kre_kg2.KODE_GROUP2
			AND los_ca.sumber_informasi = kre_kg4.KODE_GROUP4
			AND los_ca.id_order = '.$id_order;

		return $this->db->query($query);
	}

	/*CAA*/
	public function get_Caa($startlimit,$areakerja,$keysearch,$kantor)
	{
		if ($kantor == null) {
			$queryKantor = '';
		}else{
			$queryKantor = 'AND los_cn.kode_kantor = '.$kantor.'';
		}
		if ($keysearch == '') {
			if ($areakerja == 'semua') {
				$query = 'SELECT los_cn.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.no_ktp,
				kre_kg2.deskripsi_group2 AS ao_order,
				app_kk.nama_area_kerja AS area_kerja,
				los_jj.nama_jenis_jaminan AS nama_jenis_jaminan,
				prod.DESKRIPSI_PRODUK AS produk,
				los_or.plafond AS pengajuan,
				los_or.tenor AS tenor_pengajuan,
				los_ao.plafon_kredit AS plafon_kredit_ao,
				los_ao.tenor AS tenor_rek_ao,
				los_ca_lain.realisasi AS plafond_kredit_ca,
				los_ca_lain.tenor AS tenor_rek_ca,
				los_caa.*
				FROM los_order AS los_or,
				los_calon_nasabah AS los_cn,
				kre_kode_group2 AS kre_kg2,
				app_kode_kantor AS app_kk,
				los_jenis_jaminan AS los_jj,
				tab_produk AS prod,
				los_memo_kredit_ao AS los_ao,
				los_memo_kredit_ca_lain_lain AS los_ca_lain,
				los_caa
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_or.kode_kantor = app_kk.KODE_KANTOR
				AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan
				AND los_ao.kode_produk = prod.KODE_PRODUK
				AND los_or.id = los_ao.id_order
				AND los_or.id = los_ca_lain.id_order
				AND los_or.id = los_caa.id_order
				'.$queryKantor.'
				ORDER BY los_caa.tgl_last_app DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT los_cn.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.no_ktp,
				kre_kg2.deskripsi_group2 AS ao_order,
				app_kk.nama_area_kerja AS area_kerja,
				los_jj.nama_jenis_jaminan AS nama_jenis_jaminan,
				prod.DESKRIPSI_PRODUK AS produk,
				los_or.plafond AS pengajuan,
				los_or.tenor AS tenor_pengajuan,
				los_ao.plafon_kredit AS plafon_kredit_ao,
				los_ao.tenor AS tenor_rek_ao,
				los_ca_lain.realisasi AS plafond_kredit_ca,
				los_ca_lain.tenor AS tenor_rek_ca,
				los_caa.*
				FROM los_order AS los_or,
				los_calon_nasabah AS los_cn,
				kre_kode_group2 AS kre_kg2,
				app_kode_kantor AS app_kk,
				los_jenis_jaminan AS los_jj,
				tab_produk AS prod,
				los_memo_kredit_ao AS los_ao,
				los_memo_kredit_ca_lain_lain AS los_ca_lain,
				los_caa
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_or.kode_kantor = app_kk.KODE_KANTOR
				AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan
				AND los_ao.kode_produk = prod.KODE_PRODUK
				AND los_or.id = los_ao.id_order
				AND los_or.id = los_ca_lain.id_order
				AND los_or.id = los_caa.id_order
				'.$queryKantor.'
				AND los_cn.kode_kantor = '.$areakerja.'
				ORDER BY los_caa.tgl_last_app DESC LIMIT '.$startlimit.',10';
			}
		}else{
			if ($areakerja == 'semua') {
				$query = 'SELECT los_cn.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.no_ktp,
				kre_kg2.deskripsi_group2 AS ao_order,
				app_kk.nama_area_kerja AS area_kerja,
				los_jj.nama_jenis_jaminan AS nama_jenis_jaminan,
				prod.DESKRIPSI_PRODUK AS produk,
				los_or.plafond AS pengajuan,
				los_or.tenor AS tenor_pengajuan,
				los_ao.plafon_kredit AS plafon_kredit_ao,
				los_ao.tenor AS tenor_rek_ao,
				los_ca_lain.realisasi AS plafond_kredit_ca,
				los_ca_lain.tenor AS tenor_rek_ca,
				los_caa.*
				FROM los_order AS los_or,
				los_calon_nasabah AS los_cn,
				kre_kode_group2 AS kre_kg2,
				app_kode_kantor AS app_kk,
				los_jenis_jaminan AS los_jj,
				tab_produk AS prod,
				los_memo_kredit_ao AS los_ao,
				los_memo_kredit_ca_lain_lain AS los_ca_lain,
				los_caa
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_or.kode_kantor = app_kk.KODE_KANTOR
				AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan
				AND los_ao.kode_produk = prod.KODE_PRODUK
				AND los_or.id = los_ao.id_order
				AND los_or.id = los_ca_lain.id_order
				AND los_or.id = los_caa.id_order
				'.$queryKantor.'
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				ORDER BY los_caa.tgl_last_app DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT los_cn.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.no_ktp,
				kre_kg2.deskripsi_group2 AS ao_order,
				app_kk.nama_area_kerja AS area_kerja,
				los_jj.nama_jenis_jaminan AS nama_jenis_jaminan,
				prod.DESKRIPSI_PRODUK AS produk,
				los_or.plafond AS pengajuan,
				los_or.tenor AS tenor_pengajuan,
				los_ao.plafon_kredit AS plafon_kredit_ao,
				los_ao.tenor AS tenor_rek_ao,
				los_ca_lain.realisasi AS plafond_kredit_ca,
				los_ca_lain.tenor AS tenor_rek_ca,
				los_caa.*
				FROM los_order AS los_or,
				los_calon_nasabah AS los_cn,
				kre_kode_group2 AS kre_kg2,
				app_kode_kantor AS app_kk,
				los_jenis_jaminan AS los_jj,
				tab_produk AS prod,
				los_memo_kredit_ao AS los_ao,
				los_memo_kredit_ca_lain_lain AS los_ca_lain,
				los_caa
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_or.kode_kantor = app_kk.KODE_KANTOR
				AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan
				AND los_ao.kode_produk = prod.KODE_PRODUK
				AND los_or.id = los_ao.id_order
				AND los_or.id = los_ca_lain.id_order
				AND los_or.id = los_caa.id_order
				'.$queryKantor.'
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				AND los_cn.kode_kantor = '.$areakerja.'
				ORDER BY los_caa.tgl_last_app DESC LIMIT '.$startlimit.',10';
			}
		}

		return $this->db->query($query);
	}

	public function get_Caa_ketua($startlimit,$areakerja,$keysearch)
	{
		if ($keysearch == '') {
			if ($areakerja == 'semua') {
				$query = 'SELECT los_cn.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.no_ktp,
				kre_kg2.deskripsi_group2 AS ao_order,
				app_kk.nama_area_kerja AS area_kerja,
				los_jj.nama_jenis_jaminan AS nama_jenis_jaminan,
				prod.DESKRIPSI_PRODUK AS produk,
				los_or.plafond AS pengajuan,
				los_or.tenor AS tenor_pengajuan,
				los_ao.plafon_kredit AS plafon_kredit_ao,
				los_ao.tenor AS tenor_rek_ao,
				los_ca_lain.realisasi AS plafond_kredit_ca,
				los_ca_lain.tenor AS tenor_rek_ca,
				los_caa.*
				FROM los_order AS los_or,
				los_calon_nasabah AS los_cn,
				kre_kode_group2 AS kre_kg2,
				app_kode_kantor AS app_kk,
				los_jenis_jaminan AS los_jj,
				tab_produk AS prod,
				los_memo_kredit_ao AS los_ao,
				los_memo_kredit_ca_lain_lain AS los_ca_lain,
				los_caa,
				los_caa_approval
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_or.kode_kantor = app_kk.KODE_KANTOR
				AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan
				AND los_ao.kode_produk = prod.KODE_PRODUK
				AND los_or.id = los_ao.id_order
				AND los_or.id = los_ca_lain.id_order
				AND los_or.id = los_caa.id_order
				AND los_or.id = los_caa_approval.id_order
				AND los_caa_approval.jabatan = "manager"
				ORDER BY los_caa.tgl_last_app DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT los_cn.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.no_ktp,
				kre_kg2.deskripsi_group2 AS ao_order,
				app_kk.nama_area_kerja AS area_kerja,
				los_jj.nama_jenis_jaminan AS nama_jenis_jaminan,
				prod.DESKRIPSI_PRODUK AS produk,
				los_or.plafond AS pengajuan,
				los_or.tenor AS tenor_pengajuan,
				los_ao.plafon_kredit AS plafon_kredit_ao,
				los_ao.tenor AS tenor_rek_ao,
				los_ca_lain.realisasi AS plafond_kredit_ca,
				los_ca_lain.tenor AS tenor_rek_ca,
				los_caa.*
				FROM los_order AS los_or,
				los_calon_nasabah AS los_cn,
				kre_kode_group2 AS kre_kg2,
				app_kode_kantor AS app_kk,
				los_jenis_jaminan AS los_jj,
				tab_produk AS prod,
				los_memo_kredit_ao AS los_ao,
				los_memo_kredit_ca_lain_lain AS los_ca_lain,
				los_caa,
				los_caa_approval
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_or.kode_kantor = app_kk.KODE_KANTOR
				AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan
				AND los_ao.kode_produk = prod.KODE_PRODUK
				AND los_or.id = los_ao.id_order
				AND los_or.id = los_ca_lain.id_order
				AND los_or.id = los_caa.id_order
				AND los_or.id = los_caa_approval.id_order
				AND los_caa_approval.jabatan = "manager"
				AND los_cn.kode_kantor = '.$areakerja.'
				ORDER BY los_caa.tgl_last_app DESC LIMIT '.$startlimit.',10';
			}
		}else{
			if ($areakerja == 'semua') {
				$query = 'SELECT los_cn.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.no_ktp,
				kre_kg2.deskripsi_group2 AS ao_order,
				app_kk.nama_area_kerja AS area_kerja,
				los_jj.nama_jenis_jaminan AS nama_jenis_jaminan,
				prod.DESKRIPSI_PRODUK AS produk,
				los_or.plafond AS pengajuan,
				los_or.tenor AS tenor_pengajuan,
				los_ao.plafon_kredit AS plafon_kredit_ao,
				los_ao.tenor AS tenor_rek_ao,
				los_ca_lain.realisasi AS plafond_kredit_ca,
				los_ca_lain.tenor AS tenor_rek_ca,
				los_caa.*
				FROM los_order AS los_or,
				los_calon_nasabah AS los_cn,
				kre_kode_group2 AS kre_kg2,
				app_kode_kantor AS app_kk,
				los_jenis_jaminan AS los_jj,
				tab_produk AS prod,
				los_memo_kredit_ao AS los_ao,
				los_memo_kredit_ca_lain_lain AS los_ca_lain,
				los_caa,
				los_caa_approval
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_or.kode_kantor = app_kk.KODE_KANTOR
				AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan
				AND los_ao.kode_produk = prod.KODE_PRODUK
				AND los_or.id = los_ao.id_order
				AND los_or.id = los_ca_lain.id_order
				AND los_or.id = los_caa.id_order
				AND los_or.id = los_caa_approval.id_order
				AND los_caa_approval.jabatan = "manager"
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				ORDER BY los_caa.tgl_last_app DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT los_cn.id_calon_debitur,
				los_cn.nama_identitas AS calon_debitur,
				los_cn.no_ktp,
				kre_kg2.deskripsi_group2 AS ao_order,
				app_kk.nama_area_kerja AS area_kerja,
				los_jj.nama_jenis_jaminan AS nama_jenis_jaminan,
				prod.DESKRIPSI_PRODUK AS produk,
				los_or.plafond AS pengajuan,
				los_or.tenor AS tenor_pengajuan,
				los_ao.plafon_kredit AS plafon_kredit_ao,
				los_ao.tenor AS tenor_rek_ao,
				los_ca_lain.realisasi AS plafond_kredit_ca,
				los_ca_lain.tenor AS tenor_rek_ca,
				los_caa.*
				FROM los_order AS los_or,
				los_calon_nasabah AS los_cn,
				kre_kode_group2 AS kre_kg2,
				app_kode_kantor AS app_kk,
				los_jenis_jaminan AS los_jj,
				tab_produk AS prod,
				los_memo_kredit_ao AS los_ao,
				los_memo_kredit_ca_lain_lain AS los_ca_lain,
				los_caa,
				los_caa_approval
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.kode_ao = kre_kg2.KODE_GROUP2
				AND los_or.kode_kantor = app_kk.KODE_KANTOR
				AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan
				AND los_ao.kode_produk = prod.KODE_PRODUK
				AND los_or.id = los_ao.id_order
				AND los_or.id = los_ca_lain.id_order
				AND los_or.id = los_caa.id_order
				AND los_or.id = los_caa_approval.id_order
				AND los_caa_approval.jabatan = "manager"
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				AND los_cn.kode_kantor = '.$areakerja.'
				ORDER BY los_caa.tgl_last_app DESC LIMIT '.$startlimit.',10';
			}
		}

		return $this->db->query($query);
	}

	public function DataApprovalManager($id_order)
	{
		return $this->db->query('SELECT * FROM los_caa_approval WHERE id_order = '.$id_order.' AND jabatan = "manager"');
	}

	public function DataApprovalKetua($id_order)
	{
		return $this->db->query('SELECT * FROM los_caa_approval WHERE id_order = '.$id_order.' AND jabatan = "ketua"');
	}

	public function DataReportCaa($id_order)
	{
		$query = '
			SELECT los_ca.*,
			los_ca_lain.realisasi AS rek_ao_ca,
			los_ca_lain.tenor AS tenor_ao_ca,
			los_cn.nama_identitas,
			los_cn.no_ktp,
			los_cn.npwp,
			los_cn.tempat_lahir,
			los_cn.tgl_lahir,
			los_or.tujuan_penggunaan,
			los_ao.jenis_fasilitas,
			los_ao.suku_bunga,
			los_app.plafon AS plafon_app,
			los_app.tenor AS tenor_app,
			los_off.administrasi,
			los_off.provisi,
			los_prop_dom.name AS propinsi_domisili,
			los_kk_dom.name AS Kotakab_domisili,
			los_kec_dom.name AS Kecamatan_domisili,
			los_kel_dom.name AS Kelurahan_domisili,
			kre_kg2.deskripsi_group2 AS AO,
			kre_kg4.deskripsi_group4 AS sumber_aplikasi
			FROM los_memo_kredit_ca AS los_ca,
			los_memo_kredit_ca_lain_lain AS los_ca_lain,
			los_calon_nasabah AS los_cn,
			los_order AS los_or,
			los_memo_kredit_ao AS los_ao,
			los_caa_approval AS los_app,
			los_offering_letter AS los_off,
			los_propinsi AS los_prop_dom,
			los_kotakab AS los_kk_dom,
			los_kecamatan AS los_kec_dom,
			los_kelurahan AS los_kel_dom,
			kre_kode_group2 AS kre_kg2,
			kre_kode_group4 AS kre_kg4
			WHERE los_ca.id_calon_debitur = los_cn.id_calon_debitur
			AND los_ca.id_order = los_or.id
			AND los_ca.id_order = los_ao.id_order
			AND los_ca.id_order = los_app.id_order
			AND los_ca.id_order = los_off.id_order
			AND los_ca.id_order = los_ca_lain.id_order
			AND los_ca.propinsi_id_domisili = los_prop_dom.propinsi_id
			AND los_ca.kotakab_id_domisili = los_kk_dom.kotakab_id
			AND los_ca.kecamatan_id_domisili = los_kec_dom.kecamatan_id
			AND los_ca.kelurahan_id_domisili = los_kel_dom.kelurahan_id
			AND los_cn.kode_ao = kre_kg2.KODE_GROUP2
			AND los_ca.sumber_informasi = kre_kg4.KODE_GROUP4
			AND los_app.jabatan = "ketua"
			AND los_ca.id_order = '.$id_order;

		return $this->db->query($query);
	}

	/*OFFERING LATTER*/
	public function CAAOfferingLatter($value='')
	{
		$query = '
			SELECT los_or.id AS id_order,
			los_cn.id_calon_debitur,
			los_cn.nama_identitas AS calon_debitur,
			los_cn.no_ktp,
			los_or.plafond AS pengajuan,
			los_or.tenor AS pengajuan_tenor
			FROM los_order AS los_or,
			los_calon_nasabah AS los_cn,
			los_caa
			WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
			AND los_or.id = los_caa.id_order
			AND los_caa.status_app = "1"
			ORDER BY los_caa.tgl_buat DESC
		';

		return $this->db->query($query);
	}

	public function OfferingLatter($startlimit,$areakerja,$keysearch)
	{
		if ($keysearch == '') {
			if ($areakerja == 'semua') {
				$query = 'SELECT los_or.id AS id_order,
				los_cn.id_calon_debitur,
				los_ao.id_kredit_checking,
				los_of.nomor AS nomor,
				los_of.user_id,
				los_cn.nama_identitas AS calon_debitur,
				los_or.plafond AS pengajuan,
				los_or.tenor AS pengajuan_tenor,
				los_ao.realisasi AS rek_ao,
				los_ao.tenor AS rek_tenor_ao,
				los_ca_lain.realisasi AS rek_ca,
				los_ca_lain.tenor AS rek_tenor_ca
				FROM los_order AS los_or,
				los_calon_nasabah AS los_cn,
				los_memo_kredit_ao AS los_ao,
				los_memo_kredit_ca_lain_lain AS los_ca_lain,
				los_offering_letter AS los_of
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.id = los_ao.id_order
				AND los_or.id = los_ca_lain.id_order
				AND los_or.id = los_of.id_order ORDER BY tgl_buat DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT los_or.id AS id_order,
				los_cn.id_calon_debitur,
				los_ao.id_kredit_checking,
				los_of.nomor AS nomor,
				los_of.user_id,
				los_cn.nama_identitas AS calon_debitur,
				los_or.plafond AS pengajuan,
				los_or.tenor AS pengajuan_tenor,
				los_ao.realisasi AS rek_ao,
				los_ao.tenor AS rek_tenor_ao,
				los_ca_lain.realisasi AS rek_ca,
				los_ca_lain.tenor AS rek_tenor_ca
				FROM los_order AS los_or,
				los_calon_nasabah AS los_cn,
				los_memo_kredit_ao AS los_ao,
				los_memo_kredit_ca_lain_lain AS los_ca_lain,
				los_offering_letter AS los_of
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.id = los_ao.id_order
				AND los_or.id = los_ca_lain.id_order
				AND los_cn.kode_kantor = '.$areakerja.'
				AND los_or.id = los_of.id_order ORDER BY tgl_buat DESC LIMIT '.$startlimit.',10';
			}
		}else{
			if ($areakerja == 'semua') {
				$query = 'SELECT los_or.id AS id_order,
				los_cn.id_calon_debitur,
				los_ao.id_kredit_checking,
				los_of.nomor AS nomor,
				los_of.user_id,
				los_cn.nama_identitas AS calon_debitur,
				los_or.plafond AS pengajuan,
				los_or.tenor AS pengajuan_tenor,
				los_ao.realisasi AS rek_ao,
				los_ao.tenor AS rek_tenor_ao,
				los_ca_lain.realisasi AS rek_ca,
				los_ca_lain.tenor AS rek_tenor_ca
				FROM los_order AS los_or,
				los_calon_nasabah AS los_cn,
				los_memo_kredit_ao AS los_ao,
				los_memo_kredit_ca_lain_lain AS los_ca_lain
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.id = los_ao.id_order
				AND los_or.id = los_ca_lain.id_order
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				AND los_or.id = los_of.id_order ORDER BY tgl_buat DESC LIMIT '.$startlimit.',10';
			}else{
				$query = 'SELECT los_or.id AS id_order,
				los_cn.id_calon_debitur,
				los_ao.id_kredit_checking,
				los_of.nomor AS nomor,
				los_of.user_id,
				los_cn.nama_identitas AS calon_debitur,
				los_or.plafond AS pengajuan,
				los_or.tenor AS pengajuan_tenor,
				los_ao.realisasi AS rek_ao,
				los_ao.tenor AS rek_tenor_ao,
				los_ca_lain.realisasi AS rek_ca,
				los_ca_lain.tenor AS rek_tenor_ca
				FROM los_order AS los_or,
				los_calon_nasabah AS los_cn,
				los_memo_kredit_ao AS los_ao,
				los_memo_kredit_ca_lain_lain AS los_ca_lain
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.id = los_ao.id_order
				AND los_or.id = los_ca_lain.id_order
				AND los_cn.nama_identitas LIKE "%'.$keysearch.'%"
				AND los_cn.kode_kantor = '.$areakerja.'
				AND los_or.id = los_of.id_order ORDER BY tgl_buat DESC LIMIT '.$startlimit.',10';
			}
		}

		return $this->db->query($query);
	}

	public function DataReportOfferingLetter($id_order)
	{
		$query = ' SELECT 
				los_cn.nama_identitas AS nama_calon_debitur,
				los_cn.domisili_alamat,
				los_or.tujuan_penggunaan,
				los_prop_dom.name AS propinsi_domisili,
				los_kk_dom.name AS Kotakab_domisili,
				los_kec_dom.name AS Kecamatan_domisili,
				los_kel_dom.name AS Kelurahan_domisili,
				los_jj.nama_jenis_jaminan AS nama_jenis_jaminan,
				los_caa_app.plafon AS approval,
				los_caa_app.tenor AS approval_tenor,
				los_off.*,
				los_lpdk_biaya.*,
				SUM(los_off.provisi+
					los_off.administrasi+
					los_off.premi_ass_jiwa+
					los_off.premi_ass_kebakaran+
					los_off.tabungan+
					los_off.pelunasan+
					los_off.kreditchecking+
					los_off.notaris
					) AS total_biaya
				FROM los_calon_nasabah AS los_cn,
				los_jenis_jaminan AS los_jj,
				los_order AS los_or,
				los_offering_letter AS los_off,
				los_lpdk_biaya,
				los_propinsi AS los_prop_dom,
				los_kotakab AS los_kk_dom,
				los_kecamatan AS los_kec_dom,
				los_kelurahan AS los_kel_dom,
				los_caa_approval AS los_caa_app
				WHERE los_or.id_calon_debitur = los_cn.id_calon_debitur
				AND los_or.id = los_caa_app.id_order
				AND los_cn.domisili_propinsi_id = los_prop_dom.propinsi_id
				AND los_cn.domisili_kotakab_id = los_kk_dom.kotakab_id
				AND los_cn.domisili_kecamatan_id = los_kec_dom.kecamatan_id
				AND los_cn.domisili_kelurahan_id = los_kel_dom.kelurahan_id
				AND los_or.jenis_jaminan = los_jj.kode_jenis_jaminan
				AND los_or.id = los_off.id_order
				AND los_or.id = los_lpdk_biaya.id_order
				AND los_off.id_order = '.$id_order;

		return $this->db->query($query)->row();
	}

	public function getNOofferingLastData($value='')
	{
		$query = "SELECT los_offering_letter.nomor,los_offering_letter.tgl_buat FROM los_offering_letter ORDER BY tgl_buat DESC LIMIT 1";
		return $this->db->query($query);
	}
}

/* End of file Model_business.php */
/* Location: ./application/models/Model_business.php */
