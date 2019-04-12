<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('home_model');

    	if($this->session->userdata('logged_in') === TRUE)
    	{
    		$remove_space = str_replace(' ', '', $this->session->userdata('nama_role'));

      		redirect('Page/'.$remove_space);
		}
		
  	}
 

	public function index()
	{	$status = (isset($_GET['status']) AND trim($_GET['status'])!='')?$_GET['status']:200;
        $msg = (isset($_GET['msg']) AND trim($_GET['msg'])!='')?base64_decode($_GET['msg']):'';
		
		$data['status'] = $status;
		$data['msg'] = $msg;
		
		$this->load->view('Home/login',$data);
	}

	function auth()
	{
    	$username = $this->input->post('username',TRUE);
    	$password = $this->input->post('password',TRUE);
    	$validate_user = $this->home_model->validate_user($username,$password);

    	if($validate_user->num_rows() > 0)
	    {
			$status = 200;
			$msg = 'success';
			
	        $data_user  = $validate_user->row_array();
			$username  = $data_user['username'];
			$nama_pegawai = $data_user['nama_pegawai'];
			$id_role = $data_user['id_role'];

	        $validate_user_role = $this->home_model->validate_user_role($id_role);

	        $data_user_role = $validate_user_role->row_array();
			$user_role = $data_user_role['nama_role'];

	        $sesdata = array(
				'username'  => $username,
				'nama_pegawai' => $nama_pegawai,
	            'id_role'     => $id_role,
	            'nama_role' => $user_role,
	            'logged_in' => TRUE
	        );

	        $this->session->set_userdata($sesdata);

			$remove_space = str_replace(' ', '', $user_role);
			
	        redirect('Page/'.$remove_space);


	        
    	}
    	else
    	{
			$status = 500;
			$msg = base64_encode('Invalid username or password');

			redirect(base_url().'Home?status='.$status.'&msg='.$msg);
		}
  	}

	function invalid()
	{
		echo "compiled ";
	}
}
