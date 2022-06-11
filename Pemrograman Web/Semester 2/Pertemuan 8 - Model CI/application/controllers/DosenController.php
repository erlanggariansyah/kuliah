,<?php

defined('BASEPATH') OR exit('No direct script access allowed.');

class DosenController extends CI_Controller {
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

		$list_dsn = [$this->dsn1, $this->dsn2];
		$data['list_dsn'] = $list_dsn;

		$this->load->view('dosen/index', $data);
	}
}
