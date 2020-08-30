<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Nilai_model');
        $this->load->model('Kriteria_model');
        $this->load->model('SubKriteria_model');
        $this->load->model('Alternatif_model');
        $this->load->model('Dashboard_model');
        $this->load->model('File_model');
        $this->load->model('Arsip_model');
        $this->load->model('Laporan_model');
    }

    public function nilai()
    {
        $data['title'] = 'Nilai';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['beasiswa'] = $this->Dashboard_model->getBeasiswaByBea();
        $data['nilai'] = $this->Nilai_model->getAllNilai();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/nilai/nilai', $data);
        $this->load->view('templates/footer');
    }

    public function tambahnilai()
    {
        $data['title'] = 'Nilai';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $this->form_validation->set_rules('keterangan_nilai', 'Keterangan Nilai', 'required|trim');
        $this->form_validation->set_rules('jumlah_nilai', 'Jumlah Nilai', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/nilai/tambahnilai', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Nilai_model->tambahDataNilai();
            $this->session->set_flashdata('message', 'Ditambahkan!');
            redirect('administrasi/nilai');
        }
    }

    public function editnilai($id_nilai)
    {
        $data['title'] = 'Nilai';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['nilai'] = $this->Nilai_model->getNilaiById($id_nilai);
        $nilai = $this->Nilai_model->getNilaiById($id_nilai);
        $this->form_validation->set_rules('keterangan_nilai', 'Keterangan Nilai', 'required|trim');
        $this->form_validation->set_rules('jumlah_nilai', 'Jumlah Nilai', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/nilai/editnilai', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Nilai_model->ubahDataNilai($nilai, $id_nilai);
            $this->session->set_flashdata('message', 'Diubah!');
            redirect('administrasi/nilai');
        }
    }

    public function hapusnilai($id_nilai)
    {
        $nilai = $this->Nilai_model->getNilaiById($id_nilai);
        $this->Nilai_model->hapusDataNilai($id_nilai, $nilai);
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('administrasi/nilai');
    }

    public function kriteria()
    {
        $data['title'] = 'Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['beasiswa'] = $this->Dashboard_model->getBeasiswaByBea();
        $data['kriteria'] = $this->Kriteria_model->getAllKriteriaByBea();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/kriteria/kriteria', $data);
        $this->load->view('templates/footer');
    }

    public function subkriteria()
    {
        $data['title'] = 'Sub Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['subkriteria'] = $this->SubKriteria_model->getAllSubKriteriaByBea();
        $data['beasiswa'] = $this->Dashboard_model->getBeasiswaByBea();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/subkriteria/subkriteria', $data);
        $this->load->view('templates/footer');
    }

    public function tambahkriteria()
    {
        $data['title'] = 'Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $this->form_validation->set_rules('nama_kriteria', 'Nama Kriteria', 'required|trim');
        $data['nilai'] = $this->db->get('nilai')->result_array();
        $data['beasiswa'] = $this->Dashboard_model->getBeasiswaByBea();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/kriteria/tambahkriteria', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kriteria_model->tambahDataKriteria();
            $this->session->set_flashdata('message', 'Ditambahkan!');
            redirect('administrasi/kriteria');
        }
    }

    public function tambahsubkriteria()
    {
        $data['title'] = 'Sub Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $this->form_validation->set_rules('id_kriteria', 'Kriteria', 'required');
        $this->form_validation->set_rules('nama_subkriteria', 'Nama Subkriteria', 'required|trim');
        $this->form_validation->set_rules('nilai_subkriteria', 'Nilai Subkriteria', 'required|trim');
        $data['subkriteria'] = $this->db->get('subkriteria')->result_array();
        $data['kriteria'] = $this->Kriteria_model->getAllKriteriaByBea();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/subkriteria/tambahsubkriteria', $data);
            $this->load->view('templates/footer');
        } else {
            $this->SubKriteria_model->tambahDataSubKriteria();
            $this->session->set_flashdata('message', 'Ditambahkan!');
            redirect('administrasi/subkriteria');
        }
    }

    public function editkriteria($id_kriteria)
    {
        $data['title'] = 'Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['kriteria'] = $this->Kriteria_model->getKriteriaById($id_kriteria);
        $kriteria = $this->Kriteria_model->getKriteriaById($id_kriteria);
        $data['tipe_kriteria'] = ['Cost', 'Benefit'];
        $data['nilai'] = $this->db->get('nilai')->result_array();
        $data['kriteriaall'] = $this->db->get('kriteria')->result_array();
        $this->form_validation->set_rules('nama_kriteria', 'Nama Kriteria', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/kriteria/editkriteria', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kriteria_model->ubahDataKriteria($kriteria, $id_kriteria);
            $this->Alternatif_model->updateNormalisasiHasil();
            $this->session->set_flashdata('message', 'Diubah!');
            redirect('administrasi/kriteria');
        }
    }

    public function editsubkriteria($id_subkriteria)
    {
        $data['title'] = 'Sub Kriteria';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $subkriteria = $this->SubKriteria_model->getSubKriteriaById($id_subkriteria);
        $data['subkriteria'] = $this->SubKriteria_model->getSubKriteriaById($id_subkriteria);
        $data['kriteria'] = $this->Kriteria_model->getAllKriteriaByBea();
        $data['subkriteriaall'] = $this->db->get('subkriteria')->result_array();
        $this->form_validation->set_rules('nama_subkriteria', 'Nama Sub Kriteria', 'required|trim');
        $this->form_validation->set_rules('nilai_subkriteria', 'Nilai Sub Kriteria', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/subkriteria/editsubkriteria', $data);
            $this->load->view('templates/footer');
        } else {
            $this->SubKriteria_model->ubahDataSubKriteria($subkriteria, $id_subkriteria);
            $this->Alternatif_model->updateNormalisasiHasil();
            $this->session->set_flashdata('message', 'Diubah!');
            redirect('administrasi/subkriteria');
        }
    }

    public function hapuskriteria($id_kriteria)
    {
        $kriteria = $this->Kriteria_model->getKriteriaById($id_kriteria);
        $this->Kriteria_model->hapusDataKriteria($id_kriteria, $kriteria);
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('administrasi/kriteria');
    }

    public function hapussubkriteria($id_subkriteria)
    {
        $subkriteria = $this->SubKriteria_model->getSubKriteriaById($id_subkriteria);
        $this->SubKriteria_model->hapusDataSubKriteria($id_subkriteria, $subkriteria);
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('administrasi/subkriteria');
    }

    public function alternatif()
    {
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['alternatif'] = $this->Alternatif_model->getAllAlternatifByBea();
        $data['beasiswa'] = $this->Dashboard_model->getBeasiswaByBea();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/alternatif/alternatif', $data);
        $this->load->view('templates/footer');
    }

    public function detailalternatif($id_alternatif)
    {
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['subkriteria'] = $this->Alternatif_model->getAllSubkriteria();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['alternatif'] = $this->Alternatif_model->getAlternatifById($id_alternatif);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/alternatif/detailalternatif', $data);
        $this->load->view('templates/footer');
    }

    public function tambahalternatif()
    {
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['subkriteria'] = $this->Alternatif_model->getAllSubkriteria();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $this->form_validation->set_rules('nim', 'NIM', 'is_unique[alternatif.nim]|required|trim');
        $this->form_validation->set_rules('nama_alternatif', 'Nama Alternatif', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/alternatif/tambahalternatif', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Alternatif_model->tambahDataAlternatif();
            $this->Alternatif_model->updateNormalisasiHasil();
            $this->session->set_flashdata('message', 'Ditambahkan!');
            redirect('administrasi/alternatif');
        }
    }

    public function editalternatif($id_alternatif)
    {
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['alternatif'] = $this->Alternatif_model->getAlternatifById($id_alternatif);
        $alternatif = $this->Alternatif_model->getAlternatifById($id_alternatif);
        $data['jk'] = ['Laki-laki', 'Perempuan'];
        $data['jurusan'] = ['D3 Komputerisasi Akuntansi', 'S1 Sistem Informasi', 'S1 Teknik Informatika', 'S1 Desain Komunikasi Visual'];
        $data['hitung'] = $this->Alternatif_model->getHitungById($id_alternatif);
        $this->form_validation->set_rules('nama_alternatif', 'Nama Alternatif', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/alternatif/editalternatif', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Alternatif_model->ubahDataAlternatif($alternatif, $id_alternatif);
            $this->Alternatif_model->updateNormalisasiHasil();
            $this->session->set_flashdata('message', 'Diubah!');
            redirect('administrasi/alternatif');
        }
    }

    public function hapusalternatif($id_alternatif)
    {
        $alternatif = $this->Alternatif_model->getAlternatifById($id_alternatif);
        $this->Alternatif_model->hapusDataAlternatif($id_alternatif, $alternatif);
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('administrasi/alternatif');
    }

    public function hapusSemuaData()
    {
        $this->Alternatif_model->hapusSemuaData();
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('administrasi/alternatif');
    }

    public function hasil_seleksi()
    {
        $data['title'] = 'Laporan';
        $beaId = $this->session->userdata('beasiswa_id');
        if ($beaId == 1) {
            $data['judul'] = 'Nilai Alternatif Beasiswa PPA (Berprestasi) Tahun' . date(' Y');
        } elseif ($beaId == 2) {
            $data['judul'] = 'Nilai Alternatif Beasiswa PPA (Kurang Mampu) Tahun' . date(' Y');
        } elseif ($beaId == 3) {
            $data['judul'] = 'Nilai Alternatif Beasiswa WKRI (Berprestasi) Tahun' . date(' Y');
        } elseif ($beaId == 4) {
            $data['judul'] = 'Nilai Alternatif Beasiswa WKRI (Kurang Mampu) Tahun' . date(' Y');
        } elseif ($beaId == 5) {
            $data['judul'] = 'Nilai Alternatif Beasiswa Perseorangan Tahun' . date(' Y');
        } elseif ($beaId == 6) {
            $data['judul'] = 'Nilai Alternatif Beasiswa Bidik Misi Tahun' . date(' Y');
        } elseif ($beaId == 7) {
            $data['judul'] = 'Nilai Alternatif Beasiswa Bidik Misi (Difabel) Tahun' . date(' Y');
        }
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['alternatif'] = $this->Alternatif_model->getAllAlternatifByBea();
        $data['hitung'] = $this->Laporan_model->getAllHitungByBea();
        $data['subkriteria'] = $this->Laporan_model->getAllSubKriteriaByBea();
        $data['kriteria'] = $this->Kriteria_model->getAllKriteriaByBea();
        $data['hasil'] = $this->Laporan_model->getAllHasilByBea();
        $data['beasiswa'] = $this->Dashboard_model->getBeasiswaByBea();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/laporan/hasil_seleksi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function konversi()
    {
        $data['title'] = 'Laporan';
        $beaId = $this->session->userdata('beasiswa_id');
        if ($beaId == 1) {
            $data['judul'] = 'Konversi Beasiswa PPA (Berprestasi) Tahun' . date(' Y');
        } elseif ($beaId == 2) {
            $data['judul'] = 'Konversi Beasiswa PPA (Kurang Mampu) Tahun' . date(' Y');
        } elseif ($beaId == 3) {
            $data['judul'] = 'Konversi Beasiswa WKRI (Berprestasi) Tahun' . date(' Y');
        } elseif ($beaId == 4) {
            $data['judul'] = 'Konversi Beasiswa WKRI (Kurang Mampu) Tahun' . date(' Y');
        } elseif ($beaId == 5) {
            $data['judul'] = 'Konversi Beasiswa Perseorangan Tahun' . date(' Y');
        } elseif ($beaId == 6) {
            $data['judul'] = 'Konversi Beasiswa Bidik Misi Tahun' . date(' Y');
        } elseif ($beaId == 7) {
            $data['judul'] = 'Konversi Beasiswa Bidik Misi (Difabel) Tahun' . date(' Y');
        }
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['alternatif'] = $this->Alternatif_model->getAllAlternatifByBea();
        $data['hitung'] = $this->Laporan_model->getAllHitungByBea();
        $data['subkriteria'] = $this->Laporan_model->getAllSubKriteriaByBea();
        $data['kriteria'] = $this->Kriteria_model->getAllKriteriaByBea();
        $data['hasil'] = $this->Laporan_model->getAllHasilByBea();
        $data['beasiswa'] = $this->Dashboard_model->getBeasiswaByBea();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/laporan/konversi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function normalisasi()
    {
        $data['title'] = 'Laporan';
        $beaId = $this->session->userdata('beasiswa_id');
        if ($beaId == 1) {
            $data['judul'] = 'Normalisasi Beasiswa PPA (Berprestasi) Tahun' . date(' Y');
        } elseif ($beaId == 2) {
            $data['judul'] = 'Normalisasi Beasiswa PPA (Kurang Mampu) Tahun' . date(' Y');
        } elseif ($beaId == 3) {
            $data['judul'] = 'Normalisasi Beasiswa WKRI (Berprestasi) Tahun' . date(' Y');
        } elseif ($beaId == 4) {
            $data['judul'] = 'Normalisasi Beasiswa WKRI (Kurang Mampu) Tahun' . date(' Y');
        } elseif ($beaId == 5) {
            $data['judul'] = 'Normalisasi Beasiswa Perseorangan Tahun' . date(' Y');
        } elseif ($beaId == 6) {
            $data['judul'] = 'Normalisasi Beasiswa Bidik Misi Tahun' . date(' Y');
        } elseif ($beaId == 7) {
            $data['judul'] = 'Normalisasi Beasiswa Bidik Misi (Difabel) Tahun' . date(' Y');
        }
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['alternatif'] = $this->Alternatif_model->getAllAlternatifByBea();
        $data['hitung'] = $this->Laporan_model->getAllHitungByBea();
        $data['subkriteria'] = $this->Laporan_model->getAllSubKriteriaByBea();
        $data['kriteria'] = $this->Kriteria_model->getAllKriteriaByBea();
        $data['hasil'] = $this->Laporan_model->getAllHasilByBea();
        $data['beasiswa'] = $this->Dashboard_model->getBeasiswaByBea();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/laporan/normalisasi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function hasil_akhir()
    {
        $data['title'] = 'Laporan';
        $beaId = $this->session->userdata('beasiswa_id');
        if ($beaId == 1) {
            $data['judul'] = 'Hasil Akhir Beasiswa PPA (Berprestasi) Tahun' . date(' Y');
        } elseif ($beaId == 2) {
            $data['judul'] = 'Hasil Akhir Beasiswa PPA (Kurang Mampu) Tahun' . date(' Y');
        } elseif ($beaId == 3) {
            $data['judul'] = 'Hasil Akhir Beasiswa WKRI (Berprestasi) Tahun' . date(' Y');
        } elseif ($beaId == 4) {
            $data['judul'] = 'Hasil Akhir Beasiswa WKRI (Kurang Mampu) Tahun' . date(' Y');
        } elseif ($beaId == 5) {
            $data['judul'] = 'Hasil Akhir Beasiswa Perseorangan Tahun' . date(' Y');
        } elseif ($beaId == 6) {
            $data['judul'] = 'Hasil Akhir Beasiswa Bidik Misi Tahun' . date(' Y');
        } elseif ($beaId == 7) {
            $data['judul'] = 'Hasil Akhir Beasiswa Bidik Misi (Difabel) Tahun' . date(' Y');
        }
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['alternatif'] = $this->Alternatif_model->getAllAlternatifByBea();
        $data['hitung'] = $this->Laporan_model->getAllHitungByBea();
        $data['subkriteria'] = $this->Laporan_model->getAllSubKriteriaByBea();
        $data['kriteria'] = $this->Kriteria_model->getAllKriteriaByBea();
        $data['hasil'] = $this->Laporan_model->getAllHasilByBea();
        $data['beasiswa'] = $this->Dashboard_model->getBeasiswaByBea();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/laporan/hasil_akhir', $data);
        $this->load->view('templates/footer');
    }

    public function tampilDataUpload()
    {
        $data['title'] = 'Upload Hasil Beasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['file'] = $this->File_model->getAllFile();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/upload/tampilDataUpload', $data);
        $this->load->view('templates/footer');
    }

    public function upload()
    {
        $data['title'] = 'Upload Hasil Beasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        if (empty($_FILES['filename']['name'])) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/upload/upload', $data);
            $this->load->view('templates/footer');
        } else {
            $this->File_model->upload();
            $this->session->set_flashdata('message', '<div class="alert
                alert-success" role="alert"> File berhasil Diupload!</div>');
            redirect('administrasi/upload/tambahDataUpload');
        }
    }

    public function hapusDataUpload($id)
    {
        $file = $this->File_model->getFileById($id);
        $this->File_model->hapusDataUpload($id, $file);
        $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert"> File berhasil Dihapus!</div>');
        redirect('administrasi/tampilDataUpload');
    }

    public function arsipFile()
    {
        $data['title'] = 'Arsip Hasil Beasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['arsip'] = $this->Arsip_model->getAllArsip();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/arsip/arsipFile', $data);
        $this->load->view('templates/footer');
    }

    public function arsip()
    {
        $data['title'] = 'Upload File Arsip Hasil Beasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        if (empty($_FILES['filename']['name'])) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/arsip/arsip', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Arsip_model->upload();
            $this->session->set_flashdata('message', 'Diarsipkan!');
            redirect('administrasi/arsipFile');
        }
    }

    public function daftarArsip()
    {
        $data['title'] = 'Arsip Hasil Beasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['namarole']  = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['arsip'] = $this->db->get('tbl_arsip')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/arsip/daftarArsip', $data);
        $this->load->view('templates/footer');
    }

    public function download($id)
    {
        $file =  $this->db->get_where('tbl_arsip', ['id' => $id])->row_array();
        $filename = $file['filename'];
        force_download('arsip/' . $filename, null);
    }

    public function hapusDataArsip($id)
    {
        $file = $this->Arsip_model->getFileById($id);
        $this->Arsip_model->hapusDataUpload($id, $file);
        $this->session->set_flashdata('message', 'Dihapus!');
        redirect('administrasi/arsipFile');
    }
}
