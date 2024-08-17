<?php 

class Sliderm extends CI_Model
{
	public function getslider()
	{
		
		return $this->db->get('slider')->result();	
	}
	public function insertdata()
	{
    	$config['upload_path']='./images/';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='5500';
		$config['max_width']='5500';
		$config['max_height']='5500';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
	    $cid=$this->input->post('category');
		$title=$this->input->post('title');
		$desc=$this->input->post('desc');
		
		
		
		if(!$this->upload->do_upload('img'))
		{
			$file['data']=$this->Profilem->profile(); 
			$file['progress']=$this->Profilem->profileprogress();
			//$file['report']=$this->Reportpostm->getreporterdata();
			$file['imgerr']=$this->upload->display_errors();
			$file['page']="slider/addslider";
			$this->load->view('template/content',$file);
				
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$insert=array
		             (
					
					  "cid"=>$cid,
					  "slider_image"=>$data['upload_data']['file_name'],
					  "slidertitle"=>$title,
					  "sliderdesc"=>$desc
					  
		              );
		
		$this->db->insert('slider',$insert);
		redirect('Sliderc');
		
		}	
	}
	public function sliderdeldata($id)
	{
		$this->db->where('sliderid',$id);	
		$this->db->delete('slider');
		
	}
	public function slidereditdata($id)
	{
	   $this->db->where('sliderid',$id);
	   return $this->db->get('slider')->row();		
	
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
		$cid=$this->input->post('category');
		$title=$this->input->post('title');
		$desc=$this->input->post('desc');
		
		
		if(!$this->upload->do_upload('img'))
		{
			$file['imgerr']=$this->upload->display_errors();	
			print_r($file['imgerr']);die();
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$update=array
		             (
					  
					  "cid"=>$cid,
					  "slider_image"=>$data['upload_data']['file_name'],
					   "slidertitle"=>$title,
					  "sliderdesc"=>$desc
					  
					 );
					
		$this->db->where('sliderid',$id);
		$this->db->update('slider',$update);
		
		
		}	
	}
	public function multipledel()
	{
		$id=$this->input->post('chk');
		
		foreach($id as $sid)
		{
			$this->db->where('sliderid',$sid);
			$this->db->delete('slider');
		}
		redirect('Sliderc');
	}
	public function statusUpdate($id)
	{
		$this->db->where('sliderid',$id);
		$status=$this->db->get('slider')->row();
		$curr=$status->sliderstatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "sliderstatus"=>$updatesta);
			$this->db->where('sliderid',$id);
			$this->db->update('slider',$update);
			redirect('Sliderc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "sliderstatus"=>$updatesta);
			$this->db->where('sliderid',$id);
			$this->db->update('slider',$update);
			redirect('Sliderc');	
		}
		
	}
	
}
