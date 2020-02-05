<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontact extends CI_Controller {

  public function __construct()
                {
                        parent::__construct();
                        $this->load->model('admincontact_model');
                }
	public function index()
	{
    $data['query'] = $this->admincontact_model->get();
    $this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/admincontact',$data);
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

  // ---------------------------------logout--------
    public function index1()
    {
      $this->load->view('admin/header_admin');
      $this->load->view('admin/css_admin');
      $this->load->view('admin/banner_admin');
      $this->load->view('loginadmin/admincontact1');
      $this->load->view('admin/footer_admin');
      $this->load->view('admin/js_admin');
    }
}
?>
