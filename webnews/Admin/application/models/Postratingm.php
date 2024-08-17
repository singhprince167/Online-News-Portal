<?php
class Postratingm extends CI_Model
{
	public function getrating()
	{
		return $this->db->get('postrating')->result();	
	}
	public function statusUpdate($id)
	{
		$this->db->where('ratid',$id);
		$status=$this->db->get('rating')->row();
		$curr=$status->rstatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "rstatus"=>$updatesta);
			$this->db->where('ratid',$id);
			$this->db->update('rating',$update);
			redirect('Ratingc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "rstatus"=>$updatesta);
			$this->db->where('ratid',$id);
			$this->db->update('rating',$update);
			redirect('Ratingc');	
		}
	
	}
	public function multipledel()
	{
		$ratid=$this->input->post('chk');
		
		foreach($ratid as $id)
		{
			$this->db->where('ratid',$id);
			$this->db->delete('rating');
		}
		redirect('Ratingc');
	}	
}


?>