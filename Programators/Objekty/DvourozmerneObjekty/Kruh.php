<?php
class Kruh implements DvourozmernyObrazec
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