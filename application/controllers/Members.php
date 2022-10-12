<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Members extends MY_Controller
{



    public function index()
    {

        $this->load->view('content/v_member_profile');    // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    }
}
