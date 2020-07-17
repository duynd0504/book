<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$arr = array('sv01' =>'Viet' , 'sv02' =>'Viet2','sv03' =>'Viet3' );
		//echo $arr['sv01'];
		//de duyet mang dung vong lap foreach
		foreach ($arr as $key => $value) {
			echo "<pre>"; 
			echo "Key:".$key; 
			echo "<pre>";
			echo "<pre>"; 
			echo "value:".$value; 
			echo "<pre>"; 	

		}
	}

}

/* End of file mang.php */
/* Location: ./application/controllers/mang.php */