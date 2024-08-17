<?php
class Citym extends CI_Model
{
	public function getcity()
	{
		$this->db->from('country');
		$set=$this->db->join('state','state.countryid=country.countryid');
		$this->db->join('city','state.stateid=city.stateid');
		return $this->db->get()->result();	
	}
	public function insertdata()
	{
		
		$cid=$this->input->post('country');
		$sid=$this->input->post('state');
		$cname=$this->input->post('cname');
		
	    $insert=array
		             (
					  "countryid"=>$cid,
					  "stateid"=>$sid,
					  "cname"=>$cname,
					 
		              );
		
		$this->db->insert('city',$insert);
		
		}	
		public function deldata($id)
	{
		$this->db->where('cityid',$id);	
		$this->db->delete('city');
		
	}
	public function cityeditdata($id)
	{
	   $this->db->where('cityid',$id);
	   return $this->db->get('city')->row();		
	
	}
	public function updatedata($id)
	{
	    $cid=$this->input->post('country');
		$sid=$this->input->post('state');
		$cname=$this->input->post('cname');
		
	    $update=array
		             (
					  "countryid"=>$cid,
					  "stateid"=>$sid,
					  "cname"=>$cname,
					 
		              );
		$this->db->where('cityid',$id);
		$this->db->update('city',$update);
		
		
	}
	public function multipledel()
	{
		$tid=$this->input->post('chk');
		
		foreach($tid as $id)
		{
			$this->db->where('cityid',$id);
			$this->db->delete('city');
		}
		redirect('cityc');
	}
	public function statusUpdate($id)
	{
		$this->db->where('cityid',$id);
		$status=$this->db->get('city')->row();
		$curr=$status->cstatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "cstatus"=>$updatesta);
			$this->db->where('cityid',$id);
			$this->db->update('city',$update);
			redirect('cityc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "cstatus"=>$updatesta);
			$this->db->where('cityid',$id);
			$this->db->update('city',$update);
			redirect('cityc');	
		}
	
	}	
}


?>