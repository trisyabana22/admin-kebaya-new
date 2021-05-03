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
		$where = " where produk.id_kategori like '%" . $id_kategori . "%' and nama_produk like '%" . $nama_produk . "%' " . $urutan . " limit 0,16";
		$data['produk'] = $this->M_produk->v_all_produk($where);
		foreach ($data['produk'] as $produk) {
			$stok = $this->M_produk->v_all_stok_min(" where id_produk='" . $produk['id_produk'] . "' and jumlah_stok > 0");
			$url = 'home/detail/' . $produk['id_produk'];
			$color = 'success';
			if ($stok[0]['jumlah_stok'] == null) {
				$url = "#produk";
				$color = 'danger';
			}
			$dataProduk[] = [
				'url' =>  $url,
				'id_produk' =>  $produk['id_produk'],
				'id_kategori' =>  $produk['id_kategori'],
				'nama_kategori' =>  $produk['nama_kategori'],
				'nama_produk' =>  $produk['nama_produk'],
				'harga_produk' =>  number_format((float)$produk['harga_produk'], 0, ',', '.'),
				'gambar_produk' =>  $produk['gambar_produk'],
				'bahan' =>  $produk['bahan'],
				'deskripsi' =>  $produk['deskripsi'],
				'harga' =>  number_format((float)(1 * $stok[0]['harga']), 0, ',', '.'),
				'jumlah_stok' =>  1 * $stok[0]['jumlah_stok'],
				'color' => $color
			];
		}

		if ($data['produk']) {
			echo json_encode($dataProduk);
		} else {
			echo json_encode([]);
		}
	}

	public function wa($message = '')
	{
		$data = $data = $this->M_toko->v_toko('1');
		$wa = '62' . substr($data['no_wa'], 1, $data['no_wa']);
		$text = trim(preg_replace('/\s\s+/', ' ', $message));

		function isMobile()
		{
			return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
		}

		// Use the function
		if (isMobile()) {
			// Do something for only mobile users
			redirect('https://wa.me/' . $wa . '&text=' . $text);
		} else {
			// Do something for only desktop users
			redirect('https://web.whatsapp.com/send?phone=' . $wa . '&text=' . $text);
		}
	}

	public function detail($id_produk = '')
	{
		$data = $this->M_toko->v_toko('1');
		$data['detail'] = $this->M_produk->v_all_produk_detail_2("WHERE produk.id_produk='" . $id_produk . "'");
		$data['stok'] = $this->M_produk->v_all_produk_detail_3("WHERE produk.id_produk='" . $id_produk . "'");
		$data['gambar'] = $this->M_produk->v_all_gambar("where produk.id_produk='" . $id_produk . "'");

		if ($data['stok']) {
			$this->load->view('home/v_detail', $data);
		} else {
			redirect('Home');
		}
	}

	public function stok_detail($id_stok = '')
	{
		$data =  $this->M_produk->v_all_stok(" where id_stok='" . $id_stok . "'")[0];
		$dt = [
			'harga' => number_format((float)$data['harga'], 0, ',', '.'),
			'stok' => $data['jumlah_stok']
		];
		echo json_encode($dt);
	}
}
