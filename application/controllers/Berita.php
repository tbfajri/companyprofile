<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	// Main page berita
	public function index()
	{
		$data = array( 'title'	=> 'Berita - Universitas Serang Raya',
						'isi'	=> 'berita/list');
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Detail page berita
	public function read()
	{
		$data = array(	'title' => 'Detail Berita Universitas Serang Raya',
						'isi'	=> 'berita/read'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */