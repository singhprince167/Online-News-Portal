<?php
class Feedbackmodel extends CI_Model
{
	public function insertdata($rid,$cid)
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$mno=$this->input->post('contact');
		$comment=$this->input->post('comment');
		
		$insert=array
		        (
					
					"rid"=>$rid,
					"usernm"=>$name,
					"email"=>$email,
					"contactno"=>$mno,
					"comment"=>$comment
				
				);
			
				
		$this->db->insert('feedback',$insert);

	}
	public function commentcount()
	{
		$this->db->where('fstatus','Active');
		return $this->db->get('feedback')->result();	
	}	
	
}