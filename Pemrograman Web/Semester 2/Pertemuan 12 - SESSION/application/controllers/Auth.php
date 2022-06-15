<?php

defined('BASEPATH') or exit('No direct script access allowed.');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index() {
		show_404();
	}

	public function login() {
		$this->load->model('auth_model');
		$this->load->library('form_validation');

		$rules = $this->auth_model->rules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == false) {
			return $this->load->view('login_form');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($this->auth_model->login($username, $password)) {
			$this->load->view('admin');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login gagal!');
		}

		$this->load->view('login_form');
	}

	public function logout() {
		$this->load->model('auth_model');
		$this->auth_model->logout();
		redirect(site_url());
	}

	public function register() {
		$this->load->view('register_form');
	}

	public function save() {
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
			'role' => 1
		);

		$this->auth_model->insert($data);
	}
}
