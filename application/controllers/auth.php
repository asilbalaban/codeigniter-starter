<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auth extends Public_Controller {

	private $_needLogin = array('index', 'create', 'store', 'edit', 'update', 'destroy');
	private $_needAdmin = array('index', 'create', 'store', 'edit', 'update', 'destroy');


	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');

		if (in_array($this->method, $this->_needLogin)) {
			if ($this->isLogin() !== true) {
				redirect(base_url('auth/login'));
			}
		}

		if (in_array($this->method, $this->_needAdmin)) {
			if ($this->isAdmin() !== true) {
				exit(lang('Auth002'));
			}
		}
	}

	public function login()
	{
		if ($this->isLogin() == true) {
			redirect(base_url('admin/dashboard'));
		} else {
			$this->blade->render('backend/auth/login');
		}
	}

	public function authenticate()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$user = $this->auth_model->authenticate($username, $password);
		if ($user !== false) {
			$this->session->set_userdata('login', true);
			$this->session->set_userdata('userId', $user->id);
			$this->session->set_userdata('username', $user->username);
			$this->session->set_userdata('userLevel', $user->level);

			redirect(base_url('admin/dashboard'));
		} else {
			$this->session->set_flashdata('message', array('type' => 'error', 'code' => 'Auth001'));
			redirect(base_url('auth/login'));
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('userId');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('userLevel');

		redirect(base_url());
	}

	// list users
	public function index()
	{
		$data['users'] = $this->auth_model->all();
		$this->blade->render('backend/auth/index', $data);
	}

	// load create user view
	public function create()
	{
		$this->blade->render('backend/auth/create');
	}

	// save new user to db
	public function store()
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));
		$data['level']	  = $this->input->post('level');

		$save = $this->db->insert('users', $data);
		redirect(base_url('admin/user'));
	}

	// load edit user view
	public function edit($id)
	{
		$data['user'] = $this->auth_model->get_by_id($id);
		$this->blade->render('backend/auth/edit', $data);
	}

	// save edited user to db
	public function update($id)
	{
		$data['username'] = $this->input->post('username');

		$password = $this->input->post('password');
		if (!empty($password)) {
			$data['password'] = md5($this->input->post('password'));
		}

		$data['level']	  = $this->input->post('level');

		$this->db->where('id', $id);
		$save = $this->db->update('users', $data);
		redirect(base_url('admin/user'));
	}

	// save edited user to db
	public function destroy($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');
		redirect(base_url('admin/user'));
	}



}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */