<?php
class Reportpostm extends CI_Model
{
	public function getreporterdata()
	{
		$reporterid=$this->session->userdata('reporterid');
		$this->db->from('reporterpost');
		$this->db->join('category','category.cid=reporterpost.cid');
		$this->db->join('subcategory','subcategory.sid=reporterpost.sid');
		$this->db->join('reporterreg','reporterreg.repid=reporterpost.repid');
		$this->db->join('city','city.cityid=reporterpost.cityid');
		$this->db->where('reporterpost.repid',$reporterid);
		$this->db->order_by('reporterpost.rid','desc');
		return $this->db->get()->result();
	}
	public function getsports($string)
	{
		$this->db->like('catgname',$string);
		$store= $this->db->get('category')->row();
		$cat=$store->cid;	
		$this->db->where('cid',$cat);
		//$this->db->limit(6);
		$this->db->order_by('reporterpost.rid','desc');
		return $this->db->get('reporterpost')->result();
		
	}
	public function getentertainment($string)
	{
		$this->db->like('catgname',$string);
		$store= $this->db->get('category')->row();
		$cat=$store->cid;	
		$this->db->where('cid',$cat);
		//$this->db->limit(6);
		$this->db->order_by('reporterpost.rid','desc');
		return $this->db->get('reporterpost')->result();
	
	} 	
	
	public function geteducation($string)
	{
		$this->db->like('catgname',$string);
		$store= $this->db->get('category')->row();
		$cat=$store->cid;	
		$this->db->where('cid',$cat);
		//$this->db->limit(6);
		$this->db->order_by('reporterpost.rid','desc');
		return $this->db->get('reporterpost')->result();

		
	}
	public function loaddata($id)
	{
		$this->db->where('rid',$id);
		return $this->db->get('reporterpost')->row();
		
	}
	public function insertdata()
	{
			$reporterid=$this->session->userdata('reporterid');
	
		$cid=$this->input->post('category');
		$sid=$this->input->post('subcategory');
		$city=$this->input->post("city");
			
		$config['upload_path']='./images/post';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='5500';
		$config['max_width']='5500';
		$config['max_height']='5500';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		$title=$this->input->post('title');
		$desc=$this->input->post('desc');
	    
		if(!$this->upload->do_upload('img'))
		{
			
			$file['imgerr']=$this->upload->display_errors();	
			print_r($file['imgerr']);
			$this->load->view('mypost/addreporterpost');
			
		
  		}
		else
		{
			
		    $data=array('upload_data'=>$this->upload->data());
			$getid=$this->session->userdata('email');
			$this->db->where('remail',$getid);
			$newdata=$this->db->get('reporterreg')->row();
			//echo $this->session->userdata('email');
			
			$datereg=date('Y-m-d');
			$insert=array
		             (
					  "repid"=>$reporterid,
					  "cid"=>$cid,
					  "sid"=>$sid,
					  "cityid"=>$city,
					  "image"=>$data['upload_data']['file_name'],
					  "title"=>$title,
					  "description"=>$desc,
					  "postdatereg"=>$datereg
		              );
					  
		
		$this->db->insert('reporterpost',$insert);
		
		}
		redirect('Reportpostc/');
			
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
	    $cid=$this->input->post('category');
	  	$sid=$this->input->post('subcategory');
		$city=$this->input->post("city");
			
		$config['upload_path']='./images/post';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='5500';
		$config['max_width']='5500';
		$config['max_height']='5500';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		$title=$this->input->post('title');
		$desc=$this->input->post('desc');
	    
				$getid=$this->session->userdata('reporteremail');
				$this->db->where('remail',$getid);
				$newdata=$this->db->get('reporterreg')->row();	
				$datereg=date('Y-m-d');
		
		
		if(!empty($_FILES['img']['name']))
		{
			if(!$this->upload->do_upload('img'))
			{
				$file['imgerr']=$this->upload->display_errors();	
				print_r($file['imgerr']);
				$this->load->view('mypost/addreporterpost');
			}
			else
			{
				$data=array('upload_data'=>$this->upload->data());
				
				$update=array
						 (
						  "image"=>$data['upload_data']['file_name'],
						  );
			$this->db->where('rid',$pid);
			$this->db->update('reporterpost',$update);
			
			}
		}
		else
		{
				$update=array
						 (
						  "repid"=> $newdata->repid,
						  "cid"=>$cid,
						  "sid"=>$sid,
						  "cityid"=>$city,
						  "title"=>$title,
						  "description"=>$desc,
						  "postdatereg"=>$datereg
						  );
			$this->db->where('rid',$pid);
			$this->db->update('reporterpost',$update);
		}
		redirect('Reportpostc/');
			
	}
	public function multipledel()
	{
		$tid=$this->input->post('chk');
		
		foreach($tid as $id)
		{
			$this->db->where('rid',$id);
			$this->db->delete('reporterpost');
		}
		redirect('Reportpostc');
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
			redirect('Reportpostc');
		}
		else
		{
			$updatesta="Active";
			$update=array
		             ( "rpstatus"=>$updatesta);
			$this->db->where('rid',$id);
			$this->db->update('reporterpost',$update);
			redirect('Reportpostc');	
		}
		
	}

}
?>