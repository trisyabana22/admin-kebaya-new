<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting_toko extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'language']);
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = $this->M_toko->v_toko('1');
		$this->load->view('template-admin/header', $data);
		$this->load->view('template-admin/sidebar');
		$this->load->view('admin/setting-toko/v_show');
		$this->load->view('template-admin/footer');
	}

	public function save()
	{
		if ($_FILES['logo']['name'] <> '') {
			$_POST['logo'] = $this->upload_logo();
			$_SESSION['logo'] = $_POST['logo'];
		}

		if ($_POST['password'] == '') {
			unset($_POST['password']);
		}
		if ($_POST['nama_toko'] == '') {
			unset($_POST['nama_toko']);
		}

		$res = $this->M_toko->updatedata('toko', $_POST, ['id' => 1]);

		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  alert-dismissable" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Perubahan Berhasil!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  alert-dismissable" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Perubahan gagal!</div>');
		}

		redirect('Setting_toko');
	}


	public function upload_logo()
	{
		$config['upload_path']          = APPPATH . '../assets/home/img/logo/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
		$config['file_name']            =  date('YmdHis');
		$config['overwrite']            = true;
		$config['max_size']             = 8120; // 5MB

		$this->load->library('upload', $config);
		$upload = $this->upload->do_upload('logo');
		if ($upload) {
			return $this->upload->data("file_name");
		} else {
			return '';
		}
	}
}
