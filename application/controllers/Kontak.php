<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
		$data = array( 'title' 	=> 'Kontak Universitas Serang Raya',
						'isi'	=> 'kontak/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);	
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */