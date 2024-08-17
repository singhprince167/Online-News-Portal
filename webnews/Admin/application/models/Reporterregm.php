<?php
class Reporterregm extends CI_Model
{
	public function getreporterdata()
	{
		
		$this->db->where('reporterpost.rpstatus',"Active");
		$this->db->get('reporterpost')->result();
		
		
	}
	
	public function logindata()
	{
		$email=$this->input->post('email');
	    $pass=$this->input->post('pass');
		$this->db->where('remail',$email);	
		$this->db->where('rpassword',$pass);	
		return $this->db->get('reporterreg')->row();	
	}
	public function getreporterAlldata()
	{
		$this->db->from('reporterreg');
		$this->db->join('reporterpost','reporterpost.repid=reporterreg.repid');
		$this->db->order_by('reporterpost.rid','desc');	
		return $this->db->get()->result();	
	}
	
	
}
?>