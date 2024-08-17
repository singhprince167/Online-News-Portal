<?php 
class Breakingm extends CI_Model
{
	public function getbreaking()
	{
		return $this->db->get('breakingnews')->result();	
	}
	public function deletedata($id)
	{
		$this->db->where('bid',$id);
		$this->db->delete('breakingnews');		
	}
	public function editdata($id)
	{
		$this->db->where('bid',$id);
	 return $this->db->get('breakingnews')->row();
				
	}
	public function updatedata($id)
	{
		
		
		$desc=$this->input->post('desc');
		
		$update=array(
						
						
						"description"=>$desc
						);
		
		$this->db->where('bid',$id);
		$this->db->update('breakingnews',$update);
		redirect('Breakingc');
		
	}
	public function insertdata()
	{	
		
		
		
		$desc=$this->input->post('desc');
		$insert=array(
		
		
		"description"=>$desc
		);

		$this->db->insert('breakingnews',$insert);
		redirect('Breakingc');
		
	}
	public function multipledel()
	{
		$bid=$this->input->post('chk');
		
		foreach($bid as $id)
		{
			$this->db->where('bid',$id);
			$this->db->delete('breakingnews');
		}
		redirect('Breakingc');
	}
	public function statusUpdate($id)
	{
		$this->db->where('bid',$id);
		$status=$this->db->get('breakingnews')->row();
		$curr=$status->bstatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "bstatus"=>$updatesta);
			$this->db->where('bid',$id);
			$this->db->update('breakingnews',$update);
			redirect('Breakingc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "bstatus"=>$updatesta);
			$this->db->where('bid',$id);
			$this->db->update('breakingnews',$update);
			redirect('Breakingc');	
		}
		
	}

	
}
?>