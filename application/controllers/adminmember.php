<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmember extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminmember_model');
								}

								//----------------------เพิ่ม-----------------------//
		public function index()
		{

		$data['query']=$this->adminmember_model->get();

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		//
		// exit;

		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminmember',$data);
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('admin/header_admin');
			$this->load->view('admin/css_admin');
			$this->load->view('admin/banner_admin');
			$this->load->view('loginadmin/adminmember1');
			$this->load->view('admin/footer_admin');
			$this->load->view('admin/js_admin');
		}

	//----------------------เพิ่ม-----------------------//

	public function edit($member_ID)
	{

	$data['rowedit']=$this->adminmember_model->read($member_ID);

	// echo '<pre>';
	//print_r($data);
	// echo '</pre>';
	//
	//exit();

	$this->load->view('admin/header_admin');
	$this->load->view('admin/css_admin');
	$this->load->view('admin/banner_admin');
	$this->load->view('admin/adminmemberedit',$data);
	$this->load->view('admin/footer_admin');
	$this->load->view('admin/js_admin');

	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
}
	//----------------------จบเพิ่ม-----------------------//


	//----------------------ลบ-----------------------//
	public function delete($member_ID)
	{
		$this->adminmember_model->deldata($member_ID);
		redirect('adminmember','refresh');
	}
	//----------------------จบลบ-----------------------//



	//----------------------แก้ไข-----------------------//
	public function read($member_ID)
	{
		$this->adminmember_model->editmember();
	}
//----------------------จบแก้ไข-----------------------//
}
?>
