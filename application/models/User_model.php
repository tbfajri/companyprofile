<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	// load database
	public function __construct()
	{
			parent::__construct();
			$this->load->database();
	}

	// Listing user
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id_user');
		$query = $this->db->get();
		return $query->result();
	}




}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */