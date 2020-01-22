<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincourseedit extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('admincourse_model');
								}


	public function edit1()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/admincourseedit');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	public function edit()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;
		$this->admincourse_model->editcourse();
	}

	public function adding()
	{
		$data = array(
			'course_name' => $this->input->post('course_name'),
			'course_price' => $this->input->post('course_price'),
			'course_detail' => $this->input->post('course_detail'),
			'course_skill' => $this->input->post('course_skill'),
		);

	 	// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;

		$query=$this->db->insert('course',$data);
		if($query){
			echo 'ok';
		}else {
			echo 'false';
		}
	}
}
