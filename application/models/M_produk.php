<?php

class M_produk extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //----------start---show all wilayah-----------------

    public function insertdata($tabelname, $data)
    {
        $res = $this->db->insert($tabelname, $data);
        return $res;
    }

    public function updatedata($tabelname, $data, $where)
    {
        $res = $this->db->update($tabelname, $data, $where);
        return $res;
    }

    public function deletedata($tabelname, $where)
    {
        $res = $this->db->delete($tabelname, $where);
        return $res;
    }

    function v_all_kategori($where = '')
    {
        $query = $this->db->query("SELECT * FROM kategori " . $where . "");

        return   $query->result_array();
    }

    function v_all_produk($where = '')
    {
        $query = $this->db->query("SELECT * FROM produk left join kategori on produk.id_kategori=kategori.id_kategori " . $where . "");

        return   $query->result_array();
    }

    function group_produk($where = '')
    {
        $query = $this->db->query("SELECT k.id_kategori,k.nama_kategori,count(p.id_produk) total FROM produk p right join kategori k on p.id_kategori=k.id_kategori " . $where . " Group By k.nama_kategori");

        return   $query->result_array();
    }

    function v_all_gambar($where = '')
    {
        $query = $this->db->query("SELECT gbr.*,produk.id_produk,produk.nama_produk FROM gambar_produk gbr inner join produk on gbr.id_produk=produk.id_produk " . $where . "");

        return   $query->result_array();
    }

    function v_all_produk_detail($where = '')
    {
        $query = $this->db->query("SELECT * FROM stok inner join produk on stok.id_produk=produk.id_produk  inner join kategori on produk.id_kategori=kategori.id_kategori " . $where . " order by produk.nama_produk");

        return   $query->result_array();
    }

    function v_all_produk_detail_2($where = '')
    {
        $query = $this->db->query("SELECT produk.*,min(stok.harga) min_harga,max(stok.harga) max_harga FROM stok inner join produk on stok.id_produk=produk.id_produk  " . $where . "");

        return   $query->row_array();
    }

    function v_all_produk_detail_3($where = '')
    {
        $query = $this->db->query("SELECT * FROM stok inner join produk on stok.id_produk=produk.id_produk " . $where . " order by stok.harga");

        return   $query->result_array();
    }

    function v_all_stok($where = '')
    {
        $query = $this->db->query("SELECT * FROM stok " . $where . "");

        return   $query->result_array();
    }

    function v_all_stok_min($where = '')
    {
        $query = $this->db->query("SELECT min(harga) harga,sum(jumlah_stok) jumlah_stok FROM stok " . $where . "");

        return   $query->result_array();
    }
}
