<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepegawaian_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all() {
        $query = $this->db->get('kepegawaian');
        return $query->result();
    }

    public function upload_data($data) {
        $config['upload_path']      = './assets/images/kepegawaian/';
        $config['allowed_types']    = 'jpg|jpeg|png';
        $config['max_size']         = 2000; // KB
        $config['file_ext_tolower'] = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('photo')) {
            $uploaded_data = $this->upload->data();
            $data['photo'] = $uploaded_data['file_name'];

            // Masukkan data ke database
            $this->db->insert('kepegawaian', $data);

            return 'Data uploaded successfully.';
        } else {
            return $this->upload->display_errors();
        }
    }
}
