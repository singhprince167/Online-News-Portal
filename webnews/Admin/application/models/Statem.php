<?php
class Statem extends CI_Model
{
	public function getstate()
	{
		$this->db->from('country');
		$this->db->join('state','state.countryid=country.countryid');
		return $this->db->get()->result();
	}
	public function statedeldata($sid)
	{
		
	   $this->db->where('stateid',$sid);
	   $this->db->delete('state');	
	}
	public function stateeditdata($sid)
	{
		
	   $this->db->where('stateid',$sid);
	   return $this->db->get('state')->row();	
	}
	public function stateupdatedata($sid)
	{
		$cid=$this->input->post('country');
		$sname=$this->input->post('sname');
		$update=array(
						"countryid"=>$cid,
						"sname"=>$sname
					  );	
		$this->db->where('stateid',$sid);
		$this->db->update('state',$update);
	}
	public function stateinsertdata()
	{
		$cid=$this->input->post('country');
		$sname=$this->input->post('sname');
		$insert=array( 
						
						"countryid"=>$cid,
						"sname"=>$sname,
						
					  );
		//print_r($insert);			  
		$this->db->insert('state',$insert);
		redirect('Statec');
					  
	}	
	public function multipledel()
	{
		$sid=$this->input->post('chk');
		
		foreach($sid as $id)
		{
			$this->db->where('stateid',$id);
			$this->db->delete('state');
		}
		redirect('Statec');
	}
	public function statusUpdate($id)
	{
		$cid=$this->input->post('category');
		$this->db->where('stateid',$id);
		$status=$this->db->get('state')->row();
		$curr=$status->sstatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "sstatus"=>$updatesta);
			$this->db->where('stateid',$id);
			$this->db->update('state',$update);
			redirect('Statec');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "sstatus"=>$updatesta);
			$this->db->where('stateid',$id);
			$this->db->update('state',$update);
			redirect('Statec');	
		}
		
	}
	

}