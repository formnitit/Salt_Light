<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
								{
												parent::__construct();
												$this->load->model('ShoppingCart_Model');
								}



	public function index()
	{
		$data['query']=$this->ShoppingCart_Model->get();
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('banner');
		$this->load->view('Order',$data);
		$this->load->view('footer');
		$this->load->view('js');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('bannerlogout');
			$this->load->view('login/CheckOut1');
			$this->load->view('login/footer1');
			$this->load->view('js');
		}


}
?>
