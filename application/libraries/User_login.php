<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_login
{
    protected $ci;


    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('auth');
    }

    public function login($username, $password)
    {
        $cek = $this->ci->auth->login($username, $password);
        if ($cek) {
            $first_name  = $cek->first_name;
            $last_name  = $cek->last_name;
            $username   = $cek->username;

            // Buat session
            $this->ci->session->set_userdata('first_name', $first_name);
            $this->ci->session->set_userdata('last_name', $last_name);
            $this->ci->session->set_userdata('username', $username);

            redirect('members'); // arahkan lokasi ke admin
        } else {
            $this->ci->session->set_flashdata('pesan', 'Username Atau Password Salah !!!');
            redirect('login');
        }
    }

    public function cek_login()
    {
        if ($this->ci->session->userdata('username') == "") {
            $this->ci->session->set_flashdata('pesan', 'Anda Belum Login !!!');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('first_name');
        $this->ci->session->unset_userdata('last_name');
        $this->ci->session->unset_userdata('username');
        $this->ci->session->set_flashdata('pesan', 'Logout Sukses !!!');
        redirect('login');
    }
}
