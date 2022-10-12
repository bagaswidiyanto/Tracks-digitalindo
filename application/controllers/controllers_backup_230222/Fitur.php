<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fitur extends MY_Controller
{

  public function index()
  {


    $this->data['fiturM'] = $this->db->get('tbl_fiturtrack')->result();
    $this->data['fiturH'] = $this->db->get_where('tbl_textheaderhometrack', array('master_content' => 'Text Fitur'))->result();
    $this->data['fiturC'] = $this->db->get_where('tbl_textheaderhometrack', array('master_content' => 'Text Fitur'))->result();
    $this->data['bannerImage'] = $this->db->get_where('tbl_bannertrack', array('tipe' => 2))->result();

    // $this->data['gallery']=$this->db->get('tbl_gallery')->result();

    $this->middle = 'content/v_fitur.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout();
  }
}
