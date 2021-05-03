<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_produk extends CI_Controller
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
		$data['jsfile'] = 'jenis_produk.js';
		$this->load->view('template-admin/header', $data);
		$this->load->view('template-admin/sidebar');
		$this->load->view('admin/jenis-produk/v_show');
		$this->load->view('template-admin/footer');
	}

	public function load_jenis_produk($id_produk = '')
	{
		$dataProduk = $this->M_produk->group_produk();
		$no = 1;
		foreach ($dataProduk as $produk) {
			$data['aaData'][] = [
				$no,
				$produk['nama_kategori'],
				$produk['total'],
				'<div class="button-group">
				<button type="button" id="btn_edit" data-id_kategori="' . $produk['id_kategori'] . '" data-nama_kategori="' . $produk['nama_kategori'] . '"  class="btn btn-sm btn-primary" data-toggle="modal" data-animation="bounce" data-target=".edit-produk">
				  <i class="dripicons-pencil"></i>
				</button>
				<button  type="button" id="btn_remove" data-id="' . $produk['id_kategori'] . '" class="btn btn-sm btn-danger">
				  <i class="dripicons-trash"></i>
				</button>
			  </div>',
			];

			$no++;
		}
		echo json_encode($data);
	}

	public function delete()
	{
		$where = array('id_kategori' =>  $_POST['id_kategori']);
		$res = $this->M_produk->deletedata('kategori', $where);
		echo json_encode($res);
	}

	public function save()
	{
		$res = $this->M_produk->insertdata('kategori', $_POST);
		echo json_encode($res);
	}

	public function edit()
	{
		$where = [
			'id_kategori' => $_POST['id_kategori'],
		];
		unset($_POST['id_kategori']);
		$res = $this->M_produk->updatedata('kategori', $_POST, $where);
		echo json_encode($res);
	}
}
