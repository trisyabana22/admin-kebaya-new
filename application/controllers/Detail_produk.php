<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_produk extends CI_Controller
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
		$data['jsfile'] = 'detail_produk.js';
		$data['produk'] = $this->M_produk->v_all_produk();

		$this->load->view('template-admin/header', $data);
		$this->load->view('template-admin/sidebar');
		$this->load->view('admin/detail-produk/v_show');
		$this->load->view('template-admin/footer');
	}

	public function load_detail_produk($id_produk = '')
	{
		$dataProduk = $this->M_produk->v_all_produk_detail();
		$no = 1;
		foreach ($dataProduk as $produk) {
			$data['aaData'][] = [
				$no,
				$produk['nama_produk'],
				$produk['ukuran_stok'],
				$produk['harga'],
				$produk['jumlah_stok'],
				' <div class="button-group">
				<button type="button" id="btn_edit" data-id_stok="' . $produk['id_stok'] . '" data-id_produk="' . $produk['id_produk'] . '" data-nama_produk="' . $produk['nama_produk'] . '" data-jumlah_stok="' . $produk['jumlah_stok'] . '" data-ukuran_stok="' . $produk['ukuran_stok'] . '" data-harga="' . $produk['harga'] . '" class="btn btn-sm btn-primary" data-toggle="modal" data-animation="bounce" data-target=".edit-produk">
				  <i class="dripicons-pencil"></i>
				</button>
				<button id="btn_remove" data-id="' . $produk['id_stok'] . '" type="button" class="btn btn-sm btn-danger">
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
		$where = array('id_stok' =>  $_POST['id_stok']);
		$res = $this->M_produk->deletedata('stok', $where);
		echo json_encode($res);
	}

	public function save()
	{
		$res = $this->M_produk->insertdata('stok', $_POST);
		echo json_encode($res);
	}

	public function edit()
	{
		$where = [
			'id_stok' => $_POST['id_stok'],
		];
		unset($_POST['id_stok']);
		$res = $this->M_produk->updatedata('stok', $_POST, $where);
		echo json_encode($res);
	}
}
