<?php
class Postratingc extends CI_Controller 
{
	public function __construct()
	{
	    parent::__construct();
		$this->load->model('Postratingm');
		$this->load->model('Profilem');

	}
	public function index()
	{
		
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['getrating']=$this->Postratingm->getrating();
		$file['page']="postrating/postrating";
		$this->load->view('template/content',$file);	
	}
	public function muldel()
	{
		$this->Ratingm->multipledel();	
	}
	public function status($id)
	{
		$this->Ratingm->statusUpdate($id);
	}
}
?>