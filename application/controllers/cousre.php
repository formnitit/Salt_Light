<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cousre extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admincourse_model');
	}

	public function index()
	{
		$data['query'] = $this->admincourse_model->get();
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('banner');
		$this->load->view('cousre',$data);
		$this->load->view('footer');
		$this->load->view('js');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$data['query'] = $this->admincourse_model->get();
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('bannerlogout');
			$this->load->view('cousre',$data);
			$this->load->view('footer');
			$this->load->view('js');
		}

}
?>
