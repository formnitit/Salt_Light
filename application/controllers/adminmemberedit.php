<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmemberedit extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminmember_model');
								}


	public function edit1()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminmemberedit');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('admin/header_admin');
			$this->load->view('admin/css_admin');
			$this->load->view('admin/banner_admin');
			$this->load->view('loginadmin/adminmemberedit1');
			$this->load->view('admin/footer_admin');
			$this->load->view('admin/js_admin');
		}

	public function edit()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;
		$this->adminmember_model->editmember();
	}

	public function adding()
	{
			$data = array(
			'member_name' => $this->input->post('member_name'),
			'member_name_lastname' => $this->input->post('member_name_lastname'),
			'member_pass' => $this->input->post('member_pass'),
			'member_img' => $filename,
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
			redirect('adminmember','refresh');
		}else {
			echo 'false';
			}
	}

	public function editphoto()
	{
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
				$data = array(
					'member_name' => $this->input->post('member_name'),
					'member_name_lastname' => $this->input->post('member_name_lastname'),
					'member_pass' => $this->input->post('member_pass'),
					'member_img' => $filename,
					'member_email' => $this->input->post('member_email'),
					'member_phonenumber' => $this->input->post('member_phonenumber'),
					'member_type' => $this->input->post('member_type')
				);
				// echo '<pre>';
				// print_r($data);
				// echo '</pre>';
				// exit;
				$this->db->where('member_ID', $this->input->post('member_ID'));
				$query=$this->db->update('member',$data);

				if($query){
					redirect('adminmember','refresh');
				}else {
					echo 'false';
					}
				}
			}

}
