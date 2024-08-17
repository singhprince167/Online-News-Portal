<?php
class Categorym extends CI_Model
{
	public function getcatgdata()
	{
		return $this->db->get('category')->result();
	}
	public function catdeldata($cid)
	{
	   $this->db->where('cid',$cid);
	   $this->db->delete('category');	
	}
	public function cateditdata($cid)
	{
		$this->db->where('cid',$cid);
		return $this->db->get('category')->row();
	}
	public function catupdatedata($cid)
	{
		$cname=$this->input->post('cname');
		$update=array(
						"catgname"=>$cname
					  );	
		
		$this->db->where('cid',$cid);
		$this->db->update('category',$update);	
		redirect('Categoryc');
	}
	public function catinsert()
	{
		$cname=$this->input->post('cname');
		$insert=array(
						"catgname"=>$cname
					  );
		$this->db->insert('category',$insert);
		redirect('Categoryc');
					  
	}
	public function multipledel()
	{
		$cid=$this->input->post('chk');
		
		foreach($cid as $id)
		{
			$this->db->where('cid',$id);
			$this->db->delete('category');
		}
		redirect('Categoryc');
	}
	public function statusUpdate($id)
	{
		$this->db->where('cid',$id);
		$status=$this->db->get('category')->row();
		$curr=$status->catgstatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "catgstatus"=>$updatesta	 );
			$this->db->where('cid',$id);
			$this->db->update('category',$update);
			redirect('Categoryc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "catgstatus"=>$updatesta	 );
			$this->db->where('cid',$id);
			$this->db->update('category',$update);
			redirect('Categoryc');	
		}
		
	}
	
}
?>