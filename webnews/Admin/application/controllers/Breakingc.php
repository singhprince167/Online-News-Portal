<?php 
class Breakingc extends CI_Controller 
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('Profilem');
		$this->load->model('Categorym');
		$this->load->model('Subcategorym');
		$this->load->model('Breakingm');			
	}
	public function index()
	{
		$file['data']=$this->Profilem->profile();
		$file['progress']=$this->Profilem->profileprogress();
		$file['breakingdata']=$this->Breakingm->getbreaking();
		$file['page']="breakingnews/breakingnews";
		$this->load->view('template/content',$file);	
		
	}
	public function deleteda($id)
	{
		$this->Breakingm->deletedata($id);
		redirect('Breakingc');
	}
	public function edit($id)
	{	
		$id=$this->uri->segment(3);
		$file['data']=$this->Profilem->profile();
		$file['progress']=$this->Profilem->profileprogress();
		$this->db->where('postdatereg',date("Y-m-d"));
		$file['break']=$this->db->get('reporterpost')->result();
		$file['edit']=$this->Breakingm->editdata($id);	
		$file['page']="breakingnews/editbreakingnews";
		$this->load->view('template/content',$file);
	}
	public function update($id)
	{
		$this->Breakingm->updatedata($id);
	}
	public function insert()
	{	
		$file['data']=$this->Profilem->profile();
		$file['progress']=$this->Profilem->profileprogress();
		$this->db->where('postdatereg',date("Y-m-d"));
		$file['break']=$this->db->get('reporterpost')->result();
		$file['page']="breakingnews/addbreakingnews";
		$this->load->view('template/content',$file);	
	
	}
	public function insertalldata()
	{
		$this->Breakingm->insertdata();
	} 
	public function muldel()
	{
		
		$this->Breakingm->multipledel();
	}
	public function status($id)
	{
		$this->Breakingm->statusUpdate($id);
	}
}
?>