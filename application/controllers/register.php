<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
{
			parent::__construct();
			 $this->load->model('Login_model');
}


	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('banner');
		$this->load->view('register');
		$this->load->view('footer');
		$this->load->view('js');
	}

// // ---------------------------------logout--------
// 	public function index1()
// 	{
// 		$this->load->view('header_view');
// 		$this->load->view('css');
// 		$this->load->view('bannerlogout');
// 		$this->load->view('register');
// 		$this->load->view('footer');
// 		$this->load->view('js');
// 	}

function adding()
{
	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	//exit;
	$config['upload_path'] = './assets/img/uploadimg/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size'] = '2000';
	$config['max_width'] = '3000';
	$config['max_heigth'] = '3000';

	$this->load->library('upload',$config);
	if (! $this->upload->do_upload('member_img'))
	{
			echo $this->upload->display_errors();
	}else {
		$data = $this->upload->data();
		$filename = $data['file_name'];

			$member_email        = $this->input->post('member_email');
			$member_pass         = $this->input->post('member_pass');
			$member_name         = $this->input->post('member_name');
			$member_cpass        = $this->input->post('member_cpass');
			$member_name_lastname             = $this->input->post('member_name_lastname');
			$member_phonenumber          = $this->input->post('member_phonenumber');
			$member_img          = $this->input->post('member_img');
			$member_type          = 0;


	if ($this->Login_model->addmember($member_email))
	{
		 $this->session->set_flashdata('msg','ขออภัย E-mail นี้มีผู้อื่นใช้แล้ว กรุณาลองใหม่อีกครั้ง');
				return redirect('register');
	}
	else
	{
			 if ($member_pass == $member_cpass)
			 {
				$data = array
				(
				 'member_email'=> $member_email,
				 'member_pass'=> $member_pass,
				 'member_name'=> $member_name,
				 'member_name_lastname'=>$member_name_lastname,
				 'member_phonenumber' => $member_phonenumber,
				 'member_type' => $member_type,
				 'member_img' => $filename
				);
			 }
			 else
			 {
				 $this->session->set_flashdata('msg','ยืนยันรหัสผ่านไม่ตรงกัน กรุณาลองใหม่อีกครั้ง');
				return redirect('register');
			 }

			 $success = $this->db->insert('member',$data);
			 return redirect('welcome/index1');
			 }
	}
	}
	}
