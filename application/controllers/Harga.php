<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Harga extends MY_Controller
{

  public function index()
  {

    $this->db->order_by("name", "asc");
    $this->data['harga'] = $this->db->get('tbl_hargatrack')->result();
    $this->data['testimoni'] = $this->db->get('tbl_testimonialtrack')->result();
    $this->data['bannerImage'] = $this->db->get_where('tbl_bannertrack', array('tipe' => 3))->result();
    $this->data['tHarga'] = $this->db->get_where('tbl_textheaderhometrack', array('master_content' => 'Text Harga'))->result();

    $this->middle = 'content/v_harga'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout();
  }
}
