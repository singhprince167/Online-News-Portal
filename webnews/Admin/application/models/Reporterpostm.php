<?php
class Reporterpostm extends CI_Model
{
	public function getreporterdata()
	{
		$this->db->from('reporterpost');
		$this->db->join('category','category.cid=reporterpost.cid');
		$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		$this->db->join('city','city.cityid=reporterpost.cityid');
		return $this->db->get()->result();
		
	}
	
	public function insertdata()
	{
		
		$folderName=$this->session->userdata('reporterId');
		$path="images/".$folderName."/post";
		if(is_dir($path))
		{
			$this->uploadData($path);
		}
		else
		{
			mkdir($path);
			$this->uploadData($path);
		
		}
	}
	public function uploadData($path)
	{
		$rid=$this->session->userdata('reporterId');
		$config['upload_path']=$path;
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='5500';
		$config['max_width']='5500';
		$config['max_height']='5500';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		$title=$this->input->post('title');
		$desc=$this->input->post('desc');
		if(!$this->upload->do_upload('img'))
		{
			$file['imgerr']="";
			
			$file['getreport']=$this->Reporterpostm->getreporterdata();
			$file['data']=$this->Profilem->profile(); 
			$file['progress']=$this->Profilem->profileprogress();
			$file['reporter']=$this->Reporterm->getreporterdata();
			$file['imgerr']=$this->upload->display_errors();
			$file['page']="mypost/addreporterpost";
			$this->load->view('reportertemp/content',$file);
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$insert=array
		             (
					  "repid"=>$rid,
					  "image"=>$data['upload_data']['file_name'],
					  "title"=>$title,
					  "description"=>$desc
		              );
					  
		$this->db->insert('reporterpost',$insert);
		
		}
		redirect("Reporterpostc");	
	}
	public function deldata($pid)
	{
		$this->db->where('rid',$pid);	
		$this->db->delete('reporterpost');
		
	}
	public function editdata($pid)
	{
	   $this->db->where('rid',$pid);
	   return $this->db->get('reporterpost')->row();		
	
	}
	public function updatedata($pid)
	{
		
		$folderName=$this->session->userdata('reporterId');
		$path="images/post";
		if(is_dir($path))
		{								
			
			$this->updateDataUp($path,$pid);
		}
		else
		{
			mkdir($path);
			$this->updateDataUp($path,$pid);
		
		}
	}

	public function updateDataUp($path,$pid)
	{
		$title=$this->input->post('title');
		$desc=$this->input->post('desc');

		$this->db->where('rid',$pid);
		$rep=$this->db->get('reporterpost')->row();
		
		if($_FILES['img']['name']=="")
		{
						$update=array
							 (
							  
							 "image"=>$rep->image,
							  "title"=>$title,
							  "description"=>$desc
							  );
					$this->db->where('rid',$pid);
					$this->db->update('reporterpost',$update);
		}
		else
		{
				$file['imgerr']="";
				$config['upload_path']=$path;
				$config['allowed_types']='gif|jpg|png';
				$config['max_size']='5500';
				$config['max_width']='5500';
				$config['max_height']='5500';
				$config['encrypt_name']=true;
				$this->load->library('upload',$config);
				//$rid=$this->input->post('rid');
		 
				$file['reporter']=$this->Reporterm->getreporterdata();
					
				$file['getreport']=$this->Reporterpostm->getreporterdata();
				$file['edit']=$this->editdata($pid);
			
				$file['data']=$this->Profilem->profile(); 
				$file['progress']=$this->Profilem->profileprogress();
				$file['reporter']=$this->Reporterm->getreporterdata();
				
				if(!$this->upload->do_upload('img'))
				{
					
					
						$file['imgerr']=$this->upload->display_errors();
						print_r($file['imgerr']);
						die();
			//		$file['page']="mypost/editreporterpost";
			//	    $this->load->view('reportertemp/content',$file);
				}
				else
				{
					$data=array('upload_data'=>$this->upload->data());
					$update=array
							 (
							  
							 "image"=>$data['upload_data']['file_name'],
							  "title"=>$title,
							  "description"=>$desc
							  );
					$this->db->where('rid',$pid);
					$this->db->update('reporterpost',$update);
				
				}	
		}
	}
	public function multipledel()
	{
		$tid=$this->input->post('chk');
		
		foreach($pid as $id)
		{
			$this->db->where('rid',$id);
			$this->db->delete('reporterpost');
		}
		redirect('Reporterpostc/reporterindex');
	}
	public function statusUpdate($id)
	{
		$this->db->where('rid',$id);
		$status=$this->db->get('reporterpost')->row();
		$curr=$status->rpstatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "rpstatus"=>$updatesta);
			$this->db->where('rid',$id);
			$this->db->update('reporterpost',$update);
			redirect('Reporterpostc/');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "rpstatus"=>$updatesta);
			$this->db->where('rid',$id);
			$this->db->update('reporterpost',$update);
			redirect('Reporterpostc/');	
		}
	
	}

}



?>