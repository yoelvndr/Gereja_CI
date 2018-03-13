<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cont extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('model');
		
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function admin()
	{
		$data['list_kesaksian'] =  $this->model->list_kesaksian();
		$data['list_kesehatan'] =  $this->model->list_kesehatan();
		$this->load->view('admin',$data);
	}
	
}
