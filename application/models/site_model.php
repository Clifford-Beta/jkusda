<?php
class site_model extends CI_Model{

        public function __construct()
        {
                $this->load->database();
        }


public function insert($tbl,$data){
  return $this->db->insert($tbl,$data);

}


public function get($table,$num)
{
//  $this->db->where('Category',$category);
  $query = $this->db->get($table,$num);
  return $query->result_array();
}

}
