<?php
class Galleryc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Adminm');
		$this->load->model('Profilem');
		$this->load->model('Gallerym');
		
	}
	public function index()
	{
		$file['data']=$this->Profilem->profile(); 
		$file['get']=$this->Adminm->getadmindata();
		$file['progress']=$this->Profilem->profileprogress();
		$folder=$this->session->userdata('id');
		$file['image']=glob("gallery/".$folder."/*.*");
		$file['page']="profile/gallery";
		$this->load->view('template/content',$file);
	}
	public function move($name)
	{
			$this->Gallerym->remove($name);
	}
	
	
	
			
}
?>