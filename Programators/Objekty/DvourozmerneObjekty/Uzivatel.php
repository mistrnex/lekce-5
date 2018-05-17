<?php
class Uzivatel
{
 
  private $jmeno;
	private $prijmeni;
  private $datumNarozeni;
	private $posledniPrihlaseni;
  
  public function __construct($jmeno, $prijmeni, $datumNarozeni, $posledniPrihlaseni)
{
		$this->jmeno = $jmeno;
		$this->prijmeni = $prijmeni;
    $this->datumNarozeni = $datumNarozeni;
		$this->posledniPrihlaseni = $posledniPrihlaseni;
	}
	public function VekUzivatele()
	{
		return $this->;
	}
	public function PosledniPrihlaseni()
	{
		return $this->;
	}

  

}







  