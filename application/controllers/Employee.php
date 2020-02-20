<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminmember_model');
												$this->load->model('adminshop_model');
												$this->load->model('adminpromotion_model');
												$this->load->model('adminblog_model');
								}


	public function index()
	{
    $this->load->view('Employee/header_employ');
    $this->load->view('Employee/css_employ');
    $this->load->view('Employee/banner_employ');
    $this->load->view('Employee/employee_index');
    $this->load->view('Employee/footer_employ');
    $this->load->view('Employee/js_employ');

	}

	public function member_employ()
	{
		$data['query']=$this->adminmember_model->get();
    $this->load->view('Employee/header_employ');
    $this->load->view('Employee/css_employ');
    $this->load->view('Employee/banner_employ');
    $this->load->view('Employee/employee_member',$data);
    $this->load->view('Employee/footer_employ');
    $this->load->view('Employee/js_employ');
	}

	public function shop_employ()
	{
		$data['query']=$this->adminshop_model->jointableshop();
    $this->load->view('Employee/header_employ');
    $this->load->view('Employee/css_employ');
    $this->load->view('Employee/banner_employ');
    $this->load->view('Employee/employee_shop',$data);
    $this->load->view('Employee/footer_employ');
    $this->load->view('Employee/js_employ');
	}

	public function promotion_employ()
	{
		$data['query']=$this->adminpromotion_model->get();
    $this->load->view('Employee/header_employ');
    $this->load->view('Employee/css_employ');
    $this->load->view('Employee/banner_employ');
    $this->load->view('Employee/employee_promotion',$data);
    $this->load->view('Employee/footer_employ');
    $this->load->view('Employee/js_employ');
	}

	public function blog_employ()
	{
		$data['query']=$this->adminblog_model->jointableblog();
    $this->load->view('Employee/header_employ');
    $this->load->view('Employee/css_employ');
    $this->load->view('Employee/banner_employ');
    $this->load->view('Employee/employee_blog',$data);
    $this->load->view('Employee/footer_employ');
    $this->load->view('Employee/js_employ');
	}

	public function add_blog_employ()
	{
		$data['query']=$this->adminblog_model->jointableblog();
		$this->load->view('Employee/header_employ');
		$this->load->view('Employee/css_employ');
		$this->load->view('Employee/banner_employ');
		$this->load->view('Employee/add_employee_blog',$data);
		$this->load->view('Employee/footer_employ');
		$this->load->view('Employee/js_employ');
	}

	public function addingemploy()
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
			'blog_type_id' => $this->input->post('blog_type_id'),
			'blog_img' => $filename,
			'blog_details' => $this->input->post('blog_details'),
			'member_ID' => $this->input->post('member_ID'),
		);

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;

		$query=$this->db->insert('blog',$data);
		if($query){
			redirect('Employee/blog_employ','refresh');
		}else {
			echo 'false';
		}
	}
}


			public function del_blog_employ($blog_id)
			{
				$this->adminblog_model->deldata($blog_id);
				redirect('Employee/blog_employ','refresh');
			}



		public function edit_blog_employ()
		{

			$this->load->view('Employee/header_employ');
			$this->load->view('Employee/css_employ');
			$this->load->view('Employee/banner_employ');
			$this->load->view('Employee/edit_employee_blog');
			$this->load->view('Employee/footer_employ');
			$this->load->view('Employee/js_employ');
		}

		public function edit_blog_employ1()
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
						// 'blog_date' => $this->input->post('blog_date'),
						'blog_type_id' => $this->input->post('blog_type_id'),
						// 'member_ID' => $this->input->post('member_ID'),
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
						redirect('Employee/blog_employ','refresh');
					}else {
						echo 'false';
					}
		}
	}




}

  ?>
