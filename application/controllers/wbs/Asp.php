<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Asp extends MY_Controller
{

  public function index()
  {
    // $this->middle = 'content/wbs/asp/online_price.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->load->view('content/wbs/asp/asp_price.php');
  }

  public function detail()
  {
    // $this->middle = 'content/wbs/asp/asp_price.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->load->view('content/wbs/asp/asp_price_detail.php');
  }
}
