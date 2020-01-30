<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminaddblog extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminaddblog');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	public function adding()
	{

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
			'blog_type_name' => $this->input->post('blog_type_name'),
			'blog_date' => $this->input->post('blog_date'),
			'member_name' => $this->input->post('member_name'),
			'blog_img' => $filename,
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
}
