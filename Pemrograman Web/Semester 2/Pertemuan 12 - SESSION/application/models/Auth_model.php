<?php

defined('BASEPATH') or exit('No direct script access allowed.');

class Auth_model extends CI_Model {
	private $_table = 'user';

	const SESSION_KEY = 'user_id';

	public function rules() {
		return array(
			array(
				'field' => 'username',
				'label' => 'username',
				'rules' => 'required'
			),
			array(
				'field' => 'password',
				'label' => 'password',
				'rules' => 'required'
			)
		);
	}

	public function login($username, $password) {
		$this->db->where('email', $username)->or_where('username', $username);
		$query = $this->db->get($this->_table);
		$user = $query->row();

		if (!$user) return false;
		if (!password_verify($password, $user->password)) return false;

		$this->session->set_userdata(array(self::SESSION_KEY => $user->id));
		$this->_update_last_login($user->id);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user() {
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, array('id' => $user_id));
		return $query->row();
	}

	public function logout() {
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

	public function _update_last_login($id) {
		$data = array(
			'last_login' => date('Y-m-d H:i:s')
		);

		return $this->db->update($this->_table, $data, array('id' => $id));
	}

	public function insert($data) {
		$this->db->insert($this->_table, $data);
	}
}
