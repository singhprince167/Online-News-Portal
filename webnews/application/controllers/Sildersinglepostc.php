<?php
class Sildersinglepostc extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SildersinglepostModel');
		$this->load->model('Newsmodel');
		$this->load->model('Feedbackmodel');
	}
	
	public function single($newsId)
	{
	 
		$file['category']=$this->Newsmodel->getmenu();
        $file['comment']=$this->Feedbackmodel->commentcount();		
		$file['menuRelated']=$this->Newsmodel->menuRelated();
	    $file['subcategoryMenu']=$this->Newsmodel->subcategoryMenu();		
		$file['singleData']=$this->SildersinglepostModel->singlePost($newsId);
      	$file['relatedData']=$this->SildersinglepostModel->relatedPost($newsId);
		$file['gallery']=$this->Newsmodel->gallery();
		$file['feature']=$this->SildersinglepostModel->post1($newsId);
		$file['Recent']=$this->SildersinglepostModel->recent($newsId);
		$file['Weekly']=$this->SildersinglepostModel->weekly($newsId);
		$file['Monthly']=$this->SildersinglepostModel->monthly($newsId);
		
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
		$file['page']="slider/sliderpost";
	    $this->load->view('template/content',$file);
	}
		
	public function loadmoredata($id)
	{	//echo $id;
		$file['loadMoreData']=$this->SildersinglepostModel->loaddata($id);
		//print_r($file['loadMoreData']);//
		$this->load->view('dashboard/loadmoredata',$file);
		
	}
	public function like($pstId)
	{
    	$this->singlepostModel->likedata($pstId);
	    redirect("singlepostc/single/".$pstId);
		
    }
	 public function dislike($pstId)
	{
	   $this->singlepostModel->dislikedata($pstId);
	   redirect("singlepostc/single/".$pstId);
		
		
     }
	
	
}
?>