<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {

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


	public function index()
	{
$user = $this->session->userdata('user');
$this->load->helper('file');

$path = './User_data/$user';

$files = get_dir_file_info ('./User_data/$user',$top_level_only = TRUE);
foreach ($files as $f )
{
	print $f['name'];
}
}
}
?>