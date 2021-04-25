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
        $query = $this->db->query("SELECT * FROM produk " . $where . "");

        return   $query->result_array();
    }

    function v_all_stok($where = '')
    {
        $query = $this->db->query("SELECT * FROM stok " . $where . "");

        return   $query->result_array();
    }
}
