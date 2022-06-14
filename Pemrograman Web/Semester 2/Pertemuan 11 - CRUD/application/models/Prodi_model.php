<?php

defined('BASEPATH') or exit('No direct script access allowed.');

class Prodi_model extends CI_Model {
	private $_table = 'prodi';

	public $kode;
	public $nama;
	public $kaprodi;

	public function rules() {
		return array(
			array(
				'field' => 'kode',
				'label' => 'kode',
				'rules' => 'required'
			)
		);
	}

	public function getAll() {
		return $this->db->get($this->_table)->result();
	}

	public function getByKode($kode) {
		return $this->db->get_where($this->_table, array('kode' => $kode))->row();
	}

	public function save() {
		$post = $this->input->post();
		$this->kode = $post['kode'];
		$this->nama = $post['nama'];
		$this->kaprodi = $post['kaprodi'];

		return $this->db->insert($this->_table, $this);
	}

	public function update() {
		$this->kode = $this->input->post()->kode;
		$this->nama = $this->input->post()->nama;
		$this->kaprodi = $this->input->post()->kaprodi;

		return $this->db->update($this->_table, $this);
	}

	public function delete($nim) {
		return $this->db->delete($this->_table, array('kode' => $nim));
	}

	public function update_data($where, $data) {
		$this->db->where($where);
		$this->db->update($this->_table, $data);
	}
}
