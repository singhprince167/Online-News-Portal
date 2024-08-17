<?php
class Signupmodel extends CI_Model
{
	public function insertdata()
	{
		
			$name=$this->input->post('name');
			$email=$this->input->post('mail');
			$pass=$this->input->post('pass');
			$cpass=$this->input->post('cpass');
			$mno=$this->input->post('mno');
			
			if($cpass!=$pass)
			{
				echo "password and confirm password not same";	
			}
			else
			{
			$insert=array(
							"uname"=>$name,
							"email"=>$email,
							"password"=>$pass,
							"contactno"=>$mno
					      );
			$this->db->insert('userreg',$insert);
			}
	}	
	
}


?>