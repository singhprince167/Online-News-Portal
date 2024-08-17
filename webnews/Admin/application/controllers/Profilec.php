<?php
class Profilec extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Adminm');
		$this->load->model('Profilem');
	}
	public function profile()
	{
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['page']="profile/profile";
		$this->load->view('template/content',$file);
		
	}
	public function personal()
	{
	    $file['data']=$this->Profilem->profile();  
		$file['progress']=$this->Profilem->profileprogress();
		$file['page']="profile/personalinfo";
		$this->load->view('template/content',$file);
			
	}
	public function personalinfo()
	{
		$this->Profilem->personaldata();	
	}
	public function resident()
	{
		$file['data']=$this->Profilem->profile();
		$file['progress']=$this->Profilem->profileprogress();
		$file['page']="profile/residentinfo";
	 	$this->load->view('template/content',$file);
	}
	public function residentinfo()
	{
		$this->Profilem->residentdata();	
	}
	public function contact()
	{
	    $file['data']=$this->Profilem->profile(); 
	    $file['progress']=$this->Profilem->profileprogress();
		$file['page']="profile/contact";
	 	$this->load->view('template/content',$file);
	}
	public function contactinfo()
	{
		$this->Profilem->contactdata();	
	}
	public function updateprofile()
	{
				$this->Profilem->editdata();	
	}
	public function setpic()
	{
		$this->Profilem->setpicdata();	
	}
	public function lock()
	{
		        $this->session->unset_userdata('password');
				$file['data']=$this->Profilem->profile(); 
				$this->load->view('profile/locked',$file);
	}
	public function unlock()
	{
			
			if($this->session->userdata('password')=="")
			{
				$pass=$this->input->post('pass');
				if($pass=="")
				{
					echo "Enter your password";	
				}
				else
				{
					$file['data']=$this->Profilem->unlockdata();
					if(count($file['data'])> 0)
					{
						$this->session->set_userdata('password',$pass);
						redirect('Adminc/');
					}
					else
					{
						echo "Invalid User";	
					}
				}
			}
			else
			{
				redirect('Profilec/');	
			}
	}
	public function pass()
	{
		
		$this->load->view('profile/pass');
	} 
	public function changepass()
	{
		$this->Profilem->passdata();
	}
	public function gallery()
	{
		$file['data']=$this->Profilem->profile();
		$file['page']="profile/gallery";
		$file['progress']=$this->Profilem->profileprogress();
	 	$this->load->view('template/content',$file);	
	}	
}
?>