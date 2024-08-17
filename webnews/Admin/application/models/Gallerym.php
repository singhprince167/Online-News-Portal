<?php
class Gallerym extends CI_Model
{
   public function remove($name)
   {
	   
		 $folder=$this->uri->segment(4);
		 $img=$this->uri->segment(5);
		
		
		$dir= $name."/".$folder."/";
		$dirHandle=opendir($dir);
		while($file=readdir($dirHandle))
		{
			if($file==$img)
			{
				unlink($dir.'/'.$file);	
				
			}
		}
	redirect('Galleryc/');
   }
  

}
?>