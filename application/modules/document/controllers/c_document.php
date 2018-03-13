<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_document extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_document');
	}

	public function index()
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$data['title']		= "Billing Documentation";
			$data['billing']	= $this->m_document->billing_doc();
			$data['view']		= "v_billing_doc";

			$this->load->view('template',$data);
		}
		else
		{
			redirect('logout');
		}
	}

	public function opera_doc()
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$data['title']		= "Operational Documentation";
			$data['opera']		= $this->m_document->operational_doc();
			$data['view']		= "v_operational_doc";

			$this->load->view('template',$data);
		}
		else
		{
			redirect('logout');
		}
	}

	public function sys_doc()
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$data['title']		= "System Integration Documentation";
			$data['syst']	    = $this->m_document->sys_doc();
			$data['view']		= "v_sys_doc";

			$this->load->view('template',$data);
		}
		else
		{
			redirect('logout');
		}
	}

	public function share_file_sys($id)
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$data['title']		= "Share Documentation";
			$data['d_file'] 	= $this->m_document->detail_file($id);
			$data['view']		= "v_send_file";

			$this->load->view('template',$data);

		}
		else
		{
			redirect('logout');
		}
	}

	public function share_file_bill($id)
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$data['title']		= "Share Documentation";
			$data['d_file'] 	= $this->m_document->detail_file($id);
			$data['view']		= "v_send_bill";

			$this->load->view('template',$data);

		}
		else
		{
			redirect('logout');
		}
	}

	public function share_file_opera($id)
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{
			$data['title']		= "Share Documentation";
			$data['d_file'] 	= $this->m_document->detail_file($id);
			$data['view']		= "v_send_opera";

			$this->load->view('template',$data);

		}
		else
		{
			redirect('logout');
		}
	}

	public function share_document_sys()
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{	
			$id_document 	= $this->input->post('id_document');
			$project_name	= "Documentation".$this->input->post('project_name');
			$r_name 		= strtoupper(str_replace("'", "", $this->input->post('r_name')));
			$email 			= strtolower($this->input->post('email'));
			$nama_r 		= $this->session->userdata('user_fname');
			$doc_name 		= $this->input->post('document_name');

			$set_from = 'no-reply@jne.co.id';
			include('phpmailer/PHPMailerAutoload.php');
			$mail = new PHPMailer();
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = 'html';
            $mail->isSMTP();
            $mail->Host = 'e-relay.jne.co.id';
            $mail->Port = '587';
            $mail->SMTPAuth = true;
            $mail->Username = 'notification@jne.co.id';
            $mail->Password = '123456';
            $mail->WordWrap = 50;  
            // set email content
            $mail->setFrom($set_from,'TW Portal');
            $mail->addAddress($email);
            
            $mail->Subject = $project_name;
            $mail->Body = "<p>Dear Bapak / Ibu ".$r_name."</p><br/><br/>
            Please click the link below to download the file<br/><br/>
            <p>http://cms.jne.co.id/tw_portal/download_file/".$doc_name."</p>
            <p>Thanks</p>
            <p>Regards</p><br/>
            ".$nama_r."
            ";

            //$mail->send();

            $mail->AltBody = "This is the body when user views in plain text format";
			if(!$mail->Send())
			{
				echo "Mailer Error: " . $mail->ErrorInfo;
			}
			else
			{
				$this->session->set_flashdata('success_message','Share File Successfully..');
				redirect('sys_doc');
			}
		}
		else
		{
			redirect('logout');
		}
	}

	public function share_document_bill()
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{	
			$id_document 	= $this->input->post('id_document');
			$project_name	= "Documentation".$this->input->post('project_name');
			$r_name 		= strtoupper(str_replace("'", "", $this->input->post('r_name')));
			$email 			= strtolower($this->input->post('email'));
			$nama_r 		= $this->session->userdata('user_fname');
			$doc_name 		= $this->input->post('document_name');

			$set_from = 'no-reply@jne.co.id';
			include('phpmailer/PHPMailerAutoload.php');
			$mail = new PHPMailer();
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = 'html';
            $mail->isSMTP();
            $mail->Host = 'e-relay.jne.co.id';
            $mail->Port = '587';
            $mail->SMTPAuth = true;
            $mail->Username = 'notification@jne.co.id';
            $mail->Password = '123456';
            $mail->WordWrap = 50;  
            // set email content
            $mail->setFrom($set_from,'TW Portal');
            $mail->addAddress($email);
            
            $mail->Subject = $project_name;
            $mail->Body = "<p>Dear Bapak / Ibu ".$r_name."</p><br/><br/>
            Please click the link below to download the file<br/><br/>
            <p>http://cms.jne.co.id/tw_portal/download_file/".$doc_name."</p>
            <p>Thanks</p>
            <p>Regards</p><br/>
            ".$nama_r."
            ";

            //$mail->send();

            $mail->AltBody = "This is the body when user views in plain text format";
			if(!$mail->Send())
			{
				echo "Mailer Error: " . $mail->ErrorInfo;
			}
			else
			{
				$this->session->set_flashdata('success_message','Share File Successfully..');
				redirect('billing_doc');
			}
		}
		else
		{
			redirect('logout');
		}
	}

	public function share_document_opera()
	{
		if($this->session->userdata('auth_admin') === TRUE)
		{	
			$id_document 	= $this->input->post('id_document');
			$project_name	= "Documentation".$this->input->post('project_name');
			$r_name 		= strtoupper(str_replace("'", "", $this->input->post('r_name')));
			$email 			= strtolower($this->input->post('email'));
			$nama_r 		= $this->session->userdata('user_fname');
			$doc_name 		= $this->input->post('document_name');

			$set_from = 'no-reply@jne.co.id';
			include('phpmailer/PHPMailerAutoload.php');
			$mail = new PHPMailer();
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = 'html';
            $mail->isSMTP();
            $mail->Host = 'e-relay.jne.co.id';
            $mail->Port = '587';
            $mail->SMTPAuth = true;
            $mail->Username = 'notification@jne.co.id';
            $mail->Password = '123456';
            $mail->WordWrap = 50;  
            // set email content
            $mail->setFrom($set_from,'TW Portal');
            $mail->addAddress($email);
            
            $mail->Subject = $project_name;
            $mail->Body = "<p>Dear Bapak / Ibu ".$r_name."</p><br/><br/>
            Please click the link below to download the file<br/><br/>
            <p>http://cms.jne.co.id/tw_portal/download_file/".$doc_name."</p>
            <p>Thanks</p>
            <p>Regards</p><br/>
            ".$nama_r."
            ";

            //$mail->send();

            $mail->AltBody = "This is the body when user views in plain text format";
			if(!$mail->Send())
			{
				echo "Mailer Error: " . $mail->ErrorInfo;
			}
			else
			{
				$this->session->set_flashdata('success_message','Share File Successfully..');
				redirect('opera_doc');
			}
		}
		else
		{
			redirect('logout');
		}
	}

	public function download_file($id)
	{
		$data['title']	= "Download File";
		$data['id']		= $id;
		$data['view']	= "v_download";

		$this->load->view('v_download',$data);
	}

}

/* End of file c_document.php */
/* Location: ./application/modules/document/controllers/c_document.php */