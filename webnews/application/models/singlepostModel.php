<?php
class singlepostModel extends CI_Model
{
	public function singlePost($newsId,$catId)
	{
		$this->db->from('reporterpost');
		$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('rid',$newsId);
		   $all=$this->db->get()->row();
		   $curview=$all->view;
		   $updateviews=array("view"=>$curview+1);
	   $this->db->where('rid',$newsId);
	   $this->db->update('reporterpost',$updateviews);
	   return $all;
		
	
	}
	public function relatedPost($newsId,$catId)
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		//$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		$this->db->where('reporterpost.rpstatus',"Active");
		$this->db->where('reporterpost.cid',$catId);
		$this->db->order_by('reporterpost.rid','desc');
		return $this->db->get()->result();
		
	}
	public function loaddata($id)
	{
		$this->db->where('rid',$id);
		return $this->db->get('reporterpost')->row();
		
	}
	public function likedata($pstId,$catId)
	{
		$this->db->where('rid',$pstId);
		$this->db->where('ratlike',0);
		$this->db->where('uemail',$this->session->userdata('email'));
		$row=$this->db->get('postrating')->row();
		
		$this->db->where('rid',$pstId);
		$this->db->where('ratlike',1);
		$this->db->where('uemail',$this->session->userdata('email'));
		$result=$this->db->get('postrating')->row();
		
		if(count($row)==0){
		$insert=array
					(	"uemail"=>$this->session->userdata('email'),
						"rid"=>$pstId,
						"ratlike"=>"0"
					);
		$this->db->insert('postrating',$insert);		
		}else
		{
			$this->db->where('rid',$pstId);
			$this->db->where('uemail',$this->session->userdata('email'));
			$this->db->delete('postrating');
		}
		if(count($result)==1)
		{
			$this->db->where('ratlike',1);
			$this->db->where('rid',$pstId);
			$this->db->where('uemail',$this->session->userdata('email'));
			$this->db->delete('postrating');
		}
		
    }public function dislikedata($pstId,$catId)
	{
		$this->db->where('rid',$pstId);
		$this->db->where('ratlike',1);
		$this->db->where('ratlike !=',0);
	    $this->db->where('uemail',$this->session->userdata('email'));
		$row=$this->db->get('postrating')->row();
		
		$this->db->where('rid',$pstId);
		$this->db->where('ratlike',0);
		$this->db->where('uemail',$this->session->userdata('email'));
		$result=$this->db->get('postrating')->row();
		
		if(count($row)==0){
		$insert=array
					(	"uemail"=>$this->session->userdata('email'),
						"rid"=>$pstId,
						"ratlike"=>"1"
					);
		$this->db->insert('postrating',$insert);
		}else
		{
			$this->db->where('rid',$pstId);
			$this->db->where('uemail',$this->session->userdata('email'));
			$this->db->delete('postrating');
		}
		if(count($result)==1)
		{
			$this->db->where('rid',$pstId);
			$this->db->where('ratlike',0);
			
			$this->db->where('uemail',$this->session->userdata('email'));
			$this->db->delete('postrating');
		}
    }
	public function post1($newsId,$catId)
	{
        $this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->where('reporterpost.rpstatus',"Active");
		$this->db->where('reporterpost.cid',$catId);
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(5);
		return $this->db->get()->result();
	}
	  public function recent($newsId,$catId)
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
			$this->db->where('reporterpost.postdatereg',$recent);
			$this->db->where('reporterpost.cid',$catId);
			$this->db->distinct('reporterpost.repid');
		    $this->db->order_by('reporterpost.rid','desc');
			$this->db->limit(5);
			return $this->db->get()->result();	
		
	}
	public function weekly($newsId,$catId)
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
			$this->db->where('reporterpost.cid',$catId);
			$this->db->where('reporterpost.postdatereg >=',$recent);
		    $this->db->distinct('reporterpost.repid');
			$this->db->limit(5);
			 return $this->db->get()->result();	
	}
	public function monthly($newsId,$catId)
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
			$this->db->where('reporterpost.cid',$catId);
			$this->db->where('reporterpost.postdatereg >=',$recent);
			$this->db->distinct('reporterpost.repid');
			$this->db->limit(5);
			return $this->db->get()->result();	
	}	
}
?>