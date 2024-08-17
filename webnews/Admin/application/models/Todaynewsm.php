<?php
class Todaynewsm extends CI_Model
{
	public function gettodaynewsdata()
	{
		
		return $this->db->get('todaynews')->result();
		
	}
	public function insertdata()
	{
		
		$config['upload_path']='./images/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='5000';
		$config['max_width']='5000';
		$config['max_height']='5000';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		$cid=$this->input->post('category');
		$title=$this->input->post('title');
		$desc=$this->input->post('desc');
		
		if(!$this->upload->do_upload('img'))
		{
		   $file['imgerr']="";
		   $file['data']=$this->Profilem->profile(); 
		   $file['progress']=$this->Profilem->profileprogress();
		   $file['imgerr']=$this->upload->display_errors();
		   $file['page']="todaynews/addtodaynews";
		   $this->load->view('template/content',$file);
				
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$insert=array
		             (
					  "cid"=>$cid,
					  "timage"=>$data['upload_data']['file_name'],
					  "title"=>$title,
					  "tdesc"=>$desc
		              );
		
		$this->db->insert('todaynews',$insert);
		
		}	
	}
	public function deldata($tid)
	{
		$this->db->where('tid',$tid);	
		$this->db->delete('todaynews');
		
	}
	public function newseditdata($tid)
	{
	   $this->db->where('tid',$tid);
	   return $this->db->get('todaynews')->row();		
	
	}
	public function updatedata($tid)
	{
	    $config['upload_path']='./images/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='5000';
		$config['max_width']='5000';
		$config['max_height']='5000';
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
					 "timage"=>$data['upload_data']['file_name'],
					  "title"=>$title,
					  "tdesc"=>$desc
					  );
					  print_r($update);
					 
		$this->db->where('tid',$tid);
		$this->db->update('todaynews',$update);
		
		}	
	}
	public function multipledel()
	{
		$tid=$this->input->post('chk');
		
		foreach($tid as $id)
		{
			$this->db->where('tid',$id);
			$this->db->delete('todaynews');
		}
		redirect('Todaynewsc');
	}
	public function statusUpdate($id)
	{
		$this->db->where('tid',$id);
		$status=$this->db->get('todaynews')->row();
		$curr=$status->tstatus;
		
		if($curr=="Active")
		{
			$updatesta="Deactive";
			$update=array
		             ( "tstatus"=>$updatesta);
			$this->db->where('tid',$id);
			$this->db->update('todaynews',$update);
			redirect('Todaynewsc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "tstatus"=>$updatesta);
			$this->db->where('tid',$id);
			$this->db->update('todaynews',$update);
			redirect('Todaynewsc');	
		}
	
	}
}
?>