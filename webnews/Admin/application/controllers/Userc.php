<?php
class Userc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Userm');
		$this->load->model('Profilem');
			
	}
	public function index()
	{
		$file['getuser']=$this->Userm->userdata();
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['page']="userreg/user";
		$this->load->view('template/content',$file);	
	}
	
	public function userdel($id)
	{
		$this->Userm->userdeldata($id);
		redirect('Userc');	
	}
    public function update($id)
	{
		$this->Userm->updatedata($id);
		redirect('Userc');	
	}
	public function muldel()
	{
		
		$this->Userm->multipledel();
	}
	public function status($id)
	{
		$this->Userm->statusUpdate($id);
	}
}