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
												$this->load->model('admincourse_model');
												$this->load->model('Adminrecourse_model');
												$this->load->model('ShoppingCart_Model');
								}

//---------------------------หน้าหลัก--------------------------------//
	public function index()
	{
		$data['query']=$this->adminshop_model->jointableshop();
		$data['member']=$this->adminmember_model->get();
		$data['course']=$this->admincourse_model->get();
		$data['recourse']=$this->Adminrecourse_model->jointablerecourse();
		$data['cart']=$this->ShoppingCart_Model->get();
    $this->load->view('Employee/header_employ');
    $this->load->view('Employee/css_employ');
    $this->load->view('Employee/banner_employ');
    $this->load->view('Employee/employee_index',$data);
    $this->load->view('Employee/footer_employ');
    $this->load->view('Employee/js_employ');

	}

//---------------------------หน้าสมาชิก--------------------------------//
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

//---------------------------หน้าช็อป--------------------------------//
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

	public function manageshop_employ()
	{
		$data['query']=$this->ShoppingCart_Model->get();
		$this->load->view('Employee/header_employ');
		$this->load->view('Employee/css_employ');
		$this->load->view('Employee/banner_employ');
		$this->load->view('Employee/employee_manageshop',$data);
		$this->load->view('Employee/footer_employ');
		$this->load->view('Employee/js_employ');
	}

	public function shop_employ_success($ShoppingCart_id)
	{
		$data['rowshow']=$this->ShoppingCart_Model->read($ShoppingCart_id);
		$data['query']=$this->ShoppingCart_Model->get1($ShoppingCart_id);
		$this->load->view('Employee/header_employ');
		$this->load->view('Employee/css_employ');
		$this->load->view('Employee/banner_employ');
		$this->load->view('Employee/employee_employ_success',$data);
		$this->load->view('Employee/footer_employ');
		$this->load->view('Employee/js_employ');
	}

	public function edit_employ_success()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;
		$data = array(
			'ShoppingCart_Payment_status' => $this->input->post('Success1'),
			'ShoppingCart_Order_status' => $this->input->post('Success2'),
		);
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
		$this->db->where('ShoppingCart_id', $this->input->post('ShoppingCart_id'));
		$query=$this->db->update('shoppingcart',$data);

		if($query){
			redirect('Employee/manageshop_employ','refresh');
		}else {
			echo 'false';
			}
				}


		public function del_manage_employ($ShoppingCart_id)
		{
			$this->ShoppingCart_Model->deldata($ShoppingCart_id);
			redirect('Employee/manageshop_employ','refresh');
		}


		public function show_manage_employ($ShoppingCart_id)
		{
			$data['rowshow']=$this->ShoppingCart_Model->read($ShoppingCart_id);
			$this->load->view('Employee/header_employ');
			$this->load->view('Employee/css_employ');
			$this->load->view('Employee/banner_employ');
			$this->load->view('Employee/employee_employ_details',$data);
			$this->load->view('Employee/footer_employ');
			$this->load->view('Employee/js_employ');
		}

	//---------------------------หน้าโปโมชั่น--------------------------------//

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

//---------------------------หน้าบทความ--------------------------------//
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



		public function edit_blog_employ($blog_id)
		{
			$data['rowedit']=$this->adminblog_model->read($blog_id);
			$this->load->view('Employee/header_employ');
			$this->load->view('Employee/css_employ');
			$this->load->view('Employee/banner_employ');
			$this->load->view('Employee/edit_employee_blog',$data);
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

	//---------------------------หน้าคอร์ส--------------------------------//

					public function course_employ()
					{
						$data['query']=$this->admincourse_model->get();
						$this->load->view('Employee/header_employ');
						$this->load->view('Employee/css_employ');
						$this->load->view('Employee/banner_employ');
						$this->load->view('Employee/employee_course',$data);
						$this->load->view('Employee/footer_employ');
						$this->load->view('Employee/js_employ');
					}


					public function recourse_employ()
					{
						$data['query']=$this->Adminrecourse_model->jointablerecourse();
						$this->load->view('Employee/header_employ');
						$this->load->view('Employee/css_employ');
						$this->load->view('Employee/banner_employ');
						$this->load->view('Employee/employee_recourse',$data);
						$this->load->view('Employee/footer_employ');
						$this->load->view('Employee/js_employ');
					}

					public function edit_recourse_employ($recourse_id)
					{
						$data['rowedit']=$this->Adminrecourse_model->read($recourse_id);
						$this->load->view('Employee/header_employ');
						$this->load->view('Employee/css_employ');
						$this->load->view('Employee/banner_employ');
						$this->load->view('Employee/edit_employee_recourse',$data);
						$this->load->view('Employee/footer_employ');
						$this->load->view('Employee/js_employ');
					}

					public function edit_recourse_employ1()
					{
				    $data = array(
				      'recourse_name' => $this->input->post('recourse_name'),
				      'recourse_surname' => $this->input->post('recourse_surname'),
				      'recourse_address' => $this->input->post('recourse_address'),
				      'recourse_email' => $this->input->post('recourse_email'),
				      'recourse_phone' => $this->input->post('recourse_phone'),
				    );
				    // echo '<pre>';
				    // print_r($data);
				    // echo '</pre>';
				    // exit;
				    $this->db->where('recourse_id', $this->input->post('recourse_id'));
				    $query=$this->db->update('recourse',$data);

				    if($query){
				      redirect('adminrecourse','refresh');
				    }else {
				      echo 'false';
				      }
								}

						public function del_recourse_employ($recourse_id)
						{
							$this->Adminrecourse_model->deldata($recourse_id);
							redirect('Employee/employee_recourse','refresh');
						}





}

  ?>
