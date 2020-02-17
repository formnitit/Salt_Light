<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminShoppingCart extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('ShoppingCart_Model');
								}

								//----------------------เพิ่ม-----------------------//
		public function index()
		{

		$data['query']=$this->ShoppingCart_Model->get();

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		//
		// exit;

		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminShoppingCart',$data);
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
			$this->load->view('loginadmin/adminshop1');
			$this->load->view('admin/footer_admin');
			$this->load->view('admin/js_admin');
		}


	//----------------------ลบ-----------------------//
	public function delete($ShoppingCart_id)
	{
		$this->ShoppingCart_Model->deldata($ShoppingCart_id);
		redirect('AdminShoppingCart','refresh');
	}


}
?>
