<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_single extends CI_Controller {

	public function __construct()
	{
 		parent::__construct();
		$this->load->model('adminshop_model');
	}

	public function index()
	{
		$data['query'] = $this->adminshop_model->jointableshop();
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('banner');
		$this->load->view('shop_single',$data);
		$this->load->view('footer');
		$this->load->view('js');
	}


	// ---------------------------------logout--------
		public function index1()
		{
			$data['query'] = $this->adminshop_model->get();
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('bannerlogout');
			$this->load->view('shop_single',$data);
			$this->load->view('footer');
			$this->load->view('js');
		}


}
?>
