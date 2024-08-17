<?php 
class Rprofilem extends CI_Model
{
	public function profile()
	{
		$email=$this->session->userdata('email');
		$this->db->where('remail',$email);
		$file['get']=$this->db->get('reporterreg')->row();
	
	}
	public function setpic()
	{
		$id=$this->session->userdata('reporterid');
		$dir="images/".$id;
		if(!is_dir($dir))
		{
			mkdir($dir);
			$this->upload($dir);
		}else
		{
			$this->upload($dir);
		}
	}
	public function upload($dir)
	{
		$config['upload_path']=$dir;
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='1500';
		$config['encrypt_name']=true;
		
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload('img'))
		{
			$file['Error']=$this->upload->display_errors();
			$file['page']="reporterprofile/profile";
			$this->load->view('retemplate/content',$file);
		}
		else
		{
			$email=$this->session->userdata('email');
			$data=array('upload_data'=>$this->upload->data());
			$update=array("rimage"=>$data['upload_data']['file_name']);
					
			$this->db->where('remail',$email);
			$this->db->update('reporterreg',$update);
			redirect('Profilc/profile');
		}
    }
	public function updatedata($id)
	{
		$name=$this->input->post('rname');
		$email=$this->input->post('remail');
		$pass=$this->input->post('pass');
		$gender=$this->input->post('gen');
		$cmno=$this->input->post('mno');
		$add=$this->input->post('address');
		
		$update=array(
		
						
						"rname"=>$name,
						"remail"=>$email,
						"rpassword"=>$pass,
						"rgender"=>$gender,
						"raddress"=>$add,
						"rmno"=>$cmno
		
		              );
	   $this->db->where('repid',$id);
	   $this->db->update('reporterreg',$update);
		
	}
} 
?>