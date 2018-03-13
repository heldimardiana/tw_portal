<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_document extends CI_Model {

	public function billing_doc()
	{
		$sql = "select a.upload_date, a.project_name, a.user_nik, b.user_fname, a.id_document,
				a.document_name
				from tbl_document a
				left join tbl_user b
				on a.user_nik = b.user_nik
				where a.category = '1'";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	public function operational_doc()
	{
		$sql = "select a.upload_date, a.project_name, a.user_nik, b.user_fname, a.id_document,
				a.document_name
				from tbl_document a
				left join tbl_user b
				on a.user_nik = b.user_nik
				where a.category = '2'";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	public function sys_doc()
	{
		$sql = "select a.upload_date, a.project_name, a.user_nik, b.user_fname, a.id_document,
				a.document_name
				from tbl_document a
				left join tbl_user b
				on a.user_nik = b.user_nik
				where a.category = '3'";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	public function detail_file($id)
	{
		$sql = "select * from tbl_document where id_document = $id";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

}

/* End of file m_document.php */
/* Location: ./application/modules/document/models/m_document.php */