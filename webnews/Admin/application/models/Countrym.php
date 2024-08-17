<?php
class Countrym extends CI_Model
{
	public function getcountry()
	{
		return $this->db->get('country')->result();
	}
	public function countrydeldata($id)
	{
	   $this->db->where('countryid',$id);
	   $this->db->delete('country');	
	}
	public function countryeditdata($id)
	{
		$this->db->where('countryid',$id);
		return $this->db->get('country')->row();
	}
	public function countryupdatedata($id)
	{
		$cname=$this->input->post('cname');
		$update=array(
						"countryname"=>$cname
					  );	
		
		$this->db->where('countryid',$id);
		$this->db->update('country',$update);
			
	}
	public function cntryinsert()
	{
		$cname=$this->input->post('cname');
		$insert=array(
						"countryname"=>$cname
					  );
		$this->db->insert('country',$insert);
		redirect('Countryc');
					  
	}
	public function multipledel()
	{
		$cid=$this->input->post('chk');
		
		foreach($cid as $id)
		{
			$this->db->where('countryid',$id);
			$this->db->delete('country');
		}
		redirect('Countryc');
	}
	public function statusUpdate($id)
	{
		$this->db->where('countryid',$id);
		$status=$this->db->get('country')->row();
		$curr=$status->countrystatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "countrystatus"=>$updatesta	 );
			$this->db->where('countryid',$id);
			$this->db->update('country',$update);
			redirect('Countryc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "countrystatus"=>$updatesta	 );
			$this->db->where('countryid',$id);
			$this->db->update('Country',$update);
			redirect('Countryc');	
		}
		
	}
	
}
?>