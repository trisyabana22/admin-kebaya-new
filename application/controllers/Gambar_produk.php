<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gambar_produk extends CI_Controller
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
		$data['jsfile'] = 'gambar_produk.js';
		$data['produk'] = $this->M_produk->v_all_produk();

		$this->load->view('template-admin/header', $data);
		$this->load->view('template-admin/sidebar');
		$this->load->view('admin/gambar-produk/v_show');
		$this->load->view('template-admin/footer');
	}

	public function load_gambar_produk($id_produk = '')
	{
		$data = $this->M_produk->v_all_gambar("where produk.nama_produk like '%" . $id_produk . "%'");
		echo json_encode($data);
	}

	public function save()
	{
		if ($_FILES['gambar_produk']['name'] <> '') {
			$_POST['gambar_produk'] = $this->upload_gambar_produk();
		}
		$res = $this->M_produk->insertdata('gambar_produk', $_POST);
		echo json_encode($res);
	}

	public function delete()
	{
		$where = array('id_gambar' =>  $_POST['id_gambar']);
		$res = $this->M_produk->deletedata('gambar_produk', $where);
		echo json_encode($res);
	}

	public function upload_gambar_produk()
	{
		$config['upload_path']          = APPPATH . '../assets/home/img/produk/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
		$config['file_name']            =  date('YmdHis');
		$config['overwrite']            = true;
		$config['max_size']             = 8120; // 5MB

		$this->load->library('upload', $config);
		$upload = $this->upload->do_upload('gambar_produk');
		if ($upload) {
			return $this->upload->data("file_name");
		} else {
			return '';
		}
	}
}
