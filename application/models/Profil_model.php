<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model {

   public function getProfil()
   {
      return $this->db->get('profil_sekolah')->row();
   }

}

/* End of file profil_model.php */
