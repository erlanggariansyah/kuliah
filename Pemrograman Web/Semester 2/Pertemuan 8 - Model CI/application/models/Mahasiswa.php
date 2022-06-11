<?php

include_once "application/models/Person.php";

class Mahasiswa extends Person {
	public $nim;
	public $ipk;

	public function predikat() {
		$predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
		return $predikat;
	}

	/**
	 * @return mixed
	 */
	public function getIpk()
	{
		return $this->ipk;
	}

	/**
	 * @param mixed $ipk
	 */
	public function setIpk($ipk)
	{
		$this->ipk = $ipk;
	}
}
