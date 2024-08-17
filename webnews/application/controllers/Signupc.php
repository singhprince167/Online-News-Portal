<?php
class Signupc extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Signupmodel');
		$this->load->model('Newsmodel');
		
			
	}
	public function index()
	{
       $file['error']="";
	   $file['category']=$this->Newsmodel->getmenu();
		$file['menuRelated']=$this->Newsmodel->menuRelated();
	   $file['page']="login/signup";
	  $this->load->view('template/content',$file);	
	   
	}
	public function insert()
	{
		$this->Signupmodel->insertdata();
		redirect('Loginc');
		
	}
}
?>