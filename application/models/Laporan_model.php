<?php

class Laporan_model extends CI_Model
{

    public function getAllHitungbyBea()
    {
        $beaId = $this->session->userdata('beasiswa_id');
        $query = "SELECT * FROM hitung join alternatif
        ON hitung.id_alternatif = alternatif.id_alternatif
        WHERE alternatif.beasiswa_id = $beaId ";
        $hitung = $this->db->query($query)->result_array();
        return $hitung;
    }

    public function getAllSubKriteriaByBea()
    {
        return $this->db->get_where('subkriteria', ['beasiswa_id' => $this->session->userdata('beasiswa_id')])->result_array();
    }
    public function getAllHasilByBea()
    {
        $beaId =  $this->session->userdata('beasiswa_id');
        $query = "SELECT nama_alternatif, hasil from alternatif join hasil on alternatif.id_alternatif=hasil.id_alternatif where alternatif.beasiswa_id = $beaId order by hasil DESC";
        $hasil = $this->db->query($query)->result_array();
        return $hasil;
    }
}
