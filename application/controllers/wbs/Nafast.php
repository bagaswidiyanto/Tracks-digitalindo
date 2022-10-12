<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Nafast extends MY_Controller
{
    public function index()
    {
        $this->load->view('content/wbs/nafast/nafast_price.php');
    }

    // public function detail()
    // {
    //     // $this->middle = 'content/wbs/nafast/nafast_price.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    //     $this->load->view('content/wbs/nafast/nafast_price_detail.php');
    // }
}