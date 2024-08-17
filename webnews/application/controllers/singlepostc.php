<?php
class singlepostc extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('singlepostModel');
		$this->load->model('Newsmodel');
		$this->load->model('Feedbackmodel');
		
		
	}
	
	public function single($newsId,$catId)
	{
		$file['category']=$this->Newsmodel->getmenu();
        $file['comment']=$this->Feedbackmodel->commentcount();		
		$file['menuRelated']=$this->Newsmodel->menuRelated();
		$file['subcategoryMenu']=$this->Newsmodel->subcategoryMenu();		
		$file['singleData']=$this->singlepostModel->singlePost($newsId,$catId);
      	$file['relatedData']=$this->singlepostModel->relatedPost($newsId,$catId);
		$file['gallery']=$this->Newsmodel->gallery();
		$file['feature']=$this->singlepostModel->post1($newsId,$catId);
		$file['Recent']=$this->singlepostModel->recent($newsId,$catId);
		$file['Weekly']=$this->singlepostModel->weekly($newsId,$catId);
		$file['Monthly']=$this->singlepostModel->monthly($newsId,$catId);
		
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
		$file['page']="dashboard/allSinglePost";
	    $this->load->view('template/content',$file);
	}
	public function loadmoredata($id)
	{	//echo $id;
		$file['loadMoreData']=$this->singlepostModel->loaddata($id);
		//print_r($file['loadMoreData']);//
		$this->load->view('dashboard/loadmoredata',$file);
		
	}
	public function like($pstId,$catId)
	{
    	$this->singlepostModel->likedata($pstId,$catId);
	    redirect("singlepostc/single/".$pstId."/".$catId);
		
    }
	 public function dislike($pstId,$catId)
	{
	   $this->singlepostModel->dislikedata($pstId,$catId);
	   redirect("singlepostc/single/".$pstId."/".$catId);
		
		
     }
	
}
?>