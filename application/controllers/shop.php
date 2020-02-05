<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

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
		$this->load->view('shop',$data);
		$this->load->view('footer');
		$this->load->view('js');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$data['query'] = $this->adminshop_model->jointableshop();
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('bannerlogout');
			$this->load->view('login/shop1',$data);
			$this->load->view('login/footer1');
			$this->load->view('js');
		}

}
?>
