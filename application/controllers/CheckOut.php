<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckOut extends CI_Controller {


	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('banner');
		$this->load->view('CheckOut');
		$this->load->view('footer');
		$this->load->view('js');
	}
}
?>
