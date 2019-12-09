<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oops extends CI_Controller {

	public function index()
	{
		$data = array( 'title' 	=> 'Oops Halaman tidak ditemukan',
						'isi'	=> 'oops/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);	
	}

}

/* End of file Oops.php */
/* Location: ./application/controllers/Oops.php */