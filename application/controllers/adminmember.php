<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmember extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminmember');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}
}
