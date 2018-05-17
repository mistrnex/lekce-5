<?php
class Mnohouhelnik
{
	private $delkaStrany;

	private $pocetUhlu;
  
 

	public function __construct($delkaStrany, $pocetUhlu)
	{
		$this->delkaStrany = $delkaStrany;
		$this->pocetUhlu = $pocetUhlu;
   
	}



	public function ziskejObsah()
	{
		return $this->pocetUhlu*$this->delkaStrany * $this->delkaStrany/4*(1/tan(deg2rad(180/$this->pocetUhlu)));
	}
}