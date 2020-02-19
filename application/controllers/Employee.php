<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {


	public function index()
	{
    $this->load->view('Employee/header_employ');
    $this->load->view('Employee/css_employ');
    $this->load->view('Employee/banner_employ');
    $this->load->view('Employee/employee_index');
    $this->load->view('Employee/footer_employ');
    $this->load->view('Employee/js_employ');

	}
}

  ?>
