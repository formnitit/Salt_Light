<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincourse extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('admincourse_model');
								}

								//----------------------เพิ่ม-----------------------//
		public function index()
		{

		$data['query']=$this->admincourse_model->get();

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		//
		// exit;

		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/admincourse',$data);
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
	}
	//----------------------จบเพิ่ม-----------------------//

	public function edit($course_id)
	{

	$data['rowedit']=$this->admincourse_model->read($course_id);

	// echo '<pre>';
	//print_r($data);
	// echo '</pre>';
	//
	//exit();

	$this->load->view('admin/header_admin');
	$this->load->view('admin/css_admin');
	$this->load->view('admin/banner_admin');
	$this->load->view('admin/admincourseedit',$data);
	$this->load->view('admin/footer_admin');
	$this->load->view('admin/js_admin');

	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
}

	//----------------------ลบ-----------------------//
	public function delete($course_id)
	{
		$this->admincourse_model->deldata($course_id);
		redirect('admincourse','refresh');
	}

	//----------------------แก้ไข-----------------------//
	public function read($course_id)
	{
		$this->admincourse_model->editcourse();
	}

}
?>
