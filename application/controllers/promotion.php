<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminpromotion_model');
	}

	public function index()
	{
		$data['query'] = $this->adminpromotion_model->get();
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('banner');
		$this->load->view('promotion',$data);
		$this->load->view('footer');
		$this->load->view('js');
	}
}
?>
