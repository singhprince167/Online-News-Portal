<?php
class Reporterc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profilem');
		$this->load->model('Reporterm');
			
			
	}
	public function index()
	{
		$file['imgerr']="";
		$file['get']=$this->Reporterm->getreporterdata();
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['page']="reporterreg/reporter";
		$this->load->view('template/content',$file);	
	}
	public function reporterins()
	{
		
		$file['imgerr']="";
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		//$file['category']=$this->Categorym->getcatgdata();
		$file['page']="reporterreg/addreporter";
		$this->load->view('template/content',$file);
	}
	public function insert()
	{
		
		$this->Reporterm->insertdata();
	}
	public function Reporterdel($id)
	{
		$this->Reporterm->reporetrdeldata($id);
		redirect('Reporterc');	
	}
    public function Reporteredit($id)
	{
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['edit']=$this->Reporterm->reporteditdata($id);
		//$file['category']=$this->Categorym->getcatgdata();
		$file['page']="reporterreg/editreporter";
		$this->load->view('template/content',$file);
	}
	public function update($id)
	{
		$this->Reporterm->updatedata($id);
		redirect('Reporterc');	
	}
	public function muldel()
	{
		$this->Reporterm->multipledel();
	}
	public function status($id)
	{
		$this->Reporterm->statusUpdate($id);
	}
	
}