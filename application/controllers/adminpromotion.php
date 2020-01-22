<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpromotion extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminpromotion_model');
								}

								//----------------------เพิ่ม-----------------------//
		public function index()
		{

		$data['query']=$this->adminpromotion_model->get();

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		//
		// exit;

		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminpromotion',$data);
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
	}
	//----------------------เพิ่ม-----------------------//

	public function edit($promotion_id)
	{

	$data['rowedit']=$this->adminpromotion_model->read($promotion_id);

	// echo '<pre>';
	//print_r($data);
	// echo '</pre>';
	//
	//exit();

	$this->load->view('admin/header_admin');
	$this->load->view('admin/css_admin');
	$this->load->view('admin/banner_admin');
	$this->load->view('admin/adminpromotionedit',$data);
	$this->load->view('admin/footer_admin');
	$this->load->view('admin/js_admin');

	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
}

	//----------------------ลบ-----------------------//
	public function delete($promotion_id)
	{
		$this->adminpromotion_model->deldata($promotion_id);
		redirect('adminpromotion','refresh');
	}

	//----------------------แก้ไข-----------------------//
	public function read($promotion_id)
	{
		$this->adminpromotion_model->editcourse();
	}

}
?>
