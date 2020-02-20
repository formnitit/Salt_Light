<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
				$this->load->model('Member_model');
    }


	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('css');
		$this->load->view('banner');
		$this->load->view('login');
		$this->load->view('footer');
		$this->load->view('js');
	}

	// ---------------------------------logout--------
		public function index1()
		{
			$this->load->view('header_view');
			$this->load->view('css');
			$this->load->view('bannerlogout');
			$this->load->view('login');
			$this->load->view('footer');
			$this->load->view('js');
		}


	public function loginMe()
		{
			// echo '<pre>';
			// print_r($_POST);
			// echo '</pre>';
			// exit;
			if($this->input->post('member_email')==''){
				$this->load->view('login');
			}else{

				$result = $this->Member_model->fetch_user_login(
					$this->input->post('member_email'),
					($this->input->post('member_pass'))
				);
				// print_r($result);
				// exit;
				if(!empty($result)){
					$session_user=array(
							'member_ID' 		=> $result->member_ID,
							'member_type'	=> $result->member_type,
							'member_name'	=> $result->member_name,
							'member_img'	=> $result->member_img,
							'member_email' => $result->member_email
					);
					// echo '<br>';
					//print_r{$session_user};
					//exit;
					$this->session->set_userdata($session_user);
					//echo <br>;
					//print_r{$_SESSION};
					$m_type = $_SESSION['member_type'];
					//echo 'level'.$m_type;
					//echp <hr>;
					if($m_type==1){
						redirect('adminindex/index','refresh');
					}elseif($m_type==0){
						redirect('welcome/index1','refresh');
					}elseif($m_type==2){
						redirect('Employee/index','refresh');
					}
				}else {
					$this->session->unset_userdata(array('member_ID','member_type','member_name'));
					redirect('login');


			}
		}
		}



		public function logout()
		{
			$this->session->sess_destroy();//ล้างsession

		redirect('welcome');//กลับไปหน้า Login
		}
}
?>
