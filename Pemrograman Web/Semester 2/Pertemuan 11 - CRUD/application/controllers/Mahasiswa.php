<?php

defined('BASEPATH') OR exit('No direct script access allowed.');

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['mahasiswa'] = $this->mahasiswa_model->getAll();
		return $this->load->view('mahasiswa/list', $data);
	}

	public function add() {
		$mahasiswa = $this->mahasiswa_model;
		$validation = $this->form_validation;
		$validation->set_rules($mahasiswa->rules());

		if ($validation->run()) {
			$mahasiswa->save();
		}

		$this->load->view('mahasiswa/new_form');
	}

	public function edit($nim = null) {
		if (!isset($nim)) redirect('mahasiswa/list');

		$mahasiswa = $this->mahasiswa_model;
		$data['mahasiswa'] = $mahasiswa->getByNim($nim);

		$this->load->view('mahasiswa/edit_form', $data);
	}

	public function save($nim = null) {
		$data['mahasiswa'] = $this->mahasiswa_model->getAll();
		if (!isset($nim)) $this->load->view('mahasiswa/list', $data);

		$data = array(
			'nama' => $_POST['nama'],
			'gender' => $_POST['gender'],
			'tgl_lahir' => $_POST['tgl_lahir'],
			'tmp_lahir' => $_POST['tmp_lahir'],
			'ipk' => $_POST['ipk'],
			'prodi_kode' => $_POST['prodi_kode']
		);

		$where = array(
			'nim' => $_POST['nim']
		);

		$this->mahasiswa_model->update_data($where, $data);
		$data['dosen'] = $this->mahasiswa_model->getAll();
		$this->load->view('mahasiswa/list', $data);
	}

	public function delete($nim = null) {
		if (!isset($nim)) show_404();

		if ($this->mahasiswa_model->delete($nim)) {
			$data['mahasiswa'] = $this->mahasiswa_model->getAll();
			$this->load->view('mahasiswa/list', $data);
		}
	}
}
