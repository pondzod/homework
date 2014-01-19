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


	public function index($id)
{
	
	$user = $this->session->userdata('user');
	
	$this->load->view('header');
	$this->load->view('menu');
	$sqlcheck = "SELECT * FROM `group_user` WHERE `GroupID` = '$id' AND `Username` ='$user'";
	$query6 = $this->db->query($sqlcheck)->result();
	if (empty($query6))
	{
	
		
		$this->load->view('group_content');
	}
	else {
	
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
	
	
	

	$sql5= "SELECT * FROM webboard	 WHERE Group_ID =  '$id' ";
	$query2 = $this->db->query($sql5)->result();
	
	$sql3= "SELECT * FROM reply WHERE QuestionID ";
	$query5 = $this->db->query($sql3)->result();
	
	$data["q5"] = $query5;
	
	$data["q2"] =$query2 ;
	$data["q3"] = $id;

	$this->load->view('group_content',$data);
	
	}
		$this->load->view('footer');
}
function  join(){
	$user = $this->session->userdata('user');
	$key = $this->input->post('keygroup');
	$sql= "SELECT *  FROM  `group_detail` WHERE  `Key` =  '$key'";
	$q2 = mysql_query($sql);
  	$res2 = mysql_fetch_array($q2);
	if($res2["Key"] != NULL)
	{
		
		$data  = array(
				'Username' => $user,
				'GroupID' => $res2['Group_ID']
		);
		$sql = $this->db->insert('group_user',$data);
		
		?><a href="<?echo site_url();?>group/index/<?php echo$res2["Group_ID"] ?>">เข้าร่วมกลุ่มเสร็จสิ้น</a>
<?php }
else 
{
	print ('Key ของคุณไม่ถูกต้อง');
	
}

}
}
?>

