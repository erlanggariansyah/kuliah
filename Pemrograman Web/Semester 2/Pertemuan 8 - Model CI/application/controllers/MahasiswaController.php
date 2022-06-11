<?php

defined('BASEPATH') OR exit('No direct script access allowed.');

class MahasiswaController extends CI_Controller {
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

		$list_mhs = [$this->mhs1, $this->mhs2];
		$data['list_mhs'] = $list_mhs;

		$this->load->view('mahasiswa/index', $data);
	}
}
