<?php
class Jehlan implements TrojrozmernyObrazec
{
	private $strana;
	
  
	public function __construct($strana)
	{
		
		$this->strana = $strana;
  
	}
	public function ziskejObjem()
	{
		return $this->strana*$this->strana*$this->strana*(sqrt(2)/12);
	}
	
	public function ziskejPovrch()
	{
		return $this->strana*$this->strana*sqrt(3);
	}
}