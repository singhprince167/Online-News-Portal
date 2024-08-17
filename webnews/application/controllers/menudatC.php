<?php
class menudatC extends CI_controller
{
	public function __construct()
    {
		parent::__construct();
		
		$this->load->model('Newsmodel');
		$this->load->model('singlepostModel');
		$this->load->model('menudatModel');
		$this->load->model('Feedbackmodel');
		
	}	
	public function allMenu($catId)
	{
		$file['category']=$this->Newsmodel->getmenu();
		$file['comment']=$this->Feedbackmodel->commentcount();
		$file['subcategoryMenu']=$this->Newsmodel->subcategoryMenu();
		$file['Recentnews']=$this->menudatModel->recentnews();
		$file['Weeklynews']=$this->menudatModel->weeklynews();
		$file['Monthlynews']=$this->menudatModel->monthlyNews();
		$file['gallery']=$this->Newsmodel->gallery();
		$file['menuRelated']=$this->Newsmodel->menuRelated();
		$file['fetchmenuInfo']=$this->menudatModel->fetchmenuInfo($catId);
		$file['page']="menuRdata/allmenurelatedInfo";
		$this->load->view('template/content',$file);	
	}
	public function loadmoreInfomenu($catid,$offset)
	{
		$file['fetchmenuInfo']=$this->menudatModel->loadMoreinfo($catid,$offset);
		echo "<p style='display:none'>". count($file['fetchmenuInfo'])."</p>";
	//	print_r($file['fetchmenuInfo']);//die();
	    $this->load->view('menuRdata/loadmore',$file);	
		
	}
	
		
}
?>