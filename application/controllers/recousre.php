<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recousre extends CI_Controller {


	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('banner');
		$this->load->view('recousre');
		$this->load->view('footer');
		$this->load->view('js');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('bannerlogout');
			$this->load->view('login/recousre1');
			$this->load->view('login/footer1');
			$this->load->view('js');
		}

}
?>
