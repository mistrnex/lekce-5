<?php
class Kruh
{
	private $polomer;

	public function __construct($polomer)
	{
		$this->polomer = $polomer;
		
	}


	public function ziskejObsah()
	{
		return pi()*$this->polomer * $this->polomer;
	}
}