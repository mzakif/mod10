<?php
class Main_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }
  public function get_data()
  {
    return $this->db->get('data');
  }

  public function ceknim($nim){
    $this->db->select('nim');
    $this->db->where('nim',$nim);
    $query=$this->db->get('mahasiswa_1301160186');

    if ($query->num_rows()>0) {
      return TRUE;
    }else {
      return FALSE;
    }
  }
}
