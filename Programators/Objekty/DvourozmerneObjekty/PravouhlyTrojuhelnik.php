<?php
class PravouhlyTrojuhelnik
{
	private $stranaA;

	private $stranaB;
  
  private $stranaC;

	public function __construct($stranaA, $stranaB, $stranaC)
	{
		$this->stranaA = $stranaA;
		$this->stranaB = $stranaB;
    $this->stranaC = $stranaC;
	}



	public function ziskejObsah()
	{
		return $this->stranaA * $this->stranaB/2;
	}
}