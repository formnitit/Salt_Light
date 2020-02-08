<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminrecourseedit extends CI_Controller {

	public function __construct()
				        {
				                parent::__construct();
				                $this->load->model('adminrecourse_model');
								}


	public function edit1()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/css_admin');
		$this->load->view('admin/banner_admin');
		$this->load->view('admin/adminrecoursedit');
		$this->load->view('admin/footer_admin');
    $this->load->view('admin/js_admin');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('admin/header_admin');
			$this->load->view('admin/css_admin');
			$this->load->view('admin/banner_admin');
			$this->load->view('loginadmin/adminrecoursedit1');
			$this->load->view('admin/footer_admin');
			$this->load->view('admin/js_admin');
		}

	public function edit()
	{
    $data = array(
      'recourse_name' => $this->input->post('recourse_name'),
      'recourse_surname' => $this->input->post('recourse_surname'),
      'recourse_address' => $this->input->post('recourse_address'),
      'recourse_email' => $this->input->post('recourse_email'),
      'recourse_phone' => $this->input->post('recourse_phone'),
    );
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    // exit;
    $this->db->where('recourse_id', $this->input->post('recourse_id'));
    $query=$this->db->update('recourse',$data);

    if($query){
      redirect('adminrecourse','refresh');
    }else {
      echo 'false';
      }
				}
			}
