<?php
class Adminc extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Adminm');
		$this->load->model('Profilem');
		$this->load->model('Reporterchatm');
	}
	public function index()
	{

		$file['error']="";
		if(($this->session->userdata('email')=="")&& ($this->session->userdata('password')=="")) 
		{
		    $this->load->view('login/login',$file);  
		}
		else if( $this->session->userdata('password')=="")
		{
			redirect('Adminc/lock');
		}
		 else
		 {
			redirect('Adminc/home');	 
		 }
	
	}
	
	public function signup()
	{
		$this->load->view('login/signup'); 
	}	
	public function insert()
	{
		$this->Adminm->insertdata();
	}
	public function login()
	{	
	    $file['error']="";
		$email=$this->input->post('email');
	    $pass=$this->input->post('pass');
		$file['row']=$this->Adminm->logindata();
		$file['row2']=$this->Adminm->logindata2();
	
		if(count($file['row2']) > 0)
		{
			$id=$file['row']->Aid;
			$priority=$file['row']->priority;

			$this->session->set_userdata('priority',$priority);
			$this->session->set_userdata('email',$email);
			$this->session->set_userdata('password',$pass);
			$this->session->set_userdata('id',$id);
			redirect('Adminc/home');	
		}
		else
		{
			$file['error']="<p style='color:red;'>Invalid username and password</p>";
			$this->load->view('login/login',$file);	
		}
	}
	
	public function checkemail()
	{
			$chkemail=$this->input->post('email');
		    if($chkemail=="")
			{
				echo "plz enter correct email address";	
			}
			else
			{
				$this->db->where('Aemail',$chkemail);	
				$row=$this->db->get('admin_register')->row();
				if(count($row) > 0)
				{
					$this->session->set_userdata('forgetemail',$chkemail);
					$this->load->view('login/setpass');	
				}
				else
				{
					echo "invalid";
				}
			}
		
	}
	public function home()
	{
			
		   	$file['data']=$this->Profilem->profile(); 
	        $file['progress']=$this->Profilem->profileprogress();
			$file['rchat']=$this->Reporterchatm->getchat();
			$file['page']="dashboard/home";
			$this->load->view('template/content',$file);
	}
	public function forgetpass()
	{
	  $this->load->view('login/forgot');	
	}
	public function forgot()
	{
		$this->load->view('login/setpass');	
	}
	public function updatepass()
	{
		$this->Adminm->updatedata();
		
	}
	public function logout()
	{
		
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');
		redirect('Adminc');
	}
	
}
?>