<?php
class Todaynewsc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profilem');
		$this->load->model('Categorym');
		$this->load->model('Subcategorym');
		$this->load->model('Todaynewsm');
	}
	public function index()
	{
	   	$file['get']=$this->Todaynewsm->gettodaynewsdata();
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['category']=$this->Categorym->getcatgdata();
		$file['page']="todaynews/todaynews";
		$this->load->view('template/content',$file);
	}
	public function todayins()
	{
		$file['imgerr']="";
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['category']=$this->Categorym->getcatgdata();
		$file['page']="todaynews/addtodaynews";
		$this->load->view('template/content',$file);
	}
	public function insert()
	{
		$this->Todaynewsm->insertdata();
		redirect('Todaynewsc');	
		
	}
	public function todaynewsdel($tid)
	{
		$this->Todaynewsm->deldata($tid);
		redirect('Todaynewsc');	
	}
	public function todaynewsedit($tid)
	{
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['category']=$this->Categorym->getcatgdata();
		$file['edit']=$this->Todaynewsm->newseditdata($tid);
		
		$file['page']="todaynews/edittodaynews";
		$this->load->view('template/content',$file);
	}
	public function newsupdate($tid)
	{
		$this->Todaynewsm->updatedata($tid);
		redirect('Todaynewsc');	
	}
	public function muldel()
	{
		
		$this->Todaynewsm->multipledel();
	}
	public function status($id)
	{
		$this->Todaynewsm->statusUpdate($id);
	}	
	
	

	
}

?>