<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class group extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	Public function index($id)
{
	
	$user = $this->session->userdata('user');
	
	$this->load->view('header');
	$this->load->view('menu_teach');
	
	$sql= "SELECT * FROM teacher WHERE Username =  '$user' ";
	$query = $this->db->query($sql)->result();
	$user_bar["q"] = $query;
	
	$sql= "SELECT * FROM group_detail WHERE Head=  '$user' ";
	$query2 = $this->db->query($sql)->result();

	$user_bar["q2"] =$query2 ;
	$this->load->view('side_bar_t',$user_bar);
	$sql2= "SELECT * FROM webboard	 WHERE Group_ID =  '$id' ";
	$query2 = $this->db->query($sql2)->result();
	

	$data["q2"] =$query2 ;
	
	$this->load->view('group_content',$data);
		$this->load->view('footer');
}

}
?>

