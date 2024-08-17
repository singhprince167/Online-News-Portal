<?php
class Newsc extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Newsmodel');
		$this->load->model('TodaysinglepostModel');
		$this->load->model('SildersinglepostModel');
		$this->load->model('singlepostModel');
		$this->load->model('Subscribermodel');
		
	
	}
	public function index()
	{	   
		
		$file['subscribe']="";
		$file['category']=$this->Newsmodel->getmenu();
		$file['menuRelated']=$this->Newsmodel->menuRelated();
		
		$file['subcategoryMenu']=$this->Newsmodel->subcategoryMenu();
		$file['entertainment']=$this->Newsmodel->entertainment();
		$file['entertain']=$this->Newsmodel->entertain();
		$file['world']=$this->Newsmodel->world();
		$file['gallery']=$this->Newsmodel->gallery();
		$file['sports1']=$this->Newsmodel->sports1();
		$file['slider']=$this->Newsmodel->slider();
		$file['tech']=$this->Newsmodel->tech();
		$file['tech1']=$this->Newsmodel->tech1();
		$file['fashion']=$this->Newsmodel->fashion();
		$file['Educations']=$this->Newsmodel->Educations();
		$file['politics']=$this->Newsmodel->politics();
		$file['education']=$this->Newsmodel->education();
		$file['breakingnews']=$this->Newsmodel->breakingnews();
		$file['sports']=$this->Newsmodel->sports();
		$file['travel']=$this->Newsmodel->travelnews();
		
		$file['featurepost']=$this->Newsmodel->featurepost();
		$file['life']=$this->Newsmodel->life();
		$file['lifestyle']=$this->Newsmodel->lifestyle();
		$file['features']=$this->Newsmodel->features();
		$file['Recentnews']=$this->Newsmodel->recentnews();
		$file['Weeklynews']=$this->Newsmodel->weeklynews();
		$file['Monthlynews']=$this->Newsmodel->monthlyNews();
		$file['article']=$this->Newsmodel->article();
		$file['page']="dashboard/home";
		$this->load->view('template/content',$file);
 	
	}
	public function search()
	{
		error_reporting(1);
		$file['search']=$this->input->post('search');
		$this->db->like('title',$file['search']);
		$this->db->or_like('description',$file['search']);
		$file['data']=$this->db->get('reporterpost')->result();
		$file['category']=$this->Newsmodel->getmenu();
		$file['menuRelated']=$this->Newsmodel->menuRelated();
		$file['page']="search/searchdata";
		$this->load->view('template/content',$file);
		
	
	}
	public function jasonres()
	{
		
		$filedata=$this->db->get('subcategory')->result();
        echo json_encode($filedata);
	}
	
	
   
}
?>