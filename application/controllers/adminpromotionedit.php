<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpromotionedit extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminpromotion_model');
								}


	public function edit1()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminpromotionedit');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	public function edit()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;
		$this->adminpromotion_model->editpromotion();
	}

	public function adding()
	{
		$data = array(
			'promotion_name' => $this->input->post('promotion_name'),
			'promotion_detail' => $this->input->post('promotion_detail'),
			'promotion_code' => $this->input->post('promotion_code'),
			'promotion_datestart' => $this->input->post('promotion_datestart'),
      'promotion_dateend' => $this->input->post('promotion_dateend'),
		);

	 	// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;

		$query=$this->db->insert('promotion',$data);
		if($query){
			echo 'ok';
		}else {
			echo 'false';
		}
	}
}
