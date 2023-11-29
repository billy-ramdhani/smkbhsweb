<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {

   private $table = 'guru';
   
   public function getGuru()
   {
    //mengambil data guru
      $this->db->get($this->table);
      $this->db->limit(4);

    //mengembalikan data ke bentuk array
    return $this->db->get($this->table)->result();
   }

}

/* End of file Category_model.php */
