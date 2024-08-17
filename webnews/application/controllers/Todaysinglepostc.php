<?php
class Todaysinglepostc extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('TodaysinglepostModel');
		$this->load->model('singlepostModel');
		$this->load->model('Newsmodel');
		$this->load->model('Feedbackmodel');
	}
	
	public function single($newsId)
	{
	   
		$file['category']=$this->Newsmodel->getmenu();
        $file['comment']=$this->Feedbackmodel->commentcount();		
		$file['menuRelated']=$this->Newsmodel->menuRelated();
	    $file['subcategoryMenu']=$this->Newsmodel->subcategoryMenu();		
		$file['singleData']=$this->TodaysinglepostModel->singlePost($newsId);
      	$file['relatedData']=$this->TodaysinglepostModel->relatedPost($newsId);
		$file['gallery']=$this->Newsmodel->gallery();
		$file['feature']=$this->TodaysinglepostModel->post1($newsId);
		$file['Recent']=$this->TodaysinglepostModel->recent($newsId);
		$file['Weekly']=$this->TodaysinglepostModel->weekly($newsId);
		$file['Monthly']=$this->TodaysinglepostModel->monthly($newsId);
		
			$this->db->where('ratlike',0);
			$this->db->where('rid',$newsId);
			$mycnt=$this->db->get('postrating')->result();
			 
			 $like=0;
			foreach($mycnt as $row)
			{
		 		if($row->ratlike==0)
				{
					$like++;
				}
			}
		$file['like']=$like;
		$this->db->where('ratlike',1);
		$mycnt2=$this->db->get('postrating')->result();
			 $dislike=0;
			foreach($mycnt as $row)
			{
		 		if($row->ratlike==1)
				{
					$like++;
				}
			}
	     $file['dislike']=$dislike;
		$file['page']="today/todaysinglepost";
	    $this->load->view('template/content',$file);
	}
		
	public function loadmoredata($id)
	{	//echo $id;
		$file['loadMoreData']=$this->TodaysinglepostModel->loaddata($id);
		//print_r($file['loadMoreData']);//
		$this->load->view('dashboard/loadmoredata',$file);
		
	}
	public function like($newsId)
	{
    	$this->singlepostModel->likedata($newsId);
	    redirect("singlepostc/single/".$newsId);
		
    }
	 public function dislike($newsId)
	{
	   $this->singlepostModel->dislikedata($newsId);
	   redirect("singlepostc/single/".$newsId);
		
		
     }
	
	
}
?>