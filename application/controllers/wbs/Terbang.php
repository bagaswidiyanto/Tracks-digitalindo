<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Terbang extends MY_Controller
{

  public function index()
  {
    $this->load->view('content/wbs/terbang/terbang_price.php');
  }

  public function detail()
  {
    $this->load->view('content/wbs/terbang/terbang_price_detail.php');
  }
}
