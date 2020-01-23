<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminshop extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminmember_model');
								}

								//----------------------เพิ่ม-----------------------//
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
		$this->load->view('admin/adminshop',$data);
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
	}
	//----------------------เพิ่ม-----------------------//

	public function edit($member_ID)
	{

	$data['rowedit']=$this->adminmember_model->read($member_ID);

	// echo '<pre>';
	//print_r($data);
	// echo '</pre>';
	//
	//exit();

	$this->load->view('admin/header_admin');
	$this->load->view('admin/css_admin');
	$this->load->view('admin/banner_admin');
	$this->load->view('admin/adminmemberedit',$data);
	$this->load->view('admin/footer_admin');
	$this->load->view('admin/js_admin');

	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
}

	//----------------------ลบ-----------------------//
	public function delete($member_ID)
	{
		$this->adminmember_model->deldata($member_ID);
		redirect('adminmember','refresh');
	}

	//----------------------แก้ไข-----------------------//
	public function read($member_ID)
	{
		$this->adminmember_model->editmember();
	}

}
?>
