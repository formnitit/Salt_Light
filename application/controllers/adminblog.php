<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminblog extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminblog_model');
								}

								//----------------------เพิ่ม-----------------------//
		public function index()
		{

		$data['query']=$this->adminblog_model->jointableblog();
    // $data['query']=$this->adminblog_model->jointableblog();
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		//
		// exit;

		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminblog',$data);
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
	}
	//----------------------เพิ่ม-----------------------//

	public function edit($blog_id)
	{

	$data['rowedit']=$this->adminblog_model->read($blog_id);
  $data['query']=$this->adminblog_model->jointableblog();

	// echo '<pre>';
	//print_r($data);
	// echo '</pre>';
	//
	//exit();

	$this->load->view('admin/header_admin');
	$this->load->view('admin/css_admin');
	$this->load->view('admin/banner_admin');
	$this->load->view('admin/adminblogedit',$data);
	$this->load->view('admin/footer_admin');
	$this->load->view('admin/js_admin');

	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
}

	//----------------------ลบ-----------------------//
	public function delete($blog_id)
	{
		$this->adminblog_model->deldata($blog_id);
		redirect('adminblog','refresh');
	}

	//----------------------แก้ไข-----------------------//
	public function read($blog_id)
	{
		$this->adminblog_model->editblog();
	}

}
?>
