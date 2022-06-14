<?php

defined('BASEPATH') OR exit('No direct script access allowed.');

class Dosen_model extends CI_Model {
	private $_table = 'dosen';

	public $nidn;
	public $nama;
	public $gender;
	public $tgl_lahir;
	public $tmp_lahir;
	public $pendidikan_akhir;
	public $prodi_kode;

	public function rules() {
		return array(
			array(
				'field' => 'nidn',
				'label' => 'nidn',
				'rules' => 'required'
			),
			array(
				'field' => 'nama',
				'label' => 'nama',
				'rules' => 'required'
			)
		);
	}

	public function getAll() {
		return $this->db->get($this->_table)->result();
	}

	public function getByNidn($nidn) {
		return $this->db->get_where($this->_table, array('nidn' => $nidn))->row();
	}

	public function save() {
		$post = $this->input->post();
		$this->nidn = $post['nidn'];
		$this->nama = $post['nama'];
		$this->gender = $post['gender'];
		$this->tgl_lahir = $post['tgl_lahir'];
		$this->tmp_lahir = $post['tmp_lahir'];
		$this->pendidikan_akhir = $post['pendidikan_akhir'];
		$this->prodi_kode = $post['prodi_kode'];

		return $this->db->insert($this->_table, $this);
	}

	public function update() {
		$post = $this->input->post();
		$this->nidn = $post['nidn'];
		$this->nama = $post['nama'];
		$this->gender = $post['gender'];
		$this->tgl_lahir = $post['tgl_lahir'];
		$this->tmp_lahir = $post['tmp_lahir'];
		$this->pendidikan_akhir = $post['pendidikan_akhir'];
		$this->prodi_kode = $post['prodi_kode'];

		return $this->db->update($this->_table, $this);
	}

	public function delete($nidn) {
		return $this->db->delete($this->_table, array('nidn' => $nidn));
	}

	public function update_data($where, $data, $table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
