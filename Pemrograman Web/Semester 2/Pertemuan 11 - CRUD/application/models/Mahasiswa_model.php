<?php

defined('BASEPATH') OR exit('No direct script access allowed.');

class Mahasiswa_model extends CI_Model {
	private $_table = 'mahasiswa';

	public $nim;
	public $nama;
	public $gender;
	public $tmp_lahir;
	public $tgl_lahir;
	public $ipk;
	public $prodi_kode;

	public function rules() {
		return array(
			array(
				'field' => 'nim',
				'label' => 'nim',
				'rules' => 'required'
			)
		);
	}

	public function getAll() {
		return $this->db->get($this->_table)->result();
	}

	public function getByNim($nim) {
		return $this->db->get_where($this->_table, array('nim' => $nim))->row();
	}

	public function save() {
		$post = $this->input->post();
		$this->nim = $post['nim'];
		$this->nama = $post['nama'];
		$this->gender = $post['gender'];
		$this->tmp_lahir = $post['tmp_lahir'];
		$this->tgl_lahir = $post['tgl_lahir'];
		$this->ipk = $post['ipk'];
		$this->prodi_kode = $post['prodi_kode'];

		return $this->db->insert($this->_table, $this);
	}

	public function delete($nim) {
		return $this->db->delete($this->_table, array('nim' => $nim));
	}

	public function update_data($where, $data) {
		$this->db->where($where);
		$this->db->update($this->_table, $data);
	}
}
