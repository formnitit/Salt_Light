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
   if ($this->session->userdata('member_email') != '')
	 {

		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('bannerlogout');
		$this->load->view('Order');
		$this->load->view('footer');
		$this->load->view('js');
	 }
		else
		{
			redirect('Welcome/index1');
		}

	}

	// ---------------------------------logout--------




}
?>
