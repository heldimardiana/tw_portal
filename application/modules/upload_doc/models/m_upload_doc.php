<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_upload_doc extends CI_Model {

	public function save_upload($user_nik, $project_name, $category, $files1)
	{
		$sql = "insert into tbl_document (user_nik,project_name,category,document_name) 
				values ('$user_nik', '$project_name', '$category', '$files1')";
		$query = $this->db->query($sql);
		return $query;
	}

}

/* End of file m_upload_doc.php */
/* Location: ./application/modules/upload_doc/models/m_upload_doc.php */