<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmember extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminmember_model');
								}
		public function index()
		{

		$data['query']=$this->adminmember_model->get();

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		//
		// exit;

		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminmember',$data);
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
	}
}
?>
