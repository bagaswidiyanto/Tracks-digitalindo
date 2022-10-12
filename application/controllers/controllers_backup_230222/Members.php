<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Members extends MY_Controller
{



    public function index()
    {
        $data = array(
            'title' => 'SMAN 1 Padang',
            'title2' => 'Dashboard',
            'isi' => 'admin/v_home'
        );
        $this->load->view('member/layout/v_wrapper', $data, FALSE);   // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    }
}
