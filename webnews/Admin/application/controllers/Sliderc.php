<?php
class Sliderc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sliderm');
		$this->load->model('Profilem');	
		$this->load->model('Categorym');	
		//$this->load->model('Reportpostm');
		
		//$this->load->model('singlepostModel');
	}
	public function index()
	{
		 $file['imgerr']="";
		 
		$file['data']=$this->Profilem->profile();
		$file['progress']=$this->Profilem->profileprogress();
		$file['getslider']=$this->Sliderm->getslider();
		$file['category']=$this->Categorym->getcatgdata();
		$file['page']="slider/slider";
		$this->load->view('template/content',$file);
		
	}
	public function sliderins()
	{
	   
	   
	    $file['imgerr']="";
	    $file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['category']=$this->Categorym->getcatgdata();
	//	$file['report']=$this->Reportpostm->getreporterdata();
		$file['page']="slider/addslider";
		$this->load->view('template/content',$file);
	}
	public function insert()
	{
		$this->Sliderm->insertdata();	
		
	}
	public function sliderdel($id)
	{
		$this->Sliderm->sliderdeldata($id);
		redirect('Sliderc');
			
	}
    public function slideredit($id)
	{
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['category']=$this->Categorym->getcatgdata();
		$file['edit']=$this->Sliderm->slidereditdata($id);
		$file['page']="slider/editslider";
		$this->load->view('template/content',$file);
	}
	public function update($id)
	{
		$this->Sliderm->updatedata($id);
		redirect('sliderc');
			
	}
	public function muldel()
	{
		$this->Sliderm->multipledel();
		redirect('Sliderc');
	}
	
	public function status($id)
	{
		$this->Sliderm->statusUpdate($id);
	}
}
?>