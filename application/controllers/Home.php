<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
		$data['kategori'] = $this->M_produk->v_all_kategori();
		$this->load->view('home/v_show', $data);
	}

	public function produk($id_kategori = '', $nama_produk = '', $urutan = '')
	{
		$urutan = str_replace("-", " ", $urutan);
		$where = " where id_kategori like '%" . $id_kategori . "%' and nama_produk like '%" . $nama_produk . "%' " . $urutan . " limit 0,16";
		$data['produk'] = $this->M_produk->v_all_produk($where);
		foreach ($data['produk'] as $produk) {
			$stok = $this->M_produk->v_all_stok(" where id_produk='" . $produk['id_produk'] . "' and jumlah_stok > 0");
			$dataProduk[] = [
				'id_produk' =>  $produk['id_produk'],
				'id_kategori' =>  $produk['id_kategori'],
				'nama_produk' =>  $produk['nama_produk'],
				'harga_produk' =>  number_format((float)$produk['harga_produk'], 0, ',', '.'),
				'gambar_produk' =>  $produk['gambar_produk'],
				'bahan' =>  $produk['bahan'],
				'stok' =>  $stok,
			];
		}

		if ($data['produk']) {
			echo json_encode($dataProduk);
		} else {
			echo json_encode([]);
		}
	}

	public function detail($id_produk = '')
	{
		$this->load->view('home/v_detail');
	}

	public function load_detail_produk($id_produk = '')
	{
		$dataProduk = $this->M_produk->v_all_produk_detail();
		$no = 0;
		foreach ($dataProduk as $produk) {
			$data['table'][] = [
				$no,
				$produk['nama_produk'],
				$produk['ukuran_stok'],
				$produk['harga'],
				$produk['jumlah_stok'],
				'button',
			];

			$no++;
		}
		echo json_encode($data);
	}

	public function load_jenis_produk($id_produk = '')
	{
		$dataProduk = $this->M_produk->group_produk();
		$no = 0;
		foreach ($dataProduk as $produk) {
			$data['table'][] = [
				$no,
				$produk['nama_kategori'],
				$produk['total'],
				'button',
			];

			$no++;
		}
		echo json_encode($data);
	}

	public function load_gambar_produk($id_produk = '')
	{
		$data['gambar'] = $this->M_produk->v_all_gambar();
		echo json_encode($data);
	}

	public function tes($id_produk = '')
	{
	}
}
