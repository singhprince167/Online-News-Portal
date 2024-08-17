<?php
class Profilem extends CI_Model
{
	public function profile()
	{
		$file=$this->session->userdata('email');	
		$this->db->where('Aemail',$file);
		return $this->db->get('admin_register')->row();
	}	
	public function profileprogress()
	{
		$email=$this->session->userdata('email');
		$this->db->where('Aemail',$email);
		$result=$this->db->get('admin_register');
		$total=0;$per=0; $found=0; $finalprofile="";
		foreach($result->result_array() as $row)
		{
			   
		   foreach($row as $key=>$field)
		   {
		   	$total++;
		   	if(empty($row[$key]))
		   	{ 
		  	 $found++;
		   	}
		   
		}
		
	}	
     $total=$total-3;
	 $per=$found/$total*100;
	 $per=100-$per;
	 $finalprofile=round($per);
	 return $finalprofile."%";
	
	}
	public function passdata()
	{
		$pass=$this->session->userdata('password');
		$opass=$this->input->post('opass');
		$npass=$this->input->post('npass');
		$cpass=$this->input->post('cpass');
		
		if($opass!=$pass)
		{
			echo "old password is wrong";	
		}
		elseif($cpass!=$npass)
		{
				echo "pass is mismatch";
		}
		else
		{
			$update=array(
							"password"=>$npass
						);	
			$this->db->where('password',$pass);
			$this->db->update('admin_register',$update);
			redirect('Profilec/profile');
			
		}
	}
	public function personaldata()
	{
		$email=$this->session->userdata('email');
		$fullname=$this->input->post('fullname');
		$gender=$this->input->post('gender');
		$cpass=$this->input->post('cpass');
		
		$update=array(
						"fullname"=>$fullname,
						"gender"=>$gender,
						"password"=>$cpass
		
					 );
		$this->db->where('Aemail',$email);
		$this->db->update('admin_register',$update);
		redirect('Profilec/resident');
	}
	public function residentdata()
	{
		$email=$this->session->userdata('email');
		$add=$this->input->post('add');
	    $city=$this->input->post('city');
		$pincode=$this->input->post('pincode');
		$state=$this->input->post('state');
		$country=$this->input->post('country');
		
		$update=array(
						"address"=>$add,
						"city"=>$city,
						"state"=>$state,
						"country"=>$country,
						"pincode"=>$pincode
		
					 );
		$this->db->where('Aemail',$email);
		$this->db->update('admin_register',$update);
		redirect('Profilec/contact');
		
		
	}
	public function contactdata()
	{
		$email=$this->session->userdata('email');
		$date=$this->input->post('datereg');
		$cno=$this->input->post('cno');
		
		$update=array(
						"contactno"=>$cno,
						);
		
		$this->db->where('Aemail',$email);
		$this->db->update('admin_register',$update);
		redirect('Profilec/profile');
				
	}
	
	public function setpicdata()
	{
		
		$folderName=$this->session->userdata('id');
		$path="gallery/".$folderName;
		if(is_dir($path))
		{
			$this->uploadPic($path);
		}
		else
		{
			mkdir($path);
			$this->uploadPic($path);
		
		}
		redirect('Profilec/profile');
	}
	public function uploadPic($path)
	{
		$email=$this->session->userdata('email');
		$config['upload_path']=$path;
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='1500';
		$config['max_width']='1024';
		$config['max_height']='768';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('img'))
		{
			$file['imgerr']=$this->upload->display_errors();	
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$update=array
		             ("Aimage"=>$data['upload_data']['file_name']
		              );
		$this->db->where('Aemail',$email);
		$this->db->update('admin_register',$update);
		redirect('Profilec/profile');
		}
	}
	public function unlockdata()
	{
		$email=$this->session->userdata('email');
		$pass=$this->input->post('pass');
		$this->db->where('Aemail',$email);
		$this->db->where('password',$pass);
		return $this->db->get('admin_register')->row();
	}

}
?>