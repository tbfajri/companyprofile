<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	// Main page layanan
	public function index()
	{
		$data = array( 'title'	=> 'Layanan - Universitas Serang Raya',
						'isi'	=> 'layanan/list');
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Detail page layanan
	public function read()
	{
		$data = array(	'title' => 'Detail Layanan Universitas Serang Raya',
						'isi'	=> 'layanan/read'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Layanan.php */
/* Location: ./application/controllers/Layanan.php */