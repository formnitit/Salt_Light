<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminindex extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminshop_model');
												$this->load->model('adminmember_model');
												$this->load->model('admincourse_model');
												 $this->load->model('Adminrecourse_model');
												 $this->load->model('ShoppingCart_Model');
								}

	public function index()
	{
	$data['query']=$this->adminshop_model->jointableshop();
	$data['member']=$this->adminmember_model->get();
	$data['course']=$this->admincourse_model->get();
	$data['recourse']=$this->Adminrecourse_model->jointablerecourse();
	$data['cart']=$this->ShoppingCart_Model->get();

		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminindex',$data);
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}


}
?>
