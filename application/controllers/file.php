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
	function resize()
	
	{

		$config['image_library'] = 'gd2';
		$config['source_image']	= '/path/to/image/mypic.jpg';
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width']	 = 100;
		$config['height']	= 100;
		
		$this->load->library('image_lib', $config);
		
		$this->image_lib->resize();
		
	}
	
	
	
	function pic_resize(){
		$user 	= $this->session->userdata('user');
		$this->load->helper('directory');
		$map = directory_map("./User_data/$user/pic");
		
	
		$this->load->library('image_lib');
		$config['image_library'] = 'gd2';
	
		$config['source_image']	= "./User_data/$user/pic/$map[0]";
	
		$config['maintain_ratio'] = TRUE;
		$config['width']	 = 100;
		$config['height']	= 100;
		$config['new_image'] ="./User_data/$user/pic/profile_pic.jpg";
		$this->image_lib->clear();
		$this->image_lib->initialize($config);
		if (!$this->image_lib->resize())
		{
			echo $this->image_lib->display_errors();
		}else {
		}
	
		}
		function test(){
			$user 	= $this->session->userdata('user');
			$this->load->helper('directory');
			$map = directory_map("./User_data/$user/pic");
			print $map[0];
			
		}
	}

	


