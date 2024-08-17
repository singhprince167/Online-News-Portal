<?php
class Reporterchatc extends CI_Controller
{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('ReporterchatM');
			$this->load->model('Reportpostm');
			$this->load->model('Adminm');
			
		}
		public function index()
		{
		
			$file['getadmin']=$this->db->get('admin_register')->result();
		    $file['get']=$this->db->get('reporterreg')->row();
		//	$file['report']=$this->Reportpostm->getreporterdata();
			//$file['msg']=$this->db->get('reporterreg')->result();
			$file['rchat']=$this->ReporterchatM->getchat();
			$file['page']="Reporterchat/rchat";
		   $this->load->view('reportertemp/content',$file);
		}
		public function insert()
		{
		   
		    $this->ReporterchatM->insertdata();
			redirect('Reporterchatc');
		}
		
		
		
}
?>