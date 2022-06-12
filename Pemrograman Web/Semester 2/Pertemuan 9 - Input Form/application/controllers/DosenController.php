,<?php

defined('BASEPATH') OR exit('No direct script access allowed.');

class DosenController extends CI_Controller {
	private $data = [];

	public function index() {
		$this->load->model('Dosen', 'dsn1');
		$this->dsn1->id = 1;
		$this->dsn1->nama = "Erlangga Riansyah";
		$this->dsn1->gender = 'L';
		$this->dsn1->nidn = 218938;
		$this->dsn1->pendidikan = 'S1 Teknik Nuklir';

		$this->load->model('Dosen', 'dsn2');
		$this->dsn2->id = 2;
		$this->dsn2->nama = "Diosdado Macapagal";
		$this->dsn2->gender = 'L';
		$this->dsn2->nidn = 1231238;
		$this->dsn2->pendidikan = 'S3 Matematika Murni';

		array_push($this->data, $this->dsn1);
		array_push($this->data, $this->dsn2);

		$list_dsn = $this->data;
		$data['list_dsn'] = $list_dsn;

		$this->load->view('dosen/index', $data);
	}

	public function create() {
		$this->load->view('dosen/create_form');
	}

	public function store() {
		$this->load->model('Dosen', 'dsn1');
		$this->dsn1->nama = $_POST['nama'];
		$this->dsn1->gender = $_POST['gender'];
		$this->dsn1->nidn = $_POST['nidn'];
		$this->dsn1->pendidikan = $_POST['pendidikan'];

		array_push($this->data, $this->dsn1);

		$list_dsn = $this->data;
		$data['list_dsn'] = $list_dsn;

		$this->load->view('dosen/index', $data);
	}
}
