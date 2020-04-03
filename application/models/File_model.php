<?php

class File_model extends CI_Model
{

    public function upload()
    {
        $upload_file = $_FILES['filename']['name'];
        if ($upload_file) {

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'doc|docx|pdf';
            $config['max_size']             = 1000000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('filename')) {
                $filename =  $this->upload->data('file_name');

            } else {
                echo $this->upload->display_errors();
            }

            $data = [
                'filename' =>  $filename

            ];
            $this->db->insert('tbl_file', $data);
        }
    }
}
