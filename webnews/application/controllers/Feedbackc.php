<?php
class Feedbackc extends CI_controller
{
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Feedbackmodel');
		$this->load->model('Newsmodel');
		$this->load->model('singlepostModel');
		$this->load->model('menudatModel');
	}	
	public function insert($rid,$cid)
	{
		
	  $this->Feedbackmodel->insertdata($rid,$cid);
	  redirect('singlepostc/single/'.$rid."/".$cid);
	}
	public function getcomment()
	{
		$file['comment']=$this->Feedbackmodel->commentcount();
		
	}
		
	
	
}



?>