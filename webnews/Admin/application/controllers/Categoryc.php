<?php
class Categoryc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profilem');
		$this->load->model('Categorym');
		
	}
	public function index()
	{
	    $file['getdata']=$this->Categorym->getcatgdata();
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();	
		$file['page']="category/category";
		$this->load->view('template/content',$file);
	  
	}
	public function catgdel($cid)
	{
		$this->Categorym->catdeldata($cid);	
		redirect('Categoryc');
	}
	
	public function catgedit($cid)
	{
		$file['edit']=$this->Categorym->cateditdata($cid);
		$file['data']=$this->Profilem->profile(); 
		$file['page']="category/categoryedit";
		$this->load->view('template/content',$file);	
	}
	public function catgupdate($cid)
	{
		$this->Categorym->catupdatedata($cid);
		
		redirect('Categoryc');
	}
	public function catgins()
	{
		
		$file['data']=$this->Profilem->profile(); 
		$file['page']="category/addcategory";
		$this->load->view('template/content',$file);
	}
	public function catginsert()
	{
		
		$this->Categorym->catinsert();
	}
	public function muldel()
	{
		
		$this->Categorym->multipledel();
	}
	public function status($id)
	{
		$this->Categorym->statusUpdate($id);
	}
}

?>