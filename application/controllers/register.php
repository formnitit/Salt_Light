<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('banner');
		$this->load->view('register');
		$this->load->view('footer');
		$this->load->view('js');
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
			redirect('welcome','refresh');
		}else {
			echo 'false';
			}
	}
}
