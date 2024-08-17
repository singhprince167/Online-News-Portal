<?php
class Subcategoryc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profilem');
		$this->load->model('Subcategorym');
		$this->load->model('Categorym');
		if($this->session->userdata('email')=="")
		{
			$file['page']="login/login";
		    $this->load->view('template/content',$file); 
		}	
			
	}
	public function index()
	{
	    $file['getsub']=$this->Subcategorym->getsubcatgdata();
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['page']="subcategory/subcategory";
		$this->load->view('template/content',$file);
	}
	public function subcatgdel($sid)
	{
		$this->Subcategorym->subdeldata($sid);	
		redirect('Subcategoryc');
	}
	public function subcatgedit($sid)
	{
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['category']=$this->Categorym->getcatgdata();
		$file['edit']=$this->Subcategorym->subeditdata($sid);
		$file['page']="subcategory/subcategoryedit";
		$this->load->view('template/content',$file);
	}
	public function subupdate($sid)
	{
			$this->Subcategorym->subupdatedata($sid);
			redirect('Subcategoryc');
	}
	public function subcatgins()
	{
		
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['category']=$this->Categorym->getcatgdata();
		$file['page']="subcategory/addsubcategory";
		$this->load->view('template/content',$file);
	}
	public function subcatginsert()
	{
		
		$this->Subcategorym->subcatinsert();
	}
	public function muldel()
	{
		
		$this->Subcategorym->multipledel();
	}
	public function status($id)
	{
		$this->Subcategorym->statusUpdate($id);
	}
	
}
	
?>