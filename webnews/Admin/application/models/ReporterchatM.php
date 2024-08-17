<?php

class ReporterchatM extends CI_model
{
	public function getchat()
	{
					
		return $this->db->get("reporterchat")->result();
		
	}
	
	public function insertdata()
	{
	   $aid=$this->input->post('admin');
	   $msg=$this->input->post('reporetrmsg');
	   
	   $insert=array
	   				(
						"Aid"=>$aid,
						"reportermsg"=>$msg
					);
	  $this->db->insert('reporterchat',$insert);
	  
	}
	
}
?>