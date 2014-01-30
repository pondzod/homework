<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class assign extends CI_Controller {

	function view($a)
	{
		$user 	= $this->session->userdata('user');
	$this->load->view('header');
	$this->load->view('menu');
 

		$sql= "SELECT * FROM webboard WHERE QuestionID =  '$a' ";
$query = $this->db->query($sql)->result();

$data["ass_detail"] = $query;

$sql2= "SELECT * FROM reply WHERE QuestionID =  '$a' ";
$query2 = $this->db->query($sql2)->result();

$data["reply"] = $query2;
$data["q3"] = $a;
$sql= "SELECT * FROM student WHERE Username =  '$user' ";
$query = $this->db->query($sql)->result();
$data["q2"] = $user;
$query33 =
$this->db
->select('*')
->from('group_user')
->join('group_detail', 'group_user.GroupID = group_detail.Group_ID')
->where('Username',$user)
->get()
->result();
$user_bar["q_bar"] = $query33;
$user_bar["q"]= $query;
$this->load->view('sidebar',$user_bar);

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
			$this->load->view('menu');
			$this->load->view('upload_success', $data);
		}
	
	
	}
	function send($id)
	{
		$user 	= $this->session->userdata('user');
	
		$this->load->view('header');
		$this->load->view('menu');
		if(move_uploaded_file($_FILES["file"]["tmp_name"],"./file_assignment/$id/".$_FILES["file"]["name"]))
		{
		
			$fileUpload=$_FILES["file"]["name"];
		}
		$file = $_FILES["file"]["name"];
		
		$Details = $this->input->post('datail');
		$data = array(
				'CreateDate' => date("Y-m-d H:i:s"),
				'QuestionID' => $id,
				'Detail' => $Details,
				'Name' => $user,
				'file' => $file);
		
		
		$sql = $this->db->insert('assignment',$data);
		$q = mysql_query($sql);
		?>
		<h1 align="center">	ส่งงานเรียบร้อย!</h1>
		<p align="center"><a href="<?echo site_url();?>home/stu_index">Back</a></p>
	<?php $this->load->view('footer');
	}



	
}
	
