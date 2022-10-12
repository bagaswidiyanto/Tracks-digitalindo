<?php
class Auth extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function register($nama_depan, $nama_belakang, $nama_perusahaan, $telp, $email, $username, $password, $alamat1, $alamat2, $kota, $provinsi, $kode_pos, $negara, $service, $aktif)
    {
        $data_user = array(
            'first_name'        => $nama_depan,
            'last_name'         => $nama_belakang,
            'nama_perusahaan'   => $nama_perusahaan,
            'telp'              => $telp,
            'email'             => $email,
            'username'          => $username,
            'password'          => md5($password),
            'alamat1'           => $alamat1,
            'alamat2'           => $alamat2,
            'kota'              => $kota,
            'provinsi'          => $provinsi,
            'kode_pos'          => $kode_pos,
            'negara'            => $negara,
            'service'           => $service,
            'aktif'             => $aktif


        );
        $this->db->insert('tbl_membertracks', $data_user);
    }

    function login_user($username, $password)
    {
        $query = $this->db->get_where('tbl_membertracks', ['username' => $username, 'password' => md5($password)]);
        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('last_name', $data_user->last_name);
            return TRUE;
        } else {
            return FALSE;
        }
    }


    // function cek_login()
    // {
    //     if (!$this->session->userdata('is_login')) {
    //         redirect('login');
    //     }
    // }
}

// https://www.warungbelajar.com/membuat-fitur-register-login-dan-logout-di-codeigniter.html
