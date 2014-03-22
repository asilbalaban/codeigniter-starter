<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Go extends Public_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->dashboard();
	}

	public function dashboard()
	{
		redirect(base_url('admin/user'));
	}



}

/* End of file go.php */
/* Location: ./application/controllers/go.php */