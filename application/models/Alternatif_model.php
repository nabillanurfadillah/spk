<?php

class Alternatif_model extends CI_Model
{
    public function getAllAlternatifByBea()
    {
        $beaId = $this->session->userdata('beasiswa_id');
        return $this->db->get_where('alternatif', ['beasiswa_id' => $beaId])->result_array();
    }
    public function getAllSubkriteria()
    {
        return $this->db->get('subkriteria')->result_array();
    }

    public function getAlternatifById($id_alternatif)
    {
        return $this->db->get_where('alternatif', ['id_alternatif' => $id_alternatif])->row_array();
    }
    public function getHitungById($id_alternatif)
    {
        return $this->db->get_where('hitung', ['id_alternatif' => $id_alternatif])->result_array();
    }

    public function tambahDataAlternatif()
    {
        $ids = $this->input->post('id_subkriteria', true);
        $beaId = $this->session->userdata('beasiswa_id');
        $dataa = [
            'beasiswa_id' => $beaId,
            'nim' => $this->input->post('nim', true),
            'nama_alternatif' => $this->input->post('nama_alternatif', true),
            'jk' => $this->input->post('jk', true),
            'alamat' => $this->input->post('alamat', true),
            'tahun' => $this->input->post('tahun', true)
        ];
        $this->db->insert('alternatif', $dataa);
        $id_alternatif = $this->db->insert_id();

        $hasil = 0;
        foreach ($ids as $i) {
            $subK = $this->db->get_where('subkriteria', ['id_subkriteria' => $i])->result_array();

            foreach ($subK as $sub) {
                $nilaiS = $sub['nilai_subkriteria'];

                $kriteria = $this->db->get_where('kriteria', ['id_kriteria' => $sub['id_kriteria']])->result_array();
                foreach ($kriteria as $K) {
                    $tipeK = $K['tipe_kriteria'];
                    $idk = $K['id_kriteria'];
                    $idn = $K['id_nilai'];

                    if ($tipeK == 'Cost') {
                        $beaId = $this->session->userdata('beasiswa_id');
                        $query = "SELECT  MIN(nilai_subkriteria) AS min
                        FROM subkriteria 
                        JOIN hitung
                        ON subkriteria.id_subkriteria = hitung.id_subkriteria
                        WHERE subkriteria.id_kriteria = $idk and subkriteria.beasiswa_id = $beaId ";
                        $hs = $this->db->query($query)->result_array();

                        foreach ($hs as $HS) {
                            $min = $HS['min'];
                            if ($min != 0) {

                                $normalisasi = $min / $nilaiS;
                            } else {
                                $normalisasi = $nilaiS / $nilaiS;
                            }
                        }
                    } else {
                        $beaId = $this->session->userdata('beasiswa_id');
                        $query = "SELECT MAX(nilai_subkriteria) AS max
                        FROM subkriteria 
                        JOIN hitung
                        ON subkriteria.id_subkriteria = hitung.id_subkriteria
                        WHERE subkriteria.id_kriteria = $idk and subkriteria.beasiswa_id = $beaId ";
                        $hs = $this->db->query($query)->result_array();

                        foreach ($hs as $HS) {
                            $max = $HS['max'];
                            if ($max != 0) {

                                $normalisasi = $nilaiS / $max;
                            } else {
                                $normalisasi = $nilaiS / $nilaiS;
                            }
                        }
                    }

                    $nilai = $this->db->get_where('nilai', ['id_nilai' => $idn])->result_array();

                    foreach ($nilai as $n) {
                        $jn = $n['jumlah_nilai'];
                        $kali = $jn * $normalisasi;
                        $hasil += $kali;
                    }
                }
            }


            $data = [
                'id_alternatif' => $id_alternatif,
                'id_subkriteria' => $i,
                'nilai_normalisasi' => $normalisasi

            ];
            $this->db->insert('hitung', $data);
        }
        $data1 = [
            'id_alternatif' => $id_alternatif,
            'hasil' => $hasil
        ];
        $this->db->insert('hasil', $data1);
    }

