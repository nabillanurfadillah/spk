<?php

class Dashboard_model extends CI_Model
{

    public function getAllNilai()
    {
        return $this->db->get('nilai')->result_array();
    }

    public function getBeasiswaByBea()
    {
        return $this->db->get_where('tipe_beasiswa', ['id' => $this->session->userdata('beasiswa_id')])->row_array();
    }
    public function getAllKriteriaByBea()
    {
        return $this->db->get_where('kriteria', ['beasiswa_id' => $this->session->userdata('beasiswa_id')])->result_array();
    }
    public function getAllAlternatifByBea()
    {
        return $this->db->get_where('alternatif', ['beasiswa_id' => $this->session->userdata('beasiswa_id')])->result_array();
    }

    public function graph()
    {
        $beaId = $this->session->userdata('beasiswa_id');
        $query = "SELECT nama_alternatif, hasil from alternatif join hasil on alternatif.id_alternatif=hasil.id_alternatif Where alternatif.beasiswa_id = $beaId order by hasil DESC";
        $data = $this->db->query($query);
        return $data->result();
    }
}
