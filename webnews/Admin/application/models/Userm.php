<?php
class Userm extends CI_Model
{
	public function userdata()
	{
 		return $this->db->get('userreg')->result();  
	}
	public function insertdata()
	{
		
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$pass=$this->input->post('paas');
		$gender=$this->input->post('gender');
		$mno=$this->input->post('mno');	
		
			$insert=array
		             (
					  "uname"=>$name,
					  "email"=>$email,
					  "password"=>$pass,
					  "gender"=>$gender,
					  "contactno"=>$mno,
					  
					  
		              );
		
		$this->db->insert('userreg',$insert);
		redirect('Userc');
		
		}	
	public function userdeldata($id)
	{
		$this->db->where('uid',$id);	
		$this->db->delete('userreg');
		
	}
	public function usereditdata($id)
	{
	   $this->db->where('uid',$id);
	   return $this->db->get('userreg')->row();		
	
	}
	public function updatedata($id)
	{
	    $name=$this->input->post('name');
		$email=$this->input->post('email');
		$pass=$this->input->post('paas');
		$gender=$this->input->post('gender');
		$mno=$this->input->post('mno');	
		
			$update=array
		             (
					  "uname"=>$name,
					  "email"=>$email,
					  "password"=>$pass,
					  "gender"=>$gender,
					  "contactno"=>$mno,
					  
					  
		              );
		$this->db->where('uid',$id);	
		$this->db->update('userreg',$update);
		redirect('Userc');
	}	
	public function multipledel()
	{
		$rid=$this->input->post('chk');
		
		foreach($rid as $id)
		{
			$this->db->where('uid',$id);
			$this->db->delete('userreg');
		}
		redirect('Userc');
	}
	public function statusUpdate($id)
	{
		$this->db->where('uid',$id);
		$status=$this->db->get('userreg')->row();
		$curr=$status->ustatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "ustatus"=>$updatesta);
			$this->db->where('uid',$id);
			$this->db->update('userreg',$update);
			redirect('Userc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "ustatus"=>$updatesta);
			$this->db->where('uid',$id);
			$this->db->update('userreg',$update);
			redirect('Userc');	
		}
	
	}
		
}