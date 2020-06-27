<?php

class Arsip_model extends CI_Model
{
    public function getAllArsip()
    {
        return $this->db->get('tbl_arsip')->result_array();
    }

    public function getFileById($id)
    {
        return $this->db->get_where('tbl_arsip', ['id' => $id])->row_array();
    }

    public function hapusDataUpload($id, $file)
    {
        $old_file = $file['filename'];
        unlink(FCPATH . 'arsip/' . $old_file);
        $this->db->delete('tbl_arsip', ['id' => $id]);
    }

    public function upload()
    {
        $upload_file = $_FILES['filename']['name'];
        if ($upload_file) {
            $config['upload_path']          = './arsip/';
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
            $this->db->insert('tbl_arsip', $data);
        }
    }
}
