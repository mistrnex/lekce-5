<?php
class Obdelnik
{
	private $stranaA;

	private $stranaB;

	public function __construct($stranaA, $stranaB)
	{
		$this->stranaA = $stranaA;
		$this->stranaB = $stranaB;
	}

	public function ziskejStranuA()
	{
		return $this->stranaA;
	}

	public function ziskejStranuB()
	{
		return $this->stranaB;
	}

	public function ziskejObsah()
	{
		return $this->stranaA * $this->stranaB;
	}
}