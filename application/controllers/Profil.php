<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$data = array( 'title' 	=> 'Profil Universitas Serang Raya',
						'isi'	=> 'profil/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);	
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */