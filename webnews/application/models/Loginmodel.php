<?php
class Loginmodel extends CI_Model
{
	public function logindata()
	{
		
		$email=$this->input->post('mail');
	    $pass=$this->input->post('pass');
		$this->db->where('email',$email);
		$this->db->where('password',$pass);	
		return $this->db->get('userreg')->result();	
		
	}
	public function updatedata()
	{
		$opass=$this->input->post('opass');
		$npass=$this->input->post('npass');
		$cpass=$this->input->post('cpass');	
		$chkemail=$this->session->userdata('checkemail');
		
		$update=array
				(
				'password'=>$npass
				);
		$this->db->where('email',$chkemail);
		$this->db->update('userreg',$update);
	}	
	
}


?>