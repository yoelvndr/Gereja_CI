<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function list_kesaksian(){
		$query = $this->db->get('kesaksian');
		return $query->result();
	}
	
	function list_kesehatan(){
		$query = $this->db->get('kesehatan');
		return $query->result();
	}

}
