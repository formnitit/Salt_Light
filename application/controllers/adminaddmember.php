<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminaddmember extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminaddmember');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}
}
