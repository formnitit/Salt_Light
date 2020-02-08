<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopsingle extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminshop_model');
								}

	public function show($product_id)
	{

	$data['rowshow']=$this->adminshop_model->read($product_id);

	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
	$this->load->view('header_view');
	$this->load->view('css');
	$this->load->view('banner');
	$this->load->view('shopsingle',$data);
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
			$this->load->view('shopsingle',$data);
			$this->load->view('footer');
			$this->load->view('js');
		}



}
?>
