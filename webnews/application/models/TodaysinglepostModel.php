<?php
class TodaysinglepostModel extends CI_Model
{
	public function singlePost($newsId)
	{
		$this->db->from('category');
		$this->db->join('todaynews','todaynews.cid=category.cid');
		$this->db->where('tstatus',"Active");
		$this->db->where('category.cid',$newsId);
		return $this->db->get()->row();
		
	
	}
	public function relatedPost($newsId)
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		//$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		$this->db->where('reporterpost.rpstatus',"Active");
		$this->db->where('reporterpost.cid',$newsId);
		$this->db->order_by('reporterpost.rid','desc');
		return $this->db->get()->result();
		
	}
	public function loaddata($id)
	{
		$this->db->where('tid',$id);
		return $this->db->get('todaynews')->row();
		
	}
	public function likedata($newsId)
	{
		$this->db->where('cid',$newsId);
		$this->db->where('ratlike',0);
		$this->db->where('uemail',$this->session->userdata('useremail'));
		$row=$this->db->get('postrating')->row();
		
		$this->db->where('cid',$newsId);
		$this->db->where('ratlike',1);
		$this->db->where('uemail',$this->session->userdata('useremail'));
		$result=$this->db->get('postrating')->row();
		
		if(count($row)==0){
		$insert=array
					(	"uemail"=>$this->session->userdata('useremail'),
						"cid"=>$newsId,
						"ratlike"=>"0"
					);
		$this->db->insert('postrating',$insert);		
		}else
		{
			$this->db->where('cid',$newsId);
			$this->db->where('uemail',$this->session->userdata('useremail'));
			$this->db->delete('postrating');
		}
		if(count($result)==1)
		{
			$this->db->where('ratlike',1);
			$this->db->where('cid',$newsId);
			$this->db->where('uemail',$this->session->userdata('useremail'));
			$this->db->delete('postrating');
		}
		
    }public function dislikedata($newsId)
	{
		$this->db->where('cid',$newsId);
		$this->db->where('ratlike',1);
		$this->db->where('ratlike !=',0);
	    $this->db->where('uemail',$this->session->userdata('useremail'));
		$row=$this->db->get('postrating')->row();
		
		$this->db->where('cid',$newsId);
		$this->db->where('ratlike',0);
		$this->db->where('uemail',$this->session->userdata('useremail'));
		$result=$this->db->get('postrating')->row();
		
		if(count($row)==0){
		$insert=array
					(	"uemail"=>$this->session->userdata('useremail'),
						"cid"=>$newsId,
						"ratlike"=>"1"
					);
		$this->db->insert('postrating',$insert);
		}else
		{
			$this->db->where('cid',$newsId);
			$this->db->where('uemail',$this->session->userdata('useremail'));
			$this->db->delete('postrating');
		}
		if(count($result)==1)
		{
			$this->db->where('cid',$newsId);
			$this->db->where('ratlike',0);
			
			$this->db->where('uemail',$this->session->userdata('useremail'));
			$this->db->delete('postrating');
		}
    }
	public function post1($newsId)
	{
        $this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->where('reporterpost.rpstatus',"Active");
		$this->db->where('reporterpost.cid',$newsId);
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(5);
		return $this->db->get()->result();
	}
	  public function recent($newsId)
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
			$this->db->where('reporterpost.cid',$newsId);
			$this->db->distinct('reporterpost.repid');
		    $this->db->order_by('reporterpost.rid','desc');
			$this->db->limit(5);
			return $this->db->get()->result();	
		
	}
	public function weekly($newsId)
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
			$this->db->where('reporterpost.cid',$newsId);
			$this->db->where('reporterpost.postdatereg >=',$recent);
		    $this->db->distinct('reporterpost.repid');
			$this->db->limit(5);
			 return $this->db->get()->result();	
	}
	public function monthly($newsId)
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
			$this->db->where('reporterpost.cid',$newsId);
			$this->db->where('reporterpost.postdatereg >=',$recent);
			$this->db->distinct('reporterpost.repid');
			$this->db->limit(5);
			return $this->db->get()->result();	
	}	
}
?>