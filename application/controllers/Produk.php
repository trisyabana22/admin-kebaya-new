<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'language']);
		$this->load->library(['form_validation']);
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
		$data['kategori'] = $this->M_produk->v_all_kategori();
		$data['jsfile'] = 'produk.js';
		$this->load->view('template-admin/header', $data);
		$this->load->view('template-admin/sidebar');
		$this->load->view('admin/produk/v_show');
		$this->load->view('template-admin/footer');
	}

	public function produk($id_kategori = '', $nama_produk = '', $urutan = '')
	{
		$urutan = str_replace("-", " ", $urutan);
		$where = " where produk.id_kategori like '%" . $id_kategori . "%' and nama_produk like '%" . $nama_produk . "%' " . $urutan . " limit 0,16";
		$data['produk'] = $this->M_produk->v_all_produk($where);
		foreach ($data['produk'] as $produk) {
			$stok = $this->M_produk->v_all_stok(" where id_produk='" . $produk['id_produk'] . "' and jumlah_stok > 0");
			$dataProduk[] = [
				'id_produk' =>  $produk['id_produk'],
				'id_kategori' =>  $produk['id_kategori'],
				'nama_kategori' =>  $produk['nama_kategori'],
				'nama_produk' =>  $produk['nama_produk'],
				'harga_produk' =>  number_format((float)$produk['harga_produk'], 0, ',', '.'),
				'gambar_produk' =>  $produk['gambar_produk'],
				'bahan' =>  $produk['bahan'],
				'deskripsi' =>  $produk['deskripsi'],
				'stok' =>  $stok,
			];
		}

		if ($data['produk']) {
			echo json_encode($dataProduk);
		} else {
			echo json_encode([]);
		}
	}

	public function save()
	{
		if ($_FILES['gambar_produk']['name'] <> '') {
			$_POST['gambar_produk'] = $this->upload_gambar_produk();
		}
		$res = $this->M_produk->insertdata('produk', $_POST);
		echo json_encode($res);
	}

	public function edit()
	{
		if ($_FILES['gambar_produk']['name'] <> '') {
			$_POST['gambar_produk'] = $this->upload_gambar_produk();
		}
		$where = array('id_produk' =>  $_POST['id_produk']);
		unset($_POST['id_produk']);
		$res = $this->M_produk->updatedata('produk', $_POST, $where);
		echo json_encode($res);
	}

	public function delete()
	{
		$where = array('id_produk' =>  $_POST['id_produk']);
		$res = $this->M_produk->deletedata('produk', $where);
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
