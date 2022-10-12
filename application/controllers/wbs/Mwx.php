<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mwx extends MY_Controller
{
    public function index()
    {
        // $this->middle = 'content/wbs/asp/online_price.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
        $this->load->view('content/wbs/mwx/mwx_price.php');
    }

    public function detail()
    {
        // $this->middle = 'content/wbs/mwx/mwx_price.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
        $this->load->view('content/wbs/mwx/mwx_price_detail.php');
    }
}