<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class assign_t extends CI_Controller {

	function view($a)
	{

		$this->load->view('header');
		$this->load->view('menu_teach');


		$sql= "SELECT * FROM webboard WHERE QuestionID =  '$a' ";
		$query = $this->db->query($sql)->result();

		$data["q"] = $query;

		$sql2= "SELECT * FROM reply WHERE QuestionID =  '$a' ";
		$query2 = $this->db->query($sql2)->result();

		$data["q2"] = $query2;


		$this->load->view('ViewWebboard',$data);

		?>
		
		
		<?php 
		$this->load->view('footer');
	
		}
		

function reply($a)
	{
		$data = array(
				'QuestionID' => $a,
				'CreateDate' => date("Y-m-d H:i:s"),
				'Details' => $_POST["txtDetails"],
				'Name' => $this->session->userdata('user'));

$sql = $this->db->insert('reply',$data);
$q = mysql_query($sql);
	
	
	//*** Update Reply ***//
	$strSQL = "UPDATE webboard ";
	$strSQL .="SET Reply = Reply + 1 WHERE  = $a ";
	$objQuery = mysql_query($strSQL);	
	
	?><h1 align="center">Reply Success !</h1>
	<p align="center"><a href="<?echo site_url();?>assign/view/<?php echo $a?>">Back</a></p>
	<?php 
	
	}
	
	
	function upload_ass()
	
	{
		$config['upload_path'] = "./file_temp";
		$config['allowed_types'] = '';
		$config['max_size']	= '5000';
		
	
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('cre_ass', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('header');
			$this->load->view('menu_t');
			$this->load->view('upload_success', $data);
		}
	
	
	}
	function send()
	{
		$this->load->view('header');
		$this->load->view('menu_teach');
		$this->load->view('send');
		
		
	}
	
	
}
	