<?php
class Newsmodel extends CI_Model
{
	public function menuRelated()
	{
		$this->db->where('rpstatus',"Active");
		
		$this->db->order_by('reporterpost.rid','desc');
		///$this->db->group_by('reporterpost.rid');
		//$this->db->limit(8);
		return $this->db->get('reporterpost')->result();
	}
	public function getmenu()
	{
		$this->db->where('catgstatus',"Active");
		$this->db->order_by('category.cid','asc');
		$this->db->limit(8);
		return $this->db->get('category')->result();
	}
	public function subcategoryMenu()
	{
		$this->db->where('subcatgstatus',"Active");
		
		return $this->db->get('subcategory')->result();	
		
	}
	
	public function features()
	{
		
		$this->db->from('reporterpost');
		$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('postdatereg',date('Y-m-d'));
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit('5');
		return $this->db->get()->result();
			
	} 
	public function travelnews()
	{
		$this->db->from('category');
		$this->db->join('subcategory','subcategory.cid=category.cid');
		$this->db->join('reporterpost','reporterpost.sid=subcategory.sid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','Travel');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(1);
		return $this->db->get()->row();
	}
	public function sports()
	{
		$this->db->from('category');
		$this->db->join('subcategory','subcategory.cid=category.cid');
		$this->db->join('reporterpost','reporterpost.sid=subcategory.sid');
		$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','sports');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(1);
		return $this->db->get()->row();
		
	}
	public function slider()
	{
		
		$this->db->from('category');
		$this->db->join('slider','slider.cid=category.cid');
		$this->db->where('sliderstatus',"Active");
		$this->db->order_by('slider.sliderid','desc');
		$this->db->limit(3);
		return $this->db->get()->result();
	}
	public function featurepost()
	{
		$this->db->from('reporterpost');
		$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		$this->db->where('rpstatus',"Active");
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(3);
		return $this->db->get()->result();
		
	}
	public function life()
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','Lifestyle');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(1);
		return $this->db->get()->row();
	}
	public function lifestyle()
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','Lifestyle');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(3);
		return $this->db->get()->result();
	}
	public function gallery()
	{
		
		$this->db->where('tstatus',"Active");
		$this->db->order_by('todaynews.tid','desc');
		$this->db->limit(5);
		return $this->db->get('todaynews')->result();
		
	}
	
	public function breakingnews()
	{
		
		$this->db->where('bstatus',"Active");
		$this->db->order_by('breakingnews.bid','desc');
		$this->db->limit(3);
		return $this->db->get('breakingnews')->result();
	}
	public function education()
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','Education');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(1);
		return $this->db->get()->row();
	
	}
	
	public function politics()
	{
		$this->db->from('category');
		
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','Politics');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(1);
		return $this->db->get()->row();
	
	}
	public function fashion()
	{
		$this->db->from('category');
		$this->db->join('subcategory','subcategory.cid=category.cid');
		$this->db->join('reporterpost','reporterpost.sid=subcategory.sid');
		$this->db->where('catgname','Fashion');
		$this->db->where('rpstatus',"Active");
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(1);
		return $this->db->get()->row();
	}
	public function Educations()
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','Education');
		$this->db->order_by('reporterpost.rid','desc');
	    $this->db->limit(3);
		return $this->db->get()->result();
	}
	
	public function tech()
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','Tech');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(1);
		return $this->db->get()->row();
	}
	public function tech1()
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','Tech');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(3);
		return $this->db->get()->result();
	}
	public function world()
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','World');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(5);
		return $this->db->get()->result();
	}
	public function entertainment()
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','Entertainment');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(1);
		return $this->db->get()->row();
	}
	public function entertain()
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','Entertainment');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(3);
		return $this->db->get()->result();	
	}
	public function sports1()
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->where('rpstatus',"Active");
		$this->db->where('catgname','sports');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(3);
		return $this->db->get()->result();	
	}
	public function article()
	{
		$this->db->from('category');
		$this->db->join('reporterpost','reporterpost.cid=category.cid');
		$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');

		$this->db->where('rpstatus',"Active");
	//	$this->db->where('catgname','Articles');
		$this->db->order_by('reporterpost.rid','desc');
		$this->db->limit(6);
		return $this->db->get()->result();	
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
			$this->db->join('subcategory','subcategory.sid=reporterpost.sid');
			$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
			$this->db->join('city','city.cityid=reporterpost.cityid');
			$this->db->where('reporterpost.postdatereg',$recent);
			$this->db->distinct('reporterpost.repid');
		    $this->db->order_by('reporterpost.rid','desc');
			$this->db->limit(5);
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
			//$this->db->where('reporterpost.repid',$reporterid);
			$this->db->where('reporterpost.postdatereg >=',$recent);
		    $this->db->distinct('reporterpost.repid');
			$this->db->limit(5);
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
			$this->db->where('reporterpost.postdatereg >=',$recent);
			$this->db->distinct('reporterpost.repid');
			$this->db->limit(5);
			return $this->db->get()->result();
	}	
	
}

?>