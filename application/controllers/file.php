<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class file extends CI_Controller {
	
	
	

	public function download($a){
		$user 	= $this->session->userdata('user');
		$this->load->helper('file');
		$this->load->helper('directory');
		$map = directory_map("./User_data/$user/");
		$this->load->helper('download');
	
		$data = file_get_contents("./User_data/$user/$a");
		$name = $a;
				
		
	force_download($name,$data);
	
	}
	
	function download_ass($a)
	{
		
		$sql= "SELECT * FROM webboard WHERE QuestionID =  '$a' ";
		$query = $this->db->query($sql)->result();
		$this->load->helper('download');

		$data = file_get_contents("./file_temp/$a");
		$name = $a;
		
		force_download($name,$data);
		
		
	}
	
	
		
	
	
}

