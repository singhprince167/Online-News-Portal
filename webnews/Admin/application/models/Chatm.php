<?php
class Chatm extends CI_Model
{
	public function getchat()
	{
		//$this->db->from('reporterreg');
		
		return $this->db->get('chat')->result();
		
	}
	public function insertdata()
	{
		
		$name=$this->input->post('rname');
		$msg=$this->input->post('msg');
		$insert=array
		             (
					    "repid"=>$name,
						"adminmsg"=>$msg
					  );
		
		$this->db->insert('chat',$insert);
		
		
	}
	
	public function statusUpdate($id)
	{
		$this->db->where('chatid',$id);
		$status=$this->db->get('chat')->row();
		$curr=$status->chatstatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "chatstatus"=>$updatesta);
			$this->db->where('chatid',$id);
			$this->db->update('chat',$update);
			redirect('Chatc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "chatstatus"=>$updatesta);
			$this->db->where('chatid',$id);
			$this->db->update('chat',$update);
			redirect('Chatc');	
		}
	
	}
}
?>