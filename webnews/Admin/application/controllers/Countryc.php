<?php
class Countryc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profilem');
		$this->load->model('Countrym');
		
	}
	public function index()
	{
	    $file['getcountry']=$this->Countrym->getcountry();
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();	
		$file['page']="country/country";
		$this->load->view('template/content',$file);
	  
	}
	public function countrydel($id)
	{
		$this->Countrym->countrydeldata($id);	
		redirect('Countryc');
	}
	
	public function countryedit($id)
	{
		$file['edit']=$this->Countrym->countryeditdata($id);
		$file['data']=$this->Profilem->profile(); 
		$file['page']="country/editcountry";
		$this->load->view('template/content',$file);	
	}
	public function countryupdate($id)
	{
		$this->Countrym->countryupdatedata($id);
		redirect('Countryc');
		
	}
	public function countryins()
	{
		
		$file['data']=$this->Profilem->profile(); 
		$file['page']="country/addcountry";
		$this->load->view('template/content',$file);
	}
	public function countryinsert()
	{
		
		$this->Countrym->cntryinsert();
	}
	public function muldel()
	{
		
		$this->Countrym->multipledel();
	}
	public function status($id)
	{
		$this->Countrym->statusUpdate($id);
	}
}

?>