<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminblogedit extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminblog_model');
								}


	public function edit1()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminblogedit');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('admin/header_admin');
			$this->load->view('admin/css_admin');
			$this->load->view('admin/banner_admin');
			$this->load->view('loginadmin/adminblogedit1');
			$this->load->view('admin/footer_admin');
			$this->load->view('admin/js_admin');
		}

	public function edit()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;
		$config['upload_path'] = './assets/img/uploadimg/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
		$config['max_width'] = '3000';
		$config['max_heigth'] = '3000';

		$this->load->library('upload',$config);
		if (! $this->upload->do_upload('blog_img'))
		{
			echo $this->upload->display_errors();
		}else {
			$data = $this->upload->data();
			$filename = $data['file_name'];
				$data = array(
					'blog_name' => $this->input->post('blog_name'),
					'blog_date' => $this->input->post('blog_date'),
					'blog_type_name' => $this->input->post('blog_type_name'),
					'member_name' => $this->input->post('member_name'),
					'blog_img' => $filename,
					'blog_details' => $this->input->post('blog_details')
				);
				// echo '<pre>';
				// print_r($data);
				// echo '</pre>';
				// exit;
				$this->db->where('blog_id', $this->input->post('blog_id'));
				$query=$this->db->update('blog',$data);

				if($query){
					redirect('adminblog','refresh');
				}else {
					echo 'false';
				}
	}
}


	public function adding()
	{

		$data = array(
			'blog_name' => $this->input->post('blog_name'),
			'blog_date' => $this->input->post('blog_date'),
			'blog_type_name' => $this->input->post('blog_type_name'),
			'member_name' => $this->input->post('member_name'),
			'blog_img' => $this->input->post('blog_img'),
			'blog_details' => $this->input->post('blog_details'),
		);

	 	// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;

		$query=$this->db->insert('blog',$data);
    if($query){
			redirect('adminblog','refresh');
		}else {
			echo 'false';
		}
	}
}
