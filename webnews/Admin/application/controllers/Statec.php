<?php
class Statec extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profilem');
		$this->load->model('Statem');
		$this->load->model('Countrym');
		
	}
	public function index()
	{
	    $file['getstate']=$this->Statem->getstate();
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['page']="state/state";
		$this->load->view('template/content',$file);
	}
	public function statedel($sid)
	{
		$this->Statem->statedeldata($sid);	
		redirect('Statec');
	}
	public function stateins()
	{
		
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['country']=$this->Countrym->getcountry();
		$file['page']="state/addstate";
		$this->load->view('template/content',$file);
	}
	public function stateinsert()
	{
		
		$this->Statem->stateinsertdata();
	}
	public function stateedit($sid)
	{
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['country']=$this->Countrym->getcountry();
		$file['edit']=$this->Statem->stateeditdata($sid);
		$file['page']="state/editstate";
		$this->load->view('template/content',$file);
	}
	public function stateupdate($sid)
	{
			$this->Statem->stateupdatedata($sid);
			redirect('Statec');
	}
	
	
	public function muldel()
	{
		
		$this->Statem->multipledel();
	}
	public function status($id)
	{
		$this->Statem->statusUpdate($id);
	}
	
}
	
?>