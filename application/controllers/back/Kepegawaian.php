<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepegawaian extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('kepegawaian_model', 'kepegawaian');
        $this->load->model('menu_model', 'menu', true);
    }

    public function kepegawaian_upload()
    {
       $data = array(
          'id'           => NULL, // Auto increment
          'nik'         => $this->input->post('nik'),
          'nama'          => $this->input->post('nama'),
          'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
          'email'             => $this->input->post('email'),
          'gelar'             => $this->input->post('gelar'),
          'bidang_pelajaran'  => $this->input->post('bidang_pelajaran'),
          'jabatan'   => $this->input->post('jabatan'),
      );
 
      $result = $this->kepegawaian->upload_data($data);
      echo $result;
    }

//----------------------------------------------------------------------------------------------------------------------
    public function create()
	{
		
		if($this->form_validation->run() == false){
			$data['title'] = 'Tambah Kepegawaian';
            $data['menu'] = $this->menu->getMenu();
			$data['form_action'] = base_url("back/kepegawaian/create");
			$this->load->view('back/pages/web/kepegawaian_tambah', $data);
		}else{
			
			$data = [
				'id'                => NULL, // Auto increment
                'nik'               => $this->input->post('nik'),
                'nama'              => $this->input->post('nama'),
                'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                'email'             => $this->input->post('email'),
                'gelar'             => $this->input->post('gelar'),
                'bidang_pelajaran'  => $this->input->post('bidang_pelajaran'),
                'jabatan'   => $this->input->post('jabatan'),
			];

            $result = $this->kepegawaian->upload_data($data);
            echo $result;
			
			}
		

	}
}
