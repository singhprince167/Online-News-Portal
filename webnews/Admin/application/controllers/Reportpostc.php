<?php
class Reportpostc extends CI_Controller
{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Reportpostm');
			$this->load->model('Reporterregm');
			$this->load->model('Categorym');
			$this->load->model('Subcategorym');
			$this->load->model('Citym');
			$this->load->model('allNewsm');
			$this->load->model('ReporterchatM');
			
			
		}
		public function index()
		{
		    $email=$this->session->userdata('reporteremail');
		    $this->db->where('remail',$email);
		    $file['get']=$this->db->get('reporterreg')->row();
			//$file['adminmsg']=$this->Chatm->getchat();	
			$file['rchat']=$this->ReporterchatM->getchat();
		    $file['getdata']=$this->Categorym->getcatgdata();
			$file['report']=$this->Reportpostm->getreporterdata();
			$file['getcity']=$this->Citym->getcity();
		    $file['allNewsdata']=$this->allNewsm->allNewsdata();
			$file['getreporterdata']=$this->db->get('reporterreg')->result();
			$file['page']="mypost/reporterpost";
			$this->load->view('reportertemp/content',$file);
		}
		
		public function recentNews()
		{	 
		    
			$file['get']=$this->db->get('reporterreg')->row();
			$file['recentNews']=$this->allNewsm->recentnews();
			//$file['adminmsg']=$this->Chatm->getchat();
			$file['rchat']=$this->ReporterchatM->getchat();
		   	$file['page']="mypost/recentpost";
			$this->load->view('reportertemp/content',$file);
		}
		public function WeekNews()
		{	
		    $file['get']=$this->db->get('reporterreg')->row();
			$file['weekNews']=$this->allNewsm->weeklynews();
			//$file['adminmsg']=$this->Chatm->getchat();
			$file['rchat']=$this->ReporterchatM->getchat();
		   $file['page']="mypost/Weeklypost";
			$this->load->view('reportertemp/content',$file);
		}
		public function MonthNews()
		{	
		    $file['get']=$this->db->get('reporterreg')->row();
			$file['monthNews']=$this->allNewsm->monthlyNews();
			$file['rchat']=$this->ReporterchatM->getchat();
		    $file['page']="mypost/Monthlypost";
			$this->load->view('reportertemp/content',$file);
		}
		public function sports($string)
	    {
		$email=$this->session->userdata('reporteremail');
		$this->db->where('remail',$email);
		$file['get']=$this->db->get('reporterreg')->row();
        $file['getdata']=$this->Categorym->getcatgdata();
		$file['getrepo']=$this->Reportpostm->getsports($string);
		$file['rchat']=$this->ReporterchatM->getchat();
		//$file['adminmsg']=$this->Chatm->getchat();
		$file['page']="dashboard1/sports"; 
		$this->load->view('reportertemp/content',$file);
		
	    }
		public function Entertainment($string)
	    {
		$email=$this->session->userdata('reporteremail');
		$this->db->where('remail',$email);
		$file['get']=$this->db->get('reporterreg')->row();
		$file['getdata']=$this->Categorym->getcatgdata();
		$file['getrepo']=$this->Reportpostm->getentertainment($string);
		$file['rchat']=$this->ReporterchatM->getchat();
		//$file['adminmsg']=$this->Chatm->getchat();
		$file['page']="dashboard1/Entertainment"; 
		$this->load->view('reportertemp/content',$file);
		
	   }
	  public function education($string)
	 {
		$email=$this->session->userdata('reporteremail');
		$this->db->where('remail',$email);
		$file['get']=$this->db->get('reporterreg')->row();
		$file['getdata']=$this->Categorym->getcatgdata();
		$file['getrepo']=$this->Reportpostm->geteducation($string);
		//$file['adminmsg']=$this->Chatm->getchat();
		$file['page']="dashboard1/education"; 
		$this->load->view('reportertemp/content',$file);	
		
	}
	public function postins()
		{
			$file['imgerr']="";
			$email=$this->session->userdata('reporteremail');
		    $this->db->where('remail',$email);
		    $file['get']=$this->db->get('reporterreg')->row();
			$file['category']=$this->Categorym->getcatgdata();
			$file['subcategory']=$this->Subcategorym->getsubcatgdata();
			$file['report']=$this->Reportpostm->getreporterdata();
			$file['getcity']=$this->Citym->getcity();
			$file['rchat']=$this->ReporterchatM->getchat();
			$file['getdata']=$this->db->get('reporterreg')->row();
		//	$file['adminmsg']=$this->Chatm->getchat();
	        $file['page']="mypost/addreporterpost";
			$this->load->view('reportertemp/content',$file);
		}
		public function subcategory($id)
	   {
	     	$this->db->where('cid',$id);
		    $result=$this->db->get('subcategory')->result();
		   foreach($result as $row)
		   {	
		?>
            <option value="<?php echo $row->sid ?>"><?php echo $row->sname ?></option>
        <?php
		}
	}
	public function editsubcategory($id)
	{
		$this->db->where('cid',$id);
		$result=$this->db->get('subcategory')->result();
		foreach($result as $row)
		{	
		?>
            <option value="<?php echo $row->sid ?>"><?php echo $row->sname ?></option>
        <?php
		}
	}

		public function insert()
		{
			$this->Reportpostm->insertdata();
		}
		public function postdel($pid)
	   {
		$this->Reportpostm->deldata($pid);	
		redirect('Reportpostc');
	}
	public function postedit($pid)
	{		   
	        $email=$this->session->userdata('reporteremail');
		    $this->db->where('remail',$email);
		    $file['get']=$this->db->get('reporterreg')->row();
			$file['category']=$this->Categorym->getcatgdata();
			$file['report']=$this->Reportpostm->getreporterdata();
			$file['subcategory']=$this->Subcategorym->getsubcatgdata();
			$file['getcity']=$this->Citym->getcity();
			$file['rchat']=$this->ReporterchatM->getchat();
			
			//$file['adminmsg']=$this->Chatm->getchat();
			$file['getdata']=$this->db->get('reporterreg')->row();
	        $file['edit']=$this->Reportpostm->editdata($pid);
		    $file['page']="mypost/editreporterpost";
			$this->load->view('reportertemp/content',$file);
	}
	public function postupdate($pid)
	{
			$this->Reportpostm->updatedata($pid);
			
	}
	public function muldel()
	{
		
		$this->Reportpostm->multipledel();
	}
	public function status($id)
	{
		$this->Reportpostc->statusUpdate($id);
	}
	public function loadmoredata($id)
	{	
	    $file['loadMoreData']=$this->Reportpostm->loaddata($id);
		$this->load->view('dashboard1/loadmoredata',$file);
	}
}

?>