<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Dashboard_model');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nilai'] = $this->Dashboard_model->getAllNilai();
        $data['beasiswa'] = $this->Dashboard_model->getBeasiswaByBea();
        $data['alternatif'] = $this->Dashboard_model->getAllAlternatifByBea();

        $data['graph'] = $this->Dashboard_model->graph();
        $data['kriteria'] = $this->Dashboard_model->getAllKriteriaByBea();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function tipeBeasiswa()
    {
        $data['title'] = 'Pilih Beasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tipe-beasiswa', $data);
        $this->load->view('templates/footer');
    }

    public function ppa()
    {
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
    public function bidikMisi()
    {
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
    public function prestasi()
    {
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
    public function kurangMampu()
    {
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

    public function menuBeasiswa()
    {

        $this->session->unset_userdata('beasiswa_id');
        redirect('admin/tipebeasiswa');
    }
    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }
    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id != ', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }
    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');
        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }
}
