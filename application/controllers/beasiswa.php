<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beasiswa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Dashboard_model');
    $this->load->model('Role_model');
    $this->load->model('Admin_model');
  }

  public function index()
  {

    $data['title'] = 'Pilih Beasiswa';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $this->db->like('beasiswa_id', 1);
    $this->db->from('alternatif');
    $data['ppaber'] = $this->db->count_all_results();
    $this->db->like('beasiswa_id', 2);
    $this->db->from('alternatif');
    $data['ppakm'] = $this->db->count_all_results();
    $this->db->like('beasiswa_id', 3);
    $this->db->from('alternatif');
    $data['wber'] = $this->db->count_all_results();
    $this->db->like('beasiswa_id', 4);
    $this->db->from('alternatif');
    $data['wkm'] = $this->db->count_all_results();
    $this->db->like('beasiswa_id', 5);
    $this->db->from('alternatif');
    $data['per'] = $this->db->count_all_results();
    $this->db->like('beasiswa_id', 6);
    $this->db->from('alternatif');
    $data['bm'] = $this->db->count_all_results();
    $this->db->like('beasiswa_id', 7);
    $this->db->from('alternatif');
    $data['bmd'] = $this->db->count_all_results();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/tipe-beasiswa', $data);
    $this->load->view('templates/footer');
  }


  public function ppaBerprestasi()
  {
    $data['namarole']  = $this->db->get_where('user_role', ['id' =>
    $this->session->userdata('id')])->row_array();
    $email = $this->session->userdata('email');
    $role_id = $this->session->userdata('role_id');
    $data = [
      'email' => $email,
      'role_id' => $role_id,
      'beasiswa_id' => '1'
    ];
    $this->session->set_userdata($data);
    redirect('admin');
  }
  public function ppaKurangMampu()
  {
    $data['namarole']  = $this->db->get_where('user_role', ['id' =>
    $this->session->userdata('id')])->row_array();
    $email = $this->session->userdata('email');
    $role_id = $this->session->userdata('role_id');
    $data = [
      'email' => $email,
      'role_id' => $role_id,
      'beasiswa_id' => '2'
    ];
    $this->session->set_userdata($data);
    redirect('admin');
  }

  public function wkriBerprestasi()
  {
    $data['namarole']  = $this->db->get_where('user_role', ['id' =>
    $this->session->userdata('id')])->row_array();
    $email = $this->session->userdata('email');
    $role_id = $this->session->userdata('role_id');
    $data = [
      'email' => $email,
      'role_id' => $role_id,
      'beasiswa_id' => '3'
    ];
    $this->session->set_userdata($data);
    redirect('admin');
  }

  public function wkriKurangMampu()
  {
    $data['namarole']  = $this->db->get_where('user_role', ['id' =>
    $this->session->userdata('id')])->row_array();
    $email = $this->session->userdata('email');
    $role_id = $this->session->userdata('role_id');
    $data = [
      'email' => $email,
      'role_id' => $role_id,
      'beasiswa_id' => '4'
    ];
    $this->session->set_userdata($data);
    redirect('admin');
  }

  public function perseorangan()
  {
    $data['namarole']  = $this->db->get_where('user_role', ['id' =>
    $this->session->userdata('id')])->row_array();
    $email = $this->session->userdata('email');
    $role_id = $this->session->userdata('role_id');
    $data = [
      'email' => $email,
      'role_id' => $role_id,
      'beasiswa_id' => '5'
    ];
    $this->session->set_userdata($data);
    redirect('admin');
  }
  public function bidikMisi()
  {
    $data['namarole']  = $this->db->get_where('user_role', ['id' =>
    $this->session->userdata('id')])->row_array();
    $email = $this->session->userdata('email');
    $role_id = $this->session->userdata('role_id');
    $data = [
      'email' => $email,
      'role_id' => $role_id,
      'beasiswa_id' => '6'
    ];
    $this->session->set_userdata($data);
    redirect('admin');
  }

  public function bidikMisiDifabel()
  {
    $data['namarole']  = $this->db->get_where('user_role', ['id' =>
    $this->session->userdata('id')])->row_array();
    $email = $this->session->userdata('email');
    $role_id = $this->session->userdata('role_id');
    $data = [
      'email' => $email,
      'role_id' => $role_id,
      'beasiswa_id' => '7'
    ];
    $this->session->set_userdata($data);
    redirect('admin');
  }
}
