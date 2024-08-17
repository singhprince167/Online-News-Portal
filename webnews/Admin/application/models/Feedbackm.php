<?php
class Feedbackm extends CI_Model
{
	public function getfeedback()
	{
		return $this->db->get('feedback')->result();	
	}
	public function deldata($id)
	{
		$this->db->where('fid',$id);
		$this->db->delete('feedback');
    }
	public function statusUpdate($id)
	{
		$this->db->where('fid',$id);
		$status=$this->db->get('feedback')->row();
		$curr=$status->fstatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "fstatus"=>$updatesta);
			$this->db->where('fid',$id);
			$this->db->update('feedback',$update);
			redirect('Feedbackc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "fstatus"=>$updatesta);
			$this->db->where('fid',$id);
			$this->db->update('feedback',$update);
			redirect('Feedbackc');	
		}
	
	}
	
}


?>