<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogdetails extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminblog_model');
								}

	public function show($blog_id)
	{

	$data['rowshow']=$this->adminblog_model->read($blog_id);
	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
	$this->load->view('header_view');
	$this->load->view('css');
	$this->load->view('banner');
	$this->load->view('blogdetails',$data);
	$this->load->view('footer');
	$this->load->view('js');

}
	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('bannerlogout');
			$this->load->view('login/blogdetails1');
			$this->load->view('login/footer1');
			$this->load->view('js');
		}



}
?>
