<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminindex extends CI_Controller {


	public function index()
	{
		// print_r($_SESSION);
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminindex');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('admin/header_admin');
			$this->load->view('admin/css_admin');
			$this->load->view('admin/banner_admin');
			$this->load->view('loginadmin/adminindex1');
			$this->load->view('admin/footer_admin');
			$this->load->view('admin/js_admin');
		}
}
?>
