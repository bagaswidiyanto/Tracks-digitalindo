<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Member extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }


    public function index()
    {

        $this->load->view('content/v_member.php');    // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    }

    public function proses()
    {
        $this->form_validation->set_rules('first_name', 'first_name', 'trim|required|min_length[1]|max_length[10]');
        $this->form_validation->set_rules('last_name', 'last_name', 'trim|required|min_length[1]|max_length[30]');
        $this->form_validation->set_rules('nama_perusahaan', 'nama_perusahaan', 'trim|required|min_length[1]|max_length[200]');
        $this->form_validation->set_rules('telp', 'telp', 'trim|required|min_length[1]|max_length[15]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[100]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[6]|max_length[12]|is_unique[tbl_membertracks.username]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]|max_length[12]');
        $this->form_validation->set_rules('alamat1', 'alamat1', 'trim|required|min_length[1]|max_length[60]');
        $this->form_validation->set_rules('alamat2', 'alamat2', 'trim|required|min_length[1]|max_length[60]');
        $this->form_validation->set_rules('kota', 'kota', 'trim|required|min_length[1]|max_length[50]');
        $this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required|min_length[1]|max_length[50]');
        $this->form_validation->set_rules('kode_pos', 'kode_pos', 'trim|required|min_length[1]|max_length[9]');
        $this->form_validation->set_rules('negara', 'negara', 'trim|required');
        $this->form_validation->set_rules('service', 'service', 'trim|required');
        if ($this->form_validation->run() == true) {
            $nama_depan = $this->input->post('first_name');
            $nama_belakang = $this->input->post('last_name');
            $nama_perusahaan = $this->input->post('nama_perusahaan');
            $telp = $this->input->post('telp');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $alamat1 = $this->input->post('alamat1');
            $alamat2 = $this->input->post('alamat2');
            $kota = $this->input->post('kota');
            $provinsi = $this->input->post('provinsi');
            $kode_pos = $this->input->post('kode_pos');
            $negara = $this->input->post('negara');
            $service = $this->input->post('service');
            $aktif = 'N';

            $this->auth->register($nama_depan, $nama_belakang, $nama_perusahaan, $telp, $email, $username, $password, $alamat1, $alamat2, $kota, $provinsi, $kode_pos, $negara, $service, $aktif);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran Member Berhasil');
            redirect(base_url());
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url() . 'member');
        }
    }

    // public function addMember()
    // {

    //     $nama_depan = $this->input->post('first_name');
    //     $nama_belakang = $this->input->post('last_name');
    //     $nama_perusahaan = $this->input->post('nama_perusahaan');
    //     $telp = $this->input->post('telp');
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');
    //     $alamat1 = $this->input->post('alamat1');
    //     $alamat2 = $this->input->post('alamat2');
    //     $kota = $this->input->post('kota');
    //     $provinsi = $this->input->post('provinsi');
    //     $kode_pos = $this->input->post('kode_pos');
    //     $negara = $this->input->post('negara');
    //     $aktif = 'N';


    //     var_dump('Warning ' . $password);

    //     $data = array(
    //         'first_name'        =>  $nama_depan,
    //         'last_name'         => $nama_belakang,
    //         'nama_perusahaan'   => $nama_perusahaan,
    //         'telp'              => $telp,
    //         'email'             => $email,
    //         'password'          => $password,
    //         'alamat1'           => $alamat1,
    //         'alamat2'           => $alamat2,
    //         'kota'              => $kota,
    //         'provinsi'          => $provinsi,
    //         'kode_pos'          => $kode_pos,
    //         'negara'            => $negara,
    //         'aktif'             => $aktif
    //     );

    //     $this->db->insert('tbl_membertracks', $data);
    //     redirect(base_url());
    // }
}
