<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {

	public function get_user()
	{
		$sql = "select user_nik, user_fname, user_lname, user_email, user_level from tbl_user";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	public function save_add_user($nik,$f_name,$l_name,$email,$divisi,$password)
	{
		$sql = "insert into tbl_user (user_nik,user_fname,user_lname,user_email,user_level,user_password) 
				values ('$nik','$f_name','$l_name','$email','$divisi','$password')";
		$query = $this->db->query($sql);
		return $query;
	}

	public function delete_user($id)
	{
		$sql = "delete from tbl_user where user_nik = '$id'";
		$query = $this->db->query($sql);
		return $query;
	}

	public function edit_user($id)
	{
		$sql = "select * from tbl_user where user_nik = '$id'";
		return $query = $this->db->query($sql)->result_array();
	}

}

/* End of file m_users.php */
/* Location: ./application/modules/users/models/m_users.php */