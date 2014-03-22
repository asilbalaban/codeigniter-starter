<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
	public function __construct ()
	{
		parent::__construct();
		$this->controller =& get_instance();
		$this->class = $this->controller->router->fetch_class();		
		$this->method = $this->controller->router->fetch_method();		
	}

	public function isLogin()
	{
		if ($this->session->userdata('login') == null) {
			return false;
		} else {
			return true;
		}
	}

	public function isAdmin()
	{
		if ($this->session->userdata('userLevel') != 1) {
			return false;
		} else {
			return true;
		}
	}
}

class Public_Controller extends MY_Controller
{
	public function __construct ()
	{
		parent::__construct();
	}
}


class Admin_Controller extends MY_Controller
{
	public function __construct ()
	{
		parent::__construct();
	}

	public function isLogin()
	{
		if ($this->session->userdata('login') == null) {
			return false;
		}
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */