<?php
class Cityc extends CI_Controller 
{
	public function __construct()
	{
	    parent::__construct();
		$this->load->model('Citym');
		$this->load->model('Profilem');
		$this->load->model('Countrym');
		$this->load->model('Statem');
		
		
	}
	public function index()
	{
		
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['getcity']=$this->Citym->getcity();
		$file['page']="city/city";
		$this->load->view('template/content',$file);	
	}
	public function cityins()
	{
		
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['country']=$this->Countrym->getcountry();
		$file['getstate']=$this->Statem->getstate();
		$file['page']="city/addcity";
		$this->load->view('template/content',$file);
	}
	public function insert()
	{
		$this->Citym->insertdata();
		redirect('Cityc');	
		
	}
	public function citydel($tid)
	{
		$this->Citym->deldata($tid);
		redirect('Cityc');	
	}
	public function cityedit($id)
	{
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['edit']=$this->Citym->cityeditdata($id);
		$file['country']=$this->Countrym->getcountry();
		$file['getstate']=$this->Statem->getstate();
		$file['page']="city/editcity";
		$this->load->view('template/content',$file);
	}
	public function cityupdate($tid)
	{
		$this->Citym->updatedata($tid);
		redirect('Cityc');	
	}
	public function muldel()
	{
		
		$this->Citym->multipledel();
	}
	public function status($id)
	{
		$this->Citym->statusUpdate($id);
	}
	public function state($id)
	{
		$this->db->where('countryid',$id);
		$result=$this->db->get('state')->result();
		foreach($result as $row)
		{	
		?>
            <option value="<?php echo $row->stateid ?>"><?php echo $row->sname ?></option>
        <?php
		}
	}
	public function editstate($id)
	{
		$this->db->where('countryid',$id);
		$result=$this->db->get('state')->result();
		foreach($result as $row)
		{	
		?>
            <option value="<?php echo $row->stateid ?>"><?php echo $row->sname ?></option>
        <?php
		}
	}
	
}