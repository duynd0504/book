<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//echo "Nguyen Dinh Duy";
		$this->load->view('user');
		
	}
	public function insertUser(){
		//lay du lieu tu view gan vao bien 
		$fname = $this->input->post('full'); 
		$uname = $this->input->post('user');
		$pass  = $this->input->post('pass');
		$email = $this->input->post('email');
		$this->load->model('UserModel');
		if($this->UserModel->insertU($fname,$uname,$pass,$email)){
			echo "Thêm Thành Công !!!!";
		}else
		{
			echo "Lỗi!!";
		}
		// truyen du lieu vao model
	


	}

}

/* End of file UserController.php */
/* Location: ./application/controllers/UserController.php */