    public function updateNormalisasiHasil()
    {
        $beaId = $this->session->userdata('beasiswa_id');
        $query = "SELECT * FROM hitung join alternatif
        ON hitung.id_alternatif = alternatif.id_alternatif
        WHERE alternatif.beasiswa_id = $beaId ";
        $hitung = $this->db->query($query)->result_array();

        foreach ($hitung as $h) {
            $ids = $h['id_subkriteria'];
            $ida = $h['id_alternatif'];

            $subK = $this->db->get_where('subkriteria', ['id_subkriteria' => $ids])->result_array();
            foreach ($subK as $sub) {
                $nilaiS = $sub['nilai_subkriteria'];

                $kriteria = $this->db->get_where('kriteria', ['id_kriteria' => $sub['id_kriteria']])->result_array();
                foreach ($kriteria as $K) {
                    $tipeK = $K['tipe_kriteria'];
                    $idk = $K['id_kriteria'];
                    $idn = $K['id_nilai'];
                    // var_dump($K['nama_kriteria']);

                    if ($tipeK == 'Cost') {
                        $beaId = $this->session->userdata('beasiswa_id');
                        $query = "SELECT MIN(nilai_subkriteria) AS min
                        FROM subkriteria 
                        JOIN hitung
                        ON subkriteria.id_subkriteria = hitung.id_subkriteria
                        WHERE subkriteria.id_kriteria = $idk and subkriteria.beasiswa_id = $beaId";
                        $hs = $this->db->query($query)->result_array();

                        foreach ($hs as $HS) {
                            $min = $HS['min'];
                            if ($min != 0) {

                                $normalisasi = $min / $nilaiS;
                            } else {
                                $normalisasi = $nilaiS / $nilaiS;
                            }
                        }
                    } else {
                        $beaId = $this->session->userdata('beasiswa_id');
                        $query = "SELECT MAX(nilai_subkriteria) AS max
                        FROM subkriteria 
                        JOIN hitung
                        ON subkriteria.id_subkriteria = hitung.id_subkriteria
                        WHERE subkriteria.id_kriteria = $idk and subkriteria.beasiswa_id = $beaId";
                        $hs = $this->db->query($query)->result_array();

                        foreach ($hs as $HS) {
                            $max = $HS['max'];
                            if ($max != 0) {

                                $normalisasi = $nilaiS / $max;
                            } else {
                                $normalisasi = $nilaiS / $nilaiS;
                            }
                        }
                    }
                }
            }

            $data = [
                'nilai_normalisasi' => $normalisasi
            ];
            $this->db->set($data);
            $this->db->where('id_hitung', $h['id_hitung']);
            $this->db->update('hitung');
        }
        $beaId = $this->session->userdata('beasiswa_id');
        $query = " SELECT hasil.* from hasil join alternatif
        on hasil.id_alternatif = alternatif.id_alternatif 
        where alternatif.beasiswa_id = $beaId";
        $tHasil = $this->db->query($query)->result_array();

        foreach ($tHasil as $th) {
            $hasil = 0;
            $ida1 = $th['id_alternatif'];
            $idh = $th['id'];

            $hitung1 = $this->db->get_where('hitung', ['id_alternatif' => $ida1])->result_array();
            foreach ($hitung1 as $h) {

                $subK1 = $this->db->get_where('subkriteria', ['id_subkriteria' => $h['id_subkriteria']])->result_array();
                foreach ($subK1 as $sk) {
                    $kriteria1 = $this->db->get_where('kriteria', ['id_kriteria' => $sk['id_kriteria']])->result_array();
                    foreach ($kriteria1 as $k1) {

                        $idn1 = $k1['id_nilai'];

                        $nilai1 = $this->db->get_where('nilai', ['id_nilai' => $idn1])->result_array();

                        foreach ($nilai1 as $n1) {
                            $jn1 = $n1['jumlah_nilai'];
                            $nor = $h['nilai_normalisasi'];
                            $hasil += $nor * $jn1;
                        }
                    }
                }
            }
            $data1 = [
                'hasil' => $hasil
            ];
            // var_dump($hasil);
            $this->db->set($data1);
            $this->db->where('id', $idh);
            $this->db->update('hasil');
        }
    }

