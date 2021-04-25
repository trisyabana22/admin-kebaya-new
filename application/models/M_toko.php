<?php

class M_toko extends CI_Model
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

    function v_toko($id = '')
    {
        $query = $this->db->query("SELECT * From toko WHERE id='" . $id . "'");

        return   $query->row_array();
    }
}
