<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function verify_login($username,$password)
	{
		$sql = "select count(user_nik) as nik from tbl_user where user_nik = '$username' and user_password = '$password'";
		$query = $this->db->query($sql)->result_array();

		foreach($query as $q)
		{
			$data = $q['nik'];
		}
		if($data > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function make_session($username,$password)
	{
		$sql = "select user_nik, user_fname, user_lname, user_email, user_level from tbl_user
				where user_nik = '$username' and user_password = '$password'";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

}

/* End of file m_login.php */
/* Location: ./application/modules/login/models/m_login.php */