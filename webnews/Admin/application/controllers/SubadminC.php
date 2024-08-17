<?php
class SubadminC extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('subAdminm');
		$this->load->model('Profilem');
	}
	public function index()
	{
		if(($this->session->userdata('email')!="")&& ($this->session->userdata('password')!="")) 
		 {
			$file['subAdmin']=$this->subAdminm->selectSub();
		   	$file['data']=$this->Profilem->profile(); 
	        $file['progress']=$this->Profilem->profileprogress();
			$file['page']="Admin/subAdmin";
			$this->load->view("template/content",$file);
		
		 }
		 else
		 {
			 redirect('Adminc/login');
	     }
	}
	public function deleteSub()
	{
		$this->subAdminm->deleteSub();
		
	}
	public function status($id)
	{
		$this->subAdminm->statusUpdate($id);
	}
	
	
	
}
?>