    public function ubahDataAlternatif($alternatif, $id_alternatif)
    {
        $nim = $this->input->post('nim', true);
        $nama_alternatif = $this->input->post('nama_alternatif', true);
        $jk = $this->input->post('jk', true);
        $alamat = $this->input->post('alamat', true);
        $tahun = $this->input->post('tahun', true);

        $data = [
            'nim' => $nim,
            'nama_alternatif' => $nama_alternatif,
            'jk' => $jk,
            'alamat' => $alamat,
            'tahun' => $tahun

        ];
        $this->db->set($data);
        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->update('alternatif');

        $query = "SELECT id_hitung FROM hitung WHERE hitung.id_alternatif=$id_alternatif";
        $id_hitung = $this->db->query($query)->result_array();
        $id_subkriteria = $this->input->post('id_subkriteria', true);

        $idsub = [];
        foreach ($id_subkriteria as $sub) {
            $a = ['id_subkriteria'];
            $idsub[] = array_fill_keys($a, $sub);
        }

        $out = [];
        foreach ($id_hitung as $key => $value) {
            $out[] = array_merge((array) $idsub[$key], (array) $value);
        }
        $hasil = 0;

        foreach ($out as $ids) {

            $subK = $this->db->get_where('subkriteria', ['id_subkriteria' => $ids['id_subkriteria']])->result_array();

            foreach ($subK as $sub) {
                $nilaiS = $sub['nilai_subkriteria'];

                $kriteria = $this->db->get_where('kriteria', ['id_kriteria' => $sub['id_kriteria']])->result_array();
                foreach ($kriteria as $K) {
                    $tipeK = $K['tipe_kriteria'];
                    $idk = $K['id_kriteria'];
                    $idn = $K['id_nilai'];


                    if ($tipeK == 'Cost') {
                        $beaId = $this->session->userdata('beasiswa_id');
                        $query = "SELECT MIN(nilai_subkriteria) AS min
                        FROM subkriteria 
                        JOIN hitung
                        ON subkriteria.id_subkriteria = hitung.id_subkriteria
                        WHERE subkriteria.id_kriteria = $idk and subkriteria.beasiswa_id = $beaId";
                        $hs = $this->db->query($query)->result_array();

                        foreach ($hs as $HS) {
                            $min = $HS['min'];
                            if ($min != 0) {

                                $normalisasi = $min / $nilaiS;
                            } else {
                                $normalisasi = $nilaiS / $nilaiS;
                            }
                        }
                    } else {
                        $beaId = $this->session->userdata('beasiswa_id');
                        $query = "SELECT MAX(nilai_subkriteria) AS max
                        FROM subkriteria 
                        JOIN hitung
                        ON subkriteria.id_subkriteria = hitung.id_subkriteria
                        WHERE subkriteria.id_kriteria = $idk and subkriteria.beasiswa_id = $beaId";
                        $hs = $this->db->query($query)->result_array();

                        foreach ($hs as $HS) {
                            $max = $HS['max'];
                            if ($max != 0) {

                                $normalisasi = $nilaiS / $max;
                            } else {
                                $normalisasi = $nilaiS / $nilaiS;
                            }
                        }
                    }
                    $nilai = $this->db->get_where('nilai', ['id_nilai' => $idn])->result_array();

                    foreach ($nilai as $n) {
                        $jn = $n['jumlah_nilai'];
                        $kali = $jn * $normalisasi;
                        $hasil += $kali;
                    }
                }
            }




            $data1 = [
                'id_subkriteria' => $ids['id_subkriteria'],
                'nilai_normalisasi' => $normalisasi

            ];
            $this->db->set($data1);
            $this->db->where('id_hitung', $ids['id_hitung']);
            $this->db->update('hitung');
        }
        $data2 = [

            'hasil' => $hasil
        ];
        $this->db->set($data2);
        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->update('hasil');
    }

    public function hapusDataAlternatif($id_alternatif)
    {
        $this->db->delete('alternatif', ['id_alternatif' => $id_alternatif]);
        $this->db->delete('hitung', ['id_alternatif' => $id_alternatif]);
        $this->db->delete('hasil', ['id_alternatif' => $id_alternatif]);
    }
    public function hapusSemuaData()
    {
        $beaId = $this->session->userdata('beasiswa_id');

        $query  = "SELECT * FROM alternatif WHERE beasiswa_id = $beaId";
        $alt = $this->db->query($query)->result_array();
        
        foreach ($alt as $alId) {
            $id_alternatif = $alId['id_alternatif'];
            $this->db->delete('hitung', ['id_alternatif' => $id_alternatif]);
            $this->db->delete('hasil', ['id_alternatif' => $id_alternatif]);
        }

        $this->db->delete('alternatif', ['beasiswa_id' => $beaId]);
    }
}
