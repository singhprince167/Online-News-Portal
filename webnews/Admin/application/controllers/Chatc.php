<?php
class Chatc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Chatm');
		$this->load->model('Profilem');
		$this->load->model('Reporterregm');
	}
	public function index()
	{
	   
		$file['getdata']=$this->db->get('reporterreg')->result();
		$file['getadmin']=$this->Chatm->getchat();
		$file['data']=$this->Profilem->profile(); 
		$file['progress']=$this->Profilem->profileprogress();
		$file['page']="chat/chat";
		$this->load->view('template/content',$file);
	}
	public function insert()
	{
		
		$this->Chatm->insertdata();
		redirect('Chatc');	
		
	}
	
	public function todaynewsdel($tid)
	{
		$this->Todaynewsm->deldata($tid);
		redirect('Todaynewsc');	
	}
	public function muldel()
	{
		
		$this->Chatm->multipledel();
	}
	public function status($id)
	{
		$this->Chatm->statusUpdate($id);
	}	
	public function subcategory($id)
	{
		$this->db->where('cid',$id);
		$result=$this->db->get('subcategory')->result();
		foreach($result as $row)
		{	
		?>
            <option value="<?php echo $row->sid ?>"><?php echo $row->sname ?></option>
        <?php
		}
	}
	public function editsubcategory($id)
	{
		$this->db->where('cid',$id);
		$result=$this->db->get('subcategory')->result();
		foreach($result as $row)
		{	
		?>
            <option value="<?php echo $row->sid ?>"><?php echo $row->sname ?></option>
        <?php
		}
	}

	
}

?>