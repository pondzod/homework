<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home_t extends CI_Controller {

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







	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}


	function regis_student()
	{
		$this->load->view('header');

		$this->load->view('regis_stu');
		$this->load->view('footer');
	}

	function regis_teacher()
	{
		$this->load->view('header');
		 
		$this->load->view('regis_teach');
		$this->load->view('footer');
	}



	function stu_register()
	{
		 
		$user 	= $this->session->userdata('user');

		 
		$name = $this->input->post('name');
		$password = $this->input->post('password');
		$id_st = $this->input->post('id_st');
		$first = $this->input->post('first');
		$major = $this->input->post('major');
		$email = $this->input->post('email');
		$about = $this->input->post('about');

		$sql2 = "SELECT * FROM student WHERE Username ='$name'";
		$q2 = mysql_query($sql2);
		$res2 = mysql_fetch_array($q2);


  		if (empty($name) || empty($password) || empty($id_st) || empty($first) || empty($major) || empty($email)) { ?>
  			<h4 align="center">Register Failed กรุณากรอกให้ครบ !</h4>
  			<p align="center"><a href="<?echo site_url();?>home">Back</a></p>
  
  		<?}else{?>
  			<?
  				if ($res2["Username"] != NULL) { ?>
  					<h1 align="center">Username ซ้ำ !</h1>
  					<p align="center"><a href="<?echo site_url();?>home">Back</a></p>
  			<?	} else {
  				
  				$directory = "./User_data/$name/pic";

  				mkdir($directory,0777,true);
  			
  				
  		
  	if(copy($_FILES["Pic"]["tmp_name"],"./User_data/$name/pic/".$_FILES["Pic"]["name"]))
  	{
  	
  		$fileUpload=$_FILES["Pic"]["name"];
  	}
  	$Pic = $_FILES["Pic"]["name"];
  	
  	$data = array(
  			'Username' => $name,
  			'Password' => $password,
  			'id' => $id_st,
  			'F_name' => $first,
  			'Major' => $major,
  			'E_mail' => $email,
  			'About' => $about,
  			'Pic' => $Pic);
  	 		$sql = $this->db->insert('student',$data);
			$q = mysql_query($sql);
			
		
			$this->load->helper('directory');
			$map = directory_map("./User_data/$name/pic");
			
			
			$this->load->library('image_lib');
			$config['image_library'] = 'gd2';
			
			$config['source_image']	= "./User_data/$name/pic/$map[0]";
			
			$config['maintain_ratio'] = TRUE;
			$config['width']	 = 100;
			$config['height']	= 100;
			$config['new_image'] ="./User_data/$name/pic/profile_pic.jpg";
			$this->image_lib->clear();
			$this->image_lib->initialize($config);
			if (!$this->image_lib->resize())
			{
				echo $this->image_lib->display_errors();
			}else {
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
  				
  				?>
  						<h1 align="center">Register Success !</h1>
  						<p align="center"><a href="<?echo site_url();?>home">Back</a></p>
  		
  		<?	}
  
  			
  			}
  			?>
  		
  		<?
  
  		
  
  		}
  	
  function edit_pro()
  {
  $user 	= $this->session->userdata('user');
  	$this->load->view('header');
  	 $this->load->view('menu_teach');
  	 $sql= "SELECT * FROM student WHERE Username =  '$user' ";
  	 $query = $this->db->query($sql)->result();
  	 
  	 $data["q"] = $query;
  	 
  	 
  	 
  	$this->load->view('edit_profile',$data);
  	$this->load->view('footer');
  }

  
  function c_login()
{
  	$n = $this->input->post('user');
  	$s = $this->input->post('pass');
  	$type = $this->input->post('type');
  	if ($type = 'student')
  	{
  		if (empty($n)) { 
  			$this->load->view('header');
  			$this->load->view('error_log');?>
  			
  			<?}
  			

	else  if (empty($s)) { 
	  			$this->load->view('header');
  				$this->load->view('error_log');?>
	  			
	  			<?}
	  			
	  			else {
	  				
  				$sql = "SELECT * FROM student WHERE Username = '$n' and Password= '$s'";
  				$q = mysql_query($sql);
  				$res = mysql_fetch_array($q);
  				
  
  				if (!$res) { ?>
  					<?php 
  					$this->load->view('header');
  					$this->load->view('error_log');
  					
  					}
  			else{
  			$this->session->set_userdata('user',$n);
  					
  						if ($n == "admin") {
  							redirect('home/admin_home');
  						}
  					
  					?>
  						
  					<h1 align="center">login Success !</h1>
  					<? redirect('home/stu_index');
  				}
  			
  
  			
  		
}

  		}
  		if ($type ='teacher'){ 
if (empty($n) || empty($s)) { ?>
  			<h1 align="center">login Failed !</h1>
  			<p align="center"><a href="<?echo site_url();?>home">Back</a></p>
  			<?}else{ 
  
  				$sql = "SELECT * FROM teacher WHERE Username='$n' and Password='$s'";
  				$q = mysql_query($sql);
  				$res = mysql_fetch_array($q);
  				
  
  				if (!$res) { ?>
  					<h1 align="center">login Failed !</h1>
  					<p align="center"><a href="<?echo site_url();?>home">Back</a></p>
  				<?}else{?>
  				<?$this->session->set_userdata('user',$n);
  					
  						if ($n == "admin") {
  							redirect('home/admin_home');
  						}
  					?>
  					
  					<h1 align="center">login Success !</h1>
  					<?php redirect('home/teacher_index');?>
  				<?}
  			?>
  
  			
  		<?
}

  		}
  		
  		
  	}
  	
  	
  
  
function cre_group()

{
	$user 	= $this->session->userdata('user');
	$name = $this->input->post('name');
	$name_sub = $this->input->post('name_sub');
	$major = $this->input->post('major');
	$group = $this->input->post('group');
	$gen = $this->input->post('gen');
	$data = array(
			
			'Group_Name' => $name,
			'Major' => $major,
			'Subject_name' => $name_sub,
			'Group_Learn' => $group,
			'Head' => $user,
			'Key' => $gen	);
	
	
			$sql = $this->db->insert('group_detail',$data);
			$q = mysql_query($sql);
			$this->load->view('header');
			$this->load->view('menu_teach');
			
			$this->load->library('session');
			
$sql2= "SELECT * FROM Group_detail WHERE Group_Name =  '$name' ";
$query2 = $this->db->query($sql2)->result();
$data2["q"] = $query2;
$this->load->view('success_group',$data2);
			
$this->load->view('footer');
	
	
}



function teacher_regis()
{

	$name = $this->input->post('name');
	$password = $this->input->post('password');
	$first = $this->input->post('first');
	$email = $this->input->post('email');
	$about = $this->input->post('about');
	
	$sql2 = "SELECT * FROM teacher WHERE Username ='$name'";
	$q2 = mysql_query($sql2);
	$res2 = mysql_fetch_array($q2);
	$data = array(
			'Username' => $name,
			'Password' => $password,
			'First' => $first,
			'E_mail' => $email,
			'About' => $about);
	 
	 
	
	  		if (empty($name) || empty($password) ||empty($first) || empty($email)) { ?>
	  			<h4 align="center">Register Failed กรุณากรอกให้ครบ !</h4>
	  			<p align="center"><a href="<?echo site_url();?>home">Back</a></p>
	  
	  		<?}else{?>
	  			<?
	  				if ($res2["Username"] != NULL) { ?>
	  					<h1 align="center">Username ซ้ำ !</h1>
	  					<p align="center"><a href="<?echo site_url();?>home">Back</a></p>
	  			<?	} else {
	  				$sql = $this->db->insert('teacher',$data);
	  				$q = mysql_query($sql);
	  				?>
	  						<h1 align="center">Register Success !</h1>
	  						<p align="center"><a href="<?echo site_url();?>home">Back</a></p>
	  		
	  		<?	}
	  
	  			
	  			}
	  			?>
	  		
	  		<?
	  
}


function do_upload()
	{
		
	$user 	= $this->session->userdata('user');
		$config['upload_path'] = "./User_data/$user";
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('header');
				$this->load->view('menu_teach_teach');
			$this->load->view('my_file', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('header');
			$this->load->view('menu_teach');
			$this->load->view('upload_success', $data);
		}
	}



	function my_file(){
	
		$user 	= $this->session->userdata('user');
		$this->load->view('header');
		$this->load->view('menu_teach');
		$this->load->helper('file');
		$path  = "./User_data/$user";
		$files = get_dir_file_info ($path,$top_level_only = TRUE);
		
		$data= array('error' => ' ')  ;
		
		


		$data["q2"] = $files;
		
		$this->load->view('my_file',$data );
		
		
		
		$this->load->view('footer');
		
		
	
	
	
	}

function cre_ass1(){


if(move_uploaded_file($_FILES["file_cre"]["tmp_name"],"./file_temp/".$_FILES["file_cre"]["name"]))
{

	$fileUpload=$_FILES["file_cre"]["name"];
}
$file = $_FILES["file_cre"]["name"];
$Question = $this->input->post('txtQuestion');
$Details = $this->input->post('txtDetails');

$user 	= $this->session->userdata('user');
$date = date('Y-m-d',strtotime($_POST['date']));
$data = array(
		'CreateDate' => date("Y-m-d H:i:s"),
		'Question' => $Question,
		'Details' => $Details,
		'Name' => $user,
		'file' => $file,
		'Date_end' => $date);

if (empty($Question) || empty($Details)) { 
print ('กรอกให้ครบ');}
else {
	

$sql = $this->db->insert('webboard',$data);
$q = mysql_query($sql);
$sql2 = "SELECT MAX(QuestionID)FROM webboard;";
$q2 = mysql_query($sql2);
$q2 = $q2+1;
$directory = "./file_assignment/$q2";

mkdir($directory,0777,true);


?>
<h1 align="center">	ตั้งหัวข้อเรียบร้อย!</h1>
<p align="center"><a href="<?echo site_url();?>home_t/teacher_index">Back</a></p>
<?php }
 }
function cre_ass2($id){
if(move_uploaded_file($_FILES["file_cre"]["tmp_name"],"./file_temp/".$_FILES["file_cre"]["name"]))
{

	$fileUpload=$_FILES["file_cre"]["name"];
}
$file = $_FILES["file_cre"]["name"];
$Question = $this->input->post('txtQuestion');
$Details = $this->input->post('txtDetails');

$user 	= $this->session->userdata('user');
$date = date('Y-m-d',strtotime($_POST['date']));
$data = array(
		'CreateDate' => date("Y-m-d H:i:s"),
		'Question' => $Question,
		'Details' => $Details,
		'Name' => $user,
		'file' => $file,
		'Group_ID' => $id,
		'Date_end' => $date);

if (empty($Question) || empty($Details)) { 
print ('กรอกให้ครบ');}
else {
	



$sql2 = "SELECT MAX(QuestionID)FROM webboard";
$q2 = mysql_query($sql2);
$res2 = mysql_fetch_array($q2);
$res2=$res2[0] +1;
$directory = "./file_assignment/$res2";

@mkdir($directory,0777,true);
$sql = $this->db->insert('webboard',$data);
mysql_query($sql);
?>

<h1 align="center">	ตั้งหัวข้อเรียบร้อย!</h1>
<p align="center"><a href="<?echo site_url();?>home_t/teacher_index">Back</a></p>
<?php }
}

function cre_ass()

{
	
	$this->load->view('header');
	$this->load->view('menu_teach');
	$this->load->view('cre_ass', array('error' => ' ' ));
	$this->load->view('footer');
	
}

function teacher_index()

{
	
	$user = $this->session->userdata('user');
	
	$sql= "SELECT * FROM teacher WHERE Username =  '$user' ";
	$query = $this->db->query($sql)->result();
	
	$sql= "SELECT * FROM group_detail WHERE Head=  '$user' ";
	$query2 = $this->db->query($sql)->result();
	
	
	$data["q"] = $query;
	$data["q2"] = $query2;
	$this->load->view('header');
	$this->load->view('menu_teach');
	$sql2= "SELECT * FROM note  ";
	$query2 = $this->db->query($sql2)->result();
	
	$data["note"] = $query2;
	$this->load->view('side_bar_t',$data);
	$this->load->view('content');
	$this->load->view('footer');
}

function  logout()

{
	$this->session->unset_userdata('user');	
		redirect('home/index');
}

function edit()

{

	
	$user 	= $this->session->userdata('user');
		
 
  	$id_st = $this->input->post('id_st');
  	$first = $this->input->post('first');
  	$major = $this->input->post('major');
  	$email = $this->input->post('email');
  	$about = $this->input->post('about');
  	$Pic = $this->input->post('Pic');
  

	$data  = array(
				
			
			'id' => $id_st,
			'F_name' => $first,
			'Major' => $major,
			'E_mail' => $email,
			'About' => $about,
			'Pic' => $Pic);
 
  		
  		$this->db->where('Username', $user);
  $this->db->update('student',$data);
  print ('แก้ไขข้อมูลเสร็จสิ้น');
 

  	
  	
 

}

function change_pass()

{
	
	$this->load->view('header');
	$this->load->view('menu_teach');
	$this->load->view('change_pass');
	$this->load->view('footer');
	
	}
	
	
	function change_passedit()
	
	{
	
	$passwordold = $this->input->post('oldpassword');
	$passwordnew = $this->input->post('newpassword');
	$user 	= $this->session->userdata('user');
	$sql2 = "SELECT * FROM student WHERE Username ='$user' and Password = '$passwordold'";
	$q2 = mysql_query($sql2);
	$res2 = mysql_fetch_array($q2);
	
	$data  = array(
	
			'Password' => $passwordnew);
	if($res2["Password"] != NULL)
	{
	
		
				$this->db->where('Username', $user);
  $this->db->update('student',$data);
		print ('แก้ไขข้อมูลเสร็จสิ้น');
	
	
	}
	 
	
	 
	 
	else{
		print('รหัสผ่านเก่าไม่ถูกต้อง');
	}
	}
	
	function assign_t()
	
	{
		$this->load->view('header');
		$this->load->view('menu_teach');
		$this->load->view('Assign_t');
		$this->load->view('footer');
		
	}
	
	function post()
	{


		if(copy($_FILES["file_cre"]["tmp_name"],"./file_temp/".$_FILES["file_cre"]["name"]))
		{
		
			$fileUpload=$_FILES["file_cre"]["name"];
		}
		$file = $_FILES["file_cre"]["name"];
		$Question = $this->input->post('txtQuestion');
		$Details = $this->input->post('txtDetails');
		$Name = $this->input->post('txtName');
		
		$data = array(
				'CreateDate' => date("Y-m-d H:i:s"),
				'Question' => $Question,
				'Details' => $Details,
				'Name' => $Name,
				'file' => $file );
		
		if (empty($Question) || empty($Details) ||empty($Name) ) {
			print ('กรอกให้ครบ');}
			else {
		
				$sql = $this->db->insert('webboard',$data);
				$q = mysql_query($sql);
		
		
		
				?>
		<h1 align="center">	ตั้งหัวข้อเรียบร้อย!</h1>
		<p align="center"><a href="<?echo site_url();?>home/stu_index">Back</a></p>
		<?php }
		
	}
	
	
	



}





/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */