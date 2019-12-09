<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	// load database nya

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	// Listing data user
	public function index()
	{
		$user = $this->user_model->listing();

		$data = array(	'title' => 'Data User Administrator ('.count($user).')',
						'user'	=> $user,
						'isi'	=> 'admin/user/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

	}

	// tambah data user
	public function tambah()
	{
		
		$data = array(	'title' => 'Tambah User Administrator',
						'isi'	=> 'admin/user/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);	
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */