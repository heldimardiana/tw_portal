<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_users extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_users');
	}

	public function index()
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$data['title']	= "Management Users";
			$data['user']	= $this->m_users->get_user();
			$data['view']	= "v_users";

			$this->load->view('template',$data);
		}
		else
		{
			redirect('logout');
		}
	}

	public function save_add_user()
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$nik 		= strtoupper($this->input->post('nik'));
			$f_name		= strtoupper(str_replace("'", "", $this->input->post('f_name')));
			$l_name		= strtoupper(str_replace("'", "", $this->input->post('l_name')));
			$email 		= strtolower($this->input->post('email'));
			$divisi 	= $this->input->post('divisi');
			$password	= md5($nik.$this->input->post('password'));

			$save_add_user = $this->m_users->save_add_user($nik,$f_name,$l_name,$email,$divisi,$password);
			if($save_add_user)
			{
				$this->session->set_flashdata('success_message', 'Add User Successfully..');
				redirect('users');
			}
			else
			{
				$this->session->set_flashdata('erorr_message', 'Add User Faild..');
				redirect('users');
			}
		}
		else
		{
			redirect('logout');
		}
	}

	public function delete_user($id)
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$delete_user = $this->m_users->delete_user($id);
			if($delete_user)
			{
				$this->session->set_flashdata('success_message', 'Delete User Successfully..');
				redirect('users');
			}
			else
			{
				$this->session->set_flashdata('erorr_message', 'Delete User Faild..');
				redirect('users');
			}
		}
		else
		{
			redirect('logout');
		}
	}

	public function edit_user($id)
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$data['title']	= "Edit User";
			$data['edit']	= $this->m_users->edit_user($id);
			$data['view']	= "v_edit_user";

			$this->load->view('template',$data);
		}
		else
		{
			redirect('logout');
		}
	}

	public function save_edit_user()
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$nik 	= $this->input->post('p_nik'); var_dump($nik);exit();
		}
		else
		{
			redirect('logout');
		}
	}

}

/* End of file c_users.php */
/* Location: ./application/modules/users/controllers/c_users.php */