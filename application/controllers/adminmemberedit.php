<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmemberedit extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminmemberedit');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	public function adding()
	{
		$data = array(
			'member_name' => $this->input->post('member_name'),
			'member_name_lastname' => $this->input->post('member_name_lastname'),
			'member_pass' => $this->input->post('member_pass'),
			'member_email' => $this->input->post('member_email'),
			'member_phonenumber' => $this->input->post('member_phonenumber'),
			'member_type' => $this->input->post('member_type')
		);

	 	// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;

		$query=$this->db->insert('member',$data);
		if($query){
			echo 'ok';
		}else {
			echo 'false';
		}
	}
}
