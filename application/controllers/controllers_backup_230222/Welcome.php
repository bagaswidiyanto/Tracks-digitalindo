<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}
	public function index()
	{
		// $this->data['slider'] = $this->db->get('tbl_slider')->result();
		// $this->data['maps'] = $this->db->get('tbl_maps')->row();
		// $this->db->limit('3');
		// $this->db->order_by('id', 'desc');
		// $this->data['posts'] = $this->db->get('tbl_posts')->result();
		// $this->data['brands'] = $this->db->get('tbl_brands')->result();
		// $this->data['branch'] = $this->db->get('log_dbranch')->result();
		// $this->data['gallery'] = $this->db->get('tbl_gallery')->result();
		$this->data['client'] = $this->db->get('tbl_clienttrack')->result();

		$this->db->limit(10);
		$this->db->order_by('created_date', 'desc');
		$this->data['berita'] = $this->db->get('tbl_posts')->result();

		$this->data['testimoni'] = $this->db->get('tbl_testimonialtrack')->result();
		$this->data['fiturM'] = $this->db->get('tbl_fiturtrack')->result();
		$this->data['bannerImage'] = $this->db->get_where('tbl_bannertrack', array('tipe' => 1))->result();

		$this->data['pop_up'] = $this->db->get_where('tbl_bannertrack', array('namaBanner' => 'PopUP'))->result();

		$this->data['banner'] = $this->db->get_where('tbl_textheaderhometrack', array('master_content' => 'Text Beranda'))->result();
		$this->data['tentang'] = $this->db->get_where('tbl_textheaderhometrack', array('master_content' => 'Text Tentang Kami'))->result();
		$this->data['fitur'] = $this->db->get_where('tbl_textheaderhometrack', array('master_content' => 'Text Fitur'))->result();
		$this->data['artikel'] = $this->db->get_where('tbl_textheaderhometrack', array('master_content' => 'Text Berita'))->result();
		$this->middle = 'content/home'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
		$this->layout();
	}

	public function add_user()
	{
		$nama = $this->input->post('nama');
		$telp = $this->input->post('telp');
		$namaLogistics = $this->input->post('namaLogistics');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$domisili = $this->input->post('domisili');
		$paket = $this->input->post('paket');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'nama' => $nama,
			'noTelp' => $telp,
			'namaLogistics' => $namaLogistics,
			'alamat' => $alamat,
			'email' => $email,
			'domisili' => $domisili,
			'paket' => $paket,
			'keterangan' => $keterangan
		);
		$this->M_data->input_data($data, 'log_usertrack');
		// echo "<script>alert('Success');</script>";
		redirect('../thank_you', 'refresh');
	}
}
