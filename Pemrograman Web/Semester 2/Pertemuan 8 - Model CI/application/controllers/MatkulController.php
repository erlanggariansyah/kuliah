<?php

class MatkulController extends CI_Controller {
	public function index() {
		$this->load->model('Matkul', 'mtkl1');
		$this->mtkl1->nama = 'Bahasa Inggris';
		$this->mtkl1->sks = '2';
		$this->mtkl1->kode = '91821';

		$this->load->model('Matkul', 'mtkl2');
		$this->mtkl2->nama = 'Matematika';
		$this->mtkl2->sks = '3';
		$this->mtkl2->kode = '21821';

		$list_mtkl = [$this->mtkl1, $this->mtkl2];
		$data['list_mtkl'] = $list_mtkl;

		$this->load->view('matkul/index', $data);
	}
}
