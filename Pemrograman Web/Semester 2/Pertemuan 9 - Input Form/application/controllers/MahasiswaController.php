<?php

defined('BASEPATH') OR exit('No direct script access allowed.');

class MahasiswaController extends CI_Controller {
	private $data = [];

	public function index() {
		$this->load->model('Mahasiswa', 'mhs1');
		$this->mhs1->id = 1;
		$this->mhs1->nim = 209302903;
		$this->mhs1->nama = "Erlangga Riansyah";
		$this->mhs1->gender = 'L';
		$this->mhs1->ipk = 3.84;

		$this->load->model('Mahasiswa', 'mhs2');
		$this->mhs2->id = 2;
		$this->mhs2->nim = 309302903;
		$this->mhs2->nama = "San Fransisco";
		$this->mhs2->gender = 'L';
		$this->mhs2->ipk = 2.49;

		array_push($this->data, $this->mhs1);
		array_push($this->data, $this->mhs2);

		$list_mhs = $this->data;
		$data['list_mhs'] = $list_mhs;

		$this->load->view('mahasiswa/index', $data);
	}

	public function create() {
		$this->load->view('mahasiswa/create_form');
	}

	public function store() {
		$this->load->model('Mahasiswa', 'mhs1');
		$this->mhs1->nim = $_POST['nim'];
		$this->mhs1->nama = $_POST['nama'];
		$this->mhs1->gender = $_POST['gender'];
		$this->mhs1->ipk = $_POST['ipk'];

		array_push($this->data, $this->mhs1);

		$list_mhs = $this->data;
		$data['list_mhs'] = $list_mhs;

		$this->load->view('mahasiswa/index', $data);
	}
}
