<?php

class DosenMatkul extends CI_Model {
	public $semester;
	public $dosen;
	public $matakuliah;
	public $hari;
	public $ruangan;

	/**
	 * @param $semester
	 * @param $hari
	 * @param $ruangan
	 */
	public function __construct($semester, $hari, $ruangan)
	{
		$this->semester = $semester;
		$this->dosen = new Dosen();
		$this->matakuliah = new Matkul();
		$this->hari = $hari;
		$this->ruangan = $ruangan;
	}
}
