<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertU($f,$u,$p,$e)
	{
		$dulieu = array('full_name' => $f ,'user_name' => $u,'pass_word' => $p, 'email'=> $e);
		$this->db->insert('users', $dulieu);
		return $this->db->insert_id(); //tra ve mot gia tri chinh la id cua phan tu do 
	}

}

/* End of file UserModel.php */
/* Location: ./application/models/UserModel.php */