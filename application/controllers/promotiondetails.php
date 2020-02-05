<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotiondetails extends CI_Controller {

	public function __construct()
								{
												parent::__construct();
												$this->load->model('adminpromotion_model');
								}

								public function show($promotion_id)
								{

								$data['rowshow']=$this->adminpromotion_model->read($promotion_id);
								// echo '<pre>';
								// print_r($data);
								// echo '</pre>';
								// exit;
								$this->load->view('header_view');
								$this->load->view('css');
								$this->load->view('banner');
								$this->load->view('promotiondetails',$data);
								$this->load->view('footer');
								$this->load->view('js');

							}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('bannerlogout');
			$this->load->view('promotiondetails');
			$this->load->view('footer');
			$this->load->view('js');
		}

}
?>
