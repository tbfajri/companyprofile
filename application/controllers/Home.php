<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// Main page - Homepage
	public function index()
	{
		$data = array( 'title' 	=> 'Universitas Serang Raya',
						'isi'	=> 'home/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);	
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */