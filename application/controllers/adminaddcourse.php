<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminaddcourse extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminaddcourse');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
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
			redirect('admincourse','refresh');
		}else {
			echo 'false';
		}
	}
}
