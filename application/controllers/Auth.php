<?php


class Auth extends CI_Controller
{

	public function index(){
		$this->load->view('home');
	}

	public function register()
	{
		if($this->engage_auth->check()){
			return redirect('account');
		}

		$this->form_validation->set_rules(
			'username', 'Username',
			'required|min_length[5]|max_length[15]|is_unique[users.username]',
			array(
				'required'      => 'You have not provided %s.',
				'is_unique'     => 'This %s already exists.'
			)
		);
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',
			array('required' => 'You must provide a %s.')
		);
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('template', 'contents' , 'register');
		}
		else
		{
			$userData = array(
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'phone' => $this->input->post('phone')
			);
			$user = $this->db->insert('users', $userData);
			$this->session->set_flashdata('message','Data Inserted Successfully');
			$this->template->load('template', 'contents' , 'register');
		}
	}

	public function login(){
		if($this->engage_auth->check()){
			return redirect('account');
		}
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('identity', 'Email / Username', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('template', 'contents' , 'login');
		}
		else
		{
			$inputs = array(
				'identity' => $this->input->post('identity'),
				'password' => $this->input->post('password')
			);
			if($this->engage_auth->login($inputs)){
				return redirect('account');
			}else{
				$this->session->set_flashdata('message','Invalid login details');
			}

			$this->template->load('template', 'contents' , 'login');
		}
	}

	public function logout(){
		$this->engage_auth->logout();
		return redirect('login');
	}

	public function verify(){

	}


}
