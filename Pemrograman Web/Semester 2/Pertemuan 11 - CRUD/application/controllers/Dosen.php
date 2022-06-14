<?php

defined('BASEPATH') OR exit ('No direct script access allowed.');

class Dosen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dosen_model');
		$this->load->library('form_validation');
	}

	public function index() {
		$data['dosen'] = $this->dosen_model->getAll();
		$this->load->view('dosen/list', $data);
	}

	public function add() {
		$dosen = $this->dosen_model;
		$validation = $this->form_validation;
		$validation->set_rules($dosen->rules());

		if ($validation->run()) {
			$dosen->save();
			$this->session->set_flashdata('success', 'data berhasil ditambahkan');
		}

		$this->load->view('dosen/new_form');
	}

	public function edit($nidn = null) {
		if (!isset($nidn)) redirect('dosen/list');

		$dosen = $this->dosen_model;

		$data['dosen'] = $dosen->getByNidn($nidn);
		if (!$data['dosen']) show_404();

		$this->load->view('dosen/edit_form', $data);
	}

	public function delete($nidn = null) {
		if (!isset($nidn)) show_404();

		if ($this->dosen_model->delete($nidn)) {
			$data['dosen'] = $this->dosen_model->getAll();
			$this->load->view('dosen/list', $data);
		}
	}

	public function save($nidn = null) {
		$data['dosen'] = $this->dosen_model->getAll();
		if (!isset($nidn)) $this->load->view('dosen/list', $data);

		$data = array(
			'nama' => $_POST['nama'],
			'gender' => $_POST['gender'],
			'tgl_lahir' => $_POST['tgl_lahir'],
			'tmp_lahir' => $_POST['tmp_lahir'],
			'pendidikan_akhir' => $_POST['pendidikan_akhir'],
			'prodi_kode' => $_POST['prodi_kode']
		);

		$where = array(
			'nidn' => $_POST['nidn']
		);

		$this->dosen_model->update_data($where, $data, 'dosen');

		$data['dosen'] = $this->dosen_model->getAll();
		$this->load->view('dosen/list', $data);
	}
}
