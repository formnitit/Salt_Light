<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courseconfirm extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('admincourse_model');
								}

	public function show($course_id)
	{

	$data['rowshow']=$this->admincourse_model->read($course_id);
	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
	$this->load->view('header_view');
	$this->load->view('css');
	$this->load->view('bannerlogout');
	$this->load->view('courseconfirm',$data);
	$this->load->view('footer');
	$this->load->view('js');

}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('banner');
			$this->load->view('login/courseconfirm1');
			$this->load->view('login/footer1');
			$this->load->view('js');
		}

}
?>
