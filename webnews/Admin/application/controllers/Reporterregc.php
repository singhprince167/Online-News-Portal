<?php
class Reporterregc extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Reporterregm');
			$this->load->model('ReporterchatM');
		
	}
	public function index()
	{
		$file['page']="mypost/reporterpost";
		$this->load->view('reportertemp/content',$file);
	}	
	
	public function login()
	{
		$email=$this->input->post('email');
	    $pass=$this->input->post('pass');
		$file['row']=$this->Reporterregm->logindata();
		
		if($file['row'] != "")
		{	
			$rname=$file['row']->rname;
			$rimg=$file['row']->rimage;
			$reporterid=$file['row']->repid;
			$this->session->set_userdata('reporterid',$reporterid);
			$this->session->set_userdata('reporteremail',$email);
			$this->session->set_userdata('reportername',$rname);
			$this->session->set_userdata('reporterimage',$rimg);
			redirect('Reporterregc/home');	
		}
		else
		{
			$file['error']="<p style='color:red;'>Invalid username and password</p>";
			$this->load->view('login/login',$file);	
		}		
		
	
	}
	public function home()
	{
		
		if($this->session->userdata('reporteremail')!="") 
		{
		 $email=$this->session->userdata('reporteremail');
		 $this->db->where('remail',$email);
		 $file['get']=$this->db->get('reporterreg')->row();
		 $this->db->limit(6);
		 $file['allNews']=$this->Reporterregm->getreporterAlldata();
		 $file['getdata']=$this->Reporterregm->getreporterdata();
		// $file['rchat']=$this->ReporterchatM->getchat();
		 $file['page']="dashboard1/home";
		 $this->load->view('reportertemp/content',$file);
		 }
		 else
		 {
			 redirect('Adminc/');
	     }
		
	}
	public function logout()
	{
		$this->session->unset_userdata('reporteremail');
		$this->session->unset_userdata('reporterid');
		$this->session->unset_userdata('reportername');
		$this->session->unset_userdata('reporterimage');
		redirect('Adminc/');	
	}
	
}



?>