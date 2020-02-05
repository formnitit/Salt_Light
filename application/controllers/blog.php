<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminblog_model');
	}


	public function index()
	{
		$data['query'] = $this->adminblog_model->jointableblog();
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('banner');
		$this->load->view('blog',$data);
		$this->load->view('footer');
		$this->load->view('js');
	}

	public function index1()
	{
		$data['query'] = $this->adminblog_model->jointableblog();
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('bannerlogout');
		$this->load->view('login/blog1',$data);
		$this->load->view('login/footer1');
		$this->load->view('js');
	}
}
?>
