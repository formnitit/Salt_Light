<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editprofile extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminmember_model');
								}


	public function edit1($member_ID)
	{
    $data['rowedit']=$this->adminmember_model->read($member_ID);
    $this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('bannerlogout');
		$this->load->view('editprofile',$data);
		$this->load->view('footer');
		$this->load->view('js');
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
		$this->db-where('member_ID',$this->input->post('member_ID'));
		$query=$this->db->update('member',$data);
		if($query){
			redirect('welcome/index','refresh');
		}else {
			echo 'false';
			}
	}

	public function editphoto()
	{
		// print_r($_POST);
		// exit;
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
					redirect('welcome/index','refresh');
				}else {
					echo 'false';
					}
				}
			}

}
