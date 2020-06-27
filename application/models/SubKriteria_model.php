<?php

class SubKriteria_model extends CI_Model
{
    public function getSubKriteriaById($id_subkriteria)
    {
        return $this->db->get_where('subkriteria', ['id_subkriteria' => $id_subkriteria])->row_array();
    }

    public function getAllSubKriteriaByBea()
    {
        $beaId = $this->session->userdata('beasiswa_id');
        $query = "SELECT subkriteria.*, subkriteria.beasiswa_id, nama_kriteria
                    FROM subkriteria join kriteria
                    ON subkriteria.id_kriteria = kriteria.id_kriteria
                    WHERE  subkriteria.beasiswa_id = $beaId";
        return $this->db->query($query)->result_array();
    }

    public function tambahDataSubKriteria()
    {
        $beaId = $this->session->userdata('beasiswa_id');
        $data = [
            'beasiswa_id' => $beaId,
            'id_kriteria' => $this->input->post('id_kriteria', true),
            'nama_subkriteria' => $this->input->post('nama_subkriteria', true),
            'nilai_subkriteria' => $this->input->post('nilai_subkriteria', true)
        ];
        $this->db->insert('subkriteria', $data);
    }

    public function ubahDataSubKriteria($subkriteria, $id_subkriteria)
    {
        $id_kriteria = $this->input->post('id_kriteria', true);
        $nama_subkriteria = $this->input->post('nama_subkriteria', true);
        $nilai_subkriteria = $this->input->post('nilai_subkriteria', true);
       $data = [
            'nama_subkriteria' => $nama_subkriteria,
            'nilai_subkriteria' => $nilai_subkriteria,
            'id_kriteria' => $id_kriteria
        ];
        $this->db->set($data);
        $this->db->where('id_subkriteria', $id_subkriteria);
        $this->db->update('subkriteria');
    }

    public function hapusDataSubKriteria($id_subkriteria)
    {
        $this->db->delete('subkriteria', ['id_subkriteria' => $id_subkriteria]);
    }
}