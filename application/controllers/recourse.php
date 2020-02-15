<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recourse extends CI_Controller {

	public function __construct()
								{
												parent::__construct();
												$this->load->model('adminrecourse_model');
												$this->load->model('admincourse_model');
								}

	public function show($course_id)
	{
	$data['rowshow']=$this->admincourse_model->read($course_id);
	//$data['rowshow']=$this->adminrecourse_model->read($recourse_id);
	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
	$this->load->view('header_view');
	$this->load->view('css');
	$this->load->view('banner');
	$this->load->view('recourse',$data);
	$this->load->view('footer');
	$this->load->view('js');

}


	public function adding()
	{
		$course_id  = $this->input->post('course_id');
		$data = array(
			'recourse_name' => $this->input->post('recourse_name'),
			'recourse_surname' => $this->input->post('recourse_surname'),
			'recourse_address' => $this->input->post('recourse_address'),
			'recourse_email' => $this->input->post('recourse_email'),
			'recourse_phone' => $this->input->post('recourse_phone'),
			'course_id'=> $this->input->post('course_id')
		);
	 	// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;

		$query=$this->db->insert('recourse',$data);
		if($query){
			redirect('Courseconfirm/show/'.$course_id);
		}else {
			echo 'false';
			}
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('bannerlogout');
			$this->load->view('login/recourse1');
			$this->load->view('login/footer1');
			$this->load->view('js');
		}

}
?>
