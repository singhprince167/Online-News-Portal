<?php
class Loginc extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Loginmodel');
		$this->load->model('Newsmodel');
			
	}
	public function index()
	{
       $file['page']="login/login";
	   $file['menuRelated']=$this->Newsmodel->menuRelated();
	   $file['category']=$this->Newsmodel->getmenu();
	   $this->load->view('template/content',$file);
	 
	   
	}
	public function login()
	{
		
		  $file['menuRelated']=$this->Newsmodel->menuRelated();
	      $file['category']=$this->Newsmodel->getmenu();
	     $file['row']=$this->Loginmodel->logindata();
		 if(count($file['row']) > 0)
		 {
		   $email=$this->input->post('mail');
		   $this->session->set_userdata('useremail',$email);
		   redirect('Newsc/');
		}
		else
		{	
			  
			  $file['page']="login/login";
	          $this->load->view('template/content',$file);
			
		}
	}
	
	public function forgot()
	{
	   $file['forgetmail']="";
	   $file['forgetErr']="";
	   $file['menuRelated']=$this->Newsmodel->menuRelated();
	   $file['category']=$this->Newsmodel->getmenu();
	   $file['page']="login/forgetpass";
	   $this->load->view('template/content',$file);
		
	}
	public function checkemail()
	{
	   $file['forgetmail']="";
	   $file['forgetErr']="";
	   $file['menuRelated']=$this->Newsmodel->menuRelated();
	   $file['category']=$this->Newsmodel->getmenu();
		$chkemail=$this->input->post('mail');
		if($chkemail=="")
		{
				$file['forgetmail']="<p style='color:red'>please enter email address</p>";
				$file['page']="login/forgetpass";
		        $this->load->view('template/content',$file);
					
		}
		else
		{
				$this->db->where('email',$chkemail);	
				$row=$this->db->get('userreg')->row();
				if(count($row) > 0)
				{
					$this->session->set_userdata('checkemail',$chkemail);
					$file['page']="login/setpass";
		            $this->load->view('template/content',$file);
					
				}
				else
				{
					$file['forgetErr']="Invalid Email Address.";
					$file['page']="login/forgetpass";
					$this->load->view('template/content',$file);
				}
		}
	}
	public function updatepass()
	{
		$this->Loginmodel->updatedata();
		redirect('Newsc');
	}
	public function logout()
	{
		$this->session->unset_userdata('useremail');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('checkemail');
		redirect('Newsc');	
	}
	
}