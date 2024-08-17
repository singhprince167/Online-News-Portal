<?php
class Contactc extends CI_Controller 
{
	public function __construct()
     {
		parent::__construct();
		$this->load->model('Newsmodel');
	}
	
	public function index()
	{
       $file['category']=$this->Newsmodel->getmenu();
	   $file['menuRelated']=$this->Newsmodel->menuRelated();
	   $file['page']="contact/contact";
	   $this->load->view('template/content',$file);	
		
	 
	   
	   
	  
	}
}
?>