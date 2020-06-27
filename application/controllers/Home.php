<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['file'] = $this->db->get('tbl_file')->result_array();
        $this->load->view('home', $data);
    }

    public function download($id)
    {
        $file =  $this->db->get_where('tbl_file', ['id' => $id])->row_array();
        $filename = $file['filename'];
        force_download('uploads/' . $filename, null);
    }
}
