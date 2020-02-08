<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminrecourse extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('Adminrecourse_model');
								}
								//----------------------เพิ่ม-----------------------//
								public function index()
								{

								$data['query']=$this->Adminrecourse_model->jointablerecourse();

								// echo '<pre>';
								// print_r($data);
								// echo '</pre>';
								//
								// exit;

								$this->load->view('admin/header_admin');
								$this->load->view('admin/css_admin');
								$this->load->view('admin/banner_admin');
								$this->load->view('admin/adminrecourse',$data);
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
			$this->load->view('loginadmin/adminrecourse1');
			$this->load->view('admin/footer_admin');
			$this->load->view('admin/js_admin');
		}
		//----------------------เพิ่ม-----------------------//

		public function edit($recourse_id)
		{

		$data['rowedit']=$this->Adminrecourse_model->read($recourse_id);

		// echo '<pre>';
		//print_r($data);
		// echo '</pre>';
		//
		//exit();

		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminrecourseedit',$data);
		$this->load->view('admin/footer_admin');
		$this->load->view('admin/js_admin');

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
	}
		//----------------------จบเพิ่ม-----------------------//


	//----------------------ลบ-----------------------//
	public function delete($recourse_id)
	{
		$this->Adminrecourse_model->deldata($recourse_id);
		redirect('adminrecourse','refresh');
	}
	//----------------------จบลบ-----------------------//



	//----------------------แก้ไข-----------------------//
	public function read($recourse_id)
	{
		$this->adminrecourse_model->editrecourse();
	}
//----------------------จบแก้ไข-----------------------//
}
?>
