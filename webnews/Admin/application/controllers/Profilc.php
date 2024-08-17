<?php 
class Profilc extends CI_Controller
{	public function __construct()
	{
		parent ::__construct();
		$this->load->model('Rprofilem');			
	}
	public function profile()
	{
		$email=$this->session->userdata('reporteremail');
		$this->db->where('remail',$email);
		$file['get']=$this->db->get('reporterreg')->row();

	
		$file['data']=$this->Rprofilem->profile();
		$file['page']="reporterprofile/profile";
		$this->load->view('reportertemp/content',$file);	
	}
	public function setpicture()
	{

		$this->Rprofilem->setpic();	
		
	}
	public function updateprofile($id)
	{
		$email=$this->session->userdata('reporteremail');
		$this->db->where('remail',$email);
		$file['get']=$this->db->get('reporterreg')->row();

		$file['page']="reporterprofile/editprofile";
		$this->load->view('reportertemp/content',$file);
		
	}
	public function updatepro($id)
	{
		$this->Rprofilem->updatedata($id);
		redirect('Profilc/profile');
    }
} 
?>