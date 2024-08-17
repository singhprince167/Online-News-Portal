<?php
class Subcategorym extends CI_Model
{
	public function getsubcatgdata()
	{
		$this->db->from('category');
		$this->db->join('subcategory','subcategory.cid=category.cid');
		return $this->db->get()->result();
	}
	public function subdeldata($sid)
	{
		
	   $this->db->where('sid',$sid);
	   $this->db->delete('subcategory');	
	}
	public function subeditdata($sid)
	{
		
	   $this->db->where('sid',$sid);
	   return $this->db->get('subcategory')->row();	
	}
	public function subupdatedata($sid)
	{
		$sname=$this->input->post('sname');
		$update=array(
						"sname"=>$sname
					  );	
		$this->db->where('sid',$sid);
		$this->db->update('subcategory',$update);
	}
	public function subcatinsert()
	{
		$cid=$this->input->post('category');
		$sname=$this->input->post('sname');
		$insert=array( 
						"sname"=>$sname,
						"cid"=>$cid
						
					  );
		//print_r($insert);			  
		$this->db->insert('subcategory',$insert);
		redirect('Subcategoryc');
					  
	}	
	public function multipledel()
	{
		$sid=$this->input->post('chk');
		
		foreach($sid as $id)
		{
			$this->db->where('sid',$id);
			$this->db->delete('subcategory');
		}
		redirect('Subcategoryc');
	}
	public function statusUpdate($id)
	{
		$this->db->where('sid',$id);
		$status=$this->db->get('subcategory')->row();
		$curr=$status->subcatgstatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "subcatgstatus"=>$updatesta	 );
			$this->db->where('sid',$id);
			$this->db->update('subcategory',$update);
			redirect('Subcategoryc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "subcatgstatus"=>$updatesta	 );
			$this->db->where('sid',$id);
			$this->db->update('subcategory',$update);
			redirect('Subcategoryc');	
		}
		
	}
	

}