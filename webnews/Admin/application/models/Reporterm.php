<?php
class Reporterm extends CI_Model
{
	public function getreporterdata()
	{
		
		return $this->db->get('reporterreg')->result();  
	}
	
	public function insertdata()
	{
		$config['upload_path']='./images/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='5500';
		$config['max_width']='5500';
		$config['max_height']='5500';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$pass=$this->input->post('paas');
		$mno=$this->input->post('mno');	
		if(!$this->upload->do_upload('img'))
		{
			$file['imgerr']="";
			$file['get']=$this->Reporterm->getreporterdata();
			$file['data']=$this->Profilem->profile(); 
			$file['progress']=$this->Profilem->profileprogress();
			$file['imgerr']=$this->upload->display_errors();
			$file['page']="Reporterreg/addreporter";
			$this->load->view('template/content',$file);
			
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$insert=array
		             (
					  
					  "rname"=>$name,
					  "remail"=>$email,
					  "rpassword"=>$pass,
					  "rmno"=>$mno,
					  "rimage"=>$data['upload_data']['file_name']
					  
		              );
		
		$this->db->insert('reporterreg',$insert);
		redirect('Reporterc');
		
		}	
	}
	
	public function profile()
	{
		//$file=$this->session->userdata('email');	
		$this->db->where('remail',$file);
		return $this->db->get('reporterreg')->row();
	}
	public function setpicdata()
	{
		
		$folderName=$this->session->userdata('id');
		$path="rgallery/".$folderName;
		if(is_dir($path))
		{
			$this->updatedata($path);
		}
		else
		{
			mkdir($path);
			$this->updatedata($path);
		
		}
	}
	public function logindata()
	{
	   $email=$this->input->post('email');
	    $pass=$this->input->post('pass');
		$this->db->where('remail',$email);	
		$this->db->where('rpassword',$pass);	
		return $this->db->get('reporterreg')->row();		
	}
	public function reporetrdeldata($id)
	{
		$this->db->where('repid',$id);	
		$this->db->delete('reporterreg');
		
	}
	public function reporteditdata($id)
	{
	   $this->db->where('repid',$id);
	   return $this->db->get('reporterreg')->row();		
	
	}
	public function updatedata($id)
	{
	    $config['upload_path']='./images/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='5500';
		$config['max_width']='5500';
		$config['max_height']='5500';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
	    $rname=$this->input->post('rname');
		$name=$this->input->post('rname');
		$email=$this->input->post('email');
		$pass=$this->input->post('paas');
		$mno=$this->input->post('mno');	
		if(!$this->upload->do_upload('img'))
		{
			$file['imgerr']=$this->upload->display_errors();	
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$update=array
		             (
					  
					  "rname"=>$name,
					  "remail"=>$email,
					  "rpassword"=>$pass,
					  "rmno"=>$mno,
					  "rimage"=>$data['upload_data']['file_name'],
					  
					 );
		$this->db->where('repid',$id);
		$this->db->update('reporterreg',$update);
		
		}	
	}
	public function multipledel()
	{
		$rid=$this->input->post('chk');
		
		foreach($rid as $id)
		{
			$this->db->where('repid',$id);
			$this->db->delete('reporterreg');
		}
		redirect('Reporterc');
	}
	public function statusUpdate($id)
	{
		$this->db->where('repid',$id);
		$status=$this->db->get('reporterreg')->row();
		$curr=$status->regstatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "regstatus"=>$updatesta);
			$this->db->where('repid',$id);
			$this->db->update('reporterreg',$update);
			redirect('Reporterc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "regstatus"=>$updatesta);
			$this->db->where('repid',$id);
			$this->db->update('reporterreg',$update);
			redirect('Reporterc');	
		}
	
	}
		
	
}