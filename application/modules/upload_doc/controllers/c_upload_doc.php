<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_upload_doc extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_upload_doc');
	}

	public function index()
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$data['title']	= "Upload Document";
			$data['view']	= "v_upload_doc";

			$this->load->view('template',$data);
		}
		else
		{
			redirect('logout');
		}
	}

	public function save_upload()
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$user_nik 		= $this->session->userdata('user_nik');
			$project_name 	= strtoupper(str_replace("'", "", $this->input->post('project_name')));
			$category 		= $this->input->post('category');
			$document 		= $this->input->post('document');
			$doc 			= $this->input->post('doc');

			if(!empty($doc))
			{
				$date 			= date('Y/m/d H:i:s');
				$key_group		= md5($date.$doc);

				//File Uploading
				$dir 						= './uploads/';
				$config['upload_path']		= './uploads/';
				$config['allowed_types']	= 'zip|rar';
				$config['max_size']			= '5000';
				$config['overwrite']		= FALSE;
				$config['remove_spaces']  	= TRUE;

				$field_name 				= "document";

				$this->load->library('upload', $config);
				if(! $this->upload->do_upload($field_name))
				{
					echo $this->upload->display_errors();	
					exit();	
				}
				else
				{
					$data1 	= $this->upload->data();
					$file1 	= $data1['file_name'];
					rename ($dir.$file1, $dir.$key_group.$file1);
					$files1 = $key_group.$file1;	
				}

			}
			else
			{
				$files1 = "";
			}

			$save_upload 	= $this->m_upload_doc->save_upload($user_nik, $project_name, $category, $files1);
			if($save_upload)
			{
				$this->session->set_flashdata('success_message', 'Upload Document Successfully..');
				redirect('upload_doc');
			}
			else
			{
				$this->session->set_flashdata('erorr_message', 'Upload Document Faild..');
				redirect('upload_doc');
			}
		}
		else
		{
			redirect('logout');
		}
	}

}

/* End of file c_upload_doc.php */
/* Location: ./application/modules/upload_doc/controllers/c_upload_doc.php */