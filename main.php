<?php
class Main extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('main_model');
    $this->load->helper(array('form', 'url'));
    $this->load->library('session');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $this->form_validation->set_rules('nim','Nim','callback_ceknim');
    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('daftar_view',array('message'=>''));
    }else {
      $this->load->view('daftar_view',array('message'=>'Registrasi berhasil'));
    }
  }

  public function ceknim()
  {
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $cek = $this->main_model->ceknim($nim);
    if (!$cek) {
      $data=array(
        'nim'=>$nim,
        'nama'=>$nama
      );
      $this->db->insert('mahasiswa_1301160186',$data);
      return True;
    }else{
      $this->form_validation->set_message('ceknim','NIM already Exist');
      return False;
    }
  }
}
