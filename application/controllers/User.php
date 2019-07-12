<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type');
	exit;
}
class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_business','business');
	}

	public function index()
	{
		if ($this->session->userdata('status') != 'login') {
			return redirect(base_url('Login'));
		}else{
			return redirect(base_url('Home'));
		}
	}

	public function Account()
	{
		$user_id = $this->uri->segment(3);
		if (empty($user_id)) {
			return redirect(base_url('Home'));
		}else{
			$this->load->view('manage_akun');
		}
	}

	public function CheckPassword($user_id,$password)
	{
		$where = array('user_id' => $user_id, 'password' => md5($password));
		$data = $this->business->get_where('user',null,null,$where)->num_rows();
		echo json_encode(array('count' => $data ));
	}


	public function updatePassword()
	{
		$where = array('user_id' => $this->input->post('user_id'));
		$data = array(
			'password' => md5($this->input->post('password_baru'))
		);
		$query = $this->business->update_data('user',$data,$where);
		if($query){
			echo json_encode(array('msg' => 'success' ));
		}else{
			echo json_encode(array('msg' => 'failed' ));
		}
	}

	public function uploadFoto($value='')
	{
		$where = array('user_id' => $this->input->post('user_id'));

		$file 			= $_FILES['foto']['name'];
		$pisah 			= explode(".",$file);
		$ext 			= end($pisah);
		$rename 		= date("YmdHis");
		$nama_file 		= $rename.".".$ext;

		$config['upload_path']	 = './assets/foto_profile';
        $config['allowed_types'] = 'JPG|jpg|jpeg|png|';
		$config['file_name']  	 = 'PROFILE_'.$nama_file;
		$name_file = $config['file_name'];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
 		$this->upload->do_upload('foto');

		$getFoto = $this->business->get_where("los_foto_user",null,null,$where);

		if ($getFoto->num_rows() == 1) {
			unlink('./assets/foto_profile/'.$getFoto->row()->foto_user);
			$data = array(
			'foto_user' => $name_file
		);
			$query = $this->business->update_data('los_foto_user',$data,$where);
		}else{
			$data = array(
				'user_id' => $this->input->post('user_id'),
				'foto_user' => $name_file
			);
			$query = $this->business->add_data('los_foto_user',$data);
		}

		$getUser = $this->business->get_where("user",null,null,$where)->row();
		$getFotoNew = $this->business->get_where("los_foto_user",null,null,$where)->row();

		$data_session = array(
			'id' => $getUser->user_id,
			'username' => $getUser->user,
			'jabatan' => $getUser->jabatan,
			'kantor' => $getUser->kd_cabang,
			'status' => 'login',
			'foto' => base_url('assets/foto_profile/'.$getFotoNew->foto_user),
		);

		$this->session->set_userdata($data_session);

		if ($query) {
			echo json_encode(array('msg' => 'success' ));
		}else{
			echo json_encode(array('msg' => 'failed' ));
		}

	}
}
