<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$data['title']	= "Dashboard";
			$data['view']	= "v_dashboard";

			$this->load->view('template',$data);
		}
		else
		{
			redirect('logout');
		}
	}

}

/* End of file c_dashboard.php */
/* Location: ./application/modules/dashboard/controllers/c_dashboard.php */