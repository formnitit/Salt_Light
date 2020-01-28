<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminshop extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminshop_model');
								}

								//----------------------เพิ่ม-----------------------//
		public function index()
		{

		$data['query']=$this->adminshop_model->get();

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

	public function edit($product_id)
	{

	$data['rowedit']=$this->adminshop_model->read($product_id);

	// echo '<pre>';
	//print_r($data);
	// echo '</pre>';
	//
	//exit();

	$this->load->view('admin/header_admin');
	$this->load->view('admin/css_admin');
	$this->load->view('admin/banner_admin');
	$this->load->view('admin/adminshopedit',$data);
	$this->load->view('admin/footer_admin');
	$this->load->view('admin/js_admin');

	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
}

	//----------------------ลบ-----------------------//
	public function delete($product_id)
	{
		$this->adminshop_model->deldata($product_id);
		redirect('adminshop','refresh');
	}

	//----------------------แก้ไข-----------------------//
	public function read($product_id)
	{
		$this->adminshop_model->editproduct();
	}

}
?>
