<?php

defined('BASEPATH') or exit('No direct script access allowed.');

class Prodi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('prodi_model');
		$this->load->library('form_validation');
	}

	public function index() {
		$data['prodi'] = $this->prodi_model->getAll();
		$this->load->view('prodi/list', $data);
	}

	public function add() {
		$prodi = $this->prodi_model;
		$validation = $this->form_validation;
		$validation->set_rules($prodi->rules());

		if ($validation->run()) {
			$prodi->save();
		}

		$this->load->view('prodi/new_form');
	}

	public function edit($kode = null) {
		if (!isset($kode)) redirect('prodi/list');

		$prodi = $this->prodi_model;

		$data['prodi'] = $prodi->getByKode($kode);
		if (!$data['prodi']) show_404();

		$this->load->view('prodi/edit_form', $data);
	}

	public function delete($kode = null) {
		if (!isset($kode)) show_404();

		if ($this->prodi_model->delete($kode)) {
			$data['prodi'] = $this->prodi_model->getAll();
			$this->load->view('prodi/list', $data);
		}
	}

	public function save($kode = null) {
		$data['prodi'] = $this->prodi_model->getAll();
		if (!isset($kode)) $this->load->view('prodi/list', $data);

		$data = array(
			'nama' => $_POST['nama'],
			'kaprodi' => $_POST['kaprodi']
		);

		$where = array(
			'kode' => $_POST['kode']
		);

		$this->prodi_model->update_data($where, $data);
		$data['prodi'] = $this->prodi_model->getAll();
		$this->load->view('prodi/list', $data);
	}
}
