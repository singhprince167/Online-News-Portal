<?php 
class Subscriberc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Subscribermodel');
	
			
	}
	public function index()
	{
		$file['page']="dashboard/home";
		$this->load->view('template/content',$file);
	}
	public function sub()
	{
		
		$this->Subscribermodel->insert();
	//	redirect('Newsc');		
	}
	

	
}

?>