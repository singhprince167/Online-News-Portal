<?php

class allNewsm extends CI_model
{
	public function allNewsdata()
	{
		$reporterid=$this->session->userdata('reporterid');
        $this->db->where('repid',$reporterid);
		$this->db->order_by('reporterpost.rid','desc');
		return $this->db->get('reporterpost')->result();	
	}
	public function recentnews()
	{
			$email=$this->session->userdata('email');
			$this->db->where('remail',$email);
			$file['get']=$this->db->get('reporterreg')->row();
		   	$reporterid=$this->session->userdata('reporterid');
			$recent=date('Y-m-d');
			$this->db->select('reporterpost.*,category.catgname,reporterreg.rname,city.cname');
			$this->db->from('reporterpost');
			$this->db->join('category','category.cid=reporterpost.cid');
			$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
			$this->db->join('city','city.cityid=reporterpost.cityid');
			$this->db->where('reporterpost.repid',$reporterid);
			$this->db->where('reporterpost.postdatereg',$recent);
			$this->db->distinct('reporterpost.repid');
		    $this->db->order_by('reporterpost.rid','desc');
			return $this->db->get()->result();
			
		
	}	
	public function weeklynews()
	{
		$email=$this->session->userdata('email');
		    $this->db->where('remail',$email);
		    $file['get']=$this->db->get('reporterreg')->row();
		    $reporterid=$this->session->userdata('reporterid');
			$recent=date('Y-m-d',strtotime('-7 day'));
			$this->db->select('reporterpost.*,category.catgname,reporterreg.rname,city.cname');
			$this->db->from('reporterpost');
			$this->db->join('category','category.cid=reporterpost.cid');
			$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
			$this->db->join('city','city.cityid=reporterpost.cityid');
			$this->db->where('reporterpost.repid',$reporterid);
			$this->db->where('reporterpost.postdatereg >=',$recent);
		    $this->db->distinct('reporterpost.repid');
			$this->db->order_by('reporterpost.rid','desc');
			 return $this->db->get()->result();
		
		
	}	
	public function monthlyNews()
	{
		
		    $email=$this->session->userdata('email');
		    $this->db->where('remail',$email);
		    $file['get']=$this->db->get('reporterreg')->row();
			$reporterid=$this->session->userdata('reporterid');
		    $recent=date('Y-m-d',strtotime('-30 day'));
			$this->db->select('reporterpost.*,category.catgname,reporterreg.rname,city.cname');
			$this->db->from('reporterpost');
			$this->db->join('category','category.cid=reporterpost.cid');
			$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
			$this->db->join('city','city.cityid=reporterpost.cityid');
			$this->db->where('reporterpost.repid',$reporterid);
			$this->db->where('reporterpost.postdatereg >=',$recent);
			$this->db->distinct('reporterpost.repid');
			$this->db->order_by('reporterpost.rid','desc');
			return $this->db->get()->result();
	}	
	
	
}


?>