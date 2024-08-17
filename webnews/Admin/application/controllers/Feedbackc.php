<?php
class Feedbackc extends CI_Controller 
{
	public function __construct()
	{
	    parent::__construct();
		$this->load->model('Feedbackm');
		$this->load->model('Profilem');
	}
	public function index()
	{
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['getfeedback']=$this->Feedbackm->getfeedback();
		$file['page']="feedback/feedback";
		$this->load->view('template/content',$file);	
	}
	 public function status($id)
	{
		$this->Feedbackm->statusUpdate($id);
	}
	public function delete($id)
	{
		$this->Feedbackm->deldata($id);
      }
}
?>