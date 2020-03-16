<?php

class Dashboard_model extends CI_Model
{

    public function getAllNilai()
    {
        return $this->db->get('nilai')->result_array();
    }
    public function getAllKriteria()
    {
        return $this->db->get('kriteria')->result_array();
    }
    public function getAllAlternatif()
    {
        return $this->db->get('alternatif')->result_array();
    }

    public function graph()
    {
        $query = "SELECT nama_alternatif, hasil from alternatif join hasil on alternatif.id_alternatif=hasil.id_alternatif order by hasil DESC";
        $data = $this->db->query($query);
        return $data->result();
    }
}
