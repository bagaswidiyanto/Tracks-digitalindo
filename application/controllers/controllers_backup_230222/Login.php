<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index()
    {
        $this->load->view(base_url());
    }

    public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->auth->login_user($username, $password)) {
            redirect('members');
            // var_dump($this->auth->login_user($username, $password));
        } else {
            $this->session->set_flashdata('error', 'Username & Password salah');
            redirect('fitur');
        }
    }



    // public function logout()
    // {
    //     $this->session->unset_userdata('username');
    //     $this->session->unset_userdata('nama');
    //     redirect(base_url());
    // }
}
