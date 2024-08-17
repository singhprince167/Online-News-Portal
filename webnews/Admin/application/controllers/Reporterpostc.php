<?php
class Reporterpostc extends CI_Controller 
{
	public function __construct()
	{
	    parent::__construct();
		$this->load->model('Profilem');
		$this->load->model('Reporterm');
		$this->load->model('Reporterpostm');
	
	}
	public function index()
	{
		$file['getreport']=$this->Reporterpostm->getreporterdata();
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		//$file['reporter']=$this->Categorym->getcatgdata();
		$file['page']="reporterpost/reporterpost";
		$this->load->view('template/content',$file);	
	}
	/*public function reporterins()
	{
		
		$file['imgerr']="";
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
	//	$file['category']=$this->Categorym->getcatgdata();
		$file['page']="reporterpost/addreporterpost";
		$this->load->view('template/content',$file);
	}*/
	public function insert()
	{
		$file['imgerr']="";
		$this->Reporterpostm->insertdata();	
		redirect('Reporterpostc');
	}
	public function postdel($pid)
	{
		$this->Reporterpostm->deldata($pid);	
		redirect('Reporterpostc');
	}
	public function postedit($pid)
	{
		$file['imgerr']="";
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		//$file['category']=$this->Categorym->getcatgdata();
		$file['edit']=$this->Reporterpostm->editdata($pid);
		$file['page']="reporterpost/editreporterpost";
		$this->load->view('template/content',$file);
	}
	public function postupdate($pid)
	{
			$this->Reporterpostm->updatedata($pid);
			redirect('Reporterpostc');
	}
	public function muldel()
	{
		
		$this->Reporterpostm->multipledel();
	}
    public function status($id)
	{
		$this->Reporterpostm->statusUpdate($id);
	}
	
	
	
}
?>