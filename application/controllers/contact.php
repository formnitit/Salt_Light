<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('bannerlogout');
		$this->load->view('contact');
		$this->load->view('footer');
		$this->load->view('js');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('banner');
			$this->load->view('login/contact1');
			$this->load->view('login/footer1');
			$this->load->view('js');
		}


	public function adding()
	{
		$data = array(
			'contact_name' => $this->input->post('contact_name'),
			'contact_email' => $this->input->post('contact_email'),
			'contact_phone' => $this->input->post('contact_phone'),
			'contact_message' => $this->input->post('contact_message')
		);

		$query=$this->db->insert('contact',$data);
		if($query){
			redirect('contact','refresh');
		}else {
			echo 'false';
			}
}



}
?>
