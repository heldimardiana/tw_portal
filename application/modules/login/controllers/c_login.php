<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function verify_login()
	{
		$username 		= $this->input->post('username');
		$password 		= md5($username.$this->input->post('password'));
		$verify_login	= $this->m_login->verify_login($username,$password);

		if($verify_login === TRUE)
		{
			//Make Session
			$make_session = $this->m_login->make_session($username,$password);
			foreach($make_session as $mk)
			{
				$this->session->set_userdata('auth_admin',TRUE);
				$this->session->set_userdata('user_nik',$mk['user_nik']);
				$this->session->set_userdata('user_fname',$mk['user_fname']);
				$this->session->set_userdata('user_lname',$mk['user_lname']);
				$this->session->set_userdata('user_email',$mk['user_email']);
				$this->session->set_userdata('user_level',$mk['user_level']);
			}
			redirect('dashboard');
		}
		else
		{
			$this->session->set_flashdata('erorr_login', 'Username or Password Invalid');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file c_login.php */
/* Location: ./application/modules/login/controllers/c_login.php */